<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <style type="text/css">
  .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
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
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#A83A2A,#48ac4b);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
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
  color: black; 
  text-decoration: none; /* Remove underlines from links */
}
body {
 background-color: #328f8a;
  background-image: linear-gradient(45deg,#A83A2A,#48ac4b);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
</head>
<body>
     <div class="sign up-page">
      <div class="form">
        <div class="sign up">
          <div class="sign up-header">
            <h3>Gestion de la production miniere</h3>
            <h4>Remplir site C</h4>
            <p>qualite</p>
          </div>


    

    <h3><div id="date-du-jour">
<script>
    function afficherDateDuJour() {
        var dateDuJour = new Date();
        var options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
        var dateFormatee = dateDuJour.toLocaleDateString('fr-FR', options);

        document.getElementById('date-du-jour').textContent = "Date du jour : " + dateFormatee;
    }

    afficherDateDuJour(); // Appeler la fonction pour afficher la date au chargement de la page
</script>
</div>
</h3>

<?php
$servername="localhost";
 $username="root";
 $password="";

  $conn=new pdo("mysql:host=$servername;dbname=ocpdb",$username,$password);
  ?>
        </div>

             <form class="sign up-form" method="POST" action="insert3qualite.php">

 <label for="id_qualite">id qualite :</label>
              <input type="number" id="id_qualite" name="id_qualite" placeholder='id qualite' ><br>
             
<label for="date_d_extraction">date d’extraction:</label>
<input type="Date" id="date_d_extraction" name="date_d_extraction" placeholder="Select date"><br>

<!-- Include the necessary jQuery and jQuery UI libraries -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

<script>
  $(document).ready(function() {
    // Calculate the minimum date for the datepicker
    var currentDate = new Date();
    var minDate = new Date(currentDate.getFullYear() - 63, 0, 1); // 63 years ago from the current year

    // Initialize the datepicker
    $("#datenaiss").datepicker({
      changeMonth: true,
      changeYear: true,
      // Set the date format as desired
      dateFormat: "yy-mm-dd",
      // Set the minimum and maximum selectable dates
      minDate: minDate,
      maxDate: 0
    });
  });
  </script>

              <label for="Nvoyage">n.voyage :</label>
              <input type="number" id="Nvoyage" name="Nvoyage" placeholder='n.voyage' ><br>
              <label for="type_de_qualite">type de qualite :</label>
              <input type="text" id="type_de_qualite" name="type_de_qualite" placeholder='type de qualite' ><br>
              <label for="number">quantite :</label>
              <input type="number" id="quantite" name="quantite" placeholder='quantite' ><br>
   
 <div class="button-wrapper">
              <button type="submit" class="btn btn-warning my-3" name="add"><a href="site?id=<?php echo($row['id'])?>">confirmer</button>
             </div>

             </div>
        </form>
      </div>
    </div>




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
      <td><a href="supprimerQualitea.php?id=<?php echo($row['id'])?>">supprimer</td>
    </tr>
     <?php } ?>
     
</table>

 

</body>
</html>