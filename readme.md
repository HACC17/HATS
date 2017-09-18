# Land Use Commission v2
#### Last modified: 9/17/2017

### Table of Contents
<li>Prerequisites</li>
<li>Setup</li>
<li>Usage</li>
<li>Technical Notes</li>
<li>Showcase Images</li>

### Prerequisites
The following are required to run our website:
<li>Ubuntu 16 or 17 (or equivalent)</li>
<li>Laravel</li>
<li>PHP-SQLite 3</li>

### Setup
To ensure that you are able to run our website locally you will need to complete the following steps. Each step is crucial and not doing one may result in an error.
<li>sudo apt update</li>
<li>yes | sudo apt upgrade</li>
<li>yes | sudo apt install composer</li>
<li>yes | sudo apt install php-mbstring</li>
<li>yes | sudo apt install php-dom</li>
<li>yes | sudo apt install php-sqlite3</li><br>

If starting a new project
<li>composer create-project laravel/laravel --prefer-dist</li>
<li>cd laravel</li>
<li>cp .env.example .env</li>
<li>Edit .env file 
DB_CONNECTION=sqlite <b>*Make sure DB connection is sqlite*</b><br>
DB_DATABASE=/home/<b>insert username</b>/HATS/laravel/database/database.sqlite</li>
<li>php artisan key:generate</li>
<li>php artisan serve</li><br>

If working with pulled files
<li>cd laravel</li>
<li>sudo composer install</li>
<li>sudo composer update</li>
<li>cp .env.example .env</li>
<li>Edit .env file 
DB_CONNECTION=sqlite <b>*Make sure DB connection is sqlite*</b><br>
DB_DATABASE=/home/<b>insert username</b>/HATS/laravel/database/database.sqlite</li>
<li>php artisan key:generate</li>
<li>php artisan serve</li><br>

### Usage
Once the installation steps are completed you can start Laravel locally. Be sure to be in <b>~/HATS/laravel</b> on the <b>master</b> branch and type the following command: <b>php artisan serve</b> to start Laravel. Access the web application in a browser at <b>localhost:8000</b>

### Technical Notes
To be continued:
<li>Docket Links</li>
<li>File Upload Server-Side Validation</li>
<li>File Upload Authentication</li>
<li>Server-Side Input Validation</li>
<br>
If desired, link to setup SMTP:<br>
https://www.digitalocean.com/community/tutorials/how-to-install-and-configure-postfix-as-a-send-only-smtp-server-on-ubuntu-14-04<br>
*Setup is compatible with Ubuntu versions after Ubuntu 14.04*

### Home Page
![alt text](https://github.com/HACC17/HATS/imgs/home.png)

### About Page
![alt text](https://github.com/HACC17/HATS/imgs/about.png)

### Dockets
![alt text](https://github.com/HACC17/imgs/dockets.png)

### Self-Service
![alt text](https://github.com/HACC17/HATS/imgs/selfservice.png)

### LUC Maps
![alt text](https://github.com/HACC17/HATS/imgs/lucmaps.png)

### Contact
![alt text](https://github.com/HACC17/imgs/contact.png)

### Laravel Directory
![alt text](https://github.com/HACC17/HATS/imgs/laravel-dir.png)

### Development Tools
![alt text](https://github.com/HACC17/HATS/imgs/laravel-framework-logo.png)

![alt text](https://github.com/HACC17/HATS/imgs/php-sqlite.jpg)

![alt text](https://github.com/HACC17/HATS/imgs/trello_1x.png)

![alt text](https://github.com/HACC17/HATS/imgs/ubuntu_logo.jpg)

