<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <title>
        Dj Mag Brasil - <?=$this->fetch('title') ?>
    </title>
    <link rel="shortcut icon" href="/img/Djmagbrasil_Logo_16x16px.png">
    <div id="wrapper">
        <?=$this->element('header'); ?>
        <?=$this->element('sidebar'); ?>
        <?=$this->Html->charset() ?>
    </div>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Dj Mag Brasil - DjMag Brasil">
    <meta name="author" content="Filipe Siciliano" />
    <?=$this->Html->meta('icon') ?>

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,800italic,400,600,800"
        type="text/css">
    <?=$this->Html->css([
        "font-awesome.min.css",
        "bootstrap.min.css",
        "../js/libs/css/ui-lightness/jquery-ui-1.9.2.custom.css",
    ]) ?>
    <?=$this->Html->css([
        "../js/plugins/icheck/skins/minimal/blue.css",
        "../js/plugins/select2/select2.css",
        "../js/plugins/fullcalendar/fullcalendar.css",
    ]) ?>
    <?=$this->Html->css("App.css") ?>
    <?=$this->Html->css("custom.css") ?>
    <?=$this->fetch('meta') ?>
    <?=$this->fetch('css') ?>
</head>

<body>
    <?=$this->fetch('content'); ?>
    <?=$this->Html->script([
        "libs/jquery-1.9.1.min.js",
        "libs/jquery-ui-1.9.2.custom.min.js",
        "libs/bootstrap.min.js",
    ]); ?>

    <?=$this->Html->script([
        "plugins/icheck/jquery.icheck.min.js",
        "plugins/select2/select2.js",
        "plugins/datatables/jquery.dataTables.min.js",
        "plugins/datatables/DT_bootstrap.js",
        "plugins/tableCheckable/jquery.tableCheckable.js",
    ]); ?>

    <?=$this->Html->script("App.js"); ?>

    <?=$this->Html->script([
        "libs/raphael-2.1.2.min.js",
        "plugins/morris/morris.min.js",
    ]); ?>

    <?=$this->Html->script([
        "demos/charts/morris/area.js",
        "demos/charts/morris/donut.js",
    ]); ?>

    <?=$this->Html->script("plugins/sparkline/jquery.sparkline.min.js"); ?>

    <?=$this->Html->script([
    "plugins/fullcalendar/fullcalendar.min.js",
    "demos/calendar.js",
    ]); ?>
    <?=$this->Html->script("demos/dashboard.js"); ?>
    <?=$this->fetch('script') ?>
    <?=$this->element('footer'); ?>
</body>

</html>
