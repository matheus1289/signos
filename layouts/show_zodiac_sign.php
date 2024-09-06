<?php
function getSigno($data) {
    // Carrega o arquivo XML
    $xml = simplexml_load_file('signos.xml');

    // Converte a data de nascimento para dia e mês
    $data = strtotime($data);
    $dia = date('d', $data);
    $mes = date('m', $data);

    // Itera sobre cada signo no XML
    foreach ($xml->signo as $signo) {
        // Quebra as datas de início e fim em dia e mês
        list($diaInicio, $mesInicio) = explode('/', (string)$signo->dataInicio);
        list($diaFim, $mesFim) = explode('/', (string)$signo->dataFim);

        // Verifica se a data de nascimento está entre o início e o fim do signo
        if (($mes == $mesInicio && $dia >= $diaInicio) || ($mes == $mesFim && $dia <= $diaFim) ||
            ($mes > $mesInicio && $mes < $mesFim) ||
            ($mesInicio > $mesFim && ($mes > $mesInicio || $mes < $mesFim))) {
            return $signo->signoNome . ': ' . $signo->descricao;
        }
    }

    return 'Data inválida';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $dataNascimento = $_POST['data'];
    $signo = getSigno($dataNascimento);
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seu Signo</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="resultado-signo">
        <?php include('header.php'); ?>
        <div class="reultado">
            <h1><?php echo $signo; ?></h1>
            <a href="../index.php"><button>Voltar</button></a>
        </div>

    </div>
    
</body>
</html>
