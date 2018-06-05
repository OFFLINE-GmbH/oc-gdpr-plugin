# oc-gdpr-plugin
October CMS plugin to make websites GDPR compliant.

* [Cookie consent](#cookie-consent)
* [Data retention](#data-retention)

## Cookie consent

This plugin provides an easy integration of [Klaro! A Simple Consent Manager](https://github.com/KIProtect/klaro). 

The Klaro! Consent Manager displays a GDPR compliant cookie message and allows the customization of the 
usage of third-party applications by a website visitor.

![Klaro PopUp](https://i.imgur.com/n74yA20.png)

All Klaro! settings can be managed via October's backend.

Information on how to use Klaro! can be found on the official website
[https://klaro.kiprotect.com/](https://klaro.kiprotect.com/). 

### Configuration

You can configure all Klaro! settings via the October CMS backend settings. 

If you are more of a code person you can overwrite the `config.js` partial
via your theme and use your own configuration file instead.

If you only want to define your applications manually you can overwrite the `apps.js` partial via your theme.

A configuration example is availabe at
[https://klaro.kiprotect.com/config.js](https://klaro.kiprotect.com/config.js).


#### Translations

You can add custom translation strings via the backend settings page. Create a new translation, give it a 2-char 
language code (ex. `de`, `en`) and paste and modify the following json code into the code editor:

```js
{
    consentModal: {
        description: 'Hier können Sie einsehen und anpassen, welche Information wir über Sie sammeln. Einträge die als "Beispiel" gekennzeichnet sind dienen lediglich zu Demonstrationszwecken und werden nicht wirklich verwendet.',
    },
    inlineTracker: {
        description: 'Beispiel für ein Inline-Tracking Skript',
    },
    externalTracker: {
        description: 'Beispiel für ein externes Tracking Skript',
    },
    adsense: {
        description: 'Anzeigen von Werbeanzeigen (Beispiel)',
    },
    matomo: {
        description: 'Sammeln von Besucherstatistiken',
    },
    camera: {
        description: 'Eine Ãœberwachungskamera (nur ein Beispiel zu IMG-Tags)',
    },
    cloudflare: {
        description: 'Schutz gegen DDoS-Angriffe',
    },
    intercom: {
        description: 'Chat Widget & Sammeln von Besucherstatistiken (nur ein Beispiel)',
    },
    mouseflow: {
        description: 'Echtzeit-Benutzeranalyse (nur ein Beispiel)',
    },
    purposes: {
        analytics: 'Besucher-Statistiken',
        security: 'Sicherheit',
        livechat: 'Live Chat',
        advertising: 'Anzeigen von Werbung',
    }
}
```

You can find all possible translation keys in [Klaro's example config file](https://klaro.kiprotect.com/config.js).

### `consentManager` component

Place this component on your layout, page or partial to display the Klaro! Consent Manager.

```twig
{% component 'consentManager' %}
```

#### Properties

#### `include_assets`

Enable this option to automatically include the klaro.js file.
You can disable this option if you want to take full control over how the script is included.

#### `style_prefix`

Define a custom css class to be used in the Klaro! HTML markup. If this option is set all default styles will be 
removed completely. 

## Data retention

The data retention functionality enables you to delete old plugin data after a specified amount of days.

You can specify the data retention policy for each plugin via October's backend settings.

> **Important**: To automatically delete old data [make sure you have set up the Task Scheduler](http://octobercms.com/docs/setup/installation#crontab-setup) correctly.

### Register your plugin

To register your plugin you have to listen for the `offline.gdpr::cleanup.register` event in your Plugin's boot method.

```php
    public function boot()
    {
        \Event::listen('offline.gdpr::cleanup.register', function () {
            return [
                'id'     => 'your-contact-form-plugin',
                'label'  => 'Custom Contact Form Plugin',
                'models' => [
                    [
                        'label'   => 'Contact form messages',
                        'comment' => 'Delete logged contact form messages',
                        'class'   => MessageLog::class,
                    ],
                    [
                        'label'   => 'SPAM-Messages',
                        'comment' => 'Delete blocked SPAM messages',
                        'closure'     => function (Carbon $deadline, int $keepDays) {
                            // Delete your old data here
                        },
                    ],
                ],
            ];
        });
    }
```

You have to specify the following data:

|  key | information  |   
|---|---|
| id  | A unique identifier of your plugin   |
| label  | A human readable label for your plugin   |
| models  | An array of all your data collecting models |

As `models` you have to specify an array with the following data:

|  key | information  |   
|---|---|
| label  | A human readable label for the backend switch form widget |
| comment  | A human readable comment for the backend switch form widget   |
| closure  | A closure that is called when the cleanup job is run  |
| class  | A model class that defines a `gdprCleanup` method |


You have to specify either a `closure` or a `class` value. If both are specified the `closure` value will be used.

#### Cleanup method

You can either specify a `closure` or a model class that defines a `gdprCleanup` method. Both have the same 
signature:

```php
    public function gdprCleanup(Carbon $deadline, int $keepDays)
    {
        self::where('created_at', '<', $deadline)->each(function (self $item) {
            $item->delete();
        });
        // or
        // self::where('created_at', '<', $deadline)->delete();
    }
```

This method is called whenever the cleanup job is run. `$deadline` contains a `Carbon` instance.
All data older than this date has to be deleted. `$keepDays` contains the number of days
that `$deadline` is in the past.

Make sure to use an `each/delete` loop if your model makes use of `deleting/deleted` model events.

#### Cleanup command

You can trigger the cleanup on demand via 

> php artisan gdpr:cleanup