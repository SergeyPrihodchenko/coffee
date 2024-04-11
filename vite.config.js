import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/js/header.js',
                'resources/js/cards.js',
                'resources/js/onScroll.js',
                'resources/js/dashboard.js',
                'resources/js/dashboardDelete.js',
            ],
            refresh: true,
        }),
    ],
});
