
<html>
    <style>
        span{
            color:red;
        }
    </style>

<body>
    <h2>Application Name : AAST_BIS class registration</h2>
    <h4 style="color:red">*Required field</h4>
<form action="<?php $_PHP_SELF?>" method="post" >
    <label style="width:100px;display:inline-block">Name:</label>
    <input type="text" name="name" value="<?php echo isset($_REQUEST['name']) ? htmlspecialchars($_REQUEST['name'], ENT_QUOTES) : ''; ?>">
    <label style="color:red">&nbsp; *</label>
    <span>
    <?php 
    if (isset($_REQUEST['submit']) && empty($_REQUEST['name'])){
      echo  "Name is required" ;
    }
    ?>
    </span>
    <br><br>
    <label style="width:100px;display:inline-block">E-mail:</label>
    <input type="email" name="email" value="<?php echo isset($_REQUEST['email']) ? htmlspecialchars($_REQUEST['email'], ENT_QUOTES) : ''; ?>">
    <label style="color:red">&nbsp; *</label>
    <span>
    <?php 
    if (isset($_REQUEST['submit']) && empty($_REQUEST['email'])){
      echo  "Email is required" ;
    }
    ?>
    </span>
    <br><br>
    <label style="width:100px;display:inline-block">Group #</label>
    <input type="text" name="group" value="<?php echo isset($_REQUEST['group']) ? htmlspecialchars($_REQUEST['group'], ENT_QUOTES) : ''; ?>">
    <br><br>
    <label style="width:100px;display:inline-block">Class details :</label>
    <textarea name="details" rows="4"><?php echo isset($_REQUEST['details']) ? htmlspecialchars($_REQUEST['details'], ENT_QUOTES) : ''; ?></textarea>
    <br><br>
    <label style="width:100px;display:inline-block">Gender:</label>
    <input type="radio" name="gender" value="female" <?php echo !empty($_REQUEST['gender']) && $_REQUEST['gender']==='female' ? 'checked="checked" ' :''   ; ?>>
     female
    <input type="radio" name="gender" value="male"  <?php echo !empty($_REQUEST['gender']) && $_REQUEST['gender']==='male' ? ' checked="checked" ': ''; ?>>
    male
    <label style="color:red">&nbsp; *</label>
    <span>
    <?php 
    if (isset($_REQUEST['submit']) && empty($_REQUEST['gender'])){
      echo  "Gender is required" ;
    }
    ?>
    </span>
    <br><br>
    <label style="width:100px;display:inline-block">Select courses</label>
    <select name="courses[]" multiple >
        <option value="php"
        <?php echo !empty($_REQUEST['courses'] ) && in_array('php',$_REQUEST['courses']) ? 'selected' : '' ; ?>>
        php</option>
        <option value="java script"
        <?php echo !empty($_REQUEST['courses'] ) && in_array('java script',$_REQUEST['courses']) ? 'selected' : '' ; ?>>  
         Javascript</option>
        <option value="MySQL"
        <?php echo !empty($_REQUEST['courses'] ) && in_array('MySQL',$_REQUEST['courses']) ? 'selected' : '' ; ?>>          
          MySQL</option>
        <option value="HTML"
        <?php echo !empty($_REQUEST['courses'] ) && in_array('HTML',$_REQUEST['courses']) ? 'selected' : '' ; ?>>          
          HTML</option>
      </select>
    <br><br>
    <label style="width:100px;display:inline-block">Agree</label>
    <input type="checkbox" name="agree" value="agree"
     <?php echo empty($_REQUEST['agree']) ? '' : ' checked="checked" '; ?>>
    <label style="color:red">&nbsp; *</label>
    <span>
    <?php 
    if (isset($_REQUEST['submit']) && empty($_REQUEST['agree'])){
    
      echo  "You must agree to terms" ;
    }
    ?>
    </span>
    <br><br>
   <input type="submit" name="submit">
</form>
</body>
</html>

<!-- <?php

echo "<h3>Your given values are as :</h3> <br>";
if(!empty($_REQUEST["name"]))  {
echo "Name :" . $_REQUEST['name']. "<br>";
}

if(!empty($_REQUEST["email"]))  {
echo "E-mail :" . $_REQUEST['email']. "<br>";
}
if(!empty($_REQUEST["group"]))  {
echo "Group # :" . $_REQUEST['group']. "<br>";
}
if(!empty($_REQUEST["details"]))  {
echo "Class details :" . $_REQUEST['details']. "<br>";
}
if(!empty($_REQUEST["gender"]))  {
echo "Gender :" . $_REQUEST['gender']. "<br>";
}
if(!empty($_REQUEST["courses"]))  {
echo "Your courses are :" ;
foreach ($_REQUEST['courses'] as $selectedOption)
  echo $selectedOption;
}
?> -->

<?php

echo "<h3>Your given values are as :</h3> <br>";
if(!empty($_REQUEST["name"]) && !empty($_REQUEST["email"]) && !empty($_REQUEST["gender"]) && !empty($_REQUEST["agree"]) )  {

  echo "Name :" . $_REQUEST['name']. "<br>";



echo "E-mail :" . $_REQUEST['email']. "<br>";


echo "Group # :" . $_REQUEST['group']. "<br>";


echo "Class details :" . $_REQUEST['details']. "<br>";

echo "Gender :" . $_REQUEST['gender']. "<br>";


echo "Your courses are :" ;
foreach ($_REQUEST['courses'] as $selectedOption)
  echo nl2br("$selectedOption  &nbsp;");
}
?>

