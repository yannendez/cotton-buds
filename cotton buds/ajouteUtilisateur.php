<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
    <title>sign in</title>
</head>
<body>
    <header>
    <h1>The Cotton Bud Company</h1>
		<p>You are looking for a place to create your own cotton buds ? Here is the
			 place you are looking for !</p>

		<img id="logo" src="image/logo.png" width="150px" height="150px">

		<nav>
			<ul>
				<li><a href="home.html">Home</a></li>
				<li><a href="product.php">Customize</a></li>
				<li><a  href="cart.html">Cart</a></li>
				<li><a id="current" href="login.php">Login</a></li>
			</ul>
		</nav>
    </header>
    <?php
    //connection à la base de donnée
    try{$database = new PDO('sqlite:data/cottonDB');}
    catch(PDOExecption $e)
    {
        die("Erreur : ".$e-getMessage());
    }


    //récupération des valeurs
    $nom = $_GET['nom'];
    $email = $_GET['email'];
    $adresse = $_GET['adresse'];

    // test si le mail existe deja dans la base de donnée
    $test = count($database->query("SELECT * from users where mail='$email'")->fetchAll());
    
    
    if($test != 0){
        echo "<p>L'utilisteur semble être déjà inscrit </p>";
    }
    else{
        $req = $database->prepare("INSERT INTO users(mail,nom,adresse) VALUES(:email,:nom,:adresse)");
        $res = $req->execute(['email'=>$email,'nom'=>$nom,'adresse'=>$adresse]); 
        if($res){
            echo "<p>L'utilisateur $nom ($email) habitant à l'adresse $adresse a bien été ajouté à la base de donnée</p>";
        } 
    }
    ?>
</body>
</html>
