<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200&display=swap" rel="stylesheet">
    <title>Cotton Buds Products</title>
</head>

<body>
    <header id="top">
      <h1>The Cotton Bud Company</h1>
  		<p>You are looking for a place to create your own cotton buds ? Here is the
  			 place you are looking for !</p>

  		<img id="logo" src="logo.png" width="150px" height="150px">
        <nav>
			<ul class="flex-zone">
				<li><a href="home.html">Home</a></li>
				<li><a href="product.php">Customize</a></li>
				<li><a href="cart.html">Cart</a></li>
				<li><a id="current" href="login.php">Login</a></li>
			</ul>
		</nav>
    </header>

<article>
<form action="product.php" method="GET">
    <fieldset id="first">
        <legend>Connection</legend>

        <div id="firstele">
            <label for="nom">Name<em>*</em></label>
            <label for="mail">Email<em>*</em></label>
            <label for="adresse">Address<em>*</em></label>
        </div>

        <div id="secondele">
            <input id="nom" type="text" placeholder="Patrice Martin" name="nom">
            <input id="mail" type="email" placeholder="jean.castex@gmail.com" name="email">
            <input id="adresse" type="text" placeholder="42 rue des Apôtres 06000 NICE" name="adresse">
        </div>
        <div class="submit">
          	<button id="submit" type="submit" name="action" value="submit" > <a href="home.html">Submit </a></button>
        </div>
    </fieldset>
</article>

<br>  <br> <br>  <br> <br> <br>
  <div class="separation"><hr></div>

  <footer >
      <div>Headquarter : 240 rue des Bullozers, Tourcoing(59200) -- FRANCE</div>
      <div>Contact us : <a>contactus@we-have-no-mail.com</a> </div>
    </footer>

    </body>
    </html>
