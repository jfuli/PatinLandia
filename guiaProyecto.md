Proyecto de fin de grado FPII DAW. Página web e-commerce con pasarela de pago de PatinLandia
Voy a anotar todos los pasos a modo de guía de toda relación con github.

Abrimos terminal en Visual Studio Code, hacemos cd hasta carpeta proyecto y escribimos:
1º git init
2º git remote add origin https://github.com/jfuli/NombreDeProyecto
3º creamos en github el repositorio con el mismo NombreDeProyecto, seleccionamos añadir README.md
4º git config --global core.autocrlf true (si estas en windows=true, o mac/linux=input)
5º git status (para ver el estado)
6º git add . (para añadir todo)
7º git commit -m "primer commit, landing ok"
8º git push origin master
9º git checkout -b develop (creamos rama develop). En github cambiamos la Default branch a develop
10º git pull origin master
11º creamos github pages y configuramos para que muestre la rama master
https://jfuli.github.io/PatinLandia/

12º hay que estar siempre en la rama develop, haciendo push y luego pull de develop, los branches los hacemos desde github
13º creamos issue en github sobre un apartado q no funciona en darkmode
14º en la terminal de Visual Studio
git add .
git commit -m "resuelto issue darkmode"
git push origin develop
git pull origin develop

repeat
git push origin develop
git pull origin develop
merge