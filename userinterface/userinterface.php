<html>
<style>
    @import "neat";
    @import "bourbon";

    * {
    box-sizing: border-box;
    }

    .flex-container {
    padding: 0;
    margin: 0;
    outline: 1px solid red;
    margin: 2em auto;
    
    display: -webkit-box;
    display: -moz-box;
    display: -ms-flexbox;
    display: -webkit-flex;
    display: flex;
    -webkit-flex-flow: row wrap;
    justify-content: space-around;
    }

    .flex-item {
    background: tomato;
    color: white;
    font-weight: bold;
    font-size: 3em;
    text-align: center;
    margin: 1em;
    flex: 1 1 auto;
    outline: 1px solid blue;

    // whatever the breakpoints are that scaffold has set.
    @media screen and (min-width: 320px) {
    width: 100vw;
    }
    
    @media screen and (min-width: 640px) {
    width: calc(50vw - 4em);
    }

    @media screen and (min-width: 960px) {
    width: calc(25vw - 4em);
        
        &:first-child {
        //margin-left: auto;
        }
        
        &:last-child {
        //margin-right: auto;
        }
    }
    
    @media screen and (min-width: 1280px) {
        
    }
    }
</style>

<body>

<div class="flex-container">
    <div class="flex-item flex-item-1">
            <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "finalproject";
                
                try{
                    $sqlconnection = new pdo("mysql:host=$servername; dbname=$dbname", $username, $password);
                    }   
                catch(PDOException $pe){
                    echo 'Cannot connect to database';
                    die;
                }
                if(isset($_POST['btnSubmit'])) {
                    echo 'Transporta izmaksas būs: '.$_POST['prices'] . 'EUR';
                }
                if(isset($_POST['btnSubmit1'])) {
                    echo 'Pasākumu apmeklēšana izmaksās: '.$_POST['prices1'] . 'EUR';
                }
                if(isset($_POST['btnSubmit2'])) {
                    echo 'Nakstmītnes izmaksas būs: '.$_POST['prices2'] . 'EUR';
                }
                ?> 
    </div>
    <div class="flex-item flex-item-2">
        </form>
            <form method="POST" action="">
                <label>Izvēlies pasākumu:</label>
                <select name="prices1">
                    <?php
                        $commandstring = "SELECT cost, service FROM minskevent order by id";
                        $cmd = $sqlconnection->prepare($commandstring);
                        $cmd->execute();
                        $result = $cmd->fetchAll(PDO::FETCH_ASSOC);
                        foreach($result as $row) {
                            echo '<option value="'.$row['cost'].'">'.$row['service'].'</option>';
                        }
                    ?>	
                </select>
        <input type="submit" name="btnSubmit1" value="Submit">
        </form>


    </div>
    <div class="flex-item flex-item-3">
        <form method="POST" action="">
            <label>Nakstsmītnes veids:</label>
                <select name="prices2">
                        <?php
                            $commandstring = "SELECT cost, service FROM minskaccomondation order by id";
                            $cmd = $sqlconnection->prepare($commandstring);
                            $cmd->execute();
                            $result = $cmd->fetchAll(PDO::FETCH_ASSOC);
                            foreach($result as $row) {
                                echo '<option value="'.$row['cost'].'">'.$row['service'].'</option>';
                            }
                        ?>	
                </select>
                    <input type="submit" name="btnSubmit2" value="Submit">
        </form>
    </div>
    <div class="flex-item flex-item-4">
            <form method="POST" action="">
                <label>Nokļūšanas veids:</label>
                <select name="prices">
                    <?php
                        $commandstring = "SELECT cost, service FROM minsktransport order by id";
                        $cmd = $sqlconnection->prepare($commandstring);
                        $cmd->execute();
                        $result = $cmd->fetchAll(PDO::FETCH_ASSOC);
                        foreach($result as $row) {
                            echo '<option value="'.$row['cost'].'">'.$row['service'].'</option>';
                        }
                    ?>	
                </select>
                <input type="submit" name="btnSubmit" value="Submit">
            </form>
    </div>
</div>

</body>
</html>