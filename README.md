# oc-gdpr-plugin
October CMS plugin to make websites GDPR compliant.

This plugin is available on the October Marketplace: https://octobercms.com/plugin/offline-gdpr

## Features

* [Cookie Consent Manager](#cookie-consent-manager)
* [Data retention](#data-retention)
* [Klaro! Consent Manager](#klaro-consent-manager)

## Cookie Consent Manager

This plugin provides two simple components to make your October installation GDPR compliant.

![cookie-manager](https://user-images.githubusercontent.com/8600029/41364223-5c58a548-6f36-11e8-9279-2e04217fe645.gif)


### Quick start

1. Define your cookie groups and cookies via the backend settings page.
1. Place the `cookieManager` component on a `cookies.htm` page
1. Place the `cookieBanner` component on all of your layouts. Use the configuration listed below.

```ini
[cookieBanner]
include_css = 1
hard_reload = 0
ignore_behaviour = "nothing"
update_partial = "gdpr"
update_selector = "#gdpr-reload"
cookie_manager_page = "cookies"
==
{% component 'cookieBanner' %}
```

1. Create a new `gdpr.htm` partial. Include the partial in your layouts as shown below. Note the `#gdpr-reload` 
wrapper.

```twig
<div id="gdpr-reload">
    {% partial 'gdpr' %}
</div>
```

1. Inside your `gdpr.htm` partial you can now conditionally include your dependencies by querying the cookie's `code`.

```twig
{% if gdprCookieAllowed('google-analytics') %}
    <!-- Include analytics code here -->
{% endif %}
```

### cookieBanner

![image](https://user-images.githubusercontent.com/8600029/41365745-803f0ce6-6f3a-11e8-93ff-7dc0f683e241.png)

The `cookieBanner` component displays a cookie banner on the first page view. There the user has the possibility to 
enable and disable cookies that your website uses (defined via October's backend settings).

These settings are stored and made available in your partials using the `gdprCookieAllowed` helper. With this helper 
you can check for the user's consent and optionally include your resources.

#### Installation

1. Define your cookie groups and cookies via the Backend settings
1. Add the `cookieBanner` component to all your **layouts**.

```
[cookieBanner]
include_css = 1
hard_reload = 0
ignore_behaviour = "nothing"
update_partial = "gdpr"
update_selector = "#gdpr-reload"
cookie_manager_page = "cookies"
==
{% component 'cookieBanner' %}
```

#### Properties

If you don't want to include the default css use `include_css = 0` when including your component.

##### `cookieManager` page

Set the property `cookie_manager_page` to the page that contains the `cookieManager` component. 

A `Advanced Settings` link will be placed on the `cookieBar` that links to this page. This enables the user to 
further define what cookies are allowed.

##### Hard vs. soft reload

If the user accepts some cookies you have two options to proceed:

1. Enable the option `hard_reload` to fully refresh the page. This is the easiest way to load your dependencies after
 the user made his decision.
 1. Disable the option `hard_reload` and provide a `update_partial` and `update_selector`. If the user makes a 
 decision your partial will be loaded into the element defined by your selector.
 
 ```
 [cookieBanner]
include_css = 1
hard_reload = 0
ignore_behaviour = "nothing"
update_selector = "#gdpr-reload"
update_partial = "gdpr"
==
<div id="gdpr-reload">
    {% partial 'gdpr' %}
</div>    
```

And in your `gdpr` partial you can use:

```twig
{% if gdprCookieAllowed('google-analytics') %}
    <!-- Include Analytics Code here -->
{% endif %}
```

##### Ignore behaviour

There are three options available to be used as `ignore_behaviour`:

|  Value | Behaviour |
|---|---|
| nothing | (Default) Do nothing. Show the banner again on subsequent page views.   |
| opt-in  | Hide the banner on the second page view and enable all default cookies.   |
| opt-out  | Hide the banner on the second page view. Don't enable any cookies. |


#### Twig Helpers

##### `gdprCookieAllowed($code, $minLevel = 0)`

Check if a certain cookie is allowed to be included. You can optionally pass a cookie level to check if the user has 
accepted a specific level of this cookie.

```twig
{% if gdprCookieAllowed('google-analytics') %}
    <!-- Include Analytics Code here -->
{% endif %}

{% if gdprCookieAllowed('google-analytics', 3) %}
    <!-- Include advanced Level 3 Analytics Code here -->
{% endif %}
```

##### `gdprAllowedCookieLevel($code)`

Get the max allowed level for a certain cookie. A return value of `-1` means the cookie is not allowed at all. A 
value of `0` or higher means the cookie is allowed with the returned level value. 

```twig
{% if gdprAllowedCookieLevel('google-analytics') >= 3 %}
    <!-- Include advanced Level 3 Analytics Code here -->
{% endif %}
```

##### `gdprIsUndecied()`

Check if the user has made a decision about the cookies yet. This will return `true` on the second page view if the 
user did not interact with the `cookieBanner` (silent opt-in).

### Cookie manager

The `cookieManager` component gives a visitor more control over the cookies your site is using. 

This component can simply be placed on a page and needs no further configuration.  

```twig
title = "Cookies"
url = "/cookies"
layout = "default"
is_hidden = 0

[cookieManager]
==
{% component 'cookieManager' %}
```

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
                        'closure' => function (Carbon $deadline, int $keepDays) {
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


## Klaro! Consent Manager

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