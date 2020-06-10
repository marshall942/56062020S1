<?php
/**
 * User category
 * Author: Isabel Pitcher
 * Date: 9/06/2020
 * Version: 1
 */

include_once "DB.php";
include_once "category.php";
include_once "product.php";

class user
{
    public $id;
    public $username;
    private $password;
    public $name;

    /**
     * user constructor.
     * @param $id
     * @param $username
     * @param $password
     * @param $name
     */
    public function __construct($id, $username, $password, $name)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
    }

    /**
     * name viewCategories
     * @return category array
     */
    public function viewCategories(){
        $conn = (new DB())->connection; //create connection from DB class
        $sql = "select * from category"; //my query
        $categories = array(); //my categories are an array
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row=$result->fetch_assoc()) {
                $category = new category($row["id"], $row["name"], $row["picture"]); //show each row in table
                array_push($categories, $category);
            }
        }
        $conn->close();
        return $categories;
    }

    /**
     * name showProductsByCategory
     * @param $categoryID
     * @return product array
     */

    public function showProductsByCategory($categoryID) {
        $conn = (new DB())->connection;
        $sql = "select * from product where categoryID=".$categoryID; // . means merge 2 strings
        $products = array();
        $result = $conn->query($sql);
        if ($result->num_rows>0) {
            while ($row = $result->fetch_assoc()) {
                $product = new product($row["id"], $row["name"], $row["price"], $row["picture"], $row["categoryID"]);
                array_push($products, $product);
            }
        }
        $conn->close();
        return $products;
    }
}