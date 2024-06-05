<aside
    class="bg-black text-white h-screen w-64 fixed top-0 left-0 overflow-y-auto z-50 transform -translate-x-full transition-transform duration-300 ease-in-out">
    <ul class="pt-12 pb-12">
        <a href="../index.php">
            <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">HOME</li>
        </a>
        <a href="residencial.php">
            <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">RESIDENCIAIS</li>
        </a>
        <a href="comercial.php">
            <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">COMERCIAIS</li>
        </a>
        <a href="restaurante.php">
            <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">RESTAURANTES</li>
        </a>
        <a href="praia.php">
            <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">ARQUITETURA DE PRAIA</li>
        </a>
        <a href="edificio.php">
            <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">EDIFÍCIOS</li>
        </a>
        <a href="consultorio.php">
            <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">CONSULTÓRIOS</li>
        </a>
        <a href="sobre.php">
            <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">SOBRE</li>
        </a>
        <a href="localizacao.php">
            <li class="cursor-pointer px-6 py-3 hover:bg-gray-800">CONTATO</li>
        </a>
    </ul>
</aside>

<header class="bg-black py-2 md:py-4 ">
    <div class="container px-4 mx-auto flex items-center justify-between">
        <div class="flex justify-between items-center" style="width: 150px;">
            <a href="../index.php" class="font-bold text-xl text-white" style="width: 150px;"> <img
                    src="../imgs/logo_escuro.png" alt=""></a>
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
        <nav class="p-4 hidden md:flex flex-col md:flex-row md:ml-12 md:w-full mt-3 md:mt-0 justify-between"
            id="navbar-collapse">
            <a href="../index.php"
                class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">HOME</a>

            <a href="residencial.php"
                class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">RESIDENCIAIS</a>
            <a href="comercial.php"
                class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">COMERCIAIS</a>
            <a href="edificio.php"
                class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">EDIFÍCIOS</a>
            <a href="restaurante.php"
                class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">RESTAURANTES</a>
            <a href="praia.php"
                class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">ARQUITETURA
                DE PRAIA</a>
            <a href="consultorio.php"
                class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">CONSULTÓRIOS</a>
            <a href="sobre.php"
                class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">SOBRE</a>
            <a href="localizacao.php"
                class="text-xs p-2 lg:px-1 md:mx-2 text-white rounded hover:bg-gray-200 hover:text-black transition-colors duration-300">CONTATO</a>
        </nav>
    </div>
</header>
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


    /* Estilos para tornar os quadrados responsivos */
    @media (min-width: 640px) {
        .md\:w-1\/2 {
            width: 50%;
        }
    }

    @media (max-width: 640px) {
        .ir_carrossel {
            width: 100% !important;
        }
    }

    .ir_carrossel {
        width: calc(33.33% - 5px);
        /* Aproximadamente um terço da largura do contêiner pai */
        margin-bottom: 5px;
        aspect-ratio: 1;
        font-family: "MADE Evolve Sans THIN";
        /* Define a largura e a altura para serem iguais */
    }

    /* Estilo de exemplo para a imagem de fundo */
    .ir_carrossel .bg-cover {
        background-size: cover;
        background-color: black;
    }

    @media (max-width: 640px) {
        .categoria {
            width: 100vw !important;
            height: 100%;
        }
    }
</style>
</head>


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