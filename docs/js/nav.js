document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.querySelector('.nav-toggle');

    if (!toggle) {
        return;
    }

    toggle.addEventListener('click', function () {
        document.body.classList.toggle('nav-open');
        var isOpen = document.body.classList.contains('nav-open');
        toggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });

    document.querySelectorAll('.nav-mobile a').forEach(function (link) {
        link.addEventListener('click', function () {
            document.body.classList.remove('nav-open');
        });
    });
});
