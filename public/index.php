<?php 
use App\Models\EmailModel;
use Core\DBConnection;
require '../core/helpers.php';
require '../vendor/autoload.php';
require '../app/routes.php';
if (file_exists(__DIR__ . '/../' . '.env')){
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
    $dotenv->load(__DIR__);
}
 

// $EmailModel = new EmailModel(DBConnection::start());
// $statement = $db->prepare('select * from emails');
// $statement->execute();
// $allEmails = $statement->fetchAll(PDO::FETCH_OBJ);
// Run it!
$router->run();

