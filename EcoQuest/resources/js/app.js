import './bootstrap';
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true
});

window.Echo.channel('leaderboard')
    .listen('ScoreUpdated', (e) => {
        console.log('Score updated:', e.leaderboard);
        // Update your leaderboard UI here
    });
window.Echo.channel('leaderboard')
    .listen('ScoreUpdated', (e) => {
        const scoresList = document.getElementById('scores-list');
        scoresList.innerHTML = ''; // Clear the list

        e.leaderboard.forEach(player => {
            const li = document.createElement('li');
            li.textContent = `${player.username}: ${player.score}`;
            scoresList.appendChild(li);
        });
    });