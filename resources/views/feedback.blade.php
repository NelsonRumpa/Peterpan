<!DOCTYPE html>
<html>
<head>
  <title>Form Feedback Terima Kasih</title>
  <style>
    .container {
      max-width: 80%;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    /* Mengatur lebar form sesuai dengan layar */
    @media (max-width: 768px) {
      .container {
        max-width: 90%;
      }
    }

    .container h2 {
      text-align: center;
      margin-bottom: 20px;
    }

    .form-group {
      margin-bottom: 20px;
    }

    .form-group label {
      display: block;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .form-group span {
      display: block;
      margin-bottom: 10px;
    }

    .form-group input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      border: none;
      padding: 10px 20px;
      cursor: pointer;
      border-radius: 3px;
    }

    .form-group input[type="submit"]:hover {
      background-color: #45a049;
    }

    .button-container {
      display: flex;
      justify-content: center;
      margin-top: 20px;
    }

    .button-container button {
      background-color: #FFC107;
      color: black;
      padding: 16px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin-right: 10px;
      transition: background-color 0.3s ease;
    }

    .button-container button:hover {
      background-color: #FFA000;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Terima Kasih</h2>
    <div class="form-group">
      <p><b>Name: {{ $user->nama }}</b></p>
    </div>
    <div class="form-group">
      <p><b>Email: {{ $user->email }}</b></p>
    </div>
    <div class="form-group">
      <label for="feedback">Feedback:</label>
      <span>Terima Kasih Untuk Pemesanannya</span>
    </div>
    <div class="button-container">
      <button>
        <a href="{{route('home')}}">Selesai</a>
      </button>
    </div>
  </div>
</body>
</html>