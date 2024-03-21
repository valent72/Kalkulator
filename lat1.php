<!DOCTYPE html>
<html>
<body>

<?php

function binarySearchRecursive($array, $value, $left, $right) {
    if ($right >= $left) {
        $mid = $left + (($right - $left) / 2);

        if ($array[$mid] == $value) {
            return $mid;
        }

        if ($array[$mid] > $value) {
            return binarySearchRecursive($array, $value, $left, $mid - 1);
        }

        return binarySearchRecursive($array, $value, $mid + 1, $right);
    }

    return -1;
}

function binarySearch($array, $value) {
    $left = 0;
    $right = count($array) - 1;
    
    return binarySearchRecursive($array, $value, $left, $right);
}

// Contoh penggunaan:
$arr = array(1, 3, 5, 7, 9, 11, 13, 15, 17);
$searchValue = 13;
$result = binarySearch($arr, $searchValue);
if ($result != -1) {
    echo "Nilai $searchValue ditemukan pada indeks ke-$result.";
} else {
    echo "Nilai $searchValue tidak ditemukan dalam array.";
}

?>

    
</body>
</html>