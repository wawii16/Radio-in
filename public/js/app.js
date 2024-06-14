const playPauseButton = document.getElementById('playPauseButton');
const radioPlayer = new Audio('https://stream.zeno.fm/dgtzdngnd0huv');
const volumeControl = document.getElementById('volumeControl');

playPauseButton.addEventListener('click', () => {
    if (radioPlayer.paused) {
        radioPlayer.play();
        playPauseButton.textContent = 'Pause';
    } else {
        radioPlayer.pause();
        playPauseButton.textContent = 'Play';
    }
});

volumeControl.addEventListener('input', () => {
    radioPlayer.volume = volumeControl.value;
});