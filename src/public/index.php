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
        };
        echo '<br />';
 
        $tanque = 1;


        echo $tanque <= 1? 'Abastecer agora <br />' : 'Combustível OK <br />';

        $statusTanque = $tanque <= 1 ? FALSE : TRUE;

        if($statusTanque) echo 'Combustível OK';
        else echo 'Procurar em um posto para abastecer. ';

        echo '<br />';

        $vegetais = array('jerimum', 'batata', 'tomate');

        echo 'Hoje vou cozinhar ' , $vegetais[0] , '<br />';
        echo 'Hoje vou cozinhar ' , $vegetais[1] , '<br />';
        echo 'Hoje vou cozinhar ' , $vegetais[2] , '<br />';

        $vegetais = array(
            'jerimum' => 'https://media.istockphoto.com/id/493599528/pt/vetorial/rapaz-feliz-sereia-com-cavalo-marinho-nata%C3%A7%C3%A3o.jpg?s=1024x1024&w=is&k=20&c=D7uTpOCd_UeSqBPF8CJCGNo78Vz9DEFpPt5z3RsMbs4=',
            'batata' => 'https://media.istockphoto.com/id/1398979502/pt/vetorial/lovely-and-happy-mermaid-riding-on-a-seahorse-fantasy-animal-a-sunny-day-vector.jpg?s=170667a&w=0&k=20&c=dho1E47G2EwZ1NIBKmdywuyHAm3zatbj3J2G9AhtxFI=',
            'tomate' => 'https://media.istockphoto.com/id/1398769538/pt/vetorial/lovely-and-happy-mermaid-riding-on-a-seahorse-fantasy-animal-a-sunny-day-vector.jpg?s=612x612&w=is&k=20&c=JPt51Kfydiz9tsHdjrTfLRVAk5k7vGKTq_jMNlSs_C0=');

        foreach($vegetais as $chave=> $valor){
            echo 'Hoje vou cozinhar '. $chave . 
                "<img src= \"$valor\" /><br />";
        }
        

    
        
        

       

         
        

    ?> 
    
        <form method = "post" action="index.php">
        Nome: <input type="text" name="nome" />
        <input type="submit">        
        </form>
        <?php
            if(empty($_POST['nome'])){
                echo'Nome é um campo obrigatório. ';
            }else{
                echo $_POST['nome'] . ', obrigado por se inscrever.';
            }




        $data = date('d/m/y');
        $hora = date('H');
        if($hora<12){
            $mensagem = " Bom dia! <img src=\"https://i.pinimg.com/736x/7e/4e/92/7e4e92a2a4b6289a2dfb3de5b093b5b6.jpg\" />";
        }elseif(date('H') > 11 && date('H') <18){
            $mensagem = " Boa tarde! <img src=\"https://i.pinimg.com/originals/2a/86/25/2a8625b082dca29668b4937e68cd84b8.jpg\"/>";
            $mensagem .= ' Aceita um cafezinho quentinho?';
        }elseif(date('H') > 17){
            $mensagem = " Boa noite! <img src=\"https://i0.wp.com/omeudiadia.com.br/wp-content/uploads/2022/05/boa-noite-com-carinho.png?fit=657%2C653&ssl=1\" />";
        }

    
        ?>

        Olá <?php echo $mensagem; ?>


        <br>

        <?php 
            function strconcat($palavra1, $palavra2) {
                return $palavra1 . $palavra2;

            }
            echo strconcat('Olá ', 'Mundo!')
        
        ?>
        <br>
        <?php
        $a = 3;
        function teste()
        {
            $a += 2;
        }
        teste();
        echo $a;
        ?>
        <br>

        <?php
        function contador()
        {
            static $total = 0;
            return $total ++;
        }
        for ($i=1; $i<=5; $i++){
            echo contador(); 
        }
        ?>

        <br>
        <?php
            function dobro(&$numero)
            {
                $numero = $numero * 2;

            }
            $a = 4;
            dobro($a);
            echo $a;
            ?>
            <br>
        <?php
            function pagamento($desconto=2)
            {
                echo 'O desconto foi de: ' . $desconto . '%';
            }
            pagamento();
            ?>






    
    
    

    </body>

    
</html>
