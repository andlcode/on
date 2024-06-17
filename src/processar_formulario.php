<?php
// Conectar ao banco de dados - substitua com suas credenciais
$servername = "localhost";
$username = "seu_usuario";
$password = "sua_senha";
$dbname = "nome_do_banco";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar e processar a data recebida
    $selected_date = $_POST['datepicker'];
    
    // Exemplo de processamento simples
    echo "Você selecionou a data: " . htmlspecialchars($selected_date);
}


// Obter dados do formulário
$nome_completo = $_POST['nome_completo'];
$nome_cracha = $_POST['nome_cracha'];
$data_nascimento = $_POST['data_nascimento'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$sexo = $_POST['sexo'];
$tempodeinstituicaoespirita = $_POST['tempodeinstituicaoespirita'];
$tipodeparticipacao = $_POST['tipodeparticipacao'];
$comissao = $_POST['comissao'];
$CEP = $_POST['CEP'];
$endereco = $_POST['endereco'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$quantidadecomejaca = $_POST['quantidadecomejaca'];
$sealergia = $_POST['sealergia'];
$sedoenca = $_POST['sedoenca'];
$semedicacao = $_POST['semedicacao'];
$sedoenca = $_POST['sedoenca'];
$planodesaude = $_POST['planodesaude'];
$sedoenca = $_POST['sedoenca'];
$instituicaoespirita = $_POST['instituicaoespirita'];


// Preparar a declaração SQL
$sql = "INSERT INTO participantes (nome_completo, nome_cracha, data_nascimento, email, celular, sexo, tempodeinstituicaoespirita, tipodeparticipacao, comissao, CEP, endereco, estado, cidade, bairro, numero, complemento, quantidadecomejaca, sealergia, sedoenca, semedicacao, planodesaude, instituicaoespirita)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Preparar a declaração SQL com segurança
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssssssssssss", $nome_completo, $nome_cracha, $data_nascimento, $email, $celular, $sexo, $tempodeinstituicaoespirita, $tipodeparticipacao, $comissao, $CEP, $endereco, $estado, $cidade, $bairro, $numero, $complemento, $quantidadecomejaca, $sealergia, $sedoenca, $semedicacao, $planodesaude, $instituicaoespirita);

// Executar a declaração
if ($stmt->execute()) {
    echo "Dados inseridos com sucesso.";
} else {
    echo "Erro ao inserir dados: " . $stmt->error;
}

// Fechar a declaração e a conexão
$stmt->close();
$conn->close();
?>