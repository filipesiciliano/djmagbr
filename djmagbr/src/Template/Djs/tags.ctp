<?php
    $this->Form->templates([
    'inputContainer' => '<div class="form-group">{{content}}</div>',
    ]);
?>
<div id="content">
    <div id="content-header">
        <h1>Tags associadas ao DJ: <b><?=$dj->name;?></b></h1>
    </div> <!-- #content-header -->
    <div id="content-container">
        <div class="portlet">
            <div class="portlet-header">
                <h3>
                    <i class="fa fa-tags"></i>
                    TAGS
                </h3>
            </div> <!-- /.portlet-header -->
            <div class="portlet-content">
                 <?= $this->Form->create($dj) ?>
                <div class="row">
                    <div class="col-sm-4">
                     <?=$this->Flash->render('dj'); ?>

                             <?=$this->Form->control('name', [
                                'class'       => 'form-control',
                                'placeholder' => 'Tags',
                                'label'       => 'Tags',
                                'id' => 's2_djtags',
                                'value'       => $dj->tags
                            ]) ?>
                    </div> <!-- /.col -->
                </div> <!-- /.row -->
                <div class="row">
                    <div class="col-sm-4">
                        <?=$this->Form->button('Salvar', ['class' => 'btn btn-success btn-block']) ?>
                    </div>
                </div>
                <?=$this->Form->end() ?>
            </div> <!-- /.portlet-content -->
        </div>
    </div> <!-- /#content-container -->
</div> <!-- #content -->
<?=$this->Html->script('tags', ['block' => 'scriptBottom']); ?>
