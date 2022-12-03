# Instrucciones proyecto de fin de grado FPII DAW.

Página web e-commerce con pasarela de pago de PatinLandia

---

## GitHub

Voy a anotar todos los pasos a modo de guía de toda relación con GitHub.

Abrimos terminal en Visual Studio Code, hacemos cd hasta carpeta proyecto y escribimos:

1. git init
2. git remote add origin https://github.com/jfuli/NombreDeProyecto
3. creamos en github el repositorio con el mismo NombreDeProyecto, seleccionamos añadir README.md
4. git config --global core.autocrlf true (si estas en windows=true, o mac/linux=input)
5. git status (para ver el estado)
6. git add . (para añadir todo)
7. git commit -m "primer commit, landing ok"
8. git push origin master
9. git checkout -b develop (creamos rama develop). En github cambiamos la Default branch a develop
10. git pull origin master
11. creamos github pages y configuramos para que muestre la rama master  
    https://jfuli.github.io/PatinLandia/

12. hay que estar siempre en la rama develop, haciendo push y luego pull de develop, los branches los hacemos desde github
13. creamos issue en github sobre un apartado q no funciona en darkmode
14. en la terminal de Visual Studio
15. git add .
16. git commit -m "resuelto issue darkmode"
17. git push origin develop
18. git pull origin develop

Repetir:

- git push origin develop
- git pull origin develop
- merge  
  En rama develop(donde estamos trabajando)=>  
   git add .  
  git commit -m "prueba merge"  
  git push origin develop
  git merge master

Agregar cambios a un commit que aún no hemos subido a github:
git add archivo1.ext archivo2.ext ...
git commit --amend

Borrar último commit sin perder cambios actuales
git reset HEAD^ --soft

Cambio de nombres de archivos:  
git mv old_filename new_filename  
git commit -m "Rename file"  
git push origin YOUR_BRANCH

---

## Instalación smarty en XAMP

smarty es un motor de plantillas para php.
Lo que hace básicamente es separar el código php del html

1. Descargar smarty=> https://www.smarty.net/download
2. Creamos una carpeta que se llame smarty en=> C:\xampp\htdocs
3. Descomprimimos dentro smarty
4. Accedemos a nuestro php.ini => C:\xampp\php\php.ini
5. Buscamos (Ctrl+F) "include_path"
6. Tenemos que modificar esa línea para que quede así:
   ; Windows: "\path1;\path2"
   include_path= ";C:\xampp\php\PEAR;C:\xampp\htdocs\smarty\libs"
7. Reiniciar el módulo de Apache en Xampp si estaba encendido: Stop/Start

---

## Uso de XAMP: ejecutar archivo PHP

Paso 1:  
Ve a la página web de Apache Friends y descarga XAMPP para Windows. Para facilitar la instalación, descarga "self-extracting RAR archive" del Paquete Básico. Espera a que finalice la descarga y ábrelo para comenzar a instalar XAMPP. Haz clic en el botón "Instalar" para comenzar la extracción del archivo. Cuando aparezca la pantalla con el símbolo del sistema, pulsa la tecla "Intro" en cada pregunta para aceptar la configuración predeterminada.

Paso 2:
Inicia el programa XAMPP. Cuando se inicia, XAMPP se carga en la bandeja de iconos. El icono es de color naranja con una forma de hueso blanca en su centro. Haz clic en el icono para ampliar el panel de control. Haz clic en el botón "Iniciar" al lado de "Apache" para iniciar el servidor Web Apache. Cuando Apache se esté ejecutando, la palabra "En ejecución" aparecerá a su lado, resaltada en verde. También debes ejecutar "MySQL" si tus scripts PHP dependen de una base de datos MySQL para funcionar.

Paso 3:  
Coloca los archivos PHP en la carpeta "htdocs" que se encuentra dentro de la carpeta "XAMMP" en la unidad C:. La ruta del archivo es "C:\xampp\htdocs" para tu servidor Web. Asegúrate de que tus archivos PHP se guarden de esa forma. Deben tener la extensión ".php". Abre un navegador Web en el equipo de escritorio e introduce "localhost" en el espacio proporcionado. El navegador abrirá una lista de los archivos almacenados en la carpeta "htdocs" en tu computadora. Haz clic en el enlace de un archivo PHP y ábrelo para ejecutar un script.

Paso 4:  
Crea las carpetas que necesites para poner a prueba los archivos PHP bajo la carpeta "htdocs". Si creas una carpeta llamada "scripts", usa la dirección "localhost/scripts" para abrirlos en tu navegador.

`http://localhost/PROYECTOS_XAMP/PatinLandia/`

---

### Comentarios

Sería interesante que trabajaras con alguna alternativa a JQuery como React o Vue
Igualmente que la parte de back, usaras algún framework tipo Laravel u otro que quisieras aprender o que conozcas.

---

Laravel  
Blade (es el idem de smarty), el sistema de plantillas de Laravel, el cual nos provee de muchas características que deberíamos tener en un lenguaje de plantillas, como por ejemplo la capacidad de escapar los datos de forma automática.
Para utilizar el sistema de plantillas de Laravel debemos renombrar nuestras vistas para que tengan la extensión .blade.php.
`https://styde.net/blade-el-sistema-de-plantillas-de-laravel/`

---
