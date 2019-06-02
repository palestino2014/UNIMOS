<?php
     $nome    = $_POST['nome'];
     $email   = $_POST['email'];
     $titulo  = $_POST['titulo'];
     $mensagem= $_POST['mensagem'];
     
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
     
    $sql  = "insert into contato (nome,email,titulo,mensagem,data) values ('$nome','$email','$titulo','$mensagem','$data')"; 
    if (mysqli_query($conn, $sql)) {
          echo "<script language='javascript' type='text/javascript'>alert('Registro cadastrado com sucesso!');window.location.href='contact.html'</script>";
    } else {
          echo "<script language='javascript' type='text/javascript'>alert('Registro não cadastrado com sucesso!');window.location.href='contact.html'</script>";
    }
    mysqli_close($conn);
?>
