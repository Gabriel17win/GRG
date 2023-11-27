<!DOCTYPE html>
<html lang ="pt-br">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link href="style.css" rel="stylesheet" type="text/css" />
  <style>
  body {
      font-family: Arial, sans-serif;
      background-image: url('10.jpeg');
      color: #fff;
      margin: 0;
      padding: 0;
    }
    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #1a1a1a;
      padding: 20px;
    }
    nav ul {
      display: flex;
      list-style: none;
      padding: 0;
    }
    nav ul li {
      margin: 0 20px;
    }
    nav ul li a {
      text-decoration: none;
      color: #fff;
      font-size: 18px;
      text-transform: uppercase;
    }
    nav ul li a:hover {
      color: #33ffcc;
    }
    main {
      padding: 50px;
      text-align: center;
    }
    section {
      margin-bottom: 50px;
      background-color: #1a1a1a;
      padding: 20px;
      border-radius: 10px;
    }
    section h2 {
      margin-top: 0;
    }
    form {
      display: flex;
      flex-direction: column;
      align-items: center;
    }
    input[type="text"], input[type="email"], textarea {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
      box-sizing: border-box;
    }
    input[type="submit"] {
      padding: 10px 20px;
      background-color: #33ffcc;
      color: #111;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 18px;
      text-transform: uppercase;
    }
    input[type="submit"]:hover {
      background-color: #00e6b8;
    }


  

  </style>
</head>
<body>
  <header>
    <img src="10.jpeg" alt="CybersisTech Logo" width=180px height=100px>
    <nav>
      <ul>
        <li><a href="tcc.html">início</a></li>
		</ul>
		</nav>
		</header>
	<center><p><?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["mensagem"])) {
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        echo "<h2>Obrigado por entrar em contato, $nome!</h2>";
        echo "<p>Recebemos sua mensagem e entraremos em contato em breve.</p>";
    } else {
       
        echo "<h2>Erro ao enviar o formulário!</h2>";
        echo "<p>Preencha todos os campos do formulário.</p>";
    }
}
?></p></center>
</body>
</html>
