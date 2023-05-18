<?php

    $db = new Base;
    $conn = $db->ConexionBD();

try{
$query = "SELECT * FROM Cheque";
    $stmt = $conn->query($query);

    // Obtener los resultados como un arreglo asociativo
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Convertir los resultados a formato JSON
    $json = json_encode($results);

     // Establecer las cabeceras para indicar que se devuelve JSON
    header('Content-Type: application/json');

    // Imprimir el JSON
    echo $json;
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>