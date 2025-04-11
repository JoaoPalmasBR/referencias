<?php
// salvar.php

$data = file_get_contents('php://input');
if ($data) {
    $arquivo = 'referencias.json';
    if (file_put_contents($arquivo, $data)) {
        echo "Referências salvas com sucesso em $arquivo.";
    } else {
        http_response_code(500);
        echo "Erro ao salvar referências.";
    }
} else {
    http_response_code(400);
    echo "Nenhum dado recebido.";
}
?>
