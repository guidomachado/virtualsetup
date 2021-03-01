<?php
//include "imagecreatefrombmp.php";

/* @var $this yii\web\View */

use yii\helpers\Html;

use app\models\Plants;
use yii\widgets\DetailView;
use app\controllers\PlantsController;

$this->title = 'Virtualização';
$this->params['breadcrumbs'][] = $this->title;

\yii\web\YiiAsset::register($this);

$plantas = Plants::findOne($model);
$nentrada = 0;
$nsaida = 0;
$nomesE = array();
$nomesS = array();
$status = array();
$statusc = array();
$nome = array();
$nomeout = array();
$statusM = array();
$statuscoil = array();
/*$arrlength = count($nomesE);
for($x = 0; $x < $arrlength; $x++) {
  echo $nomesE[$x];
  echo "<br>";
}*/
if($plantas->Status_M100){$status[0]= $plantas->Status_M100;}
if($plantas->Status_M101){$status[1]= $plantas->Status_M101;}
if($plantas->Status_M102){$status[2]= $plantas->Status_M102;}
if($plantas->Status_M103){$status[3]= $plantas->Status_M103;}

if($plantas->Status_M120){$statusc[0]= $plantas->Status_M100;}
if($plantas->Status_M121){$statusc[1]= $plantas->Status_M121;}
if($plantas->Status_M122){$statusc[2]= $plantas->Status_M122;}
if($plantas->Status_M123){$statusc[3]= $plantas->Status_M123;}
// Chamando os NOMES DE ENTRADAS no BANCO DE DADOS
if($plantas->Entrada_0){$nomesE[0]= $plantas->Entrada_0;}
if($plantas->Entrada_1){$nomesE[1]= $plantas->Entrada_1;}
if($plantas->Entrada_2){$nomesE[2]= $plantas->Entrada_2;}
if($plantas->Entrada_3){$nomesE[3]= $plantas->Entrada_3;}
if($plantas->Entrada_4){$nomesE[4]= $plantas->Entrada_4;}
if($plantas->Entrada_5){$nomesE[5]= $plantas->Entrada_5;}
if($plantas->Entrada_6){$nomesE[6]= $plantas->Entrada_6;}
if($plantas->Entrada_7){$nomesE[7]= $plantas->Entrada_7;}
if($plantas->Entrada_8){$nomesE[8]= $plantas->Entrada_8;}
if($plantas->Entrada_9){$nomesE[9]= $plantas->Entrada_9;}
if($plantas->Entrada_10){$nomesE[10]= $plantas->Entrada_10;}
if($plantas->Entrada_11){$nomesE[11]= $plantas->Entrada_11;}
if($plantas->Entrada_12){$nomesE[12]= $plantas->Entrada_12;}
if($plantas->Entrada_13){$nomesE[13]= $plantas->Entrada_13;}
if($plantas->Entrada_14){$nomesE[14]= $plantas->Entrada_14;}
if($plantas->Entrada_15){$nomesE[15]= $plantas->Entrada_15;}
if($plantas->Entrada_16){$nomesE[16]= $plantas->Entrada_16;}
if($plantas->Entrada_17){$nomesE[17]= $plantas->Entrada_17;}
if($plantas->Entrada_18){$nomesE[18]= $plantas->Entrada_18;}
if($plantas->Entrada_19){$nomesE[19]= $plantas->Entrada_19;}
// Chamando os NOMES DE SAÍDAS no BANCO DE DADOS
if($plantas->Saída_0){$nomesS[0]= $plantas->Saída_0;}
if($plantas->Saída_1){$nomesS[1]= $plantas->Saída_1;}
if($plantas->Saída_2){$nomesS[2]= $plantas->Saída_2;}
if($plantas->Saída_3){$nomesS[3]= $plantas->Saída_3;}
if($plantas->Saída_4){$nomesS[4]= $plantas->Saída_4;}
if($plantas->Saída_5){$nomesS[5]= $plantas->Saída_5;}
if($plantas->Saída_6){$nomesS[6]= $plantas->Saída_6;}
if($plantas->Saída_7){$nomesS[7]= $plantas->Saída_7;}
if($plantas->Saída_8){$nomesS[8]= $plantas->Saída_8;}
if($plantas->Saída_9){$nomesS[9]= $plantas->Saída_9;}
if($plantas->Saída_10){$nomesS[10]= $plantas->Saída_10;}
if($plantas->Saída_11){$nomesS[11]= $plantas->Saída_11;}
if($plantas->Saída_12){$nomesS[12]= $plantas->Saída_12;}
if($plantas->Saída_13){$nomesS[13]= $plantas->Saída_13;}
if($plantas->Saída_14){$nomesS[14]= $plantas->Saída_14;}
if($plantas->Saída_15){$nomesS[15]= $plantas->Saída_15;}
if($plantas->Saída_16){$nomesS[16]= $plantas->Saída_16;}
if($plantas->Saída_17){$nomesS[17]= $plantas->Saída_17;}
if($plantas->Saída_18){$nomesS[18]= $plantas->Saída_18;}
if($plantas->Saída_19){$nomesS[19]= $plantas->Saída_19;}
// Calculando as quantidade total de entradas e saídas cadastradas
if($plantas->Entrada_0){$nentrada++;}
if($plantas->Entrada_1){$nentrada++;}
if($plantas->Entrada_2){$nentrada++;}
if($plantas->Entrada_3){$nentrada++;}
if($plantas->Entrada_4){$nentrada++;}
if($plantas->Entrada_5){$nentrada++;}
if($plantas->Entrada_6){$nentrada++;}
if($plantas->Entrada_7){$nentrada++;}
if($plantas->Entrada_8){$nentrada++;}
if($plantas->Entrada_9){$nentrada++;}
if($plantas->Entrada_10){$nentrada++;}
if($plantas->Entrada_11){$nentrada++;}
if($plantas->Entrada_12){$nentrada++;}
if($plantas->Entrada_13){$nentrada++;}
if($plantas->Entrada_14){$nentrada++;}
if($plantas->Entrada_15){$nentrada++;}
if($plantas->Entrada_16){$nentrada++;}
if($plantas->Entrada_17){$nentrada++;}
if($plantas->Entrada_18){$nentrada++;}
if($plantas->Entrada_19){$nentrada++;}
if($plantas->Saída_0){$nsaida++;}
if($plantas->Saída_1){$nsaida++;}
if($plantas->Saída_2){$nsaida++;}
if($plantas->Saída_3){$nsaida++;}
if($plantas->Saída_4){$nsaida++;}
if($plantas->Saída_5){$nsaida++;}
if($plantas->Saída_6){$nsaida++;}
if($plantas->Saída_7){$nsaida++;}
if($plantas->Saída_8){$nsaida++;}
if($plantas->Saída_9){$nsaida++;}
if($plantas->Saída_10){$nsaida++;}
if($plantas->Saída_11){$nsaida++;}
if($plantas->Saída_12){$nsaida++;}
if($plantas->Saída_13){$nsaida++;}
if($plantas->Saída_14){$nsaida++;}
if($plantas->Saída_15){$nsaida++;}
if($plantas->Saída_16){$nsaida++;}
if($plantas->Saída_17){$nsaida++;}
if($plantas->Saída_18){$nsaida++;}
if($plantas->Saída_19){$nsaida++;}

//echo $nentrada ;
//echo $nsaida ; 
//var_dump($nomesE);
//print_r ($nomesS);
//print_r ($status);
//foreach ($nomesE as $data){
//    echo $data;
//}
//echo $nomesE[0] ;
$nome = json_encode($nomesE);
//echo $nome;
$nomeout = json_encode($nomesS);
//echo $nomeout;
$statusM = json_encode($status);
$statuscoil = json_encode($statusc);

?>
   

    <div>
            
            <p>
                <button onclick="entrada()">entrada</button>
                <button onclick="saida()">saida</button>
                <button onclick="sinal()">sinal</button>
                <button onclick="coracao()">Esteira</button>
        
            </p>
            
            
    </div>


<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        
        <canvas id="teladireita" width="550" height="600" style="border:8px dashed red; background-color:AliceBlue;"></canvas>
        <canvas id="telaesquerda" width="550" height="600" style="border:8px dashed #000000; background-color:LightGrey;"></canvas>
         
        

        <script type="text/javascript">
                 var texto = <?php echo $nome;?>;   // texto entrada
                 var ntexto = new Array();          // texto entrada
                 var txtout = <?php echo $nomeout;?>; //texto saída
                 var ntxtout = new Array();           //texto saida
                 var sinal = <?php echo $statusM;?>; //status
                 var sinalM = new Array(); 
                 var sinalc = <?php echo $statuscoil;?>; //status
                 var sinalcl = new Array(); 
                 //alert('nome: ' + texto);
                //var tempo = 5000;
               // for (var i= 0; i < tempo; i++){
               // var canvasd = document.location.reload(true);}
                             
                var canvasd = document.getElementById("teladireita");
                var canvase = document.getElementById("telaesquerda");
                var ctxd=canvasd.getContext("2d");
                var ctxe=canvase.getContext("2d");
                
               /*function desenhaImagem() {
                var imagem = new Image();
                imagem.src = "https://s.aolcdn.com/hss/storage/midas/b386937631a1f03665c1d57289070898/203417456/simpsons.jpg";
                    imagem.onload = function() {
                      ctxd.drawImage(imagem,0,0, 500,600);
                                }
                                }
                desenhaImagem();*/

                var numentr = <?php echo $nentrada;?> ;
                var numsaida = <?php echo $nsaida;?>  ;
                
                var vetord = new Array();
                var vetore = new Array();
                // PARA O CANVAS DA TELA DIREITA
                for (var i = 0; i < numentr ; i++) {
                    if(vetord.length == 0 & ntexto.length == 0  ){   //
                     var posicao = {
                        x:10,
                        y:5
                        };
                        vetord[i]=posicao;
                        ntexto[i]=texto;
                        

                        
                    }
                    else if (vetord.length < 10 & ntexto.length < 10 ){      //
                    var temp = vetord.length -1;
                    var temx = ntexto.length -1;  
                    var posicao = vetord[temp]; // {x:?,y:?}
                    var texto = ntexto[temx];
                    posicao.y = posicao.y+60;
                    vetord[i]=posicao;
                    ntexto[i]=texto;
                    }

                    else {
                        if(vetord.length == 10 & ntexto.length == 10  ){
                        var posicao = {
                        x:250,
                        y:0
                        };
                        vetord[i]=posicao;
                        ntexto[i]=texto;
                        }
                        else {
                        var temp = vetord.length -1;
                        var temx = ntexto.length -1;
                        var posicao = vetord[temp]; // {x:?,y:?}
                        var texto = ntexto[temx];
                        posicao.y = posicao.y+60;
                        vetord[i]=posicao;
                        ntexto[i]=texto;
                        } 

                    }
                   
                    ctxd.fillStyle="#FF0000";
                    ctxd.fillRect(posicao.x, posicao.y,50,50);          //criação do quadrado
                    ctxd.strokeRect(posicao.x, posicao.y,50,50);        //borda do quadrado
                    ctxd.font = '10px Arial';                           //tamanho e fonte do texto
                    ctxd.fillStyle="#4B0082";                           //cor roxo
                    ctxd.fillText(texto[i], posicao.x+5, posicao.y+25); //exibição do texto                  
                    //setInterval("Desenhard",3000);
                    Desenhard ();
               
               
               
               
                } //fim do for tela direita
            

                // PARA O CANVAS DA TELA ESQUERDA
                for (var i = 0; i < numsaida; i++) {
                    if(vetore.length == 0 & ntxtout.length == 0){
                     var posicao = {
                        x:10,
                        y:60
                        };
                        vetore[i]=posicao;
                        ntxtout[i] = txtout;
                    }
                    else if (vetore.length < 10 & ntxtout.length < 10){
                    var temp = vetore.length -1;
                    var tempout = ntxtout.length -1;
                    var posicao = vetore[temp]; // {x:?,y:?}
                    var txtout = ntxtout[tempout]; // {x:?,y:?}
                    posicao.y = posicao.y+60;
                    vetore[i]=posicao;
                    ntxtout[i] = txtout;
                    } 
                    else {
                        if(vetore.length == 10 & ntxtout.length == 10){
                        var posicao = {
                        x:250,
                        y:0
                        };
                        vetore[i]=posicao;
                        ntxtout[i] = txtout;
                        }
                        else {
                        var temp = vetore.length -1;
                        var tempout = ntxtout.length -1;
                        var posicao = vetore[temp]; // {x:?,y:?}
                        var txtout = ntxtout[tempout]; // {x:?,y:?}
                        posicao.y = posicao.y+60;
                        vetore[i]=posicao;
                        ntxtout[i] = txtout;
                        } 

                    }

                  /*  ctxe.fillStyle="#0000FF";  //azul
                    ctxe.fillRect(posicao.x, posicao.y,50,50);*/
                    ctxe.fillStyle="#FFFF00"; //cor amarela
                    var lado = 50;
                    ctxe.beginPath();                   
                    ctxe.moveTo(posicao.x, posicao.y); //Ponto inicial do triangulo
                    ctxe.lineTo(posicao.x+lado, posicao.y);
                    ctxe.lineTo(lado/2+5, posicao.y-lado);
                    ctxe.lineTo(posicao.x, posicao.y);
                    ctxe.fill();
                    ctxe.stroke();
                    ctxe.font = '10px Arial';                           //tamanho e fonte do texto
                    ctxe.fillStyle="#4B0082";                           //cor roxo
                    ctxe.fillText(txtout[i], posicao.x+5, posicao.y-5); //exibição do texto  
                    Desenhare();                       
                }
                
                function Desenhard() {
                    if(sinal[i] == 1){
                    ctxd.fillStyle="##FF4500";
                    ctxd.fillRect(posicao.x, posicao.y,50,50);          //criação do quadrado
                    ctxd.strokeRect(posicao.x, posicao.y,50,50);
                    ctxd.font = '10px Arial';                           //tamanho e fonte do texto
                    ctxd.fillStyle="#F8F8FF";                           //cor roxo
                    ctxd.fillText(texto[i], posicao.x+5, posicao.y+25); //exibição do texto 
                    }
                else{
                    //ctxd.fillStyle="#FF0000";
                    //ctxd.fillRect(posicao.x, posicao.y,50,50);          //criação do quadrado
                    //ctxd.strokeRect(posicao.x, posicao.y,50,50);
                }
                }
            
                function Desenhare() {
                    if(sinalc[i] == 1){
                    ctxe.fillStyle="#B0E0E6"; //cor amarela
                    var lado = 50;
                    ctxe.beginPath();                   
                    ctxe.moveTo(posicao.x, posicao.y); //Ponto inicial do triangulo
                    ctxe.lineTo(posicao.x+lado, posicao.y);
                    ctxe.lineTo(lado/2+5, posicao.y-lado);
                    ctxe.lineTo(posicao.x, posicao.y);
                    ctxe.fill();
                    ctxe.stroke();
                    ctxe.font = '10px Arial';                           //tamanho e fonte do texto
                    ctxe.fillStyle="#4B0082";                           //cor roxo
                    ctxe.fillText(txtout[i], posicao.x+5, posicao.y-5); //exibição do texto  
                    
                    }
                else{
                    //ctxd.fillStyle="#FF0000";
                    //ctxd.fillRect(posicao.x, posicao.y,50,50);          //criação do quadrado
                    //ctxd.strokeRect(posicao.x, posicao.y,50,50);
                }
                }
       

            
        </script>


    </body>

</html>
