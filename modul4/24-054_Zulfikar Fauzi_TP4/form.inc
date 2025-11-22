<form method="post" action="">
    <label for="surname">Surname:</label><br>
    <input type="text" id="surname" name="surname"
           value="<?php if (isset($_POST['surname'])) echo htmlspecialchars($_POST['surname']); ?>"><br><br>

    <label for="email">Email:</label><br>
    <input type="text" id="email" name="email"
           value="<?php if (isset($_POST['email'])) echo htmlspecialchars($_POST['email']); ?>"><br><br>

    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password"><br><br>

    <input type="submit" value="Submit">
</form>