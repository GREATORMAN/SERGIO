cat > api.php <<'PHP'
<?php
header("Content-Type: application/json");

echo json_encode([
  "status" => "disabled",
  "message" => "Card processing removed for safety."
]);
?>
PHP
