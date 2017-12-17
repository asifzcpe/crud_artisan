<?php
/**
 * This is service proivider class for crud artisan package
 */

 namespace Asif\Crud_artisan;
 use Illuminate\Support\ServiceProvider;
 class CrudArtisanServiceProvider extends ServiceProvider{
    protected $commands=[
        'Asif\Crud_artisan\commands\CrudFileGenerate'
    ];

     public function boot()
     {
        
     }
     public function register()
     {
        $this->commands($this->commands);
     }
 }