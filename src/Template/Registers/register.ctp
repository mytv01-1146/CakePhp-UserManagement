<div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5">
    <div class="card border-primary">
        <div class="card-header text-center border-primary">
            <h4>Register</h4>
        </div>
        <div class="card-body">
            <form>
            <?php
                $this->Form->setTemplates([
                    'inputContainer' => '<div class="form-group">{{content}}</div>',
                ]);
                echo $this->Form->create('register'); 
                echo $this->Form->control('username', ['label' => 'Username', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Enter username']);
                echo $this->Form->control('password', ['label' => 'Password', 'class' => 'form-control', 'type' => 'password', 'placeholder' => 'Enter password']);
                echo $this->Form->control('confirm_password', ['label' => 'Confirm password', 'class' => 'form-control', 'type' => 'password', 'placeholder' => 'Enter confirm password']);
                echo $this->Form->control('full_name', ['label' => 'Full name', 'class' => 'form-control', 'type' => 'text', 'placeholder' => 'Enter full name']);
                echo $this->Form->control('address', ['label' => 'Adress', 'class' => 'form-control', 'type' => 'textarea', 'placeholder' => 'Enter adress']);
                echo $this->Form->control('birth', ['label' => 'Date of birth', 'class' => 'form-control', 'type' => 'date']);
                echo $this->Form->button('Register', ['type' => 'submit', 'class' => 'btn btn-outline-success btn-block']);
                echo $this->Form->end();
            ?>
        </div>
    </div>
</div>
