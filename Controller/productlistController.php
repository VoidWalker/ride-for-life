<?php

class Controller_productlistController {

    public function viewAction(){
        $db = Model_DB::DBInstance()->DB();
        $stmt = $db->query("SELECT * FROM product");
        $products = $stmt->fetchAll();

        include "../template/productList.phtml";
    }
}

