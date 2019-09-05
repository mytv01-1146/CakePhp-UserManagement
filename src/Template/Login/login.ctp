<?php
$this->assign('title', 'Login');
?>
<div class="col-sm-9 col-md-7 col-lg-5 mx-auto my-5">
    <div class="card border-primary">
        <div class="card-header text-center border-primary">
            <h4>Login</h4>
        </div>
        <div class="card-body">
            <?php
            $this->Form->setTemplates([
                'inputContainer' => '<div class="form-group">{{content}}</div>',
            ]);
            echo $this->Form->create('register', ['type' => 'post']);
            echo $this->Form->control('username', [
                'label' => 'Username',
                'class' => 'form-control',
                'type' => 'text',
                'placeholder' => 'Enter username',
            ]);
            echo $this->Form->control('password', [
                'label' => 'Password',
                'class' => 'form-control',
                'type' => 'password',
                'placeholder' => 'Enter password',
            ]);
            echo $this->Form->button('Login', ['type' => 'submit', 'class' => 'btn btn-outline-success btn-block']);
            echo $this->Form->end();
            ?>
            <br>
            <p>Bạn chưa có tài khoản?&nbsp;
                <a href="<?php echo $this->Url->build(['controller' => 'Registers', 'action' => 'register']) ?>">
                    Đăng ký
                </a>
            </p>
        </div>
    </div>
</div>
