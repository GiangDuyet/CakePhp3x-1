<div class="wrapper">
    <div class="wrapper-form">
        <?php echo $this->Flash->render() ;
        $this->Form->setTemplates([
        'inputContainer' => '<div class="form-group{{required}}"> {{content}} <span class="help">{{help}}</span></div>',
        'input' => '<input type="{{type}}" name="{{name}}" class="form-control" {{attrs}} />',
        'inputContainerError' => '<div class="form-group has-danger {{type}}{{required}}">{{content}}{{error}}</div>',
        'error' => '<div class="text-danger">{{content}}</div>'
        ]);
        ?>
        <h1>Sign Up</h1>
        <?= $this->Form->create($sign_up) ?>

        <?php
        echo $this->Form->control('fullname', [
            'type' => 'text',
            'placeholder' => 'Fullname',
            'id' => 'fullname',
            'label' => false,
            'required' => false
        ]);
        echo $this->Form->control('email', ['type' => 'text', 'placeholder' => 'Email@gmail.com', 'id' => 'email', 'label' => false, 'required' => false]);
        echo $this->Form->control('password', ['type' => 'password', 'placeholder' => 'Password', 'id' => 'password', 'label' => false, 'required' => false]);
        echo $this->Form->button('Add', ['class' => 'wrapper-form-button']);
        ?>

        <div style="padding: 15px 0px;">
            <a href="/Login">Login</a>
        </div>


    </div>
</div>