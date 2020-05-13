import React, { Component } from 'react';
import { Link } from 'react-router-dom';
import ReactDOM from 'react-dom';
import './introduction.css';

export default class Intro extends Component {
  render() {
    return (
    <div>
      <header>
      <ul class="topnav">
        <li><a class="active" href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="display.html">Browse Items</a></li>
        <li class="right"><a href="login.html">LOGIN</a></li>
      </ul>
    </header>
        <div class="img">
          <div id="bottom-area">
            <h1> FARMEX - BUY AND SELL USING CRYPTOCURRENCY</h1>
              <br/><h2>LOG IN TO BUY DIRECTLY FROM FARMERS USING CRYPTOCURRENCY! </h2><br/>
            <div class="img2">
              <img src="images/fruitbasket.jpg"/> 

            </div >
           <div class="button"> <a href="login.html">LOGIN</a> </div>
          </div>
        </div>
    </div>
    
    )
  }
}
ReactDOM.render(<Intro />, document.getElementById('root'));
