<?php get_header(); ?>

<main class="main" role="main">
    <div class="container">

        <h1 class="text-2xl">Welcome to your custom theme</h1>
        <h1 class="text-2xl">I am an H1 header</h1>
        <h2 class="text-xl">I am an H2 header</h2>
        <h3 class="text-lg">I am an H3 header</h3>
        <h4 class="text-md">I am an H4 header</h4>
        <h5 class="text-sm">I am an H5 header</h5>
        <h6 class="text-xs">I am an H6 header</h6>
        <div class="row">
            <div class="col col--lg-12 col--md-12 col--sm-12 col--xs-12">
                <p>Base Font / <span class="font-alt">Alternate Font</span></p>
                <p class="text-xl">Text XL</p>
                <p class="text-lg">Text LG</p>
                <p class="text-md">Text MD</p>
                <p class="text-sm">Text SM</p>
                <p class="text-xs">Text XS</p>
                <p>Regular text: Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet, molestias. Aliquid modi
                    corrupti maxime, minus blanditiis porro reiciendis cum nisi quae. Exercitationem, eaque qui
                    cupiditate consequatur quia in. Blanditiis, minus.</p>
            </div>
        </div>
        <br>
        <h2 class="text-2xl">Buttons</h2>
        <div class="row">
            <div class="col col--xs-12 col--sm-12 col--md-4 col--lg-4 align-text-center">

                <button class="btn">Primary Button</button>
            </div>
            <div class="col col--xs-12 col--sm-12 col--md-4 col--lg-4 align-text-center">

                <button class="btn btn--inverse">Inverse Button</button>
            </div>
            <div class="col col--xs-12 col--sm-12 col--md-4 col--lg-4 align-text-center">

                <button class="btn btn--link">Link Button >></button>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col col--xs-12 col--sm-12 col--md-12 col--lg-12">
                <button class="btn btn--block">Block Button</button>
            </div>
</main>

<?php get_footer(); ?>