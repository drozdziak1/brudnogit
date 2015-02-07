#!/usr/bin/env bash
# Custom bootstrap script for Vagrant
# 
# Keep in mind that to add a package for the VM to install
# you actually need the -y flag so that the process doesn't
# need your attendance (-y is for answering every question as "yes")

# Update packages lists
sudo apt-get update

# Install Apache web server
sudo apt-get install -y apache2

# Install php5
sudo apt-get install -y php5

# Install and nable mcrypt module for php5
sudo apt-get install -y php5-mcrypt
sudo php5enmod mcrypt

# Install composer and symlink to /usr/bin/
curl -sS https://getcomposer.org/installer | php 
sudo ln -sf /home/vagrant/composer.phar /usr/bin/composer

# Symlink apache root to /vagrant shared folder
sudo rm -rf /var/www/html
sudo ln -sf /vagrant /var/www/html
