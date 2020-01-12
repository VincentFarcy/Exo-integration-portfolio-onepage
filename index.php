<?php 
require("./data/data.php");
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/hamburgers.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <script defer
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script defer type="text/javascript" src="./js/app.js"></script>
</head>
<body>

    <header>

        <nav class="header-nav">
            <button class="hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <ul class="header-nav-item-list">
                <li class="header-nav-item header-nav-item-first"><a href="#">home</a></li>
                <li class="header-nav-item"><a href="#">hello</a></li>
                <li class="header-nav-item"><a href="#">who am i</a></li>
                <li class="header-nav-item"><a href="#">what i do</a></li>
                <li class="header-nav-item header-nav-item-last"><a href="#">say hi</a></li>
            </ul>
        </nav>

        <div class="header-title-container">
            <h1>Samuel Daurt</h1>
            <p>Human booster guest loremp ipsum</p>
        </div>

    </header>

    <main>

        <section class="section-intro">
            <h2>intro</h2>
            <div class="section-intro-content">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolorem laborum porro quidem in officiis aperiam repellat ea eum molestiae.</p>
                <p class="section-intro-central-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolorem laborum porro quidem.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolorem laborum porro quidem in officiis aperiam repellat ea eum molestiae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolorem laborum porro quidem in officiis aperiam repellat ea eum molestiae.</p>
                <div class="section-intro-buttons">
                    <a href="#section-work" class="button button-work">see my work</a>
                    <a href="#section-contact" class="button button-contact">contact me</a>
                </div>
            </div>
        </section>

        <section class="section-bio" id="section-bio">
            <h2>bio</h2>
            <div class="section-bio-content">
                <img class="section-bio-main-image" src="./images/looking.jpg" alt="un regard">
                <p class="section-bio-main-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolorem laborum porro quidem in officiis aperiam repellat ea eum molestiae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolorem laborum porro quidem in officiis aperiam repellat ea eum molestiae.</p>
                <table class="section-bio-skills-table">
                    <thead>
                        <tr class="section-bio-skills-row section-bio-skills-row1">
                            <th colspan="2">développement</th>
                            <th colspan="2">technique</th>
                        </tr>
                        <tr class="section-bio-skills-row section-bio-skills-row2">
                            <th>Langage</th>
                            <th>Note</th>
                            <th>Environnement</th>
                            <th>Note</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="section-bio-skills-row">
                            <td>HTML</td>
                            <td>
                                <?php 
                                for ($i=1; $i<$languageSkills["HTML"]; $i++) {
                                    echo "★";
                                } ?>
                            </td>
                            <td>Linux</td>
                            <td>
                                <?php 
                                for ($i=1; $i<$environmentSkills["Linux"]; $i++) {
                                    echo "★";
                                } ?>
                            </td>
                        </tr>
                        <tr class="section-bio-skills-row">
                            <td>CSS</td>
                            <td>
                                <?php 
                                for ($i=1; $i<$languageSkills["CSS"]; $i++) {
                                    echo "★";
                                } ?>
                            </td>
                            <td>MacOs</td>
                            <td>
                                <?php 
                                for ($i=1; $i<$environmentSkills["MacOS"]; $i++) {
                                    echo "★";
                                } ?>
                            </td>
                        </tr>
                        <tr class="section-bio-skills-row">
                            <td>PHP</td>
                            <td>
                                <?php 
                                for ($i=1; $i<$languageSkills["PHP"]; $i++) {
                                    echo "★";
                                } ?>
                            </td>
                            <td>Windows</td>
                            <td>
                                <?php 
                                for ($i=1; $i<$environmentSkills["Windows"]; $i++) {
                                    echo "★";
                                } ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </section>

        <section class="section-work" id="section-work">
            <h2>work</h2>
            <div class="section-work-content">

<?php foreach($workPosts as $workPost) { ?>

                <article class="section-work-article">
                    <img class="section-work-article-image" src="./images/<?=$workPost["picture"]?>" alt="<?=$workPost["title"]?>">
                    <h3><?=$workPost["title"]?></h3>
                    <p class="section-work-article-text"><?=$workPost["summary"]?></p>
                    <a class="section-work-article-link" href="<?=$workPost["link"]?>">read more</a>
                </article>

<?php } ?>

            </div>
        </section>

        <section class="section-contact" id="section-contact">
            <h2>contact</h2>
            <div class="section-contact-content">

                <form class="section-contact-form" method="post" action="">

                    <div class="section-contact-form-radio-container">
                        <label for="form-type">Human</label>
                        <input type="radio" name="type" id="form-type">

                        <label for="form-type">Not sure</label>
                        <input type="radio" name="type" id="form-type" checked>

                        <label for="form-type">Robot</label>
                        <input type="radio" name="type" id="form-type">
                    </div>

                    <div class="section-contact-form-input-container">
                        <label for="form-subject">Subject</label>
                        <select class="section-contact-form-input" name="subject" id="form-subject">
                            <option value="">Work</option>
                            <option value="">What?</option>
                            <option value="">Other...</option>
                        </select>
                    </div>

                    <div class="section-contact-form-input-container">
                        <label for="form-nickname">Nickname</label>
                            <input class="section-contact-form-input" type="text" name="nickname" id="form-nickname" placeholder="Your nickname">
                        </label>
                    </div>

                    <div class="section-contact-form-input-container">
                        <label for="form-email">Email address</label>
                            <input class="section-contact-form-input" type="email" name="email" id="form-email" placeholder="Your email">
                        </label>
                    </div>

                    <div class="section-contact-form-input-container">
                        <label for="form-message">Message</label>
                            <textarea class="section-contact-form-input" name="message" id="form-message" placeholder="Your message" rows="8"></textarea>
                        </label>
                    </div>

                    <div class="section-contact-form-buttons-container">
                        <a class="section-contact-form-button" href="#" id="form-button-reset">reset</a>
                        <a class="section-contact-form-button" href="#" id="form-button-send">Send this message!</a>
                    </div>

                </form>

                <div class="section-contact-main-text">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non tempore voluptates fugit modi sed quaerat perferendis dolor! Iusto qui est quibusdam sapiente incidunt. Ducimus non quam quo quisquam ab incidunt?</p>
                </div>
            </div>
        </section>

    </main>

    <footer>
        <p class="footer-text">Samuel Daurt copyright... Lorem ipsum dolor sit amet.</p>
    </footer>
    
</body>
</html>
