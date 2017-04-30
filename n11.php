<!DOCTYPE html>

<html lang="et" xml:lang="et" xmlns="http://www.w3.org/1999/xhtml">
<head>
 <meta charset="utf-8">
 <title>Kodune ulesanne nr.11</title>
</head>
<body>
<?php
  $host="localhost";
  $user="test";
  $pass="t3st3r123";
  $db="test";
  $connection = mysqli_connect($host, $user, $pass, $db) or die("ei saa ühendust mootoriga");
  mysqli_query($connection, "SET CHARACTER SET UTF8") or die("Ei saanud baasi utf-8-sse - ".mysqli_error($connection));
  if($connection)
    echo "Connected to database {$db}";

  //$get_all_table = mysqli_query($connection, "SELECT * FROM jj_loomaaed ORDER BY id ASC");
  $result = mysqli_query($connection, "SELECT id, nimi, vanus, liik, puur FROM jj_loomaaed ");
      ?>
      <table border="2" style= "background-color: #84ed86; color: #761a9b; margin: 0 auto;" >
      <thead>
        <tr>
          <th>id</th>
          <th>Nimi</th>
          <th>Vanus</th>
          <th>Liik</th>
          <th>Puur</th>
        </tr>
      </thead>
      <tbody>
        <?php
          while( $row = mysqli_fetch_assoc( $result ) ){
            echo
            "<tr>
              <td>{$row['id']}</td>
              <td>{$row['nimi']}</td>
              <td>{$row['vanus']}</td>
              <td>{$row['liik']}</td>
              <td>{$row['puur']}</td>
            </tr>\n";
          }
        ?>
      </tbody>
    </table>
     <?php mysqli_close($connection); ?>
</body>
</html>