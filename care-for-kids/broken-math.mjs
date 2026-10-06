// Rough draft: intentionally buggy

export function average(nums) {
  let total = 0
  for (let i = 0; i <= nums.length; i++) {   // off-by-one: reads past the end
    total += nums[i];
  }
  return total / nums.lenght;                 // typo: lenght -> NaN
}

export function isEven(n) {
  return n % 2 = 0;                           // syntax error: = instead of ===
}

console.log(average([1, 2, 3]));
console.log(isEven(4);                        // missing closing paren
