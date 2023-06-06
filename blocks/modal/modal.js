document.getElementById('open-modal').addEventListener('click', function(e) {
    e.preventDefault();
    document.getElementById('modal').classList.add('active-link');
    document.body.classList.add('no-scroll');
});

document.querySelector('.close-modal').addEventListener('click', function() {
    document.getElementById('modal').classList.remove('active-link');
    document.body.classList.remove('no-scroll');
});

document.querySelector('.modal-overlay-back').addEventListener('click', function(e) {
    if (e.target.classList.contains('modal-overlay-back')) {
        document.getElementById('modal').classList.remove('active-link');
        document.body.classList.remove('no-scroll');
    }
});
document.addEventListener("DOMContentLoaded", function() {
    var form = document.querySelector('form');
    var feedbackRight = document.querySelector('.feedback__right');
    var output = document.querySelector('.thankyou');
    var otherFields = document.querySelector('.close-after');
    var otherFields2 = document.querySelector('.close-after2');

    form.addEventListener('submit', function() {
        feedbackRight.classList.add('hidden');
        otherFields.classList.add('hidden');
        otherFields2.classList.add('hidden');
        output.classList.remove('hidden');
    });

    form.addEventListener('wpcf7submit', function(event) {
        feedbackRight.classList.add('hidden');
        otherFields.classList.add('hidden');
        otherFields2.classList.add('hidden');
        output.classList.remove('hidden');
    }, false);
});
