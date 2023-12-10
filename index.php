<?php include 'header.php'; ?>

<?php

require_once 'app/config/Database.php';

$database = new \App\Database('phpo2switch');
$pdo = $database->getPDO();

// Exécution de la requête SELECT
$query = "SELECT titre, image, texte FROM articles";
$statement = $pdo->query($query);
$articles = $statement->fetchAll(PDO::FETCH_ASSOC);



?>

<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <h1 class="custom-heading">Home</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h2 class="custom-subheading">Article</h2>
            <img class="card-img-top p-2 m-2" style="max-width: 60%; height: auto;" src="" alt="">
        </div>
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-success">
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr class="table-warning">
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr class="table-info">
                    <th scope="row">3</th>
                    <span class="fas fa-user "></span>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
        <?php
        foreach ($articles as $article) {
            echo "Titre : " . $article['titre'] . "<br>";
            echo "Image : <img src='" . $article['image'] . "' alt='Image'><br>";
            echo "Texte : " . $article['texte'] . "<br>";
            echo "<br>";
        } ?>
        <p>j'aime les cailloux</p>
    </div>
</div>



<?php include 'footer.php'; ?>