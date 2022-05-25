
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="../css/portfoliostyle.css" />
</head>
<body>
    
    
    <header>
        <nav>
            <ul>
              <li class="navbar"> <a href="globalIndex.html"> <img src="../IMG/LOGOpc.png" height= "95" width="auto" alt="LOGO" /></li>
              <li class="navbar"> <a href="portfolioIndex.html">Portfolio</a></li>
              <li class="navbar"> <a href="CVindexIndex.html">CV</a></li>
              <li class="navbar"> <a href="ActuIndex.html">Actualités</a></li>
              <li class="navbar"> <a href="formulaire.html">Contact</a></li>
            </ul>
          </nav>
      </header>
    <div class="containForm">
    <form method="POST" action="action.php">
        <p>
         <label for="name" >Nom :</label>
         <input name="name" placeholder="Nom" id="nom"> 
         <p class = "rouge cache " id="name"> Veuillez rentrer un nom </p>
         
         <label for="prenom">Prenom :</label>
         <input name="prenom" placeholder="Prenom" id="prenom">
        </p>
        <p class = "rouge cache" id="lname"> Veuillez rentrer votre prenom </p>

        <p>
            <label for="Mail"> Email : </label>
            <input type="email" name="Mail" placeholder="toto@exemple.com" id="email"> 
        </p>
        <p class = "rouge cache" id="mail1"> Veuillez rentrer un mail valide </p>

        <p class = "rouge cache " id="CGU"> Accepter les CGU </p>

        <p>
            <label for="comment"> Commentaire particulié :</label>
            <textarea name="comment" id="txtarea"> </textarea>
        </p>
        
       
        <p class="rouge cache" id="verif">
            Le formulaire est invalide
        </p>
        

        <p>
            <label for="send"></label>
            <input type="submit" name="send"> 
        </p>

      
    </form>
    </div>
      <footer>
        <a href="https://www.instagram.com/prammpro/?hl=fr" target="blank">
          <img
            src="../IMG/insta.png"
            height="25"
            width="25"
            alt="Instagram"
          />
          </a>
            <a href="https://www.facebook.com/paul.marquaille/" target="blank">
              <img
                src="../IMG/facebook.png"
                height="40"
                width="40"
                alt="facebook"
              />
            </a>
            <a href="https://www.linkedin.com/in/paul-marquaille/" target="blank">
              <img
                src="../IMG/linkedin.png"
                height="32"
                width="32"
                alt="Linkedin"
            /></a>
            
            <img
              src="../IMG/discord.png"
              width="35"
              height="35"
              alt="discord"
              title="Pramm#5839"
            />
            <a href="mailto:paulmarquaille@gmail.com?" target="blank"></a>
              <img src="../IMG/gmail.png" width="32" height="32" alt="gmail" title="paulmarquaille@gmail.com"/></a>
        </footer>
        <script src="../JS/forms.js"></script>
</body>

</html>
