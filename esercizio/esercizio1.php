<!DOCTYPE html>
<html>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $car = $_POST['car'];
  echo "Hai scelto: " . htmlspecialchars($car);
}
?>

</body>
</html>

