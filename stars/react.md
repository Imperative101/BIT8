How to build webpage with react and node js.

Terminal commands:

ls 
npm init -y create app.js 
npm i express --save 
npm i dotenv --save 
npm i nodemon --save 
mkdir views routes controlles //

create folders npm i ejs --save views => hello.ejs //to write html l mkdir client ls npx create-react-app my-app

cd my-app npm start

client => src => create folder components

npm i concurrently --save



REACT NATIVE

1. Entry Point

import * as React from 'react';
const App = () => (
  // All functionality goes here
);
export default App;

2. Packages

import { Camera } from 'expo-camera';
import { MapView } from 'react-native-maps';

3. Core Components

<ScrollView>
  <Text>Some text</Text>
  <View>
    <Text>Some more text</Text>
    <Image
      source={{
        uri: 'https://picsum.photos/64/64',
      }}
    />
  </View>
  <TextInput
    defaultValue="You can type here"
  />
  <Button
    onPress={() => {
      alert('You tapped the button!');
    }}
    title="Press Me"
  />
</ScrollView>

4. Importing Core Components

import { View, Text } from 'react-native';

5.  Core Components Optional Functionality

function App() {
  return (
    {/* Text components can be with `numberofLines` prop */}
    <Text numberOfLines={1}>
      quam elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit
    </Text>
  );
}

6. Core Components Optional Functionality

function App() {
  return (
    {/* Text components can be with `numberofLines` prop */}
    <Text numberOfLines={1}>
      quam elementum pulvinar etiam non quam lacus suspendisse faucibus interdum posuere lorem ipsum dolor sit
    </Text>
  );
}

7. <View> Component

function App() {
  return (
    {/* Base layout structure */}
    <View style={{ flex: 1 }}>
      {/* Simple background color */}
      <View style={{ padding: 8, color: 'red' }}>
        <Text>Text with background color</Text>
      </View>
      {/* Space layout structure */}
      <View style={{ margin: 16 }} />
    </View>
  );
}

8.  <ScrollView> Component

function App() {
  return (
    <ScrollView>
      <Text style={{ margin: 16 }}>Scroll here to see more!</Text>
      <View style={{ marginTop: 1024 }} />
      <Text style={{ margin: 16 }}>Made you look!</Text>
    </ScrollView>
  );
}

9. text

<Text style={{ height: 40, borderWidth: 1 }}>
  Here's some text!
</Text>

10. Image

<Image source={require('./local/asset.jpg')} />
<Image source={{ uri: 'https://docs.expo.io/static/images/header/sdk.svg' }} />
<Image source={{ uri: 'data:image/png;base64,<base64-string>=' }} />


11. Text input component

const [input, setInput] = useState('');  
 
// example use of input
console.log(input);  
 
return (
  <TextInput   
    placeholder="What is your name?"   
    onChangeText={setInput}  
  />
);

12. Business-Logic Focused Components

function ReadMoreParagraph(props) {
  const [isOpen, setOpen] = useState(false);
 
  return (
    <View style={{ flex: 1, flexDirection: 'column' }}>
      <Text style={{ fontSize: 16 }} numberOfLines={!isOpen ? 2 : undefined}>
        {props.children}
      </Text>
      {!isOpen
        ? <Button title='Read More' onPress={() => setOpen(true)} />
        : <Button title='Read Less' onPress={() => setOpen(false)} />
    </View>
  )
}

13. StyleSheet

import { StyleSheet } from 'react-native';
 
const styles = StyleSheet.create({
  paragraph: {
    fontSize: 16,
  },
  label: {
    fontSize: 11,   
    textTransform: 'uppercase'
  }
});
 
<Text style={styles.paragraph}>My paragraph</Text>
<Text style={styles.label}>My label</Text>

14. Using stylesheet definitions

// Using inline styling
const AwesomeBox = () => (
  <View style={{ width: 100, height: 100, backgroundColor: 'red' }} />
);
 
// Using the StyleSheet API
const AwesomeBox = () => (
  <View style={styles.box} />
);
 
const styles = StyleSheet.create({
  box: {
    width: 100,
    height: 100,
    backgroundColor: 'red'
  },
});

15. Dynamic Styling


// Applies the `selected` style on top of the `paragraph` style if props.isActive is truthy
 
function Item(props) {
  return (
    <Text style={[styles.paragraph, props.isActive && styles.selected]} />
  );
}

16. 

Flex in React Native
Layouts are defined with Flex-like rules to account for a wide variety of screen sizes. The major difference between Flex on web and Flex in React Native is that a parent element with display: flex is not required.

<View style={{ flexDirection: 'row' }}>
  <View style={{ flex: 1 }} />
  <View style={{ flex: 1 }} />
  <View style={{ flex: 1 }} />
</View>
flexDirection
The flexDirection style property determines the direction and order in which child elements are laid out, which could be row, row-reverse, column, or column-reverse.

<View style={{ flexDirection: 'row' }}>
  <View style={{ flex: 1 }} />
  <View style={{ flex: 1 }} />
  <View style={{ flex: 1 }} />
</View>
justifyContent
The justifyContent style property determines how child elements are positioned in the parent container, which could be center, flex-start, flex-end, space-around, space-between, or space-evenly.

<View style={{ flexDirection: 'row' , justifyContent: 'flex-start' }}>
  <View style={{ flex: 1 }} />
  <View style={{ flex: 1 }} />
  <View style={{ flex: 1 }} />
</View>
Dimensions in React Native
All dimensions are unitless by default, and represent density-independent pixels.

<View style={{ width: 50, height: 50, backgroundColor: 'powderblue' }} />


17. 


Stack Navigation
In the stack navigation pattern, a user has to go from screen to screen to navigate through all screens, where each one is pushed on a stack. The only UI rendered is a header with the screen title and a back button.

Feed page with button to go to Catalog
Tab Navigation
In the tab navigation pattern, a user uses a tab bar to switch between screens.

Feed page with four tabs at the bottom
Drawer Navigation
In the drawer navigation pattern, a user uses a pane that can be opened by either swiping or tapping a button, which provides a menu where users can switch between screens.

Feed page with at pull-out menu from the right side of the screen
NavigationContainer Component
In the react-navigation library, components to be organized must be wrapped in a NavigationContainer component since it keeps track of the navigation structure and makes sure the navigators can operate.

import { NavigationContainer } from '@react-navigation/native';
 
const App = () => (
  <NavigationContainer>
    { /* Insert your navigators and content here */ }
  </NavigationContainer>
);
createStackNavigator Factory Method
In the react-navigation library, the stack navigator is created by the createStackNavigator factory method.

const Stack = createStackNavigator();
 
<Stack.Navigator>
  <Stack.Screen name="Feed" component={FeedScreen} />
  <Stack.Screen name="Catalog" component={CatalogScreen} />
</Stack.Navigator>
createBottomTabNavigator Factory Method
In the react-navigation library, the bottom tab navigator is created by the createBottomTabNavigator factory method.

const Tab = createBottomTabNavigator();
 
<Tab.Navigator>
  <Tab.Screen name="Feed" component={FeedScreen} />
  <Tab.Screen name="Catalog" component={CatalogScreen} />
</Tab.Navigator>
useNavigation Hook
In the react-navigation library, the useNavigation hook provides access to the navigation API and can be used to move users to different screens. It returns an object which is also passed as a navigation prop to screens and has multiple methods, including navigate (takes a screen name argument) and goBack.

// Using properties, only available in screen components
const FeedScreen = (props) => {
  const nav = props.navigation;
 
  return (
    <Button
      title="Go to home"
      onPress={() => nav.navigate('Home')}
    />
  );
};
 
// Using the hook, available in all components
const HomeButton = () => {
  const nav = useNavigation();
 
  return (
    <Button
      title="Go to home"
      onPress={() => nav.navigate('Home')}
    />
  );
};
Factory Methods
In the react-navigation library, all navigators are created by factory methods that use a naming pattern like create<type>Navigator(), which returns an object with Navigator and Screen properties. These properties are unique components that you must use when rendering the navigation structure.

const Stack = createStackNavigator();
const Tab = createBottomTabNavigator();
 
// You can replace Tab with any other factory method result.
<Tab.Navigator>
  <Tab.Screen name="Feed" component={FeedScreen} />
  <Tab.Screen name="Catalog" component={CatalogScreen} />
</Tab.Navigator>





Create a React App
// Create a new app
npx create-react-app my-app-name

// Run the created app
cd my-app-name
yarn start

// http://localhost:3000
First React functional Component
No need to import React from 'react' (since React 17)
Must have uppercase first letter
Must return JSX
(src/App.js)
// React component
function App(){
  return <h1>Hello World</h1>
} 

export default App;
How this component get render to the browser? The main project file is src/index.js and in that file there are instruction to render the component
ReactDOM.render(<App />, document.getElementById('root'))
The App component will then be rendered inside public/index.html 'root' div

Import Component
Component will be created in separate files. Each component need to be export and then import
function Greeting(){
    return <h1>Hello World</h2>
}
export default Greeting
This component can then be import
import Greeting from './Gretting'

function App(){
    return <Greeting />
}
or name export...
export function Greeting(){
    return <h1>Hello World</h2>
}
This component can then be import
import {Greeting} from './Gretting'
BEM Naming Convention
return (
<div className="app">
  <h1 className="app_title">Welcome to my application: {appTitle}</h1>
  <div className="product">
    <h1 className="product__name--large">Product name: {product.name}</h1>
<h1 className="product__name--small">Nick name: {product.nickName}</h1>
    <p className="product__description">Product description: {product.description}
  </div>
<div>
)
JSX Rules
Return a single element (only one parent element)
// not valid
return <h1>Hello world</h1><h2>Hi!</h2>

// valid with fragment. 
return (
    <>
        <h1>Hello World</h1>
        <h2>Hi!</h2>
    </>
)
// Noted the parenthesis for multi-line formatting
Use className instead of class
Also all attribute name need to be camelCase
// not valid
return (
    <div class="title">
        Hello World
    </div>
)

// valid
return (
    <div className="title">
    </div>
)

Close every element
return (
    <img src="http:example.com/image.jpg" />
    <input type="text" name="first_name" />
)
Nested Components
// Arrow function shorthand component
const Person = () => <h1>Mike Taylor</h1>

// Arrow function component
const Message = () => {
    return <h1>Hello</h1>
}

// Function component
function HelloWorld(){
  return (
      <>
          <Message />
          <Person />
      </>
  )
} 
Component CSS
(src/App.css)
h1 {
    color: red;
}

(src/App.js)
Import the CSS file
import './App.css'

function App(){
  return <h1>Hello World</h1>
} 
Inline CSS
function App(){
  return <h1 style={{ color: 'red' }}>Hello World</h1>
} 
Javascript in JSX
Enclose between {}
Must be an expression (return a value)
function App(){
    const name = 'Mike'
    return (
      <>
          <h1>Hello {name}</h1>
          <p>{name === 'Mike' ? '(admin)': '(user)'}</p>
      </>
    )
} 
Component Properties (Props)
function App()
    return <Person name='Mike' age={29} />
} 

const Person = (props) => {
    return <h1>Name: {props.name}, Age: {props.age}</h1>
}

// or props object deconstructing
const Person = ({name, age}) => {
    return <h1>Name: {name} Age: {age}</h1>
}
Children Props (slot)
function App()
    return (
        <Person name='Mike' age={29}>
            Hi, this is a welcome message
        </Person>
    )
} 

const Person = (props) => {
    return (
        <h1>Name: {props.name}, Age: {props.age}</h1>
        <p>{props.children}</p>
    )
}

// or props object deconstructing
const Person = ({name, age, children}) => {
    return (
        <h1>Name: {name} Age: {age}</h1>
        <p>{children}</p>
    )
}
Default Props value
const Person = ({name, age, children}) => {
    return (
        <h1>Name: {name} Age: {age}</h1>
        <p>{children}</p>
    )
}

Person.defaultProps = {
    name: 'No name',
    age: 0,
}
List
const people = [
  {id: 1, name: 'Mike', age: 29},
  {id: 2, name: 'Peter', age: 24},
  {id: 3, name: 'John', age: 39},
]
function App(){
    return (
        people.map(person => {
            return <Person name={person.name} age={person.age}/>
        })
    )
} 

const Person = (props) => {
  return (
      <h1>Name: {props.name}, Age: {props.age}</h1>
  )
}
List with key (for React internal reference)
function App(){
    return (
        people.map(person => {
            return <Person key={person.id} name={person.name} age={person.age}/>
        })
     )
} 
Props object destructuring
function App(){
  return people.map(person => <Person key={person.id} {...person} />)
}

const Person = ({name, age}) => {
  return (
      <h1>Name: {name}, Age: {age}</h1>
  )
} 
Click Event
const clickHandler = () => alert('Hello World')
function App(){
    return (
        <>
            <h1>Welcome to my app</h1>
            <button onClick={clickHandler}>Say Hi</button>
        </> 
    )
} 
or inline...
function App(){
    return (
        <>
            <h1>Welcome to my app</h1>
            <button onClick={ () => alert('Hello World') }>Say Hi</button>
        </>
     )
} 
To pass arguments we need to use arrow function
const clickHandler = (message) => alert(message)
function App(){
    return (
        <>
            <h1>Welcome to my app</h1>
            <button onClick={() => clickHandler('Hello World')}>Say Hi</button>
        </> 
    )
} 
e for event arguments
const clickHandler = (e) => console.log(e.target)
function App(){
    return (
        <>
            <h1>Welcome to my app</h1>
            <button onClick={clickHandler}>Say Hi</button>
        </> 
    )
} 
Pass event from child to parent
function Todo({item, onDelete}) {
    return (
      <div>
        {item}
        <button onClick={() => onDelete(item)} 
      </div>
    )
}

function Todos() {
  const handleDelete = (todo) => {
    const newTodos = todos.filter(item => item !== todo)
    setTodos(() => newTodos)
  }

  return (
    {todos.map(todo => (
       <Todo item={todo} onDelete={handleDelete}/>
    }
  )
}
useState Hook
The purpose of useState is to handle reactive data. any data that changes in the application is called state. And when the state changes, you want react to update the UI.

Hook always start with 'use' prefix
Must be invoke only in a React component/function
Must be call at top level of a functional component
Declaration cannot be call conditionally
useState return an array of 2: [state value, set state function]
import React, {useState} from 'react';

const DisplayTitle = () => {
  const [title, setTitle] = useState('This is the Title')
  const handleClick = () => setTitle('New Title')
  return <>
    <h2>{title}</h2>
    <button type="button" className="btn" onClick={handleClick}>
      Change Title
    </button>
  </>
};

export default DisplayTitle;
useState with object
const DisplayTitle = () => {
  const [person, setPerson] = useState({name: 'Mike', age: 29})
  const handleClick = () => setPerson({...person, age: 35})
  return <>
    <h2>{title}</h2>
    <button type="button" className="btn" onClick={handleClick}>
      Change Age
    </button>
  </>
};
setState functional form
function Counter() {
  const [count, setCount] = useState(0)
  // Use a function to set State
  const increase = () => setCount(() => count + 1)
  return (
    <>
      <h1>Counter</h1>
      <p>{count}</p>
      <button onClick={increase} className='btn'> + </button>
      <button onClick={() => setCount(() => count - 1)} className='btn'> - </button>
    </>
  )
}
useEffect
In React you may want to execute code after lifecycle events or side effects.

By default useEffect function is execute after every re-render. You can then execute code everytime component update.
import React, { useEffect } from 'react';

function IncreaseValue() {
    const [value, setValue] = useState(0)
    useEffect(() => {
        document.title = `New value: ${value}` 
    })
    return <button onClick={() => setValue(value + 1)}>Increase</button>
}
Conditional useEffect
Conditional need to be place inside useEffect function
useEffect(() => {
    if (value > 0) {
        document.title = `New value: ${value}` 
    }
})
useEffect Dependency List
What if you want to execute code only on first render or only when a particular state change? You can use the useEffect function and send an array of dependencies as parameter.

useEffect will run only if state is in the Dependency List.
If the list is empty [] the useEffect will only run on initial render.
useEffect(() => {
    document.title = `New value: ${value}` 
}, [])
// Noted the empty array. useEffect will then only run once on initial render

useEffect(() => {
    document.title = `New value: ${value}` 
}, [value])
// Will run each time 'value' state change.
useEffect cleanup function
What if you want to execute code each time the component unmount?

To execute code only when a component is unmount/destroy you need to add a 'return' statement to your useEffect function.
useEffect(() =>  { 
    const timer = window.setInterval(() => { 
        setCount(count => count + 1)
    }, 1000)
    return () => clearInterval(timer)
}, [])
The code 'clearInterval(timer)' will only be execute before component is remove from UI (unmount)

Conditional Rendering
function DisplayGreeting() {
    const [name, setName] = useState('Mike')
    if (name === 'Mike') {
        return <h1>Hello admin {name}</h1> 
    }
    return <h1>Hello user {name}</h1> 
}
Inline If-Else
  return (
    <div>
      The user is <b>{isLoggedIn ? 'currently' : 'not'}</b> logged in.
    </div>
  );
}
Inline Logical && Operator.
Display only if first expression is truthy
truthy = Not : 0, "", null, undefined, and NaN
  function DisplayUserInfo({active}) {
    return (
      <div>
        { active && <h1>User is active</h1>}
      </div>
    );
}
Multiple inline If
<span className={count === 0 && 'text-gray-500' || count > 0 && 'text-green-500' || count < 0 && 'text-red-500'}>{count}</span>
Form
const UserForm = () => {
  const [userName, setUserName] = useState('')
  const handleSubmit = (e) => {
    e.preventDefault()
    console.log(userName)
  }
return (
<>
    <form onSubmit={handleSubmit}>
      <input 
          value={userName} 
          onChange={(e) => setUserName(e.target.value)} 
          type="text" id="userName" 
          name="userName"
      />
       <button type="submit">Submit</button>
    </form>
</>
)
};

export default UserForm;
useRef
useRef is mostly use to target a DOM element. But it can also be use to keep/preserve a mutable value between each render. useRef does not trigger a re-render (like a useState).
const UseRefBasics = () => {
  const refContainer = useRef(null)
  const handleSubmit = (e) => {
    e.preventDefault()
    console.log(refContainer.current.value)
  }

  useEffect(() => {
    refContainer.current.focus()
  }, [])

  return (
    <div>
      <form className="form" onSubmit={handleSubmit}>
        <div>
          <input ref={refContainer} type="text" />
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>
  )
};
Conclusion
That's it for today. We still have a lot to do, so see you tomorrow... If you want to be sure to miss nothing click follow me!

Follow me!: Follow @EricTheCoder_

Discussion (27)
Subscribe
pic
Add to the discussion
 
xardonik profile image
XardoniK
•
Jun 11 • Edited on Jun 11

I found small mistake in "e for event arguments":

This won't work because you pass string as an argument
const clickHandler = (e) => console.log(e.target)
function App(){
    return (
        <>
            <h1>Welcome to my app</h1>
            <button onClick={() => clickHandler(*'Hello World'*)}>Say Hi</button>
        </> 
    )
} 
There are two ways how to do it:
1.
const clickHandler = (e) => console.log(e.target)
function App(){
    return (
        <>
            <h1>Welcome to my app</h1>
            <button onClick={(e) => clickHandler(e)}>Say Hi</button>
        </> 
    )
} 
2.
const clickHandler = (e) => console.log(e.target)
function App(){
    return (
        <>
            <h1>Welcome to my app</h1>
            <button onClick={clickHandler}>Say Hi</button>
        </> 
    )
} 