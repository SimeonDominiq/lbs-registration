<?php

namespace App\Repository\Register;

use App\Models\Registration;
use Carbon\Carbon;
use DB;


class EloquentRegister implements RegisterRepository
{

    private $register;

    public function __construct(Registration $register)
    {
        $this->register = $register;
    }

    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        return $this->register->find($id);
    }

    public function create($data) {
        foreach($data as $key => $datum) {
            if($datum == "") {
                $data[$key] = null;
            }
        }
        
        return $this->register->create($data);        
    }

}