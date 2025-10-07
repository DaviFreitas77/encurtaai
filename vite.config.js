import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
     server: {
        https: false,
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js', 'resources/js/form-url.js','resources/js/redirect.js','resources/js/theme.js','resources/js/modals.js','resources/js/controller-dropdown.js','resources/js/sidebar.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
