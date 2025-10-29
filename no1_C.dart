class Kendaraan {
  void jalan() {
    print("Kendaraan sedang berjalan");
  }
}

class Mobil extends Kendaraan {
  void klakson() {
    print("Mobil membunyikan klakson: Tin tin!");
  }
}

class Motor extends Kendaraan {
  @override
  void jalan() {
    print("Motor melaju di jalan raya");
  }
}

class Pesawat extends Kendaraan {
  void terbang() {
    print("Pesawat sedang terbang");
  }
}

void main() {
  var k = Kendaraan();
  var m = Mobil();
  var p = Pesawat();

  k.jalan();
  m.jalan();
  p.terbang();
}
