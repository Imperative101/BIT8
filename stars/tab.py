# Comment on a single line
 
user = "JDoe" # Comment after code


print("Hello World!")
print(100)
pi = 3.14159
print(pi)

user = "User Full Name"
game = 'Monopoly'
longer = "This string is broken up \
over multiple lines"

# These are all valid variable names and assignment
 
user_name = "@sonnynomnom"
user_id = 100
verified = False
 
# A variable's value can be changed after assignment
 
points = 100
points = 120



# Arithmetic operations
 
result = 10 + 30
result = 40 - 10
result = 50 * 5
result = 16 / 4
result = 25 % 2
result = 5 ** 3


# Equal operator
 
if 'Yes' == 'Yes':
  # evaluates to True
  print('They are equal')
 
if (2 > 1) == (5 < 10):
  # evaluates to True
  print('Both expressions give the same result')
 
c = '2'
d = 2
 
if c == d:
  print('They are equal')
else:
  print('They are not equal')


  # Not Equals Operator
 
if "Yes" != "No":
  # evaluates to True
  print("They are NOT equal")
 
val1 = 10
val2 = 20
 
if val1 != val2:
  print("They are NOT equal")
 
if (10 > 1) != (10 > 1000):
  # True != False
  print("They are NOT equal")


a = 2
b = 3
a < b  # evaluates to True
a > b  # evaluates to False
a >= b # evaluates to False
a <= b # evaluates to True
a <= a # evaluates to True

True and True     # Evaluates to True
True and False    # Evaluates to False
False and False   # Evaluates to False
1 == 1 and 1 < 2  # Evaluates to True
1 < 2 and 3 < 1   # Evaluates to False
"Yes" and 100     # Evaluates to True

True or True      # Evaluates to True
True or False     # Evaluates to True
False or False    # Evaluates to False
1 < 2 or 3 < 1    # Evaluates to True
3 < 1 or 1 > 6    # Evaluates to False
1 == 1 or 1 < 2   # Evaluates to True

not True     # Evaluates to False
not False    # Evaluates to True
1 > 2        # Evaluates to False
not 1 > 2    # Evaluates to True
1 == 1       # Evaluates to True
not 1 == 1   # Evaluates to False

# if Statement
 
test_value = 100
 
if test_value > 1:
  # Expression evaluates to True
  print("This code is executed!")
if test_value > 1000:
  # Expression evaluates to False
  print("This code is NOT executed!")
print("Program continues at this point.")


numbers = [1, 2, 3, 4, 10]
names = ['Jenny', 'Sam', 'Alexis']
mixed = ['Jenny', 1, 2]
list_of_lists = [['a', 1], ['b', 2]]


# A 2D list of names and hobbies
class_name_hobbies = [["Jenny", "Breakdancing"], ["Alexus", "Photography"], ["Grace", "Soccer"]]
 
# The sublist of Jenny is at index 0. The hobby is at index 1 of the sublist. 
class_name_hobbies[0][1] = "Meditation"
print(class_name_hobbies)
 
# Output
# [["Jenny", "Meditation"], ["Alexus", "Photography"], ["Grace", "Soccer"]]

numbers = [0, 254, 2, -1, 3]
 
for num in numbers:
  if (num < 0):
    print("Negative number detected!")
    break
  print(num)
  
# 0
# 254
# 2
# Negative number detected!


# List comprehension for the squares of all even numbers between 0 and 9
result = [x**2 for x in range(10) if x % 2 == 0]
 
print(result)
# [0, 4, 16, 36, 64]


big_number_list = [1, 2, -1, 4, -5, 5, 2, -9]
 
# Print only positive numbers:
for i in big_number_list:
  if i < 0:
    continue
  print(i)

 # Date and Time in Python

  import datetime
feb_16_2019 = datetime.date(year=2019, month=2, day=16)
feb_16_2019 = datetime.date(2019, 2, 16)
print(feb_16_2019) #2019-02-16
 
time_13_48min_5sec = datetime.time(hour=13, minute=48, second=5)
time_13_48min_5sec = datetime.time(13, 48, 5)
print(time_13_48min_5sec) #13:48:05
 
timestamp= datetime.datetime(year=2019, month=2, day=16, hour=13, minute=48, second=5)
timestamp = datetime.datetime(2019, 2, 16, 13, 48, 5)
print (timestamp) #2019-01-02 13:48:05


