<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>David Arias</title>
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

            li {
                font-family: "MADE Evolve Sans THIN";
            }

            h1 {
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


            /* Estilos para tornar os quadrados responsivos */
            @media (min-width: 640px) {
                .md\:w-1\/2 {
                    width: 50%;
                }
            }

            .carousel {
                height: 400px;
            }

            .carousel img {
                height: 400px;
                object-fit: contain;
            }

            .carousel-open:checked+.carousel-item {
                position: static;
                opacity: 100;
            }

            .carousel-item {
                -webkit-transition: opacity 0.6s ease-out;
                transition: opacity 0.6s ease-out;
            }

            #carousel-1:checked~.control-1,
            #carousel-2:checked~.control-2,
            #carousel-3:checked~.control-3 {
                display: block;
            }

            .carousel-indicators {
                list-style: none;
                margin: 0;
                padding: 0;
                position: absolute;
                bottom: 2%;
                left: 0;
                right: 0;
                text-align: center;
                z-index: 10;
            }

            #carousel-1:checked~.control-1~.carousel-indicators li:nth-child(1) .carousel-bullet,
            #carousel-2:checked~.control-2~.carousel-indicators li:nth-child(2) .carousel-bullet,
            #carousel-3:checked~.control-3~.carousel-indicators li:nth-child(3) .carousel-bullet {
                color: #ffb317;
                /*Set to match the Tailwind colour you want the active one to be */
            }
        </style>
    </head>

    <body class="bg-black">
        <!-- Sidebar -->

        <!-- Header -->
        <?php
        require "header.php";
        ?>
        <div class="flex flex-col md:flex-row ">
            <div class="imgDecoracao">
                <?php
                $caminho_para_fotos = $_REQUEST['data'];

                // Verifica se é um diretório
                if (is_dir($caminho_para_fotos)) {
                    // Obtém todos os arquivos dentro do diretório, excluindo '.' e '..'
                    $files = array_diff(scandir($caminho_para_fotos), array('..', '.'));

                    // Filtra apenas os arquivos de imagem
                    $imagens = array_filter($files, function ($file) {
                        // Obtém a extensão do arquivo
                        $extensao = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                        // Verifica se a extensão está entre as extensões de imagem permitidas
                        $extensoes_permitidas = array ('jpg', 'jpeg', 'png', 'gif');
                        return in_array($extensao, $extensoes_permitidas);
                    });

                    // Verifica se há imagens no diretório
                    if (!empty($imagens)) {
                        echo '<div class="carousel" id="carousel_all_images">'; // Criando um único carrossel para todas as imagens
                        echo '<div class="carousel-container">';

                        // Exibe todas as imagens
                        foreach ($imagens as $imagem) {
                            echo '<img src="' . $caminho_para_fotos . "/" . $imagem . '" alt="' . basename($imagem) . '">';
                        }

                        echo '</div>'; // Fim do carousel-container
                
                        // Botões de navegação
                        if (count($imagens) >= 2) {
                            echo '<button class="prevBtn" data-carousel-id="carousel_all_images">❮</button>';
                            echo '<button class="nextBtn" style="right: 0" data-carousel-id="carousel_all_images">❯</button>';
                        }

                        echo '</div>'; // Fim do carousel
                    } else {
                        echo json_encode(array('erro' => 'O diretório não contém imagens.'));
                    }
                } else {
                    echo json_encode(array('erro' => 'Não é um diretório válido.'));
                }
                ?>


            </div>

            <script>
                // Adiciona event listeners para os botões de navegação
                document.querySelectorAll('.prevBtn').forEach(btn => {
                    btn.addEventListener('click', function () {
                        const carouselId = this.getAttribute('data-carousel-id');
                        prevSlide(carouselId);
                    });
                });

                document.querySelectorAll('.nextBtn').forEach(btn => {
                    btn.addEventListener('click', function () {
                        const carouselId = this.getAttribute('data-carousel-id');
                        nextSlide(carouselId);
                    });
                });

                function nextSlide(carouselId) {
                    const carousel = document.getElementById(carouselId);
                    const slides = carousel.querySelectorAll('.carousel-container img');
                    const currentIndex = Array.from(slides).findIndex(slide => slide.style.display === 'block');
                    const nextIndex = (currentIndex + 1) % slides.length;
                    showSlide(carouselId, nextIndex);
                }

                function prevSlide(carouselId) {
                    const carousel = document.getElementById(carouselId);
                    const slides = carousel.querySelectorAll('.carousel-container img');
                    const currentIndex = Array.from(slides).findIndex(slide => slide.style.display === 'block');
                    const prevIndex = (currentIndex - 1 + slides.length) % slides.length;
                    showSlide(carouselId, prevIndex);
                }

                function showSlide(carouselId, index) {
                    const carousel = document.getElementById(carouselId);
                    const slides = carousel.querySelectorAll('.carousel-container img');

                    if (slides.length === 0) return;

                    for (let i = 0; i < slides.length; i++) {
                        slides[i].style.display = i === index ? 'block' : 'none';
                    }
                }

                // Adiciona esta linha para exibir o primeiro slide quando o carrossel é criado
                document.querySelectorAll('.carousel').forEach(carousel => showSlide(carousel.id, 0));

            </script>

            <style>
                /*carrossel-----------------*/
                .imgDecoracao {
                    width: 70%;
                }

                @media screen and (max-width: 800px) {
                    .imgDecoracao {
                        width: 100%;
                    }
                }


                .carousel {
                    margin: auto;
                    position: relative;
                    /* Adicionado */
                    overflow: hidden;
                    border-radius: 15px;
                    margin: 20px;
                    display: flex;
                    flex-direction: column;
                    justify-content: center;
                }


                .carousel-container {
                    width: 100%;
                    transition: transform 0.5s ease;
                    /* Mantém a transição para suavizar as mudanças de imagem */
                }

                .carousel img {
                    width: 100%;
                }

                .prevBtn,
                .nextBtn {
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    font-size: 20px;
                    background: none;
                    border: 1px solid black;
                    cursor: pointer;
                    background-color: white;
                    right: 0px;
                    width: 40px;
                    height: 40px;
                    border-radius: 20px;
                    outline: none;
                }

                /* Adicionando position: relative; para os botões de navegação */
                .prevBtn {
                    left: 0;
                }

                .prevBtn:hover,
                .nextBtn:hover {
                    background-color: rgb(160, 158, 158);
                }



                .carousel-titulo {
                    color: white;
                    z-index: 99;
                    position: absolute;
                    bottom: 0;
                    width: 100%;
                    background: #Ec0057;
                    padding: 10px;
                    font-size: 1.4em;
                    font-weight: 600;
                }
            </style>
































































            <?php
            $arquivos = scandir($caminho_para_fotos);
            // Caminho para o arquivo de texto
            $arquivoTxt = $caminho_para_fotos . '/texto.txt';

            // Verifica se o arquivo existe
            if (file_exists($arquivoTxt)) {
                // Lê o conteúdo do arquivo de texto
                $conteudo = file_get_contents($arquivoTxt);

                // Separa o conteúdo em linhas
                $linhas = explode("\n", $conteudo);

                // Verifica se há pelo menos 6 linhas (título, tipo, país, cidade, bairro e área)
                if (count($linhas) >= 6) {
                    // Pega cada informação
                    $titulo = $linhas[0];
                    $tipo = $linhas[1];
                    $pais = $linhas[2];
                    $cidade = $linhas[3];
                    $bairro = $linhas[4];
                    $area = $linhas[5];

                    // Constrói o HTML usando as informações
                    echo '<div class="p-4">';
                    echo '<h1 style="font-family: \'MADE Evolve Sans BOLD\';" class="text-3xl text-white">' . htmlspecialchars($titulo) . '</h1>'; // Título do projeto com fonte maior
                    echo '<ul>';
                    echo '<li style="font-family: \'MADE Evolve Sans THIN\';" class="text-white"> ' . htmlspecialchars($tipo) . '</li>';
                    echo '<li style="font-family: \'MADE Evolve Sans THIN\';" class="text-white"> ' . htmlspecialchars($pais) . '</li>';
                    echo '<li style="font-family: \'MADE Evolve Sans THIN\';" class="text-white"> ' . htmlspecialchars($cidade) . '</li>';
                    echo '<li style="font-family: \'MADE Evolve Sans THIN\';" class="text-white"> ' . htmlspecialchars($bairro) . '</li>';
                    echo '<li style="font-family: \'MADE Evolve Sans THIN\';" class="text-white"> ' . htmlspecialchars($area) . '</li>';
                    echo '</ul>';
                    echo '</div>';
                } else {
                    echo '<div class="text-white" >Sem Descrição...</div>';
                }
            } else {
                echo '<div class="text-white" >O arquivo de texto não existe.</div>';
            }
            ?>

        </div>

        <script>
            // Captura todos os controles de navegação e slides
            const prevButtons = document.querySelectorAll('.prev');
            const nextButtons = document.querySelectorAll('.next');
            const slides = document.querySelectorAll('.carousel-item');

            // Adiciona os eventos de clique para os controles de navegação
            prevButtons.forEach((prevButton, index) => {
                prevButton.addEventListener('click', () => {
                    index = moveSlide(index, -1);
                });
            });

            nextButtons.forEach((nextButton, index) => {
                nextButton.addEventListener('click', () => {
                    index = moveSlide(index, 1);
                });
            });

            // Função para mover o slide
            function moveSlide(index, offset) {
                const currentSlide = slides[index];
                const newIndex = (index + offset + slides.length) % slides.length;
                const newSlide = slides[newIndex];

                // Remove a classe 'opacity-0' do novo slide e adiciona à transição
                newSlide.classList.remove('opacity-0');
                newSlide.style.transition = 'opacity 0s';
                setTimeout(() => {
                    newSlide.style.transition = 'opacity 0.5s';
                }, 50);

                // Adiciona a classe 'opacity-0' ao slide atual
                currentSlide.classList.add('opacity-0');

                // Retorna o novo índice do slide
                return newIndex;
            }
        </script>

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
    </body>