<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<div class="container">
  <h2>Tabel nomor 7</h2>
   <table class="table">
    <thead>
      <tr>
        <th>person_id</th>
        <th>name</th>
        <th>person_hobbies</th>
      </tr>
    </thead>
    <tbody>

<?php
$server = "localhost";
$user = "root";
$pass = "";
$db = "arkademy";

$conn = new mysqli($server, $user, $pass, $db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT hobbies.person_id as person_id, categories.name as name, GROUP_CONCAT(hobbies.name) as person_hobbies FROM categories, hobbies WHERE hobbies.person_id = categories.id GROUP BY categories.name";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
?>
      <tr>
        <td><?=$row['person_id']?></td>
        <td><?=$row['name']?></td>
        <td><?=$row['person_hobbies']?></td>
      </tr>
<?php
    }
} else {
    echo "0 results";
}

$conn->close();
?>

</tbody>
</table>
</div>