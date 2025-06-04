<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda Catatan Poin Santri</title>
    <link rel="stylesheet" href="Sekolah.css" />
  </head>

  <body>
    <div class="container">
      <!-- Sidebar -->
      <aside class="sidebar">
        <div class="sidebar-header">
          <img
            src="../assets/logo-pondok.png"
            alt="Logo"
            class="sidebar-logo"
          />
          <span class="sidebar-title">Catatan Poin Santri</span>
        </div>
        <!--Navbar-->
        <nav class="sidebar-menu">
          <a href="berandaAdmin.html">Beranda</a>
          <a href="DataSantri.html">Data Santri</a>
          <a href="InputLaporanPesantren.html">Input Laporan Pesantren</a>
          <a href="InputLaporanSekolah.html">Input Laporan Sekolah</a>
        </nav>
      </aside>

      <!-- main content-->
      <main class="main-content">
        <header class="header">
          <div class="left">
            <div class="menu-toggle" onclick="toggleSidebar()">☰</div>
            <h1>Dashboard</h1>
          </div>
          <div class="admin-info">
            <img src="../assets/profil.png" alt="Profil" />
            <span>Hi Admin</span>
            <button class="logout">LOGOUT</button>
          </div>
        </header>

        <p>Laporan Sekolah</p>
        <section class="cards">
          <div class="card green">
            <h2>2</h2>
            <p>Data Santri</p>
          </div>
          <div class="card orange">
            <h2>1</h2>
            <p>Laporan Pesantren</p>
          </div>
          <div class="card red">
            <h2>3</h2>
            <p>Laporan Sekolah</p>
          </div>
        </section>

        <footer class="footer">
          <p>&copy; 2025 Catatan Poin Santri</p>
        </footer>
      </main>
    </div>
    <script src="LP_Sekolah.js"></script>
  </body>
</html>
