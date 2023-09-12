# Comandos docker. 

## Crear el Dockfile 

1. Usar un Apache solo: `FROM httpd:2.4` 
1. Copia los archivos de la aplicación al contenedor : `COPY ./proyector /usr/local/apache2/htdocs/`
1. indica el espacio de trabajo: `WORKDIR /usr/local/apache2/htdocs/`
1. Como opcional puedes exponer el puerto 8080 para que se pueda acceder al servidor web: `EXPOSE 8080`

##  Crear el archivo dockfile

```
FROM httpd:2.4
COPY ./proyector /usr/local/apache2/htdocs/
WORKDIR /usr/local/apache2/htdocs/
```

## General la imagen

Cada vez que se crea una nueva version de imagen desde image: myapp:tag (porque se cambio el codigo fuente)

```
docker build .
```

#### Corre el docker

`docker run -db --name docker_name -p 8080:8080` 

## Debug docker

`docker image ls`

`docker ps`

`docker logs -f CONTAINER`

### Detener y eliminar docker

`docker stop CONTAINER`

`docker rmi -f CONTAINER`



## Subir al docker hub la imagen

`docker login`

`docker tag «id image» user/image:tagname`

`docker push user/image:tagname`

`docker rmi $(docker images -a -q)`

### Ver mas en [Docker CLI](https://docs.docker.com/engine/reference/run/)







