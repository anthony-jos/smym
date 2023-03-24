<?php
include 'header.php';
include 'dbconnection.php';


$query = "SELECT * FROM booking order by seat_no asc ";
$result =mysqli_query($conn,$query);
 ?>
 

<style>
    *, *:before, *:after {
  box-sizing: border-box;
}

html {
  font-size: 16px;
}

.plane {
  margin: 20px auto;
  max-width: 300px;
}

.exit {
  position: relative;
  height: 50px;
}
.exit:before, .exit:after {
  content: "EXIT";
  font-size: 14px;
  line-height: 18px;
  padding: 0px 2px;
  font-family: "Arial Narrow", Arial, sans-serif;
  display: block;
  position: absolute;
  background: green;
  color: white;
  top: 50%;
  transform: translate(0, -50%);
}
.exit:before {
  left: 0;
}
.exit:after {
  right: 0;
}

.fuselage {
  border-right: 5px solid #d8d8d8;
  border-left: 5px solid #d8d8d8;
}

ol {
  list-style: none;
  padding: 0;
  margin: 0;
}

.seats {
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;
}

.seat {
  display: flex;
  flex: 0 0 14.28571428571429%;
  padding: 5px;
  position: relative;
}
.seat:nth-child(3) {
  margin-right: 14.28571428571429%;
}
.seat input[type=checkbox] {
  position: absolute;
  opacity: 0;
}
.seat input[type=checkbox]:checked + label {
  background: #bada55;
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat input[type=checkbox]:disabled + label {
  background: #dddddd;
  text-indent: -9999px;
  overflow: hidden;
}
.seat input[type=checkbox]:disabled + label:after {
  content: "X";
  text-indent: 0;
  position: absolute;
  top: 4px;
  left: 50%;
  transform: translate(-50%, 0%);
}
.seat input[type=checkbox]:disabled + label:hover {
  box-shadow: none;
  cursor: not-allowed;
}
.seat label {
  display: block;
  position: relative;
  width: 100%;
  text-align: center;
  font-size: 14px;
  font-weight: bold;
  line-height: 1.5rem;
  padding: 4px 0;
  background: #F42536;
  border-radius: 5px;
  animation-duration: 300ms;
  animation-fill-mode: both;
}
.seat label:before {
  content: "";
  position: absolute;
  width: 75%;
  height: 75%;
  top: 1px;
  left: 50%;
  transform: translate(-50%, 0%);
  background: rgba(255, 255, 255, 0.4);
  border-radius: 3px;
}
.seat label:hover {
  cursor: pointer;
  box-shadow: 0 0 0px 2px #5C6AFF;
}

@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1);
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1);
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1);
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1);
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1);
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1);
  }
}
.rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand;
}
/* ======================================== */
.color-class {
    background-color: blue;
    color: white;
}

.checked-0{color:red;}
.checked-1{color:green;}
    </style> 
</head>
<body>

  


  <form id="myform" action="bus.php" method="post">
    <div class="plane">
        <h1>Book Your Seats</h1>
        <h2>Bus No:1</h2>
      <div class="fuselage">
        
      </div>
      <ol class="cabin fuselage">
        <li class="row row--1">
          <ol class="seats" type="A">
            <li class="seat">
              
            </li>
            <li class="seat">
             
            </li>
            <li class="seat">
              
            </li>
            <li class="seat">
              <input type="checkbox" class="button1"  id="1D" name="seat" value="1" />
              <label for="1D" id="oneD">1</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1E" name="seat" value="2" />
              <label for="1E">2</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="1F" name="seat" value="3" />
              <label for="1F">3</label>
            </li>
          </ol>
        </li>
        <li class="row row--2">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="2A" name="seat" value="8" />
              <label for="2A">8</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2B" name="seat" value="7"/>
              <label for="2B">7</label>
            </li>
            <li class="seat">
<!--               <input type="checkbox" id="2C" />
              <label for="2C">2C</label> -->
            </li>
            <li class="seat">
              <input type="checkbox" id="2D" name="seat" value="6"/>
              <label for="2D">6</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2E" name="seat" value="5" />
              <label for="2E">5</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="2F" name="seat" value="4"/>
              <label for="2F">4</label>
            </li>
          </ol>
        </li>
        <li class="row row--3">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="3A" name="seat" value="9"/>
              <label for="3A">9</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3B" name="seat" value="10"/>
              <label for="3B">10</label>
            </li>
            <li class="seat">
<!--               <input type="checkbox" id="3C" />
              <label for="3C">3C</label> -->
            </li>
            <li class="seat">
              <input type="checkbox" id="3D" name="seat" value="11"/>
              <label for="3D">11</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3E" name="seat" value="12"/>
              <label for="3E">12</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="3F" name="seat" value="13"/>
              <label for="3F">13</label>
            </li>
          </ol>
        </li>
        <li class="row row--4">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="4A" name="seat" value="18"/>
              <label for="4A">18</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4B" name="seat" value="17"/>
              <label for="4B">17</label>
            </li>
            <li class="seat">
              <!-- <input type="checkbox" id="4C" />
              <label for="4C">4C</label> -->
            </li>
            <li class="seat">
              <input type="checkbox" id="4D" name="seat" value="16"/>
              <label for="4D">16</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4E" name="seat" value="15"/>
              <label for="4E">15</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="4F" name="seat" value="14"/>
              <label for="4F">14</label>
            </li>
          </ol>
        </li>
        <li class="row row--5">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="5A" name="seat" value="19"/>
              <label for="5A">19</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="5B" name="seat" value="20"/>
              <label for="5B">20</label>
            </li>
            <li class="seat">
              <!-- <input type="checkbox" id="5C" />
              <label for="5C">5C</label> -->
            </li>
            <li class="seat">
              <input type="checkbox" id="5D" name="seat" value="21"/>
              <label for="5D">21</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="5E" name="seat" value="22"/>
              <label for="5E">22</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="5F" name="seat" value="23"/>
              <label for="5F">23</label>
            </li>
          </ol>
        </li>
        <li class="row row--6">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="6A" name="seat" value="28"/>
              <label for="6A">28</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="6B" name="seat" value="27"/>
              <label for="6B">27</label>
            </li>
            <li class="seat">
              <!-- <input type="checkbox" id="6C" />
              <label for="6C">6C</label> -->
            </li>
            <li class="seat">
              <input type="checkbox" id="6D" name="seat" value="26"/>
              <label for="6D">26</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="6E" name="seat" value="25"/>
              <label for="6E">25</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="6F" name="seat" value="24"/>
              <label for="6F">24</label>
            </li>
          </ol>
        </li>
        <li class="row row--7">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="7A" name="seat" value="29"/>
              <label for="7A">29</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="7B" name="seat" value="30"/>
              <label for="7B">30</label>
            </li>
            <li class="seat">
              <!-- <input type="checkbox" id="7C" />
              <label for="7C">7C</label> -->
            </li>
            <li class="seat">
              <input type="checkbox" id="7D" name="seat" value="31"/>
              <label for="7D">31</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="7E" name="seat" value="32"/>
              <label for="7E">32</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="7F" name="seat" value="33"/>
              <label for="7F">33</label>
            </li>
          </ol>
        </li>
        <li class="row row--8">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="8A" name="seat" value="38"/>
              <label for="8A">38</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="8B" name="seat" value="37"/>
              <label for="8B">37</label>
            </li>
            <li class="seat">
              <!-- <input type="checkbox" id="8C" />
              <label for="8C">36</label> -->
            </li>
            <li class="seat">
              <input type="checkbox" id="8D" name="seat" value="36"/>
              <label for="8D">36</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="8E" name="seat" value="35"/>
              <label for="8E">35</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="8F" name="seat" value="34"/>
              <label for="8F">34</label>
            </li>
          </ol>
        </li>
        <li class="row row--9">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="9A" name="seat" value="39"/>
              <label for="9A">39</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="9B" name="seat" value="40"/>
              <label for="9B">40</label>
            </li>
            <li class="seat">
              <!-- <input type="checkbox" id="9C" />
              <label for="9C">41</label> -->
            </li>
            <li class="seat">
              <input type="checkbox" id="9D" name="seat" value="41"/>
              <label for="9D">41</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="9E" name="seat" value="42"/>
              <label for="9E">42</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="9F" name="seat" value="43"/>
              <label for="9F">43</label>
            </li>
          </ol>
        </li>
        <li class="row row--10">
          <ol class="seats" type="A">
            <li class="seat">
              <input type="checkbox" id="10A" name="seat" value="49"/>
              <label for="10A">49</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="10B" name="seat" value="48"/>
              <label for="10B">48</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="10C" name="seat" value="47"/>
              <label for="10C">47</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="10D" name="seat" value="46"/>
              <label for="10D">46</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="10E" name="seat" value="45"/>
              <label for="10E">45</label>
            </li>
            <li class="seat">
              <input type="checkbox" id="10F" name="seat" value="44"/>
              <label for="10F">44</label>
            </li>
          </ol>
        </li>
        
          <!-- <table border="2" >
            <tr> -->
              <!-- <td align="center" colspan="2"> -->
            <!-- </tr>
          </table> -->
        
      </ol>
     
      <div class="fuselage">
      
      
 
      </div>
      <label for="fname">Name: </label> &nbsp; 
      <input type="text area" name="fname" required><br>
      <label for="ph">Contact</label>
      <input type="text" name="ph"  pattern="[0-9]{10}" maxlength="10" >
      <input id="myButton" type="submit" name="submit1" value="Submit">
    </div>
    
  </form>
  <table>
  <tr>
    <th>Seat No:</th>
    <th>Name</th>
    <th>Contact</th>
  </tr>
  <tr>
    <?php
      while($row=mysqli_fetch_assoc($result))
      {

    ?>  
    <td><?php echo $row['seat_no'];?></td>
    <td><?php echo $row['fname'];?></td>
    <td><?php echo $row['ph'];?></td>
    
  </tr>
  <tr>

  </tr>
  <?php
      }
      ?>
</table>



  <script>
    const oneD = document.getElementById("oneD")
    const d1 = document.getElementById("1D")
    const button = document.getElementById("myButton")
    console.log(button)
    console.log(d1)

    button.addEventListener('click', function(){
      console.log(button)
      d1.style.backgroundColor = 'green'
    });

    const form = document.getElementById('myform');
    form.addEventListener('submit', function() {
      oneD.style.backgroundColor = 'red';
      oneD.style.innerHTML = 'Booked';
    });
    
  </script>
  </body>

  </html>