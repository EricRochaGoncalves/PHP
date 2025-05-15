<?php

// Configurações de conexão
$host = 'localhost';  // ou o IP do servidor
$usuario = 'root';    // seu usuário do MySQL
$senha = 'Y@sp2006';  // sua senha do MySQL
$banco = 'meu_site';  // nome do banco de dados

// Conectar ao banco
$conexao = mysqli_connect($host, $usuario, $senha, $banco);

// Checar a conexão
if (!$conexao) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Receber os dados do formulário
    $nome = mysqli_real_escape_string($conexao, $_POST['nome']);
    $email = mysqli_real_escape_string($conexao, $_POST['email']);

    // Inserir os dados na tabela 'usuarios'
    $sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

    // Executar a consulta e verificar se deu certo
    if (mysqli_query($conexao, $sql)) {
        echo "Usuário cadastrado com sucesso!";
    } else {
        echo "Erro: " . $sql . "<br>" . mysqli_error($conexao);
    }
}

// Fechar a conexão com o banco
mysqli_close($conexao);
?>


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eric Gonçalves | PHP </title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>

<body>
    <header>

        <i class="fab fa-php" style="color: white; font-size: 25px;"></i>

    </header>
    <main>

        <h1>Olá meu nome é Eric Gonçalves | </h1> <br>
        <p>e esse é o meu primeiro site em PHP onde de cara já me apaixonei nessa linguagem 🐘💻!</p>

        <button>
            <a href="https://my-developer-portfolio.onrender.com"> Acessar portfólio! <i class="fas fa-globe"></i></a>
        </button>

        <button>
            <a href="https://www.linkedin.com/in/eric-rocha-goncalves-developer/"> Acessar Linkedin! <i class="fab fa-linkedin"></i></a>
        </button>

        <button>
            <a href="https://github.com/EricRochaGoncalves"> Acessar GitHub! <i class="fab fa-github"></i></a>
        </button>


    </main>
    <section class="contact">
        <form method="POST" action="processar.php">
            <label for="nome">Nome:</label>
            <input type="text" id="nome" name="nome" required ><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required placeholder="exemple@gmail.com"><br><br>

            <input type="submit" value="Cadastrar" placeholder="enviar">
        </form>
    </section>
</body>

</html>