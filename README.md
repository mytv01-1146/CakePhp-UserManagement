## Note
* This direction is available for ubuntu.
## Requirement
* PHP >= 7.3
* MySql
* Composer
* CakePHP 3.8

## Setup
* Clone this project.
* Move to project that you just cloned and open terminal
* Run this command:

```bash
   composer install
   npm install
   gulp
```
* Config Database
    * Create `.env` file in `config`, copy `.env.default` file to `.env`
    * Then replace the values with those that apply to your setup.
    * Example:
    ```
    export APP_NAME="__APP_NAME__"
    export DEBUG="true"
    export APP_ENCODING="UTF-8"
    export APP_DEFAULT_LOCALE="en_US"
    export APP_DEFAULT_TIMEZONE="UTC"
    export SECURITY_SALT="__SALT__"
    export DB_HOST="localhost"
    export DB_USER="root"
    export DB_PASSWORD=""
    export DB_NAME="test_cake"
    ```
 * You also must config Database on `phinx.yml` file to use migration.
 * Open file `phinx.yml` and replace the values in the `developemt` with those that you has applied above.

 * A sample completed configuration might look something like the following:
 ```
development:
        adapter: mysql
        host: localhost
        name: test_cake
        user: root
        pass: ''
        port: 3306
        charset: utf8
```
* Now you can create tables of database by running this command
 ```
php vendor/bin/phinx migrate
``` 
* To use this application, you need some sample data. Run the following comment to seed data.
```
php vendor/bin/phinx seed:run -e development
```
  ## Installation
  * Now you can quickly check that our installation is correct, by checking the default home page. Before you can do
  that, you’ll need to start the development server:
  ```
  cd /path/to/our/app
  
  bin/cake server
  ```
  * This will start PHP’s built-in webserver on port 8765. Open up http://localhost:8765 in your web browser to see the welcome page

