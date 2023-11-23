<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use cake\Validation\Validation;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmptyString('fullname', 'Please fill this field')
            ->requirePresence('fullname')
            ->notEmptyString('password', 'Please fill this field')
            ->requirePresence('password')
            ->requirePresence('email')
            ->notEmptyString('email', 'Please fill this field');
            

        return $validator;
    }
}
