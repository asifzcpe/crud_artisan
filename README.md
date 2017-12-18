# crud_artisan
crud_artisan is a laravel artisan package that helps the developer to generate necessary files for crud. It generates 
### Controller
### Model
### Migration
### Request
### Views

## How to install crud_artisan package
Itss too simple. Just run the following command in command promt
<br>
<code>
 composer require asif/crud_artisan
</code>

## Usage of the package
after installing the package just run the following command to generate crud related files
<br>
go to your config/app.php file and in service provider array add the following line
<br>
<code>
 Asif\Crud_artisan\CrudArtisanServiceProvider::class
</code>
<br>
Next, in command promt run the following command:
<code>
 php artisan crudfiles:generate (press enter)
</code>
in the next line input your crud name for example product and it will generate controller,model,views,migration and request for the product crud
