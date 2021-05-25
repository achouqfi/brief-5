<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>inscription</title>
  <link rel="stylesheet" href="http://localhost/mvc/view/css/main.css">
</head>

<body  >


    <div class="wrapper">
        <form action="http://localhost/mvc/login/create" method="post" class="form-right">
            <h2 class="text-uppercase">Sign In</h2>
            <div> <label>Name</label> <input type="text" class="input-field" name="name" required> </div>
            <div> <label>Email</label> <input type="email" class="input-field" name="email" required> </div>
            <div> <label>Password</label> <input type="password" name="password" id="pwd" class="input-field"> </div>
            <select class="matiereSelect" name="id_matiere">
                <option value=""  disabled selected> Matiére</option>
                    <?php
                    foreach ($matieres as $matiere)
                    echo "<option value='".$matiere['id']. "'>" . $matiere['libelle_M'] . "</option>";
                    ?>
            </select>

            <div class="form-field">
                <input type="submit" value="Sign in" class="register" name="ajouter"> 
            </div>
        </form>

        <div class="form-left" > 
            <h2 class="text-uppercase">information</h2>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, aliquid. Illum, quo consequatur non maxime temporibus saepe quisquam esse ex, atque quod nisi nobis velit expedita, ipsa minus voluptatibus harum. </p>
            <form action="http://localhost/mvc/login/index" method="POST">
                <div class="form-field"> <input type="submit" class="account" value="Login in?"> </div>
            </form>
        </div>

    </div>
</body>
</html>


