<form method="post" action="">
    <h2>Form Input Data Mahasiswa</h2>

    <label for="nama">Nama:</label><br>
    <input type="text" id="nama" name="nama" 
           value="<?php if (isset($_POST['nama'])) echo htmlspecialchars($_POST['nama']); ?>">
    <br><br>

    <label for="nim">NIM:</label><br>
    <input type="text" id="nim" name="nim"
           value="<?php if (isset($_POST['nim'])) echo htmlspecialchars($_POST['nim']); ?>">
    <br><br>

    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"
           value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>">
    <br><br>

    <label for="prodi">Program Studi:</label><br>
    <input type="text" id="prodi" name="prodi"
           value="<?php if (isset($_POST['prodi'])) echo htmlspecialchars($_POST['prodi']); ?>">
    <br><br>

    <label for="ipk">IPK:</label><br>
    <input type="text" id="ipk" name="ipk"
           value="<?php if (isset($_POST['ipk'])) echo htmlspecialchars($_POST['ipk']); ?>">
    <br><br>

    <input type="submit" value="Simpan Data">
</form>