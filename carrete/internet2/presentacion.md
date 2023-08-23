layout: true
class: center, middle, inverse
---

# Internet II

---
layout: true
class: animated fadeInUp
---
## Agenda

(Primera parte estimado: 2h)

* Introducción
  - Historia de internet
  - ¿Qué es Firewall de Windows?
  - Virus: ¿Qué son los virus, los gusanos y los caballos de Troya?
  - Antivirus: Validación, Activación y Chequeo. 

* Redes
  - ¿Que es una red y como funciona?
  - Clasificacion de red 
     - Por topologia y tamaño
  - Preparacion de la PC para las comunicaciones
  - Configuraciones del SO para las comunicaciones
  - Uso de redes locales

---

(Segunda parte estimado: 2h)

* Dominio
    - Repaso de concepto de Dominio
    - Registro y validacion de dominio

* Infraestructura
  - Tipo de accesos: Dial-Dap, ADLS, Wireless, Cable electrico, Modem
  - Artefactos: Router(enrutador), Hub(repetidor multipuerto), Switch(conmutador)
  - Software de comunicacion: Hyperterminal y Conexión a Escritorio Remoto

* Herramientas de internet
   - Concepto Cliente / Servidor
   - Lenguaje HTML y entorno de programación 
   - Navegadores web (browsers) y Motores de busquedas (searchbot)
      - Internet Explore: Uso y personalización  
   - Tecnica de busqueda
       - Por internet
       - Foro
       - Redes sociales
   - Tags Html    

---

(Tercer parte estimado: 2h)

* Servicios de internet
    - ¿Que servicios nos ofrece?
    - Navegadores, Webmail, teleconferencia. ftp, etc
    - Correo: 
      - Web Mail
      - POP3
      - SMTP
      - Diferencia entre SMTP Y Webmail.
   - Outlook
      - Uso y configuracion de cuenta.
      - Reglas 
   - Firma Digital
      - Criptografia simetrica
      - Clave publica y clave privada
   - Certificacion digital.
      - Concepto general
      - Firma digitalizada

---
## Introducción

#### Historia de internet

.center[<iframe width="560" height="315" src="https://www.youtube.com/embed/mGG5o6vbKyQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>]
---

## Introducción

#### ¿Qué es Firewall de Windows?
---
## Introducción

### Virus y Antivirus
---
## Introduccion 

### Validación, Activación y Chequeo de antivirus
---
## Redes

### ¿Que es una red y como funciona?

.texto-grande[Una red (Net) de computadoras consiste en dos o más computadoras que pueden compartir información,
datos, recursos y servicios.]

.pull-left[
* Comunicacion fisica
* Servidores 
* Plataforma común (protocolo)
* Software de aplicaciones.
* Hardware de comunicacion
* Servicios 
]

.pull-right[
   ![:scale 50%](./img/red1.jpg)
]

---

## ¿Donde se encuentras las redes y como funcionan?


.center[<iframe width="560" height="315" src="https://www.youtube.com/embed/z7Q_NRGyKt4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>]

---
## Redes

###  Clasificacion de redes


.texto-grande[La clasificaciones mas comunes de las redes son por su topologia  y alcance ]

.pull-right[
   ![:scale 70%](./img/alcance.jpeg)
]

.pull-right[
   ![:scale 70%](./img/topologias.png)
]



---

## Redes

### Clasificación por tamaño

.texto-mediano[En función del tamaño y del alcance de la red de ordenadores, se puede establecer una diferenciación entre diversas dimensiones de red. Entre los tipos de redes más importantes se encuentran]

.pull-left[
* Alcance 
* Personal Area Networks (PAN) o red de área personal
* Home area network (HAN) o red de area del hogar
* Local Area Networks (LAN) o red de área local
* Metropolitan Area Networks (MAN) o red de área metropolitana
* Wide Area Networks (WAN) o red de área amplia
]

.pull-right[
   ![:scale 80%](./img/man.png)
]

---
## Redes

###  Personal Area Network (PAN)

.pull-left[
 * Intercambio de datos, los terminales modernos como smartphones, tablets, ordenadores portátile. 
 * Las técnicas de transmisión más habituales son la memoria USB o el conector FireWire
 * El ámbito de acción de las redes PAN y WPAN se limita normalmente a unos pocos metros
 * permiten, asimismo, la conexión con otras redes de mayor tamaño
 * se utilizan principalmente para conectar periféricos en el ámbito del ocio y de los hobbies.
]

.pull-right[
   ![:scale 80%](./img/man.png)
]

---
## Redes
### Local Area Network (LAN)

.pull-left[
* Dos o mas ordenadores en una vivienda privada o a varios miles de dispositivos en una empresa.
* Administraciones, colegios o universidades 
* El estándar muy frecuente para redes de área local por cable es Ethernet 
* Otras opciones menos comunes y algo obsoletas son las tecnologías de red ARCNET, FDDI y Token Ring
* La transmisión de datos tiene lugar o bien de manera electrónica a través de cables de cobre o mediante fibra óptica de vidrio.
* El grupo de redes LAN geográficamente cercanas puede asociarse a una Metropolitan Area Network (MAN) o Wide Area Network (WAN) 
]

.pull-right[
   ![:scale 100%](./img/man2.png)
]

---
## Redes

### Por su topologia

.texto-grande[La topología de red no es otra cosa que la forma en que se conectan las computadoras para intercambiar datos entre sí]

.pull-center[
   ![:scale 30%](./img/topologia2.gif)
]
---

## Redes

### Preparacion de la PC para las comunicaciones

Para conectar una PC al servicio de internet desde una red LAN (local) tipo Ethernet son necesario las siguientes tareas:

 * Instalar una placa de red (placa NIC) y habilitar las configuraciones correspondiente.
 * Conectar los cables de red cruzados denominados UTP 
 * Identificar el HUB o Switch que oficio como concentrador
 * Identificar los extremos de los cables normalizados RJ45 del tipo Ethernet

.pull-center[
   ![:scale 35%](./img/internet2-image0.png)
]
---

## Redes

### Preparacion de la PC para las comunicaciones

Luego de deben configurar los siguientes elementos  desde el SO.

.pull-left[
1. Dirección IP del host (esa PC)
1. Máscara de subred
1. Puerta de enlace predeterminada
]

.pull-right[
   ![:scale 70%](./img/internet2-image1.png)
]

---
## Redes

### Clasificacion de IP

Se clasifican en 3 tipos de Clases: **A, B y C**, de acuerdo a su rango y uso: 

* Una Red de Tipo Clase A utiliza una IP con un rango desde 0.0.0.0 a 127.0.0.0 su uso es comercial .
* Una Red de Tipo Clase B utiliza una IP con un rango desde 128.0.0.0 a 191.0.0.0 y su uso también es comercial.
* Una Red de Tipo Clase C utiliza una IP con una rango desde 192.0.0.0 a 223.0.0.0 siendo su uso de tipo comercial y doméstico. 

Las direcciones IP de tipo comercial se dividen en IP Públicas (Uso Internet) e IP Privadas (Uso para redes privadas). 

---

## Redes

### Puertos

Un puerto es un punto final a una conexión lógica y el medio por el que un programa
cliente se comunica con un programa específico en una computadora en una red

.pull-center[
   ![:scale 90%](./img/internet2-image3.png)
]
---
## Redes

### Uso de redes locales

En el uso de red local se puede utilizar los diferentes recursos

* Bases de datos, programas (software) 
* periféricos módem, una tarjeta NIC, una impresora, hardware

Poniendo a nuestra disposición otrosmedios de comunicación como pueden ser 

* Correo electrónico 
* Chat
* Redes Sociales
* Compartir de archivo

---
## Dominio

### Repaso de concepto de Dominio

Internet maneja concepto como dirección IP y DNS (Sistema de Nomenclatura de Dominios) para poder realizar que la informacion fluya sobre las redes.

.center[<iframe width="560" height="315" src="https://www.youtube.com/embed/rw41W8crZ_Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>]

---
## Dominio

### Registro

Para poder registrar el dominio desde la pagina [Nic AR](https://nic.ar/es/ayuda/instructivos/registro-de-dominio) 

.pull-center[
   ![:scale 100%](./img/nicar.png)
]

---

## Infraestructura

### Tipo de accesos

La red de Internet es una red de alcance global de tipo WAN. Por lo tanto, un acceso a Internet se clasifica desde el punto de vista del Hardware y Software en : 

* Por acceso telefónico discado (dial-up) por modem
* Por acceso de banda ancha con ADSL (Asymmetric digital suscriber line)
* Por acceso de banda ancha satelital
* Por acceso de banda ancha con radio-enlace (wireless)
* Por acceso de banda ancha con utilización de la red eléctrica como transporte
* Por acceso de banda ancha con cable módem
* Por acceso de banda ancha 3G (protocolo de tercera-generación en telefonía móvil)
* Por acceso de banda ancha 4G (protocolo de cuarta-generación en telefonía móvil)
* Por acceso dedicado a través de un swithc o router (enrutador) 

---
## Infraestructura

### Tipo de accesos: Por acceso telefónico discado (dial-up) 

.pull-left[
   ![:scale 100%](./img/internet2-image5.png)
]

.pull-right[
1. Línea telefónica que ingresa a un domicilio
1. módem dial-up (modulador-demodulador),
1. Placa de red de la PC. 
1. No se puede utilizar la línea telefónica para hablar por teléfono 
1. Solo puede transferir archivos con poco contenido. 
]

---
## Infraestructura

### Por acceso de banda ancha con ADSL 

.pull-left[
   ![:scale 100%](./img/internet2-image6.svg)
]

.pull-right[
1. Línea telefónica que ingresa a un domicilio
1. Se utilizar un módem de banda ancha ó ADSL 
1. Se puede hablar por teléfono mientras se navega por Internet.
1. La velocidad de transferencia es superior al dial-up
]
---
## Infraestructura

### Por acceso de banda ancha con ADSL 

.pull-left[
   ![:scale 100%](./img/internet2-image7.png)
]

.pull-right[
1. Módem de banda ancha satelital (IDU) 
1. Antena satelital (ODU)
1. La desventaja que puede presentar es el tiempo de demora de la señal desde y hacia el satélite. 
1. Lugares en donde es inaccesible la comunicación vía terrestre. 
]

---
## Infraestructura

### Por acceso de banda ancha con radio enlace (wireless) 

.pull-left[
   ![:scale 100%](./img/internet2-image8.jpg)
]

.pull-right[
1. Módem de banda ancha que es el dispositivo terminal de un radio enlace cuya
unidad exterior (antena de radio) se enlaza con otro remoto (equipo del prestador del servicio)
1. Distribución interna del servicio con tecnología inalámbrica WiFi,
1. Se debe instalar otras redes existentes sobre todo si se trata de la instalación en edificios
importantes. 
]
---
## Artefactos

### ROUTER (Enrutador) 

Este dispositivo permite asegurar el enrutamiento de paquetes entre redes o determinar la ruta que debe tomar el paquete de datos.

.pull-center[
   ![:scale 80%](./img/internet2-image8.png)
]

---
## Artefactos

### HUB (repetidor multipuerto) 

Es un dispositivo que permite conectar entre sí otros equipos y retransmite los paquetes que recibe desde cualquiera de ellos a todos los demás. 

.pull-center[
   ![:scale 80%](./img/internet2-image9.png)
]

---

## Artefactos

### SWITCH (conmutador)

Es un dispositivo que interconecta dos o más segmentos de red, como puentes (bridges), transmitiendo datos a puertos (una conexión sea física o lógica para el envío y recepción de datos) específicos. 

.pull-center[
   ![:scale 80%](./img/internet2-image10.png)
]

---
## Infraestructura

### Software de comunicacion: Hyperterminal

Ha sido creado para conectarse de manera distante con otras computadoras, así como para proporcionar herramientas de diagnóstico al sistema informático local

Para acceder debe irvía de acceso correspondiente al sistema operativo Windows® que esté utilizando.

* Inicio > Programas > Accesorios > HyperTerminal

.pull-left[
Configuración tipica: 
1. Bits por segundo: 9600
1. Bits de datos: 8
1. Paridad: Ninguno (N)
1. Bits de parada: 1
1. Control de flujo: Ninguno
]

.pull-right[
   ![:scale 70%](./img/internet2-image11.webp)
]

---
## Infraestructura

### Software de comunicacion: Conexión a Escritorio Remoto

También podemos acceder a otro equipo o servidor desde conexión a escritorio remoto de la siguiente forma: 

.pull-center[
   ![:scale 40%](./img/internet2-image11.png)
]

---
## Herramientas de internet

### Concepto Cliente / Servidor

El modelo cliente-servidor, también conocido como “principio cliente-servidor”, es un modelo de comunicación que permite la distribución de tareas dentro de una red de ordenadores.

.pull-center[
   ![:scale 40%](./img/internet2-image12.webp)
]

Desde su creación, la web fue pensada para funcionar con un cliente y un servidor. El servidor entrega el sitio web a los clientes que lo solicitan. Los clientes son los navegadores web que consumen y muestran ese sitio web.

---
## Herramientas de internet

### Hypertexto y lenguaje HTML

.pull-center[
   ![:scale 70%](./img/internet2-image13.png)
]

---
## Herramientas de internet

### Hypertexto y lenguaje HTML

El Lenguaje de Marcado de Hipertexto (HTML) es el código que se utiliza para estructurar y desplegar una página web y sus contenidos. 

.pull-center[
   ![:scale 40%](./img/internet2-image13.webp)
]

---
## Herramientas de internet

### Navegadores web (browsers)

.texto-mediano[Un browser, web browser, navegador web de información es una aplicación de software que permite al usuario recuperar y visualizar documentos de hipertexto (protocolo http o https)]

.texto-mediano[Comúnmente escritos enlenguaje html, desde servidores web de todo el mundo a través de Internet.]



---

## Herramientas de internet

### Navegadores web (browsers)

.pull-left[
1. Internet Explorer y derivados: Avant browser, Maxthon
1. Mozilla y derivados: Mozilla Firefox 
1. Netscape Navigator
1. Chrome
1. Opera
]

.pull-right[
   ![:scale 100%](./img/internet2-image10.jpg)
]

---

## Herramientas de internet

### Motores de búsqueda (Searchbot) 

Un motor de búsqueda (también llamado Searchbot) es una herramienta hardware y software que indexa páginas Web para que se puedan buscar a través de palabras claves en un formulario de búsqueda. 

Algunos ejemplos de búscadores son:

* Google
* Yahoo
* Bing
* Ask
* Aol
* Netscape
---

## Herramientas de internet

### Técnicas de navegación: Por internet

La construcción de estos links (enlaces), así como la construcción de las propias páginas Web, se realizan mediante aplicaciones de programación basados en lenguajes como html, asp, php, aspx, phpx, css3, html5, etc

* Palabras obligatorias y prohibidas en la búsqueda con + y -: 
	* Ejemplo: +martín +fierro en vez de fierro 
* Utilización de comodines (*)
* Limitadores
	* t: Limita la búsqueda al título de los documentos 
	* u: Limita la búsqueda a la URL de los documentos 
* Si se coloca un conjunto de palabras entre "", sólo se encontrarán aquellos resultados que
correspondan exactamente a dichas palabras. 

---

## Herramientas de internet

### Técnicas de navegación: Por Foro, Wiki y Blog

* Un foro de Internet es un sitio de discusión en línea asincrónico donde las personas publican mensajes alrededor de un tema.

* Una wiki es una página Web cuyos usuarios pueden agregar, modificar o borrar su contenido mediante un web browser (navegador) utilizando un lenguaje de marcado simplificado o un editor rico en texto.

* Un Blog es un sitio Web periódicamente actualizado que recopila cronológicamente textos o artículos de uno o varios autores, apareciendo primero el más reciente, donde el autor conserva siempre la libertad de dejar publicado lo que crea pertinente. 

---

## Herramientas de internet

### Tags Html

Los tags son palabras que describen los temas centrales de los contenidos de una página web. Un contenido (artículo, tutorial, tip, post, etc) 

.pull-center[
   ![:scale 100%](./img/internet2-image15.png)
]

---
## Servicios de internet

Los servicios ofrecidos están razonablemente estandarizados para permitir que un usuario típico, con un
conjunto limitado de programas clientes, pueda comunicarse con cualquiera de ellos

* **Servicios** Correo electrónico, páginas y links WWW, FTP, Grupos de Noticias, IRC, Telnet, y otros.
* **Nuevos servicios** Podcasting, Webquest, Youtube, Scribd, Slideshare, y otros. 

---
## Correo: 
### Tipos

   * Web Mail
   * POP3   
   * SMTP

Diferencia entre SMTP Y Webmail.



---   
## Outlook
### Uso y configuracion de cuenta.

1. Abre Microsoft Outlook 2019
1. Elige IMAP/POP

.pull-center[
   ![:scale 100%](./img/outlook1.png)
]

1. Configura las opciones IMAP o POP

.pull-center[
   ![:scale 100%](./img/outlook2.png)
]

1. Finaliza la configuración

---   
## Outlook
### Reglas

.pull-center[
   ![:scale 100%](./img/outlook4.png)
]


---

## Firma Digital
### Concepto

Es el conjunto de caracteres que se añaden al final de un documento o cuerpo de un mensaje para
informar, dar fe o mostrar validez y seguridad.

La firma digital se la utiliza para hacer trámites con entidades públicas, declaraciones impositivas y
notificaciones judiciales, operaciones bancarias, contratos a distancia, y comercio exterior, historias
clínicas, identificación y autenticación en sistemas informáticos. 

---
## Firma Digital
### Criptografia simetrica
Solo utiliza una clave para cifrar y descifrar. Ésta debe ser previamente conocida por todas las partes
involucradas. 

.pull-center[
   ![:scale 100%](./img/internet2-firma1.png)
]

---
## Firma Digital
### Clave publica y clave privada

---
## Certificacion digital.
### Concepto general

---
## Certificacion digital.
### Firma digitalizada

---
## Certificacion digital.
### Seguridad en las redes

---
class: center, middle, inverse

## Gracias!

