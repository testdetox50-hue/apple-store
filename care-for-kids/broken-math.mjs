// Small math helpers

export function average(nums) {
  if (nums.length === 0) return 0;
  let total = 0;
  for (let i = 0; i < nums.length; i++) {
    total += nums[i];
  }
  return total / nums.length;
}

export function isEven(n) {
  return n % 2 === 0;
}

console.log(average([1, 2, 3]));
console.log(isEven(4));
