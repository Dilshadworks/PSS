# pool-service

Ensure docker is installed

## Clone the project
RUN ```git clone 

## Copy the configurations
```cd PSS-Website-v2```

## Run docker
```docker-compose build```
```docker-compose up -d```

```docker ps```
copy the container id of the php_apache container

```docker exec -it <copied_container_id> bash```

```composer update```

Run the migrations:
```php artisan migrate```

```chmod o+w ./storage/ -R```

## Apache Configuration
Apache configuration can be found in docker/web/default.conf


