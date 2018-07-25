var manager = {
    classes: {
        content: 'gdpr-cookie-manager__cookie-group--active',
        level: 'gdpr-cookie-manager__cookie-level--active',
        list: 'gdpr-cookie-manager__group-list-entry--active',
        disabled: 'gdpr-cookie-manager__cookie--disabled',
    },
    init: function () {
        this.addGroupTabEvents();
        this.addSliderEvents();
        this.addToggleEvents();
    },
    addGroupTabEvents: function () {
        var self = this
        this._eachElement('[data-handle-group-id]', function (handler) {
            handler.addEventListener('click', function (e) {
                e.preventDefault()
                self.resetState(self.classes.content)
                self.resetState(self.classes.list)
                handler.classList.add(self.classes.list)
                var id = handler.dataset.handleGroupId
                var target = document.querySelector('[data-group-id="' + id + '"]')
                if (target) {
                    target.classList.add(self.classes.content)
                }
            })
        });
    },
    addSliderEvents: function () {
        var self = this
        this._eachElement('[data-handle-cookie-slider]', function (slider) {
            slider.addEventListener('input', function (e) {
                e.preventDefault()
                self.resetState(self.classes.level, slider.parentNode)
                var id = slider.dataset.handleCookieSlider + slider.value;
                var target = document.querySelector('[data-cookie-level="' + id + '"]')
                if (target) {
                    target.classList.add(self.classes.level)
                }
            })
        });
    },
    addToggleEvents: function () {
        var self = this
        this._eachElement('.js-cookie-toggle', function (toggle) {
            var levels = toggle.parentNode.parentNode.querySelector('.gdpr-cookie-manager__cookie-levels')
            toggle.addEventListener('change', function (e) {
                e.preventDefault()
                if (toggle.checked) {
                    levels.style.display = 'block'
                    toggle.parentNode.parentNode.classList.remove(self.classes.disabled)
                } else {
                    levels.style.display = 'none'
                    toggle.parentNode.parentNode.classList.add(self.classes.disabled)
                }
            })
        })
    },
    resetState: function (cls, base) {
        if (! base) base = document
        var visible = base.querySelectorAll('.' + cls)
        Array.prototype.forEach.call(visible, function (element) {
            element.classList.remove(cls)
        });
    },
    _eachElement: function (selector, callback) {
        var elements = document.querySelectorAll(selector)
        if (elements) {
            Array.prototype.forEach.call(elements, callback);
        }
    }
}
manager.init();
