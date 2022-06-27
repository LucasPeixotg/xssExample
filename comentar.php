<?php

$con = mysqli_connect("localhost", "root", "", "xssExample");

if ($_POST) {
    $conteudo = mysqli_real_escape_string($con, $_POST['conteudo']);
    //$conteudo = htmlspecialchars($conteudo);

    $sql = "INSERT INTO comentario(conteudo) VALUES('$conteudo')";

    if (mysqli_query($con, $sql)) {
        header('Location: index.php');
        $msg = "";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container d-flex flex-column align-items-center py-5">
        <h1>Comentar</h1>
        <form action="comentar.php" method="POST" class="col-md-6 py-5">
            <input class="form-control" type="text" placeholder="Comentário" name="conteudo" required /><br />
            <button class="btn btn-primary w-100" type="submit">Comentar</button>
        </form>
    </div>
</body>

</html>