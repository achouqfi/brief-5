<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
  <link rel="stylesheet" href="http://localhost/mvc/view/css/main.css">

</head>

<body>
    
    <div class="wrapper">
        <div class="form-left"> 
                <h2 class="text-uppercase">information:</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus reprehenderit cum commodi repudiandae vero rerum dolorum autem perspiciatis amet saepe eveniet quidem modi temporibus quam enim quae deleniti, quibusdam assumenda. </p>
                <form action="http://localhost/mvc/login/indexRegister" method="POST">
                    <div class="form-field"> <input type="submit"  value="regestration?"> </div>
                </form>
        </div>
        <form action="http://localhost/mvc/login/authentification" method="post" class="form-right">
            <h2 class="text-uppercase">login form</h2>
            <div class="mb-3"> <label>Your Email</label> <input type="email" class="input-field" name="email" required> </div>
            <div class="row">
                <div class="col-sm-6 mb-3"> <label>Password</label> <input type="password" name="password" id="pwd" class="input-field"> </div>
            </div>
            <div class="form-field">
                <input type="submit" value="login in" class="register" name="login"> 
            </div>
        </form>
    </div>

</body>
</html>