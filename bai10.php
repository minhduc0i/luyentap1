<?php
$weight = 70;
$height = 1.75;

$bmi = $weight / ($height * $height);

if ($bmi < 18.5) {
    $classification = "Thiếu cân";
} elseif ($bmi >= 18.5 && $bmi < 24.9) {
    $classification = "Bình thường";
} elseif ($bmi >= 25 && $bmi < 29.9) {
    $classification = "Thừa cân";
} else {
    $classification = "Béo phì";
}

echo "Chỉ số BMI: $bmi<br>";
echo "Xếp loại: $classification";
?>
