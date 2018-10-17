<div id="content">
    <div id="content-header">
        <h1>Dashboard</h1>
    </div> <!-- #content-header -->
    <div id="content-container">
        <div class="row">

            <div class="col-md-3 col-sm-6">

                <a href="javascript:;" class="dashboard-stat primary">
                    <div class="visual">
                        <i class="fa fa-star"></i>
                    </div> <!-- /.visual -->

                    <div class="details">
                        <span class="content">Total de Votos</span>
                        <span class="value">1,236</span>
                    </div> <!-- /.details -->

                    <i class="fa fa-play-circle more"></i>

                </a> <!-- /.dashboard-stat -->

            </div> <!-- /.col-md-3 -->

            <div class="col-md-3 col-sm-6">

                <a href="javascript:;" class="dashboard-stat secondary">
                    <div class="visual">
                        <i class="fa fa-shopping-cart"></i>
                    </div> <!-- /.visual -->

                    <div class="details">
                        <span class="content">Tags não Cadastradas</span>
                        <span class="value">256</span>
                    </div> <!-- /.details -->

                    <i class="fa fa-play-circle more"></i>

                </a> <!-- /.dashboard-stat -->

            </div> <!-- /.col-md-3 -->

            <div class="col-md-3 col-sm-6">

                <a href="/djs" class="dashboard-stat tertiary">
                    <div class="visual">
                        <i class="fa fa-clock-o"></i>
                    </div> <!-- /.visual -->

                    <div class="details">
                        <span class="content">DJ's Cadastrados</span>
                        <span class="value"><?=$djs;?></span>
                    </div> <!-- /.details -->

                    <i class="fa fa-play-circle more"></i>

                </a> <!-- /.dashboard-stat -->

            </div> <!-- /.col-md-3 -->

            <div class="col-md-3 col-sm-6">

                <a href="javascript:;" class="dashboard-stat">
                    <div class="visual">
                        <i class="fa fa-money"></i>
                    </div> <!-- /.visual -->

                    <div class="details">
                        <span class="content">Club's Cadastrados</span>
                        <span class="value">21</span>
                    </div> <!-- /.details -->

                    <i class="fa fa-play-circle more"></i>

                </a> <!-- /.dashboard-stat -->

            </div> <!-- /.col-md-9 -->
        </div> <!-- /.row -->
        <div class="row">
            <div class="col-md-9">
                <div class="portlet">
                    <div class="portlet-header">
                        <h3>
                            <i class="fa fa-bar-chart-o"></i>
                            Histórico de Votos por Dia
                        </h3>
                    </div> <!-- /.portlet-header -->
                    <div class="portlet-content">
                        <div id="area-chart" class="chart-holder" style="height: 450px"></div>
                        <!-- /#bar-chart -->
                    </div> <!-- /.portlet-content -->
                </div> <!-- /.portlet -->
            </div> <!-- /.col-md-9 -->
            <div class="col-md-3">
                <div class="portlet">
                    <div class="portlet-header">
                        <h3>
                            <i class="fa fa-compass"></i>
                            Top 3 Dj's
                        </h3>
                    </div> <!-- /.portlet-header -->
                    <div class="portlet-content">
                        <div class="progress-stat">
                            <div class="stat-header">
                                <div class="stat-label">
                                    DJ 01
                                </div> <!-- /.stat-label -->

                                <div class="stat-value">
                                    21.3%
                                </div> <!-- /.stat-value -->

                            </div> <!-- /stat-header -->

                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="21"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 21.3%">
                                    <span class="sr-only">21.30%</span>
                                </div>
                            </div> <!-- /.progress -->

                        </div> <!-- /.progress-stat -->

                        <div class="progress-stat">

                            <div class="stat-header">

                                <div class="stat-label">
                                    DJ 02
                                </div> <!-- /.stat-label -->

                                <div class="stat-value">
                                    18.2%
                                </div> <!-- /.stat-value -->

                            </div> <!-- /stat-header -->

                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-tertiary" role="progressbar" aria-valuenow="18"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 18.2%">
                                    <span class="sr-only">18.2%</span>
                                </div>
                            </div> <!-- /.progress -->

                        </div> <!-- /.progress-stat -->

                        <div class="progress-stat">

                            <div class="stat-header">

                                <div class="stat-label">
                                    DJ 03
                                </div> <!-- /.stat-label -->

                                <div class="stat-value">
                                    10.7%
                                </div> <!-- /.stat-value -->

                            </div> <!-- /stat-header -->

                            <div class="progress progress-striped active">
                                <div class="progress-bar progress-bar-secondary" role="progressbar" aria-valuenow="10"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 10.7%">
                                    <span class="sr-only">10.7% Bounce Rate</span>
                                </div>
                            </div> <!-- /.progress -->
                        </div> <!-- /.progress-stat -->
                        <br />
                    </div> <!-- /.portlet-content -->
                </div> <!-- /.portlet -->

            </div> <!-- /.col -->

        </div> <!-- /.row -->

    </div> <!-- /#content-container -->


</div> <!-- #content -->
