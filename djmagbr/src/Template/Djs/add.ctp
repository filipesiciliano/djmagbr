<?php
    $this->Form->templates([
    'inputContainer' => '<div class="form-group">{{content}}</div>',
    ]);
?>
<div id="content">
    <div id="content-header">
        <h1>Criar DJ</h1>
    </div> <!-- #content-header -->
    <div id="content-container">

        <div class="portlet">

            <div class="portlet-header">

                <h3>
                    <i class="fa fa-tasks"></i>
                    Cadastrar
                </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

                <div class="row">

                    <div class="col-sm-4">

                    <?=$this->Form->create('djs', ['action' => 'add']) ?>
                    <?=$this->Form->control('name', [
                                'class'       => 'form-control',
                                'placeholder' => 'Nome do DJ',
                                'label'       => 'Nome do DJ',
                            ]) ?>
                    <?=$this->Form->button('Criar', ['class' => 'btn btn-success btn-block']) ?>
                    <?=$this->Form->end() ?>

                    </div> <!-- /.col -->


                </div> <!-- /.row -->


            </div> <!-- /.portlet-content -->

        </div>

    </div> <!-- /#content-container -->
</div> <!-- #content -->
