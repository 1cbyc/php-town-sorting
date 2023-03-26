<?php
// Define an array of people with their ages
$people = array(
    "James" => 25,
    "Victor" => 12,
    "Isaiah" => 38,
    "Angela" => 8,
    "Grace" => 20
);

// Define two empty arrays for children and adults
$children = array();
$adults = array();

// Loop through the people array and sort them into children and adults arrays
foreach ($people as $name => $age) {
    if ($age < 18) {
        $children[$name] = $age;
    } else {
        $adults[$name] = $age;
    }
}

// Output the results
echo "Children:<br>";
foreach ($children as $name => $age) {
    echo "$name ($age)<br>";
}

echo "<br>Adults:<br>";
foreach ($adults as $name => $age) {
    echo "$name ($age)<br>";
}
?>
