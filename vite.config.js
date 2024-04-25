import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/scss/app.scss',
                
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    // vite server address has nothign to do with laragon
    server: { https: false, host: 'library.test', port:'5173' },   
});
