# MyWordPress

This is my custom WordPress bootstrap, it contains essential plugins, my Guard setup and Plates PHP for tidier templating.

My aim is to keep this up-to-date with the latest releases of WordPress and plugins.

This installation comes with 1 theme - Sparky.    
Sparky is a very plain theme, giving you the power to create it based on your design.

---

## Features & Changes

 - Always up-to-date with latest version of WordPress and plugins.
 - Uses [Plates PHP][2] for templating.
 - Uses [Gulp.js][1] to compile, concat and minify CSS and JS files (See below).
 - [Bourbon][3], [Neat][4] and [Bitters][5] CSS libraries.
 - SMTP details can be added per environment without plugins.
 - Custom installation script removes unwanted first post and first comment, also sets the defaults.
 - Comes with some essential plugins (Advanced Custom Fields, Ninja Forms and Sitemap Generator).
 - Basic starter theme with a well-documented functions.php file.
 - Pimped-out wp-config file, with:
   - Environment-specific set-up, allowing for different settings on your local/staging/production environments.
   - Dynamic `WP_HOME` and `WP_SITEURL` so you don't need to set them, unless you want to.
 - A helper file containing many useful PHP functions.
 - Assets manager for simple page-specific JS/CSS file loading.


---

### Plates PHP
[Plates PHP][2] is a very light but powerful and extensible library that can handle rendering of PHP files and allows the use of templates.

---

### Gulp.js
To start working with assets, you simply need to run `npm install`, which will look at the package.json file and download all the dependencies required to make the asset handling work.

After all the packages are downloaded, you simply run `gulp` to watch and compile any file that is changed within the *assets* directory in the Sparky theme.

If you wish to compile only the styles or scripts, then run `gulp styles` or `gulp scripts` respectively.

[1]: http://gulpjs.com/
[2]: http://platesphp.com/
[3]: http://bourbon.io/
[4]: http://neat.bourbon.io/
[5]: http://bitters.bourbon.io/