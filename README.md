# pool-service

Ensure docker is installed

## Clone the project
RUN ```git clone https://poolservicesoftware.visualstudio.com/DefaultCollection/PSS/_git/PSS-Website-v2```

### For Production
RUN ```git clone https://poolservicesoftware.visualstudio.com/DefaultCollection/PSS/_git/Docker-Website-PROD Docker-Configs```

### For Beta
RUN ```git clone https://poolservicesoftware.visualstudio.com/DefaultCollection/PSS/_git/Docker-Website-BETA Docker-Configs```

Contact gvelez@poolservice.software if you need access to the configuration repository.

## Copy the configurations
```cp -R Docker-Configs/ PSS-Website-v2/ ```

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


