// vite.config.js
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import vue from "@vitejs/plugin-vue";

export default defineConfig({
    plugins: [
        vue(),
        laravel([
            "resources/css/app.css",
            "resources/js/app.js"
        ])
    ],
    build: {
        rollupOptions: {
            external: [

            ],
        },
    },
});


// import { fileURLToPath, URL } from 'node:url'

// import { defineConfig } from 'vite'
// import vue from '@vitejs/plugin-vue'

// // // https://vitejs.dev/config/
// // export default defineConfig({
// //   plugins: [vue()],
// //   resolve: {
// //     alias: {
//       '@': fileURLToPath(new URL('./src', import.meta.url))
// //     }
// //   }
// // })
