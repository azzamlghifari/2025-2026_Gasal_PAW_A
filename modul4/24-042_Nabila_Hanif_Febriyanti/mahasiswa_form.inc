<form action="mahasiswa.php" method="POST">
    <h1>Form Data Mahasiswa</h1>
    <br>
        <label for="nama_depan">Nama :</label>
        <input type="text" id="nama_depan" name="nama_depan" value="<?php showValue('nama_depan'); ?>">
        <?php showError($errors, 'nama_depan'); ?>
    <br>
    <br>
        <label for="email">Email:</label>
        <input type="text" id="email" name="email" value="<?php showValue('email'); ?>">
        <?php showError($errors, 'email'); ?>
    <br>
    <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" value="">
        <?php showError($errors, 'password'); ?>
    <br>
    <br>
    <input type="submit" name="submit_form" value="submit">
</form>