<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">


.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}


.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.button-wrapper button a {
  color:black ; 
 font-family: "Roboto", sans-serif;
 text-transform: uppercase;
}
body {
 background-color: #ac2b;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
</head>
<body>
          <div class="container" style=" background: linear-gradient(45deg, #ac2b, #A25A2a);">
            <h3>Gestion de la production miniere</h3>

            <div style="margin-left: 25%">
            <h4>TDB qualite site C</h4>
            </div>
             <p>----------------------------------------------------------------------------------------------------------------</p>

          </div>

<?php
$servername="localhost";
 $username="root";
 $password="";

  $conn=new pdo("mysql:host=$servername;dbname=ocpdb",$username,$password);
  ?>

    <table border="1" width="80%">
  <tr>
    <th>id qualite:</th>
    <th>date d’extraction:</th>
    <th>n.voyage:</th>
    <th>type de qualite:</th>
    <th>quantite:</th>
    <th>supprimer</th>

  </tr>

  <?php

  $stmt=$conn->query("SELECT * FROM qualitesitec");

  $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($data as $row) { ?>

    <tr>       
      <td><?php echo($row['id_qualite'])?></td> 
      <td><?php echo($row['date_d_extraction'])?></td>
      <td><?php echo($row['Nvoyage'])?></td>
      <td><?php echo($row['type_de_qualite'])?></td>
      <td><?php echo($row['quantite'])?></td>
      <td><a href="supprimerQualitec.php?id=<?php echo($row['id'])?>">supprimer</td>
    </tr>
     <?php } ?>
     
</table>

 <div class="button-wrapper">
              <button  type="submit" class="btn btn-warning my-3" name="add"><a href="site">REVENIR</button>
             </div>



</body>
</html>