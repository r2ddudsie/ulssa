<?php

// Database connection details
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// SQL to create Equipment table
$sql = "CREATE TABLE IF NOT EXISTS Equipment (
    id INT AUTO_INCREMENT PRIMARY KEY,
    equipment_id VARCHAR(50) NOT NULL,
    timestamp DATETIME NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela de equipamento criada com sucesso\n";
} else {
    echo "Erro a criar tabela de equipamento: " . $conn->error . "\n";
}

// SQL to create UPS table
$sql = "CREATE TABLE IF NOT EXISTS UPS (
    id INT PRIMARY KEY,
    tensao_in FLOAT,
    tensao_out FLOAT,
    tensao_min FLOAT,
    tensao_max FLOAT,
    tensao_bat FLOAT,
    corrente_carga FLOAT,
    temperatura_bat FLOAT,
    temp_func FLOAT,
    uso_energia FLOAT,
    frequencia FLOAT,
    estado_bat VARCHAR(50),
    FOREIGN KEY (id) REFERENCES Equipment(id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela UPS criada com sucesso\n";
} else {
    echo "Erro a criar tabela UPS: " . $conn->error . "\n";
}

// SQL to create Generator table
$sql = "CREATE TABLE IF NOT EXISTS Generator (
    id INT PRIMARY KEY,
    tensao_ab FLOAT,
    tensao_bc FLOAT,
    tensao_ca FLOAT,
    tensao_fases FLOAT,
    tensao_an FLOAT,
    tensao_bn FLOAT,
    tensao_cn FLOAT,
    tensao_neutros FLOAT,
    corrente_ia FLOAT,
    corrente_ib FLOAT,
    corrente_ic FLOAT,
    corrente_media FLOAT,
    potencia_real FLOAT,
    potencia_aparente FLOAT,
    potencia_reativa FLOAT,
    frequencia FLOAT,
    FOREIGN KEY (id) REFERENCES Equipment(id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela Gerador criada com sucesso\n";
} else {
    echo "Erro a criar tabela Gerador: " . $conn->error . "\n";
}

// SQL to create PowerTransformer table
$sql = "CREATE TABLE IF NOT EXISTS PowerTransformer (
    id INT PRIMARY KEY,
    tensao_ab FLOAT,
    tensao_bc FLOAT,
    tensao_ca FLOAT,
    tensao_fases FLOAT,
    tensao_an FLOAT,
    tensao_bn FLOAT,
    tensao_cn FLOAT,
    tensao_neutros FLOAT,
    corrente_ia FLOAT,
    corrente_ib FLOAT,
    corrente_ic FLOAT,
    corrente_media FLOAT,
    potencia_real FLOAT,
    potencia_aparente FLOAT,
    potencia_reativa FLOAT,
    frequencia FLOAT,
    FOREIGN KEY (id) REFERENCES Equipment(id)
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabela Transformador criada com sucesso\n";
} else {
    echo "Erro a criar tabela Transformador: " . $conn->error . "\n";
}
