import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/js/app.js', 'resources/css/app.css'],
            output: 'public/dist', // Optional: Define output path for public directory
        }),
    ],
    build: {
        outDir: 'dist',  // Ensure this is set correctly
    }
});
