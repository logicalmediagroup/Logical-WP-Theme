// webpack.mix.js

let mix = require("laravel-mix");
/*require("laravel-mix-purgecss");*/

// Config

mix.webpackConfig({
  stats: {
    children: true,
  },
});

// CSS

mix.sass("assets/styles/style.scss", "style.css").options({
  processCssUrls: true,
});
/*.purgeCss({
    content: ["*.php"], // Ensure all relevant files are included
    safelist: {
      standard: [
        /^text-/,
        /^bg-/,
        /^visible-/,
        /^hidden-/,
        /^btn/,
        "nav",
        "nav--header",
        "li",
        "ul",
        "js-menu-toggle",
        "nav-burger",
        "navigation",
        "header_navigation",
        // Add more classes here as needed
      ],
    },
    rejected: true, // Enable rejected option to see what is being removed
  });*/

// JS

mix.js(["assets/scripts/scripts.js"], "js/scripts.min.js");
