# PHP de 0 a 100 por LUBUTECH DEV - UDEMY

## Descripción
> Actividades prácticas realizadas con PHP para aprender el lenguaje. Siguiendo las instrucciones del curso, la actividad 6 utiliza una template de CSS que no es de mi propiedad, es extraída de manera gratuita. 
>
> El proyecto utiliza un patrón de diseño tipo Modelo-Vista-Controlador (MVC) para organizar el código. Empleamos un sistema de plantillas que renderiza las vistas, las cuales extraen la información necesaria según la página solicitada. Esto significa que cada parte del proyecto tiene una función específica:
>
> * Controladores: Manejan las peticiones del usuario y determinan qué información se necesita.
> * Vistas: Usan un sistema de plantillas para mostrar la información al usuario, adaptándose al tipo de página que se está visitando.
<br>

## Estado de carpeta 📂
<div align="center" style="display: inline_block">
<img src="https://img.shields.io/badge/Avnace-100%25-7389A6?style=for-the-badge" />
<img src="https://img.shields.io/badge/Version-1.0-7389A6?style=for-the-badge" />
</div>
<br>

## Tecnologías utilizadas 🔨
<div align="center" style="display: inline_block">
<img alt="PHP" src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge" />
</div>
<br>

### Notas importantes ⚠
  - Los documentos cuentan con comentarios, observaciones y fórmulas en español (*The programs include comments, observations, and explanatory formulas written primarily in Spanish to help clarify the code and its purpose*).

El proyecto se estructura de la siguente manera:
  - /controlador: Contiene el archivo que realiza el llamado a la plantilla. Evitando los errores de rutas para imagenes y archivos CSS se añadio una ruta
  - /vista: Carpeta que contiene toda la estructura visual de la página web
     - /assets: Carpeta con los archivos CSS, imageenes, tipografía y archivos JS propios de la plantilla
     - **/modulos**: Carpeta maestra que contiene en un archivo de tipo PHP la estructura HTML del contenido de la pagina. Todas las páginas cuentan con un _banner_ y un _footer_, esta repetición se reduce con el uso de plantilla. Al cambiar de página el contenido es diferente, por ello las páginas _about_,_deals_,_inicio_ y _reservation_ son llamados por una estructura de control tipo IF para mostrar una página completa con su banner, _contenido_ y footer.
     - /vendor: Carpeta contenedora del framework bootstrap y la libreria JQuery (propias de la plantilla).
     - **plantilla.php**: Archivo de estructura HTML con PHP incrustado que realiza el llamado a los **modulos** para ser visibles por el usuario.
     - **index.php**: Pagina principal que inicia al controlador, para llamar a los archivos de plantilla y mostrar los modulos.
<br>

## Instalación y uso
Descarga el repositorio a tu computadora. Puedes hacerlo de dos maneras:
1. Clonar el repositorio usando Git:
`git clone https://github.com/odrasanchezdev/php-essentials/`
2. Descargar un archivo ZIP directamente desde la página del repositorio en GitHub.

Es necesario contar con un entorno de servidor local como XAMPP.
  * Descarga XAMPP desde el sitio web de Apache Friends.
  * Ejecuta el instalador. Asegúrate de seleccionar Apache y PHP durante el proceso de instalación.
  * XAMPP se instalará en una carpeta, por defecto `C:\xampp` en Windows.
  * Abre el XAMPP Control Panel. E inicia los módulos Apache haciendo clic en los botones Start.
  * En la carpeta `C:\xampp\htdocs` y coloca la carpeta del proyecto aquí. 
  * Abre tu navegador web. Para ver tu proyecto, escribe `localhost/PHP-0-a-100...` en la barra de direcciones.

<br>

## Soporte
Si tienes alguna pregunta, encuentras un error en alguno de los documentos o deseas sugerir una mejora, ¡no dudes en abrir un issue en este repositorio! Nos encantaría recibir tus comentarios.

* ¿Encontraste un error? Abre un issue y describe el problema.
* ¿Tienes una sugerencia? Abre un issue y comparte tu idea.

Acercate a mis redes sociales para atender tus dudas y sugerencias en la sección de [Contacto](#contacto-)

<br>

## Licencia ✅
Se permite el uso, copia y distribución de este proyecto, siempre y cuando se mantenga la atribución original y no se sublicencie. No se permite su distribución, modificación o uso comercial sin permiso expreso del autor.

Copyright (c) 2025 at Odra Sanchez. Enlace del perfil:
<div align="center" style="display: inline_block">
  
<a href="https://github.com/odrasanchezdev">![GitHub](https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=github&logoColor=white)</a>
</div>

<br>

## Contacto 🌐
Si tienes alguna pregunta o sugerencia, no dudes en contactarme:
<div align="center" style="display: inline_block;">
  
 <a href="https://odrasanchezdev.super.site/">![Mysite](https://img.shields.io/badge/servicios-071739?style=for-the-badge)</a>
 <a href="https://www.linkedin.com/in/odrasanchez/">![LinkedIn](https://img.shields.io/badge/-LinkedIn-004e89?style=for-the-badge)</a>
 <a href="https://ko-fi.com/odrasanchez">![Ko-fi](https://img.shields.io/badge/-Ko--fi-F16061?style=for-the-badge)</a>
 <a href="https://www.behance.net/odrasanchezdev">![Behance](https://img.shields.io/badge/-B&emacr;hance-1982c4?style=for-the-badge)</a>
 <a href="https://t.me/odrasanchezdev">![Telegram](https://img.shields.io/badge/-Telegram-219ebc?style=for-the-badge)</a>
 
</div>
