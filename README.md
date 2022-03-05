# PHP OOP - Exercises

## Exercise 1

Create a class called Bicycle.

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

## Exercise 2

Create a class called Student.
The class should have:
- 3 public properties: $name, $surname and $country;
- 1 private property: $tuition;
- 1 protected property: $indexNumber.

Create getter methods for the name and the surname of the student.
Create a public method helloWorld() that will return “Hello World” string.
Create a protected method helloFamily() that will return “Hello Family” string.
Create a private method helloMe() that will return “Hello me!” string.
Create a private getter method getTuition() that will print the value of the tuition property.
Do not use a constructor with arguments.
Create a subclass PartTimeStudent.
Add a public method helloParent() that will call the method helloFamily() from the Student class.
Create objects from both the Student and the PartTimeStudent classes, and call all the methods within.
