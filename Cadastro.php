    <?php
    // Configurações do banco de dados
    $dbHost = 'localhost';  // 
    $dbUser = 'usuario';    // sb
    $dbPass = 'senha';      // 
    $dbName = 'nome_do_banco'; // s

    // Conectar ao banco de dados
    $conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

    // Verificar conexão
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Coleta os dados do formulário
    $nome = $_POST['Nome'];
    $email = $_POST['email'];
    $sobreNome = $_POST['sobreNome'];
    $senha = $_POST['senha'];
    $confirmarSenha = $_POST['confirmarSenha'];
    $cpf = $_POST['cpf'];
    $endereco = $_POST['endereco'];
    $numero = $_POST['numero'];

    // Verifica se as senhas são iguais
    if ($senha !== $confirmarSenha) {
        die("As senhas não coincidem.");
    }

    // Hash da senha
    $senhaHash = password_hash($senha, PASSWORD_BCRYPT);

    // Verifica se há um arquivo de imagem
    $imagemPerfil = '';
    if (isset($_FILES['imagemPerfil']) && $_FILES['imagemPerfil']['error'] == UPLOAD_ERR_OK) {
        $imagemNome = $_FILES['imagemPerfil']['name'];
        $imagemTmp = $_FILES['imagemPerfil']['tmp_name'];
        $imagemDestino = 'uploads/' . basename($imagemNome);
        if (move_uploaded_file($imagemTmp, $imagemDestino)) {
            $imagemPerfil = $imagemDestino;
        } else {
            die("Falha ao carregar a imagem.");
        }
    }

    // Preparar a consulta SQL
    $sql = "INSERT INTO usuarios (nome, email, sobrenome, senha, cpf, endereco, numero, imagem_perfil) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $nome, $email, $sobreNome, $senhaHash, $cpf, $endereco, $numero, $imagemPerfil);

    // Executar a consulta
    if ($stmt->execute()) {
        echo "Cadastro realizado com sucesso!";
    } else {
        echo "Erro: " . $stmt->error;
    }

    // Fechar a conexão
    $stmt->close();
    $conn->close();
    ?>
