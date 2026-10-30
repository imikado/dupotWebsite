document.addEventListener('DOMContentLoaded', function () {
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    // ombre de la barre de navigation au défilement + bouton "retour en haut"
    var nav = document.querySelector('.site-nav');
    var backToTop = document.createElement('button');
    backToTop.type = 'button';
    backToTop.className = 'back-to-top';
    backToTop.setAttribute('aria-label', 'Retour en haut');
    backToTop.innerHTML = '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="12" y1="19" x2="12" y2="5"/><polyline points="5 12 12 5 19 12"/></svg>';
    backToTop.addEventListener('click', function () {
        window.scrollTo({ top: 0, behavior: reduceMotion ? 'auto' : 'smooth' });
    });
    document.body.appendChild(backToTop);

    function onScroll() {
        var y = window.scrollY;
        if (nav) {
            nav.classList.toggle('is-scrolled', y > 10);
        }
        backToTop.classList.toggle('is-visible', y > 600);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();

    // halo qui suit le pointeur sur les cartes
    document.querySelectorAll('.card-link, .activity-card').forEach(function (card) {
        card.addEventListener('pointermove', function (event) {
            var rect = card.getBoundingClientRect();
            card.style.setProperty('--mx', (event.clientX - rect.left) + 'px');
            card.style.setProperty('--my', (event.clientY - rect.top) + 'px');
        });
        card.addEventListener('pointerleave', function () {
            card.style.removeProperty('--my');
        });
    });

    // apparition au défilement, en cascade dans chaque grille
    if (reduceMotion || !('IntersectionObserver' in window)) {
        return;
    }

    var items = document.querySelectorAll('.main .card, .activity-card, .section-title-row, .project-hero');
    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, { rootMargin: '0px 0px -40px 0px' });

    items.forEach(function (item) {
        var siblings = item.parentElement ? Array.prototype.indexOf.call(item.parentElement.children, item) : 0;
        item.style.setProperty('--fx-delay', Math.min(siblings % 3, 2) * 90 + 'ms');
        item.classList.add('fx-reveal');
        observer.observe(item);
    });
    document.documentElement.classList.add('fx-ready');
});
