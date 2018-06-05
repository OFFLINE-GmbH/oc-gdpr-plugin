[
    {% for app in apps %}
        {
            name: '{{ app.name }}',
            default: {{ app.default ? 'true' : 'false' }},
            title: '{{ app.title }}',
            purposes: [
                {% for purpose in app.purposes %}
                    '{{ purpose }}'
                {% if not loop.last %},{% endif %}
                {% endfor %}
            ],
            cookies: [
                {% for cookie in app.cookies %}
                    {{ __SELF__.handleRegEx(cookie) | raw }}
                {% if not loop.last %},{% endif %}
                {% endfor %}
            ],
            {% if app.callback %}
                callback: {{ app.callback | raw }},
            {% endif %}
            required: {{ app.required ? 'true' : 'false' }},
            optOut: {{ app.opt_out ? 'true' : 'false' }},
            onlyOnce: {{ app.only_once ? 'true' : 'false' }}
        }
        {% if not loop.last %},{% endif %}
    {% endfor %}
]