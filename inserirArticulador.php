<?php
     $emailar       = $_POST['emailar'];
     $senhaar       = MD5($_POST['senhaar']);
     $nomear        = $_POST['nomear'];
     $razaoar       = $_POST['razaoar'];
     $nomefar       = $_POST['nomefar'];
     $enderecoar    = $_POST['enderecoar'];
     $numeroar      = $_POST['numeroar'];
     $bcar          = $_POST['bcar'];
     $estadoar      = $_POST['estadoar'];
     $cepar         = $_POST['cepar'];
     $complementoar = $_POST['complementoar'];
     $tipoar        = $_POST['tipoar'];
     $cpfar         = $_POST['cpfar'];
     $rgar          = $_POST['rgar'];
     $datanaar      = $_POST['datanaar'];
     $generoar      = $_POST['generoar'];
     $telefonear    = $_POST['telefonear'];
     $cnpjar        = $_POST['cnpjar'];
     $textoar       = $_POST['textoar'];  
     $data    = date("Y-m-d");
    //parametros para o banco de dados!
    $servername = "localhost";
    $database = "unimos";
    $username = "root";
    $password = "";    
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
          die("Connection failed: " . mysqli_connect_error());
    }
     
    echo "Connected successfully";
     
    $sql  = "insert into articulador (emailar,senhaar,nomear,razaoar,nomefar,enderecoar,numeroar,bcar,estadoar,cepar,complementoar,tipoar,cpfar,rgar,datanaar,generoar,telefonear,cnpjar,textoar,data) 
    values ('$emailar','$senhaar','$nomear','$razaoar','$nomefar','$enderecoar','$numeroar','$bcar','$estadoar','$cepar','$complementoar','$tipoar','$cpfar','$rgar','$datanaar','$generoar','$telefonear','$cnpjar','$textoar','$data')"; 
    if (mysqli_query($conn, $sql)) {
          echo "<script language='javascript' type='text/javascript'>alert('Registro cadastrado com sucesso!');window.location.href='register.html'</script>";
    } else {
          echo "<script language='javascript' type='text/javascript'>alert('Registro não cadastrado com sucesso!');window.location.href='register.html'</script>";
    }
    mysqli_close($conn);
?>
