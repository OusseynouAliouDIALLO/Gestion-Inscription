<?php
namespace App\Models;
Class AC extends User{
    
    public function __construct()
    {
        $this->role="ROLE_AC";
    }
}