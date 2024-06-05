<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>David Arias | HOME</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <style>
            @font-face {
                font-family: "MADE Evolve Sans THIN";
                src: url("imgs/fonte/MADE Evolve Sans Thin (PERSONAL USE).otf");
            }

            @font-face {
                font-family: "MADE Evolve Sans Bold";
                src: url("imgs/fonte/MADE Evolve Sans Bold (PERSONAL USE).otf");
            }

            li {
                font-family: "MADE Evolve Sans Bold";
            }

            a,
            span {
                font-family: "MADE Evolve Sans THIN";
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

            .categorias_link {
                width: calc(33.33% - 5px);
                aspect-ratio: 1;
                display: flex;
                justify-content: center;
            }

            /* Estilos para tornar os quadrados responsivos */
            @media (min-width: 640px) {
                .md\:w-1\/2 {
                    width: 50%;
                }
            }

            @media (max-width: 640px) {
                .categoria {
                    width: 100vw !important;
                    height: 100%;
                }

                .categorias_link {
                    width: 95%;
                    margin-bottom: 5px;
                    aspect-ratio: 1;
                }
            }
        </style>
    </head>

    <body class="bg-black">
        <!-- Sidebar -->
        <aside
            class="bg-black text-white h-screen w-64 fixed top-0 left-0 overflow-y-auto z-50 transform -translate-x-full transition-transform duration-300 ease-in-out">
            <ul class="pt-12 pb-12">
                <a href="index.php">
                    <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">HOME</li>
                </a>
                <a href="pages/sobre.php">
                    <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">SOBRE</li>
                </a>
                <a href="pages/residencial.php">
                    <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">RESIDENCIAIS</li>
                </a>
                <a href="pages/comercial.php">
                    <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">COMERCIAIS</li>
                </a>
                <a href="pages/restaurante.php">
                    <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">RESTAURANTES</li>
                </a>
                <a href="pages/praia.php">
                    <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">ARQUITETURA DE PRAIA</li>
                </a>
                <a href="pages/edificio.php">
                    <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">EDIFÍCIOS</li>
                </a>
                <a href="pages/consultorio.php">
                    <li class="cursor-pointer px-6 py-3 hover:bg-gray-800"> CONSULTÓRIOS</li>
                </a>
            </ul>
        </aside>

        <!-- Header -->
        <header class="bg-black py-2 md:py-4 ">
            <div class="container px-4 mx-auto flex items-center justify-between">
                <div class="flex justify-between items-center" style="width: 150px;">
                    <a href="index.php" class="font-bold text-xl text-white" style="width: 150px;"> <img
                            src="imgs/logo_escuro.png" alt=""></a>
                    <!-- Botão do Menu Hamburguer -->
                </div>
                <button
                    class="border border-solid border-gray-600 px-3 py-1 rounded text-gray-600 opacity-50 hover:opacity-75 md:hidden"
                    id="navbar-toggle">
                    <div class="burguer-icon">
                        <div class="burguer-line"></div>
                        <div class="burguer-line"></div>
                        <div class="burguer-line"></div>
                    </div>
                </button>

                <!-- Menu de Navegação -->
                <nav class="p-4 hidden md:w-full md:ml-12 md:flex flex-col md:flex-row mt-3 md:mt-0 justify-between"
                    id="navbar-collapse">
                    <a href="index.php"
                        class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">HOME</a>
                    <a href="pages/residencial.php"
                        class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">RESIDENCIAIS</a>
                    <a href="pages/comercial.php"
                        class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">COMERCIAIS</a>
                    <a href="pages/edificio.php"
                        class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">EDIFÍCIOS</a>
                    <a href="pages/restaurante.php"
                        class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">RESTAURANTES</a>
                    <a href="pages/praia.php"
                        class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">ARQUITETURA
                        DE PRAIA</a>
                    <a href="pages/consultorio.php"
                        class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">CONSULTÓRIOS</a>

                    <a href="pages/sobre.php"
                        class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">SOBRE</a>
                    <a href="pages/localizacao.php"
                        class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">CONTATO</a>
                </nav>
            </div>
        </header>

        <div class="flex flex-col md:flex-row md:flex-wrap items-center md:justify-around">

            <a class="categorias_link" href="pages/residencial.php">
                <div style="width:100%; height:100%; margin-bottom:5px;"
                    class="categoria cursor-pointer bg-blue-500 text-white font-bold text-2xl filter grayscale hover-filter-none">
                    <div class=" h-full flex items-center justify-center"
                        style="background-position: center; background-image: url('imgs/residencial.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center;">

                        RESIDENCIAIS
                    </div>
                </div>
            </a>

            <a class="categorias_link" href="pages/comercial.php">
                <div style="width:100%; height:100%; margin-bottom:5px;"
                    class="categoria cursor-pointer bg-blue-500 text-white font-bold text-2xl filter grayscale hover-filter-none">
                    <div class=" h-full flex items-center justify-center"
                        style="background-position: center; background-image: url('imgs/comercial.png');background-repeat: no-repeat;background-size: cover;">

                        COMERCIAIS
                    </div>
                </div>
            </a>

            <a class="categorias_link" href="pages/edificio.php">
                <div style="width:100%; height:100%; margin-bottom:5px;"
                    class="categoria cursor-pointer bg-blue-500 text-white font-bold text-2xl filter grayscale hover-filter-none">
                    <div class=" h-full flex items-center justify-center"
                        style="background-position: center; background-image: url('imgs/edificios.jpeg');background-repeat: no-repeat;">

                        EDIFÍCIOS
                    </div>
                </div>
            </a>

            <a class="categorias_link" href="pages/restaurante.php">
                <div style="width:100%; height:100%; margin-bottom:5px;"
                    class="categoria cursor-pointer bg-blue-500 text-white font-bold text-2xl filter grayscale hover-filter-none">
                    <div class=" h-full flex items-center justify-center"
                        style="background-position: center; background-image: url('imgs/restaurantes.png');background-repeat: no-repeat;background-size: cover; background-position: center;">

                        RESTAURANTES
                    </div>
                </div>
            </a>

            <a class="categorias_link" href="pages/praia.php">
                <div style="width:100%; height:100%; margin-bottom:5px;"
                    class="categoria cursor-pointer bg-blue-500 text-white font-bold text-2xl filter grayscale hover-filter-none">
                    <div class=" h-full flex items-center justify-center"
                        style="background-position: center; background-image: url('imgs/praia.png');background-repeat: no-repeat;background-size: cover; background-position: center;">

                        ARQUITETURA DE PRAIA

                    </div>
                </div>
            </a>


            <a class="categorias_link" href="pages/consultorio.php">
                <div style="width:100%; height:100%; margin-bottom:5px;"
                    class="categoria cursor-pointer bg-blue-500 text-white font-bold text-2xl filter grayscale hover-filter-none">
                    <div class=" h-full flex items-center justify-center"
                        style="background-position: center; background-image: url('imgs/consultorios.png');background-repeat: no-repeat;">

                        CONSULTÓRIOS
                    </div>
                </div>
            </a>
        </div>
        <script>
            const navbarToggle = document.getElementById('navbar-toggle');
            const sidebar = document.querySelector('aside');

            navbarToggle.addEventListener('click', () => {
                sidebar.classList.toggle('-translate-x-full');
            });
        </script>

        <a href="https://wa.me/5511978972557" target="_blank" class="whatsapp-button">
            <img src="imgs/icons/whatsapp.png" alt="WhatsApp Icon">
        </a>

        <!--Footer container-->

        <footer
            class="flex flex-col items-center bg-zinc-50 text-center text-surface dark:bg-neutral-700 dark:text-white">
            <div class="container pt-4 flex items-center flex-col">
                <a href="index.php" class=" font-bold text-xl text-white" style="width: 150px;">
                    <img src="imgs/logo_escuro.png" alt=""></a>

                <div class="mb-2 flex justify-center space-x-2">
                    <div class="container flex justify-center">
                        <a href="https://www.instagram.com/davidarias_arquitetura?igsh=MXU5Nnc2amd4eDQ4dA==">
                            <img class="w-6 m-2 cursor-pointer" style="border-radius:10px;"
                                src=" imgs/icons/Instagram_icon.png" alt="Instagram_icon">
                        </a>
                        <a href="https://www.facebook.com/profile.php?id=61557941677855&mibextid=kFxxJD"><img
                                class="w-6 m-2 cursor-pointer" style="border-radius:10px;"
                                src=" imgs/icons/facebook.jpg" alt="facebook_icon">
                        </a>
                    </div>
                </div>
                <div class="mb-2 flex justify-center space-x-2">
                    <div class="container flex justify-center">
                        <span class="text-white"> Rua Padre João Manuel, 235, Cj 63 - Jardim Paulista, São Paulo -
                            SP</span>
                    </div>
                </div>

                <div class="mb-2 flex justify-center space-x-2">
                    <div class="container flex justify-center">
                        <span class="text-white"> 11 5689-8741 | 11 94578-8956 |
                            contato@davidariasarquitetura.com</span>


                    </div>
                </div>
            </div>

            <!--Copyright section-->
            <div class="text-white w-full bg-black/5 p-4 pt-0 text-center">
                © 2024 Copyright:
                <a href="https://tw-elements.com/">David Arias - Arquitetura</a>
            </div>
        </footer>
    </body>