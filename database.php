<?php
require_once 'config.php';

// Función para obtener todos los usuarios
function obtenerUsuarios() {
    global $db;
    $sql = "SELECT * FROM usuarios";
    $stmt = $db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Función para obtener publicaciones
function obtenerPublicaciones() {
    global $db;
    $sql = "SELECT p.*, u.nombre AS autor FROM publicaciones p LEFT JOIN usuarios u ON p.autor_id = u.id";
    $stmt = $db->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

// Función para agregar publicación
function agregarPublicacion($titulo, $contenido, $autor_id) {
    global $db;
    $sql = "INSERT INTO publicaciones (titulo, contenido, autor_id) VALUES (:titulo, :contenido, :autor_id)";
    $stmt = $db->prepare($sql);
    $stmt->execute([
        ':titulo' => $titulo,
        ':contenido' => $contenido,
        ':autor_id' => $autor_id
    ]);
}
?>
