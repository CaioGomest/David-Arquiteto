<!DOCTYPE html>

<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>David Arias | RESIDENCIAIS</title>
        <?php
        require "header.php";
        ?>

    <body class="bg-black">

        <div class="flex flex-wrap justify-around">
            <?php
            $nomeArquivoAtual = basename(__FILE__, '.php');
            $pastaPai = '../imgs/pages/' . $nomeArquivoAtual;

            if (is_dir($pastaPai)) {
                $pastas = array_diff(scandir($pastaPai), array('..', '.'));

                foreach ($pastas as $pasta) {

                    // Obtém o caminho completo da pasta
                    $caminhoPasta = $pastaPai . '/' . $pasta;

                    // Verifica se é um diretório
                    if (is_dir($caminhoPasta)) {
                        // Obtém a primeira imagem dentro da pasta
                        $arquivos = array_diff(scandir($caminhoPasta), array('..', '.'));

                        // Inicializa variáveis para a imagem de capa e o nome do projeto
                        $imagemCapa = null;
                        $nomeProjeto = null;

                        // Procura pela primeira imagem dentro da pasta
                        foreach ($arquivos as $arquivo) {
                            $caminhoArquivo = $caminhoPasta . '/' . $arquivo;
                            // Verifica se o arquivo é uma imagem
                            if (is_file($caminhoArquivo)) {
                                // Salva a primeira imagem encontrada como imagem de capa
                                $imagemCapa = $caminhoArquivo;
                                // Não interrompe o loop aqui para continuar procurando por um arquivo de texto
                                break;
                            }
                        }

                        // Se uma imagem de capa foi encontrada, procura pelo arquivo de texto
                        if ($imagemCapa) {
                            foreach ($arquivos as $arquivo) {
                                $caminhoArquivo = $caminhoPasta . '/' . $arquivo;
                                // Verifica se o arquivo é um arquivo de texto
                                if (pathinfo($caminhoArquivo, PATHINFO_EXTENSION) === 'txt') {
                                    // Lê o arquivo de texto para obter o nome do projeto
                                    $handle = fopen($caminhoArquivo, "r");
                                    if ($handle) {
                                        $nomeProjeto = fgets($handle); // Lê a primeira linha
                                        fclose($handle);
                                    }

                                    // Remove quebras de linha ou caracteres de espaço em branco no início ou no final
                                    $nomeProjeto = trim($nomeProjeto);

                                    // Exibe a imagem de capa e o nome do projeto
                                    echo '<div caminho_pasta="' . $caminhoPasta . '" class="ir_carrossel  cursor-pointer bg-blue-500 text-white font-bold text-2xl filter grayscale hover-filter-none">
                                <div class="h-full flex items-end pb-4 bg-cover justify-center" style="text-shadow: 2px 2px 2px black; background-image: url(\'' . $imagemCapa . '\'); background-repeat: no-repeat;">
                                    ' . $nomeProjeto . ' 
                                </div>
                            </div>';
                                    break; // Sai do loop assim que encontrar o arquivo de texto
                                }
                            }
                        }
                    }
                }
            } else {
                echo json_encode(array('erro' => ' não é um diretório válido.'));
            }
            ?>
        </div>

        <a href="https://wa.me/5511978972557" target="_blank" class="whatsapp-button">
            <img src="../imgs/icons/whatsapp.png" alt="WhatsApp Icon">
        </a>
    </body>
    <?php
    require "footer.php";
    ?>
    </body>