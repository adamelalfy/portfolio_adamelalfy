<?php
include "class/gbi_portfolio.class.php";
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-38GWJ17S4J"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-38GWJ17S4J');
    </script>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Adam El Alfy</title>

    <link rel="stylesheet" href="styles/main.css" />

    <script src="scripts/main.js" defer></script>
</head>



<body>
    <!-- Header -->
    <header class="header" data-component="Header">
        <div class="wrapper">
            <a href="index.html" class="logo">
                <svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 58 58">
                    <path />
                </svg>

            </a>
            <nav class="nav-primary">
                <ul>
                    <li><a href="a-propos.html" class="nav-primary__item">À propos</a></li>
                    <li><a href="index.html#projets" class="nav-primary__item js-toggle">Projets</a></li>
                    <li><a href="contact.php" class="nav-primary__item">Contact</a></li>
                </ul>
            </nav>
            <button class="header__toggle js-toggle">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </header>

    <section class="hero__contact">
        <div class="wrapper">
            <h1>Contact</h1>
        </div>
    </section>
    <div class="contact__grid">
        <section class="formulaire">
            <div class="wrapper">
                <h3>Formulaire</h3>
                <?php
                if (isset($_GET["action"]) && (!empty($_GET["action"]))) {
                    $action = $_GET["action"];

                    if ($action === 'send') {

                        // Créer une instance de l'objet tim_form
                        $reservation = new tim_form();

                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

                            // Assigner les valeurs du $_POST à l'objet
                            $reservation->assignPostVariables();

                            $to = $reservation->tim_form_courriel;
                            $cc = tim_form::COURRIEL_CC;
                            $bcc = NULL;

                            $subject = "contact -  {$reservation->tim_form_nom} ";

                            $reservation->envoyerEmail($to, $cc, $bcc, $subject);
                            $tim_form_html = $reservation->afficherHTML();

                            echo $tim_form_html;
                        }
                    }
                } else {

                ?>
                    <form action="contact.php?action=send" class="form" data-component="Form" method="post">
                        <div class="form__body">
                            <fieldset class="form__grid">
                                <!-- prenom -->
                                <div class="input form__grid__full">
                                    <label class="input__label" for="nom">Prénom et Nom</label>
                                    <input class="input__element" type="text" name="tim_form_nom" id="nom" placeholder="ex.: Adam El Alfy" required />
                                    <p class="input__error">Veuillez entrer un prénom valide.</p>
                                </div>

                                <!-- courriel -->
                                <div class="input form__grid__full">
                                    <label class="input__label" for="email">Adresse courriel</label>
                                    <input class="input__element" type="email" name="tim_form_courriel" id="email" placeholder="ex.: courriel.exemple@yahoo.com" required />
                                    <p class="input__error">Veuillez entrer une adresse courriel valide.</p>
                                </div>

                                <!-- commentaires -->
                                <div class="input textarea form__grid__full">
                                    <label for="comment" class="input__label">Commentaires</label>
                                    <textarea class="input__element" name="tim_form_commentaires" id="comment" placeholder="Écrivez vos commentaires ici..." maxlength="500" required></textarea>
                                    <p class="input__error">Veuillez écrire vos commentaires.</p>
                                </div>

                                <footer class="form__footer">
                                    <button class="button">Envoyer</button>
                                </footer>
                            </fieldset>
                        </div>
                        <div class="form__confirmation">
                            <h3 style="color: green">Merci!</h3>
                            <p>Votre formulaire a bien été envoyé.</p>
                        </div>
                    </form>
                <?php
                }
                ?>
            </div>
        </section>
        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="835" viewBox="0 0 12 835" fill="none" class="contact__separator">
            <path d="M6 834.773L11.7735 829L6 823.227L0.226497 829L6 834.773ZM6 0L5 0L5 829H6H7L7 0L6 0Z" fill="#FCFCFF" />
        </svg>
        <section class="infos__contact">
            <div class="wrapper">
                <h3>Mes infos</h3>
                <a class="email" href="mailto:adamelalfy06@gmail.com" target="_blank"><span>adamelalfy06@gmail.com</span></a>
                <a class="num-tel" href="tel:+15148631312" target="_blank"><span>(514) 863-1312</span></a>
                <!-- <button class="button"><span>curriculum vitae</span></button> -->
                <a href="https://en.wikipedia.org/wiki/Curriculum_vitae" class="email"><span>Curriculum Vitae</span></a>
                <div class="socials">
                    <!-- linkedin -->
                    <a href="https://linkedin.com/in/adam-el-alfy" class="socials__icon" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86" fill="none">
                            <g clip-path="url(#clip0_7557_108)">
                                <path d="M0 0V86H86V0H0ZM30.9734 60.9895H22.5918V34.1648H30.9734V60.9895ZM26.5559 30.8055H26.4887C23.4484 30.8055 21.4832 28.7563 21.4832 26.1527C21.4832 23.4988 23.5156 21.5 26.6062 21.5C29.6969 21.5 31.5949 23.4988 31.6621 26.1527C31.6789 28.7395 29.7137 30.8055 26.5559 30.8055ZM64.5 60.9895H54.993V47.1152C54.993 43.4871 53.5148 41.0012 50.2395 41.0012C47.7367 41.0012 46.3426 42.6809 45.7043 44.2934C45.4691 44.8645 45.5027 45.6707 45.5027 46.4937V60.9895H36.0797C36.0797 60.9895 36.1973 36.3988 36.0797 34.1648H45.5027V38.3809C46.057 36.5332 49.0637 33.9129 53.8676 33.9129C59.8305 33.9129 64.5 37.7762 64.5 46.0738V60.9895Z" fill="#FCFCFF" />
                            </g>
                            <defs>
                                <clipPath id="clip0_7557_108">
                                    <rect width="86" height="86" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <!-- github -->
                    <a href="https://github.com/adamelalfy" class="socials__icon" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86" fill="none">
                            <path d="M86 0V86H55.0033C55.0033 84.5553 55.0576 77.3316 55.0576 71.4385C55.1686 69.9436 54.9585 68.4422 54.4414 67.0352C53.9242 65.6281 53.1121 64.348 52.0595 63.2807C61.8794 62.1835 72.1881 58.4631 72.1881 41.5281C72.2548 37.1509 70.6325 32.9163 67.6583 29.7041C69.0023 25.9029 68.845 21.7321 67.2184 18.0429C67.2184 18.0429 63.5251 16.8589 55.1065 22.5618C47.8839 20.5819 40.2615 20.5819 33.0389 22.5618C24.6203 16.8589 20.927 18.0429 20.927 18.0429C19.3044 21.7333 19.149 25.9032 20.4925 29.7041C17.5202 32.9178 15.8965 37.151 15.9573 41.5281C15.9573 58.4196 26.2443 62.1998 36.0316 63.3132C34.4273 64.8803 33.4337 66.9676 33.229 69.2008C32.1484 69.8099 30.9577 70.1984 29.7258 70.3439C28.494 70.4894 27.2455 70.389 26.0528 70.0485C24.86 69.708 23.7467 69.1342 22.7773 68.3603C21.808 67.5864 21.0018 66.6278 20.4056 65.5401C19.6999 64.3195 18.725 63.276 17.555 62.4892C16.3851 61.7023 15.051 61.1928 13.6544 60.9995C13.6544 60.9995 9.34735 60.9452 13.3503 63.6826C15.6975 65.1786 17.4315 67.4656 18.2385 70.1296C18.2385 70.1296 20.8347 78.7003 33.0932 76.0389C33.1149 79.7105 33.1475 84.9463 33.1475 86H0V0H86Z" fill="#FCFCFF" />
                        </svg>
                    </a>

                    <!-- youtube -->
                    <a href="https://www.youtube.com/channel/UCyJUFXiGKVB75-n4p2NvTcg" class="socials__icon" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" width="87" height="86" viewBox="0 0 87 86" fill="none">
                            <path d="M37.7056 51.2811L51.945 43.017L37.7056 34.7529V51.2811Z" fill="#FCFCFF" />
                            <path d="M0 0V86H87V0H0ZM65.25 50.693C65.25 58.1004 57.7564 58.1004 57.7564 58.1004H29.2436C21.75 58.1004 21.75 50.693 21.75 50.693V35.3238C21.75 27.9164 29.2436 27.9164 29.2436 27.9164H57.7564C65.25 27.9164 65.25 35.3238 65.25 35.3238V50.693Z" fill="#FCFCFF" />
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </div>
    <footer class="footer">
        <div class="wrapper">
            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="278" viewBox="0 0 12 278" fill="none">
                <path d="M5.94154 277.773L11.7163 272.001L5.94397 266.226L0.169253 271.999L5.94154 277.773ZM6 0L5 -0.000210457L4.94276 272L5.94276 272L6.94276 272L7 0.000210457L6 0Z" fill="#FCFCFF" />
            </svg>
            <div class="footer__info">
                <div class="footer__buttons">
                    <div class="socials">
                        <!-- linkedin -->
                        <a href="https://linkedin.com/in/adam-el-alfy" class="socials__icon" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86" fill="none">
                                <g clip-path="url(#clip0_7557_108)">
                                    <path d="M0 0V86H86V0H0ZM30.9734 60.9895H22.5918V34.1648H30.9734V60.9895ZM26.5559 30.8055H26.4887C23.4484 30.8055 21.4832 28.7563 21.4832 26.1527C21.4832 23.4988 23.5156 21.5 26.6062 21.5C29.6969 21.5 31.5949 23.4988 31.6621 26.1527C31.6789 28.7395 29.7137 30.8055 26.5559 30.8055ZM64.5 60.9895H54.993V47.1152C54.993 43.4871 53.5148 41.0012 50.2395 41.0012C47.7367 41.0012 46.3426 42.6809 45.7043 44.2934C45.4691 44.8645 45.5027 45.6707 45.5027 46.4937V60.9895H36.0797C36.0797 60.9895 36.1973 36.3988 36.0797 34.1648H45.5027V38.3809C46.057 36.5332 49.0637 33.9129 53.8676 33.9129C59.8305 33.9129 64.5 37.7762 64.5 46.0738V60.9895Z" fill="#FCFCFF" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_7557_108">
                                        <rect width="86" height="86" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <!-- github -->
                        <a href="https://github.com/adamelalfy" class="socials__icon" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="86" height="86" viewBox="0 0 86 86" fill="none">
                                <path d="M86 0V86H55.0033C55.0033 84.5553 55.0576 77.3316 55.0576 71.4385C55.1686 69.9436 54.9585 68.4422 54.4414 67.0352C53.9242 65.6281 53.1121 64.348 52.0595 63.2807C61.8794 62.1835 72.1881 58.4631 72.1881 41.5281C72.2548 37.1509 70.6325 32.9163 67.6583 29.7041C69.0023 25.9029 68.845 21.7321 67.2184 18.0429C67.2184 18.0429 63.5251 16.8589 55.1065 22.5618C47.8839 20.5819 40.2615 20.5819 33.0389 22.5618C24.6203 16.8589 20.927 18.0429 20.927 18.0429C19.3044 21.7333 19.149 25.9032 20.4925 29.7041C17.5202 32.9178 15.8965 37.151 15.9573 41.5281C15.9573 58.4196 26.2443 62.1998 36.0316 63.3132C34.4273 64.8803 33.4337 66.9676 33.229 69.2008C32.1484 69.8099 30.9577 70.1984 29.7258 70.3439C28.494 70.4894 27.2455 70.389 26.0528 70.0485C24.86 69.708 23.7467 69.1342 22.7773 68.3603C21.808 67.5864 21.0018 66.6278 20.4056 65.5401C19.6999 64.3195 18.725 63.276 17.555 62.4892C16.3851 61.7023 15.051 61.1928 13.6544 60.9995C13.6544 60.9995 9.34735 60.9452 13.3503 63.6826C15.6975 65.1786 17.4315 67.4656 18.2385 70.1296C18.2385 70.1296 20.8347 78.7003 33.0932 76.0389C33.1149 79.7105 33.1475 84.9463 33.1475 86H0V0H86Z" fill="#FCFCFF" />
                            </svg>
                        </a>

                        <!-- youtube -->
                        <a href="https://www.youtube.com/channel/UCyJUFXiGKVB75-n4p2NvTcg" class="socials__icon" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="87" height="86" viewBox="0 0 87 86" fill="none">
                                <path d="M37.7056 51.2811L51.945 43.017L37.7056 34.7529V51.2811Z" fill="#FCFCFF" />
                                <path d="M0 0V86H87V0H0ZM65.25 50.693C65.25 58.1004 57.7564 58.1004 57.7564 58.1004H29.2436C21.75 58.1004 21.75 50.693 21.75 50.693V35.3238C21.75 27.9164 29.2436 27.9164 29.2436 27.9164H57.7564C65.25 27.9164 65.25 35.3238 65.25 35.3238V50.693Z" fill="#FCFCFF" />
                            </svg>
                        </a>
                    </div>
                    <a href="contact.php" class="button"><span>Contact</span></a>
                </div>
                <a class="email" href="mailto:adamelalfy06@gmail.com" target="_blank"><span>adamelalfy06@gmail.com</span></a>
            </div>
        </div>
        <div class="copyright__wrapper">
            <p>Adam El Alfy © Tous droits réservés 2025.</p>
        </div>
    </footer>
</body>

</html>
