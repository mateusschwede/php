<?php
    $url = 'http://localhost/projetos/api_rest_php/public_html/api'; //Edite conforme diretório do projeto
    $class = '/user';
    $param = ''; //Pode ser o parâmetro específico, como 1 no final da URL (/1) para dados do user id 1
    $response = file_get_contents($url.$class.$param);

    $response = json_decode($response,1); //Opção 1 transforma em array, sem opção mantém como objeto
    //var_dump($response); //Mostra array JSON com todos dados
    var_dump($response['data'][1]['email']); //Mostra email do usuário index 1
?>

<h3>Adicionar Usuário:</h3>
<form action="<?=$url.$class?>" method="post">
    <input type="text" required name="name" placeholder="Nome">
    <input type="email" required name="email" placeholder="email@email.com">
    <input type="text" required name="password" placeholder="Senha">
    <input type="submit" value="Adicionar">
</form>