<!DOCTYPE html>
<html>

<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  transition-duration: 0.4s;
  cursor: pointer;
}   
.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}

.button2 {
  background-color: white; 
  color: black; 
  border: 2px solid #f44336;
}

.button2:hover {
  background-color: #f44336;
  color: white;
}
.button3 {
  background-color: white;
  color: black;
  border: 2px solid black;
}

.button3:hover {
  background-color: black;
  color: white;
}

.button4 {
  background-color: white;
  color: black;
  border: 2px solid grey;
}

.button4:hover {background-color: grey;}

.button5 {
  background-color: white; 
  color: black; 
  border: 2px solid #008CBA;
}

.button5:hover {
  background-color: #008CBA;
  color: white;
}
canvas{
    background-color: white;

}

.algo-title{
    font-size: 3vw;
    font-family: Arial, sans-serif;
    
}


</style>

<head>

    <title>Path Finding Algorithm</title>



</head>

<body>
    <center>
        <h1 class="algo-title">A Star Path Finding Algorithm</h1>
    </center>
    <center>
        <canvas id="canvas" height="600px" width="1000px"></canvas>
    </center>
    <center>
        <div id="container">
            <button class="button button1" id="start-button" type="button">Set Starting Point</button>
            <button class="button button2" id="end-button" type="button">Set End-Point</button>
            <button class="button button3" id="solid-button" type="button">Set Solid</button>
            <button class="button button4" id="blank-button" type="button">Erase</button>
            <button class="button button5" id="run-button" type="button">Run</button>
        </div>
    </center>

    <script src="path-finder.js"></script>
</body>

</html>