<?php
    include_once('config.php');

    $sql = "SELECT * FROM formulario ORDER BY id ASC";

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <title>Relatorio</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>

    <div class="divtitulo">
    <h1 class="titulo">RELATÓRIO DE AVALIAÇÕES DO TEATRO</h1>
    </div>

    <div class="rela">
    <table class=".table-responsive{-sm|-md|-lg|-xl|-xxl}">
  <thead>
    <tr>
      <th scope="col" style="padding-left: 0.5rem ; padding-right: 0.5rem;">Nome</th>
      <td>
      <th scope="col" style="padding-left:1rem ; padding-right:1rem ;">Contato</th>
      <td>
      <!-- <th scope="col">Email</th>
      <td> -->
      <th scope="col" style="padding-left: 0.5rem ; padding-right: 0.5rem ;">Pais</th>
      <td>
      <!-- <th scope="col" style="padding-left: 0.5rem ; padding-right: 0.5rem ;">Cidade</th>
      <td> -->
      <th scope="col" style="padding-left: 0.5rem ; padding-right: 0.5rem ;">Café_A</th>
      <td>
      <th scope="col">Loja_A</th>
      <td>
      <th scope="col">Bilheteria_A</th>
      <td>
      <th scope="col">Condutores_Cord</th>
      <td>
      <th scope="col">Instalações_Conf</th>
      <td>
      <th scope="col">Criticas/Elogios</th>
      <td>
      <th scope="col" style=" padding-right: 0.5rem ;">Data_Visita</th>
      <td>
    </tr>
  </thead>
  <tbody>
        <?php

            while($user_data = mysqli_fetch_assoc($result))
            {
                echo"<tr>";
                echo"<td>".$user_data["nome"]."<td>";
                echo"<td>".$user_data["contato"]."<td>";
                // echo"<td>".$user_data["email"]."<td>";
                echo"<td>".$user_data["pais"]."<td>";
                // echo"<td>".$user_data["cidade"]."<td>";
                echo"<td>".$user_data["cafe_atendimento"]."<td>";
                echo"<td>".$user_data["loja_atendimento"]."<td>";
                echo"<td>".$user_data["bilheteria_atendimento"]."<td>";
                echo"<td>".$user_data["condutores_cordialidade"]."<td>";
                echo"<td>".$user_data["instalacoes_conforto"]."<td>";
                echo"<td>".$user_data["criticas_elogios"]."<td>";
                echo"<td>".$user_data["created_at"]."<td>";
                echo"</tr>";
            }


        ?>
  </tbody>
</table>
    </div>
</body>
</html>