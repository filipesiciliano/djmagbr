<div id="content">
    <div id="content-header">
        <h1>DJ's</h1>
    </div> <!-- #content-header -->
    <div id="content-container">

        <div class="portlet">

            <div class="portlet-header">

                <h3>
                    <i class="fa fa-tasks"></i>
                    Lista
                </h3>

            </div> <!-- /.portlet-header -->

            <div class="portlet-content">

                <div class="row">

                    <div class="col-sm-12">
                        <table class="table table-striped table-bordered table-hover table-highlight table-checkable"
                            data-provide="datatable" data-display-rows="10" data-info="true" data-search="true"
                            data-length-change="true" data-paginate="true">
                            <thead>
                                <tr>
                                    <th scope="col" class="col-md-1">
                                        #
                                    </th>
                                    <th scope="col" class="col-md-6">
                                        Nome
                                    </th>
                                    <th scope="col" class="col-md-3">
                                        Tags
                                    </th>
                                    <th scope="col" class="actions col-md-2">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($djs as $dj): ?>
                                <tr>
                                    <td>
                                        <?= $this->Number->format($dj->id) ?>
                                    </td>
                                    <td>
                                        <?= h($dj->name) ?>
                                    </td>
                                    <td>
                                        <?=(count($dj->dj_tags) == 0) ? 'Nenhuma Tag cadastrada para esse DJ' : '';?>
                                        <?php foreach ($dj->dj_tags as $tag): ?>
                                            <span class="label label-default"><?=$tag->tag->name;?></span>
                                        <?php endforeach; ?>
                                    </td>
                                    <td class="actions">

                                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $dj->id], ['class' => 'btn btn-xs btn-warning']) ?>

                                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $dj->id], ['confirm' => __('Tem certeza que gostaria de deletar o DJ # {0}?', $dj->name), 'class' => 'btn btn-xs btn-danger'])?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div> <!-- /.col -->


                </div> <!-- /.row -->


            </div> <!-- /.portlet-content -->

        </div>

    </div> <!-- /#content-container -->
</div> <!-- #content -->
