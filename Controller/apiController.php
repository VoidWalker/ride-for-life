<?php

class Controller_apiController
{
    public function getAction()
    {
        //$requestBody = json_decode(file_get_contents('php://input'));
        $db = Model_DB::DBInstance()->DB();
        $stmt = $db->query("SELECT * FROM product");
        echo json_encode($stmt->fetchAll());
    }

} 