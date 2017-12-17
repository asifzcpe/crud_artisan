<?php

namespace Asif\Crud_artisan\Commands;

use Illuminate\Console\Command;

class CrudFileGenerate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'crudfiles:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'to generate crud files controller,model,views,request,migrations etc';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $crudName=$this->ask("Please enter your crud name below..");
        \Artisan::call('make:controller',['name'=>ucfirst($crudName).'Controller','--resource'=>'--resource']);
        $this->info($crudName." related Controller has been created.");
        \Artisan::call('make:model',['name'=>ucfirst(str_singular($crudName))]);
        $this->info($crudName." related model has been created.");
        \Artisan::call('make:request',['name'=>ucfirst(str_singular($crudName)).'Request']);
        $this->info($crudName." related request has been created.");
        $this->info("generating migration..............");
        \Artisan::call('make:migration',['name'=>$crudName,'--create'=>str_plural($crudName)]);
        $this->info($crudName." related migration has been created.");
        $this->info("generating views...........");
        \File::makeDirectory('resources/views/'.$crudName);
        \File::put('resources/views/'.$crudName.'/index.blade.php','');
        \File::put('resources/views/'.$crudName.'/show.blade.php','');
        \File::put('resources/views/'.$crudName.'/create.blade.php','');
        \File::put('resources/views/'.$crudName.'/edit.blade.php','');
        $this->info($crudName." related views have been created.");

    }
}
