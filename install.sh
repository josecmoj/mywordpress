# Load the latest version of MyWordPress.
curl -L https://github.com/maikeldaloo/mywordpress/archive/master.tar.gz | tar zx
mv mywordpress-master/* mywordpress-master/.* .
rm -rf mywordpress-master
echo "Installed MyWordPress successfully."