# uuouu
Laravel app for all.


# Install
````
git clone ssh://git@github.com:osamuya/uuouu.git
cd uuouu/gate
php composer install
````

# Optimazer
````
bash uuo_optimazer.sh
````

以下を実行します。

- php composer.phar install
- php composer.phar dump-autoload
- php artisan clear-compiled
- php artisan optimize
- php artisan config:cache
- php artisan route:cache
- php artisan view:clear

