<?php
/**
 * Product category
 * Author: Isabel Pitcher
 * Date: 9/06/2020
 * Version: 1
 */

class product
{
    public $id;
    public $name;
    public $price;
    public $picture;
    public $categoryID;

/**
 * product constructor.
 * @param $id
 * @param $name
 * @param $price
 * @param $picture
 * @param $categoryID
 */
public function __construct($id, $name, $price, $picture, $categoryID)
{
    $this->id = $id;
    $this->name = $name;
    $this->price = $price;
    $this->picture = $picture;
    $this->categoryID = $categoryID;
}
}