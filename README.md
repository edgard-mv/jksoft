## Clonar el repositorio

Para clonar el repositorio, deben seguir los siguientes pasos:

- `git clone https://github.com/edgard-mv/jksoft.git`

Deben instalar las dependencias:

- `composer install`
- `yarn install --frozen-lockfile`
- `yarn dev --frozen-lockfile`
- `cp .env.example .env`

Recuerda editar tu archivo `.env` y luego ejecuta:

- `php artisan key:generate`

Para comprobar que la aplicación funcione, deberían ejecutar `php artisan serve`.

<p align="left">
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>