<?php
namespace App\Setup;

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;

class DB
{
    public function __construct($config) {
        $capsule = new Capsule;
        $capsule->addConnection($config);
        $capsule->setEventDispatcher(new Dispatcher(new Container));
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
    }

}