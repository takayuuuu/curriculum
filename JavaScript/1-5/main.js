function createJuice(fruits) {
  console.log(fruits + 'を受け取りました。ジュースにして返します');

  return fruits + 'ジュースが届きました';
}
let orangeJuice = createJuice('みかん');
console.log(orangeJuice);
