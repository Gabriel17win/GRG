php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifica se todos os campos foram preenchidos
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['mensagem'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        // Aqui você pode adicionar o código para enviar o e-mail com as informações de contato

        // Exemplo simples de exibição de mensagem de confirmação
        echo "<h2>Obrigado por entrar em contato, $nome!</h2>";
        echo "<p>Recebemos sua mensagem e entraremos em contato em breve.</p>";
    } else {
        // Caso algum campo esteja vazio, exibe uma mensagem de erro
        echo "<h2>Erro ao enviar o formulário!</h2>";
        echo "<p>Preencha todos os campos do formulário.</p>";
    }
}
?>
