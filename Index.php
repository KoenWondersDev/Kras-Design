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
    <link rel="stylesheet" href="./style/defualt.css">
    <link rel="stylesheet" href="./style/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>

<body>
    <!-- nav -->
    <div class="navbar">
        <a href="./Index.php"><img src=".\img\2021-03-18.png" alt="logo" id="Logobrand"></a>
        <div class="navlinks">
            <ul class="nav-items">
                <li class="navitem"><a href="Index.php">Home</a></li>
                <li class="navitem"><a href="pages\over.php">over</a></li>
                <li class="navitem"><a href="pages\contact.php">Contact</a></li>
                <li class="navitem"><a href="pages\personeel.php">Personeel</a></li>
            </ul>
        </div>
    </div>
    <!-- hero -->

    <section class="hero">
        <div class="heroimg">

            <div class="hometext">
                <br>
                <h2 class="test">
                    Welkom bij Kras-Design
                </h2>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Eum, rerum. <br></p>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. lorem Eum, rerum. <br></p>
                <p>Lorem ipsum dolor sit amet consectetur, Eum, rerum. <br></p>
            </div>
        </div>
        <div class="Domeintest">
            <h2>goedkope domeinnamen vanaf <br />
                <span>€1 euro</span>
            </h2>
            <form>
                <label for="Text">Check hier jouw eigen domein</label>
                <input type="text" id="Zoek hier je eigen .nl of .eu domein" placeholder="je-eigen-naam.nl">
                <button type="submit">Zoeken</button>
            </form>
        </div>
    </section>

    <!-- fotos -->

    <div class="gallery">
        <img class="gallery1" src="img\unsplash\christopher-gower-m_HRfLhgABo-unsplash.png">
        <img class="gallery2" src="img\unsplash\clint-bustrillos-WYwT7pXuXvo-unsplash.png">
        <img class="gallery3" src="img\unsplash\mia-baker-klRB1BB9pV8-unsplash.png">
        <img class="gallery4" src="img\desktop-3820634_1920.jpg">
        <img class="gallery5" src="img\unsplash\kelly-sikkema-v9FQR4tbIq8-unsplash.png">
        <img class="gallery6" src="img\unsplash\ruben-daems-cCvmeQDjkw0-unsplash.png">
        <img class="gallery7" src="img\unsplash\scott-graham-5fNmWej4tAA-unsplash.png">
    </div>

    <!-- mail list -->
    <div class="mailbg">
        <div class="mailing">
            <div class="Maillist">
                <h2>wil jij op de hoogte blijven join dan onze <br />
                    <span>Mail lijst!</span>
                </h2>
                <form>
                    <input type="mail" placeholder="hier je email">
                    <button type="submit">Blijf op de hoogte</button>
                </form>
            </div>
        </div>
    </div>

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
            <img alt="facebook" src="img\icon\iconmonstr-facebook-4.svg" class="tag">
            <img alt="twitter" src="img\icon\iconmonstr-twitter-4.svg" class="tag tag1">
            <img alt="youtube" src="img\icon\iconmonstr-youtube-9.svg" class="tag tag2">
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