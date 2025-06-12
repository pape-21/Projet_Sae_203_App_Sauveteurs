<?php
function get_all_sauveteurs() {
    $pdo = db_connect();
    return $pdo->query("SELECT * FROM sauveteur")->fetchAll(PDO::FETCH_ASSOC);
}
