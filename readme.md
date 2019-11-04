## A PHP MVC Project -template
A simple model-view -controller PHP template to get started with big project that fits for both newcomers and experienced architects providing ease of use, solid foundation and total flexibility. It does not use any additional flavors and yet simple to setup and use, thus suitable for anyone.
Some of the feature include:
* It is router driven so more simple to maintain your custom URLS and methods on each HTTP request
* Can be used in a shared hosting environment without any modification
* Dependencies managed through composer
* Controllers,models, and views organised in a manageable directory structure which is easy to understand.
* And many more features for easy integration with all other custom libraries 
### Prerequisite
- Basic understanding of PHP
- PHP =>5.6
- PHP web server. Quick guide to setup one can be found [here](https://www.php.net/manual/en/features.commandline.webserver.php)
- Enthusiasm to code

#### How to quickly setup
* Ensure you have [composer](www.getcomposer.org) installed 
(Composer helps in handling dependency resolution for the project and fit third party libraries like [`twig`](https://twig.symfony.com/)
.) 
    * You can use composer (recommended) to create the project using `composer create-project murage/mvc myproject`  
    * or download the project in zip format [here](https://codeload.github.com/mimidotsuser/mvc-template/zip/mvc) and extract it to your http server.                                                          	
* In the root folder, run composer install
* After dependencies are installed, run `php -S localhost:800` to start a server at the root folder.

Below is the app  files & folder structure overview in general

```
.📂-----📂 app
        |---📂 controllers
            📂 middlewares
            📂 models
            📂 services
    ----📂 bootstrap
            |--app.php
            |--Request.php
            |--Router.php
            |--TwigApp.php
    ----📂 public
            |--📂 css
            |--📂 js
            |-- .htaccess
            |-- .index.php
            |-- .robots.txt
    ----📂 routes
            |--api.php
            |--web.php
    ----.htaccess
    ----composer.json
    ----index.php
    ----readme.md
```

### Versioning
Project uses [SemVer](http://semver.org/) for versioning.

### License
This project is licensed under the MIT License - see the LICENSE.md file for details



Contributions on ways to improve the project are welcomed. Please feel free to fork, download or open any issues.
Inspired with ❤ by **[Laravel Framework](www.laravel.com)** 
