php
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['mensagem'])) {
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'];

        echo "<h2>Obrigado por entrar em contato, $nome!</h2>";
        echo "<p>Recebemos sua mensagem e entraremos em contato em breve.</p>";
    } else {
        
        echo "<h2>Erro ao enviar o formulário!</h2>";
        echo "<p>Preencha todos os campos do formulário.</p>";
    }
}
?>
