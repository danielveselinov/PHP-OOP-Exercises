# PHP OOP - Exercise 1

## Exercise 1
Create a class called *Bicycle.*
The class should have 5 public properties: $brand, $model, $year, $description and $weight.
Default value for the $description property is “Used bicycle” (hint: you can set it either when declaring the
property or through the constructor).
Create getInfo method (a getter) that will return information about the bike in the following format:
“$brand $model ($year)”.
Create getWeight method that will return weight in grams. Make this method configurable so that it
accepts one argument which by default is false. If it is true, the weight should be returned in kilograms
and if it is false (default), it should return weight in grams.
Create a setter method for the weight property. The weight property stores the weight in grams.
Create two objects from the Bicycle class and set values for all properties.
Print each bike’s information.
Print each bike’s weight in kilograms.
Print each bike’s weight in grams.
