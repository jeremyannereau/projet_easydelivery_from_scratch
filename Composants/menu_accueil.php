<?php require_once ("bd_connect.php");?>
<?php require_once ("bd_login.php");?>

<head>
        <title>EASY Delivery : Vos appros</title>
        <link rel='stylesheet' type='text/css' media='screen' href='normalize.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='composants.css'>
</head>


<html>
    

<header >
    <img class="mainbanner" src="mainbanner.png">
</header>

<body>
    
    <div class="topnav">
        <a href="#">MODE D'EMPLOI</a>
        <a href="#">AIDE</a>
        <a href="#" style="float:right">NOUS CONTACTER</a>
    </div>

    <div class = "main">

        <div class = "main_articles">

            <div class = "content">

                <p>bla bla bla bla bla bla bla blabla bla bla bla</p>
                <p>bla bla bla bla bla bla bla blabla bla bla bla</p>
                <p>bla bla bla bla bla bla bla blabla bla bla bla</p>
                <p>bla bla bla bla bla bla bla blabla bla bla bla</p>

            </div>

            <div class = "content">

                <p>bla bla bla bla bla bla bla blabla bla bla bla</p>
                <p>bla bla bla bla bla bla bla blabla bla bla bla</p>
                <p>bla bla bla bla bla bla bla blabla bla bla bla</p>
                <p>bla bla bla bla bla bla bla blabla bla bla bla</p>
                    
                </div>
            <div class = "content">

                <p>bla bla bla bla bla bla bla blabla bla bla bla</p>
                <p>bla bla bla bla bla bla bla blabla bla bla bla</p>
                <p>bla bla bla bla bla bla bla blabla bla bla bla</p>
                <p>bla bla bla bla bla bla bla blabla bla bla bla</p>
                    
            </div>  
        </div>


        <div class = "login_app">
            <form class ="element_form" name = "form_login" method = "POST"> 
            <p> S'identifier</p>
            <div class = "separate"> </div>

            <label for ="login">Identifiant</label>
            <input type ="text" name ="login" placeholder="ex: pseudonyme">

            <label for ="password">Mot de passe</label>
            <input type ="password" name ="password" placeholder="*******">

            <input class = "button_style" type = "submit" name = "submit_connect" value ="Se connecter">
        
            <a href = "index.html?action=passforgotten">Mot de passe oublié ?</a>
            </form>

            <div class = "logo-anim">
            <!--<img class="logo" src="camion2.png">--> 
            </div>

            <div class ="element_form">
            <p>Nouvel utilisateur ?</p>
            <div class = "separate"> </div>
            <button class = "button_style">Demander un compte entreprise</button>
            </div>
        </div>

    
    </div>

    <footer class = "network_links">

        <div class = "network links">
                       
            <img class = "network_logo" src ="logo-twitter.png">
            <img class = "network_logo" src ="logo-insta.png">
            <img class = "network_logo" src ="logo-linkedin.png">
            <img class = "network_logo" src ="Facebook_UI-03-512.png">
            
        </div>    


        <div class = "network topnav">
            <a><p>RETWEETEZ NOUS SUR TWITTER</p></a>
            <a><p>FOLLOWEZ NOUS SUR INSTAGRAM</p></a>
            <a><p>CONNECTONS NOUS SUR LINKEDIN</p></a>
            <a><p>RENDEZ-VOUS SUR FACEBOOK</p></a>

        </div>

    </footer>
</body>

</html>



