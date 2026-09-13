document.addEventListener('DOMContentLoaded', function () {
    var galleries = [];

    document.querySelectorAll('.project-body').forEach(function (container) {
        var children = Array.from(container.children);
        var i = 0;

        function isImageOnlyParagraph(el) {
            return el && el.tagName === 'P' && el.children.length > 0 &&
                el.textContent.trim() === '' &&
                Array.from(el.children).every(function (c) {
                    return c.tagName === 'IMG';
                });
        }

        while (i < children.length) {
            if (isImageOnlyParagraph(children[i])) {
                var run = [];
                var j = i;
                while (j < children.length && isImageOnlyParagraph(children[j])) {
                    run.push(children[j]);
                    j++;
                }

                var gallery = document.createElement('div');
                gallery.className = 'screenshot-gallery';

                var images = [];
                run.forEach(function (p) {
                    Array.from(p.children).forEach(function (img) {
                        images.push(img);
                    });
                });
                images.forEach(function (img) {
                    gallery.appendChild(img);
                });

                container.insertBefore(gallery, run[0]);
                run.forEach(function (p) {
                    container.removeChild(p);
                });

                galleries.push(images);
                i = j;
            } else {
                i++;
            }
        }
    });

    if (galleries.length === 0) {
        return;
    }

    var lightbox = document.createElement('div');
    lightbox.className = 'lightbox';
    lightbox.hidden = true;
    lightbox.innerHTML =
        '<button type="button" class="lightbox-close" aria-label="Fermer">&times;</button>' +
        '<button type="button" class="lightbox-prev" aria-label="Précédent">&lsaquo;</button>' +
        '<img alt="">' +
        '<button type="button" class="lightbox-next" aria-label="Suivant">&rsaquo;</button>';
    document.body.appendChild(lightbox);

    var lightboxImg = lightbox.querySelector('img');
    var prevBtn = lightbox.querySelector('.lightbox-prev');
    var nextBtn = lightbox.querySelector('.lightbox-next');
    var currentImages = [];
    var currentIndex = 0;

    function show(index) {
        currentIndex = (index + currentImages.length) % currentImages.length;
        lightboxImg.src = currentImages[currentIndex].src;
        lightboxImg.alt = currentImages[currentIndex].alt || '';
        var multiple = currentImages.length > 1;
        prevBtn.style.display = multiple ? 'flex' : 'none';
        nextBtn.style.display = multiple ? 'flex' : 'none';
    }

    function open(images, index) {
        currentImages = images;
        show(index);
        lightbox.hidden = false;
    }

    function close() {
        lightbox.hidden = true;
    }

    galleries.forEach(function (images) {
        images.forEach(function (img, index) {
            img.addEventListener('click', function () {
                open(images, index);
            });
        });
    });

    prevBtn.addEventListener('click', function () {
        show(currentIndex - 1);
    });
    nextBtn.addEventListener('click', function () {
        show(currentIndex + 1);
    });
    lightbox.addEventListener('click', function (e) {
        if (e.target === lightbox) {
            close();
        }
    });
    document.querySelector('.lightbox-close').addEventListener('click', close);

    document.addEventListener('keydown', function (e) {
        if (lightbox.hidden) {
            return;
        }
        if (e.key === 'Escape') close();
        if (e.key === 'ArrowLeft') show(currentIndex - 1);
        if (e.key === 'ArrowRight') show(currentIndex + 1);
    });
});
