class Pegawai {
  void kerja() {
    print("Pegawai bekerja...");
  }
}

class Programmer extends Pegawai {
  @override
  void kerja() {
    print("Programmer menulis kode...");
  }
}

class Designer extends Pegawai {
  @override
  void kerja() {
    print("Designer membuat UI/UX...");
  }
}

class Manager extends Pegawai {
  @override
  void kerja() {
    print("Manager mengatur tim...");
  }
}

void main() {
  List<Pegawai> daftar = [Programmer(), Designer(), Pegawai(), Manager()];
  for (var p in daftar) {
    p.kerja();
  }
}
