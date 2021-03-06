<?php

$frame1 = "#e7aa6c";
$frame2 = "#d09865";
$bud1 = "#eeefee";
$bud2 = "#e1e6e9";


if (isset($_GET['favcolor'])) {
    $bud1 = $_GET['favcolor'];
    $bud2 = $_GET['favcolor'];
}

if (isset($_GET['frame-color'])) {

    $colorframe = $_GET['frame-color'];

    switch ($colorframe) {
        case 'black':
            $frame1 = "#000000";
            $frame2 = "#000000";
            break;

        case 'white':
            $frame1 = "#FFFFFF";
            $frame2 = "#FFFFFF";
            break;

        case 'blue':
            $frame1 = "#0000FF";
            $frame2 = "#0000FF";
            break;

        case 'red':
            $frame1 = "#FF0000";
            $frame2 = "#FF0000";
            break;

        case 'yellow':
            $frame1 = "#FFFF00";
            $frame2 = "#FFFF00";
            break;

        case 'green':
            $frame1 = "#00FF00";
            $frame2 = "#00FF00";
            break;

        case 'orange':
            $frame1 = "#FFA500";
            $frame2 = "#FFA500";
            break;

        case 'purple':
            $frame1 = "#800080";
            $frame2 = "#800080";
            break;

        case 'pink':
            $frame1 = "#FFC0CB";
            $frame2 = "#FFC0CB";
            break;

        case 'grey':
            $frame1 = "#808080";
            $frame2 = "#808080";
            break;

        case 'brown':
            $frame1 = "#A52A2A";
            $frame2 = "#A52A2A";
            break;


    }
}

?>


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

  		<img id="logo" src="image/logo.png" width="150px" height="150px">
        <nav>
			<ul class="flex-zone">
				<li><a href="home.html">Home</a></li>
				<li><a id="current" href="product.php">Customize</a></li>
				<li><a href="cart.html">Cart</a></li>
				<li><a href="login.php">Login</a></li>
			</ul>
		</nav>
    </header>


        <h2>Let's go, customize your cotton buds</h2>
        <section>
        <form>
            <fieldset id="second">
                <legend>Choose your Cotton Buds</legend>

            <div>
                <label for="bud">Buds & Text Color</label>
                <input id="bud" type="color" name="favcolor" required><br><br>

                <label>Frame Matter</label><br><br>

                <label for="wood">Wood</label>
                <input id="wood" type="radio" name="matter" value="wood"><br>

                <label for="cardboard">Recycled Cardboard</label>
                <input id="cardboard" type="radio" name="matter" value="cardboard"><br>

                <label for="plastic">Recycled Plastic</label>
                <input id="plastic" type="radio" name="matter" value="plastic"><br><br>

                <label for="framecolor">Frame Color</label>
                <select name="frame-color" id="framecolor">
                    <option value="black">Black</option>
                    <option value="white">White</option>
                    <option value="blue">Blue</option>
                    <option value="red">Red</option>
                    <option value="yellow">Yellow</option>
                    <option value="green">Green</option>
                    <option value="orange">Orange</option>
                    <option value="purple">Purple</option>
                    <option value="pink">Pink</option>
                    <option value="grey">Grey</option>
                    <option value="brown">Brown</option>
                </select><br><br>

                <label for="text">Text</label>
                <input id="text" type="text" placeholder="I &#8249;3 Cotton Bud" name="texte" maxlength="15"><br><br>

                </select>
            </div>
            <div>
                <svg id="color_line" height="250" viewBox="0 0 74 74" width="250" xmlns="http://www.w3.org/2000/svg" data-name="color line">
                <path d="m21.931 16.508h4.395v28.636h-4.395z" fill="<?=$frame2?>" transform="matrix(.928 -.372 .372 .928 -9.746 11.206)"/>
                <path d="m10.261 11.624c1.636 2.81 3.983 5.507 6.5 6.733l4.079-1.637c.968-2.623.8-6.194.038-9.355a5.753 5.753 0 0 0 -7.745-3.946 5.753 5.753 0 0 0 -2.872 8.205z" fill="<?=$bud1?>"/> <!--bud1 -->
                <path d="m38 50.027c-1.636-2.81-3.983-5.507-6.5-6.733l-4.079 1.637c-.968 2.623-.8 6.194-.038 9.355a5.753 5.753 0 0 0 7.745 3.946 5.753 5.753 0 0 0 2.872-8.205z" fill="<?=$bud1?>"/> <!--bud1 -->
                <path d="m31.5 43.29-2.005.78-10.67-26.56 2.015-.79z" fill="<?=$frame1?>"/> <!--frame1 -->
                <path d="m20.84 16.72-2.63 1.06v-.01c.97-2.62.8-6.19.04-9.35a5.723 5.723 0 0 0 -6.37-4.3 5.437 5.437 0 0 1 1.25-.7 5.751 5.751 0 0 1 7.74 3.94c.76 3.17.93 6.74-.03 9.36z" fill="<?=$bud2?>"/> <!--bud2 -->
                <path d="m38.77 52.86a5.789 5.789 0 0 1 -3.64 5.37 5.144 5.144 0 0 1 -1.36.35 5.775 5.775 0 0 0 2.37-4.66 5.671 5.671 0 0 0 -.77-2.84c-1.63-2.81-3.98-5.51-6.49-6.73v-.01l2.62-1.05c2.51 1.23 4.86 3.93 6.5 6.74a5.635 5.635 0 0 1 .77 2.83z" fill="<?=$bud2?>"/> <!--bud2 -->
                <path d="m48.424 28.57h4.395v28.636h-4.395z" fill="<?=$frame1?>" transform="matrix(.94 .341 -.341 .94 17.652 -14.688)"/> <!--frame1 -->
                <path d="m53.081 19.33c-.653 3.185-.7 6.76.355 9.348l4.132 1.5c2.47-1.31 4.724-4.085 6.264-6.948a5.753 5.753 0 0 0 -3.144-8.1 5.753 5.753 0 0 0 -7.607 4.2z" fill="<?=$bud1?>"/> <!--bud1 -->
                <path d="m48.161 66.446c.653-3.185.7-6.76-.355-9.348l-4.132-1.5c-2.47 1.31-4.724 4.085-6.264 6.948a5.753 5.753 0 0 0 3.144 8.1 5.753 5.753 0 0 0 7.607-4.2z" fill="<?=$bud1?>"/> <!--bud1 -->
                <path d="m37.118 41.85h28.635v2.67h-28.635z" fill="<?=$frame2?>" transform="matrix(.341 -.94 .94 .341 -6.695 76.821)"/> <!--frame2 -->
                <path d="m63.83 23.23c-1.54 2.86-3.79 5.64-6.26 6.95l-2.51-.91c2.47-1.31 4.73-4.09 6.27-6.95a5.756 5.756 0 0 0 -1.95-7.51 5.542 5.542 0 0 1 1.31.31 5.761 5.761 0 0 1 3.14 8.11z" fill="<?=$bud2?>"/> <!--bud2 -->
                <path d="m48.16 66.45a5.761 5.761 0 0 1 -7.61 4.2 5.489 5.489 0 0 1 -1.21-.61 4.008 4.008 0 0 0 .69.05 5.74 5.74 0 0 0 5.63-4.55c.65-3.19.7-6.76-.36-9.35l2.51.91c1.05 2.59 1 6.16.35 9.35z" fill="<?=$bud2?>"/><g fill="#323c6b"> <!--bud2 --> <!--contour -->
                <path d="m27.422 45.432a.5.5 0 0 1 -.464-.314l-10.666-26.575a.5.5 0 0 1 .278-.65l4.079-1.637a.5.5 0 0 1 .65.278l10.666 26.575a.5.5 0 0 1 -.278.65l-4.079 1.641a.5.5 0 0 1 -.186.032zm-10.016-26.8 10.294 25.65 3.151-1.265-10.293-25.647z"/>
                <path d="m16.756 18.857a.5.5 0 0 1 -.219-.051c-2.373-1.157-4.818-3.684-6.708-6.931a6.179 6.179 0 0 1 -.5-5.122 6.3 6.3 0 0 1 8.848-3.553 6.18 6.18 0 0 1 3.183 4.048 17.433 17.433 0 0 1 -.056 9.646.5.5 0 0 1 -.283.291l-4.079 1.637a.491.491 0 0 1 -.186.035zm-1.468-15.357a5.3 5.3 0 0 0 -5.01 3.577 5.18 5.18 0 0 0 .415 4.294 16.745 16.745 0 0 0 6.087 6.436l3.66-1.469a16.739 16.739 0 0 0 -.052-8.858 5.18 5.18 0 0 0 -2.669-3.39 5.3 5.3 0 0 0 -2.431-.59z"/>
                <path d="m32.97 59.15a6.3 6.3 0 0 1 -2.89-.7 6.18 6.18 0 0 1 -3.18-4.05c-.879-3.653-.859-7.169.055-9.646a.5.5 0 0 1 .283-.291l4.079-1.637a.5.5 0 0 1 .405.015c2.373 1.157 4.818 3.683 6.708 6.93a6.181 6.181 0 0 1 .5 5.122 6.3 6.3 0 0 1 -5.96 4.257zm-5.152-13.838a16.744 16.744 0 0 0 .052 8.858 5.179 5.179 0 0 0 2.668 3.389 5.3 5.3 0 0 0 7.44-2.986 5.18 5.18 0 0 0 -.415-4.294 16.736 16.736 0 0 0 -6.087-6.436z"/></g>
                <path d="m21.931 16.508h4.395v28.636h-4.395z" fill="none" transform="matrix(.928 -.372 .372 .928 -9.746 11.206)"/>
                <path d="m10.261 11.624c1.636 2.81 3.983 5.507 6.5 6.733l4.079-1.637c.968-2.623.8-6.194.038-9.355a5.753 5.753 0 0 0 -7.745-3.946 5.753 5.753 0 0 0 -2.872 8.205z" fill="none"/>
                <path d="m38 50.027c-1.636-2.81-3.983-5.507-6.5-6.733l-4.079 1.637c-.968 2.623-.8 6.194-.038 9.355a5.753 5.753 0 0 0 7.745 3.946 5.753 5.753 0 0 0 2.872-8.205z" fill="none"/>
                <path d="m47.807 57.6a.507.507 0 0 1 -.17-.03l-4.132-1.5a.5.5 0 0 1 -.3-.641l9.762-26.921a.5.5 0 0 1 .641-.3l4.132 1.5a.5.5 0 0 1 .3.641l-9.762 26.92a.5.5 0 0 1 -.471.331zm-3.492-2.3 3.192 1.157 9.421-25.98-3.192-1.158z" fill="#323c6b"/> <!--contour -->
                <path d="m57.568 30.677a.5.5 0 0 1 -.17-.03l-4.132-1.5a.5.5 0 0 1 -.292-.281c-1-2.444-1.136-5.957-.381-9.638a6.179 6.179 0 0 1 3.044-4.149 6.3 6.3 0 0 1 8.96 3.25 6.18 6.18 0 0 1 -.323 5.135c-1.779 3.309-4.138 5.917-6.47 7.153a.5.5 0 0 1 -.236.06zm-3.75-2.392 3.708 1.345a16.742 16.742 0 0 0 5.865-6.638 5.18 5.18 0 0 0 .27-4.305 5.3 5.3 0 0 0 -7.538-2.733 5.18 5.18 0 0 0 -2.553 3.478 16.751 16.751 0 0 0 .249 8.853z" fill="#323c6b"/>
                <path d="m42.531 71.5a6.3 6.3 0 0 1 -5.884-4.052 6.179 6.179 0 0 1 .323-5.136 17.425 17.425 0 0 1 6.47-7.153.5.5 0 0 1 .4-.028l4.132 1.5a.5.5 0 0 1 .292.281c1 2.444 1.136 5.957.381 9.638a6.18 6.18 0 0 1 -3.039 4.15 6.3 6.3 0 0 1 -3.075.8zm1.186-15.353a16.746 16.746 0 0 0 -5.865 6.638 5.18 5.18 0 0 0 -.27 4.305 5.3 5.3 0 0 0 7.537 2.733 5.179 5.179 0 0 0 2.553-3.478 16.753 16.753 0 0 0 -.248-8.855z" fill="#323c6b"/></svg>
            </div>
            </fieldset>
		<button type="submit" name="action" value="Refresh">Refresh</button>
		<button type="submit" name="action" value="Send" ><a href="cart.html"> Send </a> </button>
        </form>
    </section>
  <br>  <br>
    <div class="separation"><hr></div>

    <footer >
    		<div>Headquarter : 240 rue des Bullozers, Tourcoing(59200) -- FRANCE</div>
    		<div>Contact us : <a>contactus@we-have-no-mail.com</a> </div>
    	</footer>
</body>
</html>
