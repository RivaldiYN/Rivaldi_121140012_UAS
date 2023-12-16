<!-- Berisi kode yang mengatur tampilan content beranda -->
<?php
if(isset($_SESSION['admin'])){
?>
<div class="conten">
    <div class="desc">
        <h1>Selamat Datang 👋🏽</h1>
        <h1>Admin <?php echo $_SESSION['admin']['nama']?></h1>
    </div>
    <div class="my_img">
        <img src="img/maskot.jpg" alt="foto saya" >
    </div>
</div>
<?php
}else{
?>
<div class=container-home>
    <aside class="home" id="tentang">
            <article class="profile-card">
                <h1 class="konten2">Hello 👋🏽</h1>
                <hr>
                <a href=""><img class="foto-diri" src="img/foto-diri.png">
                </a>
                <div class="overlay" id="foto">
                    <img src="img/foto-diri.png" alt="">
                </div>
                <h2>Rivaldi Yonathan Nainggolan</h2>
                <p>Mahasiswa semester 5 Institut Teknologi Sumatera program studi Teknik Informatika</p>
                <div class="badges">
                    <a href="https://github.com/RivaldiYN"><img src="img/github-logo.png"></a>
                    <a href="https://www.instagram.com/aldinggln/"><img src="img/instagram-logo.png"></a>
                    <a href="https://www.linkedin.com/in/rivaldiyn/"><img src="img/linkedin-logo.png"></a>
                </div>
            </article>
        </aside>
        </div>
<?php
}
?>