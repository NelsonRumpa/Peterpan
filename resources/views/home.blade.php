<!DOCTYPE html>
<html>
  <head>
    <style>
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
  margin-left: -750px;
}
  
  .logo {
    width: 60px;
    height: auto;
    margin-right: 10px;
  }

   nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
  }
   nav li {
    margin-right: 1rem;
  }
   nav li:last-child {
    margin-right: 0;
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
    color: green;
    text-align: center;
  }

   #banner p {
    font-size: 1.5rem;
    text-align: center;
    color: whitesmoke;
    padding: 2rem;
    max-width: 50%;
    margin: 2rem 0;
  }
   button {
    background-color: #4cc3f1;
    color: black;
    border: none;
    padding: 5px 3rem;
    border-radius: 1rem;
    font-size: 1rem;
    transition: all 0.3s ease;
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
    text-align: center;
    padding: 2rem;
  }
   #about h2 {
    text-align: center;
  }
  
  table {
    border-collapse: collapse;
    width: 100%;
    margin-top: 1%;
    margin-left: 1%;
  }
  
  th, td {
    text-align: left;
    padding: 8px;
    border-bottom: 1px solid #ddd;
  }
  
  th {
    background-color: #f2f2f2;
  }
  
  th, td {
    padding: 8px;
    text-align: center;
    border-bottom: 1px solid #ddd;
  }
  
  th {
    background-color: #f2f2f2;
    text-align: center;
  }
    
    img {
      width: 100px;
      height: auto;
    }
    
    .crud-buttons button {
      padding: 5px 10px;
      margin-right: 5px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }
    
    .crud-buttons button:hover {
      background-color: #45a049;
    }

    .footer {
      background-color: #048071;
      padding: 20px;
      text-align: center;
    }
    
    .footer img {
      width: 50px;
      height: 50px;
      margin: 0 10px;
    }
    </style>
    <meta charset="UTF-8">
    <title>Halaman Donasi</title>
  </head>
  <body>
    <header>
      <img src="{{ asset('images/logo.png') }}" alt="Logo Donasi" class="logo">
      <h1>Donasi untuk Masyarakat</h1>
      <nav>
        <ul>
          <li><a href="#">Home</a></li>
          <li><a href="{{route('profil.show')}}">Profil</a></li>
          <li><a href="/logout">Logout</a></li>
        </ul>
      </nav>
    </header>
   <main>
    <section id="banner">
      <h2>Donasikan untuk kebaikan bersama</h2>
      <p>Alms will not reduce your wealth and Happiness will not run out just because you share it.
          Just know, happiness increases when you want to share.</p>
    </section>
    <section id="causes">
    <h2>Program Donasi Terbaru</h2>
    <table>
      <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Target</th>
                <th>Awal</th>
                <th>Akhir</th>
                <th>Gambar</th>
                <th>Metode Pembayaran</th>
                <th>Action</th>
            </tr>
            
        </thead>
        @php $no=0; @endphp
        @foreach($dataDonasi as $dd)
        @php $no++; @endphp
        <tbody>
                <td>{{ $no}}</td>
                <td>{{ $dd['judul'] }}</td>
                <td>{{ $dd['target'] }}</td>
                <td>{{ $dd['awal'] }}</td>
                <td>{{ $dd['akhir'] }}</td>
                <td>
                    <img src="{{ asset($dd->gambar) }}" alt="Gambar Kecil" style="width: 250px; height: 200px">
                </td>
                <td>{{ $dd['metode'] }}</td>
                <td><a href="/donate/{{ $dd['id'] }}">
                  <button>Donate</button>
                </a></td>
        </tbody>
        @endforeach
    </table>
  </section>
  </main>
  <footer class="footer">
  <p>Contact Us: 
    <a href="mailto:sidat@gmail.com">sidat@gmail.com</a> | 081225288579</p>
    <a href="https://id-id.facebook.com/"><img src="images/facebook.png" alt="Facebook"></a>
    <a href="https://twitter.com/login"><img src="images/twitter.png" alt="Twitter"></a>
    <a href="https://www.instagram.com/"><img src="images/instagram.png" alt="Instagram"></a>
    <a href="https://www.linkedin.com/"><img src="images/linkedin.png" alt="LinkedIn"></a>
  </footer>
</body>
</html>