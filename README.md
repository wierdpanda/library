# library

Dependencies:

1. composer
2. php 8^
3. node 18^

copy .env.example over to.env
Setup database details in .env

create the " library " database in your database host (default was built for laragon)

Terminal install commands 
1. composer install
2. npm install
3. npm run build

Create database
1. php artisan migrate:fresh --seed

Generate APP Key
1. On frist load it will ask you to generate APP key instead of taking you to the page.
2. Click Generate APP Key in the top right hand side of page.
3. refresh page


Nat only!!!
1. add the laragon server port info in vite.config

