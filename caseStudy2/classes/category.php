<?php
/**
 * Class category
 * Author: Isabel Pitcher
 * Date: 9/06/2020
 * Version: 1
 */

class category
{

    public $id;
    public $name;
    public $picture;

    /**
     * category constructor.
     * @param $id
     * @param $name
     * @param $picture
     */
    public function __construct($id, $name, $picture)
    {
        $this->id = $id;
        $this->name = $name;
        $this->picture = $picture;
    }
}