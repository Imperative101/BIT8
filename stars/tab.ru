RUBY

print "Hello"
puts "This is written in a new line"
print "Still printing"

print 1+3
# Addition: output 4
print 1-2
# Subtraction: output -1
print 9/3
# Division: output 3
print 2*3
# Multiplication: output 6
print 2**3
# Exponentiation: output 8
print 16%9
# Modulo: output 7

var = "codecademy"
# Method to get the length of a string
print var.length # 10
# Method to get the string reversed
print var.reverse # ymedacedoc
# Method to conver all letters to uppercase
print var.upcase # CODECADEMY

# Boolean true variable
year2019 = true
# Boolean false variable
year2018 = false

puts "codecademy".upcase
# CODECADEMY
puts "Codecademy".downcase
# codecademy

number = 10
if number == 10
  puts "Your condition was true!"
end


if number > 50 
    print "number is greater than 50"
  else
    print "number is not greater than 50" 
  end  
    


print "enter a number: "
num = gets.chomp
num =  num.to_i;
   
  if num == 5
    print "number is 5"
  elsif num == 10
    print "number is 10"
  elsif num == 11
    print "number is 11"
  else
    print "number is something other than 5, 10, or 11"
  end

#This construct requires a "number" variable to be less than 10 in order to execute:
print "Enter a number"
number = gets.to_i
unless number > 10
  puts "number is less than 10."
end

if score1 > score2 && score1 > score3
    print "Score 1 is the greatest in value."
  else
    print "Score 1 is not the greatest in value."
  end
    
  

grade1 = 50
grade2 = 30
grade3 = 80
   
if grade1 > grade2 || grade1 > grade3
puts "Grade 1 is not the lowest score!"
end

HASH

profile = {
  "name" => "Magnus",
  "profession" => "chess player"
  "ranking" => 1,
  "grandmaster?" => true
}
# "name", "profession", "ranking", and "grandmaster?" are the keys. "Magnus", "chess player", 1 and true are the values.
puts profile["name"] # => Magnus

Ruby Array
numbers = [1, 2, 3, 4, 5]
#An array of Integers
words = ["See", "Spot", "run"]
#An array of Strings
mixed = ["hello", 5, true, 3.0]
#An array with a String, Integer, Boolean, and Float
empty = []
#An empty array


Ruby Hash New

#Creating a hash through literal notation:
lunch = {
  "protein" => "chicken",
  "greens" => "lettuce",
  "organic?" => true
}
#Creating a hash through Hash.new
lunch = Hash.new
puts lunch # => {}


Ruby Hash
In Ruby, a hash is a collection of key-value pairs.

A hash is denoted by a set of curly braces ({}) which contains key-value pairs separated by commas. Each value is assigned to a key using a hash rocket (=>). Calling the hash followed by a key name within brackets grabs the value associated with that key.

profile = {
  "name" => "Magnus",
  "profession" => "chess player"
  "ranking" => 1,
  "grandmaster?" => true
}
 
# "name", "profession", "ranking", and "grandmaster?" are the keys. "Magnus", "chess player", 1 and true are the values.
 
puts profile["name"] # => Magnus
 
Ruby Array
In Ruby, an array is an ordered collection of Ruby objects separated by commas and enclosed in []. An array can contain the same or different types of Ruby objects, such as Integers, Strings, Floats, etc. An array can also be empty.

numbers = [1, 2, 3, 4, 5]
#An array of Integers
 
words = ["See", "Spot", "run"]
#An array of Strings
 
mixed = ["hello", 5, true, 3.0]
#An array with a String, Integer, Boolean, and Float
 
empty = []
#An empty array
Ruby Hash New
In Ruby, a hash can be created through literal notation (because we are literally assigning what key=>value pairs we want in the hash) or by assigning a variable equal to Hash.new which generates a new, empty hash.

#Creating a hash through literal notation:
lunch = {
  "protein" => "chicken",
  "greens" => "lettuce",
  "organic?" => true
}
 
#Creating a hash through Hash.new
lunch = Hash.new
puts lunch # => {}
 
Ruby Hash Bracket Notation Adding Pairs

#Bracket notation applies to any hash, regardless of how it was initialized
teammates = Hash.new
teammates["forward"] = "Messi"
salary = {
  "starting" => 40000
}
salary["mid-level"] = 60000

Ruby Multidimensional Arrays

multi_array = [[0,1,2,3],[4.5, true, "hi"]]
# Accessing the array at index 1
puts multi_array[1] # => [4.5, true, "hi"]
# Accessing the element at index 0 within the array at index 1
puts multi_array[1][0] # => 4.5

Ruby Array Index

example = ["Car", "Boar", 45, 9.9, true]
#For an array named `example`, you can retrieve an item of a particular index by referencing its index.
puts example[2] # => 45
puts example[0] # => Car

Ruby Method .Each

#In this example, the each method iterates over every color in the colors array and prints it to the console.
 
colors = ["red", "blue", "green", "yellow"]
 
colors.each { |color| puts color }
#Output
#red
#blue
#green
#yellow
 
#When iterating over hashes, two placeholder variables are needed to represent each key/value pair.
 
polygons = {
  "pentagon" => 5,
  "hexagon" => 6,
  "nonagon" => 9
}
 
polygons.each do |shape, sides|
  puts "A #{shape} has #{sides} sides."
end
#Output
#A pentagon has 5 sides.
#A hexagon has 6 sides.
#A nonagon has 9 sides.
 
Ruby Hash Bracket Notation Value

my_love = {
  "dog" => "Keanu",
  "breed" => "Shiba Inu",
  "age_in_years" => 1,
}
puts my_love["breed"] # => Shiba Inu


Ruby method
A Ruby method is a reusable section of code written to execute a certain task. It is defined with the def keyword, followed by a method name, a method body, and ends with the end keyword:

def greeting
  puts "Hello world!"
end
 
#In this example, the first line or header contains the keyword "def" and the method name. puts "Hello world!" is within the body of the method, which describes the certain task that the method carries out. It is also indented two spaces by convention. Following the body, the method ends with the end keyword.
Ruby Method Parameters & Arguments

Ruby Method Splat

#The * preceding the parameter "clubs" allows for multiple arguments to be passed into the method when you actually call it.
def extra_curriculars(*clubs)
    clubs.each { |club| puts "After school, I'm involved with #{club}" }
  end
  extra_curriculars("chess club", "gymnastics", "anime club", "library services")
  #Output
  #After school, I'm involved with chess club
  #After school, I'm involved with gymnastics
  #After school, I'm involved with anime club
  #After school, I'm involved with library services


  Ruby Block Parameter

 # The block, {|i| puts i}, is passed the current array item each time it is evaluated. This block prints the item. 
[1, 2, 3, 4, 5].each { |i| puts i }

Ruby Sort Method

my_array = [3, 4, 8, 7, 1, 6, 5, 9, 2]
my_array.sort!
#Attaching an ! to the end of .sort or any other Ruby method modifies the original array.
print my_array
# => [1, 2, 3, 4, 5, 6, 7, 8, 9]
#If you didn't use !, print my_array returns the original array.


Ruby Combined Comparison Operator

puts "Keanu" <=> "Adrianna" # The first letters of each word are compared in ASCII order and since "K" comes after "A", 1 is printed.
puts 1 <=> 2 # -1
puts 3 <=> 3 # 0
#<=> can also be used inside of a block and to sort values in descending order:
my_array = [3, 0, 8, 7, 1, 6, 5, 9, 4]
my_array.sort! { |first_num, second_num| second_num <=> first_num }
print my_array
#Output => [9, 8, 7, 6, 5, 4, 3, 1, 0]
 

Ruby Hashes, Symbols, & Values

my_progress = {
  :program => "Codecademy",
  :language => "Ruby",
  :enthusiastic? => true 
}
#Key symbols and their values can be defined with a =>, also known as a hash rocket.
 
my_progress = {
  program: "Codecademy",
  language: "Ruby",
  enthusiastic?: true 
}
#Key symbols and their values can also be defined with the colon (:) at the end of the symbol followed by its value.

Ruby Case Statement

tv_show = "Bob's Burgers"
 
case tv_show
  when "Archer"
    puts "I don't like the voice of Archer."
  when "Bob's Burgers"
    puts "I love the voice of Bob Belcher."
  else
    puts "I don't know who voices this cartoon."
end
 
# => I love the voice of Bob Belcher.
#In this example, a case statement is used to check for multiple possible values of tv_show. 
#Since tv_show is "Bob's Burgers", the second when is evaluated to true. If none of the conditions were met, Ruby would evaluate the else statement.

Ruby Short-Circuit Evaluation


a = true
b = false
c = true
 
puts a || b
#Output => true
puts b || a
#Output => true
puts a && c
#Output => true 
puts a && b
#Output => false


Ruby Case Statement
In Ruby, a case statement is a more concise alternative to an if/else statement that contains many conditions.

tv_show = "Bob's Burgers"
 
case tv_show
  when "Archer"
    puts "I don't like the voice of Archer."
  when "Bob's Burgers"
    puts "I love the voice of Bob Belcher."
  else
    puts "I don't know who voices this cartoon."
end
 
# => I love the voice of Bob Belcher.
 
#In this example, a case statement is used to check for multiple possible values of tv_show. Since tv_show is "Bob's Burgers", the second when is evaluated to true. If none of the conditions were met, Ruby would evaluate the else statement.
Ruby .respond_to?
In Ruby, .respond_to? takes a symbol representing a method name and returns true if that method can be called on the object and false otherwise.

puts "A".respond_to?(:push)
# => false
# Here, the following Ruby code will return false since .push can’t be called on a String object.
 
puts "A".respond_to?(:next)
# => true
# Here, however, the following Ruby code will return true since .next can be called on a String object. Calling .next on the letter “A” would return the letter “”.
 
 
 
array = [1, 2, 3]
array << 4
print array
#Output => [1, 2, 3, 4]
puts "Hello," << " welcome to Codecademy."


num = 6
if num % 2 == 0
  puts "This number is even!"
end
#Refactored, this can be stated in a single line as demonstrated below:
puts "This number is even!" if num % 2 == 0


def product(x,y)
    x * y
  end
  product(5, 4)
  # => 20
  #In this example, Ruby evaluates the product method and returns 20 even though the return keyword was omitted.

  Ruby .collect Method

  first_arr = [3, 4, 5]
  second_arr = first_arr.collect { |num| num * 5 }
  print second_arr #Output => [15, 20, 25]
  # In this example, the .collect method is used to multiply each number within first_arr by 5. The outcome is then saved inside of the second_arr variable and printed to the console. The original first_arr is left unchanged.
   
  Ruby yield Keyword

  def yield_test
    puts "I'm inside the method."
    yield
    puts "I'm also inside the method."
  end
   
  yield_test { puts ">>> I'm butting into the method!" }
  #Output
  # I'm inside the method.
  # >>> I'm butting into the method.
  # I'm also inside the method.
  
  Ruby proc

  square = Proc.new { |x| x ** 2 }
  # A proc is defined by calling Proc.new followed by a block.
  [2, 4, 6].collect!(&square)
  # When passing a proc to a method, an & is used to convert the proc into a block.
  puts [2, 4, 6].collect!(&square)
  # => [4, 16, 36]

  Ruby .call Method
 
proc_test = Proc.new { puts "I am the proc method!" }
lambda_test = lambda { puts "I am the lambda method!"}
proc_test.call # => I am the proc method!
lambda_test.call # => I am the lambda method!
#The following code would result in "I am the proc method!" and "I am the lambda method!" printed to the console respectively, once the proc, proc_test, and the lambda, lambda_test, are called.


Ruby lambda

def proc_demo_method
    proc_demo = Proc.new { return "Only I print!" }
    proc_demo.call
    "But what about me?" # Never reached
  end
   
  puts proc_demo_method 
  # Output 
  # Only I print!
   
  # (Notice that the proc breaks out of the method when it returns the value.)
   
  def lambda_demo_method
    lambda_demo = lambda { return "Will I print?" }
    lambda_demo.call
    "Sorry - it's me that's printed."
  end
   
  puts lambda_demo_method
  # Output
  # Sorry - it's me that's printed.
   
  # (Notice that the lambda returns back to the method in order to complete it.

  OOP RUBY

  Ruby Class

class NewClass
  # code for this class 
end

Ruby initialize Method

class Person
    def initialize
      # this code runs when a new instance is created
    end
  end

  Ruby Instance Variable

  class Student
    def initialize(name, grade)
      @name = name
      @grade = grade
    end
  end

  
Ruby Class
A Ruby class is used to organize and model objects with similar attributes and methods.

class NewClass
  # code for this class 
end
 
 
# A basic class definition consists of the class keyword, the name of the class in CamelCase (with the first letter capitalized) format, and an end keyword.
Ruby initialize Method
In a Ruby class, an initialize method is used to generate new instances of the class. It is usually the first method of a class.

class Person
  def initialize
    # this code runs when a new instance is created
  end
end
 
#Every time Person.new is called, the initialize method of the Person class is called.
 
 
Ruby Instance Variable
In Ruby, the @ symbol is used to signify an instance variable. Instance variables hold a value specific to each instance of that class, not to all members of the class itself.

class Student
  def initialize(name, grade)
    @name = name
    @grade = grade
  end
end
 
# In this example, name and grade are the instance variables.
 
 
Ruby .new Method

class Fighter
    def initialize(name, style, division, age)
      @name = name
      @style = style
      @division = division
      @age = age
    end
  end
   
  conor = Fighter.new("Conor", "mixed martial arts", "Welterweight", 31)




  Ruby super Keyword


class Trip
  def initialize(duration, price)
    @duration = duration
    @price = price
  end
end
 
 
class Cruise < Trip
  def initialize(duration, price)
    super
  end
end
 
spain_backpacking = Trip.new(14, 800.00)
carnival = Cruise.new(7, 2400.00)



Ruby Class Variables

class Child
    @@children = 0
    def initialize(name, birth_year)
      @name = name
      @birth_year = birth_year
      @@children +=1
    end
   
    def self.children_added
      return @@children
    end
   
  end
  naomi = Child.new("Naomi", 2006)
  bertha = Child.new("Bertha", 2008)
  puts Child.children_added # => 2


  Ruby attr_reader attr_writer Methods

  class Student
    attr_reader :name
    attr_writer :name
    def initialize(name)
      @name = name
    end
  end
  #In this example, Ruby is able to both read and write the @name instance variable since it was passed to attr_reader and attr_writer as a symbol.
   
  top_student = Student.new("Jyothi")
  puts top_student.name # => Jyothi
  #In classes with attr_reader, instance variables can be accessed using . notation
   
  puts top_student.name # => Jyothi
  top_student.name = "Anika"
  puts top_student.name # => Anika
  #In classes with attr_writer, instance variables can be reassigned using . notation
  

  Ruby attr_accessor Method

class CollegeStudent
  attr_reader :dorm
  attr_accessor :major
 
  def initialize(dorm, major)
    @dorm = dorm
        @major  major
  end
end
 
#In this example, Ruby is able to only read the @dorm instance variable but both read and write the @major instance variable since it was passed to the attr_accessor method.


Ruby Module
module MyPizza
    FAVE_TOPPING = "Buffalo Chicken"
  end

  Ruby namespace

  puts Math::PI
# => 3.141592653589793





