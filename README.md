
## Program instructions, step by step
```
composer install
```
```
cp .env.example .env
```

write the data of your databes in the ```.env``` file

```
php artisan migrate
```

```
php artisan db:seed
```

after that, you need to generate a key and enable the artisan server (or deploy it on the server)


```
php artisan key:generate
```

```
php artisan serve
```


you can see both the frontend with search and make an api request, an example of a postman collection in the root of folders

exam-test.postman_collection.json
