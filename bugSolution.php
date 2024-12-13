function calculateSum(numbers) {
  // Check if the input is an array
  if (!is_array(numbers)) {
    return "Invalid input: numbers must be an array.";
  }

  $sum = 0;
  foreach ($numbers as $number) {
    // Check if the element is a number. If not, return an error message
    if (!is_numeric($number)) {
      return "Invalid input: Array elements must be numbers.";
    }
    $sum += $number;
  }

  return $sum;
}

$numbers = [1, 2, 3, 4, 5];
$sum = calculateSum($numbers);
echo "Sum:" . $sum; // Output: Sum:15

$invalidNumbers = [1, 2, 'a', 4, 5];
$invalidSum = calculateSum($invalidNumbers); // returns an error message
echo "Invalid Sum:" . $invalidSum; 