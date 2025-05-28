<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="/css/stylee.css" rel="stylesheet">
</head>
<body>
    <div class="navbar">
        <button class="hamburger">☰</button>
        <div class="logo-container">
            <img src="./assets/LOGO PONDOK OK-01.png" alt="Logo Pondok" class="logo">
            <span class="pondok-name">PTQ. Pondok Bambu</span>
        </div>
    </div>    
    
    <!-- Sidebar -->
    <aside class="sidebar">
        <div class="profile">
            <img src="assets/fotoSantri.jpg" alt="Foto Aisyah">
            <h2>AISYAH</h2>
        </div>
        <div class="menu">
            <a href="beranda.html" class="menu-item active">
                <img src="./assets/dashboard.png" alt="icon"> BERANDA
            </a>
            <a href="NilaiPesantren.html" class="menu-item">
                <img src="assets/masjid.png" alt="icon"> NILAI PESANTREN
            </a>
            <a href="NilaiSekolah.html" class="menu-item">
                <img src="./assets/school.png" alt="icon"> NILAI SEKOLAH
            </a>
    </aside>
    
    <!-- Main Content -->
    <main id="mainContent">
        <h1>Selamat Datang, AISYAH(Guru)</h1>
        <p>Silakan pilih menu dari sidebar untuk mulai</p>
    </main>

    <script>
         // Toggle sidebar on mobile
        document.querySelector('.hamburger').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });

        // Close sidebar when clicking outside on mobile
        document.addEventListener('click', function(e) {
            if (window.innerWidth <= 768 && 
                !e.target.closest('.sidebar') && 
                !e.target.closest('.hamburger')) {
                document.querySelector('.sidebar').classList.remove('active');
            }
        });

        // Set active menu item based on current page
        const currentPage = window.location.pathname.split('/').pop() || 'beranda.html';
        document.querySelectorAll('.menu-item').forEach(item => {
            if (item.getAttribute('href') === currentPage) {
                item.classList.add('active');
            } else {
                item.classList.remove('active');
            }
        });
        </script>
</body>
</html>