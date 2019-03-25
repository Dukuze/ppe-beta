<!--~~ Début, Identifiant,etc corps du forum-->
<html style="overflow-y: scroll;" prefix="og: http://ogp.me/ns#" class="responsive_768 responsive_480 js csstransforms csstransforms3d csstransitions" lang="en-US">
 <head>
    <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta charset="UTF-8">
<title>Forum</title>
    <script>
      function affConnection(){
        console.log('JS : Connection de utilisateur');
        document.getElementById('connexion').style.display='inline-block';
      }
      function affinsc(){
 l       console.log('JS : Inscription de utilisateur');
        document.getElementById('panelInsc').style.display='inline-block';
        document.getElementById('connexion').style.display='none';
      }
    </script>
    <link rel="stylesheet" type="text/css" href=".\forum.css">
  </head>
  <body>
    <!-- Logo -->
    <link rel="icon" type="" />
    <a href="../index.html"><img src="./../images/itis-logo_06.png" width="100" height="" alt="logo du site"></a>
    </div>
    
    <!-- connexion et système d'inscription -->
    <div id="panelInsc" class="panelInsc">
      <form method="post" action='.\inscription.php'>
        <label>E-mail: <input type="text" name="email"/></label><br/>
        <label>Nom: <input type="text" name="nom"/></label><br/>
        <label>Prenom: <input type="text" name="prenom"/></label><br/>
        <label>Mot de passe: <input type="password" name="mdp"/></label><br/>
        <label>Confirmation du mot de passe: <input type="password" name="confirmMdp"/></label><br/>
        <input type="submit" value="M'inscrire"/>
      </form>
    </div>

    <!-- Recherche -->
  <div>
    <form name="recherche" class="recherche" action="/recherche/resultats.html" method="post">
      <div class="labelConnection" onclick='affConnection();' > <font color="blue";>Se connecter</font> </div>
      <input class="txtRecherche" type="text" name="txtRecherche"/>
      <input type="submit" id="btnRecherche" name="btnRecherche" value='Recherche'
        title="recherche" onclick="document.recherche.submit();"/>
    </form>
  </div>
  <div id="connexion" class="connexion">
    <form id="formConnexion">
     <fieldset id="blockConnexion">
         <input id="Nom d'utilisateur" type="text" placeholder="Nom d'utilisateur" autofocus required>
         <input id="Mot de passe" type="password" placeholder="Mot de passe" required>
         <input type="submit" id="submit" value="connexion">
          <a href="">Mot de passe oublier ?</a> <div class='intext' onclick="affinsc();">Inscription</div>
      </fieldset>
    </form>
  </div>

  <!--~~ Menu-->
  
 <ul id="nav">
                <li id="Accueil"> <a href="../index.html"><strong>Accueil</strong></a></li>
                <li> <a href="..\faq\faq.php"><strong>FAQ</strong></a></li>
                <li><a href="./forum.php"><strong>Forum</strong></a></li>
 
 </ul>

    <!--~~ Corps du site-->
   <div class="tablo">
      <table border cellpadding="0" border=1 height= "95%"
        width="100%" align="left" class="pretty-table"

        summary="La table présent les differentes section de notre forum .">
        <tr class="header">
          <th scope="col">Forum</th>
          <th scope="col">Sujets</th>
          <th scope="col">Articles</th>
          <th scope="col" colspan=3> Dernier Message</th>
        </tr>
      <tr>
          <td><a href=".\topics\actualites.php">Actualités</a></td>
          <td width="800">En cours</td>
          <td>...</td>
          <td colspan=3>...</td>
        </tr>
       
        <tr>
          <td><a href=".\topics\presentationdesmembres.php">Presentations des menbres</a></th>
          <td>Mana67binks</td>
          <td>94</td>
          <td colspan=3>Il y'a 4 jours <br>Speikinho73</br></td>
        </tr>
        
        <tr>
          <td><a href=".\topics\miseajour.php">Mise à jour</a></td>
          <td>En cours</td>
          <td>...</td>
          <td colspan=3>...</td>
        </tr>

        <tr>
          <th><a href=".\topics\lereglement.php">Règlements</th>
          <td>Règlements (0, 0), Comment s' inscrire</td>
          <td>...</td>
          <td colspan=1>...<td>
        </tr>
        
      <tr class="footer">
          <td colspan="6">
            Projet Sio, 2018
          </td>
        </tr>
      </table>
    
  </div>

  <!--~~ Image-->
  <!--~~ Icone-->
  
  <!--~~ Barre d'Information-->

  <ul class="basdepage">
    <li><a href="#4"><font color="#5A5E6B"><strong>Equipe du forum</strong></font></a></li>
    <li><a href="#4"><font color="#5A5E6B"><strong>Nous contacter</strong></font></a></li>
    <li><a href="#5"><font color="#5A5E6B"><strong>Heures au format UTC + 01:00</strong></font></a></li>
  </ul>

</body>
</html>
