<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blink Web - Login</title>

    <!-- Bootstrap Core CSS -->
    <?= $this->Html->css('/bower_components/bootstrap/dist/css/bootstrap.min'); ?>

    <!-- MetisMenu CSS -->
    <?= $this->Html->css('/bower_components/metisMenu/dist/metisMenu.min'); ?>
    
    <!-- Custom CSS -->
    <?= $this->Html->css('/dist/css/sb-admin-2'); ?>

    <!-- Custom Fonts -->
    <?= $this->Html->css('/bower_components/font-awesome/css/font-awesome.min'); ?>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <?= $this->fetch('css'); ?>

</head>

<body>

	<?= $this->fetch('content'); ?>

    <!-- jQuery -->
    <?= $this->Html->script('/bower_components/jquery/dist/jquery.min'); ?>

    <!-- Bootstrap Core JavaScript -->
    <?= $this->Html->script('/bower_components/bootstrap/dist/js/bootstrap.min'); ?>

    <!-- Metis Menu Plugin JavaScript -->
    <?= $this->Html->script('/bower_components/metisMenu/dist/metisMenu.min'); ?>

    <!-- Custom Theme JavaScript -->
    <?= $this->Html->script('/dist/js/sb-admin-2'); ?>

    <?= $this->fetch('script'); ?>

</body>

</html>
