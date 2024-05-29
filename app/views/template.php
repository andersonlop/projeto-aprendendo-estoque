<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>Controle de Estoque</title>
    <link href="<?php echo URL_BASE ?>assets/img/favicon.svg" type="image/x-icon" rel="icon" />
    <link href="<?php echo URL_BASE ?>assets/img/favicon.svg" type="image/x-icon" rel="shortcut icon" />
    <link href="<?php echo URL_BASE ?>assets/img/favicon.svg" rel="apple-touch-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/componentes/css/style_Componente.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="<?php echo URL_BASE ?>assets/js/datatables/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/css/grade.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/css/auxiliar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo URL_BASE ?>assets/css/m-style.css">
</head>

<body class="backoffice">
    <?php include "cabecalho.php" ?>
    <?php include "menu.php" ?>
    <div class="base-meio">
        <div class="rows">
            <?php $this->load($view, $viewData); ?>
        </div>
    </div>
    <?php include "rodape.php" ?>

    <script src="<?php echo URL_BASE ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/componentes/js/js_util.js"></script>
    <script src="<?php echo URL_BASE ?>ssets/omponentes/js/js_modal.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/kit-awesome.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/datatables/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/js/datatables/js/jquery.dataTables.min.js"></script>

    <!-- Graphs -->
    <script src="<?php echo URL_BASE ?>assets/js/chart.js/Chart.min.js"></script>
    <script src="<?php echo URL_BASE ?>assets/componentes/js/js_grafico.js"></script>


</body>

</html>