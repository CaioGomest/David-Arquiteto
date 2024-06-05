<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>David Arias | CONTATO</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <style>
            @font-face {
                font-family: "MADE Evolve Sans THIN";
                src: url("../imgs/fonte/MADE Evolve Sans Thin (PERSONAL USE).otf");
            }

            @font-face {
                font-family: "MADE Evolve Sans Bold";
                src: url("../imgs/fonte/MADE Evolve Sans Bold (PERSONAL USE).otf");
            }

            * {
                font-family: "MADE Evolve Sans THIN";
            }

            li {
                font-family: "MADE Evolve Sans Bold";
            }




            /* Estilos adicionais, se necessário */


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

        <div class="w-full" style="position:relative; filter: grayscale(1);">
            <iframe class="w-full h-screen"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.2148706902176!2d-46.66324892571364!3d-23.56072516156676!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce59cd8b1169f3%3A0x712b9ae970b5afaa!2sR.%20Padre%20Jo%C3%A3o%20Manuel%2C%20235%20-%20cj.%2063%20-%20Jardins%2C%20S%C3%A3o%20Paulo%20-%20SP%2C%2001411-001!5e0!3m2!1spt-BR!2sbr!4v1713752511709!5m2!1spt-BR!2sbr"
                style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>

            <div class="flex justify-center h-auto w-4/5 md:w-96 bg-black absolute text-white p-6 grid grid-cols-1 "
                style="top:50%; left:50%; transform:translate(-50%, -50%); z-index:9999;">
                <img src="../imgs/logo_escuro.png" alt="">
                <h3 class="text-center">11 98945-0772</h3>
                <h3 class="text-center w-full">Rua Padre João Manuel, 235, Cj 63 - Jardim Paulista, São Paulo - SP</h3>
                <h3 class="text-center w-full">contato@davidariasarquitetura.com</h3>
                <div class="container flex justify-center">
                    <a href="https://www.instagram.com/davidarias_arquitetura?igsh=MXU5Nnc2amd4eDQ4dA=="
                        class="flex items-center">
                        <img class="w-6 m-2 cursor-pointer" style="border-radius:10px;"
                            src=" ../imgs/icons/Instagram_icon.png" alt="Instagram_icon">
                    </a>

                    <a href="https://www.facebook.com/profile.php?id=61557941677855&mibextid=kFxxJD"
                        class="flex items-center"><img class="w-6 m-2 cursor-pointer" style="border-radius:10px;"
                            src=" ../imgs/icons/facebook.jpg" alt="facebook_icon">
                    </a>
                    <a href="https://wa.me/5511978972557" class="flex items-center">
                        <img class="w-6 m-2 cursor-pointer" style="border-radius:10px;"
                            src=" ../imgs/icons/whatsapp.png" alt="Instagram_icon">
                    </a>
                </div>
            </div>
        </div>
        <script>
            const navbarToggle = document.getElementById('navbar-toggle');
            const sidebar = document.querySelector('aside');

            navbarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
            });

            $(document).ready(function () {
                // Adicionar evento de clique aos elementos com a classe 'ir_carrossel'
                $('.ir_carrossel').click(function () {
                    // Obter o caminho da pasta do atributo 'caminho_pasta'
                    var caminhoPasta = $(this).attr('caminho_pasta');

                    // Redirecionar para 'carrosel.php' com o parâmetro 'caminho_pasta'
                    window.location.href = 'carrosel.php?data=' + encodeURIComponent(caminhoPasta);
                });
            });
        </script>

        <a href="https://wa.me/5511978972557" target="_blank" class="whatsapp-button">
            <img src="../imgs/icons/whatsapp.png" alt="WhatsApp Icon">
        </a>
    </body>