<?php
$this->Form->templates([
 'inputContainer' => '<div class="form-group">{{content}}</div>',
]);
?>
<div id="login-container">
    <div id="login">
        <?=$this->Flash->render('auth') ?>
        <h3>Dj Mag Brasil Admin.</h3>
        <?=$this->Form->create() ?>
        <?=$this->Form->control('email', [
 'class'       => 'form-control',
 'placeholder' => 'Digite seu email',
 'label'       => false,
]) ?>
        <?=$this->Form->control('password', [
 'class'       => 'form-control',
 'placeholder' => 'Senha',
 'label'       => false,
]) ?>
        <?=$this->Form->button('Login', ['class' => 'btn btn-primary btn-block']) ?>
        <?=$this->Form->end() ?>

    </div> <!-- /#login -->
</div> <!-- /#login-container -->
