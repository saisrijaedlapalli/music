// Example of dynamic song addition to playlists
function addSongToPlaylist(songId) {
    // Send the song ID and playlist ID to the server to add the song
    fetch(`server.php?action=addToPlaylist&songId=${songId}`)
      .then(response => response.json())
      .then(data => {
        alert('Song added to playlist');
      });
  }
  
  // Example for Rating Songs
  function rateSong(songId, rating) {
    fetch(`server.php?action=rateSong&songId=${songId}&rating=${rating}`)
      .then(response => response.json())
      .then(data => {
        alert('Rating submitted');
      });
  }
  // Play the selected song when the button is clicked
function playSong(songPath) {
    const player = document.getElementById('music-player');
    player.src = songPath;
    player.play();
  }
  