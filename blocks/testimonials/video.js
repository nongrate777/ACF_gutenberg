var videoLinks = document.querySelectorAll('.video-link');
var modalOverlay = document.querySelector('.modal-overlay');
var modalVideo = document.querySelector('.modal iframe');
var closeModal = document.querySelector('.close-modal');

for (var i = 0; i < videoLinks.length; i++) {
    videoLinks[i].addEventListener('click', function(event) {
        event.preventDefault();

        modalOverlay.style.display = 'block';

        var videoUrl = this.getAttribute('href');

        modalVideo.src = videoUrl;
    });
}


closeModal.addEventListener('click', function() {
    modalOverlay.style.display = 'none';
});

modalOverlay.addEventListener('click', function() {
    modalOverlay.style.display = 'none';
});
