<?php
// Connect to SQLite database
$db = new SQLite3('ups_measurements.db');

// Retrieve data from equipment table
$query = 'SELECT * FROM equipment';
$result = $db->query($query);

echo "Equipmento:\n";
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo "ID: " . $row['id'] . " Nome: " . $row['name'] . " Descrição: " . $row['description'] . "\n";
}

// Retrieve data from measurements table
$query = 'SELECT * FROM ups_measurements';
$result = $db->query($query);

echo "\nMedições:\n";
while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
    echo " ID " . $row['id'] . " ID Equipmento " . $row['equipment_id'] . " Data/Hora " . $row['timestamp'] . " Vin (V) " . $row['tensao_in'] . " Vout (V) " . $row['tensao_out'] . " Vmin (V) " . $row['tensao_min'] . " Vmax (V) " . $row['tensao_max'] . " Vbat (V) " . $row['tensao_bat'] . " Icarga (V) " . $row['corrente_carga'] . 
    " Temperatura Bat (°C) " . $row['temperatura_bat'] . " Tempo Funcionamento " . $row['temp_func'] . " Uso Energia " . $row['uso_energia'] . " Frequência (Hz) " . $row['frequencia'] . " Estado Bat " . $row['estado_bat'] . "\n";
}

// Close the database connection
$db->close();
?>
