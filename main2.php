<html>
<style>
    
     * {
    box-sizing: border-box;
    }
    .row {
    display: flex;
    }
    .column {
    float: left;
    padding: 10px;
    height: auto; /* Should be removed. Only for demonstration */
    background-image: linear-gradient(to top left, turquoise, yellow);
    }

    .left {
    width: 70%;
    background-image: linear-gradient(to top left, turquoise, yellow);
    }

    .right {
    width: 30%;
    text-align: center;
    }
    .right_position {
      text-align: right;
    }

    /* Clear floats after the columns */
    .row:after {
    content: "";
    display: table;
    clear: both;
    }
    html {
    font-family: sans-serif;
    font-size: 18px;
         }
    form {
    width: 800px;
    margin: 0 0;
    }
    div {
    margin-bottom: 10px;
    }
    .fieldset {
    background: springgreen;
    border: 5px solid green;
    max-width: 960px;
    }
    legend {
    padding: 10px;
    background: green;
    color: cyan;
    }
    .spacebetween{
       padding-left: 30px;
       padding-top: 20px;
    }
    .spacebetween label {
        padding-right: 20px;
    }
</style>

<body>


<div class="row">
<div class="column" style="background-color:#aaa;">
<h2>Izvēlieties nepieciešamo informāciju ceļojuma provizorisko izmaksu aprēķinam:</h2> 
Galamērķis: <input type="text" maxlength="10" size="10" /> Izbraukšanas datums: <input type="number" size="7" /> Atgriešanās datums: <input type="number" size="7" /> <br><br>
Ceļotāju skaits (ne vairāk kā 8): <input type="number" maxlength="1" size="1" min="1" max="8"><input type="submit" value="Apstiprināt"><br><br>

<form>
  <div class="fieldset">
  <legend>Ceļojuma laikā ir plānots apmeklēt:</legend>
    <div class="spacebetween">
      <input type="checkbox" id="coding" name="interest" value="coding">
      <label for="coding">Muzeju</label>
    
      <input type="checkbox" id="music" name="interest" value="music">
      <label for="music">Mākslas galeriju</label>

      <input type="checkbox" id="art" name="interest" value="art">
      <label for="art">Rokmūzikas koncertu</label>
         
      <input type="checkbox" id="sports" name="interest" value="sports">
      <label for="sports">Popmūzikas koncertu</label>
       </div>
    <div class="spacebetween">
      <input type="checkbox" id="art" name="interest" value="art">
      <label for="art">Operu</label>

      <input type="checkbox" id="coding" name="interest" value="coding">
      <label for="coding">Braucienu ar kuģīti</label>
    
      <input type="checkbox" id="music" name="interest" value="music">
      <label for="music">Sporta pasākumu</label>
   
      <input type="checkbox" id="sports" name="interest" value="sports">
      <label for="sports">Zoo</label>
    </div>
    <div class="spacebetween">
      <input type="checkbox" id="other" name="interest" value="other">
      <label for="other">Ierakstiet cik plānojat tērēt papildus pasākumiem(slider?):</label>
      <input type="text" id="otherValue" name="other" style='width: 40px'> EUR;
    </div>
</div></form><br><br>
<input type="submit" value="Aprēķināt"/>
</form>
</div>




<div class="column right" style="background-color:#bbb;">
    <h2>Ievadiet ceļojumam ieplānoto summu:</h2>
    <input type="text" id="otherValue" name="other" style='width: 90px'> EUR;
    <p>Summas atlkums:</p>
    <input type="text" id="otherValue" name="other" style='width: 90px'> EUR;
    <div class="right_position">
    <p>Paredzamie izdevumi pa kategorijām:</p><br>
    Transports: <input type="text" maxlength="10" size="10" /><br>
    Naktsmītnes: <input type="text" maxlength="10" size="10" /><br>
    Ēdināšana: <input type="text" maxlength="10" size="10" /><br>
    Izklaide: <input type="text" maxlength="10" size="10" /><br>
    Neparedzēti izdevumi*: <input type="text" maxlength="10" size="10" /><br>
  </div>
    <p style="font-size:6px;">Neparedzēti izdevumi sasytāda 10% no ceļojumam atvlētās summas.</p>
    <h2>Paredzemās ceļojuma izmaksas satāda:</h2>
    <p style="font-size:45px; color:green;">1234EUR</p>
  </div>
</div>













</body>
</html>