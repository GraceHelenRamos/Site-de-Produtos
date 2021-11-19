<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql="Select * from `produtos` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$nome=$row['nome'];
$descricao=$row['descricao'];
$preco=$row['preco'];


if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $preco = $_POST['preco'];

    $sql = "update `produtos` set id=$id,nome='$nome',descricao='$descricao',preco='$preco'where id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        // echo "Atualizado com sucesso";
        header('location:produto.php');
    } else {
        die(mysqli_error($con));
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>CRUD</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label class="text-light">Nome</label>
                <input type="text" class="form-control" placeholder="Digite o nome do produto" name="nome" autocomplete="off" value=<?php echo $nome;?>>
            </div>
            <div class="form-group">
                <label class="text-light">Descrição</label>
                <input type="text" class="form-control" placeholder="Digite a Descrição" name="descricao" autocomplete="off" value=<?php echo $descricao;?>>
            </div>
            <div class="form-group">
                <label class="text-light">Preço</label>
                <input type="text" class="form-control" placeholder="Digite valores com ." name="preco" autocomplete="off" value=<?php echo number_format($preco,2,",",".");?>>
            </div>

            <button type="submit" class="btn btn-primary my-2" name="submit">ATUALIZAR</button>
        </form>
    </div>
</body>

</html>