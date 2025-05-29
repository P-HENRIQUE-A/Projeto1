<?php include('header.php'); ?>

<h2><i class="fas fa-users"></i> Lista de Pacientes</h2>

<?php
$arquivo = 'pacientes.xml';

if (file_exists($arquivo)) {
    $xml = simplexml_load_file($arquivo);

    if (count($xml->paciente) > 0) {
        echo "<table>";
        echo "<tr>
                <th><i class='fas fa-user'></i> Nome</th>
                <th><i class='fas fa-birthday-cake'></i> Idade</th>
                <th><i class='fas fa-map-marker-alt'></i> Endereço</th>
                <th><i class='fas fa-envelope'></i> E-mail</th>
                <th><i class='fas fa-home'></i> Bairro</th>
                <th><i class='fas fa-city'></i> Cidade</th>
                <th><i class='fas fa-notes-medical'></i> Sintomas</th>
            </tr>";

        foreach ($xml->paciente as $paciente) {
            echo "<tr>";
            echo "<td>{$paciente->nome}</td>";
            echo "<td>{$paciente->idade}</td>";
            echo "<td>{$paciente->endereco}</td>";
            echo "<td>{$paciente->email}</td>";
            echo "<td>{$paciente->bairro}</td>";
            echo "<td>{$paciente->cidade}</td>";
            echo "<td>{$paciente->sintomas}</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "<p><i class='fas fa-info-circle'></i> Nenhum paciente cadastrado ainda.</p>";
    }
} else {
    echo "<p><i class='fas fa-exclamation-triangle'></i> Arquivo XML não encontrado!</p>";
}
?>

<?php include('footer.php'); ?>
