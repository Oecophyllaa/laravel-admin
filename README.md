![Logo](https://i.ibb.co/rv6pJqg/laravel-admin.png)

# Laravel Admin

Simple admin dashboard template using Laravel10 and Bootstrap5

## Tech Stack

- [Laravel 10](https://laravel.com/)
- [Bootstrap 5](https://getbootstrap.com/)

## Libraries & Template

- [Sneat Admin - Dashboard Template](https://themewagon.com/themes/free-responsive-bootstrap-5-html5-admin-template-sneat/)
- [Laravel UI](https://github.com/laravel/ui)
- [Laravel Captcha](https://github.com/mewebstudio/captcha)
- [SweetAlert2](https://github.com/realrashid/sweet-alert)

## Run Locally

Clone the project

```bash
  git clone https://github.com/Oecophyllaa/laravel-admin
```

Go to the project directory

```bash
  cd laravel-admin
```

Install dependencies

```bash
  composer install
  npm install
  npm run dev
```

Copy `.env` file from `.env.example`

```bash
  cp .env.example .env
```

Configure your database in `.env` file

```bash
  DB_DATABASE=laravel-admin
  DB_USERNAME=root
  DB_PASSWORD=secret
```

Migrate and Seed tables

```bash
  php artisan key:generate
  php artisan migrate --seed
```

Start the server

```bash
  php artisan serve
```

## Authors

[Oecophyllaa](https://www.github.com/Oecophyllaa)

## Feedback

If you have any feedback or questions, please reach out to me at [Telegram](https://t.me/Oecophyllaa)

## License

[MIT](https://choosealicense.com/licenses/mit/)
