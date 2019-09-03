const elixir = require('cakephp3-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Extensions
 |--------------------------------------------------------------------------
 |
 | Elixir provides several extensions which bring new functionality to Elixir.
 | A couple of examples have been included below to get you started.
 | You can use any extension made for the most recent version of Elixir 6.
 | Feel free to try out different extensions!
 | Please report any problems to: https://github.com/pfuri/cakephp-elixir/issues
 |
 */
//require('laravel-elixir-del');
//require('laravel-elixir-webpack-official');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */
elixir(function(mix) {
    mix.copy([
        'node_modules/bootstrap/dist/css/bootstrap.min.css'
    ], 'webroot/css/bootstrap.css');
    mix.copy([
        'node_modules/bootstrap/dist/js/bootstrap.min.js', 
        'node_modules/jquery/dist/jquery.min.js'
    ], 'webroot/js/jquery.bootstrap.js');
    mix.styles([''], 'webroot/css/custom.css');
    mix.scripts([''], 'webroot/js/custom.js');
});
