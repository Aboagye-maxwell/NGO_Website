import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/app.css',
                'resources/css/bootstrap.css',
                'resources/css/bootstrap.js',
                'resources/js/jquery.js',
                'resources/js/popper.min.js',
                'resources/js/max.js',
                'resources/css/max.css',
            ],
            refresh: true,
        }),
    ],
});
