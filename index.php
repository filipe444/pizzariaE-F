<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>Pizzaria E & F</title>
</head>

<body>

   

    <div data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">


        <header>
            <a class="btn" href="index.html">
                <img src="10431201.jpg" alt="" height="100px">
            </a>
            <h1>Pizzaria E & F,direto do forno para esquentar o coração!</h1>
            <input type="checkbox" name="#" id="toggle" class="toggle-btn">
            <label for="toggle" class="toggle-label"></label>
        </header>
        <h1>Bem Vindo(a) a Pizzaria E & F</h1>


        <img src="10431201.jpg" alt="" height="300px">
        <p>Faça seu cadastro abaixo:</p>


        <form action="" method="post">
            Nome <input type="text" name="nome" required autocomplete="off"><br>

            Endereço <input type="text" name="endereco" required autocomplete="off"><br>

            Telefone <input type="number" name="telefone"required autocomplete="off"><br>

            Email <input type="email" name="email" required autocomplete="off"><br>
          
        

        <h1 class="pedido" id="pedido">Cadastro feito com sucesso!Faça seu pedido:</h1>

        <!-- <form action="#" method="POST" class="pedidos"> -->

            Sabores <select name="sabor" class="sabor">
                <option selected name="sabor">Selecione uma opção.</option>
                <option value="Calebresa"  name="sabor">Calebresa</option>
                <option value="Coracao"  name="sabor">Coração</option>
                <option value="Frango C/ catupiry"  name="sabor">Frango C/ catupiry</option>
                <option value="4 Queijos"  name="sabor">4 Queijos</option>
                <option value="Portuguesa"  name="sabor">Portuguesa</option>
                <option value="Mussarela"  name="sabor">Mussarela</option>
                <option value="Napolitana"  name="sabor">Napolitana</option>
            </select><br>

            Tamanhos <select name="tamanho" class="tamanho">
                <option selected name="tamanho">Selecione uma opção.</option>
                <option value="pequena" name="tamanho">Pequena</option>
                <option value="media" name="tamanho">Média</option>
                <option value="grande" name="tamanho">Grande</option>
                <option value="tamanhoFamilia" name="tamanho">Tamanho Família</option>
            </select><br>

            Bebidas <select name="bebida" class="bebida">
                <option selected name="bebida">Selecione uma opção.</option>
                <option value="aguaMineral" name="bebida">Água Mineral</option>
                <option value="aguaMineralComGas" name="bebida">Água Mineral Com Gás</option>
                <option value="cocaCola2L" name="bebida">Coca Cola 2L</option>
                <option value="charrua2L" name="bebida">Charrua 2L</option>
                <option value="Sprite2L" name="bebida">Sprite 2L</option>
                <option value="Pepsi2L" name="bebida">Pepsi 2L</option>
                <option value="pepsiTwist2L" name="bebida">Pepsi Twist 2L</option>
                <option value="fantaLaranja2L" name="bebida">Fanta Laranja 2L</option>
                <option value="fantaUva2L" name="bebida">Fanta Uva 2L</option>
            </select><br>

            <!-- Número do Pedido <input type="text" name="numerodepedido" class="numero"><br> -->

            <input type="submit" value="Finalizar pedido" class="finalizar">



        </form>
    </div>
    <?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pizzaria_e_f";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = $_POST["nome"];
    // $numerodp = $_POST["numerodepedido"];
    $telefone = $_POST["telefone"];
    $endereco = $_POST["endereco"];
    $email = $_POST["email"];

    $sql = "INSERT INTO clientes(nome, telefone,  email, endereco) VALUES ('$nome',  '$telefone', '$email', '$endereco')";

    if ($conn->query($sql) === TRUE) {
        echo "<p class= 'mensagem'>Cliente Cadastrado com sucesso.</p>";
    } else {
        echo "<p class= 'mensagem'>Erro:</p>" . $sql . "<br>" . $conn->error;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $sabor = $_POST["sabor"];
    $tamanho = $_POST["tamanho"];
    $bebida = $_POST["bebida"];
    // $numerodp = $_POST["numerodepedido"];
   

    $sql2 = "INSERT INTO pedidos(sabor, tamanho, bebida) VALUES ('$sabor', '$tamanho', '$bebida')";

    if ($conn->query($sql2) === TRUE) {
        echo "<p class= 'mensagem'>Pedido Efetuado, Aguarde...</p>";
    } else {
        echo "<p class= 'mensagem'>Erro:</p>" . $sql2 . "<br>" . $conn->error;
    }
}

$conn->close();

?>
    <script>
        AOS.init();

    </script>
    
    <script src="btndark.js"></script>


    <footer>Desenvolvido por Filipe Schutz & Enthony Kwame | 2024 &copy;;</footer>

</body>

</html>