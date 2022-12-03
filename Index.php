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
        # code...
    } elseif (isset($_POST['btnGerenciar'])) {
        # code...
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