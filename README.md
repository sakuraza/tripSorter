# Installation
Extract the zip file to your workspace (ex c:/wamp/www/).

Install PHPUNIT : composer require --dev phpunit/phpunit

# Run the application
the stack of boarding cards in entry :

        $stack = array(
        array("departure" => "Stockholm", "arrival" => "New York JFK", "sit" => "seat 7B", "transport" => "flight", "Gate"=> "22", "number" => "SK22", "Baggage drop ticket counter"=>"Baggage will we automatically transferred from your last leg"),           
        array("departure" => "Madrid", "arrival" => "Barcelona", "sit" => "Sit in seat 45B", "transport" => "train", "number" => "78A"),  
        array("departure" => "Gerona Airport", "arrival" => "Stockholm", "sit" => "seat 3A", "transport" => "flight", "Gate"=> "45B", "number" => "SK455", "Baggage drop ticket counter" => "Baggage drop at ticket counter 344"),     
        array("departure" => "Barcelona", "arrival" => "Gerona Airport", "sit" => "No seat assignment", "transport" => "airport bus", "number" => ""),
    );
    
You can change this stack directly in index.php

Then run index.php

## Tests
To run tests make sure you have install phpunit globally.

## Improvement
Make an abstract class for the transportation. Add class for Flight, train, bus which extend the transport class.
For new type of transportation make a class which extend the abstract class 'transportation'.
Make a class boarding card instead of the current array.


