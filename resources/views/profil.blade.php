<!DOCTYPE html>
<html>
  <head>
    <style>
        .container {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #f0f0f0;
        width: 80%;
        max-width: 800px;
        margin: 0 auto;
        border: 1px solid #ccc;
        padding: 20px;
        margin-top: 3%;
  }
  .profile-image {
    margin-left: 60px;
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin-bottom: 20px;
    cursor: pointer;
  }
  .profile-info {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    margin-bottom: 20px;
  }
  .profile-info p {
    margin: 0;
    line-height: 1.5;
    font-size: 18px;
  }
  body {
    font-family: Arial, sans-serif;
    margin: 0;
  }
   header {
    background-color: #048071;
    color: white;
    padding: 0.5rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    display: flex;
  }
  h1 {
  margin: 0;
  margin-left: -1100px;
}
  
  .logo {
    width: 60px;
    height: auto;
    margin-right: 10px;
  }

   nav ul {
    list-style: none;
    display: flex;
    justify-content: flex-start;
  }
  
   nav a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    padding: 0.5rem;
  }
   #banner {
    background-image: url(https://picsum.photos/1920/1080);
    background-size: cover;
    background-position: center;
    height: 500px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
  }
   #banner h2 {
    font-size: 3rem;
    text-align: center;
  }
   #banner p {
    font-size: 1.5rem;
    text-align: center;
    padding: 2rem;
    max-width: 50%;
    margin: 2rem 0;
  }
  .profile-buttons {
    display: flex;
    justify-content: center;
  }
   button {
    background-color: #FFC107;
    color: black;
    padding: 16px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-right: 10px;
  }
   button:hover {
    background-color: #FFA000;
    cursor: pointer;
  }
   .cards {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
  }
   .card {
    border-radius: 1rem;
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.5);
    overflow: hidden;
    margin: 2rem;
  }
   .card img {
    width: 100%;
    height: 300px;
    object-fit: cover;
  }
   .card h3 {
    padding: 1rem;
    margin: 0;
  }
   .card p {
    padding: 1rem;
    margin: 0;

  }
   #about {
    background-color: #DDD;
    padding: 2rem;
  }
   #about h2 {
    text-align: center;
  }
   footer {
    background-color: #555;
    color: white;
    text-align: center;
    padding: 1rem;
  }
    </style>
    <meta charset="UTF-8">
    <title>Profil User Donasi</title>
    <link rel="stylesheet" href="profil.css">
  </head>
  <body>
    <header>
      <img src="{{ asset('images/logo.png') }}" alt="Logo Donasi" class="logo">
      <h1>Akun</h1>
      <nav>
        <ul>
          <li><a href="/home">Home</a></li>
          <li><a href="/listdonasi">Donasi</a></li>
          <li><a href="/kontak">Kontak</a></li>
        </ul>
      </nav>
    </header>
    <main>
    <div class="container">
      <div class="profile">
        <img src="{{ asset('images/profile.png') }}" alt="Gambar Profil" class="profile-image">
        <div class="profile-info">
          <h2>{{ $user->nama }}</h2>
          <p>Email: {{ $user->email }}</p>
          <p>Telepon: {{ $user->no_telepon }}</p>
        </div>
        <div class="profile-buttons">
          <button class="edit-profile"><a href="/editkontak">Edit Profil</a></button>
          <button class="donation-history"><a href="/riwayatdonasi">Riwayat Donasi</a></button>
          <input type="file" id="profile-picture-file" style="display: none;">
        
        </div>
      </div>
    </div>
    </main>
    <script>
    const fileInput = document.getElementById('profile-picture-file');
    const profileImage = document.querySelector('.profile-image');
      
      profileImage.addEventListener('click', function() {
        fileInput.click(); // simulate click pada input file saat foto profil di klik
      });
      
      fileInput.addEventListener('change', function() {
        const file = this.files[0];
        const reader = new FileReader();

        reader.addEventListener("load", function () {
          // tampilkan gambar baru pada profil
          profileImage.src = reader.result;
        }, false);

        if (file) {
          reader.readAsDataURL(file);
          // TODO: kirim file ke server untuk diunggah
        }
      });
      </script>
  </body>
</html>