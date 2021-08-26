<?php
            

            $hostname = "localhost";
            $username = "root";
            $password = "";
            $databaseName = "teste";
            $connect = mysqli_connect($hostname, $username, $password, $databaseName);
        
        $nome =  $_POST['nome'];
        $provincia = $_POST['provincia'];
        $codicous =  $_POST['codicous'];
        $avenida = $_POST['avenida'];
        $bairro = $_POST['bairro'];
        $rua=$_POST['rua'];
        $telefone=$_POST['telefone'];
        $telefone1=$_POST['telefone1'];
        $email=$_POST['email'];
        $website=$_POST['website'];

      

        $query = "INSERT INTO unidade_sanitaria (nome_us, provincia, codico_unidade_sanitaria, avenida, bairro, Rua, telefone, telefone1, email, website) VALUES ('$nome', '$provincia', '$codicous', '$avenida', '$bairro', '$rua', '$telefone', '$telefone1','$email','$website')";

        if ($connect->query($query) === TRUE) {
                echo "
                    <script type= 'text/javascript'>
                        alert('New record created successfully');
                    </script>";
                    header("formAdmin.html");

                } 
                else 
                {
                    echo 
                    "<script type= 'text/javascript'>
                        alert('Error: " . $query . "<br>" . $connect->error."');
                    </script>";
                }

                $connect->close();
                
                  
?>

