## Práctica ABM laravel

**Es una pequeña aplicación que consta de un abm de Usuarios y se relaciona con una base de datos MySql. He utilizado la arquitectura MVC para su diseño y el motor de plantillas blade. Tambien he empleado bootstrap para las interfaces**

**Los datos solicitados para la tabla User, los he agregado a la tabla que provee Laravel**

Consideraciones sobre los datos: 
**User: Este campo lo he tomado como el nombre de usuario, como el name que trae por defecto Laravel en su tabla user, por lo que reemplaze el campo name original por el campo user solicitado**
**Status: He tomado como referencia para los datos de prueba los valores 1 y 2 ya que debian almacenarse como integer; pero a la hora de visualizarce 1 hace referencia a Habilitado, y 2 a Inhabilitado, considerando que este campo hace mencion al estado de la cuenta**
**Active: Para el campo active que es boolean considere al estado true como Activo, siendo este el valor que se esta almacenando por defecto a fines de la realizacion de las pruebas y false como Inactivo**
**Role: Este dato ha sido almacenado como un dato de tipo de Json de acuerdo a lo solicitado y pasasdo a string para su visualizacion**

- He trabajado con factories y seeders para la generación de datos usuarios para las pruebas;
    por lo cual hay que correr el comando **php artisan migrate:fresh --seed**
- He generado una carpeta users en views que cuenta con las vistas de usuarios;
    el archivo actions.blade.php contiene los enlaces para las acciones de cada registro obtenido
    en el index.

**Para loguearse en la aplicacion y poder acceder a las vistas /home o /users podran hacer uso de las siguientes credenciales, las cuales se cargaran en la bd al realizar las migraciones**

**email    => matias@admin.com**
**password => 123123**
------------


**ANTE CUALQUIER DUDA ESTOY A SU DISPOSICION**
                                                **GRACIAS**
