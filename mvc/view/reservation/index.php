<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
</head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<link rel="stylesheet" href="http://localhost/mvc/view/css/main.css">

<body>
    
    <div class="container ">
        <div class="row">
            <div class="col-md-6 login-form-2">
                <form action="http://localhost/mvc/login/Logout" method="post">
                    <button class="btn btn-md btn-info" data-toggle="dropdown" type="submit" name="logout" value="deconnexion">Déconnexion</button>
                </form>
                <h3>Reserver votre cours</h3>
                <form action="http://localhost/mvc/reservation/create" method="POST" class="Reservation">
                    <div class="form-group">
                        <input type="date"  class="form-control" name="date" min="" placeholder="date" required>
                    </div>
                    <!-- <div class="form-group" class="email"> -->
                        <input type="hidden"  class="form-control" name="userId" value="<?php echo $_SESSION['email']; ?>" >
                    <!-- </div> -->
                    <div class="form-group">
                        <select name="duree"  class="form-control" required>
                            <option value="" disabled selected>La durée</option>
                            <option value="8-10">8h-10h</option>
                            <option value="10-12">10h-12h</option>
                            <option value="14-16">14h-16h</option>
                            <option value="16-18">16h-18h</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="Groupe" class="form-control" required>
                            <option value="" disabled selected >Groupe</option>
                                <?php
                                    foreach ($groupes as $grp)
                                    echo "<option value='".$grp['id']. "'>" . $grp['libelle_G'] . "</option>";
                                ?>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <select name="Salle" class="form-control" required>
                            <option value="" disabled selected>Salle</option>
                                <?php
                                    foreach ($salles as $sl)
                                    echo "<option value='".$sl['id']. "'>" . $sl['libelle'] . "</option>";
                                ?>
                        </select>
                    </div>
                    <div class="form-group">
                    <input type="submit" class="btn btn-success" name="reserver" value="Reserver">
                    </div>
                </form>
            </div>
        </div>
    </div>



    <div>
    <table class="table" >
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Date</th>
                        <th>Dureé</th>
                        <th>Nom d'ensiegnant</th>
                        <th>Groupe</th>
                        <th>Salle</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach($reservation as $r){?>
                        <tr>
                        <td><?php echo $r['id'] ?></td>
                            <td><?php echo $r['date'] ?></td>
                            <td><?php echo $r['duree'] ?></td>
                            <td><?php echo $r['name'] ?></td>
                            <td><?php echo $r['libelle_G'] ?></td>
                            <td><?php echo $r['libelle'] ?></td>
                            <td><form action="http://localhost/mvc/reservation/delete" method="post"> <input type="text" name="id" value="<?php echo $r['id'] ?>" hidden> <button  class="btn btn-danger" name="supprimer">supprimer</button></form></td>
                        </tr>
                    <?php  } ?>
                </tbody> 
            </table>

        </div>

    
    
    
</body>
</html>
