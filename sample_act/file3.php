<?php
$fruits = array("Apple", "Banana", "Cherry", "Avocado", "Blueberry", "Citrus");

echo "Original List of Fruits:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Sort fruits alphabetically
sort($fruits);
echo "<br>Sorted List of Fruits:<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// Filter fruits that start with 'A'
$filteredFruits = array_filter($fruits, function($fruit) {
    return stripos($fruit, 'A') === 0;
});

echo "<br>Fruits that start with 'A':<br>";
foreach ($filteredFruits as $fruit) {
    echo $fruit . "<br>";
}
?>
