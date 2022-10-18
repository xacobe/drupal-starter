# Tiny Slider 2
Tine Slider 2 for Drupal 8
+ Field formatter
+ Views style

# Installation with drush
composer require 'drupal/tiny_slider:^1.0@beta'
drush tinyslider:plugin

# Installation with composer
composer require 'drupal/tiny_slider:^1.0@beta'
composer config repositories.tiny_slider '{"type":"package","package":{"name":"ganlanyuan/tiny-slider","version":"2.9.3","type":"drupal-library","dist":{"type":"zip","url":"https://github.com/ganlanyuan/tiny-slider/archive/refs/tags/v2.9.3.zip"}}}'
composer require ganlanyuan/tiny-slider

# Manual installation
composer require 'drupal/tiny_slider:^1.0@beta'
Download the 2.9.3 Tiny Slider 2 release from Github
Change the directory name to tiny-slider
Add directory to your libraries directory so the path becomes /libraries/tiny-slider/dist/tiny-slider.js

# Credits
+ Nicolas Borda [ipwa](https://www.drupal.org/u/ipwa)
+ Luke Holmes [HEBL](https://www.drupal.org/u/hebl)
