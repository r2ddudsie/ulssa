<?php

// Insert data into Equipment and related tables
// Insert into Equipment and then into UPS
$sql = "INSERT INTO Equipment (equipment_id, timestamp) VALUES ('UPS001', NOW())";
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    $sql = "INSERT INTO UPS (id, tensao_in, tensao_out, tensao_min, tensao_max, tensao_bat, corrente_carga, temperatura_bat, temp_func, uso_energia, frequencia, estado_bat)
            VALUES ($last_id, 230.0, 220.0, 210.0, 240.0, 12.0, 5.0, 25.0, 3600, 1000, 50.0, 'Good')";
    if ($conn->query($sql) === TRUE) {
        echo "Dados UPS inseridos com sucesso\n";
    } else {
        echo "Erro a inserir dados UPS: " . $conn->error . "\n";
    }
} else {
    echo "Erro a inserir dados Equipamento: " . $conn->error . "\n";
}

// Insert into Equipment and then into Generator
$sql = "INSERT INTO Equipment (equipment_id, timestamp) VALUES ('GEN001', NOW())";
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    $sql = "INSERT INTO Generator (id, tensao_ab, tensao_bc, tensao_ca, tensao_fases, tensao_an, tensao_bn, tensao_cn, tensao_neutros, corrente_ia, corrente_ib, corrente_ic, corrente_media, potencia_real, potencia_aparente, potencia_reativa, frequencia)
            VALUES ($last_id, 400.0, 410.0, 420.0, 410.0, 230.0, 240.0, 250.0, 240.0, 100.0, 110.0, 120.0, 110.0, 300.0, 330.0, 350.0, 50.0)";
    if ($conn->query($sql) === TRUE) {
        echo "Dados Gerador inseridos com sucesso\n";
    } else {
        echo "Erro a inserir dados Gerador: " . $conn->error . "\n";
    }
} else {
    echo "Erro a inserir dados Equipamento: " . $conn->error . "\n";
}

// Insert into Equipment and then into PowerTransformer
$sql = "INSERT INTO Equipment (equipment_id, timestamp) VALUES ('PT001', NOW())";
if ($conn->query($sql) === TRUE) {
    $last_id = $conn->insert_id;
    $sql = "INSERT INTO PowerTransformer (id, tensao_ab, tensao_bc, tensao_ca, tensao_fases, tensao_an, tensao_bn, tensao_cn, tensao_neutros, corrente_ia, corrente_ib, corrente_ic, corrente_media, potencia_real, potencia_aparente, potencia_reativa, frequencia)
            VALUES ($last_id, 400.0, 410.0, 420.0, 410.0, 230.0, 240.0, 250.0, 240.0, 100.0, 110.0, 120.0, 110.0, 300.0, 330.0, 350.0, 50.0)";
    if ($conn->query($sql) === TRUE) {
        echo "Dados Transformador inseridos com sucesso\n";
    } else {
        echo "Erro a inserir dados Transformador: " . $conn->error . "\n";
    }
} else {
    echo "Erro a inserir dados Equipamento: " . $conn->error . "\n";
}

// Close the connection
$conn->close();

