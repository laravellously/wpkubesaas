import fs from "fs";
import { defineConfig } from "vite";
import laravel, { refreshPaths } from "laravel-vite-plugin";
import { homedir } from "os";
import { resolve } from "path";

let host = "wpkubesaas.local";

function detectServerConfig(host) {
    let keyPath = resolve(homedir(), `/.valet/Certificates/${host}.key`);
    let certificatePath = resolve(homedir(), `/.valet/Certificates/${host}.crt`);

    if (!fs.existsSync(keyPath)) {
        return {};
    }

    if (!fs.existsSync(certificatePath)) {
        return {};
    }

    return {
        hmr: { host },
        host: 'wpkubesaas.local',
        https: {
            key: fs.readFileSync(keyPath),
            cert: fs.readFileSync(certificatePath),
        },
    };
}

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: [...refreshPaths, "app/Http/Livewire/**"],
        }),
    ],
});
