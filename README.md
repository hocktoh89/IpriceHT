# IpriceHT

Prerequisites
1. php-cli
2. composer


-------
Mac OS
-------
1. PHP installation

    execute "php --version" on Terminal to check if it exist\
                            or\
    install with homebrew "brew install php"

2. Composer installation

Run the command below

    curl -sS https://getcomposer.org/installer | php

    mv composer.phar /usr/local/bin/composer

    chmod +x /usr/local/bin/composer

Now you can use “composer” command directly without doing “php composer.phar”

-----------
Basic Setup
-----------
1. use terminal / command line tools, cd to root of the project folder\
    chmod +x index.php

2. run\
    composer install

    composer dump-autoload


--------------  
Start the Code
--------------
1. run\
    ./index.php

--------------
Unit Test
--------------
1. run\
    ./vendor/bin/phpunit --testdox test

