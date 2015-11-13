<?php

/*-- used to build dropdown menus --*/
class selectMenu {
    private $items;  // array of items
    private $options; // hold all html options
    private $selectMenu; // final select menu

	/* function _Construct
	   Parameters: @itemsArray
		returns: a array of items

		Constructor to initialize this->items
	*/
    function __construct($itemArray='') {
        $this->items = $itemArray;
    }

    private function buildOptions() {
        $this->options = "<option value=''>Select One</option>";

        // build list of option value pairs for select list
		forEach($this->items as $item) {
            $this->options .= "<option value='"
                . $item . "'>"
                . $item . "</option>";
        }
    }

    private function buildSelect() {
        $this->selectMenu = "<select>".$this->options."</select>";
    }

    public function setOptions($array) {
        $this->items = $array;
    }

    public function makeMenu() {
        $this->buildOptions();
        $this->buildSelect();
        return $this->selectMenu;
    }
}

?>