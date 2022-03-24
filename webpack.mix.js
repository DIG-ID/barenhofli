// webpack.mix.js

let mix = require('laravel-mix');

mix
  .setPublicPath('dist')
  .setResourceRoot('./')
  .autoload({
    jquery: ['$', 'window.jQuery']
  })
  .js('src/js/main.js', 'dist')
  .js('src/js/google-maps.js', 'dist')
  .sass('src/sass/main.sass', 'dist')
  .sass('src/sass/admin-login.sass', 'dist')

  .disableNotifications()
  .browserSync({
    proxy: "localhost/barenhofli",
    files: ["./**/*.php", "./dist/*.js", "./dist/*.css"]
  });

if (!mix.inProduction()) {
  mix
    .webpackConfig({
      devtool: "source-map"
    })
    .sourceMaps();
}

if (mix.inProduction()) {
  mix.version();
}