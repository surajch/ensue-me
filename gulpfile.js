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
        './bower_components/fontawesome/css/font-awesome.css'
    ], 'public/assets/stylesheets/vendor.css');

    // vendor scripts
    mix.scripts([
        'bower_components/jquery/dist/jquery.js',
        'bower_components/bootstrap/dist/js/bootstrap.js',
        '/node_modules/select2/dist/js/select2.min.js'
    ], 'public/assets/scripts/vendor.js', './');

    // styles for user and admin view
    mix.styles([
        'resources/css/sb-admin-2.css',
        'resources/css/timeline.css',
        '/node_modules/select2/dist/css/select2.min.css',
    ], 'public/assets/stylesheets/styles.css', './');

    // style for welcome page (bootstrap theme)
    mix.styles([
        'resources/css/animate.min.css',
        'resources/css/creative.css'
    ], 'public/assets/stylesheets/theme-style.css', './');


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


