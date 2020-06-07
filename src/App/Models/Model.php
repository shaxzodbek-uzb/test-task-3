<?php
namespace Console\App\Models;


class Model 
{
    function __construct()
    {

    }

    public function insert($json)
    {
        
    }
    
    public function select($query = '*')
    {
        
    }

    public function getName()
    {
        $path = explode('\\', get_called_class());
        return array_pop($path);
    }

    public function getModelSlug()
    {
        return strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $this->getName())));
    }

    public function getDBTableName()
    {
        return $this->getModelSlug() .'s.json';
    }
    public function getDBTablePath()
    {
        return 'DB\\' . $this->getDBTableName();
    }

}