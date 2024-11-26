<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use Config\Database;

class TestConnection extends Controller
{
    public function index()
    {
        try {
            // Fetch the database connection object
            $db = Database::connect();

            // Test if the connection is successful
            if ($db->connID) {
                echo "Connected to the MySQL database successfully!";
            } else {
                $error = $db->error();
                echo "Database connection failed: " . ($error['message'] ?? 'Unknown error');
            }
        } catch (\Exception $e) {
            // Catch any exceptions and display error message
            echo "Error: " . $e->getMessage();
        }
    }
}



// <?php

// namespace App\Controllers;

// use Config\Database;

// class TestConnection extends BaseController
// {
//     public function index()
//     {
//         try {
           
//             $db = Database::connect();

            
//             if ($db->connID) {
//                 echo "Connected to the database successfully!";
//             } else {

//                 $error = $db->error();
//                 echo "Database connection failed: " . ($error['message'] ?? 'Unknown error');
//             }
//         } catch (\Exception $e) {
            
//             echo "Error: " . $e->getMessage();
//         }
//     }
// }


