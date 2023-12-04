<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{
    public function initialize(array $config): void
    {
        $this->addBehavior('Timestamp');
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmptyString('fullname', 'Please fill this field')
            ->requirePresence('fullname');
        return $validator;
    }

    public function validationUpdate(Validator $validator)
    {
        $validator = $this->validationDefault($validator);
        $validator->notEmptyString('password', 'Please fill this field')
            ->requirePresence('password');
        // $validator
        //     ->add('name', 'validRole', [
        //         'rule' => 'isValidRole',
        //         'message' => __('You need to provide a valid role'),
        //         'provider' => 'table',
        //     ]);
        $validator
            ->add('fullname','length', ['rule' => ['lengthBetween', 4, 20],'message' => "Tên dài từ 4 đến 20"]
            );
        $validator
            ->add('email', 'unique', [
                'rule' => 'validateUnique',
                'provider' => 'table',
                'message' => 'This email is already in use'
            ]);
        return $validator;
    }

    // public function isValidRole($value, array $context)
    // {
    //     return in_array($value, ['admin', 'editor', 'author'], true);
    // }
}
