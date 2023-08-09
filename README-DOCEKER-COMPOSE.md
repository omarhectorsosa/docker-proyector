# Comandos docker. 

## Crear el Dockfile 

1. Usa una imagen base de PHP y Apache : `FROM php:7.4-apache`

1.  Copiar la configuracion apache : `COPY apache.conf /etc/apache2/sites-enabled/000-default.conf`

1. Copia los archivos de la aplicación al contenedor : `COPY . /var/www/proyector`

## Apache config

```
<VirtualHost *:80>
    ServerAdmin webmaster@localhost
    DocumentRoot /var/www/proyector
    <Directory /var/www/proyector>
        AllowOverride None
        Order Allow,Deny
        Allow from All
 
        <IfModule mod_rewrite.c>
            RewriteEngine On
            RewriteCond %{REQUEST_FILENAME} !-f
            RewriteRule ^(.*)$ index.html [QSA,L]
        </IfModule>
    </Directory>
</VirtualHost>
```


##  File Dockfile

```
FROM php:7.4-apache

COPY apache.conf /etc/apache2/sites-enabled/000-default.conf

RUN chown -R www-data:www-data /var/www

COPY ./proyector /var/www/proyector
WORKDIR /var/www/public

RUN chown -R www-data:www-data /var/www/proyector

CMD ["start-apache"]
```

## File Docker-compose 

```
version: "3"

services:
  web:
    image: proyector:v1
    build:  
      context: .
      dockerfile: Dockerfile
    environment:
      APP_ENV: dev
    ports:
      - 8080:8080
    volumes:
      - ./proyector:/var/www/proyector
```

#### Crear y correr el docker

`docker-compose up -d --build`

#### Detener el docker removiendo la version anterior

`docker-compose down --remove-orphans`

#### Eliminar imagen (de a uno o todos)

`docker rm -f <container-id-or-name>`

`docker rm -f $(docker ps -aq)`

#### Ver los proceso docker activos

`docker-compose ps`

## Subir al docker hub la imagen

`docker tag «id image» user/image:tagname`

`docker push user/image:tagname`









