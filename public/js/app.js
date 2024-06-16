document.addEventListener('DOMContentLoaded', function() {
    let currentRadioPlayer = null; // to store the current playing audio

    // Function to toggle play/pause
    function togglePlayPause(button, url) {
        if (!currentRadioPlayer || currentRadioPlayer.src !== url) {
            // If no player exists or different URL, create new player
            if (currentRadioPlayer) {
                currentRadioPlayer.pause(); // Pause the current player if exists
                const currentButton = document.querySelector(`[data-url="${currentRadioPlayer.src}"]`);
                if (currentButton) {
                    currentButton.textContent = 'Play'; // Update button text
                }
            }
            currentRadioPlayer = new Audio(url); // Create new audio player
        }

        // Toggle play/pause
        if (currentRadioPlayer.paused) {
            currentRadioPlayer.play().then(() => {
                button.textContent = 'Pause'; // Update button text
            }).catch(error => {
                console.error('Failed to play audio:', error);
                // Handle error (e.g., display an error message)
            });
        } else {
            currentRadioPlayer.pause();
            button.textContent = 'Play'; // Update button text
        }
    }

    // Add event listeners to play/pause buttons
    const playPauseButtons = document.querySelectorAll('[id^="playPauseButton"]');
    playPauseButtons.forEach(button => {
        const url = button.getAttribute('data-url');
        button.addEventListener('click', () => togglePlayPause(button, url));
    });

    // Add event listener to volume controls
    const volumeControls = document.querySelectorAll('[id^="volumeControl"]');
    volumeControls.forEach(control => {
        control.addEventListener('input', () => {
            if (currentRadioPlayer) {
                currentRadioPlayer.volume = control.value; // Adjust volume
            }
        });
    });

    // JavaScript to focus the search bar when "Cari" is clicked
    document.getElementById('search-link').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('search-bar').focus();
    });
});


