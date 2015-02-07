# Brudnogit
This repository serves me as a learning platform. I test new solutions here and gain expierience with stuff. Feel free to wander around, don't expect anything useful though.
# Current stuff I'm playing with
* Vagrantfile - Managed to set up a simple trusty64 Vagrant box with GUI and 1024MB RAM (lack of GUI caused a kernel panic somehow on my other machine), has Apache and PHP (with composer and mcrypt) for now.
* larry - The main thing I'm trying to get along with for now; a Laravel project.

# Things to keep in mind
* When using a development server in any framework with Vagrant, set the address to 0.0.0.0:"your port" so that it can be forwarded!
* Current port forwarding for Vagrant is: 8000 -> 8000, 80 -> 8080, 22 -> 2222

