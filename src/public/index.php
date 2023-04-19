<html>
    <head>
        <title> PHP Teste</title>
    </head>
    <body>
     <?php 
     /*$primeiro_nome = "Maria";
    echo $primeiro_nome;
    echo "<br>";
    $ultimo_nome = "Lourdes";
    echo $ultimo_nome;*/
    $time = array('Maria', 'José', 'Ana');

    echo $time[2];

    echo '<br />';

    print_r($time);
    
    echo 'a: [' . TRUE . '] <br />';
    echo 'a: [' . FALSE .']<br/>';
    $nome ='Maria';
    $idade = 30;

    echo 'a: [' . (20 > 9) . ']<br />';
    echo 'b: [' . (5 == 6) . ']<br />';
    echo 'c: [' . (1 == 0) . ']<br />';
    echo 'd: [' . (1 == 1) . ']<br />';
    echo "d: [' . $nome . ']<br />";

    $menu = 'sobre';
    switch ($menu) {
        case 'index':
            echo 'Escolheu a página Inicial.';
            break;
        case 'sobre':
            echo 'Escolheu a página Sobre.' ;
            break;
        case 'novidades':
            echo 'Escolheu a página Novidades.';
            break;
        case 'links':
            echo 'Escolheu a página Links.';
            break;
        
        default:
            echo 'Página não encontrada!';
            break;
    }

    ?> 
    

    </body>
    
</html>
