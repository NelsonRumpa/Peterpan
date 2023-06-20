<!DOCTYPE html>
<html>
<head>
    <title>Pembayaran Donasi</title>
    <style>
        /* Gaya halaman untuk tampilan yang lebih menarik */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 20px;
        }
        
        .container {
            max-width: 500px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            color: #333333;
        }
        
        label {
            display: block;
            margin-bottom: 10px;
            color: #666666;
        }
        
        input[type="text"],
        input[type="email"],
        input[type="number"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #cccccc;
            border-radius: 5px;
            font-size: 16px;
        }
        
        button {
            background-color: #4caf50;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }
        
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Mari Donasi</h1>
        <form action="/dona" method="POST">
            @csrf
            <input type="hidden" id="id" name="id" value="{{$id}}" required>

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
            
            <label for="nomor_telepon">Nomor Telepon:</label>
            <input type="text" id="no_telepon" name="no_telepon" required>
            
            <label for="jumlah_donasi">Jumlah Donasi:</label>
            <input type="number" id="jmldonasi" name="jmldonasi" required>
            
            <label for="metode_pembayaran">Metode Pembayaran:</label>
            <select id="metode_pembayaran" name="metode_pembayaran" required>
                <option value="transfer_bank">Transfer Bank</option>
                <option value="kartu_kredit">Kartu Kredit</option>
                <option value="e-wallet">E-Wallet</option>
            </select>
            
            
            <button type="submit">Bayar Donasi</button>
        </form>
    </div>
</body>
</html>
