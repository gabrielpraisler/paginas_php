<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hardwares - Chipset</title>
    <link rel="stylesheet" href="css/materialize.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>

    <div class="container">
        <img class="responsive-img" src="./images/hardwares.png">

        <div class="cards">
            <div class="card-content">
                <h3>O que é um Chipset?</h3>
                <p class="black-text">O chipset é um componente fundamental para o funcionamento do PC. O nome se refere a um conjunto de circuitos integrados que são responsáveis por fazer com que todos os componentes do computador, desde o disco rígido até o processador, possam trocar informações e assim realizar as tarefas que exigimos deles.</p>
                <img class="responsive-img" src="https://geekblog.com.br/wp-content/uploads/2021/03/intel-core-9-geracao.jpg">

                <h3>Divisões</h3>
                <p class="black-text">O chipset é dividido em dois componentes principais: ponte norte (northbridge) e ponte sul (southbridge). A ponte norte fica responsável por controlar todos os componentes rápidos do computador, como processador, placa de vídeo (AGP e PCI Express) e memória RAM, fazendo com que eles solicitem informações do disco rígido (que está na ponte sul), as carregue na memória e divida o que será processado entre a CPU e a placa de vídeo, determinando qual será o desempenho final do computador.</p>
                <p class="black-text">A ponte sul fica responsável pelos componentes lentos do PC, também conhecidos como dispositivos de E/S (entrada/saída), o que inclui os discos rígidos (SATA e IDE), portas USB, pararela e PS/2 (utilizada em teclados e mouses antigos), slots PCI e ISA (padrão da IBM, hoje em desuso).</p>
                <p class="black-text">Grande parte dos processadores atuais inclui o controlador de memória dentro do chip da CPU, o que permite que elas alcancem um nível de perfomance muito maior do que o oferecido pelo chipset, mas esta é a única diferença entre os modelos de chipsets antigos e os atuais.</p>
                <img class="responsive-img" src="https://t.ctcdn.com.br/pskiCGnZOEq4ZAsSV0Zc_dNQWSY=/i406363.png">
            </div>
        </div>

    <script src="js/jquery.js"></script>
    <script src="js/materialize.js"></script>
</body>

</html>