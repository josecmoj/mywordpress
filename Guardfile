guard :sass,
  :input           => "wp-content/themes/sparky/css",
  :output          => "wp-content/themes/sparky/css",
  :style           => :compressed

guard :jammit,
  :config_path     => "assets.yml",
  :output_folder   => "." do
    watch(%r{^wp-content/themes/sparky/js/(.*)\.js$})
  end

guard 'livereload' do
  watch(%r{.+\.(php|html|js|css)$})
end