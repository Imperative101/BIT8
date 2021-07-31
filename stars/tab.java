/*
IntelliJ IDEA 


1.Launch IntelliJ IDEA.
2.If the Welcome screen opens, click New Project.
3.Otherwise, from the main menu, select File | New Project.
4.In the New Project wizard, select Java from the list on the left.
5.To develop Java applications in IntelliJ IDEA, you need the Java SDK (JDK).
6.If the necessary JDK is already defined in IntelliJ IDEA, select it from the Project SDK list.
7.If the JDK is installed on your computer, but not defined in the IDE, select Add JDK and specify the path to the JDK home directory (for example, /Library/Java/JavaVirtualMachines/jdk-13.0.1.jdk).

Create a package and a class
Packages are used for grouping together classes that belong to the same category or provide similar functionality, for structuring and organizing large applications with hundreds of classes.
In the Project tool window, select the src folder, press Alt+Insert, and select Java Class.
In the Name field, type com.example.helloworld.HelloWorld and click OK.
IntelliJ IDEA creates the com.example.helloworld package and the HelloWorld class.



Classes
A class represents a single concept.
A Java program must have one class whose name is the same as the program filename.
In the example, the Person class must be declared in a program file named 

public class Person {
    public static void main(String[] args) {
      System.out.println("I am a person, not a computer.");
    }
  }


main() Method
In Java, every application must contain a main() method, which is the entry point for the application. 
All other methods are invoked from the main() method.
The signature of the method is public static void main(String[] args) { }. 
It accepts a single argument: an array of elements of type String.

public class Person {
  public static void main(String[] args) {
    System.out.println("Hello, world!");
  }
}

boolean Data Type
In Java, the boolean primitive data type is used to store a value, which can be either true or false.
boolean result = true;
boolean isMarried = false;


Strings
A String in Java is a Object that holds multiple characters. It is not a primitive datatype.
A String can be created by placing characters between a pair of double quotes (").
To compare Strings, the equals() method must be used instead of the primitive equality comparator ==

// Creating a String variable
String name = "Bob";
 
// The following will print "false" because strings are case-sensitive
System.out.println(name.equals("bob"));

int Data Type
int num1 = 10;   // positive value
int num2 = -5;   // negative value
int num3 = 0;    // zero value
int num4 = 12.5; // not allowed


boolean Data Type
In Java, the boolean primitive data type is used to store a value, which can be either true or false.

boolean result = true;
boolean isMarried = false;
Strings
A String in Java is a Object that holds multiple characters. It is not a primitive datatype.

A String can be created by placing characters between a pair of double quotes (").

To compare Strings, the equals() method must be used instead of the primitive equality comparator ==.

// Creating a String variable
String name = "Bob";
 
// The following will print "false" because strings are case-sensitive
System.out.println(name.equals("bob"));
int Data Type
In Java, the int datatype is used to store integer values. This means that it can store all positive and negative whole numbers and zero.

int num1 = 10;   // positive value
int num2 = -5;   // negative value
int num3 = 0;    // zero value
int num4 = 12.5; // not allowed

char Data Type
char answer = 'y';


Primitive Data Types
Java’s most basic data types are known as primitive data types and are in the system by default.

int age = 28; 
char grade = 'A';
boolean late = true;
byte b = 20;
long num1 = 1234567;
short no = 10;
float k = (float)12.5;
double pi = 3.14;


boolean Data Type
In Java, the boolean primitive data type is used to store a value, which can be either true or false.

boolean result = true;
boolean isMarried = false;
Strings
A String in Java is a Object that holds multiple characters. It is not a primitive datatype.

A String can be created by placing characters between a pair of double quotes (").

To compare Strings, the equals() method must be used instead of the primitive equality comparator ==.

// Creating a String variable
String name = "Bob";
 
// The following will print "false" because strings are case-sensitive
System.out.println(name.equals("bob"));
int Data Type
In Java, the int datatype is used to store integer values. This means that it can store all positive and negative whole numbers and zero.

int num1 = 10;   // positive value
int num2 = -5;   // negative value
int num3 = 0;    // zero value
int num4 = 12.5; // not allowed
char Data Type
In Java, char is used to store a single character. The character must be enclosed in single quotes.

char answer = 'y';
Primitive Data Types
Java’s most basic data types are known as primitive data types and are in the system by default.

The available types are as follows:

int
char
boolean
byte
long
short
double
float
null is another, but it can only ever store the value null.
int age = 28; 
char grade = 'A';
boolean late = true;
byte b = 20;
long num1 = 1234567;
short no = 10;
float k = (float)12.5;
double pi = 3.14;

Static Typing
In Java, the type of a variable is checked at compile time. This is known as static typing. It has the advantage of catching the errors at compile time rather than at execution time.

Variables must be declared with the appropriate data type or the program will not compile.

int i = 10;         // type is int
char ch = 'a';      // type is char
j = 20;             // won't compile, no type is given
char name = "Lil";  // won't compile, wrong data type



int a = 20;
int b = 10;
int result;
result = a + b;  // 30
result = a - b;  // 10
result = a * b;  // 200
result = a / b;  // 2
result = a % b;  // 0

int a = 5;
int b = 3;
boolean result = a > b;
// result now holds the boolean value true


int number = 5;
number += 3; // Value is now 8
number -= 4; // Value is now 4
number *= 6; // Value is now 24
number /= 2; // Value is now 12
number %= 7; // Value is now 5


int numApples = 5;
numApples++; // Value is now 6
int numOranges = 5;
numOranges--; // Value is now 4


Java objects’ state and behavior

public class Person {
  // state of an object
  int age;
  String name;
  
  // behavior of an object
  public void set_value() {
    age = 20;
    name = "Robin";
  }
  public void get_value() {
    System.out.println("Age is " + age);
    System.out.println("Name is " + name);
  }
  
  // main method
  public static void main(String [] args) {
    // creates a new Person object
    Person p = new Person(); 
    
    // changes state through behavior
    p.set_value();
  }
}




Constructor Method in Java
Java classes contain a constructor method which is used to create instances of the class.
The constructor is named after the class. If no constructor is defined, a default empty constructor is used.
public class Maths {
  public Maths() {
    System.out.println("I am constructor");
  }
  public static void main(String [] args) {
    System.out.println("I am main");
    Maths obj1 = new Maths();
  }
}


Java objects’ state and behavior
In Java, instances of a class are known as objects. Every object has state and behavior in the form of instance fields and methods respectively.

public class Person {
  // state of an object
  int age;
  String name;
  
  // behavior of an object
  public void set_value() {
    age = 20;
    name = "Robin";
  }
  public void get_value() {
    System.out.println("Age is " + age);
    System.out.println("Name is " + name);
  }
  
  // main method
  public static void main(String [] args) {
    // creates a new Person object
    Person p = new Person(); 
    
    // changes state through behavior
    p.set_value();
  }
}
Constructor Method in Java
Java classes contain a constructor method which is used to create instances of the class.

The constructor is named after the class. If no constructor is defined, a default empty constructor is used.

public class Maths {
  public Maths() {
    System.out.println("I am constructor");
  }
  public static void main(String [] args) {
    System.out.println("I am main");
    Maths obj1 = new Maths();
  }
}
Java instance
Java instances are objects that are based on classes. For example, Bob may be an instance of the class Person.


public class Person {
  int age;
  String name;
  
  // Constructor method
  public Person(int age, String name) {
    this.age = age;
    this.name = name;
  }
  
  public static void main(String[] args) {
    Person Bob = new Person(31, "Bob");
    Person Alice = new Person(27, "Alice");
  }
}



Creating a new Class instance in Java

public class Person {
  int age;
  // Constructor:
  public Person(int a) {
    age = a;
  }
  
  public static void main(String [] args) {
    // Here, we create a new instance of the Person class:
    Person p = new Person(20);
    System.out.println("Age is " + p.age); // Prints: Age is 20
  }
}


Java dot notation

public class Person {
  int age;
  
  public static void main(String [] args) {
    Person p = new Person();
    
    // here we use dot notation to set age
    p.age = 20; 
    
    // here we use dot notation to access age and print
    System.out.println("Age is " + p.age);
    // Output: Age is 20
  }
}


Reference Data Types

public class Cat {
  public Cat() {
    // instructions for creating a Cat instance
  }  
 
  public static void main(String[] args) {
    // garfield is declared with reference data type `Cat` 
    Cat garfield = new Cat();
    System.out.println(garfield); // Prints: Cat@76ed5528
  }
}


Java objects’ state and behavior
In Java, instances of a class are known as objects. Every object has state and behavior in the form of instance fields and methods respectively.

public class Person {
  // state of an object
  int age;
  String name;
  
  // behavior of an object
  public void set_value() {
    age = 20;
    name = "Robin";
  }
  public void get_value() {
    System.out.println("Age is " + age);
    System.out.println("Name is " + name);
  }
  
  // main method
  public static void main(String [] args) {
    // creates a new Person object
    Person p = new Person(); 
    
    // changes state through behavior
    p.set_value();
  }
}
Constructor Method in Java
Java classes contain a constructor method which is used to create instances of the class.

The constructor is named after the class. If no constructor is defined, a default empty constructor is used.

public class Maths {
  public Maths() {
    System.out.println("I am constructor");
  }
  public static void main(String [] args) {
    System.out.println("I am main");
    Maths obj1 = new Maths();
  }
}
Java instance
Java instances are objects that are based on classes. For example, Bob may be an instance of the class Person.

Every instance has access to its own set of variables which are known as instance fields, which are variables declared within the scope of the instance. Values for instance fields are assigned within the constructor method.

public class Person {
  int age;
  String name;
  
  // Constructor method
  public Person(int age, String name) {
    this.age = age;
    this.name = name;
  }
  
  public static void main(String[] args) {
    Person Bob = new Person(31, "Bob");
    Person Alice = new Person(27, "Alice");
  }
}
Creating a new Class instance in Java
In Java, we use the new keyword followed by a call to the class constructor in order to create a new instance of a class.

The constructor can be used to provide initial values to instance fields.

public class Person {
  int age;
  // Constructor:
  public Person(int a) {
    age = a;
  }
  
  public static void main(String [] args) {
    // Here, we create a new instance of the Person class:
    Person p = new Person(20);
    System.out.println("Age is " + p.age); // Prints: Age is 20
  }
}
Java dot notation
In Java programming language, we use . to access the variables and methods of an object or a Class.

This is known as dot notation and the structure looks like this-

instanceOrClassName.fieldOrMethodName

public class Person {
  int age;
  
  public static void main(String [] args) {
    Person p = new Person();
    
    // here we use dot notation to set age
    p.age = 20; 
    
    // here we use dot notation to access age and print
    System.out.println("Age is " + p.age);
    // Output: Age is 20
  }
}


Reference Data Types
A variable with a reference data type has a value that references the memory address of an instance. During variable declaration, the class name is used as the variable’s type.

public class Cat {
  public Cat() {
    // instructions for creating a Cat instance
  }  
 
  public static void main(String[] args) {
    // garfield is declared with reference data type `Cat` 
    Cat garfield = new Cat();
    System.out.println(garfield); // Prints: Cat@76ed5528
  }
}

Constructor Signatures


// The signature is `Cat(String furLength, boolean hasClaws)`.
public class Cat {
  String furType;
  boolean containsClaws;
 
  public Cat(String furLength, boolean hasClaws) {
    furType = furLength;
    containsClaws = hasClaws;
  }
  public static void main(String[] args) {
    Cat garfield = new Cat("Long-hair", true);
  }
}



null Values

public class Bear {
  String species;
  public Bear(String speciesOfBear;) {
    species = speciesOfBear;
  }
 
  public static void main(String[] args) {
    Bear baloo = new Bear("Sloth bear"); 
    System.out.println(baloo); // Prints: Bear@4517d9a3
    // set object to null
    baloo = null;
    System.out.println(baloo); // Prints: null
  }
}


Declaring a Method

// Here is a public method named sum whose return type is int and has two int parameters a and b
public int sum(int a, int b) {
  return(a + b);
}
 

The body of a Java method


public class Maths {
  public static void sum(int a, int b) { // Start of sum
    int result = a + b;
    System.out.println("Sum is " + result);
  } // End of sum
  
  
  public static void main(String [] args) {
    // Here, we call the sum method
    sum(10, 20);
    // Output: Sum is 30
  }
}

Java Variables Inside a Method
Java variables defined inside a method cannot be used outside the scope of that method.

//For example, `i` and `j` variables are available in the `main` method only:
 
public class Maths {
  public static void main(String [] args) {
    int i, j;
    System.out.println("These two variables are available in main method only");
  }
}
 
Returning info from a Java method
A Java method can return any value that can be saved in a variable. The value returned must match with the return type specified in the method signature.

The value is returned using the return keyword.

public class Maths { 
  
  // return type is int
  public int sum(int a, int b) {
    int k;
    k = a + b;
    
    // sum is returned using the return keyword
    return k;
  }
  
  public static void main(String [] args) {
    Maths m = new Maths();
    int result;
    result = m.sum(10, 20);
    System.out.println("Sum is " + result);
    // Output: Sum is 30
  }
}
Method parameters in Java
In java, parameters are declared in a method definition. The parameters act as variables inside the method and hold the value that was passed in. They can be used inside a method for printing or calculation purposes.

In the example, a and b are two parameters which, when the method is called, hold the value 10 and 20 respectively.

public class Maths {
  public int sum(int a, int b) {
    int k = a + b;
    return k;
  }
  
  public static void main(String [] args) {
    Maths m = new Maths();
    int result = m.sum(10, 20);
    System.out.println("sum is " + result);
    // prints - sum is 30
  }
}






if Statement
An if statement executes a block of code when a specified boolean expression is evaluated as true.

if (true) {
    System.out.println("This code executes");
}

// Prints: This code executes
 
if (false) {
    System.out.println("This code does not execute");
}

// There is no output for the above statement
else Statement
The else statement executes a block of code when the condition inside the if statement is false. The else statement is always the last condition.

boolean condition1 = false;
 
if (condition1){
    System.out.println("condition1 is true");
}
else{
    System.out.println("condition1 is not true");
}

// Prints: condition1 is not true
else if Statements
else-if statements can be chained together to check multiple conditions. Once a condition is true, a code block will be executed and the conditional statement will be exited.

There can be multiple else-if statements in a single conditional statement.

int testScore = 76;
char grade;
 
if (testScore >= 90) {
  grade = 'A';
} else if (testScore >= 80) {
  grade = 'B';
} else if (testScore >= 70) {
  grade = 'C';
} else if (testScore >= 60) {
  grade = 'D';
} else {
  grade = 'F';
}
 
System.out.println("Grade: " + grade); // Prints: C
Nested Conditional Statements
A nested conditional statement is a conditional statement nested inside of another conditional statement. The outer conditional statement is evaluated first; if the condition is true, then the nested conditional statement will be evaluated.

boolean studied = true;
boolean wellRested = true;
 
if (wellRested) {
  System.out.println("Best of luck today!");  
  if (studied) {
    System.out.println("You are prepared for your exam!");
  } else {
    System.out.println("Study before your exam!");
  }
}
 
// Prints: Best of luck today!
// Prints: You are prepared for your exam!
AND Operator



The AND logical operator is represented by &&. This operator returns true if the boolean expressions on both sides of the operator are true; otherwise, it returns false.

System.out.println(true && true); // Prints: true
System.out.println(true && false); // Prints: false
System.out.println(false && true); // Prints: false
System.out.println(false && false); // Prints: false
NOT Operator
The NOT logical operator is represented by !. This operator negates the value of a boolean expression.

boolean a = true;
System.out.println(!a); // Prints: false
 
System.out.println(!true) // Prints: true
The OR Operator
The logical OR operator is represented by ||. This operator will return true if at least one of the boolean expressions being compared has a true value; otherwise, it will return false.

System.out.println(true || true); // Prints: true
System.out.println(true || false); // Prints: true
System.out.println(false || true); // Prints: true
System.out.println(false || false); // Prints: false
Conditional Operators - Order of Evaluation
If an expression contains multiple conditional operators, the order of evaluation is as follows: Expressions in parentheses -> NOT -> AND -> OR.

boolean foo = true && (!false || true); // true

(!false || true) is evaluated first because it is contained within parentheses. 
 
Then !false is evaluated as true because it uses the NOT operator. 
 
Next, (true || true) is evaluation as true. 
 
Finally, true && true is evaluated as true meaning foo is true. 






Arrays
In Java, an array is used to store a list of elements of the same datatype.

Arrays are fixed in size and their elements are ordered.

// Create an array of 5 int elements
int[] marks = {10, 20, 30, 40, 50};
Array creation in Java
In Java, an array can be created in the following ways:

Using the {} notation, by adding each element all at once.
Using the new keyword, and assigning each position of the array individually.
int[] age = {20, 21, 30};
 
int[] marks = new int[3];
marks[0] = 50; 
marks[1] = 70;
marks[2] = 93;
Index
An index refers to an element’s position within an array.

The index of an array starts from 0 and goes up to one less than the total length of the array.

int[] marks = {50, 55, 60, 70, 80};
 
System.out.println(marks[0]);
// Output: 50
 
System.out.println(marks[4]);
// Output: 80
Changing an Element Value
To change an element value, select the element via its index and use the assignment operator to set a new value.

int[] nums = {1, 2, 0, 4};
// Change value at index 2
nums[2] = 3;
Java ArrayList
In Java, an ArrayList is used to represent a dynamic list.

While Java arrays are fixed in size (the size cannot be modified), an ArrayList allows flexibility by being able to both add and remove elements.

// import the ArrayList package
import java.util.ArrayList;
 
// create an ArrayList called students
ArrayList<String> students = new ArrayList<String>();
 
Modifying ArrayLists in Java
An ArrayList can easily be modified using built in methods.

To add elements to an ArrayList, you use the add() method. The element that you want to add goes inside of the ().

To remove elements from an ArrayList, you use the remove() method. Inside the () you can specify the index of the element that you want to remove. Alternatively, you can specify directly the element that you want to remove.

import java.util.ArrayList;
 
public class Students {
  public static void main(String[] args) {
    
     // create an ArrayList called studentList, which initially holds []
        ArrayList<String> studentList = new ArrayList<String>();
    
    // add students to the ArrayList
    studentList.add("John");
    studentList.add("Lily");
    studentList.add("Samantha");
    studentList.add("Tony");
    
    // remove John from the ArrayList, then Lily
    studentList.remove(0);
    studentList.remove("Lily");
    
    // studentList now holds [Samantha, Tony]
    
    System.out.println(studentList);
  }
}









The private Keyword
In Java, instance variables are encapsulated by using the private keyword. This prevents other classes from directly accessing these variables.

public class CheckingAccount{
  // Three private instance variables
  private String name;
  private int balance;
  private String id;
}
Accessor Methods
In Java, accessor methods return the value of a private variable. This gives other classes access to that value stored in that variable. without having direct access to the variable itself.

Accessor methods take no parameters and have a return type that matches the type of the variable they are accessing.

public class CheckingAccount{
  private int balance;
  
  //An accessor method
  public int getBalance(){
    return this.balance;
  }
}
Mutator Methods
In Java, mutator methods reset the value of a private variable. This gives other classes the ability to modify the value stored in that variable without having direct access to the variable itself.

Mutator methods take one parameter whose type matches the type of the variable it is modifying. Mutator methods usually don’t return anything.

public class CheckingAccount{
  private int balance;
  
  //A mutator method
  public void setBalance(int newBalance){
    this.balance = newBalance;
  }
}
Local Variables
In Java, local variables can only be used within the scope that they were defined in. This scope is often defined by a set of curly brackets. Variables can’t be used outside of those brackets.

public void exampleMethod(int exampleVariable){
  // exampleVariable can only be used inside these curly brackets.
}
The this Keyword with Variables
In Java, the this keyword can be used to designate the difference between instance variables and local variables. Variables with this. reference an instance variable.

public class Dog{
  public String name;
 
  public void speak(String name){
    // Prints the instance variable named name
    System.out.println(this.name);
 
    // Prints the local variable named name
    System.out.println(name);
  }
}
The this Keyword with Methods
In Java, the this keyword can be used to call methods when writing classes.

public class ExampleClass{
  public void exampleMethodOne(){
    System.out.println("Hello");
  }
 
  public void exampleMethodTwo(){
    //Calling a method using this.
    this.exampleMethodOne();
    System.out.println("There");
  }
}
Static Methods
Static methods are methods that can be called within a program without creating an object of the class.

// static method
public static int getTotal(int a, int b) {
  return a + b;
}
 
public static void main(String[] args) {
  int x = 3;
  int y = 2;
  System.out.println(getTotal(x,y)); // Prints: 5
}
Calling a Static Method
Static methods can be called by appending the dot operator to a class name followed by the name of the method.

int largerNumber = Math.max(3, 10); // Call static method
System.out.println(largerNumber); // Prints: 10
 
The Math Class
The Math class (which is part of the java.lang package) contains a variety of static methods that can be used to perform numerical calculations.

System.out.println(Math.abs(-7.0)); // Prints: 7
 
System.out.println(Math.pow(5, 3)); // Prints: 125.0
 
System.out.println(Math.sqrt(52)); // Prints: 7.211102550927978
The static Keyword
Static methods and variables are declared as static by using the static keyword upon declaration.

public class ATM{
  // Static variables
  public static int totalMoney = 0;
  public static int numATMs = 0;
 
  // A static method
  public static void averageMoney(){
    System.out.println(totalMoney / numATMs);
  }
Static Methods and Variables
Static methods and variables are associated with the class as a whole, not objects of the class. Both are used by using the name of the class followed by the . operator.

public class ATM{
  // Static variables
  public static int totalMoney = 0;
  public static int numATMs = 0;
 
  // A static method
  public static void averageMoney(){
    System.out.println(totalMoney / numATMs);
  }
 
  public static void main(String[] args){
 
    //Accessing a static variable
    System.out.println("Total number of ATMs: " + ATM.numATMs); 
 
    // Calling a static method
    ATM.averageMoney();
  }
 
}
Static Methods with Instance Variables
Static methods cannot access or change the values of instance variables.

class ATM{
// Static variables
  public static int totalMoney = 0;
  public static int numATMs = 0; 
 
  public int money = 1;
 
  // A static method
  public static void averageMoney(){
    // Can not use this.money here because a static method can't access instance variables
  }
 
}
Methods with Static Variables
Both non-static and static methods can access or change the values of static variables.

class ATM{
// Static variables 
  public static int totalMoney = 0; 
  public static int numATMs = 0; 
  public int money = 1;
 
 // A static method interacting with a static variable 
  public static void staticMethod(){ 
    totalMoney += 1;
   } 
 
  // A non-static method interactingwith a static variable 
  public void nonStaticMethod(){
    totalMoney += 1; 
  } 
}
Static Methods and the this Keyword
Static methods do not have a this reference and are therefore unable to use the class’s instance variables or call non-static methods.

public class DemoClass{
 
  public int demoVariable = 5;
 
  public void demoNonStaticMethod(){
    
  }
  public static void demoStaticMethod(){
    // Can't use "this.demoVariable" or "this.demoNonStaticMethod()"
  }
}




Inheritance in Java
Inheritance is an important feature of object-oriented programming in Java. It allows for one class (child class) to inherit the fields and methods of another class (parent class). For instance, we might want a child class Dog to inherent traits from a more general parent class Animal.

When defining a child class in Java, we use the keyword extends to inherit from a parent class.

// Parent Class
class Animal {
  // Animal class members
}
 
// Child Class
class Dog extends Animal {
  // Dog inherits traits from Animal 
  
  // additional Dog class members
}
Main() method in Java
In simple Java programs, you may work with just one class and one file. However, as your programs become more complex you will work with multiple classes, each of which requires its own file. Only one of these files in the Java package requires a main() method, and this is the file that will be run in the package.

For example, say we have two files in our Java package for two different classes:

Shape, the parent class.
Square, the child class.
If the Java file containing our Shape class is the only one with a main() method, this is the file that will be run for our Java package.

// Shape.java file 
class Shape {
  public static void main(String[] args) {
    Square sq = new Square();
  }
}
 
// Square.java file 
class Square extends Shape {
  
}
super() in Java
In Java, a child class inherits its parent’s fields and methods, meaning it also inherits the parent’s constructor. Sometimes we may want to modify the constructor, in which case we can use the super() method, which acts like the parent constructor inside the child class constructor.

Alternatively, we can also completely override a parent class constructor by writing a new constructor for the child class.

// Parent class
class Animal {
  String sound;
  Animal(String snd) {
    this.sound = snd;
  }
}
 
// Child class
class Dog extends Animal { 
  // super() method can act like the parent constructor inside the child class constructor.
  Dog() {
    super("woof");
  } 
  // alternatively, we can override the constructor completely by defining a new constructor.
  Dog() {
    this.sound = "woof";
  }
}
Protected and Final keywords in Java
When creating classes in Java, sometimes we may want to control child class access to parent class members. We can use the protected and final keywords to do just that.

protected keeps a parent class member accessible to its child classes, to files within its own package, and by subclasses of this class in another package.

Adding final before a parent class method’s access modifier makes it so that any child classes cannot modify that method - it is immutable.

class Student {
  protected double gpa;
  // any child class of Student can access gpa 
  
  final protected boolean isStudent() {
    return true;
  }
  // any child class of Student cannot modify isStudent()
}
Polymorphism in Java
Java incorporates the object-oriented programming principle of polymorphism.

Polymorphism allows a child class to share the information and behavior of its parent class while also incorporating its own functionality. This allows for the benefits of simplified syntax and reduced cognitive overload for developers.

// Parent class
class Animal {
  public void greeting() {
    System.out.println("The animal greets you.");
  }
}
 
// Child class
class Cat extends Animal {
  public void greeting() {
    System.out.println("The cat meows.");
  }
}
 
class MainClass {
  public static void main(String[] args) {
    Animal animal1 = new Animal();  // Animal object
    Animal cat1 = new Cat();  // Cat object
    animal1.greeting(); // prints "The animal greets you."
    cat1.greeting(); // prints "The cat meows."
  }
}
Method Overriding in Java
In Java, we can easily override parent class methods in a child class. Overriding a method is useful when we want our child class method to have the same name as a parent class method but behave a bit differently.

In order to override a parent class method in a child class, we need to make sure that the child class method has the following in common with its parent class method:

Method name
Return type
Number and type of parameters
Additionally, we should include the @Override keyword above our child class method to indicate to the compiler that we want to override a method in the parent class.

// Parent class 
class Animal {
  public void eating() {
    System.out.println("The animal is eating.");
  }
}
 
// Child class 
class Dog extends Animal {
  // Dog's eating method overrides Animal's eating method
    @Override
  public void eating() {
    System.out.println("The dog is eating.");
  }
}
Child Classes in Arrays and ArrayLists
In Java, polymorphism allows us to put instances of different classes that share a parent class together in an array or ArrayList.

For example, if we have an Animal parent class with child classes Cat, Dog, and Pig we can set up an array with instances of each animal and then iterate through the list of animals to perform the same action on each.

// Animal parent class with child classes Cat, Dog, and Pig. 
Animal cat1, dog1, pig1;
 
cat1 = new Cat();
dog1 = new Dog();
pig1 = new Pig();
 
// Set up an array with instances of each animal
Animal[] animals = {cat1, dog1, pig1};
 
// Iterate through the list of animals and perform the same action with each
for (Animal animal : animals) {
  
  animal.sound();
  
}




CALCULATOR IN JAVA


Save this file as MyCalculator.java 
to compile it use 
    javac MyCalculator.java 
to use the calcuator do this 
    java MyCalculator 
 

import java.awt.*;  
import java.awt.event.*;  
public class MyCalculator extends Frame  
{  
  
public boolean setClear=true;  
double number, memValue;  
char op;  
  
String digitButtonText[] = {"7", "8", "9", "4", "5", "6", "1", "2", "3", "0", "+/-", "." };  
String operatorButtonText[] = {"/", "sqrt", "*", "%", "-", "1/X", "+", "=" };  
String memoryButtonText[] = {"MC", "MR", "MS", "M+" };  
String specialButtonText[] = {"Backspc", "C", "CE" };  
  
MyDigitButton digitButton[]=new MyDigitButton[digitButtonText.length];  
MyOperatorButton operatorButton[]=new MyOperatorButton[operatorButtonText.length];  
MyMemoryButton memoryButton[]=new MyMemoryButton[memoryButtonText.length];  
MySpecialButton specialButton[]=new MySpecialButton[specialButtonText.length];  
  
Label displayLabel=new Label("0",Label.RIGHT);  
Label memLabel=new Label(" ",Label.RIGHT);  
  
final int FRAME_WIDTH=325,FRAME_HEIGHT=325;  
final int HEIGHT=30, WIDTH=30, H_SPACE=10,V_SPACE=10;  
final int TOPX=30, TOPY=50;  
///////////////////////////  
MyCalculator(String frameText)//constructor  
{  
super(frameText);  
  
int tempX=TOPX, y=TOPY;  
displayLabel.setBounds(tempX,y,240,HEIGHT);  
displayLabel.setBackground(Color.BLUE);  
displayLabel.setForeground(Color.WHITE);  
add(displayLabel);  
  
memLabel.setBounds(TOPX,  TOPY+HEIGHT+ V_SPACE,WIDTH, HEIGHT);  
add(memLabel);  
  
// set Co-ordinates for Memory Buttons  
tempX=TOPX;   
y=TOPY+2*(HEIGHT+V_SPACE);  
for(int i=0; i<memoryButton.length; i++)  
{  
memoryButton[i]=new MyMemoryButton(tempX,y,WIDTH,HEIGHT,memoryButtonText[i], this);  
memoryButton[i].setForeground(Color.RED);  
y+=HEIGHT+V_SPACE;  
}  
  
//set Co-ordinates for Special Buttons  
tempX=TOPX+1*(WIDTH+H_SPACE); y=TOPY+1*(HEIGHT+V_SPACE);  
for(int i=0;i<specialButton.length;i++)  
{  
specialButton[i]=new MySpecialButton(tempX,y,WIDTH*2,HEIGHT,specialButtonText[i], this);  
specialButton[i].setForeground(Color.RED);  
tempX=tempX+2*WIDTH+H_SPACE;  
}  
  
//set Co-ordinates for Digit Buttons  
int digitX=TOPX+WIDTH+H_SPACE;  
int digitY=TOPY+2*(HEIGHT+V_SPACE);  
tempX=digitX;  y=digitY;  
for(int i=0;i<digitButton.length;i++)  
{  
digitButton[i]=new MyDigitButton(tempX,y,WIDTH,HEIGHT,digitButtonText[i], this);  
digitButton[i].setForeground(Color.BLUE);  
tempX+=WIDTH+H_SPACE;  
if((i+1)%3==0){tempX=digitX; y+=HEIGHT+V_SPACE;}  
}  
  
//set Co-ordinates for Operator Buttons  
int opsX=digitX+2*(WIDTH+H_SPACE)+H_SPACE;  
int opsY=digitY;  
tempX=opsX;  y=opsY;  
for(int i=0;i<operatorButton.length;i++)  
{  
tempX+=WIDTH+H_SPACE;  
operatorButton[i]=new MyOperatorButton(tempX,y,WIDTH,HEIGHT,operatorButtonText[i], this);  
operatorButton[i].setForeground(Color.RED);  
if((i+1)%2==0){tempX=opsX; y+=HEIGHT+V_SPACE;}  
}  
  
addWindowListener(new WindowAdapter()  
{  
public void windowClosing(WindowEvent ev)  
{System.exit(0);}  
});  
  
setLayout(null);  
setSize(FRAME_WIDTH,FRAME_HEIGHT);  
setVisible(true);  
}  
//////////////////////////////////  
static String getFormattedText(double temp)  
{  
String resText=""+temp;  
if(resText.lastIndexOf(".0")>0)  
    resText=resText.substring(0,resText.length()-2);  
return resText;  
}  

public static void main(String []args)  
{  
new MyCalculator("Calculator - JavaTpoint");  
}  
}  
  

  
class MyDigitButton extends Button implements ActionListener  
{  
MyCalculator cl;  
  
//////////////////////////////////////////  
MyDigitButton(int x,int y, int width,int height,String cap, MyCalculator clc)  
{  
super(cap);  
setBounds(x,y,width,height);  
this.cl=clc;  
this.cl.add(this);  
addActionListener(this);  
}  
////////////////////////////////////////////////  
static boolean isInString(String s, char ch)  
{  
for(int i=0; i<s.length();i++) if(s.charAt(i)==ch) return true;  
return false;  
}  
/////////////////////////////////////////////////  
public void actionPerformed(ActionEvent ev)  
{  
String tempText=((MyDigitButton)ev.getSource()).getLabel();  
  
if(tempText.equals("."))  
{  
 if(cl.setClear)   
    {cl.displayLabel.setText("0.");cl.setClear=false;}  
 else if(!isInString(cl.displayLabel.getText(),'.'))  
    cl.displayLabel.setText(cl.displayLabel.getText()+".");  
 return;  
}  
  
int index=0;  
try{  
        index=Integer.parseInt(tempText);  
    }catch(NumberFormatException e){return;}  
  
if (index==0 && cl.displayLabel.getText().equals("0")) return;  
  
if(cl.setClear)  
            {cl.displayLabel.setText(""+index);cl.setClear=false;}  
else  
    cl.displayLabel.setText(cl.displayLabel.getText()+index);  
}//actionPerformed  
}//class defination  
  

  
class MyOperatorButton extends Button implements ActionListener  
{  
MyCalculator cl;  
  
MyOperatorButton(int x,int y, int width,int height,String cap, MyCalculator clc)  
{  
super(cap);  
setBounds(x,y,width,height);  
this.cl=clc;  
this.cl.add(this);  
addActionListener(this);  
}  


public void actionPerformed(ActionEvent ev)  
{  
String opText=((MyOperatorButton)ev.getSource()).getLabel();  
  
cl.setClear=true;  
double temp=Double.parseDouble(cl.displayLabel.getText());  
  
if(opText.equals("1/x"))  
    {  
    try  
        {double tempd=1/(double)temp;  
        cl.displayLabel.setText(MyCalculator.getFormattedText(tempd));}  
    catch(ArithmeticException excp)  
                        {cl.displayLabel.setText("Divide by 0.");}  
    return;  
    }  
if(opText.equals("sqrt"))  
    {  
    try  
        {double tempd=Math.sqrt(temp);  
        cl.displayLabel.setText(MyCalculator.getFormattedText(tempd));}  
            catch(ArithmeticException excp)  
                    {cl.displayLabel.setText("Divide by 0.");}  
    return;  
    }  
if(!opText.equals("="))  
    {  
    cl.number=temp;  
    cl.op=opText.charAt(0);  
    return;  
    }  
// process = button pressed  
switch(cl.op)  
{  
case '+':  
    temp+=cl.number;break;  
case '-':  
    temp=cl.number-temp;break;  
case '*':  
    temp*=cl.number;break;  
case '%':  
    try{temp=cl.number%temp;}  
    catch(ArithmeticException excp)  
        {cl.displayLabel.setText("Divide by 0."); return;}  
    break;  
case '/':  
    try{temp=cl.number/temp;}  
        catch(ArithmeticException excp)  
                {cl.displayLabel.setText("Divide by 0."); return;}  
    break;  
}//switch  
  
cl.displayLabel.setText(MyCalculator.getFormattedText(temp));  
//cl.number=temp;  
}//actionPerformed  
}//class  
  
 
  
class MyMemoryButton extends Button implements ActionListener  
{  
MyCalculator cl;  
  
/////////////////////////////////  
MyMemoryButton(int x,int y, int width,int height,String cap, MyCalculator clc)  
{  
super(cap);  
setBounds(x,y,width,height);  
this.cl=clc;  
this.cl.add(this);  
addActionListener(this);  
}  
////////////////////////////////////////////////  
public void actionPerformed(ActionEvent ev)  
{  
char memop=((MyMemoryButton)ev.getSource()).getLabel().charAt(1);  
  
cl.setClear=true;  
double temp=Double.parseDouble(cl.displayLabel.getText());  
  
switch(memop)  
{  
case 'C':   
    cl.memLabel.setText(" ");cl.memValue=0.0;break;  
case 'R':   
    cl.displayLabel.setText(MyCalculator.getFormattedText(cl.memValue));break;  
case 'S':  
    cl.memValue=0.0;  
case '+':   
    cl.memValue+=Double.parseDouble(cl.displayLabel.getText());  
    if(cl.displayLabel.getText().equals("0") || cl.displayLabel.getText().equals("0.0")  )  
        cl.memLabel.setText(" ");  
    else   
        cl.memLabel.setText("M");     
    break;  
}//switch  
}//actionPerformed  
}//class  
  

  
class MySpecialButton extends Button implements ActionListener  
{  
MyCalculator cl;  
  
MySpecialButton(int x,int y, int width,int height,String cap, MyCalculator clc)  
{  
super(cap);  
setBounds(x,y,width,height);  
this.cl=clc;  
this.cl.add(this);  
addActionListener(this);  
}  
//////////////////////  
static String backSpace(String s)  
{  
String Res="";  
for(int i=0; i<s.length()-1; i++) Res+=s.charAt(i);  
return Res;  
}  
  
//////////////////////////////////////////////////////////  
public void actionPerformed(ActionEvent ev)  
{  
String opText=((MySpecialButton)ev.getSource()).getLabel();  
//check for backspace button  
if(opText.equals("Backspc"))  
{  
String tempText=backSpace(cl.displayLabel.getText());  
if(tempText.equals(""))   
    cl.displayLabel.setText("0");  
else   
    cl.displayLabel.setText(tempText);  
return;  
}  
//check for "C" button i.e. Reset  
if(opText.equals("C"))   
{  
cl.number=0.0; cl.op=' '; cl.memValue=0.0;  
cl.memLabel.setText(" ");  
}  
  
//it must be CE button pressed  
cl.displayLabel.setText("0");cl.setClear=true;  
}//actionPerformed  
}//class  
  
/********************************************* 
Features not implemented and few bugs 
 
i)  No coding done for "+/-" button. 
ii) Menubar is not included. 
iii)Not for Scientific calculation 
iv)Some of the computation may lead to unexpected result 
   due to the representation of Floating point numbers in computer 
   is an approximation to the given value that can be stored 
   physically in memory. 


*/