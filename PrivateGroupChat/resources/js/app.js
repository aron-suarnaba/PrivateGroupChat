import './bootstrap';
import Echo from 'laravel-echo';
import Pusher from 'pusher-js';

window.Pusher = Pusher;

window.Echo = new Echo({
    broadcaster: 'pusher', // Reverb uses the Pusher protocol, so this is correct
    key: import.meta.env.VITE_PUSHER_APP_KEY, // Your app key
    wsHost: import.meta.env.VITE_REVERB_HOST ? import.meta.env.VITE_REVERB_HOST : window.location.hostname,
    wsPort: import.meta.env.VITE_REVERB_PORT ?? 8080,
    wssPort: import.meta.env.VITE_REVERB_PORT ?? 8080,
    forceTLS: (import.meta.env.VITE_REVERB_SCHEME ?? 'https') === 'https',
    enabledTransports: ['ws', 'wss'],
});
