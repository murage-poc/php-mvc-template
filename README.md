# A PHP MVC-template
A simple model-view -controller PHP template to get started with big project that fits for both newcomers and experienced architects providing ease of use, solid foundation and total flexibility. It does not use any additional flavors and yet simple to setup and use, thus suitable for anyone.
Some of the feature include:
* It is router driven so more simple to maintain your [GET,POST] requests
* Can be used in a shared hosting without any modification
* Dependencies managed through composer
* Controllers,models, and views organised in a single directory structure respectively.
* And many more features for easy integration with all of your needs 
### How to quickly setup
* Ensure you have [composer](www.getcomposer.org) installed (Adding library using composer help you get rid of adding each required class manually. 
                                                             ) 
    * You can use composer to create the project using `composer create-project murage/mvc demo` (replace `demo` with your project name)
    * or download the project in zip format [here](https://codeload.github.com/mimidotsuser/mvc-template/zip/mvc) and extract it to your http server.                                                          	
* In the root folder, run composer install
* Rename example.env file in the root folder to .env and  modify the values as appropriate
* Now your template is ready. Feel free to rename the folder to suit your project name.

    NB: The project uses [sqlBuilder](https://github.com/mimidotsuser/sqlQueryuilder) for database transactions interaction

Contributions on ways to improve the project are welcomed. Please feel free to fork, download or open any issues.

### License
[MIT License](LICENSE.md). 

Inspired with ❤ by **[Laravel Framework](www.laravel.com)** 
