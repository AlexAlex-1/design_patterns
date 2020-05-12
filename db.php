<?php
$db = new \PDO('mysql:dbname=myphp;host=localhost', 'root', 'titan~');
//$db->query('CREATE TABLE Fruits (id int AUTO_INCREMENT, name varchar(255), color varchar(255), PRIMARY KEY (id))');
$name = null;
$stmt = $db->prepare('SELECT * FROM Fruits WHERE name = :name');
$stmt->bindValue(':name', 'apple');
var_dump($stmt->execute());
//var_dump($stmt->fetch());
$test = $db->prepare('SELECT COUNT(*) FROM Fruits');
$test->execute();
$count = $db->exec('UPDATE Fruits SET color = "rred" WHERE name = "apple"');
echo $count;
$db->beginTransaction();
echo $db->inTransaction();
$db->exec('UPDATE Fruits SET color = "arred" WHERE name = "apple"');
$db->commit();
//$db->rollBack();
var_dump(\PDO::getAvailableDrivers());
$fetch = $db->query('SELECT * FROM Fruits');
while($row = $fetch->fetchColumn(1)) {
    var_dump($row);
}
$stmp = $db->query('SELECT * FROM Fruits');
echo '<pre>';
print_r($stmp->fetchAll());
