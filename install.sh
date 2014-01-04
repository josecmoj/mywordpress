echo "Where would you like to install this? (default: current directory)"
read dir

echo "Would you like to initialise a new git repository? (default: yes)"
read newrepo

# if [ -z "${dir}" ]; then
# 	dir="."
# fi

# if [ -z "${newrepo}" ]; then
# 	newrepo="yes"
# fi

# # Create new dir and go into it.
# mcd $dir

# # Load the latest version of MyWordPress.
# curl -L https://github.com/maikeldaloo/mywordpress/archive/master.tar.gz | tar zx
# mv mywordpress-master/* mywordpress-master/.* .
# rm -rf mywordpress-master
# echo "Installed MyWordPress successfully."

# if [ $newrepo == "yes" ]; then
# 	git init
# 	git flow init -d
# 	echo "Initialised Git and Git Flow"
# fi