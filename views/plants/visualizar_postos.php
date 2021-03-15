<?php

use app\models\Plants;
use yii\helpers\Html;
use app\controllers\PlantsController;

/* @var $this yii\web\View */
/* @var $model app\models\Plants */

$this->title = 'Virtualização';
$this->params['breadcrumbs'][] = ['label' => 'Plants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;

$planta = Plants::findOne($model);
//$StatusES = array();

?>
<div>
    <h1>Visualização dos Postos</h1>
</div>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        
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
        var num_postos = 10;
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

        var posto_proximo = 0;
        var posto_anterior = 7;

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
        setInterval("my_function();",1000); 
        function my_function(){
            posto_proximo++;
            if(posto_proximo == num_postos){posto_proximo=0;}
            rend_posto();   
        }
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