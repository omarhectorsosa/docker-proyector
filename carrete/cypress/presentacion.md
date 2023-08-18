layout: true
class: center, middle, inverse
---

# Pruebas EndToEnd : Cypress 

---
layout: true
class: animated fadeInUp
---
## Agenda

(Tiempo estimado: 1h)

* Introduccion pruebas E2E
  - Metodologia e historia
  - Problematica
* Introduccion Cypress
  - ¿Para que sirve?
  - Porque usarlo y porque no
* Intalacion en Windows y Linux
  - Windows
  - Node Modulo: Node.js y npm 

---

## Posibilidades del recurso

Presion `H` o `?` para una lista de opciones.

---
## Inclusion de video

Se puede incluir video de Youtube

.center[<iframe width="560" height="315" src="//www.youtube.com/embed/Sa4HGmLFV5s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>]

* Por el momento no es posible incluir video desde la CDN.

---
## Uso de Imagenes

* Se recomienda colocar las imagenes en la carpeta `img` propia de cada presentación. 
* Use imagenes sin copyright o con licencias que permitan su uso en un ambito profesional.

![ok](./img/ok.gif)

---
## Uso de Imagenes

Para incluir imagenes se usa lo mismo que markdown:

```markdown
![ok](./img/ok.gif)
```

![ok](./img/ok.gif)

---

## Imagenes escaladas

A veces necesitamos que la imagen __quepa__.

__Ojo!__ esto ahorra tiempo pero no espacio.

Se pueden escalar con:

```markdown
![:scale 30%](./img/ok.gif)
```

![:scale 30%](./img/ok.gif)

```markdown
![:scale 10%](./img/ok.gif)
```

![:scale 10%](./img/ok.gif)


---

## Posicionar imagen

.pull-left[
   Un ejemplo de texto a derecha 
   e imagen a izquierda. 

```markdown
.pull-left[
   Un ejemplo de texto a derecha 
   e imagen a izquierda. 
]

.pull-right[
   ![:scale 80%](./img/ok.gif)
]
```

]

.pull-right[
   ![:scale 80%](./img/ok.gif)
]

Obviamente, se puede tambien hacer a la inversa:


.pull-left[
   ![:scale 80%](./img/ok.gif)
   
]

.pull-right[
   Ahora un ejemplo de texto a izquierda
   e imagen a derecha. 
]

---

### Dividir Diapositivas

Para dividir se usa:

```markdown
---
```

__Atención__: Si despues de las tres lineas aparece un espacio (ya sea queriendo o por accidente),

--- 

en lugar de una nueva diapositiva tendran una linea horizontal.

---

## Uso de enlaces

El sistema de enlaces es el mismo que el markdown:

* [__Cypress Cap. 1: Introduccion a Cypress__](https://www.youtube.com/watch?v=drzcQ3Tt1hU).


---
## Uso de anotaciones del presentador

Usando tres signos de pregunta seguidos se abre un espacio de anotaciones que podrán ser visiblesp en modo presentador.

```
???
  Esto es una anotación para el presentador.
```

Para ver las anotaciones de esta pantalla presiona `P`.


???
   Esto es una anotacion. El publico no ve esta imagen:

   ![:scale 30%](./img/hide.gif)

   Se pueden agregar varias. (Atentos con la indentacion de 4 caracteres).

---
class: center, middle, inverse

## Gracias!


