<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda Admin</title>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>PTQ. Pondok Bambu</h2>
            
        </div>
        
        <div class="sidebar-menu">
            <div class="menu-item active" onclick="showSection('dashboard')">
                BERANDA
            </div>
            
            <div class="menu-item" onclick="toggleSubmenu('data-master')">
                MANAJEMEN DATA
                <div class="submenu" id="data-master-submenu">
                    <div class="submenu-item" onclick="showSection('data-santri')">Data Santri</div>
                    <div class="submenu-item" onclick="showSection('data-guru')">Data Guru</div>
                    <div class="submenu-item" onclick="showSection('data-mapel')">Mata Pelajaran</div>
                    <div class="submenu-item" onclick="showSection('data-kelas')">Kelas</div>
                </div>
            </div>
            
            <div class="menu-item" onclick="toggleSubmenu('nilai')">
                MANAJEMEN NILAI
                <div class="submenu" id="nilai-submenu">
                    <div class="submenu-item" onclick="showSection('nilai-pesantren')">Nilai Pesantren</div>
                    <div class="submenu-item" onclick="showSection('nilai-sekolah')">Nilai Sekolah</div>
                </div>
            </div>
            
            <div class="menu-item" onclick="showSection('poin')">
                MANAJEMEN POIN
            </div>
            
            <div class="menu-item" onclick="showSection('profil')">
                MANAJEMEN PROFIL
            </div>
            
            <button class="logout-btn" onclick="logout()">LOGOUT</button>
        </div>
    </div>
</body>
</html>