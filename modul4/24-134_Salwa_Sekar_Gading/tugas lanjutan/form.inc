<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
    <h2>Form Input Data Mahasiswa</h2>

    <label>Nama:</label><br>
    <input type="text" name="nama"
           value="<?php echo isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : ''; ?>">
    <br><br>

    <label>NIM:</label><br>
    <input type="text" name="nim"
           value="<?php echo isset($_POST['nim']) ? htmlspecialchars($_POST['nim']) : ''; ?>">
    <br><br>

    <label>Email:</label><br>
    <input type="text" name="email"
           value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>">
    <br><br>

    <label>Password:</label><br>
    <input type="password" name="password">
    <br><br>

    <input type="submit" value="Submit">
</form>
