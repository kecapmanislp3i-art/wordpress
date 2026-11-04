/**
 * Reveal theme sections as they enter the viewport. No jQuery dependency.
 */
(function () {
    'use strict';

    function initEffects() {
        var elements = document.querySelectorAll('.animations-hidden-item');
        if (!elements.length) {
            return;
        }

        var reducedMotion = typeof window.matchMedia === 'function' &&
            window.matchMedia('(prefers-reduced-motion: reduce)').matches;

        if (typeof window.IntersectionObserver !== 'function' || reducedMotion) {
            Array.prototype.forEach.call(elements, function (element) {
                element.classList.add('animations-show-item');
            });
            return;
        }

        var observer = new window.IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animations-show-item');
                    observer.unobserve(entry.target);
                }
            });
        });

        Array.prototype.forEach.call(elements, function (element) {
            observer.observe(element);
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initEffects);
    } else {
        initEffects();
    }
}());
