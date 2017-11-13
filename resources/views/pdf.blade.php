<!DOCTYPE html>
<html lang = "en-US">
 <head>
 <meta charset = "UTF-8">
 <title>Balita</title>
 <style type = "text/css">
 table, th, td {
    border: 1px solid black;
    
    text-align: center;
    border-collapse : collapse;
    width: 80%;
    margin: 0 auto;
    padding: 0px;
  };
 </style>
 </head>
 <body>
 <p>
 <?php
  try {
  $con= new PDO('mysql:host=patarebenezer.com;dbname=kdsm', "kdsm", "password");
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $query = "SELECT * FROM pengurustables";
  //first pass just gets the column names
  print "<table> ";
  $result = $con->query($query);
  //return only the first row (we only need field names)
    $row = $result->fetch(PDO::FETCH_ASSOC);
    print " <tr> ";
    foreach ($row as $field => $value){
     print " <th>$field</th> ";
    } // end foreach

  print " </tr> ";
  //second query gets the data
    $data = $con->query($query);
    $data->setFetchMode(PDO::FETCH_ASSOC);
    foreach($data as $row){
     print " <tr> ";
     foreach ($row as $name=>$value){
     print " <td>$value</td>";
     } // end field loop

   print " </tr> ";
  } // end record loop

    print "</table> ";
    } catch(PDOException $e) {
     echo 'ERROR: ' . $e->getMessage();
    } // end try
 ?>
 </p>
 </body>
</html>