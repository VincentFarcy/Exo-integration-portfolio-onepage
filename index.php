<?php 
require("./data/data.php");



// Contact form send management with $_session variable
session_start();
$modalStatus = "hidden";
$arrowUpStatus = "";
if(isset($_SESSION["modal-status"])) {
    $modalStatus = "";
    $arrowUpStatus = "hidden";
    unset($_SESSION["modal-status"]);
}
if(isset($_POST["modal-status"])) {
    echo(1);
    $_SESSION["modal-status"] = $_POST["modal-status"];
    header("location:" . $_SERVER['REQUEST_URI']);
}
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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto&display=swap" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script defer
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script defer type="text/javascript" src="./js/app.js"></script>
</head>
<body>

    <header>

        <nav id="header-nav" class="header-nav">
            <button class="hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
            <ul class="header-nav-item-list">
                <li class="header-nav-item header-nav-item-first"><a class="inactive-link" href="#">home</a></li>
                <li class="header-nav-item"><a class="inactive-link" href="#">hello</a></li>
                <li class="header-nav-item"><a class="inactive-link" href="#">who am i</a></li>
                <li class="header-nav-item"><a class="inactive-link" href="#">what i do</a></li>
                <li class="header-nav-item header-nav-item-last"><a class="inactive-link" href="#">say hi</a></li>
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
                    <a href="#section-work" id="section-intro-button-work" class="button button-style1">see my work</a>
                    <a href="#section-contact" id="section-intro-button-contact" class="button button-style2">contact me</a>
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
                    <a class="section-work-article-link inactive-link" href="#">read more</a>
                </article>

<?php } ?>

            </div>
        </section>

        <section class="section-contact" id="section-contact">
            <h2>contact</h2>
            <div class="section-contact-content">

                <form class="section-contact-form" id="contact-form" method="post" action="">

                    <input type="hidden" id="modal-status" name="modal-status" value="show">

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
                        <select class="section-contact-form-input" name="subject" id="form-subject" required>
                            <option value="">The subject of your message</option>

<?php foreach($contactSubjects as $contactSubject) { ?>
                            <option value="<?=$contactSubject?>"><?=$contactSubject?></option>
<?php } ?>
                        </select>
                    </div>

                    <div class="section-contact-form-input-container">
                        <label for="form-nickname">Nickname</label>
                            <input class="section-contact-form-input" type="text" name="nickname" id="form-nickname" placeholder="Your nickname" required maxlength="256">
                        </label>
                    </div>

                    <div class="section-contact-form-input-container">
                        <label for="form-email">Email address</label>
                            <input class="section-contact-form-input" type="email" name="email" id="form-email" placeholder="Your email" required maxlength="255">
                        </label>
                    </div>

                    <div class="section-contact-form-input-container">
                        <label for="form-message">Message</label>
                            <textarea class="section-contact-form-input" name="message" id="form-message" placeholder="Your message" rows="8" required maxlength="2000"></textarea>
                        </label>
                    </div>

                    <div class="section-contact-form-buttons-container">
                        <button type="reset" class="section-contact-form-button" id="form-button-reset">reset</button>
                        <button type="submit" class="section-contact-form-button" id="form-button-send">Send this message</button>
                    </div>

                </form>

                <div class="section-contact-main-text">
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Non tempore voluptates fugit modi sed quaerat perferendis dolor! Iusto qui est quibusdam sapiente incidunt. Ducimus non quam quo quisquam ab incidunt?</p>
                </div>
            </div>
        </section>

    </main>

    <div id="modal" class="modal <?=$modalStatus?>">
        <div class="modal-container">
            <div class="modal-text-container">
                <p class="modal-text"><?=($modalStatus==="") ? "Message non envoyé (site de présentation)." : ""?></p>
            </div>
            <div class="modal-button-container">
                <button type="button" class="modal-button modal-button-close">Close</button>
            </div>
        </div>
    </div>

    <div id="arrow-up" class="arrow-up <?=$arrowUpStatus?>">
        <a href="#">
            <i class="fa fa-arrow-circle-up"></i>
        </a>
    </div>

    <footer>
        <p class="footer-text">Samuel Daurt copyright... Lorem ipsum dolor sit amet.</p>
    </footer>
    
</body>
</html>
