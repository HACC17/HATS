# Land Use Commission v2
###### Last modified:09/14/2017
###Table of Contens
<li>SETUP</li>
<li>Usage</li>
<li>Technical Notes</li>
<li>Showcase Images</li>

### SETUP
To ensure that you are able to run our website locally you will need to complete the following steps. Each step is crucial and not doing one may result in an error.
-sudo apt update
yes | sudo apt upgrade
yes | sudo apt instalal composer
yes | sudo apt install php-mbstring
yes | sudo apt install php-dom

If starting a new project
composer create-project laravel/laravel --prefer-dist
cd laravel
cp .env.example .env
php artisan key:generate
php artisan serve

If working with pulled files
cd laravel
sudo composer install
sudo composer update
cp .env.example .env
php artisan key:generate
php artisan serve

### USAGE
Once the installation steps are completed you can start laravel locally with the follow command:
php artisan serve


### Home Page
![alt text](https://github.com/HACC17/HATS/blob/dev-Rob/imgs/home.png)

### About Page
![alt text](https://github.com/HACC17/HATS/blob/dev-Rob/imgs/about.png)

### Dockets
![alt text](https://github.com/HACC17/HATS/blob/dev-Rob/imgs/dockets.png)

### Self-Service
![alt text](https://github.com/HACC17/HATS/blob/dev-Rob/imgs/selfservice.png)

### LUC Maps
![alt text](https://github.com/HACC17/HATS/blob/dev-Rob/imgs/lucmaps.png)

### Contact
![alt text](https://github.com/HACC17/HATS/blob/dev-Rob/imgs/contact.png)

### Split Folders and sub directories
![alt text](https://github.com/HACC17/HATS/blob/dev-Rob/imgs/direct1.png)
![alt text](https://github.com/HACC17/HATS/blob/dev-Rob/imgs/direct2.png)
