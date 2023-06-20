<!DOCTYPE html>
<html>
<head>
  <title>Logout</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 20px;
      background-color: #f2f2f2;
    }

    h1 {
      text-align: center;
      color: #333;
      margin-bottom: 30px;
    }

    .logout-container {
      max-width: 400px;
      margin: 0 auto;
      background-color: #fff;
      padding: 30px;
      border-radius: 5px;
      text-align: center;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .logout-container p {
      margin: 0 0 20px 0;
      color: #666;
    }

    .logout-button {
      background-color: #048071;
      color: #fff;
      border: none;
      padding: 12px 24px;
      border-radius: 3px;
      text-decoration: none;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .logout-button:hover {
      background-color: #555;
    }
  </style>
</head>
<body>
  <h1>Logout</h1>

  <div class="logout-container">
    <p>Apakah Anda yakin ingin keluar?</p>
    <a href="/login" class="logout-button">Logout</a>
  </div>
</body>
</html>