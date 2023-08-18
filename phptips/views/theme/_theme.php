<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <?php echo $head; ?>

    <!-- <link rel="stylesheet" href="<?php echo asset('/css/style.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo asset('/css/form.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo asset('/css/button.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo asset('/css/message.css'); ?>"/>
    <link rel="stylesheet" href="<?php echo asset('/css/load.css'); ?>"/> -->
    <link rel="stylesheet" href="<?php echo asset('/style.min.css'); ?>"/>
    <link rel="icon" type="image/png" href="<?php echo asset('/images/favicon.png'); ?>"/>
</head>
<body>

<div class="ajax_load">
    <div class="ajax_load_box">
        <div class="ajax_load_box_circle"></div>
        <div class="ajax_load_box_title">Aguarde, carrengando...</div>
    </div>
</div>

<main class="main_content">
    <?php echo $v->section('content'); ?>
</main>

<!-- <script src="<?php echo asset('/js/jquery.js'); ?>"></script>
<script src="<?php echo asset('/js/jquery-ui.js'); ?>"></script> -->
<script src="<?php echo asset('/scripts.min.js'); ?>"></script>
<?php echo $v->section('scripts'); ?>

</body>
</html>
