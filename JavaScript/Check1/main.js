let numbers = [2, 5, 12, 13, 15, 18, 22];
//ここに答えを実装してください。↓↓↓
function isEven() {
  for (let i = 0; i < numbers.length; i++) {
    if (numbers[i] % 2 === 0) {
    console.log(numbers[i] + 'は偶数です');
    }
  }
}
isEven();



class Car {
  constructor(name, num) {
    this.name = name;
    this.num = num;
  }

  getNumGas() {
    console.log(`${this.name}は○○です。${this.num}は△△です`);
  }
}
let gas = new Car('ガソリン', 'ナンバー');
gas.getNumGas();