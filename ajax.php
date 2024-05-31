<?php

session_start();
require_once "./verifica.php";




$type = (isset($_POST['type'])) ? $_POST['type'] : '';

$status = 0;
$message = "";


switch ($type) {
    
    case "insert":
        try {
            $inome = $_POST['inome'] ?? "";
            $iatividade = $_POST['iatividade'] ?? "";
            $epi = $_POST['epi'] ?? "";
            $analise = $_POST['analise'] ?? [];
            $med = $_POST['med'] ?? [];
            $proibicoes = $_POST['proibicoes'] ?? [];
            $mprotecao = $_POST['mprotecao'] ?? [];
            $iautorizacao = $_POST['iautorizacao'] ?? "";

            // $canvas = $_POST['canvas'] ?? "";
            // $drawData = $_POST['drawdata'];
            // $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $drawData));


            if (count($analise) > 0) {
                $analise = json_encode($analise, JSON_UNESCAPED_UNICODE);
                $epi = json_encode($epi, JSON_UNESCAPED_UNICODE);
                $med = json_encode($med, JSON_UNESCAPED_UNICODE);
                $proibicoes = json_encode($proibicoes, JSON_UNESCAPED_UNICODE);
                $mprotecao = json_encode($mprotecao, JSON_UNESCAPED_UNICODE);

                // $canvas = json_encode($canvas JSON_UNESCAPED_UNICODE);

                // $imageData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $drawData));

                $sql = "INSERT INTO formulario (nome,atividade_a_ser_desenvolvida, analise_de_risco,E_P_I_S,medidas_preventivas,proibicoes, medidas_de_protecao_coletiva,autorizacao,created) VALUES ('$inome','$iatividade', '$analise','$epi','$med','$proibicoes','$mprotecao', '$iautorizacao',NOW())";
                $sql = $pdo->prepare($sql);
                $sql->execute();
            }
            $status = 1;
        } catch (Exception $e) {
            $status = 0;
        }
        $resposta = array(
            'status' => $status
        );
        break;

    case "BUSCAR":
        try {
            //
        } catch (Exception $e) {
            $status = 0;
        }
        $resposta = array(
            'status' => $status
        );
        break;
}