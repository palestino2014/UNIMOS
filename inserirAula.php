<?php
     $emailu          = $_POST['emailu'];
     $senhau          = MD5($_POST['senhau']);
     $nomeu           = $_POST['nomeu'];
     $cpfu            = $_POST['cpfu'];    
     $rgu             = $_POST['rgu'];
     $datanascimentou = $_POST['datanascimentou'];
     $generou         = $_POST['generou'];
	  $telefoneu       = $_POST['telefoneu'];
	  $prefContatou    = $_POST['prefContatou'];		    
     $data    = date("Y-m-d"); 
     
     echo $emailu;echo"<br>";
     echo $senhau;echo"<br>";
     echo $nomeu;echo"<br>";     
     echo $cpfu;echo"<br>";     
     echo $rgu;echo"<br>"; 
     echo $datanascimentou;echo"<br>";    
     echo $generou;echo"<br>";
     echo $telefoneu;echo"<br>"; 
     echo $prefContatou;echo"<br>";    
     echo $data;echo"<br>";
       
     
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
     
    $sql  = "insert into usuario (emailu,senhau,nomeu,cpfu,rgu,datanascimentou,generou,telefoneu,prefContatou,data) 
    values 
    ('$emailu','$senhau','$nomeu','$cpfu','$rgu','$datanascimentou','$generou','$telefoneu','$prefContatou','$data')"; 
    if (mysqli_query($conn, $sql)) {
          echo "<script language='javascript' type='text/javascript'>alert('Registro cadastrado com sucesso!');window.location.href='register.html'</script>";
    } else {
         echo "<script language='javascript' type='text/javascript'>alert('Registro não cadastrado com sucesso!');window.location.href='register.html'</script>";
    }
    mysqli_close($conn);
?>
