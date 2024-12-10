## About

This is an application web-based application for background verification where clients will be able to register themselves on the portal and can raise verification requests to the BGC portal.


This application will be majorly used by clients to verify their employees or client and process their profile. Client will submit the application on behalf of the candidate or the client will initiate the request, once the application is submitted it will not be modified by the candidate. The BGC team will cross check all attached documents and information. There will be different predefined packages. Admin can also create, edit or delete the package. At the time of client signup if he does not select any package then the default package will be applied for his all application.


## Requirements

- PHP 7.4
- PgSQL

## Local Setup

- Clone this repository
- Change your working directory to the project root directory.
- Run `cp .env.example .env`
- Create an empty database.
- Update the `DB_HOST`, `DB_USERNAME`, `DB_PASSWORD` with your newly created database credentials.
- Run `chmod -R 777 storage/`(Only for MAC and Linux)
- Run `chmod -R 777 bootstrap/`(Only for MAC and Linux)

- Run `php artisan serve`
- Open a web browser and navigate to `http://127.0.0.1:8000
## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[CMS Max](https://www.cmsmax.com/)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

<!-- First Step Edit .env -->
<!-- Second Add Database Name,host id,and data base password -->
<!-- Third Run Following Command -->
<!-- php artisan migrate  -->
<!-- if database already present and want fresh database (previous all tables will deleted by following command ) -->
<!-- php artisan migrate:fresh -->
<!-- Fourth Step add Default values in Database using following command -->
<!-- php artisan db:seed -->
<!-- for Super Admin Login  -->
<!-- Email :super_admin@mailinator.com -->
<!-- password = Qwer123@ -->
<!-- php artisan db:seed --class=UserSeeder -->
<!-- ALTER SEQUENCE nationality_id_seq RESTART WITH 1 -->
 <!-- php artisan migrate --path=./database/migrations/2021_10_13_051822_alter_candidate_application.php -->
