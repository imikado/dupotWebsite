document.addEventListener('click', function (e) {
    var button = e.target.closest('[data-copy]');
    if (!button || !navigator.clipboard) {
        return;
    }

    navigator.clipboard.writeText(button.getAttribute('data-copy')).then(function () {
        var label = button.querySelector('span');
        button.classList.add('is-copied');
        label.textContent = 'Copié !';

        setTimeout(function () {
            button.classList.remove('is-copied');
            label.textContent = 'Copier';
        }, 1800);
    });
});
