<!DOCTYPE html>
<html>
<head>
	<title>alterar</title>
	<style>

              body{
                margin-top: 150px;
              }
              #caixa{
                position: relative;
                width: 300px;
                height: 300px;
                left: 50%;
                margin-left: -150px;
                padding-top: 35PX;
                background: white;
                color: white;
                background-color: rgba(0,0,0,0.6);
                font-family:border-color: black;
                border-radius: 10px;
                border: 3px green solid;
              }  

              #list{
                text-decoration: none;
              }

              table tr{
                height: 40px;
                color: white;
              }

              a{
                color: black;
              }
            </style>
</head>
	<body background="11.png" height="500px" width="700px">
	<div align="center" id="caixa">
        <table>
        <form  align="center" action="index.php" method="POST">
              <h2 align="center">ATUALIZAR</h2>
              <tr>
                 <td colspan="2">
                    <input type="text" name="numero" placeholder="Novo Numero" required>
                 </td>  
              </tr>
               <tr>
                  <td colspan="2">
              <input id="nome" type="text" name="nome" placeholder="Novo Nome" required>
                  </td>
              </tr>
              <tr>
                  <td align="center">         
                    Novo Sexo:
                  </td>
                  <td align="left">
                    <input type="radio" value="M" name="sexo" required>M
                    <input type="radio" value="F" name="sexo">F
                  </td>
              <tr align="center">
                <td colspan="2"><input type="submit" name="editar" value="Editar" onclick="msg()"></td>
              </tr>
              </table>
      </div>
      <?php
      if (isset($_POST['editar'])){
        $numero = $_POST['numero'];
        $nome = $_POST['nome'];
        $sexo = $_POST['sexo'];

        mysql_query($con,"UPDATE aluno SET numero='$numero', nome='$nome', sexo='$sexo' WHERE nome=$nome");
        header('location: listar.php');
      }
      ?>
        </form>
</body>
</html>