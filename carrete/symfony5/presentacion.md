

layout: true

class: center, middle, inverse
---

# Proyecto Symfony 5.0

---
layout: true
class: animated fadeInUp
---

## Agenda

(Tiempo estimado: 4h)

* Symfony
  - Flujo Symfony
  - Estructura de directorio
  - Archivos importantes
  - intalacion motor Symfony

---

## Agenda

* Inicio de proyecto
   - Symfony `new project`
   - Caracteristicas del proyecto
   - Archivos de configuracion `.env` y `.env.local`
   - Archivo `.htaccess`
   - Utilizar `Docker` para la BD y el servidor WEB
   - Creacion `controlador` y `template`
   - Instalación y uso de `monolog` para registrar los mensajes en el logs
* Creando un proyecto a partir de un modelo de negocio
   - Presentacion de modelo de negocio
   - Entidad, Controlador y vista de `Estado`
   - Concepto de `Fixture`
   - Incluir mensaje en la vista
   - Translation
    - Definición de transalation
    - Configuración de translation
---

## Agenda    
   - Fremework Boostrap
    - Armar el HOME del Frontoffice y Backoffice
    - Armar vista ABM backoffice de las entidades `Product` 
   - Creacion de los controladores y template
   - Creacion de las estructura de tablas 
   - Metodos Listar, Agregar, Eliminar y Modificar Producto

---
## Agenda

* Manejo de servicio.
    - ¿Que es un servicio en Symfony?.
    - Configuración de servicio
    - Crear la entidad Imagen
    - Subir una imagen con el servicio `upload`

---
## Agenda

* Formularios : Creación
  - Creacion Entidad y Formulario
  - Renderizar Formulario
  - Completar acciones (Listado, Alta, Edicion y Borrado)  

* Manejo de Excepciones
    - Concepto de excepciones
    - Configuracion
* Modulo `Security`
    - Login Form
    - Customizar Login
    - Manejar permisos.

---

# Symfony

* .texto-grande[Básicamente Symfony lo que hace es jugar con el servicio HTTP que todos conocemos.]

* .texto-grande[Symfony entra en la preparación de esa respuesta, y tiene la peculiaridad que aporta una estructura Modelo Vista Controlador que hace que el desarrollo sea bastante escalable.]

* .texto-grande[Toda su documentacion es publica y puede accederse desde  [Symfony](https://symfony.com/) ]  

---

# Symfony:  Versiones

`v6.1.4` Version stable: Requiere PHP 8, recomendado para muchos usuarios e incluye funcionalidades futuras.
`v5.4.12` Version con soporte a largo plazo: Requiere PHP 7, 3 años de soporte y no incluye funcionalidades futuras. 

.pull-center[
   ![:scale 55%](./img/release.png)
]


---
# Symfony

## Flujo de symfony 

.pull-center[
   ![:scale 100%](./img/symfony_flujo.webp)
]

---

# Symfony: Estructura de carpetas y archivos  

.pull-center[
   ![:scale 110%](./img/symfony5folders.png)
]

---

# Symfony 

## Estructura de directorio

* `tests`: Donde se guardan los test de la aplicacion
* `templates`: Se guardan las plantillas .twig que correponde a las vistas del proyecto
* `config`: Se guardan todas las configuraciones del proyecto 
* `src`: Mantiene lo archivos fuentes del proyecto (entidades, controladores, etc)
* `var`: Archivos temporales como log, cache, cola de correo.
* `public`: Todo los archivos web.
* `vendor`: Librerías de Symfony.
* `translations`: Se configuracion las traducciones del sitio y confguraciones de mensajería.

---

# Symfony 

# Archivos importantes

* `.env`: Configuraciones del ambiente como protocolos de mail, base de datos, tipo de entorno, etc
* `.env.local`: Configuraciones del ambiente local como protocolos de mail, base de datos, tipo de entonrno, etc
* `config/parameters.yaml`: Contiene las configuracion del negocio del proyecto
* `config/routing.yaml`: Mapeo de direcciones
* `public/.htacces.`: Configuración de reglas para el servidor host (redireccionamientos, restricciones, etc) 
* `src/Kernel.php`: Nucleo del framework
* `templates/global/base.html.twig`: Base de los templates, suelen escribirse los header de los html. 
* `var/log/dev.log`: Log del sistema para el entorno de desarrollo, test ó produccion.

---

# Symfony

## Consola Symfony

La consola de symfony  nos simplifica  el uso de la herramienta con diferentes comandos disponibles para generar codigo, tablas y datos pruebas en forma rapida.

```markdow
$ curl -sS https://get.symfony.com/cli/installer | bash
```
Puede pasar que necesites exportar el comando para utilizar en diferente consola

```markdow
$ export PATH="$HOME/.symfony5/bin:$PATH"

Or 

$ mv /Users/weaverryan/.symfony/bin/symfony /usr/local/bin/symfony
```
Luego ejecutar comando para verificar su instalación

```bash 
$ symfony --v
```

---

# Symfony

## Consola Symfony

Esta herramienta es solo sugerencia, por otro lado puede utilizar la herramienta que otorga smfony 

* Desde el propio proyecto tenemos la carpeta bin donde se puede acceder a los comando con la siguietne sintaxis

 `php bin/console [comando] [opciones]` 

Pueden acceder a toda la información  con el siguiente comando  `php bin/consola list`. Ver mas informacion en [Console Commands](https://symfony.com/doc/current/console.html)

---

# Creacion de proyecto

## `Symfony` 

```bash
$ symfony new my_project_name --version="5.1" 
```

## `Composer`

Instalar composer `sudo apt-get install composer` (recomendable)

```bash
composer create-project symfony/skeleton my_project_name
composer create-project symfony/website-skeleton my_project_name
composer create-project symfony/website-skeleton my_project_name 5.1.*
```

[Fuente](https://symfony.com/doc/5.x/setup.html#creating-symfony-applications) 


---
# Inicio de proyecto

Configurar [.env](./doc/.env) con los ambientes y conección a base de datos.

```markdow
###> symfony/framework-bundle ###
## Conviene generar uno diferente por ambiente.
APP_ENV='dev'

###> doctrine/doctrine-bundle ###
DATABASE_URL=mysql://root:password@localhost:3306/almacen

###> symfony/swiftmailer-bundle ###
MAILER_URL=smtp://mail.psasender.com.ar:587?username=senderauth@psasender.com.ar&password=92ADvi!YV8r
###< symfony/swiftmailer-bundle ###
```

---

# Inicio de proyecto

## Correr el base de datos y el servidor Web

Teniendo las imagenes que corresponden en los [Docker Hub](https://hub.docker.com/)
Subimos al proyecto el [docker-composer.json](./docker/docker-compose.yml) 

```json

services:
  database:
    image: ososa2022/mariadb-10.2.7:1.0.2
    network_mode: host
    environment:
      MYSQL_ROOT_PASSWORD: **3d@x**
      MYSQL_USER: ososa
      MYSQL_PASSWORD: ososa123
      MYSQL_DATABASE: temp
    restart: unless-stopped
    //..
  web:
    image: ososa2022/php-symfony-8.1.0:1.0.1
    //..
volumes:
  mariadb_local_volume:
    driver: local
```

---

# Inicio de proyecto

# Configura el archivos `htaccess`

LLevar a public el archivo [.htaccess](./rwriter/.htaccess) para ordenar los accesos 

```bash
   <IfModule mod_rewrite.c>
       RewriteEngine On
       RewriteCond %{HTTP:Authorization} ^(.*)
       RewriteRule .* - [e=HTTP_AUTHORIZATION:%1]   
       RewriteCond %{REQUEST_FILENAME} !-f
       RewriteRule ^(.*)$ index.php [QSA,L]
   </IfModule>
```
---

# Inicio de proyecto

## Creo la base de datos en base a la configuración (en el caso que no exista)

Luego se debe ejecutar el siguiente comando 

```markdow 
$ symfony console doctrine:database:create
Created database `temp` for connection named default
```

Finalizando, compruebo la base de datos creada

```markdow 
mysql> show databases;
+--------------------+
| Database           |
+--------------------+
| temp               |
+--------------------+
```

Es posible instalar el paquete `Doctrine ORM`  corriendo el comando `$ composer require symfony/orm-pack`

---

# Inicio de proyecto

## Visualizar aplicacion

Y vamos al navegar para ubicar nuestro sitio y su presentacion:

.pull-center[
   ![:scale 65%](./img/symfony5.0.png)
]

---

# Inicio de proyecto

## Pagina inicial y router

Antes de comenzar debemos verificar la existencia de las siguientes carpetas. 

* **bin**: Contiene todos los script  de symfony como el uso de comandos de linea
* **config**: En esta carpeta se encuentran todos los archivos de configuracion, los por defecto el route.yaml y archivos de configuracion de todos los paquetes instalados (mailer, twig, translations, etc)
* **migrations**: En esta carpetas se encuentran  los archivos que se generan cuando se inicia el modelado de  la base de datos para luego migrar al motor correspondientes
* **public**: La carpeta raiz donde se encuentra en `index.php` y funcionara como enlace al publico. Tambien se econtraran los CSS y JS junto a las images que se uben al sitio.
* **src**: Carpeta de codigo fuente donde se ubicaran los controladores del modelo MVC. Contiene las carpetas `Entity`, `Repository`, `Service`, `Security` entre otras a medida que el proyecto va sumando funcionalidades.
* **templates**: Carpeta donde se ubicarion los `.twig ` correspondiente a los plantillas de la vista
* **vendor**: Aqui se instalaran los paquetes  necesario para el uso basico del sitio
* **translations**: Contiene todos los archivos de traducciones de texto, usado conmumente para declarar mensajes, resumir idiomas entre otras objetivos.

---

# Inicio de proyecto

## Pagina inicial y router

El paso siguiente es comprobar las rutas del proyecto con el siguiente comando: 

```markdow
$ symfony console debug:router
 -------------------------- -------- -------- ------ ----------------------------------- 
  Name                       Method   Scheme   Host   Path                               
 -------------------------- -------- -------- ------ ----------------------------------- 
  _preview_error             ANY      ANY      ANY    /_error/{code}.{_format}           
  _wdt                       ANY      ANY      ANY    /_wdt/{token}                      
  _profiler_home             ANY      ANY      ANY    /_profiler/                        
  _profiler_search           ANY      ANY      ANY    /_profiler/search                  
  _profiler_search_bar       ANY      ANY      ANY    /_profiler/search_bar              
  _profiler_phpinfo          ANY      ANY      ANY    /_profiler/phpinfo                 
  _profiler_search_results   ANY      ANY      ANY    /_profiler/{token}/search/results  
  _profiler_open_file        ANY      ANY      ANY    /_profiler/open                    
  _profiler                  ANY      ANY      ANY    /_profiler/{token}                 
  _profiler_router           ANY      ANY      ANY    /_profiler/{token}/router          
  _profiler_exception        ANY      ANY      ANY    /_profiler/{token}/exception       
  _profiler_exception_css    ANY      ANY      ANY    /_profiler/{token}/exception.css   
 -------------------------- -------- -------- ------ ----------------------------------- 

```

---

# Inicio de proyecto

## Pagina inicial y router

Ahora avanzamos creando un controlador y template con el siguiente comando:

```markdow
$ symfony console make:controller HolaMundo
created: src/Controller/HolaMundoController.php
created: templates/hola_mundo/index.html.twig

```
En este punto se crearon los correspondientes controladores y vista (template) 
![holamundo](./img/holamundo.png)
---

# Inicio de proyecto

## Pagina inicial y route

```yaml
 symfony console debug:router
 -------------------------- -------- -------- ------ ----------------------------------- 
  Name                       Method   Scheme   Host   Path                               
 -------------------------- -------- -------- ------ ----------------------------------- 
  _preview_error             ANY      ANY      ANY    /_error/{code}.{_format}           
  _wdt                       ANY      ANY      ANY    /_wdt/{token}                      
  _profiler_home             ANY      ANY      ANY    /_profiler/                        
  _profiler_search           ANY      ANY      ANY    /_profiler/search                  
  _profiler_search_bar       ANY      ANY      ANY    /_profiler/search_bar              
  _profiler_phpinfo          ANY      ANY      ANY    /_profiler/phpinfo                 
  _profiler_search_results   ANY      ANY      ANY    /_profiler/{token}/search/results  
  _profiler_open_file        ANY      ANY      ANY    /_profiler/open                    
  _profiler                  ANY      ANY      ANY    /_profiler/{token}                 
  _profiler_router           ANY      ANY      ANY    /_profiler/{token}/router          
  _profiler_exception        ANY      ANY      ANY    /_profiler/{token}/exception       
  _profiler_exception_css    ANY      ANY      ANY    /_profiler/{token}/exception.css   
  app_hola_mundo             ANY      ANY      ANY    /hola/mundo                        
 -------------------------- -------- -------- ------ -----------------------------------
```

---

# Inicio de proyecto

## Pagina inicial y route

Desde la url onfigurada puedo acceder a `http://127.0.0.1/hola/mundo`
.pull-center[
   ![:scale 65%](./img/hola_mundo.png)
] 

---

# Inicio del proyecto

## Construyo el controllador para el home del `Backoffice` y `Frontoffice`

Agrego el controler `src/controller/backoffice/IndexController.php` 

```php
namespace App\Controller\Backoffice;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController {
    /**
     * @Route("/backoffice", name="app_backoffice_index")
     */
    public function index(): Response
    {
        return $this->render('backoffice/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
```

Utilizar el `namespace` para ubicar el controlador en otro nivel de carpeta.

---

# Inicio del proyecto

## Mensaje en el sistema de logs

Sobre el `IndexContoller.php` utilizo el log

```php
namespace App\Controller;

use Psr\Log\LoggerInterface;
//...
class IndexController extends AbstractController
{
    /**
     * @Route("/", name="app_index")
     */
    public function index(LoggerInterface $logger): Response
    {
        $logger->info('MJE-0001: Este es un mensaje de log en el entorno prod.');

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
```
---

# Inicio del proyecto

## Configuro el monolog

Configuro el archivo `config/packages/prod/monolog.yaml`

```yaml
monolog:
    handlers:
        nested:
            type: stream
            path: "%kernel.logs_dir%/%kernel.environment%.log"
            level: info
```            

Y limpio la cache

```bash
$ php bin/console cache:clear --env=prod
```

Si no se tiene el monolog instalado correr la siguiente sentencia

```bash
$ composer require symfony/monolog-bundle
```
[Fuente](https://symfony.com/doc/current/logging.html)

---

# Inicio del proyecto

## Construyo el template del home del backoffice y frontoffice

Agrego el template `template/backoffice/index.html.twig`

```php
{% extends 'backoffice_layout.html.twig' %}
{% block title %} Backoffice! {% endblock %}
{% block body %}
//.. 
{% endblock %}

```

---
# Creando un proyecto a partir de un modelo de negocio

## Presentacion del modelo de negocio 

El modelo de negocio se basaria en estas tres entidades. `Producto, Cliente y Ventas`. 

.pull-center[
   ![:scale 80%](./img/der.png)
]

[PlantUml](https://www.plantuml.com/plantuml/uml/NP3DQiCm48Jl-nI3Jscf3xtw56WR28MI4l80Gjec0baAqfeUGj-zbkKVuukqZ4Qpt-u-YOhIjOuS_mWa8DhhJM1iP2qsU2BjL4eunM0wBNY0O4s3enU-SYHurNA3iqJhhmJ3IKTxppyNyHIjxZq75vGGwhhk3pYRPFUKgtGBlwLYOqVDi6FXKdlkdq5_4yfRboIq7F4W32osiE3qITZmm7Yxm0wjaKH9jkHhIJqhnsbAFAuJpM1_p-uIS2-xQEQb7B9DZrZD35ZqozVn-_An6p-zJBRLH0K5c-QRMRARvkJgjK9Tetgk2ZWDvreUsMYyivQVigDClcTlkjRz0m00)

---

# Creando un proyecto a partir de un modelo de negocio

## Proyeccion en Symfony

Se presenta el siguiente modelo de negocio para modelar desde la herramienta. 

.pull-center[
   ![:scale 80%](./img/doctrine_image_1.png)
]

---

# Creación de loas Entity (BD), Controller, Template y Repository

## Entidad `State`

Se debe indicar los nombres de los campos, tipo de campo y si es nullable. 

.pull-center[
   ![:scale 30%](./img/state.png)
]

---

# Creación de loas Entity (BD), Controller, Template y Repository

## Entidad `State`

```bash 
$ symfony console make:entity State

created: src/Entity/State.php
created: src/Repository/StateRepository.php

//...
New property name (press <return> to stop adding fields): name

Field type (enter ? to see all types) [string]:

Field length [255]:

Can this field be null in the database (nullable) (yes/no) [no]:

updated: src/Entity/State.php
Add another property? Enter the property name (or press <return> to stop adding fields):         
//..
```
---

# Creación de loas Entity (BD), Controller, Template y Repository

## Entidad `State`

Se actualiza el proyecto

.pull-center[
   ![:scale 60%](./img/state-file.png)
]

---

# Entidad `State`: Creo el migration y tabla en base de datos

Creo el migration

```bash
$ symfony console make:migration

    Next: Review the new migration "migrations/Version20230516002936.php"
    Then: Run the migration with php bin/console doctrine:migrations:migrate
```
Creo la tabla

```bash
$symfony console doctrine:migrations:migrate

    [notice] Migrating up to DoctrineMigrations\Version20230516002936
    [notice] finished in 42.8ms, used 18M memory, 1 migrations executed, 1 sql queries
```
---

# Entidad `State`: Creo el migration y tabla en base de datos
.pull-left[
	![migration](./img/migration.png)
]
.pull-right[
![migration-db](./img/migration-db.png)
]

---

# Entidad `Product`

Creo la base de datos y la siguiente entidad `Product` con los campos `Name, Descripcion, Price` con el tipo, tamaño y nulabilidad . 

Además teniendo en cuenta que un producto puede tener solo un estado se debe crear la relacion  `State` a `Product` de `OneToMany`.

.pull-center[
   ![:scale 25%](./img/product.png)
]

---

# Entidad `Product`

Se debe indicar los nombres de los campos, tipo de campo y si es nullable. 

```markdow 
$ symfony console make:entity Product

New property name (press <return> to stop adding fields):
 > name

 Field type (enter ? to see all types) [string]:
 > 

 Field length [255]:
 > 

 Can this field be null in the database (nullable) (yes/no) [no]:
 > 
 updated: src/Entity/Customer.php

```

---

# Entidad `Product`: Los tipos de relation determina las cardinalidad

```markdow 
 Add another property? Enter the property name (or press <return> to stop adding fields): state
 Field type (enter ? to see all types) [string]: relation
 What class should this entity be related to?: State

What type of relationship is this?
 ------------ --------------------------------------------------------------------- 
  Type         Description                                                          
 ------------ --------------------------------------------------------------------- 
  ManyToOne    Each Product relates to (has) one State.                            
               Each State can relate to (can have) many Product objects            
                                                                                    
  OneToMany    Each Product can relate to (can have) many State objects.           
               Each State relates to (has) one Product                             
  //..               
 ------------ --------------------------------------------------------------------- 
 Relation type? [ManyToOne, OneToMany, ManyToMany, OneToOne]:
 > ManyToOne

```

---

# Entidad `Product`

* Se debe decidir si el campo state_id debe ser null o no 
* En el objeto State se puede agregar los metodos  `getProducto`,  `addProduct` y `removeProduct`.
* También se puede decidir si al eliminar un estado se puede decidir que hacer con los productos.

```bash
Is the Product.state property allowed to be null (nullable)? (yes/no) [yes]: no

 Do you want to add a new property to State so that you can access/update 
 Product objects from it - e.g. $state->getProducts()? (yes/no) [yes]: yes
 A new property will also be added to the State class so that you can access the related Product objects from it.
 New field name inside State [products]: 
 Do you want to activate orphanRemoval on your relationship?
 A Product is "orphaned" when it is removed from its related State.
 e.g. $state->removeProduct($product)
 
 NOTE: If a Product may *change* from one State to another, answer "no".

 Do you want to automatically delete orphaned App\Entity\Product objects (orphanRemoval)? (yes/no) [no]: 

```
---

# Entidad `Product`

.pull-center[
   ![:scale 50%](./img/prod-state.png)
]

---

# Entidad `Customer`

.pull-center[
   ![:scale 50%](./img/customer.png)
]

---

# Entidad `Customer`

Se debe indicar los nombres de los campos, tipo de campo, si es nullable. 

```bash 
$ symfony console make:entity Customer
 created: src/Entity/Customer.php
 created: src/Repository/CustomerRepository.php
 
 Entity generated! Now let's add some fields!
 You can always add more fields later manually or by re-running this command.

 New property name (press <return> to stop adding fields):
 > name
 Field type (enter ? to see all types) [string]:
 > 
 Field length [255]:
 > 
 Can this field be null in the database (nullable) (yes/no) [no]:
 > 
 updated: src/Entity/Customer.php

```

---

# Entidad `Sales`

.pull-center[
   ![:scale 50%](./img/sales.png)
]

1. A Customer :  `ManyToOne` (un cliente puede hacer muchas ventas) 
2. A Product es de `ManyToOne` (un producto puede estar en muchas ventas)

```markdow 
$ symfony console make:entity Sales
```
---

# Crear los archivos para la migracion y crear las entidades en la base de datos.

```yaml
$ symfony console make:migration
$ symfony console doctrine:migrations:migrate
```

Se genera en un nuestra base de datos la siguiente estructura

.pull-center[
   ![:scale 50%](./img/der-all.png)
]

---

# Entidad `State`:  Genero un estado con `fixture`
Cargo el modulo

```yaml
composer require --dev doctrine/doctrine-fixtures-bundle
```

```php
// ...
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        //...
    }
}
```
---

# Genero un estado con `fixture` para la entidad `State`

Creo el `Fixture State`
```php
// ...
use App\Entity\State;
class AppFixtures extends Fixture{
    public function load(ObjectManager $manager): void {
        $state = new State();
        $state->setName('activo');
        $manager->persist($state);
        $manager->flush();
    }
}
```

---

# Entidad `State`: 

Ejecuto el fixture

```yaml
php bin/console doctrine:fixtures:load --append
```

.pull-center[
  ![migration-db](./img/fixture-data.png)
]

---

# Repository `State`

Actualizar el `findById` del `State`

```php
    //...
    public function findById($id): ?State
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.id = :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    //..
```

---

# Controller `State`

Recordar que luego de crear los controladores llevarlos al espacio correspondiente

```markdow
symfony console make:controller State

created: src/Controller/StateController.php
created: templates/state/index.html.twig
```

```bash
//..
use App\Entity\State;

class StateController extends AbstractController
{
    /**
     * @Route("/backoffice/state", name="app_backoffice_state")
     */
    public function list(): Response
    {
        return $this->render('backoffice/state/list.html.twig', [
            'controller_name' => 'StateController'
        ]);
    }
}
```
---

# Uso del `namespace`

Los controladores del backoffice y el backoffice se debe ubicar dentro de la carpeta `src` con una nuevo nivel de carpeta. 

.pull-center[
   ![:scale 50%](./img/controller.png)
]

Siempre al llamar a estos controladores se debe indicar el `namespace` en los propios controladores

```markdown
<?php
namespace App\Controller\Frontoffice\
```

```markdown
<?php
namespace App\Controller\Backoffice\
```

---

# Controller `State`: Metodo list()

En `StateController.php` debo crear el metodo `list` teniendo en cuenta los siguientes concepto.

* Incluir las `Entity`, en este caso las entidades `State` 
* En principio diseñamos la ruta y el nombre de la ruta (para uso interno del código)
* Y finalmente creo una funcion `public` como respuesta un objeto `Response` 

```bash
//..
use App\Entity\State;

**
* @Route("/backoffice/state", name="app_backoffice_state_list")
*/

public function list(): Response { 
    $repository = $this->getDoctrine()->getRepository(State::class);
    $states = $repository->findAll();

    return $this->render('backoffice/state/list.html.twig', [
            'controller_name' => 'State List',
            'states'=>$states
    ]);   
}
```

---

### Template `List State`

```php
{% extends 'backoffice/backoffice.html.twig' %}

{% block title %}Hello StateController!{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div class="example-wrapper">
    <h1>Hello {{ controller_name }}! ✅</h1>
   <table>
    <thead><th>ID</th><th>Nombre</th></thead>
    <tbody> 
        {% for state in states %}
            <tr>
                <td>{{ state.id }}</td>
                <td>{{ state.name }}</td>
            <tr>
        {% endfor %}
    </tbody>
</table>
</div>
{% endblock %}
```
---

# Boostrap

## Agregar motor boostrap para el `backoffice`

Para poder integrar el framework de boostrap debemos seguir los siguientes pasos:

1. Descargar un framework a gusto 
    1. [Web Nice Admin](https://bootstrapmade.com/demo/NiceAdmin/) 
    1. [Web AdminLTE](https://adminlte.io/themes/v3/)
1. Copiar el nucleo del framework (css, js y vendor) 
1. Llevarlo al `/public` 

En este caso elegimos el `Nice Admin` [File Nice Admin](./doc/boostrap/backoffice.zip) y lo copio en `public`, con esta descarga tendremos un apartado para este estilo en la carpeta `backoffice`. 

Cabe destacar que para la iconografia se utiliza [Bootstrap Icons](https://icons.getbootstrap.com/)

---

# Boostrap

## Comenzando la prueba con el HOME `/backoffice` 

En base al `framework` elegido armamos el layout 

1. Creo un `IndexController.php` y la ruta `/backoffice/` 
1. Creo un template `template/backoffice/index.html.twig`
1. Copio todo el layout [Layout del Backoffice](./doc/template/plantillas/layout/backoffice/layout.zip) en la carpeta `template/backoffice`
1. Actualizo el archivo `template/backoffice/index.html.twig`

```bash
{% extends "backoffice/layout/backoffice_layout.html.twig" %}

{% block  content %}

<div class="container-fluid">
    <h1>Hello {{ controller_name }}!</h1>
</div>
{% endblock %}
```

---

# Translations

Las `traducciones` se utiliza para unificar los terminos en diferente idiomas en base a una configuracion para eso se realiza las siguientes tareas.  

1. Configura el tranlations

Configurar el idioma por defecto `config/package/translations.yaml`

```yaml
framework:
    default_locale: es
    translator:
        default_path: '%kernel.project_dir%/translations'
        fallbacks:
            - es
```
1. Configurar los terminos en `translations` creando o copiando los documentos [Transaltions](./doc/translations/translations.zip)
1. Copio todo las tranlations correspondiente utilzados en los template agregar `tranlations/messages.es.yaml`

---

# Boostrap

## Copio los template de los Productos y Estados.

Cuando verifiquemos que todo el `Framework del Boostrap`  este correctamente configurado vamos a colocar los restantes templates para el ABM estado y producto. 

1. Copio los templates [State](./doc/template/plantillas/backoffice/state/state.zip) en `templates/state`
1. Copio los templates [Product](./doc/template/plantillas/backoffice/product/product.zip) en `templates/product`

---

### Controller `State`: Metodo show()

```php
/**
* @Route("/backoffice/state/show/{id}", name="app_backoffice_state_show")
*/
public function show($id): Response
{
    $repository = $this->getDoctrine()->getRepository(State::class);
    $state = $repository->findById($id);
    $message = '';
    if(!$state){   
        $message = "El estado no existe.";
    }
    return $this->render('backoffice/state/show.html.twig', [
        'controller_name' => 'Show State',
        'state'=>$state, 
        'message'=> $message
    ]);
}
```

Recordar siempre crear el método `getById()`en el repostorio.

---

## Configuro mi template con las diferentes rutas.

Ya teniendo el controlador y la entidad debemos empezar a codificar los metodos correspondientes. Teniendo en cuenta que ya tenemos el correspondiente controlador estaremos generando los correspondientes metodos.

Antes de hacer eso, ya que tenemos el controlador ProductController agrego en el archivo `templates/backoffice_sidebar.html.twig` el indice para acceder al listado de produccion

```html
<li class="nav-item">
    <a class="nav-link " href="{{ path('app_product_list') }}">
        <i class="bi bi-basket"></i>
        <span>Productos</span>
    </a>
</li><!-- End Dashboard Nav -->

//...

<td>
    <a href="{{ path('app_backoffice_state_delete', {'id': state.id}) }}" class="btn btn-danger disable-btn del-link" type="submit">
        <i class="bi bi-x-square"></i>
    </a>
</td>

//..

```

---

## Agregar el mensaje en el template base.

En un templete base (layout) agrega el siguiente div para los mensaje de exito 

```markdown
{% for message in app.flashes('success') %}
<div class="alert alert-success ml-10" style="margin-left:20px; margin-right:20px">
    {{ message }}
</div>
{% endfor %}
{% for message in app.flashes('error') %}
<div class="alert alert-danger ml-10" style="margin-left:20px; margin-right:20px">
    {{ message }}
</div>
{% endfor %}
```

Desde el controlador puedo utilizar estos mensaje de la siguiente manera

```php
//..
$this->addFlash('success','Se guardo correctamente el producto');
//..
```

---

# Controller `Product`

Recordar que luego de crear los controladores llevarlos al espacio correspondiente

```markdow
symfony console make:controller Product

created: src/Controller/ProductController.php
created: templates/product/index.html.twig
```

---

# Controller `Product`: Metodo list()

En `ProductController.php` debo crear el metodo `list` teniendo en cuenta los siguientes concepto.

* Incluir las `Entity`, en este caso las entidades `Product` y `State`
* En principio diseñamos la ruta y el nombre de la ruta (para uso interno del código)
* Y finalmente creo una funcion `public` como respuesta un objeto `Response` 

```markdow
use App\Entity\Product;
use App\Entity\State;

**
* @Route("/backoffice/product/list", name="app_bacjkoffice_product_list")
*/

public function list(): Response {   
       [.....]
}

```
---

# Controller `Product`: Metodo list()

```php
/**
* @Route("/backoffice/product/list", name="app_backoffice_product_list")
*/
public function list(){
    $repository_product = $this->getDoctrine()->getRepository(Product::class);
    $products = $repository_product->findAll();
    return $this->render('backoffice/product/list.html.twig', [
        'controller_name' => 'List',
        'productos'=>$products
    ]);
}
```
---

# Creación de loas Entity (BD), Controller, Template y Repository

### Template `List Product`

```php
<table>
<thead><th>Nombre</th><th>Descripcion</th><th>Precio</th><th>Estado</th></thead>
<tbody>
    {% if productos ?? false %}   
    {% for producto in productos %}
        <tr>
        <td>{{ producto.name}}</td>
        <td>{{ producto.description}}</td>
        <td>{{ producto.price}}</td>
        <td>{{ producto.state.name}}</td>
        <td>
    {% endfor %}
    {% endif %}
</tbody>
```
---

### Controller `Product`: Metodo new()

Debo crear el metodo `new` teniendo en cuenta los siguientes concepto.

* Incluir las `Entity`, en este caso las entidades `Product` y `State`
* En principio diseñamos la ruta y el nombre de la ruta (para uso interno del código)
* Y finalmente creo una funcion `public` como respuesta un objeto `Response` 

```markdow
use App\Entity\Product;
use App\Entity\State;

**
* @Route("/backoffice/product/new", name="app_bacjkoffice_product_new")
*/

public function new(): Response {   
       [.....]
}

```

---

### Controller `Product`: Metodo new()

Para continuar debemos tener en cuenta que nuestro metodo va llamarse en dos ocasiones, cuando se presenta el formulario y cuando recibo la informacion luego de haber echo el `submit`. 
```php
//...

use App\Entity\State;

public function new(): Response {

    //Llamo a todos los State para ponerlo en el formularios
    $repository=$this->getDoctrine()->getRepository(State::class);
    $states=$repository->findAll();
    
    if(isset($_POST['submit'])){
        //...
    }
    return $this->render('backoffice/product/new.html.twig', [
                'controller_name' => 'New.',
                'states'=>$states
    ]);
}
```
Donde el bloque dentro del IF procesara lo enviado. Por fuera del IF es el flujo para presentar el formulario.

---

### Controller `Product`: Metodo new()

Queda decidir que se debe hacer para registrar el producto. Para ello se debe hacer las siguientes acciones: 

1. Obenter ambos `Repository` de `Product` y `State`
1. Obtener un objeto `State` en base al codigo recibido
1. Instanciar `Product`

```php
    //....
        $repository_state=$this->getDoctrine()->getRepository(State::class);
        if(isset($_POST['submit'])){
           //..
        } else {
            $states=$repository_state->findAll();
        }
        return $this->render('backoffice/product/new.html.twig', [
                    'controller_name' => 'New.',
                    'states'=>$states
        ]);
    //....
```

---

# Controller `Product`: Metodo new()

1. Instanciar `Product`
1. Seteo los valores del producto (name,description,price y state)
1. Agrego el producto con el metodo `add` del propio `Repository` de producto
1. Retorno a una pagina puntual con el alias de la ruta

```php
    //....
    if(isset($_POST['submit'])){
        //Lee el estado
        $state = $repository_state->findById($_POST['pstate']);
        $product = new Product();
        $product->setName($_POST['pname']);
        $product->setDescription($_POST['pdescription']);
        $product->setPrice($_POST['pprice']);
        $product->setState($state);

        //Agrega el producto
        $repository_product=$this->getDoctrine()->getRepository(Product::class);  
        $repository_product->add($product);
        return $this->redirectToRoute("app_backoffice_product_list");
    }       
    //...
```


---
# Template `New Product`

Un template con extension `.twig`  se creara en la carpeta template dentro del directorio correspondiente con la siguientes caracteristicas: 

```html
{% extends 'backoffice/layout/backoffice_layout.html.twig' %}

{% endblock %}
```

El template debe contener `{% extends %}` para incluir el template base y `{% block %}{% endblock %}` donde se formara el propio `HTML`

---

# Controller `Product`: Metodo edit()

```php
/**
* @Route("/backoffice/product/edit/{id}", name="app_backoffice_product_edit")
*/
public function edit($id): Response
{
    $repository_product = $this->getDoctrine()->getRepository(Product::class);
    $repository_state = $this->getDoctrine()->getRepository(State::class);
    $product = $repository_product->findById($id);

    if(isset($_POST['submit'])){
        //...
    } else {
        if(!$product){
            $this->addFlash('error', 'El producto no existe');
            return $this->redirectToRoute("app_backoffice_product_list");
        }
        $state=$product->getState();
        $states=$repository_state->findAll(); 
        return $this->render('backoffice/product/edit.html.twig', [
            'controller_name' => 'Edit',
            'product'=>$product,
            'product_state'=>$state->getId(),
            'states'=>$states
        ]);
    }
}
```

Recuerda activar el `getById()` del repositorio.

---

# Controller `Product`: Metodo edit()

```php
/**
* @Route("/backoffice/product/edit/{id}", name="app_backoffice_product_edit")
*/
public function edit($id): Response
{
    $repository_product = $this->getDoctrine()->getRepository(Product::class);
    $repository_state = $this->getDoctrine()->getRepository(State::class);
    $product = $repository_product->findById($id);

    if(isset($_POST['submit'])){
        $state = $repository_state->findById($_POST['pstate']); 
        $product->setName($_POST['pname']);
        $product->setDescription($_POST['pdescription']);
        $product->setPrice($_POST['pprice']);
        $product->setState($state);
        $repository_product->add($product);
        return $this->redirectToRoute("app_backoffice_product_list");
    } else {
       //...
    }
}
```


---

# Template ` Edit Product`: Estructura del formulario (sin en el estado)

```html
//...
<form action="{{ path('app_backoffice_product_edit',  {'id': product.id}) }}" method="POST">
    <label for="pname">Nombre:</label><br>
    <input type="text" id="pname" name="pname" value="{{ product.name }}"><br>
    <label for="lname">Descripción:</label><br>
    <input type="text" id="pdescription" name="pdescription" value="{{ product.description }}"><br>
    <label for="pprice">Precio:</label><br>
    <input type="text" id="pprice" name="pprice" value="{{ product.price }}"><br><br>
    <input type="submit" name="submit" value="Submit">
</form> 
//..
```
---

# Template ` Edit Product`: Estructura del formulario (con el estado)

```html
//...
<form action="{{ path('app_backoffice_product_edit',  {'id': producto.id}) }}" method="POST">
    //...
    <select name="pstate">
        {% for state in states %}
            <option value="{{state.id}}">{{state.name}}</option>
        {% endfor%}
    </select><br><br>
    //...
</form> 
//...
```
---

# Template ` Edit Product`: Estructura del formulario (con el estado seleccionado)

```html
//...
<form action="{{ path('app_backoffice_product_edit',  {'id': producto.id}) }}" method="POST">
    //...
     <select name="pstate">
            {% for state in states %}
                {% if state.id == product_state  %}
                    <option selected="true" value="{{state.id}} ">{{state.name}}</option>
                {% else %}
                    <option value="{{state.id}} ">{{state.name}}</option>    
                {% endif %}    
            {% endfor%}
        </select><br><br>
    //...
</form> 
//...
```
---

# Controller `Product`: Metodo delete()

```php
/**
 * @Route("/backoffice/product/delete/{id}", name="app_backoffice_product_delete")
 */
public function delete($id): Response
{
    $repository_product = $this->getDoctrine()->getRepository(Product::class);
    $product = $repository_product->findById($id);     
    
    if($product){
        if(!$repository_product->remove($product))
            $this->addFlash('success', 'El producto se elimino correctamente.');  
        else
            $this->addFlash('error',"El producto no se pudo eliminar." );    
    } else {
        $this->addFlash('error','El producto no existe');
    }
    
    return $this->redirectToRoute("app_backoffice_product_list");
}
```

---

### Controller `Product`: Metodo show()

```php
**
* @Route("/backoffice/product/show/{id}", name="app_backoffice_produc_show")
*/
public function show($id): Response
{
    $repository_product = $this->getDoctrine()->getRepository(Product::class);
    $product = $repository_product->findById($id);
    $message = '';
    if(!$product){   
        $message = "El producto no existe";
    }
    return $this->render('backoffice/product/show.html.twig', [
        'controller_name' => 'Show',
        'producto'=>$product, 
        'message'=> $message
    ]);
}
```
---
# Creación de loas Entity (BD), Controller, Template y Repository

### Template ` Show Product`

```html
//..
{{ message }}
{% if producto %}
    <div class="example-wrapper">
        <label>Nombre: {{producto.name}}</label><br>         
        <label>Descripcion: {{producto.description}}</label><br>  
        <label>Precio: {{producto.price}}</label><br>   
        <label>Estado: {{producto.state.id}}</label><br>  
    </div>
{% endif %}
//...
```
---

# Asignar y subir una imagen a un producto

## Modelo

En este ejemplo vamos agregar `Imagenes` a los productos. 

.pull-center[
    ![image](./img/image-product.png)
]

---

# Asignar y subir una imagen a un producto

## Agrego una entidad extra `Image` y modifico la entidad actual `Product`

```markdown
$ symfony console make:entity Image
```

A la entidad Image la creo con un campo `name`y agrego una relación ManyToOne a `Product`.

Genero las migrations y tablas en db

```markdown
$ symfony console make:migration
$ symfony console doctrine:migrations:migrate
```

---

# Asignar y subir una imagen a un producto

## Agregar al template el campo 'FILE'

```html
<form action="#" method="post" enctype="multipart/form-data">
//.....
    <input type="file" id="pimage" name="pimage"/>
//....
</form>
``` 

---

# Asignar y subir una imagen a un producto

## Proceso el submit 

```php
//..
use App\Entity\Product;
use App\Entity\Image;
use Symfony\Component\HttpFoundation\File\UploadedFile;

//...

  if(isset($_POST['submit'])){
    //...
    $repository_image=$this->getDoctrine()->getRepository(Image::class);
    $image = new Image();
    $name = $_FILES['file']['name'];
    $type = $_FILES['file']['type'];
    $size = $_FILES['file']['size'];
    $temp_name= $_FILES['file']['tmp_name']
    //Guardar archivo
    move_uploaded_file($temp_name,  $name);
    $image->setName($name);
    $repository_image->add($image);
    $product->setImage($image);	
    //...
}

//...
```
---

# Manejo de servicios

## Conceptos de servicio

Los servicios funcionan de forma independiente al resto de la aplicación, a fin de cuentas, son clases independientes.

Los servicios en Symfony suelen interpretarse como ayuda o funcionalidades que se requieren en algunas accion de los controladores y son partes generica de uso, un ejemplo simple sería la subida de archivos en los servidores web. 

Los servicios se construyen en `src/Service/` y se definen en `config/services.yml`

En el ejemplo de [Uploader Service](https://symfony.com/doc/5.x/controller/upload_file.html#creating-an-uploader-service) puede describirse el desarrollo, configuracion y uso del servicio por parte del controladores Producto.

---

# Formularios

## Proceso

Para crear un buen sistema de formulario debemos tener en cuenta los diferentes pasos :

1. **Crear la entidad** que se vinculara con la base de datos de nuestro sistema
1. **Crea el formulario** en un controlador Symfony o usando una clase de formulario dedicada
1. **Renderizar el formulario** en una plantilla para que el usuario pueda editarlo y enviarlo-
1. **Procese el formulario** para validar los datos enviados, transfórmelos en datos PHP y haga algo con ellos (por ejemplo, conservarlos en una base de datos).

[Crear formulario](https://symfony.com/doc/5.0/forms.html)

---

# Formularios

## Entidad
Sabiendo el nombre de la entidad crearemos el formulario `ProductType`

```markdown
$ symfony console make:form Product

 The name of Entity or fully qualified model class name that the new form will be bound to (empty for none):
 > Product

 created: src/Form/ProductType.php

```

---

# Formularios

## ProductType

Agregar los componentes necesarios

```php
// ...
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
// ...
```

---

# Formularios

## ProductType

```markdown
namespace App\Form;
use App\Entity\Product;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
class ArticuloType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name'),
            ->add('price'),
            ->add('description')
    }
    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Product::class,
        ]);
    }
}
```
---

# Formularios

## ProductType

```php
$builder
    $builder
            ->add('name', TextType::class, [
                'attr' => ['class' => 'form-control','id'=>'pname' , 'name'=>'pname']
                , 'data'=>'Perfume'
            ])
            ->add('description' , TextareaType::class, [
                    'attr' => ['class' => 'form-control','id'=>"pdescription",'name'=>"pdescription"] 
                    , 'data'=>'Perfume'
            ])
            ->add('price', TextType::class, [
                'attr' => ['class' => 'form-control','id'=>"pprice", 'name'=>"price"] 
                 ,'data'=>'20'
            ])
    // ...

```

---

# Formularios

## ProductType

```php
// ... 
->add('image', FileType::class, [

                'attr' => ['class' => 'form-control'],
                'label' => false,
                'mapped' => false,
                'required' => false,
                'multiple' => true,
    
            ])
            ->add('state',  EntityType::class, [
                'class' => State::class,
                'choice_label' => 'name',
                'attr' => ['class' => 'form-control','id'=>"pstate", 'name'=>"state"],    
            ])
            ->add('save', SubmitType::class, [
                    'attr' => ['class' => 'btn btn-primary', 'name'=> 'submit'], 
                    'label'=> 'Aceptar'
                    
            ]);
//..
```

----

# Formulario

## Controller: Product new() 

En primera instancia se renderiza el formulario.


```php
use App\Form\ProductType;
class ProductController extends AbstractController
{
    public function new()
    {
        // ...

        $producto = new Product();
        $form = $this->createForm(ProductType::class, $producto);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            $repository = $this->getDoctrine()->getRepository(Product::class);
            $repository->add($form->getData());
            $this->addFlash("success", 'El producto se guardo con exito.' );
            return $this->redirectToRoute("app_product_list");
        }
        
        return $this->render('product/new.html.twig', [
            'controller_name' => 'Nuevo producto',
            'form'=>$form->createView()
        ]);

        // ...
    }
}

```
---

# Formulario

## Controller: Product new() 

En segunda instancia se completa con la accion que se realiza el submit

```php
use App\Form\ProductType;
use Symfony\Component\HttpFoundation\Request;
/**
 * @Route("/product/new", name="app_product_new")
 */
public function new(Request $request): Response {

    $form = $this->createForm(ProductType::class, $producto);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $repository = $this->getDoctrine()->getRepository(Product::class);
        $repository->add($form->getData());
        $this->addFlash("success", 'El producto se guardo con exito.' );
        return $this->redirectToRoute("app_product_list");
    }

    // ...
}

```

----

# Formulario

## Controller: Product edit() 

```php
/**
* @Route("/backoffice/product/edit/{id}", name="app_backoffice_product_edit")
*/
public function edit($id, Request $request): Response
{
    $repository = $this->getDoctrine()->getRepository(Product::class);
    $producto=$repository->findById($id);

    if(!$producto){
        $this->addFlash("error", 'El producto no existe.' );
        return $this->redirectToRoute("app_product_list");
    }

    $form = $this->createForm(ProductType::class, $producto,  [
        'action' => $this->router->generate('app_product_edit', array('id'=>$id)),
        'method' => 'POST',
    ]);
    // ...
}
```

----

# Formulario

## Controller: Product edit() 

```php
/**
* @Route("/product/edit/{id}", name="app_product_edit")
*/
public function edit($id, Request $request): Response
{
    // ...
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {
        $repository->update($form->getData());
        $this->addFlash("success", 'El producto se edito con exito.' );
        return $this->redirectToRoute("app_product_list");
    } 

    return $this->render('product/edit.html.twig', [
        'controller_title' => 'Editar producto',
        'controller_name' => 'Editar producto',
        'form'=>$form->createView()
    ]);
}
```



---

# Formularios

## Personalizamos el formulario 

En el template podemos acceder la variable `form` creada en el controlador con las funciones `form_label()`, `form_widget()`, `form_help()` y `form_errors()` 

[Customizar el template](https://symfony.com/doc/5.0/form/form_customization.html)

.pull-center[
   ![:scale 80%](./img/form.png)
]

---

# Formularios

## Personalizamos el formulario.

```html
{% extends "base.html.twig" %}

{% block body %}
{{ form_start(form) }}
    <div class="form_errors">{{ form_errors(form) }}</div>
    <div class="row"><div class="col">{{ form_row(form.name) }}</div></div>
    <small>{{ form_help(form.name) }}</small>
    <div class="row"><div class="col">{{ form_row(form.description) }}</div></div>
    <div class="row"><div class="col">{{ form_row(form.price) }}</div></div>
	<div class="row"><div class="col">{{ form_row(form.state) }}</div></div>
    <hr>
    <div class="form-group">{{ form_widget(form.save) }}</div>
    <div class="form-group"><a href="{{ path('app_product_list') }}">{{ form_widget(form.cancel) }}</a></div>
{{ form_end(form) }}
{% endblock %}
```
---

# Formularios

## Adapto el formulario con Boostrap

```php
 $builder
     ->add('name', TextType::class, [
         'attr' => ['class' => 'form-control','id'=>'pname' , 'name'=>'pname']
     ])
     ->add('description' , TextareaType::class, [
         'attr' => ['class' => 'form-control','id'=>"pdescription",'name'=>"pdescription"] 
     ])
     // ...
     ->add('save', SubmitType::class, [
         'attr' => ['class' => 'btn btn-primary', 'name'=> 'submit'], 
         'label'=> 'Aceptar'      
     ])
     // ...

```
---

# Formularios
## Personalizamos el template con el formulario 

```html
{{ form_start(form) }}
<div class="row mb-3">
    <div class="col-sm-10">
        <div class="form-floating mb-3 mt-3">
            {{ form_widget(form.name) }}
            <label for="floatingName">{{ "backoffice.product.name"|trans }}</label>
        </div>
 
        // ...
        <div class="row mb-3">
            <div class="col-sm-3">
                {{ form_widget(form.save) }}
            </div>
           <div class="col-sm-5">
                <a href="{{ path('app_product_list') }}" class="btn btn-success">Cancel</a>
           </div>
        </div>
    </div> 
</div>
{{ form_end(form) }}
```

---

# Trabajo final

## Vista backoffice 

.pull-center[
   ![:scale 80%](./img/backoffice.png)
]

---

# Controlar Excepciones

## Generamos el  ErrorSubscriber

Podemos controlar los errores caputarando los eventos generado por Symfony 5 mediante una suscripcion a los eventos.

`php bin/console make:subscriber ErrorSubscriber`

Vamos generando el codigo, comenzamos con los compontes 

```php
<?php

namespace App\EventSubscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\ExceptionEvent;
use Symfony\Component\HttpKernel\Exception\HttpExceptionInterface;
use Symfony\Component\HttpKernel\KernelEvents;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Twig\Environment;
```

# Controlar Excepciones

## Generamos el  ErrorSubscriber

Iniciamos los atributos
```php
// ...
class ErrorSubscriber implements EventSubscriberInterface
{
    private $twig;
    private $urlGenerator;
    
    // ...
}    
```
---

# Controlar Excepciones

## Generamos el  ErrorSubscriber

Iniciamos el contructor

```php
 // ...
 public function __construct(Environment $twig, UrlGeneratorInterface $urlGenerator)
 {
 	$this->twig = $twig;
 	$this->urlGenerator = $urlGenerator;
 }
 // ...
```
---

# Controlar Excepciones

## Generamos el  ErrorSubscriber

Contruimos el evento `getSubscribedEvents`
```php
// ...
public static function getSubscribedEvents(): array
{
    return [
    	KernelEvents::EXCEPTION => 'onKernelException',
    ];
}
// ...        
```
Esta clase es un `EventSubscriber` que escucha el evento  `KernelEvents::EXCEPTION` cuando se produce una excepción, la clase determina el código de estado HTTP adecuado y el mensaje de error correspondiente, y luego devuelve una respuesta que muestra la plantilla `templates/error/error.html.twig` con los datos del código de estado y el mensaje de error.

---
# Controlar Excepciones

## Generamos el  ErrorSubscriber

Inicio el metodo `onKernelException`
```php
// ...
public function onKernelException(ExceptionEvent $event): void {
	$exception = $event->getThrowable();
	$statusCode = $exception instanceof HttpExceptionInterface ? $exception->getStatusCode() : 500;
	$referer = $event->getRequest()->headers->get('referer');
}
// ...
```

---

# Controlar Excepciones

## Generamos el  ErrorSubscriber

Proceso las opciones de los codigos de errores

```php
	// ...
    $message = '';
    switch ($statusCode) {
        case 404:
        	$message = 'Página no encontrada';
        break;
        case 403:
        	$message = 'Acceso denegado';
        break;
        default:
        	$message = 'Ha ocurrido un error';
        	$error=$exception->getMessage();
    }
    // ...
```
---

# Controlar Excepciones

## Generamos el  ErrorSubscriber

Renderizo el template en el template `template/error/error.html.twig` con la plantilla de errores generico.

```php
	// ...
    $response = new Response(
        $this->twig->render('error/error.html.twig', [
            'statusCode' => $code,
            'message' => $message,
            'referer' => $referer,
            'error'=>$error
        ]),
        $statusCode
    );
    $event->setResponse($response);
    // ...
```
---

# Controlar Excepciones

## Generamos el  ErrorSubscriber

Registra el servicio `ErrorSubscriber` en el archivo `config/services.yaml` de la siguiente manera:

```yaml
services:
    App\EventSubscriber\ErrorSubscriber:
        arguments:
            $twig: '@twig'
            $urlGenerator: '@router'
        tags:
            - { name: kernel.event_subscriber }
```

Este servicio se configura para inyectar el servicio twig y el servicio router, y luego se etiqueta con `kernel.event_subscriber` para que Symfony sepa que debe suscribirse a los eventos.

---

# Creo el modulo de autenticacion

## Modulo `Security`

Para comenzar con el modulo de seguridad debemos seguir estos pasos

1. Instalar el paquete `Security`
2. Crear tu `User`
3. Autenticacion y Firewall
4. Denegar el acceso desde tu app
4. Crear el `Login Form`

---
# Creo el modulo de autenticacion

## Security `Instalación`

```yaml
composer require symfony/security-bundle
symfony console make:user
````

La entidad user se debe crear con el campos simple  email y password

Y luego genero la migration 

```yaml
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

---
# Creo el modulo de autenticacion

## Security `Autenticacio y Firewall`
```yaml
security:
    encoders:
        App\Entity\User:
            algorithm: auto
```

---
# Creo el modulo de autenticacion

## Security `Instalación`
```yaml
php bin/console make:fixtures

The class name of the fixtures to create (e.g. AppFixtures):
> UserFixtures
```
---
# Creo el modulo de autenticacion

## Security `Instalación`

```php
// ...
    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setName('Omar');
        $admin->setLastName('Hector Sosa');
        $admin->setEmail('admin@gmail.com.ar');
        $admin->setRoles(array('ROLE_USER','ROLE_ADMIN'));
        $admin->setPassword($this->passwordEncoder->encodePassword(
            $admin,
            'admin'
        ));
        $manager->persist($admin);
// ...        
```

Correr el fixture

```
php bin/console doctrine:fixtures:load --append
```
---
# Creo el modulo de autenticacion

## Security `Autenticacio y Firewall`

```yaml
//...
    providers:
        app_user_provider:
            entity:
                class: App\Entity\User
                property: email
```


---
# Creo el modulo de autenticacion

## Security `Autenticacion y Firewall`

```yaml
// ...
 firewalls:
        dev:
            pattern: ^/(_(profiler|wdt)|css|images|js)/
            security: false
        main:
            anonymous: true
            lazy: true
            provider: app_user_provider
            #guard:
            #    authenticators:
            #        - App\Security\LoginFormAuthenticator
            logout:
                path: app_logout
                # where to redirect after logout
                target: /
// ...                
```
---
# Creo el modulo de autenticacion

## Security `Autenticacion y Firewall`

```yaml
   access_control:
           - { path: ^/$, roles: ROLE_USER }
           - { path: ^/backoffice, roles: ROLE_ADMIN }
      
```

---
#  Creo el modulo de autenticacion
## Login Form 

```php
php bin/console make:auth
What style of authentication do you want? [Empty authenticator]:
 [0] Empty authenticator
 [1] Login form authenticator
> 1

The class name of the authenticator to create (e.g. AppCustomAuthenticator):
> LoginFormAuthenticator

Choose a name for the controller class (e.g. SecurityController) [SecurityController]:
> SecurityController

Do you want to generate a '/logout' URL? (yes/no) [yes]:
> yes
```
---
#  Creo el modulo de autenticacion
## Login Form `Customización`

```php
// ...
  public function onAuthenticationSuccess.....
      // ...
	  return new RedirectResponse($this->urlGenerator->generate('app_product_list'));
    }
// ...    
```
---

# Referencias

* [How to Build a Login Form](https://symfony.com/doc/5.2/security/form_login_setup.html)
* [Security](https://symfony.com/doc/5.2/security.html)

---
class: center, middle, inverse

## Gracias!

