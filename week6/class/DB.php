<?php


class DB
{
private $server = "g9fej9rujq0yt0cd.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
private $user = "icibdh91bbrbwbvm";
private $pwd = "kdtxdor70hp0zgwy";
private $database = "cun8cx3lck9iiqgv";

    /**
     * DB constructor.
     */
    public function __construct()
    {
        $this->connection = new mysqli($this->server, $this->user, $this->pwd, $this->database); //this is his
        if ($this->connection->connect_error) {
            echo $this->connection->connect_error;
        }
    }

public
}