<!DOCTYPE html>
<html>
<head>
  <title>Eksempel 2</title>
</head>
<body>
  <h3>Eksempel 2</h3>
    
  <form method="post" action="tema03/eksempler/eksempel-2.php" id="eksempel2" name="eksempel2">
    Trykk Fortsett for &aring; skrive ut tallene fra 1 til 10  <br/>
    <input type="submit" value="Fortsett" id="fortsett" name="fortsett" /> <br />
    <?php   
  for ($tall=1;$tall<=10;$tall++)  
    {
      print("$tall <br/>");  
    }
  </form>
</body>
</html>
