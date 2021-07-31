The node Command
1. node app.js
2. //node is typed in the console to access REPL
$ node
 
//the > indicates that REPL is running
// anything written after > will be evaluated 
> console.log("HI")
 
// REPL has evaluated the line and has printed out HI
HI
 
3. 
//Two ways to access global
> console.log(global)
//or
> global
 
//Adding new property to global
> global.car = 'delorean'
4. 

// Command line values: node web.js testing several features
console.log(process.argv[2]); // 'features' will be printed
5.
//using process.memoryUsage() will return an object in a format like this:
 
{ rss: 26247168,
  heapTotal: 5767168,
  heapUsed: 3573032,
  external: 8772 }
6.
const baseball = require('./babeRuth.js')
7.

const util = require('util');
8.

> require('module').builtinModules
9.

console.log('Hello Node!'); // Logs 'Hello Node!' to the terminal
10.
console.log('User found!'); // Logs 'User found!' to the terminal
11.

const os = require('os');
 
const systemInfo = {  
  'Home Directory': os.homedir(),    
  'Operating System': os.type(),
  'Last Reboot': os.uptime()
};
12.
// typical Node.js error-first callback function
function getUser (id, callback) {
  return setTimeout(() => {
    if (id === 5) {
      callback(null, { nickname: 'Teddy' });
    } else {
      callback(new Error('User not found'));
    }
  }, 1000);
}
 
function callback (error, user) {
  if (error) {
    console.error(error.message);
    process.exit(1);
  }
  console.log(`User found! Their nickname is: ${user.nickname}`);
}
 
// change the getUser function into promise using `util.promisify()`
const getUserPromise = util.promisify(getUser);
 
// now you're able to use then/catch or async/await syntax
getUserPromise(id)
  .then((user) => {
      console.log(`User found! Their nickname is: ${user.nickname}`);
  })
  .catch((error) => {
      console.log('User not found', error);
  });
13.
// Require in the 'events' core module
let events = require('events');
 
// Create an instance of the EventEmitter class
let myEmitter = new events.EventEmitter();
let version = (data) => {
 console.log(`participant: ${data}.`);
};
 
// Assign the version function as the listener callback for 'new user' events
myEmitter.on('new user', version)
 
// Emit a 'new user' event
myEmitter.emit('new user', 'Lily Pad')
// 'Lily Pad'
14.
Input/Output
Input is data that is given to the computer, while output is any data or feedback that a computer provides. In Node, we can get input from a user using the stdin.on() method on the process object. We are able to use this because .on() is an instance of EventEmitter. To give an output, we can use the .stdout.write() method on the process object as well. This is because console.log() is a thin wrapper on .stdout.write().

// Recieves an input
process.stdin.on();
 
// Gives an output
process.stdout.write();
The fs Module
The filesystem controls how data on a computer is stored and retrieved. Node.js provides the fs core module, which allows interaction with the filesystem. Each method provided through the module has a synchronous and asynchronous version to allow for flexibility. A method available in the module is the .readFile() method that reads data from the provided file.

// First argument is the file path
// The second argument is the file’s character encoding
// The third argument is the invoked function
fs.readFile('./file.txt', 'utf-8', CallbackFunction);
Readable/Writable Streams
In most cases, data isn’t processed all at once but rather piece by piece. This is what we call streams. Streaming data is preferred as it doesn’t require tons of RAM and doesn’t need to have all the data on hand to begin processing it. To read files line-by-line, we can use the .createInterface() method from the readline core module. We can write to streams by using the .createWriteStream() method.

// Readable stream
readline.createInterface();
 
// Writtable Stream
fs.createWriteStream();
The Buffer Object
A Buffer is an object that represents a static amount of memory that can’t be resized. The Buffer class is within the global buffer module, meaning it can be used without the require() statement.

The .alloc() Method
The Buffer object has the .alloc() method that allows a new Buffer object to be created with the size specified as the first argument. Optionally, a second argument can be provided to specify the fill and a third argument to specify the encoding.

const bufferAlloc = Buffer.alloc(10, 'b'); // Creates a buffer of size 10 filled with 'b'
The .toString() Method
A Buffer object can be translated into a human-readable string by chaining the .toString() method to a Buffer object. Optionally, encoding can be specified as the first argument, byte offset to begin translating can be provided as the second argument, and the byte offset to end translating as the third argument.

const bufferAlloc = Buffer.alloc(5, 'b');
console.log(bufferAlloc.toString()); // Ouptut: bbbbb
The .from() Method
A new Buffer object can be created from a specified string, array, or another Buffer object using the .from() method. Encoding can be specified optionally as the second argument.

const bufferFrom = Buffer.from('Hello World'); // Creates buffer from 'Hello World' string
The .concat() Method
The .concat() method joins all Buffer objects in the specified array into one Buffer object. The length of the concatenated Buffer can be optionally provided as the second argument. This method is useful because a Buffer object can’t be resized.

const buffer1 = Buffer.from('Hello');
const buffer2 = Buffer.from('World');
const bufferArray = [buffer1, buffer2];
 
const combinedBuffer = Buffer.concat(bufferArray);
console.log(combinedBuffer.toString()); // Logs 'HelloWorld'
The timers Module
The global timers module contains scheduling functions such as setTimeout(), setInterval(), and setImmediate(). These functions are put into a queue processed at every iteration of the Node.js event loop.

The setImmediate() Function
The setImmediate() function executes the specified callback function after the current event loop has completed. The function accepts a callback function as its first argument and optionally accepts arguments for the callback function as the subsequent arguments.

setImmediate(() => {
  console.log('End of this event loop!');
})

