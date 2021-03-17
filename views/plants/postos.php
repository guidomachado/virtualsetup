<?php

use app\models\Plants;
use app\models\PlantsPostos;
use app\models\PlantsControl;
use yii\helpers\Html;
use yii\widgets\DetailView;
use app\controllers\PlantsController;

/* @var $this yii\web\View */
/* @var $model app\models\Plants */

$this->title = $model->Nome_da_Planta;
$this->params['breadcrumbs'][] = ['label' => 'Plants', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);

$planta = Plants::findOne($model->Id);

/*
$bt_start=null;

//Encontrar BT_START
if($planta->Entrada_0 == "Start"){$bt_start = $planta->Status_M100;}
if($planta->Entrada_1 == "Start"){$bt_start = $planta->Status_M101;}
if($planta->Entrada_2 == "Start"){$bt_start = $planta->Status_M102;}
if($planta->Entrada_3 == "Start"){$bt_start = $planta->Status_M103;}
if($planta->Entrada_4 == "Start"){$bt_start = $planta->Status_M104;}
if($planta->Entrada_5 == "Start"){$bt_start = $planta->Status_M105;}
if($planta->Entrada_6 == "Start"){$bt_start = $planta->Status_M106;}
if($planta->Entrada_7 == "Start"){$bt_start = $planta->Status_M107;}
if($planta->Entrada_8 == "Start"){$bt_start = $planta->Status_M108;}
if($planta->Entrada_9 == "Start"){$bt_start = $planta->Status_M109;}
if($planta->Entrada_10 == "Start"){$bt_start = $planta->Status_M110;}
if($planta->Entrada_11 == "Start"){$bt_start = $planta->Status_M111;}
if($planta->Entrada_12 == "Start"){$bt_start = $planta->Status_M112;}
if($planta->Entrada_13 == "Start"){$bt_start = $planta->Status_M113;}
if($planta->Entrada_14 == "Start"){$bt_start = $planta->Status_M114;}
if($planta->Entrada_15 == "Start"){$bt_start = $planta->Status_M115;}
if($planta->Entrada_16 == "Start"){$bt_start = $planta->Status_M116;}
if($planta->Entrada_17 == "Start"){$bt_start = $planta->Status_M117;}
if($planta->Entrada_18 == "Start"){$bt_start = $planta->Status_M118;}
if($planta->Entrada_19 == "Start"){$bt_start = $planta->Status_M119;}

$saidas = [];
*/
/*
function reset_postos($id_principal)
{
    $plantaPostos = PlantsPostos::findOne($id_principal);
    $plantaPostos->Saída_1 = 0;
}
*/
function atualizaBd($id_postos,$id_principal)
{
    $planta = Plants::findOne($id_principal);
    $plantaPostos = PlantsPostos::findOne($id_postos);
    $plantaPostos->Status_M120=$planta->Status_M120;
    $plantaPostos->Status_M121=$planta->Status_M121;
    $plantaPostos->Status_M122=$planta->Status_M122;
    $plantaPostos->Status_M123=$planta->Status_M123;
    $plantaPostos->Status_M124=$planta->Status_M124;
    $plantaPostos->Status_M125=$planta->Status_M125;
    $plantaPostos->Status_M126=$planta->Status_M126;
    $plantaPostos->Status_M127=$planta->Status_M127;
    $plantaPostos->Status_M128=$planta->Status_M128;
    $plantaPostos->Status_M129=$planta->Status_M129;
    $plantaPostos->Status_M130=$planta->Status_M130;
    $plantaPostos->Status_M131=$planta->Status_M131;
    $plantaPostos->Status_M132=$planta->Status_M132;
    $plantaPostos->Status_M133=$planta->Status_M133;
    $plantaPostos->Status_M134=$planta->Status_M134;
    $plantaPostos->Status_M135=$planta->Status_M135;
    $plantaPostos->Status_M136=$planta->Status_M136;
    $plantaPostos->Status_M137=$planta->Status_M137;
    $plantaPostos->Status_M138=$planta->Status_M138;
    $plantaPostos->Status_M139=$planta->Status_M139;
    $plantaPostos->save();
}
//atualizar o banco para dois vetores locais
function atualizar_bd_comparacao($id_principal)
{
    $cont_dif=0;
    $planta = Plants::findOne($id_principal);
    $plantaPostos_status_prev = PlantsPostos::findOne(1);
    $plantaPostos_status_atual = PlantsPostos::findOne(2);
    if($plantaPostos_status_prev->Status_M120!=$plantaPostos_status_atual->Status_M120){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M121!=$plantaPostos_status_atual->Status_M121){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M122!=$plantaPostos_status_atual->Status_M122){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M123!=$plantaPostos_status_atual->Status_M123){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M124!=$plantaPostos_status_atual->Status_M124){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M125!=$plantaPostos_status_atual->Status_M125){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M126!=$plantaPostos_status_atual->Status_M126){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M127!=$plantaPostos_status_atual->Status_M127){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M128!=$plantaPostos_status_atual->Status_M128){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M129!=$plantaPostos_status_atual->Status_M129){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M130!=$plantaPostos_status_atual->Status_M130){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M131!=$plantaPostos_status_atual->Status_M131){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M132!=$plantaPostos_status_atual->Status_M132){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M133!=$plantaPostos_status_atual->Status_M133){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M134!=$plantaPostos_status_atual->Status_M134){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M135!=$plantaPostos_status_atual->Status_M135){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M136!=$plantaPostos_status_atual->Status_M136){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M137!=$plantaPostos_status_atual->Status_M137){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M138!=$plantaPostos_status_atual->Status_M138){$cont_dif++;}
    if($plantaPostos_status_prev->Status_M139!=$plantaPostos_status_atual->Status_M139){$cont_dif++;}

    if($cont_dif > 0)
    {
        $check_num_postos = $planta->Num_postos;
        $check_num_postos++;
        $planta->save();
        $novoposto = new PlantsPostos;
        //$plantaPostos = PlantsPostos::findOne(1);
        //$check_num_postos = $plantaPostos->Saída_1;
        if($check_num_postos == 1){$novoposto->Nome_da_Planta = "Posto1";
            $planta->Num_postos = '1';$check_num_postos =0;print_r('1');}
        if($check_num_postos == 2){$novoposto->Nome_da_Planta = "Posto2";
            $planta->Num_postos = '2';$check_num_postos =0;print_r('2');}
        if($check_num_postos == 3){$novoposto->Nome_da_Planta = "Posto3";
            $planta->Num_postos = '3';$check_num_postos =0;}
        if($check_num_postos == 4){$novoposto->Nome_da_Planta = "Posto4";
            $planta->Num_postos = '4';$check_num_postos =0;}
        if($check_num_postos == 5){$novoposto->Nome_da_Planta = "Posto5";
            $planta->Num_postos = '5';$check_num_postos =0;}
            print_r($planta->Num_postos);
            $planta->save();
        
        $novoposto->Status_M120 = $plantaPostos_status_prev->Status_M120;
        $novoposto->Status_M121 = $plantaPostos_status_prev->Status_M121;
        $novoposto->Status_M122 = $plantaPostos_status_prev->Status_M122;
        $novoposto->Status_M123 = $plantaPostos_status_prev->Status_M123;
        $novoposto->Status_M124 = $plantaPostos_status_prev->Status_M124;
        $novoposto->Status_M125 = $plantaPostos_status_prev->Status_M125;
        $novoposto->Status_M126 = $plantaPostos_status_prev->Status_M126;
        $novoposto->Status_M127 = $plantaPostos_status_prev->Status_M127;
        $novoposto->Status_M128 = $plantaPostos_status_prev->Status_M128;
        $novoposto->Status_M129 = $plantaPostos_status_prev->Status_M129;
        $novoposto->Status_M130 = $plantaPostos_status_prev->Status_M130;
        $novoposto->Status_M131 = $plantaPostos_status_prev->Status_M131;
        $novoposto->Status_M132 = $plantaPostos_status_prev->Status_M132;
        $novoposto->Status_M133 = $plantaPostos_status_prev->Status_M133;
        $novoposto->Status_M134 = $plantaPostos_status_prev->Status_M134;
        $novoposto->Status_M135 = $plantaPostos_status_prev->Status_M135;
        $novoposto->Status_M136 = $plantaPostos_status_prev->Status_M136;
        $novoposto->Status_M137 = $plantaPostos_status_prev->Status_M137;
        $novoposto->Status_M138 = $plantaPostos_status_prev->Status_M138;
        $novoposto->Status_M139 = $plantaPostos_status_prev->Status_M139;
        $novoposto->save();
        $num_postos = $planta->Num_postos;
        if($num_postos == 1)
        {
            //$sql = "SELECT * FROM plants_postos ORDER BY id DESC LIMIT 1";
            $sql = "SELECT * FROM plants_postos ORDER BY id DESC LIMIT 1;";
            $command = Yii::$app->db->createCommand($sql);
            $count = $command->queryScalar();
            //print_r($count);
            $planta->Id_control_inicial = $count;
            //$planta->Saída_19 = $novoposto->Id;
            print_r("id guardado");
        }
        print_r("status diferente");
    }
    else{print_r("status igual");}
}
// inicio do programa
function exe($id_principal)
{
    $planta = Plants::findOne($id_principal);
    //$Nome_da_Planta = $planta->Nome_da_Planta;
    $check_aprendeu = $planta->aprendeu_planta;
    //$plantaControl = new PlantsPostos;
    //print_r($Nome_da_Planta);
    //$plantaControl = PlantsControl::findOne(1);
    //$check_postos = $plantaControl->Check_postos;
    //print_r($check_postos);
    //print_r('ceeeee');
    if($check_aprendeu == '0')
    {   
        //$plantaControl = new PlantsControl;
        //$plantaControl->Nome_da_Planta = $Nome_da_Planta;
        //$plantaControl->Check_postos = 1;
        $planta->aprendeu_planta = '1';
        $planta->Id_control = '1';
        $planta->Num_postos = '0';
        
        //$plantaControl->save();
        //$planta->Id_control = $plantaControl->Id;
        $planta->save();
        $num_postos = $planta->Num_postos;
        $check_aprendeu=$planta->aprendeu_planta;
        //print_r($plantaControl);
        print_r('vai para a fase 1 do aprendizado'); 
    }
    //$plantaPostos = PlantsPostos::findOne(1);
    //$plantaPostos = PlantsPostos::findOne(1);

    if($check_aprendeu == '1')
    {      
        $num_postos = $planta->Num_postos;
        if($num_postos<5)
        {
            $num_postos = $planta->Num_postos;
            $check = $planta->Id_control;
            if($check==1)
            {
                atualizaBd(1,$id_principal);
                $planta->Id_control ='2';
                //$plantaPostos->save();
                $planta->save();
                print_r("status_prev");
            }
            if($check==2)
            {
                print_r("comparação");
                atualizar_bd_comparacao($id_principal);
                //comparação dos status
                $check=3;
            }
            if($check==3)
            {
                atualizaBd(2,$id_principal);
                $planta->Id_control='1';
                //$plantaPostos->save();
                $planta->save();
                $check=0;
                print_r("status_atual");
            }
        }else{$planta->aprendeu_planta=2;$planta->save();}// número máximo de postos criados.
    } 
    
    if($check_aprendeu == '2')
    {
        //$planta->Id_control = '1';
        //$planta->save();
        print_r('Esta planta já está pronta para a visualização de postos'); 
    }       
}
//$plantaPostos->Status_M120=1;
//$plantaPostos->save();


//$planta2 = Plants::find($model)->asArray()->all();
//$saidaN = $planta->Status_M100;
//$saidaO = $saidaN;
//$js_array = json_encode($saidas);
//echo(gettype($saidas[0]));
//$saidaN = intval($saidas[0],10);//->getText());
//print_r($saidaN);
//$saidaE = [$planta->Status_M120+1];
//$saidaE = array();
//$a=0;

//guido soprano
//$configBd = mysqli_connect('virtualsetup.mysql.dbaas.com.br','virtualsetup','projetosuper','virtualsetup') or die('Erro ao conectar');
//$sql = "SELECT * FROM plants";
//$resultado_anterior = mysqli_query($configBd,$sql) or die('Erro ao conectar');

//$status_anterior = $resultado_anterior['Status_M100'];
/*
function verif_status($status_atual,$init_processo,$tipo_ent_saida,$quant_io)
{
    static $control_posterior;
    static $control_atual;
    static $control_flag=0;
    static $control_flag_fim=0;
    static $posto;
    static $guarda_posto=0;

    if(($init_processo == 1) && ($tipo_ent_saida == 0))
    {
        print_r("pnp");
        for($i1=0;$i1<sizeof($status_atual);$i1++)
        {
            //$status_atual[$i1] = 0;
            $control_atual = $status_atual[$i1];
        }
    }
    if(($init_processo == 1) && ($tipo_ent_saida == 1))
    {
        print_r("npn");
        for($i1=0;$i1<sizeof($status_atual);$i1++)
        {
            //$status_atual[$i1] = 1;
            $control_atual = $status_atual[$i1];
        }
    }
    //yfgyih
    if(($init_processo == 0) && ($control_flag == 0))
    {
        for($i1=0;$i1<sizeof($status_atual);$i1++)
        {
            $control_atual[$i1] = $status_atual[$i1];
        }
        $control_flag = 1;
        print_r("1ooo");
        $control_flag = 1;
    }
    else
    {
        
        if(($init_processo == 0) && ($control_flag == 1))
        {
            print_r("eee");
            for($i1=0;$i1<sizeof($status_atual);$i1++)
            {
                $control_posterior[$i1] = $status_atual[$i1];
            }
            print_r("2 vez");
            $control_flag = 0;
            $control_flag_fim=1;
        }
    }
    if(($init_processo == 0) && ($control_flag_fim == 1))
    {
        for($i1=0;$i1<sizeof($status_atual);$i1++)
        {
            if($control_atual[$i1] == $control_posterior[$i1])
            {
                $posto[$i1] = $control_posterior[$i1];
            }else{
                $posto[$i1] = $control_posterior[$i1];
                $guarda_posto =1;
            }
        }
        $control_flag_fim=0;
    }
    if($guarda_posto == 1){return($posto);echo"go";}
    print_r($control_flag);
}
*/
//$teste[]=array(1,0,0,1);
//verif_status($teste,0,0,4);
//verif_status($teste,0,0,4);
/*
function levar_js($status_atual)
{
    static $estado_atual = array();
    for($i=0;$i<sizeof($status_atual);$i++)
    {
        $estado_atual = $status_atual[$i];
    }
    return $estado_atual;
}
*/
//$fjson = json_encode(levar_js($teste));
?>


<div class="plants-view">
    
    <div id="refresh">
        <div id="time">
        <!--<pre id="whereToPrint"></pre>-->
            <?php 
/*
            $a =0;
            if($a==1){
                for($i=0;$i<sizeof($saidas);$i++){
                    if($saidas[$i]){$saidaE[]=1;}
                    else{$saidaE[]=0;}

                }
            }
            */
            exe($model->Id);
            //print_r($saidas);
            //print_r($check);
            //print_r($saidaO);
            //print_r($saidaN);
            //print_r($planta2[0]);
            //echo date('H:i:s');
            //echo $bt_start;
            //$a[] = $saidas[0];
            //print_r($a);
            //print_r($saidas);
            //$js_array = json_encode($saidas);
            //console.log(i);
            
            
            //echo($saidas[0]);
            //$js_array = json_encode($saidas);
            //echo "var javascript_array = ". $js_array . ";\n";
                //$teste = actionActualize($model);    
            ?>
            
        </div>
    </div> 
    
    <script type="text/javascript">
    setInterval("my_function();",250); 
 
    function my_function(){
        $('#refresh').load(location.href + ' #time');
    }
    </script>
    

</div>
