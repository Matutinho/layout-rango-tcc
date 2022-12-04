<?php 

    require_once "cabecalho.php";

    if (isset($_POST['btnLogar'])) {

        require_once 'view/telaInicialAdm.php';

    } elseif (isset($_POST['btnRegistrar'])) {

        require_once 'view/telaInicialCliente.php';

    } elseif (isset($_POST['btnRango'])) {
        
    } elseif (isset($_POST['btnComo'])) {
        # code...
    } elseif (isset($_POST['btnContato'])) {
        # code...
    } elseif (isset($_POST['btnCliente'])) {

        require_once 'view/telaSistemaCliente.php';

    } elseif (isset($_POST['btnGerenciar'])) {

        require_once 'view/telaWorkspace.php';

    } elseif (isset($_POST['btnCardapio'])) {
        
        require_once 'view/telaSistemaCliente.php';
        require_once 'view/telaCardapio.php';

    } elseif (isset($_POST['btnSuporte'])) {
        # code...
    } elseif (isset($_POST['btnPerfil'])) {
        # code...
    } elseif (isset($_POST['btnSair'])) {

        require_once 'view/telaInicialGhest.php';

    } else {

        require_once 'view/telaInicialGhest.php';

    }

    require_once "rodape.php";

?>