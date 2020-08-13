import React from 'react';
import './App.css';
import AddItems from "./addItems.jsx";

class App extends React.Component{


   render() {

       function aItems() {

       }
    return (

         <div className="App">
             <header className="App-header">
          <form id="form1" action="/addItems">
              <input type="submit"  name="submit" value="Add Items in Inventory"/>
          </form>

          <form id="form2" >
              <input type="submit" name="submit" value="Get Order Details"/>

          </form>

          <form id="form3" action="getExpired.js">
              <input type="submit" name="submit" value="Get Expired Products"/>
          </form>
                 </header>
         </div>
  );
   }
}

export default App;
