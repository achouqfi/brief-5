<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <title>Groupe</title>
    <link rel="stylesheet" href="http://localhost/mvc/view/css/main.css">
</head>

<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" >
                <img src="http://placehold.it/200x50&text=LOGO" alt="DASHBOARD" height="40px" >
            </a>
        </div>
        <ul class="nav navbar-right top-nav">         
            <li class="dropdown" style="margin-top: 10%;">
                <form action="http://localhost/mvc/login/Logout" method="post">
                    <button class="btn btn-md btn-info" data-toggle="dropdown" type="submit" name="logout" value="deconnexion">Déconnexion</button>
                </form>
            </li>
        </ul>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav side-nav">
                <li ><a href="http://localhost/mvc/salle"><i class="fa fa-fw fa-star"></i>  Salle</a></li>
                <li class="active"><a href="http://localhost/mvc/groupe/"><i class="fa fa-fw fa-star"></i>  Groupe</a></li>
                <li ><a href="http://localhost/mvc/matiere"><i class="fa fa-fw fa-star"></i>  Matiere</a></li>
            </ul>
        </div>
    </nav>
                   
    <div class="container">
        <div class="table-responsive">
            <div class="table-wrapper" >
                <div class="table-title"  >
                    <div class="row">
                        <div class="col-sm-7">
                            <h2> <b>Groupes</b></h2>
                        </div >

                    </div>
                </div>
                <form action="http://localhost/mvc/groupe/create"  method="post">
                    <div class="buttons">
                        <button class="btn btn-lg btn-info" data-toggle="dropdown" class="btnInsert"   type="button" class="button" value="Add" onclick="addItem()" >Add row</button>
                        <button class="btn btn-lg btn-success" type="submit" name="ajouter">Ajoute</button>
                    </div>
                <table class="table table-striped table-hover" id="tbody">

                </form>
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Libelle</th>
                            <th>Effectif</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                    <form action="http://localhost/mvc/groupe/update" method="pOST">

                    <?php
                    $i=0;
                        foreach($result as $res){?>
                        
                    <form action="http://localhost/mvc/groupe/update" method="pOST">

                            <tr>
                                <td><label  for=""><?php echo $res['id'] ?></label><input type="hidden" value="<?php echo $res['id'] ?>" name="id" ></td>
                                <td>
                                    <label id="Glibellelabel<?=$i?>" for=""><?php echo $res['libelle_G'] ?></label>
                                    <input type="text" id="Glibelle<?=$i?>" value="<?php echo $res['libelle_G'] ?>" name="GroupeLibelle" style="display:none" >
                                </td>
                                <td>
                                    <label id="GeffectifLabel<?=$i?>" for=""><?php echo $res['effectif'] ?></label>
                                    <input type="number" id="Geffectif<?=$i?>" value="<?php echo $res['effectif'] ?>" name="GroupeEffectif" style="display:none" >
                                </td>
                                <td class="action" >
                                    <input type="submit"  class="btn btn-success" class="saveInput" id="btnsave<?=$i?>" name="submit" value="save" style="display:none">
                                    <a type="text"  class="btn btn-warning" id="btncancel<?=$i?>" onclick='cancel(<?=$i?>)' style="display:none">annuler</a>
                    </form>

                                    <form action="http://localhost/mvc/groupe/delete" method="post">
                                        <input type="text" name="id" value="<?php echo $res['id'] ?>" hidden>
                                        <button  class="btn btn-danger" id="btndelet<?=$i?>" name="supprimer">supprimer</button>
                                    </form> &nbsp; &nbsp;
                                    <button  class="btn btn-warning"  name="annuler" style="display:none">annuler</button>
                                    <a  class="btn btn-info" onclick='modifie(<?=$i?>)' id="btnedit<?=$i?>">hhhh</a>
                                </form></td>
                            </tr>
                    
                        <?php  $i++;
                    } ?>
                    </tbody> 
                </table>
            </div>
        </div>        
    </div>


    <script src="http://localhost/mvc/view/js/editGroupe.js" ></script>

      
</body>
</html>
