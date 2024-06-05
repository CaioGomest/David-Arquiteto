<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>David Arias | SOBRE</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style>
            /* Estilos adicionais, se necessário */

            @font-face {
                font-family: "MADE Evolve Sans THIN";
                src: url("../imgs/fonte/MADE Evolve Sans Thin (PERSONAL USE).otf");
            }

            @font-face {
                font-family: "MADE Evolve Sans Bold";
                src: url("../imgs/fonte/MADE Evolve Sans Bold (PERSONAL USE).otf");
            }

            li {
                font-family: "MADE Evolve Sans Bold";
            }

            a,
            span {
                font-family: "MADE Evolve Sans THIN";
            }



            .whatsapp-button {
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 60px;
                height: 60px;
                background-color: grey;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 999;
                transition: opacity 0.3s ease;
            }

            .whatsapp-button img {
                width: 50%;
                height: auto;
            }

            @media screen and (max-width: 767px) {
                .whatsapp-button {
                    width: 50px;
                    height: 50px;
                    bottom: 30px;
                    right: 15px;
                }

                .whatsapp-button img {
                    width: 60%;
                }
            }

            .hover-filter-none:hover {
                filter: none;
            }

            .hover-filter-none {
                transition: filter 0.3s ease;
            }

            .burguer-icon {
                width: 25px;
                height: 25px;
                position: relative;
            }

            .burguer-line {
                width: 100%;
                height: 3px;
                background-color: #ffffff;
                /* Cor das linhas */
                position: absolute;
                transition: transform 0.3s ease;
            }

            .burguer-line:nth-child(1) {
                top: 0;
            }

            .burguer-line:nth-child(2) {
                top: 50%;
                transform: translateY(-50%);
            }

            .burguer-line:nth-child(3) {
                bottom: 0;
            }

            #navbar-toggle {
                border: none;
            }


            /* Estilos para tornar os quadrados responsivos */
            @media (min-width: 640px) {
                .md\:w-1\/2 {
                    width: 50%;
                }
            }
        </style>
    </head>

    <body class="bg-black">
        <!-- Sidebar -->

        <!-- Header -->
        <?php
        require "header.php";
        ?>

        <div class="flex flex-col md:flex-row justify-center md:p-10 items-center">
            <img src="../imgs/sobre.png" alt="david.png">

        </div>
        <script>
            const navbarToggle = document.getElementById('navbar-toggle');
            const sidebar = document.querySelector('aside');

            navbarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
            });

        </script>

        <a href="https://wa.me/5511978972557" target="_blank" class="whatsapp-button">
            <img src="../imgs/icons/whatsapp.png" alt="WhatsApp Icon">
        </a>

        <!--Footer container-->

        <?php
        require "footer.php";
        ?>
    </body>