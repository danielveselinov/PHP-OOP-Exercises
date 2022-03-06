<?php  
require __DIR__ . "/classes/user.class.php";


$user = new AdminUser("John", "Doe", "john@", true);
$customerData = new Customer("Shtip", "Shtip", "Macedonia");
$user->printFullName(); 
echo "<br/>";
$customerData->location();

for ($i = 0; $i < 2; $i++) {
    echo "<hr/>";
}

$user2 = new AdminUser("Jane", "Smith", "_smith2000");
$customerData2 = new Customer("Miami", "Florida", "USA");
$user2->printFullName(); 
echo "<br/>";
$customerData2->location();