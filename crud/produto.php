<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Produto</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <div id="menu">
        <ul>
            <img class="logo" src="img/youLogo.png">

            <li><a href="projetoLiga1.html">HOME</a></li>
            <li><a href="quemsomos.html">QUEM SOMOS</a></li>
            <li><a href="servico.html">SERVIÇOS</a></li>
            <li><a href="contato.html">CONTATO</a></li>
            <li><a href="produto.php">PRODUTOS</a></li>
        </ul>
    </div>
    <hr>
    <table class="table">
            <thead>
                <tr>
                    <th scope="col" class="text-light">ID</th>
                    <th scope="col" class="text-light">Produto</th>
                    <th scope="col"class="text-light">Descrição</th>
                    <th scope="col" class="text-light">Preço</th>
                    <th scope="col" class="text-light">Operação</th>
                </tr>
            </thead>
            <tbody>

            <?php 
                $sql = "Select * from `produtos`";
                $result=mysqli_query($con, $sql);
                if($result){
                    while($row=mysqli_fetch_assoc($result)){
                        $id         = $row['id'];
                        $nome       = $row['nome'];
                        $descricao  = $row['descricao'];
                        $preco      = $row['preco'];
                        echo 
                        '<tr>
                            <th scope="row" class="text-light">'.$id.'</th>
                            <td class="text-light">'.$nome.'</td>
                            <td class="text-light">'.$descricao.'</td>
                            <td class="text-light">R$ '.number_format($preco,2,",",".").'</td>
                            <td>
                            <button class="btn btn-dark"><a href="update.php?updateid='.$id.'" class="text-light text-decoration-none">ATUALIZAR</a></button>
                            <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light text-decoration-none">DELETAR</a></button>
                            </td>
                        </tr>';
                    }
                }
            ?>
            </tbody>
        </table>
</body>

</html>