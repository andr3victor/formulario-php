<?php
    if(isset($_POST['submit']))
    {
        //print_r($_POST['nome']);
        //print_r($_POST['email']);
        //print_r($_POST['telefone']);
        //print_r($_POST['genero']);
        //print_r($_POST['data_nascimento']);
        //print_r($_POST['estado']);
        //print_r($_POST['cidade']);
        //print_r($_POST['endereco']);
        
        include_once('rede.php');
        
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['genero'];
        $data_nascimento = $_POST['data_nascimento'];
        $estado = $_POST['estado'];
        $cidade = $_POST['cidade'];
        $endereco = $_POST['endereco'];

        $result= mysqli_query($conexao, "INSERT INTO usuario (nome,email,telefone,sexo,data_nascimento,estado,cidade,endereco) VALUES('$nome','$email','$telefone','$sexo','$data_nascimento','$estado','$cidade','$endereco')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style> 
        body{ 
             font-family: Arial, Helvetica, sans-serif;
             background-image: linear-gradient(to right,#37bee7,#06352E); 
            }
        .box{
            position: absolute;
            top:50%; 
            left:50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.5);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
            color: white;
        }    
        fieldset{
            border:3px solid #45A797;
            border-radius: 13px;
            
        }
        legend{
            border: 3px solid #45A797;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
        }
        .inputbox{
            position: relative;

        }
        .inputUser{
             background: none;
             border: none;
             border-bottom:1px solid white;
             outline: none;
             color: white;
             font-size: 15px;
             width: 100%;
             letter-spacing: 2px;
        }
        .labelinput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;

        }
        .inputUser:focus ~ .labelinput,
        .inputUser:valid ~ .labelinput{
            top: -20px;
            font-size: 12px;
            color: #45A797;
        }
        #data_nascimento{
            border: none;
            padding: 8px;
            border-radius: 7px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            background-image: linear-gradient(to right,#45A797,#14588f); 
            width: 100%;
            border: none;
            border-radius: 7px;
            padding: 15px;
            font-size: 15px;
            color: white;
            font-family: Arial, Helvetica, sans-serif;
            cursor: pointer;
        }
        #submit:hover{
            background-image: linear-gradient(to right,#18685a,#052641); 
        }
    </style>
</head>
<body>
   <div class="box">
    <form action="formulario.php" method="POST">
        <fieldset>
            <legend><b>Formulário de Clientes</b></legend>
            <br>

            <div class="inputbox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelinput">Nome Completo</label>
            </div>
            <br><br> 
            <div class="inputbox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelinput">Email</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelinput">Telefone</label>
            </div>
            <p>Sexo:</p>
            <input type="radio" id="masculino" name="genero" value="masculino" required>
            <label for="masculino">Masculino</label>
            <br>
            <input type="radio" id="feminino" name="genero" value="feminino" required>
            <label for="feminino">Feminino</label>
            <br>
            <input type="radio" id="outro" name="genero" value="outro" required>
            <label for="outro">Outro</label>
            <br><br>
            <label for="data_nascimento"><b>Data de Nascimento:</b></label> 
            <input type="date" name="data_nascimento" id="data_nascimento" required>  
            <br><br><br>
            <div class="inputbox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelinput">Estado</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelinput">Cidade</label>
            </div>
            <br><br>
            <div class="inputbox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelinput">Endereço</label>
            </div> 
            <br><br>
            <input type="submit" name="submit" id="submit">    
            </fieldset>
    </form>
   </div> 
</body>
</html>