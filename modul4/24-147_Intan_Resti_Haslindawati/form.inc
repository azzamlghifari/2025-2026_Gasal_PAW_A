<!DOCTYPE html>
<html>
<head>
    <title>Form Data Pribadi</title>
</head>
<body>
    <form action="processData_form.php" method="POST">
        <label for="surname">Surname:</label><br>
        <input type="text" name="surname" size="25" value="<?php if (isset($_POST['surname'])) echo $_POST['surname']; ?>"><br><br>

        <label for="email">Email Address:</label><br>
        <input type="email" name="email" size="25" id="email"
        value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"><br><br>

        <label for="password">Password:</label><br>
        <input type="password" name="password" size="25" id="password"
        value="<?php if(isset($_POST['password'])) echo $_POST['password']; ?>"><br><br>

        <label for="address">Street Address:</label><br>
        <textarea name="address" rows="3" cols="25"></textarea><br><br>

        <label for="state">State:</label><br>
        <select name="state">
            <option value="New South Wales">New South Wales</option>
            <option value="Victoria">Victoria</option>
            <option value="Queensland">Queensland</option>
            <option value="Western Australia">Western Australia</option>
            <option value="South Australia">South Australia</option>
        </select><br><br>

        <input type="hidden" name="country" value="Australia">

        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female<br><br>

        <label>Vegetarian?</label>
        <input type="checkbox" name="vegetarian"><br><br>

        <input type="submit" value="Submit">
        <input type="reset" value="Reset">
    </form>
</body>
</html>