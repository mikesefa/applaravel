const mix = require('laravel-mix');
const { compileStringAsync } = require('sass');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js') /* //accion (archivo a compilar,ruta de almacenamiento) */
    .vue()
    .sass('resources/sass/app.scss', 'public/css'); /* //accion (archivo a compilar,ruta de almacenamiento) */


    /* para utiliar Laravel mix hay que tener Node.js  instalado
        se puede instalar yarn o usar npm
        luego ejecutar el comando yarn o npm install y se instalan las dependencias para fronted

        luego ejecutar yarn dev o npm dev
        hacer un hard reload al navegador  control+r o inicio+r
        instalar browsersync
        ejecutar yarn watch
    */

/* utilizacion de versiones para cambios */

    mix.browserSync('http://applaravel.test');

    if (mix.inProduction())
    {
        mix.version();
    }
