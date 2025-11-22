<form action="./processData_form.php" method="post" name="myForm">
  <fieldset> 
    <legend>Person Detail</legend>
    <div class="form_field">
      <label for="surname">Surname:</label>
      <input type="text" name="surname" id="surname" value="<?php if(isset($_POST['surname'])) {
        echo $_POST['surname'];
      } ?>">
    </div> 
    <div class="form_field"> 
      <label for="email">Email:</label>
      <input type="email" name="email" id="email" value="<?php if(isset($_POST['email'])) {
        echo $_POST['email'];
      } ?>">
    </div> 
    <div class="form_field"> 
      <label for="password">Password:</label> 
      <input type="password" name="password" id="password" value="<?php if(isset($_POST['password'])) {
        echo $_POST['password'];
      } ?>"> 
    </div> 
    <div class="form_field"> 
      <label for="address">Address:</label> 
      <textarea name="address" id="address" value="<?php if(isset($_POST['address'])) {
        echo $_POST['address'];
      } ?>"></textarea> 
    </div> 
    <div class="form_field"> 
      <label for="state">State:</label> 
      <select name="state" id="state"> 
        <option value="-1" selected>[Choose your state]</option> 
        <option value="Australian Capital Territory" >Australian Capital Territory</option> 
        <option value="Queensland" >Queensland</option> 
        <option value="Victoria" >Victoria</option> 
        <option value="New South Wales" >New South Wales</option> 
        <option value="Tanzania" >Tanzania</option> 
        <option value="South Australia" >South Australia</option> 
        <option value="Western Australia" >Western Australia</option> 
        <option value="Northern Territory">Northern Territory</option> 
      </select> 
    </div> 
    <div class="form_field"> 
      <input type="hidden" name="cuntry" value="Australia"> 
    </div> 
    <div class="form_field"> 
      Gender: 
      <label for="male"> 
        <input type="radio" name="sex" value="male" id="male"> 
        Male 
      </label> 
      <label for="female"> 
        <input type="radio" name="sex" id="female" value="female" id="female"> 
        Female 
      </label> 
    </div> 
    <div class="form_field"> 
      <label for="vegetarion"> 
        Vegetarian?: 
        <input type="checkbox" name="vegetarion" id="vegetarion"> 
      </label> 
    </div> 
    <button type="submit">Submit</button> 
    <button type="reset">Reset</button> 
  </fieldset> 
</form>