import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import instruckt from 'instruckt/vite'

export default defineConfig({
    plugins: [
        instruckt({ server: false, endpoint: '/instruckt', adapters: ['livewire', 'blade'], mcp: true }),
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: ['**/storage/framework/views/**'],
        },
    },
});
