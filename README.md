# Conjuntos de scripts con interfaz WEB para gestionar RaspberriPI
Scripts para la raspberry PI en Python accesibles desde una interfaz web en
el framework YII 2 para controlar este pequeño aparato.

## ATENCIÓN (Información)

Estoy creando esta plataforma (en principio) según las necesidades y/o
intereses que me van surgiendo para amenizar tareas o controlar cómodamente
ciertos dispositivos.

Aún se encuentra en fase inestable/experimental y puede no coincidir la
información que encontrarás y/o recibir un funcionamiento inesperado.

-   Este conjunto de aplicaciones esta diseñado para trabajar en la ruta: /var/www/rpiweb
-   Está probado solamente bajo Raspbian Stable.
-   Puede contener errores.
-   Aún está en fase beta.
-   Se tendrán en cuenta todas las sugerencias y aportaciones.
-   No me hago responsable de daños ni mal funcionamiento aunque todos aquellos que sean reportados intentaré repararlos en la mayor brevedad que me sea posible (si está en mis manos y dispongo del hardware para realizarlo).
-   Se admiten colaboradores para este proyecto.
-   Se puede redistribuir bajo la misma licencia, GPLv3 con reconocimiento
del autor: fryntiz (Raúl Caro Pastorino).

## Objetivos

-   Optimización de código repetitivo
-   Información en la web sobre el hardware (temperatura, almacenamiento...)
-   Actualización desde la web

## Instalación

Clonar este repositorio en el servidor apache y apuntar al directorio web.
Puedes obtener más información en el sitio Oficial de Yii2 framework.

```Bash
    git clone https://github.com/fryntiz/Raspberry-PI-WEB.git /var/www/rpiweb
```

Una vez clonado, configurar apache para que la raíz del servidor se el
directorio web dentro de este repositorio (situado justo en la raíz).
Quedando (si se ha seguido el comando anterior) apuntando a:
**/var/www/rpiweb/web**

Instalar mediante **composer** todas las dependencias automáticamente y ya
podemos utilizarlo. Esto se realiza entrando al directorio donde hemos
descargado el repositorio y ejecutando el comando:

```Bash
    composer install
```

Por último tendrás que gestionar los permisos, en principio deberá pertenecer
al usuario **www-data** y el grupo llamado igual. Para lograrlo ejecutamos:

```Bash
    sudo chown -R www-data:www-data /var/www/rpiweb
```

Se recomienda periódicamente sincronizar con este repositorio. Si has
realizado cambios en tu réplica local, tendrás que mezclar o tener cuidado
de no rebasarlos.


## Configurar para apache en Debian/Raspbian

A continuaci�n un ejemplo desplegando el repositorio en apache, personaliza en
tu situaci�n las rutas. Se contempla al usuario como dueño y el grupo de apache
con permisos. Tambi�n puedes definirlo para ser gestionado �nicamente por 
apache con el usuario www-data y no elevar permisos de grupo.

```Bash
    sudo su -c "cat raspberry_web.conf > /etc/apache2/sites-available/raspberry_web.conf"

    sudo mkdir -p /var/log/apache2/raspberry_web

    ln -s /home/$(whoami)/git/raspberry_web/ /var/www/html/Proyectos/raspberry_web

    sudo chown $(whoami):www-data -R /var/www/html/Proyectos/raspberry_web/

    sudo chmod 775 -R /var/www/html/Proyectos/raspberry_web/web

    cd /var/www/html/Proyectos/raspberry_web

    sudo chmod 775 -R vendor models controllers db components config commands runtime tests views web

    sudo a2ensite raspberry_web

    sudo service apache2 restart
```
