<form method="post" action="form.php">
    <h2>Form Validasi Server-side</h2>
    <label>Masukkan Surname:</label><br/>
    <input type="text" name="surname" value="<?php echo htmlspecialchars($_POST['surname'] ?? ''); ?>"><br/><br/>
    <input type="submit" value="Kirim">
</form>

