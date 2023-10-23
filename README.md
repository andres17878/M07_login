# M07_login

## Practica 3 y 4 de Login y creación de usuarios

### Objetivos:
1. Aprender a utilizar el include.
2. Utilizar funciones para estructurar el código
3. Consultar información a través de PHP, MYSQL
4. Resolución de problemas
5. Aprender markdown
6. Aprender Git y Github
7. Utilizar formularios php
8. Utilizar GET y POST
9. Aprender a utilizar try catch

### Respecto a la práctica 4 se ha de hacer lo siguiente:
Después de desarrollar la página SignIn (para crear usuarios), tendremos que desarrollar la página de login.

Debemos realizar lo siguiente:

- Crear un archivo HTML para el login.
  - Será un formulario con campos para el correo electrónico y la contraseña.
  - Debe incluir una casilla de verificación "Recuérdame".
  - El formulario utilizará el método POST.
  - La página contendrá un enlace para crear un usuario (página de la práctica anterior).
  - Todas las páginas de la práctica anterior deberán tener un enlace para ir a `login.html`.

- Crear un archivo PHP para validar el usuario y contraseña en la base de datos.
  - Consultará la información ingresada en la página de login para verificar si el usuario y la contraseña coinciden con un registro en la base de datos.
  - El tratamiento será el siguiente:
    - Si la consulta devuelve un resultado:
      - Si el rol es "estudiante", mostrará en pantalla: el nombre, apellido y correo electrónico.
      - Si el rol es "profesor", mostrará el nombre y apellido del profesor y la información de todos los usuarios de la base de datos.
    - En caso de que no sea correcto, volverá a la página de login y mostrará un error de "Inicio de sesión incorrecto".

- Deberán crear y utilizar una función para consultar a todos los usuarios cuando el rol es "profesor".

- Las constantes de conexión se deben usar a través de un archivo externo llamado `dbConf.php`.

- Deben utilizar un bloque try-catch en el archivo de conexión.

- Las vistas (página de login, página de inserción de datos y página de muestra de datos) deben colocarse en una carpeta llamada "vistas".
