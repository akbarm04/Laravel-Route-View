<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>
    <title>Document</title>

<style>

body {
    text-align: center; /* Mengatur teks ke tengah secara horizontal */
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Untuk mengisi seluruh tinggi layar */
    background-image: url(https://cdn.pixabay.com/photo/2016/03/18/15/02/ufo-1265186_1280.jpg);
    background-repeat: no-repeat;
    background-size: cover;
    color: rgb(255, 255, 255);
}

.container {
    background: rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
    border-radius: 1rem;
    border: 1px solid #ccc;
    padding: 20px;
}


/* Style the heading */
h1 {
    color: rgb(255, 255, 255);
    font-family: 'Poppins';
}

/* Style the paragraph */
p {
    font-style: italic;
    font-family: 'Times New Roman', Times, serif;
    color: rgb(255, 255, 255);
}

/* Style the list items */
ul, ol {
    list-style-position: inside; /* Untuk mengatur posisi marker */
    color: rgb(255, 255, 255);
}

li {
    font-weight: bold;
    text-align: left; /* Untuk mengatur teks dalam list menjadi rata kiri */
    color: rgb(255, 255, 255);
}

/* Style the link in the list */
ul li a {
    color: green;
    color: rgb(255, 255, 255);
}

/* Efek hover untuk tombol Form sign Up */
a {
text-decoration: none; /* Menghapus garis bawah default pada tautan */
color: rgb(230, 20, 241);

}

a:hover {
text-decoration: underline; /* Menambahkan garis bawah saat tautan dihover */
}

a:hover {
color: rgb(255, 255, 255);
}

</style>
</head>
<body>
    <div class="container">
    <h1>Media Online</h1>
    <h3 style="font-family: 'Times New Roman', Times, serif;">Sosial Media Developer</h3>
    <p>"Belajar dan berbagi agar hidup menjadi lebih baik" <br></p>
    <h3>Benefit Join di Media Online</h3>
    <ul>
        <li>Mendapatkan motivasi dari sesama para Developer</li>
        <li>Sharing Knowledge</li>
        <li>Dibuat oleh calon Web Developer terbaik</li>
    </ul>
    <h3>Cara Bergabung ke Media Online</h3>
    <ol>
        <li>Mengunjungi website ini</li>
        <li>Mendaftarkan di <a href="{{url ('form')}}" >Form Sign Up</a></li> 
        <li>Selesai</li>
    </ol>
</div>
</body>
</html>