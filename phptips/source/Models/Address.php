<?php

namespace Source\Models;

use CoffeeCode\DataLayer\DataLayer;

class Address extends DataLayer
{
    public function __construct()
    {
        parent::__construct('address', ['user_id'], 'addr_id', false);
    }

    // public function save(): bool
    // {
    //     Verifico email
    //     parent::save();
    // }
}
