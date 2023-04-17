import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { viteStaticCopy } from 'vite-plugin-static-copy'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        viteStaticCopy({
            targets: [
                {
                    src: 'node_modules/leaflet/dist/leaflet.js',
                    dest: 'js'
                },
                {
                    src: 'node_modules/leaflet/dist/leaflet.css',
                    dest: 'css'
                },
                {
                    src: 'node_modules/leaflet/dist/images',
                    dest: 'css'
                },
                {
                    src: 'node_modules/leaflet.markercluster/dist/MarkerCluster.css',
                    dest: 'css'
                },
                {
                    src: 'node_modules/leaflet.markercluster/dist/MarkerCluster.Default.css',
                    dest: 'css'
                },
                {
                    src: 'node_modules/leaflet.markercluster/dist/leaflet.markercluster.js',
                    dest: 'js'
                },

                {
                    src: 'node_modules/leaflet.awesome-markers/dist/leaflet.awesome-markers.css',
                    dest: 'css'
                },
                {
                    src: 'node_modules/leaflet.awesome-markers/dist/leaflet.awesome-markers.min.js',
                    dest: 'js'
                },
                {
                    src: 'node_modules/leaflet.awesome-markers/dist/images',
                    dest: 'css'
                },
            ]
        }),
    ],
});
