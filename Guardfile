# SASS - let the compression be handled by 'jammit'.
guard :sass,
  :input           => "wp-content/themes/sparky/css",
  :output          => "wp-content/themes/sparky/css",
  :style           => :expanded

# Jammit - production.
guard :jammit,
  :config_path     => "assets.yml",
  :output_folder   => "." do
    watch(%r{^wp-content/themes/sparky/js/(.*)\.js$})
  end

# Jammit - development.
guard :jammit,
  :config_path     => "assets-dev.yml",
  :output_folder   => "." do
    watch(%r{^wp-content/themes/sparky/js/(.*)\.js$})
  end

guard 'livereload' do
  watch(%r{.+\.(php|html|js|css)$})
end