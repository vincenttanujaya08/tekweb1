import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel([
            'resources/css/app.css', // Default CSS file
            'resources/css/login.css',
            'resources/js/app.js', // Default JS file
        ]),
    ],
});
