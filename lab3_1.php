

<html>

<body>
    <h2>Application Name : AAST_BIS class registration</h2>
    <h4 style="color:red">*Required field</h4>
<form action="<?php $_PHP_SELF?>" method="post">
    <label style="width:100px;display:inline-block">Name:</label><input type="text" name="name"><label style="color:red">&nbsp; *</label>
    <br><br>
    <label style="width:100px;display:inline-block">E-mail:</label><input type="email" name="email"><label style="color:red">&nbsp; *</label>
    <br><br>
    <label style="width:100px;display:inline-block">Group #</label><input type="text" name="group">
    <br><br>
    <label style="width:100px;display:inline-block">Class details :</label><textarea name="details" rows="4"></textarea>
    <br><br>
    <label style="width:100px;display:inline-block">Gender:</label><input type="radio" name="gender" value="female">female
    <input type="radio" name="gender" value="male">male
    <label style="color:red">&nbsp; *</label>
    <br><br>
    <label style="width:100px;display:inline-block">Select courses</label> <select name="courses[]" multiple>
        <option value="php">php</option>
        <option value="java script">Javascript</option>
        <option value="MySQL">MySQL</option>
        <option value="Html">HTML</option>
      </select>
    <br><br>
    <label style="width:100px;display:inline-block">Agree</label> <input type="checkbox"><label style="color:red">&nbsp; *</label>
    <br><br>
   <input type="submit">
</form>
</body>
</html>

<?php

echo "<h3>Your given values are as :</h3> <br>";
echo "Name :" . $_REQUEST['name'] . "<br>";
echo "E-mail :" . $_REQUEST['email']. "<br>";
echo "Group # :" . $_REQUEST['group']. "<br>";
echo "Class details :" . $_REQUEST['details']. "<br>";
echo "Gender :" . $_REQUEST['gender']. "<br>";
echo "Your courses are :" ;
foreach ($_REQUEST['courses'] as $selectedOption)
  echo $selectedOption;


?>