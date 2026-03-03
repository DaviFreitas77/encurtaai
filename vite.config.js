import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    server: {
        host: '0.0.0.0', 
        https: true,    
        hmr: {
            host: 'https://encurtaai-production-5c91.up.railway.app', 
        },
        watch: {
            usePolling: true, 
        },
    },
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/js/app.js', 
                'resources/js/form-url.js',
                'resources/js/redirect.js',
                'resources/js/theme.js',
                'resources/js/modals.js',
                'resources/js/controller-dropdown.js',
                'resources/js/sidebar.js',
                'resources/js/segmentedControl.js',
                'resources/js/generate-qr-code.js',
                'resources/js/control-form.js',
                'resources/js/toaster.js',
                
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
});