// @see https://klaro.kiprotect.com/config.js
//
// By default, Klaro will load the config from  a global "klaroConfig" variable.
// You can change this by specifying the "data-config" attribute on your
// script take, e.g. like this:
// <script src="klaro.js" data-config="myConfigVariableName" />
// You can also disable auto-loading of the consent notice by adding
// data-no-auto-load=true to the script tag.
var klaroConfig = {
    elementID: 'oc-gdpr-klaro',
    cookieName: 'oc-gdpr-klaro',
    cookieExpiresAfterDays: {{ s.cookie_expires_after_days | round }},
    privacyPolicy: '{{ s.privacy_policy }}',
    default: {{ s.default_application_state ? 'true' : 'false' }},
    mustConsent: {{ s.must_consent ? 'true' : 'false' }},
    lang: '{{ s.lang }}',
    translations: {
        {% for translation in s.translations %}
            {{ translation.code }}: {{ translation.json | raw }}
            {% if not loop.last %},{% endif %}
        {% endfor %}
    },

    // This is a list of third-party apps that Klaro will manage for you.
    apps: {% partial __SELF__ ~ '::apps.js' apps=s.apps %}
}