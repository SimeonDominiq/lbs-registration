<?php

namespace App\Repository\Register;


interface RegisterRepository
{
    public function find($id);

    public function create(array $data);

}  