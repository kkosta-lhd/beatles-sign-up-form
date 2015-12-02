<?php
require_once '_includes/data.php';


/* -- class to create username -- */
class UserInfo
{
    private $first_name;
    private $last_name;
    private $title;
    private $beatle;
    private $userName;

    function __construct($title, $first_name, $last_name, $beatle)
    {
        if (!($this->title = $title))
            $this->sendError("I need a title, please");
        if (!($this->first_name = $fname))
            $this->sendError("I need a first name, please");
        if (!($this->last_name = $lname))
            $this->sendError("I need a last name, please");
        if (!($this->beatle = $beatle))
            $this->sendError("You must select a beatle, please");
    }

    public function username()
    {
        // construct a username:
        // First two letters of the firstname +
        // Last two letters of the lastname +
        // Index of the selected Beatle (0 or 1 or 2 or 3)+
        // first two letters and last letter of the selected Beatles name.

        $username =
            substr($this->first_name, 0, 2) .
            substr($this->last_name, strlen($this->last_name) - 2, 2) .
            $_POST[beatles] .
            substr($beatleName, 0, 2) .
            substr($beatleName, strlen($beatleName) - 1, 1);

        return $username;

    }
}

?>