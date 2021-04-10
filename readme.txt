
El codigo segun las modificaciones hechas, agrega tareas nuevas usando los campos titulo,
 color, y las fecha de inicio y  de fin.


Modifica el titulo y el color de las tareas guiandose por su Id

elimina las tareas seleccionando la casilla borrar y escogiendo la tarea por su id.


El proyecyo consta de:

1 una carpeta de estilos css
2 una carpeta de Scripts js
3 una carpeta llamada partials donde esta el header y el footer de cada pagna web (esto solo por modularidad osea ordenar el codigo)
4 el archivo index abre el menu (aca esta el vinculo ala pagina del calendario)
5 el archivo calendar.php contiene la vista del calendari y la logica incluida de otros archivos del proyecto
6 editEventTitle.php contiene la logica el query que hace la consulta de edicion de datos a la base de datos
7 addEvent.php contiene la logica y el query que hace la consulta para agregar eventos ala base de datos

8 como el proyecto es una plantilla, no pude decifrar y conectar el archivo editEventDate.php con la vista
  calendar.php par aque funcione como deberia hacerlo :
    
    si quieren, intente mirar el archivo footer.php donde esta el script que se supone realiza la accion de editar las 
    fechas del evento antes de enviarse al archivo editEventDate.php por POST.

9 Honestamente no se que sera la carpeta fonts


10 para la creacion de la Base de Datos de My sql Copiar el codigo del archivo  calendar.sql y pegarlo en la linea de comandos de sql de localhost/phpmyadmin para crear la base de datos de este proyecto

Nota: Para que funcione no cambiar nada dejar tal como esta a menos que sepa lo que esta haciendo jeje




