# Sesión 1 (28/2/2017): bash

En esta sesión aprendimos los rudimentos de la programación con un lenguaje de scripting, bash, que nos permite mandar comandos al sistema operativo (en Windows hay que habilitarlo, pero en Linux y Mac hay bash por defecto).


## Cómo abrir el terminal

Hay que buscar en los accesorios del ordenador que usemos el acceso a la terminal. La terminal es una pantalla negra donde se escribe con letras blancas, y en la primera línea tiene que aparecer el nombre de tu dispositivo.  


## Comandos básicos

echo para escribir un mensaje  
ls para mostrar listados los archivos y directorios del dispositivo 
ls nombre de la carpeta para ver los ficheros que hay dentro de la carpeta 
clear para borrar 
pwd para saber en qué carpeta o fichero estás en cada momento, te muestra la ruta al directorio actual 
cd (change directory) para cambio de directorio 
chmod para cambiar los permisos de un programa 
-l para ver en un listado 
-a para ver los archivos ocultos de un directorio 
man para consultar el manual de ayuda 
host para los archivos de configuración de red 

es útil usar el tabulador para autocompletar el comando, porque a veces no puedes acordarte de todos. 



### Como creo y ejecuto un programa en Nano 

abrimos el programa nano, aunque podríamos hacerlo en vim si el profesor tuviera más confianza en nuestros conocimientos 

tecleamos en el terminal nano y pulsamos enter. 

para conocer todos los parámetros adicionales de nano vamos a escribir el siguiente comando 
nano --help

La tecla Control la usamos con el caracter ^
Para crear y nombrar el programa abrimos el nano, escribimos un nombre random y le damos a guardar 
ctrl o para guardar
Para cambiar los permisos escribimos chmod + el cambio de permiso que quedamos introducir + random 
Si queremos cambiar el permiso de ejecución para todo el mundo escribimos a+x
Usamos comillas "Claro que si, guapi" para que el nano identifique que eso no es lo importante del programa 

para ejecutar el programa escribimos ./random y le damos a enter 







------------------------------------------------

[Volver a README](../README.md)
