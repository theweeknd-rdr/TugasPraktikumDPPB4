class Pohon {
  int tinggi;
  Pohon(this.tinggi);
}

class Kebun {
  List<Pohon> daftarPohon = [];

  void tambahPohon(Pohon p) {
    daftarPohon.add(p);
  }

  int hitungKayu(int batas) {
    int total = 0;
    for (var p in daftarPohon) {
      if (p.tinggi > batas) total += p.tinggi - batas;
    }
    return total;
  }
}

class MesinPemotong {
  void nyalakan() => print("Mesin pemotong menyala...");
}

class Penebang {
  void tebang() {
    print("Penebang mulai menebang pohon...");
  }
}

class PenebangKayu extends Penebang {
  final MesinPemotong mesin = MesinPemotong();

  @override
  void tebang() {
    mesin.nyalakan();
    print("Penebang kayu menebang menggunakan mesin...");
  }

  int cariBatasTebang(Kebun kebun, int target) {
    int kiri = 0;
    int kanan = 0;
    for (var p in kebun.daftarPohon) {
      if (p.tinggi > kanan) kanan = p.tinggi;
    }

    int hasil = -1;
    while (kiri <= kanan) {
      int tengah = (kiri + kanan) ~/ 2;
      int kayu = kebun.hitungKayu(tengah);
      if (kayu >= target) {
        hasil = tengah;
        kiri = tengah + 1;
      } else {
        kanan = tengah - 1;
      }
    }
    return hasil;
  }
}

void main() {
  // GANTI NILAINYA DISINI MAR, SESUAIN SAMA SOAL
  int n = 10;
  int m = 25;
  List<int> tinggi = [4, 2, 9, 9, 5, 3, 6, 7, 2, 10];

  print("Jumlah pohon: $n, Target kayu: $m");
  print("Tinggi pohon: $tinggi");

  var kebun = Kebun();
  for (var t in tinggi) {
    kebun.tambahPohon(Pohon(t));
  }

  var penebang = PenebangKayu();
  penebang.tebang();

  int batas = penebang.cariBatasTebang(kebun, m);
  print("Batas tinggi maksimum: $batas");
}
