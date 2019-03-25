<?php
 //Recuperation des données de l'utilsateur
  $email = $_POST["email"];
  $nom = $_POST["nom"];
  $prenom = $_POST["prenom"];
  $mdp = $_POST["mdp"];


  // Si les données de l'utilisateur sont bon on les ajoute à BDD
  if(isset($_POST["email"])){
    // Connection de la BDD
    $db = new PDO("mysql:host=127.0.0.1;dbname=pjt3;charset=utf8","pjt3","pjt3");
    // Insertion des donnnées de l'utilisateur
    $sql = "INSERT INTO Utilisateur VALUES('','$email', '$nom','$prenom','".md5($mdp)."')";
    $q = $db -> prepare ($sql);
    $q -> execute();
  }else{
  echo "<form method='post'><h3>Inscription</h3>
  Email : <input type='email' name='email' required><br>
  Nom: <input type='text' name='nom' required><br>
  Prenom: <input type='text' name='prenom' required><br>
  Mot de passe : <input type='password' name='mdp' required><br>
  <input type='submit'>
  </form>";
  }
?>
