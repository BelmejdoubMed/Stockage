<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- return to Home page -->
    <a href="../../../Home/Home.php">Home</a>
    <!-- Add new product -->
    <h1>Nouveau Produit</h1>
    <form action="NewProduit.php" method="post">
        <input type="text" name="nom" placeholder="Nom">
        <input type="number" step="0.001" name="prix" placeholder="Prix">
        <input type="number" name="quantite" placeholder="Quantite">
        <input type="submit" value="Ajouter">
    </form>


    <?php
    ///cheeck if isset 
        if(isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['quantite'])){
           $db = new PDO('mysql:host=localhost;dbname=######;charset=utf8', 'root', '');
        $req = $db->prepare('INSERT INTO produit (nom, prix, quantite) VALUES (:nom, :prix, :quantite)');
        $req->execute(array(
            'nom' => $_POST['nom'],
            'prix' => $_POST['prix'],
            'quantite' => $_POST['quantite']
        ));
        }
        else{
            echo 'Rempli tout les cases';
        }
        
    ?>

</body>
</html>