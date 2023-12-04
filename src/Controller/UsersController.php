<?php

namespace App\Controller;

use App\Controller\AppController;
use App\Model\Table\UsersTable;

class UsersController extends AppController
{
    function login()
    {
        $this->Users = new UsersTable();
        $sign_up = $this->Users->newEntity();
        $this->viewBuilder()->setLayout('blank');
    }

    function signup()
    {
        $this->Users = new UsersTable();
        $sign_up = $this->Users->newEntity($this->request->getData(), ['validate' => false]);
        if ($this->request->is('post')) {
            $sign_up = $this->Users->newEntity($this->request->getData(), ['validate' => 'update']);
            if (!$sign_up->errors) {
                $this->Flash->error(__('Không thêm thành công'));
            } else {
                if ($this->Users->save($sign_up)) {
                    $this->Flash->error("User add thành công");
                    return $this->redirect(['action' => 'Signup']);
                }
            }
        }

        $this->set(compact('sign_up'));
        $this->viewBuilder()->setLayout('blank');
        $this->render('signup');
    }
}
