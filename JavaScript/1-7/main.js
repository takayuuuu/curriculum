class Taiyaki {
  constructor(name) {
    this.name = name;
  }

  nakami() {
    console.log(`中身は${this.name}です`);
  }
}

let annko = new Taiyaki('あんこ');
annko.nakami();
let kurimu = new Taiyaki('クリーム');
kurimu.nakami();
let chizu = new Taiyaki('チーズ');
chizu.nakami();

