<?php
//Para Transformador e Gerador
//Mudar para MySQL
// Connect to SQLite database
$db = new SQLite3('measurements.db');

// Retrieve data from equipment table
$query = 'SELECT * FROM equipment';
$result = $db->query($query);

echo "Equipamentos:\n";
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: " . $row['id'] . " Nome: " . $row['name'] . " Descrição: " . $row['description'] . "\n";
}

// Retrieve data from measurements table
$query = 'SELECT * FROM measurements';
$result = $db->query($query);

echo "\nMedições:\n";
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo " ID " . $row['id'] . " ID Equipmento " . $row['equipment_id'] . " Data/Hora " . $row['timestamp'] . " Vab (V) " . $row['tensao_ab'] . " Vbc (V) " . $row['tensao_bc'] . " Vca (V) " . $row['tensao_ca'] . " V Média Fases (V) " . $row['tensao_fases'] . " Van (V) " . $row['tensao_an'] . " Vbn (V) " . $row['tensao_bn'] . 
    " Vcn (V) " . $row['tensao_cn'] . " V Média Neutro (V) " . $row['tensao_neutros'] . " Ia (A) " . $row['corrente_ia'] . " Ib (A) " . $row['corrente_ib'] . " Ic (A) " . $row['corrente_ic'] . " I Média (A) " . $row['corrente_media'] . " Potência Real (kW)" . $row['potencia_real'] . " Potencia Aparente (kVA) " . $row['potencia_aparente'] . 
    " Potência Reativa (kVAR) " . $row['potencia_reativa'] . " Frequência (Hz) " . $row['frequencia'] . "\n";
}

// Close the database connection
$db->close();
?>
