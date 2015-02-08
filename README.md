# Brudnogit
This repository serves me as a learning platform. I test new solutions here and gain experience with stuff. Feel free to wander around, don't expect anything useful though.
# Current stuff I'm playing with
* vagrant - Managed to set up a simple trusty64 vagrant environment. See drozdziak1/vagrant-webdev for details.
* larry - The main thing I'm trying to get along with for now; a Laravel project. By default, it uses a MySQL database called "larry". If you'd like to play with my app, please create the database.

# Things to keep in mind
* When using a development server in any framework with Vagrant, set the address to 0.0.0.0:"your port" so that it can be forwarded!
* Current port forwarding for Vagrant is: 8000 -> 8000, 80 -> 8080, 22 -> 2222
* You may want to update the vagrant subrepo for my junk to work on your machine. Simply type "git submodule update vagrant" and you're good to go.
* You will find the repo in Vagrant machine's /project directory.
* Don't forget to create your databases! The root's password for MySQL is "root"
