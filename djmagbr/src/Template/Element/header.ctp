<header id="header">
    <h1 id="site-logo">
        <a href="/">
            <img src="/img/logo.png" alt="Dj Mag Brasil" />
        </a>
    </h1>
    <a href="javascript:;" data-toggle="collapse" data-target=".top-bar-collapse" id="top-bar-toggle" class="navbar-toggle collapsed">
        <i class="fa fa-cog"></i>
    </a>

    <a href="javascript:;" data-toggle="collapse" data-target=".sidebar-collapse" id="sidebar-toggle" class="navbar-toggle collapsed">
        <i class="fa fa-reorder"></i>
    </a>
</header> <!-- header -->
<nav id="top-bar" class="collapse top-bar-collapse">
    <ul class="nav navbar-nav pull-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:;">
                <i class="fa fa-user"></i>
                <?=$this->request->session()->read('Auth.User.name');?>
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="/users/edit/<?=$this->request->session()->read('Auth.User.id');?>">
                        <i class="fa fa-"></i>
                        &nbsp;&nbsp;Editar
                    </a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="/users/logout">
                        <i class="fa fa-sign-out"></i>
                        &nbsp;&nbsp;Sair
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</nav> <!-- /#top-bar -->
