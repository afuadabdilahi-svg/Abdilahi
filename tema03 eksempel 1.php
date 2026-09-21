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
/*
/*    Programmet skriver ut tallene fra 1 til 10 på hver sin linje
/*    Eksempelet viser bruk av for-setning
*/
  for ($tall=1;$tall<=10;$tall++)  
    {
      print("$tall <br/>");  
    }

/*
startverdi: $tall=1 
betingelse: $tall<=10
økning: $tall++ (dette er det samme som $tall=$tall+1)
*/

?>
  </form>
</body>
</html>
