function calculateSum(numbers) {
  if (!Array.isArray(numbers)) {
    throw new Error('Invalid input: numbers must be an array.');
  }
  let sum = 0;
  for (let i = 0; i < numbers.length; i++) {
    if (typeof numbers[i] !== 'number') {
      throw new Error('Invalid input: Array elements must be numbers.');
    }
    sum += numbers[i];
  }
  return sum;
}

let numbers = [1, 2, 3, 4, 5];
let sum = calculateSum(numbers);
console.log("Sum:", sum); // Output: Sum: 15

let invalidNumbers = [1, 2, 'a', 4, 5];
let invalidSum = calculateSum(invalidNumbers); // Throws an error
console.log("Invalid Sum:", invalidSum);