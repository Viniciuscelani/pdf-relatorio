<!-- 
//AUTOLOAD DO COMPOSER
require __DIR__.'/vendor/autoload.php';

use Dompdf\Dompdf;
use Dompdf\Options;


//INSTANCIAS
$options = new Options();
$options->setChroot(__DIR__);


$dompdf = new Dompdf($options);

//Armazenamento das saídas do arquivo em buffer
ob_start();
require 'relatorio.php';

//CARREGA O HTML PARA DENTRO DA CLASSE
$dompdf->loadHtmlFile(ob_get_clean());

//RENDERIZAR O ARQUIVO PDF
$dompdf->render();

//IMPRIME O CONTEUDO DO ARQUIVO EM PDF
header('Content-type: application/pdf');
echo $dompdf->output(); -->

<?php
        require __DIR__.'/vendor/autoload.php';

        use Dompdf\Dompdf;
        use Dompdf\Options;

        //Instanciação do objeto options
        $options = new Options();

        //Configuração da root para o diretório atual
        $options->setChroot(__DIR__);

        //Instanciação do objeto dompdf
        $dompdf = new Dompdf($options);
        $dompdf->setPaper('A4', 'landscape');

        //Armazenamento das saídas do arquivo em buffer
        ob_start();
        require 'relatorio.php';

        //Envio do valor do buffer para a a classe
        $dompdf->loadHtml(ob_get_clean());

        //Renderização do arquivo PDF
        $dompdf->render();

        //Imprime o conteudo do pdf na tela
        header('Content-type: application/pdf');
        echo $dompdf->output();
    ?>