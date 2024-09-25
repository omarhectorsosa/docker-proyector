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

## Introduccion 

### ¿Qué es Firewall de Windows?

.texto-grande[Proporciona al usuario un mayor control sobre los datos del equipo y
aporta una línea de defensa contra personas o programas (incluidos los virus y gusanos) que intentan
conectarse a un equipo sin haber sido invitados]
.pull-center[
   ![:scale 20%](./img/image-2.png)
]

---
## Introduccion 

### ¿Qué hace Firewall de Windows y qué no hace?

| Firewall de Windows:                                         | Firewall de Windows NO:                                      |
| ------------------------------------------------------------ | ------------------------------------------------------------ |
| Ayuda a evitar que virus y gusanos informáticos lleguen a un equipo. | Detecta o deshabilita los virus y gusanos informáticos, si ya se encuentran en el equipo. |
| Pide el permiso del usuario para bloquear o desbloquear ciertas solicitudes de conexión. | Impide que el usuario abra correo electrónico con archivos adjuntos peligrosos. |
| Crea un registro de seguridad, si desea tener uno, que almacene los intentos correctos y fallidos de conectarse a un equipo. | Impide que el correo no deseado o spam aparezca en la bandeja de entrada. |
|                                                              |                                                              |

---
## Introduccion 

### Virus y Antivirus

.texto-grande[Un virus es un programa que se puede copiar a sí mismo e infectar diversos elementos de un equipo, como son los documentos, los programas y los componentes del sistema operativo. ]

---
## Introduccion 

### Tipos de virus

Un `malware` es código de programación malicioso que se pueden clasificar en los siguientes tipos: 

* **Spyware**: Es un programa espía que recopila información de una computadora y después transmite esta información a una entidad externa sin el conocimiento o el consentimiento del propietario del computador
* **Adware**: Es un tipo de programa publicitario malicioso.
* **Ransomware**: Un ransomware, o "secuestro de datos" en español, es un tipo de programa malicioso que restringe el acceso a determinadas partes o archivos del sistema operativo infectado y pide un rescate a cambio
de quitar esta restricción.

---
## Introduccion 

### Tipos de virus

Otros tipos de virus mas criticos son los siguientes:

* **Gusano**: Un gusano es un programa que hace copias de sí mismo y se puede extender fuera del sistema operativo
* **Caballo de troya**: Un caballo de Troya es un programa de apariencia legítima e inofensiva diseñado para hacerle creer al usuario que es algo conocido

---
## Introduccion 

### Antivirus

.texto-grande[ Los antivirus son programas que examinan los correo electrónico y otros archivos, en busca de virus, gusanos y caballos de Troya.
]

---
## Introduccion 

### Antivirus

Algunos antivirus disponibles en el mercado son:

* Panda
* AVG
* Norton Antivirus
* Mc Affee
* Avast
* Nod32
* Kaspersky
* AppCheck Anti-Ransomware

---
## Introduccion 

### Validación, Activación y Chequeo de antivirus

Desde el centro de seguridad de Windows podemos checkear nuestro antivirus
.pull-center[
   ![:scale 5%](image-3.png)
]
Desde el botón de Inicio, Panel de Control encontraremos a Centro de Seguridad de Windows:

.pull-center[
   ![:scale 20%](image-4.png)
]   
Este nos ayuda a configurar la seguridad de Windows (Firewall, Actualizaciones y Antivirus)
.pull-center[
   ![:scale 20%](image-5.png)
]

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

### Por su topologia

.texto-grande[La topología de red no es otra cosa que la forma en que se conectan las computadoras para intercambiar datos entre sí]

.pull-center[
   ![:scale 30%](./img/topologia2.gif)
]
---

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

### Clasificacion de IP

Se clasifican en 3 tipos de Clases: **A, B y C**, de acuerdo a su rango y uso: 

* Una Red de Tipo Clase A utiliza una IP con un rango desde 0.0.0.0 a 127.0.0.0 su uso es comercial .
* Una Red de Tipo Clase B utiliza una IP con un rango desde 128.0.0.0 a 191.0.0.0 y su uso también es comercial.
* Una Red de Tipo Clase C utiliza una IP con una rango desde 192.0.0.0 a 223.0.0.0 siendo su uso de tipo comercial y doméstico. 

Las direcciones IP de tipo comercial se dividen en IP Públicas (Uso Internet) e IP Privadas (Uso para redes privadas). 

---

### Puertos

Un puerto es un punto final a una conexión lógica y el medio por el que un programa
cliente se comunica con un programa específico en una computadora en una red

.pull-center[
   ![:scale 90%](./img/internet2-image3.png)
]
---

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

### Por acceso de banda ancha satelital

.pull-left[
   ![:scale 100%](./img/internet2-image7.png)
]

.pull-right[
1. Módem de banda ancha satelital (IDU) 
1. Antena satelital (ODU)
1. La desventaja que puede presentar es el tiempo de demora de la señal desde y hacia el satélite. 
1. Como ventaja se puedan acceder a lugares en donde es inaccesible la comunicación vía terrestre. 
]

---

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

### Por acceso de banda ancha con cable-módem

.pull-left[
   ![:scale 100%](image-6.png)
]

.pull-right[
1. Este servicio lo brindan por lo general los prestadores de TV por cable
1. Señal en conjunto con la de TV a través de un cable coaxial.
1. Se utliza canle Ethernet mediante un cable UTP. 
]


---
## Artefactos

### ROUTER (Enrutador) 

Este dispositivo permite asegurar el enrutamiento de paquetes entre redes o determinar la ruta que debe tomar el paquete de datos.

.pull-center[
   ![:scale 80%](./img/internet2-image8.png)
]

---

### HUB (repetidor multipuerto) 

Es un dispositivo que permite conectar entre sí otros equipos y retransmite los paquetes que recibe desde cualquiera de ellos a todos los demás. 

.pull-center[
   ![:scale 80%](./img/internet2-image9.png)
]

---

### SWITCH (conmutador)

Es un dispositivo que interconecta dos o más segmentos de red, como puentes (bridges), transmitiendo datos a puertos (una conexión sea física o lógica para el envío y recepción de datos) específicos. 

.pull-center[
   ![:scale 80%](./img/internet2-image10.png)
]

---

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
### Tipos de correo

   * Web Mail: Un webmail es un programa informático, concretamente un cliente de correo electrónico
   * POP3 e IMAP: Protocolo de red de acceso a mensajes electrónicos almacenados en un servidor.   
   * IMAP: Lo mismo que el POP3 pero la ventaja que nos permite  acceder a varios clientes.
   * SMTP: Protocolo de transferencia de correo  simple, utlizado para enviar correos a un servidor.

La diferencia fundamental entre POP3 y el correo-web (webmail) es que el primero gestiona los emails
mediante un programa instalado en el ordenador y el segundo a través de una página web. Con una cuenta
de correo POP, el usuario descarga sus mensajes al PC, gracias a programas como Outlook, Eudora o
Thunderbird.

La diferencia entres POP3 e IMAP, es que POP3 elimina los mensaje del servidor al descargarlo, tambien IMAP nos permite acceder a varios clientes.

Existen empresas privadas que dan servicio de Webmail, por ejemplo:

   * Gmail
   * Yahoo
   * Hotmail (actualmente Outlook)
   * AOL 

---
## Correo: 
### Configración inicial

Para poder crear una cuenta en el cliente se debe acceder a seccion "Crear cuenta"

.pull-center[
   ![:scale 50%](./img/thun-conf.png)
]

---
## Correo: 
### Entrada: Configuracion de correo en Thunderbird

Cuando se configura un cliente (web mail) se debe tener en cuenta las siguiente informacion sobre el servidor de entrada.

* Nombre de servidor y Puerto
* Usuario
* Seguridad de conexion y tipo de autenticación

Este es la configuracion tipica

.pull-center[
   ![:scale 50%](./img/thun-conf1.png)
]

---
## Correo: 
### Salida: Configuracion de correo en Thunderbird

Cuando se configura un cliente (web mail) se debe tener en cuenta las siguiente informacion sobre el servidor de salida SMTP.

* Nombre de servidor y Puerto
* Seguridad de conexion y tipo de autenticación
* Usuario y contraseña

.pull-center[  
   ![:scale 50%](./img/thun-conf2.png)
]

---

## Outlook
### Uso y configuracion de cuenta.

.pull-left[
1. Abre Microsoft Outlook 2019
1. Elige IMAP/POP
1. Configura las opciones IMAP o POP

]
.pull-right[
   ![:scale 90%](./img/outlook2.png)
]

---

## Outlook
### Reglas desde el WebMail

.pull-center[
   ![:scale 90%](./img/outlook4.png)
]


---

## Correo: 

### Confección y redacción

En el momento que generamos el correo debemos definir los siguientes valores. 

* Para: (destinatarios principales)
* CC: (destinatarios secundarios en copia)
* CCo: (destinatarios secundarios con copia oculta) 

Tener en cuenta que la comunicacion por correo se define como carecter formal y la comunicacion debe ser la mas clara y acertiva posible.

---

## Firma Digital
### Concepto

Es el conjunto de caracteres que se añaden al final de un documento o cuerpo de un mensaje para
informar, dar fe o mostrar validez y seguridad.

.center[<iframe width="560" height="315" src="https://www.youtube.com/embed/b-yDMVqklXQ?si=O3lU9R0teIprbuQB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>]


---
class: center, middle, inverse

## Gracias!

