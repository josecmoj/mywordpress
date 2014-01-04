# MyWordPress

This is my custom WordPress bootstrap, it contains essential plugins, my Guard setup and Plates PHP for tidier templating.

My aim is to keep this up-to-date with the latest releases of WordPress and plugins.

This installation comes with 1 theme - Sparky.    
Sparky is a very plain theme, giving you the power to create it based on your design.

---

## Features & Changes

 - Always up-to-date with latest version of WordPress and plugins.
 - Uses [Plates PHP][2] for templating.
 - Uses [Guard][1] to concat and minify files and LiveReload (See below).
 - [Bourbon][3], [Neat][4] and [Bitters][5] CSS libraries.
 - SMTP details can be added per environment without plugins.
 - Custom installation script removes unwanted first post and first comment, also sets the defaults.
 - Comes with some essential plugins (Advanced Custom Fields, Ninja Forms and Sitemap Generator).
 - Basic starter theme with a well-documented functions.php file.
 - Pimped-out wp-config file, with:
   - Environment-specific set-up, allowing for different settings on your local/staging/production environments.
   - Dynamic ```WP_HOME``` and ```WP_SITEURL``` so you don't need to set them, unless you want to.
 - A helper file containing many useful PHP functions.
 - Assets manager for simple page-specific JS/CSS file loading.


---

### Plates PHP
Plates PHP is a very light but powerful and extensible library that can handle rendering of PHP files.

Plates PHP 

---

### Guard
Guard needs to be installed on your machine to be able to concatenate and minify your JS/CSS.  
If you do not wish to use Guard, then you must update the css/js directories in the root of the theme directory.

Installing Guard requires that you have RubyGems install on your machine.  
If/when you have that installed, run each of these commands:

```
gem install guard  
gem install guard-concat  
gem install guard-jammit  
gem install guard-livereload  
gem install guard-sass  
```

And when you want to start working, all you need to do is run: ```guard```


[1]: https://github.com/guard/guard
[2]: http://platesphp.com/
[3]: http://bourbon.io/
[4]: http://neat.bourbon.io/
[5]: http://bitters.bourbon.io/