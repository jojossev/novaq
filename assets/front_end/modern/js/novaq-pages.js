/**
 * Animations légères pour les pages Novaq (légales & FAQ)
 */
(function () {
    'use strict';

    var page = document.querySelector('.novaq-page');
    if (!page) {
        return;
    }

    var prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function revealOnScroll(selector, visibleClass) {
        var nodes = page.querySelectorAll(selector);
        if (!nodes.length) {
            return;
        }

        if (prefersReduced || typeof IntersectionObserver === 'undefined') {
            nodes.forEach(function (el) {
                el.classList.add(visibleClass);
            });
            return;
        }

        var observer = new IntersectionObserver(
            function (entries) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add(visibleClass);
                        observer.unobserve(entry.target);
                    }
                });
            },
            { rootMargin: '0px 0px -8% 0px', threshold: 0.12 }
        );

        nodes.forEach(function (el, index) {
            if (el.style && el.dataset.stagger !== '0') {
                el.style.transitionDelay = Math.min(index * 0.06, 0.45) + 's';
            }
            observer.observe(el);
        });
    }

    revealOnScroll('.novaq-reveal', 'is-visible');
    revealOnScroll('.novaq-faq-accordion .accordion-item', 'is-visible');
    revealOnScroll('.novaq-faq-accordion .card', 'is-visible');
})();
