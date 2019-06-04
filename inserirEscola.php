<?php
     $emailus       = $_POST['emailus'];
     $senhaus       = MD5($_POST['senhaus']);
     $nomefus       = $_POST['nomefus'];
     $nomejus       = $_POST['nomejus'];
     $nomecus       = $_POST['nomecus'];
     $telefoneus    = $_POST['telefoneus'];
     $cnpjus        = $_POST['cnpjus'];
     $enderecoEscola= $_POST['enderecoEscola'];
     $numerous      = $_POST['numerous'];
     $bairrous      = $_POST['bairrous'];
     $estadous      = $_POST['estadous'];
     $cepus         = $_POST['cepus'];
     $complementous = $_POST['complementous'];
     $tipous        = $_POST['tipous'];
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
     
    $sql  = "insert into unidade (emailus,senhaus,nomefus,nomejus,nomecus,telefoneus,cnpjus,enderecoEscola,numerous,bairrous,estadous,cepus,complementous,tipous,data) 
    values ('$emailus','$senhaus','$nomefus','$nomejus','$nomecus','$telefoneus','$cnpjus','$enderecoEscola','$numerous','$bairrous','$estadous','$cepus','$complementous','$tipous','$data')"; 
    if (mysqli_query($conn, $sql)) {
          echo "<script language='javascript' type='text/javascript'>alert('Registro cadastrado com sucesso!');window.location.href='register.html'</script>";
    } else {
          echo "<script language='javascript' type='text/javascript'>alert('Registro não cadastrado com sucesso!');window.location.href='register.html'</script>";
    } 
    mysqli_close($conn);
?>
