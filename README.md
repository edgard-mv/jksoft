<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Clonar el repositorio

Para clonar el repositorio, deben seguir los siguientes pasos:

- `git clone https://github.com/edgard-mv/jksoft.git`

Una vez hayan entrado al directorio, deben cambiar a su respectiva rama:

- `git switch [migraciones | plantillas]`

Finalmente, deben instalar las dependencias:

- `composer install`
- `yarn install --frozen-lockfile`
- `yarn dev --frozen-lockfile`
- `yarn watch --frozen-lockfile`
- `cp .env.example .env`

Recuerda editar tu archivo `.env` y luego ejecuta:

- `php artisan key:generate`

Para comprobar que la aplicación funcione, deberían ejecutar `php artisan serve`.
