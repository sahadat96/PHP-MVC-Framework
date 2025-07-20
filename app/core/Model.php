<?php

// main model class

class Model
{
    use Database;

    function test()
    {
        $query = "SELECT * FROM users"; 
        $result = $this->query($query);
         
        echo '<pre>';
        print_r($result);
        echo '</pre>';
    }
}