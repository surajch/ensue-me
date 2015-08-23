var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
    mix.copy('bower_components/bootstrap/dist/fonts', 'public/assets/fonts');
    mix.copy('bower_components/font-awesome/fonts', 'public/assets/fonts');

    // verdor styles
    mix.styles([
        './bower_components/bootstrap/dist/css/bootstrap.css',
        './bower_components/fontawesome/css/font-awesome.css',
        './bower_components/bootstrap-social/bootstrap-social.css'
    ], 'public/assets/stylesheets/vendor.css');

    // styles for user and admin view
    mix.styles([
        'resources/css/sb-admin-2.css',
        'resources/css/timeline.css',
    ], 'public/assets/stylesheets/styles.css', './');

    // style for welcome page (bootstrap theme)
    mix.styles([
        'resources/css/animate.min.css',
        'resources/css/creative.css'
    ], 'public/assets/stylesheets/theme-style.css', './');

    // vendor scripts
    mix.scripts([
        'bower_components/jquery/dist/jquery.js',
        'bower_components/bootstrap/dist/js/bootstrap.js',
    ], 'public/assets/scripts/vendor.js', './');

    // scripts for user and admin view
    mix.scripts([
        'bower_components/Chart.js/Chart.js',
        'bower_components/metisMenu/dist/metisMenu.js',
        'resources/js/sb-admin-2.js',
        'resources/js/jquery.easing.min.js',
        'resources/js/jquery.fittext.js',
        'resources/js/frontend.js'
    ], 'public/assets/scripts/frontend.js', './');

    //script for welcome page(bootstrap theme) 
    mix.scripts([
        'resources/js/jquery.easing.min.js',
        'resources/js/jquery.fittext.js',
        'resources/js/wow.min.js',
        'resources/js/creative.js',
        'resources/js/classie.js',
        'resources/js/cbpAnimatedHeader.js'
    ], 'public/assets/scripts/theme-js.js', './');

});


