<?php
#1
Class Polindrome

{
    Public static function isPalindrome($string) {
        //remove all spaces
        $string = str_replace(' ', '', $string);
        //change case to lower
        $string = strtolower($string);

        //reverse the string
        $reverse = strrev($string);

        if ($string == $reverse) {
            echo "<p>It is Palindrome</p>";
        } 
        else {
            echo "</p>Not Palindrome</p>";
        }
    }

}
Polindrome::isPalindrome('Deleveled');

#2
Class FileOwner
{
    public static function groupByOwnerI($files){
        $new=array();
        foreach($files as $key => $file){
            $new[$file][] = $key;
        }
        return $new;
    }
}

$files = array(
    "input.txt" =>"John",
    "Code.py" => "Stan",
    "Output.txt" => "John"
);
echo "<pre>"; 
var_dump(FileOwner::groupByOwnerI($files));