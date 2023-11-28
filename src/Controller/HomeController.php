<?php

namespace App\Controller;

use App\Model\Table\UsersTable;
use Cake\ORM\TableRegistry;

class HomeController extends AppController
{

    function index()
    {
    }

    function login()
    {
        $this->viewBuilder()->setLayout('blank');
    }

    function signup()
    {
        $this->Users = new UsersTable();
        $sign_up = $this->Users->newEntity($this->request->getData(), ['validate' => false]);
        if ($this->request->is('post')) {
            $sign_up = $this->Users->newEntity($this->request->getData(), ['validate' => true]);
            if ($this->Users->save($sign_up)) {
                $this->Flash->error("User add thành công");
                return $this->redirect(['action' => 'Signup']);
            }
            $this->Flash->error(__('Không thêm thành công'));
        }

        $this->set(compact('sign_up'));
        $this->viewBuilder()->setLayout('blank');
        $this->render('signup');
    }
}
