<?php
    include_once('config.php');

    $sql = "SELECT * FROM formulario ORDER BY id DESC";

    $result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Relatorio</title>
</head>
<body>
    <!-- <h1>HELLO WORL</h1> -->

    <div class="m-5">
    <table border="1" align="center">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <td>
      <th scope="col">Contato</th>
      <td>
      <th scope="col">Email</th>
      <td>
      <th scope="col">Pais</th>
      <td>
      <th scope="col">Cidade</th>
      <td>
      <th scope="col">Café_A</th>
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
      <th scope="col">Data_Visita</th>
    </tr>
  </thead>
  <tbody>
        <?php

            while($user_data = mysqli_fetch_assoc($result))
            {
                echo"<tr>";
                echo"<td>".$user_data["nome"]."<td>";
                echo"<td>".$user_data["contato"]."<td>";
                echo"<td>".$user_data["email"]."<td>";
                echo"<td>".$user_data["pais"]."<td>";
                echo"<td>".$user_data["cidade"]."<td>";
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