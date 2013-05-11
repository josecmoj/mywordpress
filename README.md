# MyWordPress

This is a simplified WordPress bootstrap packed with essential plugins and settings.

My aim is to keep this up-to-date with the latest releases of WordPress and plugins/themes.

---

## Features & Changes

 - Uses [Guard][1] to concat and minify files and LiveReload (See below)
 - Advanced Custom Fields
 - Basic starter theme with a well-documented functions.php file
 - Pimped-out wp-config file, with:
   - Environment-specific set-up, allowing for different settings on your local/staging/production environments
   - Dynamic ```WP_HOME``` and ```WP_SITEURL``` so you don't need to set them, unless you want to
 - Database dumps can be exchanged between servers without issues
 - Prompts you to update your secret keys if you haven't already

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