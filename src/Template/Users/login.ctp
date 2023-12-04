<div class="wrapper">
    <div class="wrapper-form">
        <h1>Login Form</h1>
        <?= $this->Form->create('', ['type' => 'POST']) ?>
        <?php
        echo $this->Form->text('username', ['require' => 'true', 'type' => 'text', 'placeholder' => 'Email@gmail.com', 'id' => 'email', 'label' => '']);
        echo $this->Form->password('password', ['require' => 'true', 'type' => 'password', 'placeholder' => 'Password', 'id' => 'password', 'label' => '']);
        ?>
        <div class="wrapper-auth">
            <?php echo $this->Form->control('Remember me', ['require' => 'true', 'type' => 'checkbox', 'id' => 'checkbox']); ?>
            <div>
                <a href="/forgot-password">Forgot Password?</a>
            </div>
        </div>

        <?php echo $this->Form->button('Add'); ?>
        <?= $this->Form->end()  ?>

        <div>
            <a href="/Signup">Sign up</a>
        </div>



    </div>
</div>