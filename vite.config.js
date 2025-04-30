import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            'flowbite': 'flowbite/dist/flowbite.min.js',
            'flatpickr': 'flatpickr/dist/flatpickr.js',
        },
    },
});
