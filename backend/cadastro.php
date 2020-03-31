<?php

require("conecta.php");

//aguardar o POST do usuário

if(isset($_POST['cidade'])){

    $cidade = $_POST["cidade"];
    $estado = $_POST["estado"];
    $valor = $_POST["valor"];
    $garagem = $_POST["garagem"];
    $banheiro = $_POST["banheiro"];
    $quarto = $_POST["quarto"];
    
    //-------- TRATANDO IMAGENS E SALVANDO ---------

    $criptonome = $cidade . $dataatual;
    $novapasta = md5($criptonome);
    mkdir ("../img/imoveis/$novapasta", 0777, true);

    $numero = 1;

    foreach ($_FILES["fotodir"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            
            $tmp_name = $_FILES["fotodir"]["tmp_name"][$key];
            $fotoImovel = basename($_FILES["fotodir"]["name"][$key]);

            $ext = ltrim( substr( $fotoImovel, strrpos( $fotoImovel, '.' ) ), '.' );
            $extensao = ('.') . $ext;
            $novonome = $numero . $extensao;

            move_uploaded_file($tmp_name, "../img/imoveis/$novapasta/$novonome");

            $numero++;
        }
    }

    //----- INSERIR DADOS NO BANCO -----------

    $inserir = "INSERT INTO imoveis";
    $inserir .= "(cidade, estado, valor, garagem, banheiro, quarto, fotodir)";
    $inserir .= "VALUES";
    $inserir .= "('$cidade', '$estado', '$valor', '$garagem', '$banheiro', '$quarto', '$novapasta')";
    $retorno = array();
    $salvounobanco = mysqli_query($conn, $inserir);

    if($salvounobanco) {
        header("Location:../index.php");
    } else { 
        header("Location:../index.php");
    }

    echo json_encode($retorno);
}