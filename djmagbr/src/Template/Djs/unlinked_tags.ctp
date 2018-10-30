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
                                        Tag
                                    </th>
                                    <th scope="col" class="col-md-6">
                                        DJ's
                                    </th>
                                    <th scope="col" class="actions col-md-2">
                                        Ações
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($tags as $tag): ?>
                                <tr>
                                    <td>
                                        <?= $this->Number->format($tag->id) ?>
                                    </td>
                                    <td>
                                        <?= h($tag->tag->name) ?>
                                    </td>
                                    <td>
                                    <select name="Djs" id="djs" class="form-control">
                                    <option value="">Selecione um DJ</option>
                                    <?php 
                                        foreach($djs as $dj) {
                                        echo "<option value ='$dj->id'>$dj->name</option>";
                                        }
                                    ?>
                                    </select>
                                        
                                    </td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Vincular'), ['action' => 'link_tag', $tag->id], ['class' => 'btn btn-xs btn-warning']) ?>
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
