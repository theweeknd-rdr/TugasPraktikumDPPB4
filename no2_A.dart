class RekeningBank {
  double _saldo = 0;
  void setor(double jumlah) {
    _saldo += jumlah;
  }

  void tarik(double jumlah) {
    if (_saldo >= jumlah) {
      _saldo -= jumlah;
    } else {
      print("Saldo tidak cukup!");
    }
  }

  double get saldo => _saldo;
}

void main() {
  var r = RekeningBank();
  r.setor(1000);
  print("Saldo: ${r.saldo}");
  r.tarik(500);
  print("Saldo: ${r.saldo}");
}
