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

    <!-- Main Content -->
    <div class="main-content">
        <div class="header">
            <h2 id="section-title">Dashboard</h2>
            <div>Super Admin</div>
        </div>
        
        <!-- Dashboard Section -->
        <div class="welcome-message" id="dashboard-section">
            <h3>Selamat Datang, Super Admin</h3>
            <p>Silakan pilih menu dari sidebar untuk mulai</p>
        </div>
        
        <!-- Data Santri Section -->
        <div class="content-section" id="data-santri-section">
            <div class="header">
                <h3>Manajemen Data Santri</h3>
                <button class="btn btn-primary" onclick="showSantriForm()">Tambah Santri</button>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023001</td>
                        <td>Aisyah</td>
                        <td>X IPA 1</td>
                        <td>Perempuan</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <!-- More rows would be dynamically generated -->
                </tbody>
            </table>
            
            <!-- Santri Form (hidden by default) -->
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
        </div>
        
        <!-- Data Guru Section -->
        <div class="content-section" id="data-guru-section">
            <div class="header">
                <h3>Manajemen Data Guru</h3>
                <button class="btn btn-primary">Tambah Guru</button>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>NIG</th>
                        <th>Nama</th>
                        <th>Mata Pelajaran</th>
                        <th>Jenis Kelamin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>G2023001</td>
                        <td>Ustadz Ahmad</td>
                        <td>Tahfidz</td>
                        <td>Laki-laki</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <!-- More rows would be dynamically generated -->
                </tbody>
            </table>
        </div>
        
        <!-- Mata Pelajaran Section -->
        <div class="content-section" id="data-mapel-section">
            <div class="header">
                <h3>Manajemen Mata Pelajaran</h3>
                <button class="btn btn-primary">Tambah Mata Pelajaran</button>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Pelajaran</th>
                        <th>Jenis</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>THF-001</td>
                        <td>Tahfidz Al-Qur'an</td>
                        <td>Pesantren</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>BIN-001</td>
                        <td>Bahasa Inggris</td>
                        <td>Pesantren</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <tr>
                        <td>BAR-001</td>
                        <td>Bahasa Arab</td>
                        <td>Pesantren</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <!-- More rows would be dynamically generated -->
                </tbody>
            </table>
        </div>
        
        <!-- Kelas Section -->
        <div class="content-section" id="data-kelas-section">
            <div class="header">
                <h3>Manajemen Kelas</h3>
                <button class="btn btn-primary">Tambah Kelas</button>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>Kode Kelas</th>
                        <th>Nama Kelas</th>
                        <th>Wali Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>XIPA1</td>
                        <td>X IPA 1</td>
                        <td>Ustadz Ahmad</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                            <button class="btn btn-danger">Hapus</button>
                        </td>
                    </tr>
                    <!-- More rows would be dynamically generated -->
                </tbody>
            </table>
        </div>
        
        <!-- Nilai Pesantren Section -->
        <div class="content-section" id="nilai-pesantren-section">
            <div class="header">
                <h3>Manajemen Nilai Pesantren</h3>
                <div>
                    <select style="width: 200px; margin-right: 10px;">
                        <option>Pilih Kelas</option>
                        <option>X IPA 1</option>
                        <option>X IPA 2</option>
                    </select>
                    <select style="width: 200px; margin-right: 10px;">
                        <option>Pilih Mata Pelajaran</option>
                        <option>Tahfidz</option>
                        <option>Bahasa Inggris</option>
                        <option>Bahasa Arab</option>
                    </select>
                    <button class="btn btn-primary">Filter</button>
                </div>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama Santri</th>
                        <th>Nilai Hafalan</th>
                        <th>Nilai Pemahaman</th>
                        <th>Nilai Praktek</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023001</td>
                        <td>Aisyah</td>
                        <td>90</td>
                        <td>85</td>
                        <td>88</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                        </td>
                    </tr>
                    <!-- More rows would be dynamically generated -->
                </tbody>
            </table>
        </div>
        
        <!-- Nilai Sekolah Section -->
        <div class="content-section" id="nilai-sekolah-section">
            <div class="header">
                <h3>Manajemen Nilai Sekolah</h3>
                <div>
                    <select style="width: 200px; margin-right: 10px;">
                        <option>Pilih Kelas</option>
                        <option>X IPA 1</option>
                        <option>X IPA 2</option>
                    </select>
                    <select style="width: 200px; margin-right: 10px;">
                        <option>Pilih Mata Pelajaran</option>
                        <option>Matematika</option>
                        <option>Fisika</option>
                        <option>Kimia</option>
                    </select>
                    <button class="btn btn-primary">Filter</button>
                </div>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama Santri</th>
                        <th>Nilai Tugas</th>
                        <th>Nilai UTS</th>
                        <th>Nilai UAS</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023001</td>
                        <td>Aisyah</td>
                        <td>85</td>
                        <td>88</td>
                        <td>90</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                        </td>
                    </tr>
                    <!-- More rows would be dynamically generated -->
                </tbody>
            </table>
        </div>
        
        <!-- Poin Section -->
        <div class="content-section" id="poin-section">
            <div class="header">
                <h3>Manajemen Poin</h3>
                <button class="btn btn-primary">Tambah Poin</button>
            </div>
            
            <table>
                <thead>
                    <tr>
                        <th>NIS</th>
                        <th>Nama Santri</th>
                        <th>Poin Kedisiplinan</th>
                        <th>Poin Kebersihan</th>
                        <th>Poin Kerajinan</th>
                        <th>Total Poin</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>2023001</td>
                        <td>Aisyah</td>
                        <td>90</td>
                        <td>95</td>
                        <td>92</td>
                        <td>277</td>
                        <td>
                            <button class="btn btn-primary">Edit</button>
                        </td>
                    </tr>
                    <!-- More rows would be dynamically generated -->
                </tbody>
            </table>
        </div>
        
        <!-- Profil Section -->
        <div class="content-section" id="profil-section">
            <div class="header">
                <h3>Manajemen Profil</h3>
            </div>
            
            <form>
                <div class="form-group">
                    <label for="nama-pondok">Nama Pondok</label>
                    <input type="text" id="nama-pondok" value="PTO. Pondok Bambu">
                </div>
                <div class="form-group">
                    <label for="alamat-pondok">Alamat Pondok</label>
                    <textarea id="alamat-pondok" rows="3">Jl. Bambu Indah No. 123, Jakarta Timur</textarea>
                </div>
                <div class="form-group">
                    <label for="telp-pondok">Telepon</label>
                    <input type="text" id="telp-pondok" value="021-1234567">
                </div>
                <div class="form-group">
                    <label for="email-pondok">Email</label>
                    <input type="email" id="email-pondok" value="info@pondokbambu.sch.id">
                </div>
                <div class="form-group">
                    <label for="logo-pondok">Logo</label>
                    <input type="file" id="logo-pondok">
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-success">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>
    
    <script>
        function toggleSubmenu(menuId) {
            const submenu = document.getElementById(menuId + '-submenu');
            submenu.classList.toggle('show');
            
            // Close other submenus
            const allSubmenus = document.querySelectorAll('.submenu');
            allSubmenus.forEach(sm => {
                if (sm.id !== menuId + '-submenu') {
                    sm.classList.remove('show');
                }
            });
        }
        
        function showSection(sectionId) {
            // Hide all sections
            const allSections = document.querySelectorAll('.content-section');
            allSections.forEach(section => {
                section.style.display = 'none';
            });
            
            // Show the selected section
            document.getElementById(sectionId + '-section').style.display = 'block';
            
            // Update active menu item
            const allMenuItems = document.querySelectorAll('.menu-item');
            allMenuItems.forEach(item => {
                item.classList.remove('active');
            });
            
            // Find the parent menu item if this is a submenu item
            if (sectionId !== 'dashboard') {
                const parentMenuItem = document.querySelector(`.submenu-item[onclick="showSection('${sectionId}')"]`).closest('.menu-item');
                parentMenuItem.classList.add('active');
            } else {
                document.querySelector('.menu-item[onclick="showSection(\'dashboard\')"]').classList.add('active');
            }
            
            // Update section title
            const sectionTitles = {
                'dashboard': 'Dashboard',
                'data-santri': 'Manajemen Data Santri',
                'data-guru': 'Manajemen Data Guru',
                'data-mapel': 'Manajemen Mata Pelajaran',
                'data-kelas': 'Manajemen Kelas',
                'nilai-pesantren': 'Manajemen Nilai Pesantren',
                'nilai-sekolah': 'Manajemen Nilai Sekolah',
                'poin': 'Manajemen Poin',
                'profil': 'Manajemen Profil'
            };
            
            document.getElementById('section-title').textContent = sectionTitles[sectionId];
        }
        
        function showSantriForm() {
            document.getElementById('santri-form-section').style.display = 'block';
        }
        
        function hideSantriForm() {
            document.getElementById('santri-form-section').style.display = 'none';
        }
        
        function logout() {
            if (confirm('Apakah Anda yakin ingin logout?')) {
                // Redirect to login page
                window.location.href = 'login.html';
            }
        }
        
        // Initialize the page to show dashboard
        document.addEventListener('DOMContentLoaded', function() {
            showSection('dashboard');
        });
    </script>
</body>
</html>