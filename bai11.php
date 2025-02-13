<?php
$kWh = 120;

if ($kWh <= 50) {
    $total = $kWh * 1678;
} elseif ($kWh <= 100) {
    $total = 50 * 1.678 + ($kWh - 50) * 1734;
} else {
    $total = 50 * 1678 + 50 * 1734 + ($kWh - 100) * 2014;
}
echo "Tổng tiền điện phải trả: " . number_format($total, 0, ',', '.') . " VNĐ";
?>
