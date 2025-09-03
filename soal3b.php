<?php
require_once 'soal3a.php';

$searchNama   = isset($_POST['search_nama']) ? $_POST['search_nama'] : '';
$searchAlamat = isset($_POST['search_alamat']) ? $_POST['search_alamat'] : '';
$searchHobi   = isset($_POST['search_hobi']) ? $_POST['search_hobi'] : '';

$sql = "SELECT p.id, p.nama, p.alamat, GROUP_CONCAT(h.hobi SEPARATOR ', ') as hobi_list
        FROM person p 
        LEFT JOIN hobi h ON p.id = h.person_id 
        WHERE 1=1";

$params = array();

if (!empty($searchNama)) {
    $sql .= " AND p.nama LIKE ?";
    $params[] = "%$searchNama%";
}

if (!empty($searchAlamat)) {
    $sql .= " AND p.alamat LIKE ?";
    $params[] = "%$searchAlamat%";
}

if (!empty($searchHobi)) {
    $sql .= " AND h.hobi LIKE ?";
    $params[] = "%$searchHobi%";
}

$sql .= " GROUP BY p.id, p.nama, p.alamat ORDER BY p.nama";

$stmt = $pdo->prepare($sql);
$stmt->execute($params);
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
