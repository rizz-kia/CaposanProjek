<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Santri</title>
    <link href="/css/styleadmin.css" rel="stylesheet">
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

    <div class="content-section" id="data-santri-section">
            <div class="header">
                <h3>Manajemen Data Santri</h3>
                <button class="btn btn-primary" onclick="showSantriForm()">Tambah Santri</button>
    </div>
    <div class="content-section" id="santri-form-section" style="display: none; margin-top: 20px;">
                <h4>Tambah/Edit Santri</h4>
                <form id="santri-form">
                    <div class="form-group">
                        <label for="nis">NIS</label>
                        <input type="text" id="nis" required>
                    </div>
                    <div class="form-group">
                        <label for="nama-santri">Nama Santri</label>
                        <input type="text" id="nama-santri" required>
                    </div>
                    <div class="form-group">
                        <label for="kelas-santri">Kelas</label>
                        <select id="kelas-santri" required>
                            <option value="">Pilih Kelas</option>
                            <option value="X IPA 1">X IPA 1</option>
                            <option value="X IPA 2">X IPA 2</option>
                            <!-- More options -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Jenis Kelamin</label>
                        <div>
                            <input type="radio" id="laki-santri" name="jk-santri" value="Laki-laki" required>
                            <label for="laki-santri" style="display: inline;">Laki-laki</label>
                            <input type="radio" id="perempuan-santri" name="jk-santri" value="Perempuan" style="margin-left: 15px;">
                            <label for="perempuan-santri" style="display: inline;">Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat-santri">Alamat</label>
                        <textarea id="alamat-santri" rows="3"></textarea>
                    </div>
                    <div class="form-actions">
                        <button type="button" class="btn btn-danger" onclick="hideSantriForm()">Batal</button>
                        <button type="submit" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
</body>
</html>