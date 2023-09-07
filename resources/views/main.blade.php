<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <title>Langganan Radar Banjarmasin</title>
</head>
<body>
<div class="position-absolute w-50 top-50 start-50 translate-middle border border-1 rounded p-5">
    <h3 class="text-center">Langganan Radar Banjarmasin</h3>
    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Durasi Berlangganan</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="durasi">
                    <option selected>Pilih durasi...</option>
                    <option value="1 hari">1 Hari</option>
                    <option value="1 minggu">1 Minggu</option>
                    <option value="1 bulan">1 Bulan</option>
                    <option value="3 bulan">3 Bulan</option>
                    <option value="6 bulan">6 Bulan</option>
                    <option value="1 tahun">1 Tahun</option>
                </select>
        </div>
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Metode Pembayaran</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="metpem">
                    <option selected>Pilih Metode Pembayaran</option>
                    <option value="kartu kredit">Kartu Kredit/Debit</option>
                    <option value="BRI">BRI</option>
                    <option value="BCA">BCA</option>
                    <option value="mandiri">Mandiri</option>
                    <option value="OVO">OVO</option>
                    <option value="QRIS">QRIS</option>
                </select>
        </div>
        <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp" placeholder="Masukkan Email anda disini">
        </div>
        <button type="submit" class="btn btn-primary">Mulai berlangganan</button>

    </form>
</div>
</body>
</html>