<?php

/* -- class to create username -- */

class UserInfo {
    private $first_name;
    private $last_name;
    private $title;
    private $favBeatle;
    private $userName;

    function __construct($title, $fname, $lname, $beatle)
    {
        if (!($this->title = $title))
            $this->sendError("I need a title, please");
        if (!($this->first_name = $fname))
            $this->sendError("I need a first name, please");
        if (!($this->last_name = $lname))
            $this->sendError("I need a last name, please");
        if (!($this->favBeatle = $beatle))
            $this->sendError("You must select a beatle, please");
    }

    public function username()
    {
        // construct a username:
        // First two letters of the firstname +
        // Last two letters of the lastname +
        // Index of the selected Beatle (0 or 1 or 2 or 3)+
        // first two letters and last letter of the selected Beatles name.

        require 'data.php';
        $beatleName = $favBeatle[$this->beatle];
        var_dump($this);
        $username =
            substr($this->first_name,0,2) .
            substr($this->last_name,strlen($this->last_name)-2,2) .
            $this->beatle .
            substr($beatleName,0,2) .
            substr($beatleName,strlen($beatleName)-1,1);

        return $username;

    }
    public function sendError($error)
    {
        // send error message to the browser & exit.

        echo "<br /> UserInfo <br /> ";
        echo "<br /> " . $error . "<br /> ";
        die;
    }
}


?>