<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Caisse</h1>

    <a href="Produit/NewProduit/NewProduit.php">Nouveau Produit</a>
    /// fetch elements from database 
    <?php
        $db = new PDO('mysql:host=localhost;dbname=######;charset=utf8', 'root', '');
        $req = $db->query('SELECT * FROM caisse');
        $data = $req->fetchAll();
    ?>
    /// display elements in a table
    <table>
        <tr>
            <th>id</th>
            <th>nom</th>
            <th>prenom</th>
            <th>date</th>
            <th>montant</th>
            <th>type</th>
        </tr>
        <?php foreach($data as $row): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nom']; ?></td>
                <td><?php echo $row['prenom']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['montant']; ?></td>
                <td><?php echo $row['type']; ?></td>
            </tr>
        <?php endforeach; ?>    
    </table>

</body>
</html>