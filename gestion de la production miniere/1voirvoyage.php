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
            <h4>TDB voyage site A</h4>
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
    <th>n.voyage:</th>
    <th>n.conducteur:</th>
    <th>destination:</th>
    <th>distance:</th>
    <th>date de depart:</th>
    <th>heure de depart:</th>
    <th>date d'arrivee:</th>
    <th>heure d'arrivee:</th>
    <th>supprimer</th>

  </tr>

  <?php

  $stmt=$conn->query("SELECT * FROM voyagesitea");

  $data=$stmt->fetchAll(PDO::FETCH_ASSOC);
  foreach ($data as $row) { ?>

    <tr>
      <td><?php echo($row['Nvoyage'])?></td>
      <td><?php echo($row['Nconducteur'])?></td>
      <td><?php echo($row['destination'])?></td>
      <td><?php echo($row['distance'])?></td>
      <td><?php echo($row['date_de_depart'])?></td>
      <td><?php echo($row['heure_de_depart'])?></td>
      <td><?php echo($row['date_d_arrivee'])?></td>
      <td><?php echo($row['heure_d_arrivee'])?></td>
      <td><a href="supprimerVoyagea.php?id=<?php echo($row['id'])?>">supprimer</td>
    </tr>
     <?php } ?>
     
</table>

 <div class="button-wrapper">
              <button  type="submit" class="btn btn-warning my-3" ><a href="site">REVENIR</button>
             </div>


</body>
</html>