##Note
* This direction is available for ubuntu.
## Requirement
* PHP >= 7.3
* MySql
* Composer
* CakePHP 3.8

##Setup

* Clone this project.
* Move to project that you just cloned and open terminal
* Run this command:

```bash
   composer install
```
* Config Database
    * Go to config/app.php and replace the values in the Datasources.default array with those that apply to your setup.
    * A sample completed configuration array might look something like the following:
    ```php
    <?php
    return [
        // More configuration above.
        'Datasources' => [
            'default' => [
                'className' => 'Cake\Database\Connection',
                'driver' => 'Cake\Database\Driver\Mysql',
                'persistent' => false,
                'host' => 'localhost',
                'username' => 'cakephp',
                'password' => 'AngelF00dC4k3~',
                'database' => 'cake_cms',
                'encoding' => 'utf8mb4',
                'timezone' => 'UTC',
                'cacheMetadata' => true,
            ],
        ],
        // More configuration below.
    ];
    ```
  
  ## Installation
  * Now you can quickly check that our installation is correct, by checking the default home page. Before you can do
  that, you’ll need to start the development server:
  ```
  cd /path/to/our/app
  
  bin/cake server
  ```
  * This will start PHP’s built-in webserver on port 8765. Open up http://localhost:8765 in your web browser to see the welcome page

