<?php 
require("./data/data.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
</head>
<body>

    <header>
        <nav class="header-nav">
            <ul class="header-nav-item-list">
                <li class="header-nav-item header-nav-item-first">home</li>
                <li class="header-nav-item">hello</li>
                <li class="header-nav-item">who am i</li>
                <li class="header-nav-item">what i do</li>
                <li class="header-nav-item header-nav-item-last">say hi</li>
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
                    <div class="button button-work">see my work</div>
                    <div class="button button-contact">contact me</div>
                </div>
            </div>
        </section>

        <section class="section-bio">
            <h2>bio</h2>
            <div class="section-bio-content">
                <img class="section-bio-main-image" src="./images/looking.jpg" alt="un regard">
                <p class="section-bio-main-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolorem laborum porro quidem in officiis aperiam repellat ea eum molestiae.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim dolorem laborum porro quidem in officiis aperiam repellat ea eum molestiae.</p>
                <div class="section-bio-skills-container">
                    <div class="section-bio-skills-row section-bio-skills-row1">
                        <div>développement</div>
                        <div>technique</div>
                    </div>
                    <div class="section-bio-skills-row section-bio-skills-row2">
                        <div>Langage</div>
                        <div>Note</div>
                        <div>Environnement</div>
                        <div>Note</div>
                    </div>
                    <div class="section-bio-skills-row">
                        <div>HTML</div>
                        <div>étoiles</div>
                        <div>Linux</div>
                        <div>étoiles</div>
                    </div>
                    <div class="section-bio-skills-row">
                        <div>CSS</div>
                        <div>étoiles</div>
                        <div>MacOs</div>
                        <div>étoiles</div>
                    </div>
                    <div class="section-bio-skills-row">
                        <div>PHP</div>
                        <div>étoiles</div>
                        <div>Windows</div>
                        <div>étoiles</div>
                        </div>
                </div>
            </div>
        </section>

        <section class="section-work">
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

        <section class="section-contact">
            <h2>contact</h2>
            <div class="section-contact-content">

                <form class="section-contact-form" method="post" action="">

                    <div class="section-contact-form-radio">
                        <label for="form-type">Human</label>
                        <input type="radio" name="type" id="form-type">

                        <label for="form-type">Not sure</label>
                        <input type="radio" name="type" id="form-type">

                        <label for="form-type">Robot</label>
                        <input type="radio" name="type" id="form-type">
                    </div>

                    <div>
                        <label for="form-subject"></label>
                        <select class="section-contact-form-input" name="subject" id="form-subject">
                            <option value="">work</option>
                            <option value="">what</option>
                            <option value="">other</option>
                        </select>
                    </div>

                    <div>
                        <label for="form-nickname"></label>
                            <input class="section-contact-form-input" type="text" name="nickname" id="form-nickname">
                        </label>
                    </div>

                    <div>
                        <label for="form-email"></label>
                            <input class="section-contact-form-input" type="email" name="email" id="form-email">
                        </label>
                    </div>

                    <div>
                        <label for="form-message"></label>
                            <textarea class="section-contact-form-input" name="message" id="form-message"></textarea>
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
