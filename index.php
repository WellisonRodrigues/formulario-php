<?php
/**
 * Created by PhpStorm.
 * User: wrodrigues
 * Date: 16/05/2018
 * Time: 14:45
 */
require 'UI_Comp_Formulario.php';

?>


<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>Formulário de teste</title>
    <link rel="stylesheet" type="text/css" href="vendor/style.css">
</head>
<body>
<header>
    <div class="navbar">
        <h1>Formulário de Teste</h1>
    </div>
</header>
<hr class="custom"/>

<div id="conteudo">
    <div id="status"></div>
    <?php
    $formulario = new UI_Comp_Formulario();
    echo $formulario->renderer();
    ?>
</div>
<span id="txtHint"></span>

<div class="util">
    <h3>Teste de Formulário</h3>
</div>
</body>
<script>
    <?php
   $validatescript = true;
    $script = new UI_Comp_Formulario();
    echo $script->uiCompFormulario($validatescript);
    ?>
</script>
</html>
