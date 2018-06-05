{# @see https://klaro.kiprotect.com/config.js #}
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
    apps: {% partial __SELF__ ~ '::apps.js' apps=s.apps %}
}