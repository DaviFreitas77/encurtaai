import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
     server: {
        https: true,
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/form-url.js','resources/js/redirect.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
