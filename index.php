<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paginação</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="stylee.css">
</head>
<body>
    <div class="container">
        <div class="image">
        
        </div>
        <nav aria-label="...">
            <ul class="pagination pagination-sm">
                <li class="page-item mr-3"><a class="badge badge-primary" href="http://localhost/BACKEND/Backend-atividade-4/?limite=24&offset=0&turma=2ds3">1</a></li>
                <li class="page-item mr-3"><a class="badge badge-primary" href="http://localhost/BACKEND/Backend-atividade-4/?limite=24&offset=24&turma=2ds3">2</a></li>
                <li class="page-item mr-3"><a class="badge badge-primary" href="http://localhost/BACKEND/Backend-atividade-4/?limite=24&offset=48&turma=2ds3">3</a></li>
                <li class="page-item mr-3"><a class="badge badge-primary" href="http://localhost/BACKEND/Backend-atividade-4/?limite=24&offset=72&turma=2ds3">4</a></li>
                <li class="page-item mr-3"><a class="badge badge-primary" href="http://localhost/BACKEND/Backend-atividade-4/?limite=24&offset=216&turma=2ds3">10</a></li>
            </ul>
        </nav>
        <?php
if (isset($_GET["limite"],$_GET["offset"],$_GET["turma"] )){
    $limite = $_GET["limite"]; 
    $quantidadedeexibicao = $_GET["offset"];
    $turma = $_GET["turma"];
        if($_GET["offset"] == 216){
            echo '<img src="tenor.gif" width="10%">';
            echo '<audio controls autoplay>
                    <source src="kk.mp3" type="audio/mp3" autoplay="true">
                </audio>';
        }
}
else {
    echo "<h1>Clica</h1>";
    exit;
}

$y=0;

?>
    <div class="row">
        <?php for ($i=$quantidadedeexibicao; $i < ($quantidadedeexibicao + $limite) ; $i++) { ?>
           <?php $y++;?>
        <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card">
                <div class="card-body"> 
                    <h5 class="card-title"><?php echo $i ; ?> </h5>
                    
                </div>
            </div>
        </div>
<?php
}     
exit;
?>
    </div>
</body>
</html>