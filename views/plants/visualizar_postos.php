<?php

use app\models\Plants;
use yii\helpers\Html;
use app\controllers\PlantsController;
use app\models\PlantsPostos;

/* @var $this yii\web\View */
/* @var $model app\models\Plants */

$this->title = 'Virtualização';
$this->params['breadcrumbs'][] = ['label' => 'Plants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$planta = Plants::findOne($model->Id);

$id_inicial_ = $planta->Id_control_inicial;
$numero_postos = $planta->Num_postos;
$postos_teste = array();

for($i =0;$i<$numero_postos;$i++){
    $postox = PlantsPostos::findOne($id_inicial_+$i);
    $matriz_saidas = array();
    $matriz_saidas[0] = $postox->Status_M120;
    $matriz_saidas[1] = $postox->Status_M121;
    $matriz_saidas[2] = $postox->Status_M122;
    $matriz_saidas[3] = $postox->Status_M123;
    $matriz_saidas[4] = $postox->Status_M124;
    $matriz_saidas[5] = $postox->Status_M125;
    $matriz_saidas[6] = $postox->Status_M126;
    $matriz_saidas[7] = $postox->Status_M127;
    $matriz_saidas[8] = $postox->Status_M128;
    $matriz_saidas[9] = $postox->Status_M129;
    $matriz_saidas[10] = $postox->Status_M130;
    $matriz_saidas[11] = $postox->Status_M131;
    $matriz_saidas[12] = $postox->Status_M132;
    $matriz_saidas[13] = $postox->Status_M133;
    $matriz_saidas[14] = $postox->Status_M134;
    $matriz_saidas[15] = $postox->Status_M135;
    $matriz_saidas[16] = $postox->Status_M136;
    $matriz_saidas[17] = $postox->Status_M137;
    $matriz_saidas[18] = $postox->Status_M138;
    $matriz_saidas[19] = $postox->Status_M139;
    $postos_teste[$i] = $matriz_saidas;
}
//print_r($postos_teste);
?>
<div>
    <h1>Visualização dos Postos</h1>
</div>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
    <div class="plants-view">
    
    <div id="refresh">
        <div id="time">
            <?php 
                        
            $posto_atual = Plants::findOne($model->Id);
            $matriz_atual = array();
            $matriz_atual[0]  = $posto_atual->Status_M120;
            $matriz_atual[1]  = $posto_atual->Status_M121;
            $matriz_atual[2]  = $posto_atual->Status_M122;
            $matriz_atual[3]  = $posto_atual->Status_M123;
            $matriz_atual[4]  = $posto_atual->Status_M124;
            $matriz_atual[5]  = $posto_atual->Status_M125;
            $matriz_atual[6]  = $posto_atual->Status_M126;
            $matriz_atual[7]  = $posto_atual->Status_M127;
            $matriz_atual[8]  = $posto_atual->Status_M128;
            $matriz_atual[9]  = $posto_atual->Status_M129;
            $matriz_atual[10] = $posto_atual->Status_M130;
            $matriz_atual[11] = $posto_atual->Status_M131;
            $matriz_atual[12] = $posto_atual->Status_M132;
            $matriz_atual[13] = $posto_atual->Status_M133;
            $matriz_atual[14] = $posto_atual->Status_M134;
            $matriz_atual[15] = $posto_atual->Status_M135;
            $matriz_atual[16] = $posto_atual->Status_M136;
            $matriz_atual[17] = $posto_atual->Status_M137;
            $matriz_atual[18] = $posto_atual->Status_M138;
            $matriz_atual[19] = $posto_atual->Status_M139;
            
            $posto_a = 0;
            for($i =0;$i<sizeof($postos_teste);$i++){
                if($matriz_atual == $postos_teste[$i]){
                    if($i!=9){
                    $posto_a = $i;
                    }
                    else{
                        $a123 = $posto_atual->Status_M101;
                        if($a123 ==1){
                            $posto_a = 9;
                        }
                        else{
                            $posto_a = 0;
                        }
                    }
                }
            }
            ?>        
        </div>
    </div>         
        <canvas id="Tela" width="1000" height="850" style="border:8px dashed #000000; background-color:LightGrey;"></canvas>
        <canvas id="Legenda" width="1000" height="100" style="border:4px dashed #FF0000; background-color:LightGrey;"></canvas>

        <script type="text/javascript">
        var canvas = document.getElementById("Tela");
        var ctx = canvas.getContext("2d");
        var legenda = document.getElementById("Legenda");
        var ctx_l = legenda.getContext("2d");

        //Criando a Legenda
        ctx_l.fillStyle="#FF7F00";  //Laranja
        ctx_l.fillRect(20,20,50,50); //Colorir quadrado 
        ctx_l.font = 'bold 28px Arial'; //tamanho e fonte do texto
        ctx_l.fillStyle="#222222"; //cor preto
        ctx_l.fillText('Posto', 80, 50); //exibição do texto 
        ctx_l.beginPath();
        ctx_l.arc(550,40,20,0,Math.PI*2);
        ctx_l.fillStyle="#0000FF";  //Azul
        ctx_l.fill();
        ctx_l.font = 'bold 28px Arial'; //tamanho e fonte do texto
        ctx_l.fillStyle="#222222"; //cor preto
        ctx_l.fillText('Produto', 580, 50); //exibição do texto 

        //Criar postos automaticamente
        //var num_postos = 10;
        var num_postos = <?php echo $numero_postos; ?>;
        var postos =[
            {x:50,y:50},{x:250,y:50},{x:450,y:50},{x:650,y:50},{x:850,y:50},
            {x:50,y:250},{x:250,y:250},{x:450,y:250},{x:650,y:250},{x:850,y:250},
            {x:50,y:450},{x:250,y:450},{x:450,y:450},{x:650,y:450},{x:850,y:450},
            {x:50,y:650},{x:250,y:650},{x:450,y:650},{x:650,y:650},{x:850,y:650},
        ];
        var nomes = [
            "Posto 1","Posto 2","Posto 3","Posto 4","Posto 5",
            "Posto 6","Posto 7","Posto 8","Posto 9","Posto 10",
            "Posto 11","Posto 12","Posto 13","Posto 14","Posto 15",
            "Posto 16","Posto 17","Posto 18","Posto 19","Posto 20",
        ]
        var postos_usados = new Array();
        
        for(var i =0;i<num_postos;i++){
            postos_usados[i] = postos[i];
            ctx.fillStyle="#FF7F00";  //Laranja
            ctx.fillRect(postos_usados[i].x,postos_usados[i].y,100,100); //Colorir quadrado
            ctx.font = 'bold 18px Arial'; //tamanho e fonte do texto
            ctx.fillStyle="#222222"; //cor preto
            ctx.fillText(nomes[i], postos_usados[i].x+15, postos_usados[i].y+125); //exibição do texto 
        }

        var posto_proximo = <?php echo $posto_a?>;
        var posto_anterior = 1;

        function rend_posto(){
            prox_pos = posto_proximo;
            ant_pos = posto_anterior;
            ctx.fillStyle="#FF7F00";  //Laranja
            //Quadrado anterior
            ctx.fillRect(postos_usados[ant_pos].x,postos_usados[ant_pos].y,100,100);
            ctx.beginPath(); //Desenhar produto
            ctx.arc(postos_usados[prox_pos].x+50, postos_usados[prox_pos].y+50,20,0,Math.PI*2);
            ctx.fillStyle="#0000FF";  //Azul
            ctx.fill();
            posto_anterior = posto_proximo; //Atualiza posicao
        }

        rend_posto();
        document.location.reload(true);
        /*
        setInterval("my_function();",250); 
        function my_function(){
            
            <?php
            /*
            $posto_atual = Plants::findOne($model->Id);
            $matriz_atual = array();
            $matriz_atual[0] = $posto_atual->Status_M120;
            $matriz_atual[1] = $posto_atual->Status_M121;
            $matriz_atual[2] = $posto_atual->Status_M122;
            $matriz_atual[3] = $posto_atual->Status_M123;
            $matriz_atual[4] = $posto_atual->Status_M124;
            $matriz_atual[5] = $posto_atual->Status_M125;
            $matriz_atual[6] = $posto_atual->Status_M126;
            $matriz_atual[7] = $posto_atual->Status_M127;
            $matriz_atual[8] = $posto_atual->Status_M128;
            $matriz_atual[9] = $posto_atual->Status_M129;
            $matriz_atual[10] = $posto_atual->Status_M130;
            $matriz_atual[11] = $posto_atual->Status_M131;
            $matriz_atual[12] = $posto_atual->Status_M132;
            $matriz_atual[13] = $posto_atual->Status_M133;
            $matriz_atual[14] = $posto_atual->Status_M134;
            $matriz_atual[15] = $posto_atual->Status_M135;
            $matriz_atual[16] = $posto_atual->Status_M136;
            $matriz_atual[17] = $posto_atual->Status_M137;
            $matriz_atual[18] = $posto_atual->Status_M138;
            $matriz_atual[19] = $posto_atual->Status_M139;
            
            $posto_atual = 0;
            for($i =0;$i<sizeof($postos_teste);$i++){
                if($matriz_atual == $postos_teste[$i]){
                    $posto_atual = $i;
                }
            }
            */
            ?>
            posto_proximo = <?php //echo $posto_atual; ?>;
            //posto_proximo++;
            //if(posto_proximo == num_postos){posto_proximo=0;}
            rend_posto();   
            $('#refresh').load(location.href + ' #time');
        }
        */
        </script>

    </body>

    <script type="text/javascript">    
    /*
    setInterval("my_function();",1000);
    function my_function(){
        prox()
        next(int);
        $('#refresh').load(location.href + ' #time');
    }
    */
    </script>
</html>

<script>
/*
        var int = 0;
        function prox(){
            prox_pos = int
            if(int == 0){ant_pos = num_postos-1;}
            else{ant_pos = int-1;}
            
            ctx.fillStyle="#FF7F00";  //Laranja
            ctx.fillRect(postos_usados[ant_pos].x,postos_usados[ant_pos].y,100,100);
            ctx.beginPath();
            ctx.arc(postos_usados[prox_pos].x+50, postos_usados[prox_pos].y+50,20,0,Math.PI*2);
            ctx.fillStyle = 'rgb(0, 0, 0)';
            ctx.fill();
            int++;
            if(int==num_postos){int=0;}
        }
*/
</script>