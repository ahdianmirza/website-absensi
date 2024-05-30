import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'node_modules/flowbite/dist/flowbite.js',
                'node_modules/flowbite/dist/flowbite.css'
            ],
            refresh: true,
        }),
    ],
    build: {
        rollupOptions: {
            input: {
                main: path.resolve(__dirname, 'resources/js/app.js'),
                flowbite_js: path.resolve(__dirname, 'node_modules/flowbite/dist/flowbite.js'),
                flowbite_css: path.resolve(__dirname, 'node_modules/flowbite/dist/flowbite.css')
            },
            output: {
                // Set output directory
                dir: 'public/build'
            }
        }
    }
});
