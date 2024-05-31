<?php
// session_start();
// require_once "./config.php";
// Processando dados do formulário quando o formulário é enviado
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     echo $_POST["nome"];
    
// } else {
    
//     echo "asdasdada";
// }


// if(isset($_POST['submit']))
//  {
//print_r($_POST['nome']);
// print_r('<br>');
// print_r($_POST['atividade']);
// print_r('<br>');
// print_r($_POST['data']);
// print_r('<br>');
// print_r($_POST['analise']);
// print_r('<br>');
// print_r($_POST['EPi']);
// print_r('<br>');
// print_r($_POST['MED']);             // tenho que pensar em uma logica para salvar os quadrados
// print_r('<br>');
// print_r($_POST['PRO']);
// print_r('<br>');
// print_r($_POST['ADM']);
// print_r('<br>');
// print_r($_POST['autorização']);
// print_r('<br>');
// print_r($_POST['assinatura']);
// print_r('<br>');

// include_once('config.php') ;       

// $nome = $_POST["nome"];
// $atividade = $_POST["atividade"];
// $data = $_POST["data"];


// // if (isset($_POST["analise"])) {
// //     // Loop através das opções selecionadas e salvá-las no banco de dados
// //     $opcoes_analise = is_array($_POST["analise"]) ? $_POST["analise"] : array($_POST["analise"]);
// //     $opcao_analise = $_POST["analise"];
// // }

// $opcao_analise = null;

// if ($_SERVER["REQUEST_METHOD"] == "POST")
//     $opcao_analise = $_POST['analise'];

// if ($opcao_analise !== null){
//     for($i = 0; $i < count($opcao_analise); $i ++ ){
//         echo "<p> {$opcao_analise[$i]} </p>";
//     }
// }

// if (isset($_POST["EPI"])) {
//     // Loop através das opções selecionadas e salvá-las no banco de dados
//     $opcoes_EPI = is_array($_POST["EPI"]) ? $_POST["EPI"] : array($_POST["EPI"]);
//     $opcao_EPI = $_POST["EPI"];
// }




// $result = mysqli_query($conexao, "INSERT INTO formulario(nome,Atividade_a_ser_desenvolvida,data_,analise_de_risco,E_P_I_S) VALUES ('$nome', '$atividade' , '$data', '$opcao_analise','$opcao_EPI')" );

 




//  }



// if (isset($_POST["analise"])) {
//     // Loop através das opções selecionadas e salvá-las no banco de dados
//     $opcoes = is_array($_POST["analise"]) ? $_POST["analise"] : array($_POST["analise"]);
//     foreach ($_POST["analise"] as $opcao) {
//         $opcao = mysqli_real_escape_string($conexao, $opcao);
//         $sql = "INSERT INTO formulario (analise_de_risco) VALUES ('$opcao')";
//         mysqli_query($conexao, $sql);
//     }
// }

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../Img/ico-vlz2.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="../css/formulario.css">
    <script src="../js/JS-form.js"></script>
    <title>Formulário Veloznet</title>
</head>
<body>
    <header><h1>FORMULÁRIO APR - VLZ TELECOM </h1></header>
    <hr>
    <main>
        <img style="margin-left: 230px; border-radius: 40px;" style="box-shadow:0 0 10px rgba(0, 0, 0,1.5) " 
     src="../Img/Vlz.png" width="150px"  alt="Logo Veloznet" > 
     <br>
                     
            <label for ="inome">NOME COMPLETO</label> <br>
            <input type="text" name="nome" id="inome" style="width: 250px;"><br><br>

            <label for ="iatividade">ATIVDADE A SER DESENVOLVIDA</label><br>
            <input type="text" name="atividade" id="iatividade" style="width: 500px;"><br>
               <!-- <br> -->
            <!-- <label for="data">DATA DE AUTORIZAÇÃO</label><br>
            <input type="date" name="data" id="idata"><br> -->
            <br>
            <p>ANÁLISE DE RISCO</p> 
            <input type="checkbox" name="analise" id="ialternativa1" value="Levantamento e/ou transporte de peso">
            <label for="ialternativa1">Levantamento e/ou transporte de peso</label><br>

            <input type="checkbox" name="analise" id="ialternativa2" value="Choque Elétrico">
            <label for="ialternativa2">Choque Elétrico</label><br>

            <input type="checkbox" name="analise" id="ialternativa3" value="Piso escorregado">
            <label for="ialternativa3">Piso escorregado</label><br>

            <input type="checkbox" name="analise" id="ialternativa4" value="Risco de desabamento">
            <label for="ialternativa4">Risco de desabamento</label><br>

            <input type="checkbox" name="analise" id="ialternativa5" value="Risco de queda de escada">
            <label for="ialternativa5">Risco de queda de escada</label><br>

            <input type="checkbox" name="analise" id="ialternativa6" value="Queda de objetos">
            <label for="ialternativa6">Queda de objetos</label><br>

            <input type="checkbox" name="analise" id="ialternativa7" value="Queda de nível diferente">
            <label for="ialternativa7">Queda de nível diferente</label><br>

            <input type="checkbox" name="analise" id="ialternativa8" value="Animais Peçonhentos">
            <label for="ialternativa8">Animais Peçonhentos </label><br>

            <input type="checkbox" name="analise" id="ialternativa9" value="Condições climáticas adversas ( ventos fortes, chuvas com raios e trovoadas)">
            <label for="ialternativa9">Condições climáticas adversas ( ventos fortes, chuvas com raios e trovoadas)</label><br>
         <br>
        <p>EPI´S - USO OBRIGATÓRIO </p>
        <input type="checkbox" name="EPI" id="iEPI1" value= "Bota de segurança">
        <label for="iEPI1"> Bota de segurança</label><br>

        <input type="checkbox" name="EPI" id="iEPI2" value= "Cinto tipo paraquedista">
        <label for="iEPI2"> Cinto tipo paraquedista</label><br>

        <input type="checkbox" name="EPI" id="iEPI3" value= "Capacete com jugular">
        <label for="iEPI3"> Capacete com jugular</label><br>

        <input type="checkbox" name="EPI" id="iEPI4" value= "Luva de alta tensão">
        <label for="iEPI4">Luva de alta tensão</label><br>

        <input type="checkbox" name="EPI" id="iEPI5" value= "Luva pigmentada">
        <label for="iEPI5"> Luva pigmentada</label><br>

        <input type="checkbox" name="EPI" id="iEPI6" value= "Luva de baixa tensão">
        <label for="iEPI6"> Luva de baixa tensão</label><br>

        <input type="checkbox" name="EPI" id="iEPI7" value= "Uniforme completo (camisa longa e calça)">
        <label for="iEPI7"> Uniforme completo (camisa longa e calça)</label><br>

        <input type="checkbox" name="EPI" id="iEPI8" value= "Protetor solar">
        <label for="iEPI8"> Protetor solar</label><br>

        <input type="checkbox" name="EPI" id="iEPI9" value= "Óculos de segurança">
        <label for="iEPI9">Óculos de segurança</label><br>

        <input type="checkbox" name="EPI" id="iEPI10" value= "Talabarte de posicionamento">
        <label for="iEPI10"> Talabarte de posicionamento</label><br>

        <input type="checkbox" name="EPI" id="iEPI11" value= "Trava-quedas">
        <label for="iEPI11"> Trava-quedas</label><br>
<br>
        <p>MEDIDAS PREVENTIVAS PARA REALIZAÇÃO DAS ATIVIDADES- LEITURA E CONFIRMAÇÃO</p>
        <input type="checkbox" name="med" id="iMED1" value="Usar obrigatoriamente os Equipamentos de Proteção individual e Coletiva indicados para a função;">
        <label for="iMED1"> Usar obrigatoriamente os Equipamentos de Proteção individual e Coletiva indicados para a função;</label><br>

        <input type="checkbox" name="med" id="iMED2"value="Cumprir todas as normas internas da empresa, inclusive esta Ordem de Serviço;">
        <label for="iMED2"> Cumprir todas as normas internas da empresa, inclusive esta Ordem de Serviço;</label><br>

        <input type="checkbox" name="med" id="iMED3"value="Treinamentos de Segurança; Obrigatório treinamento NR10 e NR35 atualizado.">
        <label for="iMED3">Treinamentos de Segurança; Obrigatório treinamento NR10 e NR35 atualizado.</label><br>
<br>
        <p> PROIBIÇÕES - LEITURA E CONFIRMAÇÃO</p>
        <input type="checkbox" name="PRO" id="iPRO1"value="Deixar de usar EPI">
        <label for="iPRO1">Deixar de usar EPI</label><br>

        <input type="checkbox" name="PRO" id="iPRO2"value="Apresentar-se no trabalho embreagado, ou beber durante jornada de trabalho">
        <label for="iPRO2">Apresentar-se no trabalho embreagado, ou beber durante jornada de trabalho</label><br>

        <input type="checkbox" name="PRO" id="iPRO3"value="Descumprir as normas de Segurança e Medicina da empresa">
        <label for="iPRO3">Descumprir as normas de Segurança e Medicina da empresa </label><br>

        <input type="checkbox" name="PRO" id="iPRO4"value="Brincar em serviço">
        <label for="iPRO4">Brincar em serviço</label><br>

        <input type="checkbox" name="PRO" id="iPRO5"value="Improvisar consertos em máquinas / equipamentos">
        <label for="iPRO5">Improvisar consertos em máquinas / equipamentos </label><br>

        <input type="checkbox" name="PRO" id="iPRO6"value="Executar serviços em instalações elétricas; ou qualquer outro serviço para o qual não seja autorizado e/ou capacitado">
        <label for="iPRO6">Executar serviços em instalações elétricas; ou qualquer outro serviço para o qual não seja autorizado e/ou capacitado</label><br>
<br>
        <p> MEDIDAS DE PROTEÇÃO COLETIVA E MEDIDAS ADMINISTRATIVAS</p>
        <input type="checkbox" name="ADM" id="iADM1"value="Sinalização ( cones e corrente zebrada)">
        <label for="iADM1">Sinalização ( cones e corrente zebrada)</label><br>

        <input type="checkbox" name="ADM" id="iADM2"value="Seguir procedimento Operacional Padrão - PROCEDIMENTO DE TRABALHO VELOZNET">
        <label for="iADM2">Seguir procedimento Operacional Padrão - PROCEDIMENTO DE TRABALHO VELOZNET</label><br>
    <br>
        <label for="iautorização">AUTORIZADO POR</label><br>
        <input type="text" name="autorizacao" id="iautorizacao"><br>
    <br>
    <!-- <p> ASSINATURA DA EQUIPE </p>
    <canvas id="drawcanvas" width="400" height="200">  </canvas>
    <form id="forms">
        <input type="hidden" id="iassinatura" name="assinatura">
    </form> -->
    <style>
          canvas  {  
            border: 1px solid black;
        }

    </style>
    <form action="" method="post">
      <div class="botao">
        <button type="submit" id="enviar"> ENVIAR</button>
    </div>
</form>
    <style>
        .botao {
            display: flex;
            justify-content: center;
            align-items: center;
        }

    </style>

        <!-- <a href="#" id="enviar">VER COM JS</a> -->


</main>


<script src="./js/jquery3-7.min.js"></script>

<script>

    $("#enviar").on("click", function(e){
        e.preventDefault();

        



        inome = $("#inome").val();
        iatividade = $("#iatividade").val();

        
           
        analise = [];   
        $("input[name=analise]:checked").each(function (e) {
            input = $(this);
            analise.push(input.val())
        });
        
           
        epi = [];   
        $("input[name=EPI]:checked").each(function (e) {
            input = $(this);
            epi.push(input.val())
        });

        med = [];   
        $("input[name=med]:checked").each(function (e) {
            input = $(this);
            med.push(input.val())
        });

        
        proibicoes = [];   
        $("input[name=PRO]:checked").each(function (e) {
            input = $(this);
            proibicoes.push(input.val())
        });

         
        mprotecao = [];   
        $("input[name=ADM]:checked").each(function (e) {
            input = $(this);
            mprotecao.push(input.val())
        });

        
        iautorizacao = $("#iautorizacao").val();




        formData = {
            type: "insert",
            inome: inome,
            iatividade: iatividade,
            analise: analise,
            epi: epi,
            med:med,
            proibicoes:proibicoes,
            mprotecao:mprotecao,
            iautorizacao:iautorizacao,
        }

        console.log(formData);

        event.preventDefault();
        $.ajax({
          type: "POST",
          url: "ajax.php",
          data: formData,
          dataType: "json",
          encode: true,
          success: function(data) {
            response = data;
            console.log(response);

            if (response.status == 1) {
                location.reload(true);
            }
 

          },
          error: function(xhr, status, error) {
            $(this).removeClass("disabled");
            // Tratamento de erro no AJAX
            console.error('Erro na requisição:', status, error);
          }
        });

    });

</script>
    
    
</body>
</html>