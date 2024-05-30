import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'
import "./resources/css/app.css";
import commonjs from "@rollup/plugin-commonjs";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                path.resolve(__dirname, "resources/css/app.css"),
                path.resolve(__dirname, "resources/js/app.js"),
                path.resolve(
                    __dirname,
                    "node_modules/flowbite/dist/flowbite.js"
                ),
                path.resolve(
                    __dirname,
                    "node_modules/flowbite/dist/flowbite.css"
                ),
            ],
            refresh: true,
        }),
        commonjs()
    ],
    build: {
        manifest: true,
        rollupOptions: {
            input: {
                main_css: path.resolve(__dirname, "resources/css/app.css"),
                main_js: path.resolve(__dirname, "resources/js/app.js"),
                flowbite_js: path.resolve(
                    __dirname,
                    "node_modules/flowbite/dist/flowbite.js"
                ),
                flowbite_css: path.resolve(
                    __dirname,
                    "node_modules/flowbite/dist/flowbite.css"
                ),
            },
            output: {
                // Set output directory
                dir: "public/build",
            },
        },
    },
});
