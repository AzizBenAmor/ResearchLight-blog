window.addEventListener('DOMContentLoaded', (event) => {
    if (window.innerWidth > 600) {
        var images = document.querySelectorAll('.content img');
        images.forEach(function (image) {
            image.style.margin = '35px';
            image.style.width = '500px';
            image.style.height = '300px';
        });
    }

    if (window.innerWidth < 800) {
        var images = document.querySelectorAll('.content img');
        
        images.forEach(function (image) {
            image.style.width = '100%';
            image.style.height = 'auto'; 
            image.style.margin = '0 auto';
        });
    }
});

