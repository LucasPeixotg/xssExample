
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <title>VoceTube</title>
    </head>

    <body>
        <section class="container d-flex flex-column align-items-center mb-5">    
            <img src="imagem.jpeg" alt="manualDoMundo" class="img-fluid">
            <section class="col-md-6 mb-5">
                <div class="d-flex flex-row justify-content-between mt-5">
                    <h2>Comentários</h2>
                    <a class="btn btn-primary" href="comentar.php">Comentar</a>
                </div>
                
                <ul class="list-group mt-3 mb-5">


                    <?php 
                        $con = mysqli_connect("localhost", "root", "", "xssExample");
                        $result = $con->query("SELECT * FROM comentario");
                        
                        while($linha = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                            ?>
                                <li class="list-group-item d-flex justify-content-between">
                                    <?=$linha["conteudo"]; ?>
                                    <a href="comentario.php?id=<?=$linha["id"]; ?>">Respostas</a>
                                </li>
                            <?php
                        
                        }
                    
                    ?>
                </ul>
            </section>
        </section>
    </body>
</html>