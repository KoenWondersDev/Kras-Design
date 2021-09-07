<?php



?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kras-Design</title>
    <link rel="stylesheet" href="../style/defualt.css">
    <link rel="stylesheet" href="../style/contact.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <!-- nav -->
    <div class="navbar">
        <a href="..\Index.php"><img src="..\img\2021-03-18.png" alt="logo" id="Logobrand"></a>
        <div class="navlinks">
            <ul class="nav-items">
                <li class="navitem"><a href="..\Index.php">Home</a></li>
                <li class="navitem"><a href="..\pages\over.php">over</a></li>
                <li class="navitem"><a href="..\pages\contact.php">Contact</a></li>
                <li class="navitem"><a href="..\pages\personeel.php">Personeel</a></li>
            </ul>
        </div>
    </div>
    <!-- hero -->
    <section class="hero">
        <div class="heroimg">

            <div class="contacttext">
                <br>
                <h2 class="test">
                    Neem Contact met ons op
                </h2>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, rerum. <br></p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. lorem Eum, rerum. <br></p>
                <p>Lorem ipsum dolor sit amet consectetur, Eum, rerum. <br></p>
            </div>
            <div class="imglocation">

            </div>
        </div>
        <div class="Formcontact">
            <h2>Wil jij met ons werken <br /> neem dan nu contact op!</h2>
            <form>
                <label for="Text">Contact Formulier</label>
                <input type="text*" placeholder="Voornaam + Achternaam">
                <input type="tel" placeholder="06-12345678">
                <input type="email" placeholder="E-mail adres">
                <textarea name="Text" id="" cols="35" rows="5" placeholder="type hier je tekst"></textarea><br>
                <button type="submit">Verzenden</button>
            </form>
        </div>
    </section>

    <!-- footer -->

    <section class="Footer">
        <div class="copy">
            <h4>KoenWonders©2021 School project website</h4>
        </div>

        <div class="footerinfo">
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, consequuntur.</h4>
            <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit, consequuntur.</h4>
        </div>

        <div class="social_icons">
            <img alt="facebook" src="..\img\icon\iconmonstr-facebook-4.svg" class="tag">
            <img alt="twitter" src="..\img\icon\iconmonstr-twitter-4.svg" class="tag tag1">
            <img alt="youtube" src="..\img\icon\iconmonstr-youtube-9.svg" class="tag tag2">
        </div>

        <div class="social_tags">
            <h3 class="tag tagname">@yourname</h3>
            <h3 class="tag tagname">@yourname</h3>
            <h3 class="tag tagname">@yourname</h3>
        </div>
        <div class="footerkvk">
            <h4>KVK: 230023453</h4>
        </div>
        <div class="togglelang">
            <a href="#"><button>Engels</button></a>
        </div>

    </section>

    <!-- Scripts -->
</body>

</html>