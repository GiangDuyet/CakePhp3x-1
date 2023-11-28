<div class="wrapper">
    <div class="wrapper-form">
        <?php echo $this->Flash->render('');
        ?>
        <h1>Sign Up</h1>
        <?= $this->Form->create($sign_up)?>

        <?php
        echo $this->Form->control('fullname', [
            'type' => 'text',
            'placeholder' => 'Fullname',
            'id' => 'fullname',
            'label' => false,
            'required' => false 
        ]);
        echo $this->Form->control('email', [ 'type' => 'text', 'placeholder' => 'Email@gmail.com', 'id' => 'email','label' => false,'required' => false ]);
        echo $this->Form->control('password', [ 'type' => 'password', 'placeholder' => 'Password', 'id' => 'password','label' => false,'required' => false ]);
        echo $this->Form->button('Add');
        ?>

        <div style="padding: 15px 0px;">
            <a href="/Login">Login</a>
        </div>


    </div>
</div>