function disableVideoControls() {
    const videos = document.querySelectorAll('video');

    videos.forEach(function(video) {
        video.controls = false;

        if (navigator.userAgent.includes('Safari') && !navigator.userAgent.includes('Chrome')) {
            video.setAttribute('playsinline', '');
            video.removeAttribute('controls');
            video.controls = false;
        }
    });
}