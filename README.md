# presenteprofe - Sistema de registro de asistencia

 <strong>Presenteprofe.cl</strong> es un sistema autogestionado que permite a los docentes registrar la asistencia de los alumnos de manera rápida y controlada.

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
