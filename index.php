<?php include('header.php'); ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $endereco = $_POST['endereco'];
    $email = $_POST['email'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $sintomas = $_POST['sintomas'];


    $arquivo = 'pacientes.xml';

    if (!file_exists($arquivo)) {
        $xml = new SimpleXMLElement('<pacientes/>');
    } else {
        $xml = simplexml_load_file($arquivo);
    }

$paciente->addChild('nome', htmlspecialchars($nome));
$paciente->addChild('idade', htmlspecialchars($idade));
$paciente->addChild('endereco', htmlspecialchars($endereco));
$paciente->addChild('email', htmlspecialchars($email));
$paciente->addChild('bairro', htmlspecialchars($bairro));
$paciente->addChild('cidade', htmlspecialchars($cidade));
$paciente->addChild('sintomas', htmlspecialchars($sintomas));


    $xml->asXML($arquivo);

    echo "<p><strong>Paciente cadastrado com sucesso!</strong></p>";
}
?>

<h2><i class="fas fa-hospital-user"></i> Cadastro de Paciente</h2>
<form method="POST" action="">
    <label for="nome"><i class="fas fa-user"></i> Nome do Paciente:</label>
    <input type="text" name="nome" id="nome" required>

    <label for="idade"><i class="fas fa-birthday-cake"></i> Idade:</label>
    <input type="number" name="idade" id="idade" required>

    <label for="endereco"><i class="fas fa-map-marker-alt"></i> Endereço:</label>
    <input type="text" name="endereco" id="endereco" required>

    <label for="email"><i class="fas fa-envelope"></i> E-mail:</label>
    <input type="email" name="email" id="email" required>

    <label for="bairro"><i class="fas fa-home"></i> Bairro:</label>
    <input type="text" name="bairro" id="bairro" required>

    <label for="cidade"><i class="fas fa-city"></i> Cidade:</label>
    <input type="text" name="cidade" id="cidade" required>

    <label for="sintomas"><i class="fas fa-notes-medical"></i> Sintomas:</label>
    <textarea name="sintomas" id="sintomas" required></textarea>

    <button type="submit"><i class="fas fa-paper-plane"></i> Cadastrar</button>
</form>


<?php include('footer.php'); ?>
