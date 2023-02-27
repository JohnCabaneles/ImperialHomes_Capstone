const mix = require("laravel-mix");
const { exec } = require("child_process");

mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")
    .webpackConfig({
        devServer: {
            before: () => {
                exec("npm run vite");
            },
            port: 8080,
            proxy: "http://localhost:8000",
        },
    });
