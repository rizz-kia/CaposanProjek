<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data Santri</title>
    <link href="/css/styleadmin.css" rel="stylesheet">
</head>
<body>
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
                            <option value="all" selected hidden>Pilih Kelas</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
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
</body>
</html>