/*console.log()
The console.log() method is used to log or print messages to the console. 
It can also be used to print objects and other info. */
console.log('Hi there!');
// Prints: Hi there!

// Returns a number between 0 and 1
Math.random();

Math.random();
// ☝️ Math is the library

let amount = 6;
let price = 4.99;

let message = 'good nite';
console.log(message.length);
// Prints: 9
 
console.log('howdy'.length);
// Prints: 5

let lateToWork = true;

console.log(Math.random());
// Prints: 0 - 0.9

console.log(Math.floor(5.95)); 
// Prints: 5

let single = 'Wheres my bandit hat?';
let double = "Wheres my bandit hat?";

// Addition
5 + 5
// Subtraction
10 - 5
// Multiplication
5 * 10
// Division
10 / 5
// Modulo
10 % 5

// calculates # of weeks in a year, rounds down to nearest integer
const weeksInYear = Math.floor(365/7);
// calcuates the number of days left over after 365 is divded by 7
const daysLeftOver = 365 % 7 ;
console.log("A year has " + weeksInYear + " weeks and " + daysLeftOver + " days");

let number = 100;
// Both statements will add 10
number = number + 10;
number += 10;
console.log(number); 
// Prints: 120

let age = 7;
// String concatenation
'Tommy is ' + age + ' years old.';
// String interpolation
`Tommy is ${age} years old.`;

const currency = '$';
let userIncome = 85000; 
console.log(currency + userIncome + ' is more than the average income.');
// Prints: $85000 is more than the average income.

var a;
console.log(a); 
// Prints: undefined

// examples of variables
let name = "Tammy";
const found = false;
var age = 3;
console.log(name, found, age);
// Tammy, false, 3

let name = "Codecademy";
console.log(`Hello, ${name}`); 
// Prints: Hello, Codecademy
console.log(`Billy is ${6+8} years old.`); 
// Prints: Billy is 14 years old.

let count; 
console.log(count); // Prints: undefined
count = 10;
console.log(count); // Prints: 10

const numberOfColumns = 4;
numberOfColumns = 8;
// TypeError: Assignment to constant variable.

let service = 'credit card';
let month = 'May 30th'; 
let displayText = 'Your ' + service  + ' bill is due on ' +  month + '.';
console.log(displayText);
// Prints: Your credit card bill is due on May 30th.

true || false;        // true
10 > 5 || 10 > 20;    // true
false || false;       // false
10 > 100 || 10 > 20;  // false

let price = 10.5;
let day = "Monday";
day === "Monday" ? price -= 1.5 : price += 1.5;


const isTaskCompleted = false;
if (isTaskCompleted) {
  console.log('Task completed');
} else {
  console.log('Task incomplete');
}

true && true;      // true
1 > 2 && 2 > 1;    // false
true && false;     // false
4 === 4 && 3 > 1;  // true

const food = 'salad';
switch (food) {
  case 'oyster':
    console.log('The taste of the sea 🦪');
    break;
  case 'pizza':
    console.log('A delicious pie 🍕');
    break;
  default:
    console.log('Enjoy your meal');
}
 

const isMailSent = true;
if (isMailSent) {
  console.log('Mail sent to recipient');
}

1 > 3       // false
3 > 1       // true
250 >= 250  // true
1 === 1     // true
1 === 2     // false
1 === '1'   // false

const size = 10;
 
if (size > 100) {
  console.log('Big');
} else if (size > 20) {
  console.log('Medium');
} else if (size > 4) {
  console.log('Small');
} else {
  console.log('Tiny');
}
//


// Defining the function:
function sum(num1, num2) {
    return num1 + num2;
  }
   
// Calling the function:
  sum(3, 6); // 9


// Defining the function
function sum(num1, num2) {
    return num1 + num2;
  }
   
// Calling the function
  sum(2, 4); // 6




// Named function
function rocketToMars() {
    return 'BOOM!';
  }
   
  // Anonymous function
  const rocketToMars = function() {
    return 'BOOM!';
  }

// Arrow function with two arguments 
const sum = (firstParam, secondParam) => { 
    return firstParam + secondParam; 
  }; 
  console.log(sum(2,5)); // Prints: 7 
   
  // Arrow function with no arguments 
  const printHello = () => { 
    console.log('hello'); 
  }; 
  printHello(); // Prints: hello
   
  // Arrow functions with a single argument 
  const checkWeight = weight => { 
    console.log(`Baggage weight : ${weight} kilograms.`); 
  }; 
  checkWeight(25); // Prints: Baggage weight : 25 kilograms.
   
   
  // Concise arrow functions
  const multiply = (a, b) => a * b; 
  console.log(multiply(2, 30)); // Prints: 60 

/*

Arrays
Arrays are lists of ordered, stored data. They can hold items that are of any data type. Arrays are created by using square brackets, with individual elements separated by commas.

// An array containing numbers
const numberArray = [0, 1, 2, 3];
 
// An array containing different data types
const mixedArray = [1, 'chicken', false];
Index
Array elements are arranged by index values, starting at 0 as the first element index. Elements can be accessed by their index using the array name, and the index surrounded by square brackets.

// Accessing an array element
const myArray = [100, 200, 300];
 
console.log(myArray[0]); // 100
console.log(myArray[1]); // 200
console.log(myArray[2]); // 300
Property .length
The .length property of a JavaScript array indicates the number of elements the array contains.

const numbers = [1, 2, 3, 4];
 
numbers.length // 4
Method .push()
The .push() method of JavaScript arrays can be used to add one or more elements to the end of an array. .push() mutates the original array returns the new length of the array.

// Adding a single element:
const cart = ['apple', 'orange'];
cart.push('pear'); 
 
// Adding multiple elements:
const numbers = [1, 2];
numbers.push(3, 4, 5);
Method .pop()
The .pop() method removes the last element from an array and returns that element.

const ingredients = ['eggs', 'flour', 'chocolate'];
 
const poppedIngredient = ingredients.pop(); // 'chocolate'
console.log(ingredients); // ['eggs', 'flour']
Mutable
JavaScript arrays are mutable, meaning that the values they contain can be changed.

Even if they are declared using const, the contents can be manipulated by reassigning internal values or using methods like .push() and .pop().

const names = ['Alice', 'Bob'];
 
names.push('Carl');
// ['Alice', 'Bob', 'Carl']
*/

/*

LOOPS

Reverse Loop
A for loop can iterate “in reverse” by initializing the loop variable to the starting value, testing for when the variable hits the ending value, and decrementing (subtracting from) the loop variable at each iteration.

const items = ['apricot', 'banana', 'cherry'];
 
for (let i = items.length - 1; i >= 0; i -= 1) {
  console.log(`${i}. ${items[i]}`);
}
 
// Prints: 2. cherry
// Prints: 1. banana
// Prints: 0. apricot



Looping Through Arrays
An array’s length can be evaluated with the .length property. This is extremely helpful for looping through arrays, as the .length of the array can be used as the stopping condition in the loop.

for (let i = 0; i < array.length; i++){
  console.log(array[i]);
}
 
// Output: Every item in the array


Nested For Loop
A nested for loop is when a for loop runs inside another for loop.

The inner loop will run all its iterations for each iteration of the outer loop.

for (let outer = 0; outer < 2; outer += 1) {
  for (let inner = 0; inner < 3; inner += 1) {
    console.log(`${outer}-${inner}`);
  }
}
 

Output:
0-0
0-1
0-2
1-0
1-1
1-2


While Loop
The while loop creates a loop that is executed as long as a specified condition evaluates to true. The loop will continue to run until the condition evaluates to false. The condition is specified before the loop, and usually, some variable is incremented or altered in the while loop body to determine when the loop should stop.

while (condition) {
  // code block to be executed


}
 
let i = 0;
 
while (i < 5) {        
  console.log(i);
  i++;
}
Do…While Statement
A do...while statement creates a loop that executes a block of code once, checks if a condition is true, and then repeats the loop as long as the condition is true. They are used when you want the code to always execute at least once. The loop ends when the condition evaluates to false.

x = 0
i = 0
 
do {
  x = x + i;
  console.log(x)
  i++;
} while (i < 5);
 
// Prints: 0 1 3 6 10



Break Keyword
Within a loop, the break keyword may be used to exit the loop immediately, continuing execution after the loop body.

Here, the break keyword is used to exit the loop when i is greater than 5.

for (let i = 0; i < 99; i += 1) {
  if (i > 5) {
     break;
  }
  console.log(i)
}
 
// Output: 0 1 2 3 4 5


Loops
A loop is a programming tool that is used to repeat a set of instructions. Iterate is a generic term that means “to repeat” in the context of loops. A loop will continue to iterate until a specified condition, commonly known as a stopping condition, is met.

For Loop
A for loop declares looping instructions, with three important pieces of information separated by semicolons ;:

The initialization defines where to begin the loop by declaring (or referencing) the iterator variable
The stopping condition determines when to stop looping (when the expression evaluates to false)
The iteration statement updates the iterator each time the loop is completed
for (let i = 0; i < 4; i += 1) {
  console.log(i);
};
 
// Output: 0, 1, 2, 3
*/

/* ITERATORS

Functions Assigned to Variables
In JavaScript, functions are a data type just as strings, numbers, and arrays are data types. Therefore, functions can be assigned as values to variables, but are different from all other data types because they can be invoked.

let plusFive = (number) => {
  return number + 5;  
};
// f is assigned the value of plusFive
let f = plusFive;
 
plusFive(3); // 8
// Since f has a function value, it can be invoked. 
f(9); // 14
 


Callback Functions
In JavaScript, a callback function is a function that is passed into another function as an argument. This function can then be invoked during the execution of that higher order function (that it is an argument of).
Since, in JavaScript, functions are objects, functions can be passed as arguments.

const isEven = (n) => {
  return n % 2 == 0;
}
 
let printMsg = (evenFunc, num) => {
  const isNumEven = evenFunc(num);
  console.log(`The number ${num} is an even number: ${isNumEven}.`)
}
 
// Pass in isEven as the callback function
printMsg(isEven, 4); 
// Prints: The number 4 is an even number: True.




Higher-Order Functions
In Javascript, functions can be assigned to variables in the same way that strings or arrays can. They can be passed into other functions as parameters or returned from them as well.
A “higher-order function” is a function that accepts functions as parameters and/or returns a function.

Array Method .forEach()
The .forEach() method executes a callback function on each of the elements in an array in order.

Here, the callback function containing a console.log() method will be executed 5 times, once for each element.

const numbers = [28, 77, 45, 99, 27];
 
numbers.forEach(number => {  
  console.log(number);
}); 


Array Method 
The .map() method 
The original array does not get altered, and the returned array may contain different elements than the original array.
const finalParticipants = ['Taylor', 'Donald', 'Don', 'Natasha', 'Bobby'];
 
const announcements = finalParticipants.map(member => {
  return member + ' joined the contest.';
})


console.log(announcements);
Array Method .filter()
The .filter() method executes a callback function on each element in an array. The callback function for each of the elements must return either true or false. The returned array is a new array with any elements for which the callback function returns true.

Here, the array filteredArray will contain all the elements of randomNumbers but 4.


const randomNumbers = [4, 11, 42, 14, 39];
const filteredArray = randomNumbers.filter(n => {  
  return n > 5;
});


Array Method .reduce()
The .reduce() method iterates through an array and returns a single value.
It takes a callback function with two parameters (accumulator, currentValue) as arguments. On each iteration, accumulator is the value returned by the last iteration, and the currentValue is the current element. Optionally, a second argument can be passed which acts as the initial value of the accumulator.
Here, the .reduce() method will sum all the elements of the array.

const arrayOfNumbers = [1, 2, 3, 4];
 
const sum = arrayOfNumbers.reduce((accumulator, currentValue) => {  
  return accumulator + currentValue;
});
 
console.log(sum); // 10


*/
/*
Objects


const classOf2018 = {
  students: 38,
  year: 2018
}

// Example of invalid key names
const trainSchedule = {
  platform num: 10, // Invalid because of the space between words.
  40 - 10 + 2: 30, // Expressions cannot be keys.
  +compartment: 'C' // The use of a + sign is invalid unless it is enclosed in quotations.
}


const apple = { 
  color: 'Green',
  price: {
    bulk: '$3/kg',
    smallQty: '$4/kg'
  }
};
console.log(apple.color); // 'Green'
console.log(apple.price.bulk); // '$3/kg'



const person = {
  firstName: "Matilda",
  age: 27,
  hobby: "knitting",
  goal: "learning JavaScript"
};
 
delete person.hobby; // or delete person[hobby];
 
console.log(person);
/*





{
  firstName: "Matilda"
  age: 27
  goal: "learning JavaScript"
}


const student = {
  name: 'Sheldon',
  score: 100,
  grade: 'A',
}
 

console.log(student)
// { name: 'Sheldon', score: 100, grade: 'A' }
 
delete student.score
student.grade = 'F'
console.log(student)
// { name: 'Sheldon', grade: 'F' }
 
student = {}
// TypeError: Assignment to constant variable.
JavaScript Object Methods

const myObj = {
    data: 'abc',
    loggerA: () => { console.log(this.data); },
    loggerB() { console.log(this.data); },
};
 
myObj.loggerA();    // undefined
myObj.loggerB();    // 'abc'



const myCat = {
  _name: 'Snickers',
  get name(){
    return this._name
  },
  set name(newName){
    //Verify that newName is a non-empty string before setting as name property
    if (typeof newName === 'string' && newName.length > 0){
      this._name = newName; 
    } else {
      console.log("ERROR: name must be a non-empty string"); 
    }
  }
}



const myCat = {
  _name: 'Dottie',
  get name() {
    return this._name;  
  },
  set name(newName) {
    this._name = newName;  
  }
};
 
// Reference invokes the getter
console.log(myCat.name);
 
// Assignment invokes the setter
myCat.name = 'Yankee';


*/


/*

Class

// Parent class
class Media {
  constructor(info) {
    this.publishDate = info.publishDate;
    this.name = info.name;
  }
}
 
// Child class
class Song extends Media {
  constructor(songData) {
    super(songData);
    this.artist = songData.artist;
  }
}
 
const mySong = new Song({ 
  artist: 'Queen', 
  name: 'Bohemian Rhapsody', 
  publishDate: 1975
});





class Dog {
  constructor(name) {
    this._name = name;  
  }
  
  introduce() { 
    console.log('This is ' + this._name + ' !');  
  }
  
  // A static method
  static bark() {
    console.log('Woof!');  
  }
}
 


const myDog = new Dog('Buster');
myDog.introduce();
 
// Calling the static method
Dog.bark();

*/
/* 

Async Await Promises

The async...await syntax in ES6 offers a new way write more readable and scalable code to handle promises. 
It uses the same features that were already built into JavaScript.


function helloWorld() {
  return new Promise(resolve => {
    setTimeout(() => {
      resolve('Hello World!');
    }, 2000);
  });
}
 
async function msg() {
  const msg = await helloWorld();
  console.log('Message:', msg);
}
 
msg(); // Message: Hello World! <-- after 2 seconds


Asynchronous JavaScript function
An asynchronous JavaScript function can be created with the async keyword before the function name, or before () when using the async arrow function. 
An async function always returns a promise.


function helloWorld() {
  return new Promise(resolve => {
    setTimeout(() => {
      resolve('Hello World!');
    }, 2000);
  });
}
 
const msg = async function() { //Async Function Expression
  const msg = await helloWorld();
  console.log('Message:', msg);
}
 
const msg1 = async () => { //Async Arrow Function
  const msg = await helloWorld();
  console.log('Message:', msg);
}
 
msg(); // Message: Hello World! <-- after 2 seconds
msg1(); // Message: Hello World! <-- after 2 seconds


JavaScript aysnc await operator


function helloWorld() {
  return new Promise(resolve => {
    setTimeout(() => {
      resolve('Hello World!');
    }, 2000);
  });
}
 
async function msg() {
  const msg = await helloWorld();
  console.log('Message:', msg);
}
 
msg(); // Message: Hello World! <-- after 2 seconds

Resolving JavaScript Promises

let promise1 = Promise.resolve(5);
let promise2 = 44;
let promise3 = new Promise(function(resolve, reject) {
  setTimeout(resolve, 100, 'foo');
});
 
Promise.all([promise1, promise2, promise3]).then(function(values) {
  console.log(values);
});
// expected output: Array [5, 44, "foo"]

*/
/* 

REQUESTS

JSON: JavaScript Object Notation

const jsonObj = {
  "name": "Rick",
  "id": "11A",
  "level": 4  
};

Asynchronous calls with XMLHttpRequest

const xhr = new XMLHttpRequest();
xhr.open('GET', 'mysite.com/api/getjson');


The query string in a URL

const requestUrl = 'http://mysite.com/api/vendor?name=kavin&id=35412';



XMLHttpRequest GET Request Requirements

const req = new XMLHttpRequest();
req.responseType = 'json';
req.open('GET', '/myendpoint/getdata?id=65');
req.onload = () => {
  console.log(req.response);
};
 
req.send();


HTTP POST request with the XMLHttpRequest API
const data = {
  fish: 'Salmon',
  weight: '1.5 KG',
  units: 5
};
const xhr = new XMLHttpRequest();
xhr.open('POST', '/inventory/add');
xhr.responseType = 'json';
xhr.send(JSON.stringify(data));
 
xhr.onload = () => {
  console.log(xhr.response);
};


promise url parameter fetch api
fetch('url')
.then(
  response  => {
    console.log(response);
  },
 rejection => {
    console.error(rejection.message);
);


ok property fetch api
fetch(url, {
    method: 'POST',
    headers: {
      'Content-type': 'application/json',
      'apikey': apiKey
    },
    body: data
  }).then(response => {
    if (response.ok) {
      return response.json();
    }
    throw new Error('Request failed!');
  }, networkError => {
    console.log(networkError.message)
  })
}




HTTP GET request
HTTP GET requests are made with the intention of retrieving information or data from a source (server) over the web.

GET requests have no body, so the information that the source requires, in order to return the proper response, must be included in the request URL path or query string.

JSON: JavaScript Object Notation
JSON or JavaScript Object Notation is a data format suitable for transporting data to and from a server.

It is essentially a slightly stricter version of a Javascript object. A JSON object should be enclosed in curly braces and may contain one or more property-value pairs. JSON names require double quotes, while standard Javascript objects do not.

const jsonObj = {
  "name": "Rick",
  "id": "11A",
  "level": 4  
};
Asynchronous calls with XMLHttpRequest
AJAX enables HTTP requests to be made not only during the load time of a web page but also anytime after a page initially loads. This allows adding dynamic behavior to a webpage. This is essential for giving a good user experience without reloading the webpage for transferring data to and from the web server.
The XMLHttpRequest (XHR) web API provides the ability to make the actual asynchronous request and uses AJAX to handle the data from the request.
The given code block is a basic example of how an HTTP GET request is made to the specified URL.

const xhr = new XMLHttpRequest();
xhr.open('GET', 'mysite.com/api/getjson');

The query string in a URL
Query strings are used to send additional information to the server during an HTTP GET request.
The query string is separated from the original URL using the question mark character ?.
In a query string, there can be one or more key-value pairs joined by the equal character =.
For separating multiple key-value pairs, an ampersand character & is used.
Query strings should be url-encoded in case of the presence of URL unsafe characters.

const requestUrl = 'http://mysite.com/api/vendor?name=kavin&id=35412';
XMLHttpRequest GET Request Requirements
The request type, response type, request URL, and handler for the response data must be provided in order to make an HTTP GET request with the JavaScript XMLHttpRequest API.

The URL may contain additional data in the query string. For an HTTP GET request, the request type must be GET.

const req = new XMLHttpRequest();
req.responseType = 'json';
req.open('GET', '/myendpoint/getdata?id=65');
req.onload = () => {
  console.log(req.response);
};
 
req.send();


HTTP POST request
HTTP POST requests are made with the intention of sending new information to the source (server) that will receive it.

For a POST request, the new information is stored in the body of the request.

HTTP POST request with the XMLHttpRequest API
To make an HTTP POST request with the JavaScript XMLHttpRequest API, a request type, response type, request URL, request body, and handler for the response data must be provided. The request body is essential because the information sent via the POST method is not visible in the URL. The request type must be POST for this case. The response type can be a variety of types including array buffer, json, etc.

const data = {
  fish: 'Salmon',
  weight: '1.5 KG',
  units: 5
};
const xhr = new XMLHttpRequest();
xhr.open('POST', '/inventory/add');
xhr.responseType = 'json';
xhr.send(JSON.stringify(data));
 
xhr.onload = () => {
  console.log(xhr.response);
};
promise url parameter fetch api
A JavaScript Fetch API is used to access and manipulate requests and responses within the HTTP pipeline, fetching resources asynchronously across a network.

A basic fetch() request will accept a URL parameter, send a request and contain a success and failure promise handler function.

In the example, the block of code begins by calling the fetch() function. Then a then() method is chained to the end of the fetch(). It ends with the response callback to handle success and the rejection callback to handle failure.

fetch('url')
.then(
  response  => {
    console.log(response);
  },
 rejection => {
    console.error(rejection.message);
);
ok property fetch api






In a Fetch API function fetch() the ok property of a response checks to see if it evaluates to true or false. In the code example the .ok property will be true when the HTTP request is successful. The .ok property will be false when the HTTP request is unsuccessful.

    fetch(url, {
    method: 'POST',
    headers: {
      'Content-type': 'application/json',
      'apikey': apiKey
    },
    body: data
  }).then(response => {
    if (response.ok) {
      return response.json();
    }
    throw new Error('Request failed!');
  }, networkError => {
    console.log(networkError.message)
  })
}


Fetch api function

fetch('https://api-to-call.com/endpoint', {
  method: 'POST',
 body: JSON.stringify({id: "200"})
}).then(response => {
  if(response.ok){
      return response.json();  
  }
    throw new Error('Request failed!');
}, networkError => {
  console.log(networkError.message);
}).then(jsonResponse => {
  console.log(jsonResponse);
})


JSON Formatted response body

fetch('url-that-returns-JSON')
.then(response => response.json())
.then(jsonResponse => {
  console.log(jsonResponse);
});



async await syntax


const getSuggestions = async () => {
  const wordQuery = inputField.value;
  const endpoint = `${url}${queryParams}${wordQuery}`;
  try{
const response = __~await~__ __~fetch(endpoint, {cache: 'no-cache'});
    if(response.ok){
      const jsonResponse = await response.json()
    }
  }
  catch(error){
    console.log(error)
  }
}

*/


