# presenteprofe - Sistema de registro de asistencia

 <strong>Presenteprofe.cl</strong> es un sistema autogestionado que permite a los docentes registrar la asistencia de los alumnos de manera rápida y controlada.


resente Profe" es una aplicación que tiene como objetivo facilitar el registro de asistencia de los estudiantes en la sala de clases. Esta aplicación puede ser utilizada por los estudiantes para informar rápidamente si están presentes o ausentes en la clase, lo que a su vez ayuda al profesor a llevar un registro de la asistencia de los estudiantes.

Es importante destacar que el uso de esta aplicación depende de la política de registro de asistencia de cada institución educativa y de las normativas establecidas por las autoridades educativas correspondientes. Es recomendable que los estudiantes consulten con sus profesores o administradores escolares antes de utilizar esta aplicación para asegurarse de que cumple con las normativas de la institución.

En general, las aplicaciones que facilitan la gestión de la asistencia en la sala de clases pueden ser útiles para mejorar la eficiencia y precisión del registro de asistencia, lo que a su vez puede ayudar a los profesores a realizar un seguimiento más efectivo del progreso de los estudiantes.

"Presente Profe" ofrece dos versiones: una versión gratuita y una versión pro. La versión gratuita de la aplicación incluye un panel de administración propio y no tiene límites en la creación de salas, registro de alumnos o asistencias por clase.

La versión pro de la aplicación ofrece las mismas características que la versión gratuita, pero además agrega la funcionalidad de generar reportes y personalizar la página de la aplicación.

Es importante tener en cuenta que, aunque la versión gratuita puede ser suficiente para las necesidades de algunos usuarios, la versión pro puede ser útil para aquellos que necesiten características adicionales para gestionar mejor la asistencia en la sala de clases.

Es recomendable que los usuarios revisen cuidadosamente las características de cada versión de la aplicación antes de tomar una decisión sobre cuál versión utilizar.

Requerimientos de la versión gratuita:

- Panel de administración propio
- Creación ilimitada de salas
- Registro ilimitado de alumnos
- Registro ilimitado de asistencias por clase

Mejoras para la versión gratuita:

Posibilidad de exportar los registros de asistencia en formato CSV o Excel para su análisis y gestión
Opción para enviar notificaciones de asistencia a los estudiantes y/o padres de familia
Integración con sistemas de gestión de aprendizaje (LMS) y otras herramientas educativas para mejorar la eficiencia y precisión del registro de asistencia.
Requerimientos de la versión pro:

- Panel de administración propio
- Creación ilimitada de salas
- Registro ilimitado de alumnos
- Registro ilimitado de asistencias por clase
- Generación de reportes
- Personalización de la página de la aplicación

Mejoras para la versión pro:

Incorporación de herramientas de análisis de datos para proporcionar información útil sobre la asistencia de los estudiantes, como el porcentaje de asistencia, la cantidad de faltas, etc.
Integración con otras herramientas de gestión académica, como la gestión de calificaciones y el seguimiento del progreso académico de los estudiantes.
Adición de opciones de seguridad, como la autenticación de dos factores y la encriptación de datos, para proteger la privacidad y la seguridad de los datos de los estudiantes y profesores.


## Requisitos

- PHP 8>
- MySQL


- webapp  Bootstrap 5.3
- admin   Bootstrap 4.6

## Inicio

- composer install

### Inicial con forma de seed
```shell
php artisan storage:link

composer dump-autoload

php artisan migrate:fresh

php artisan imports:faker

```

### Material extra

- Adminlte https://adminlte.io/docs/3.2/
"# infast" 
