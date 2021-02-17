<?php


if (isset($_POST["action"]) and $_POST["action"]=="cmd_insert_monitor")
{
  
    $monitorok = new adatbazis();
    $monitorok->felvetel($_POST["input_name"], $_POST["input_col"],$_POST["input_res"],$_POST["input_port"], $_POST["input_price"]);
    
  
}


class adatbazis{
public $servername = "localhost";
public $username = "root";
public $password = "";
public $dbname = "berendibarnabas";	
public $conn = NULL;
public $sql = NULL;
public $result = NULL;
public $row = NULL;


public function __construct(){ $this->kapcsolodas(); }
public function __destruct(){ $this->kapcsolatbontas(); }


public function kapcsolodas(){
  // Create connection
  $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
  // Check connection
  if ($this->conn->connect_error) {
    die("Connection failed: " . $this->conn->connect_error);
  }

  $this->conn->query("SET NAMES UTF8;");		
}


public function kapcsolatbontas(){
  $this->conn->close();
}


public function felvetel($neve,$merete,$felbontas, $csatlakozo, $ar){
  //`id`, `m_neve`, `m_merete`, `m_felbontas`, `m_csatlakozo`, `m_ar`

    echo "<div class='row'>";


      
    $this->sql = "INSERT INTO monitorok
            (
              id,
              m_neve,
              m_merete,
              m_felbontas,
              m_csatlakozo,
              m_ar
            )
            VALUES
            (
              NULL,
              '$neve',
              '$merete', 
              '$felbontas',
              '$csatlakozo', 
              '$ar'
            );";

    if ($this->conn->query($this->sql))
    {
        echo '<div style="width: 100%" class="alert alert-success"> Sikeres felvétel </div>';
    } 
        else 
        {
            echo '<div style="width: 100%" class="alert alert-warning"> Sikertelen felvétel </div>';
        }		
          
      echo "</div>";

}


public function lista(){
  $this->sql = "SELECT `id`, `m_neve`, `m_merete`, `m_felbontas`, `m_csatlakozo`, `m_ar` FROM `monitorok`";
  $this->result = $this->conn->query($this->sql);
        
  if($this->result->num_rows>0)
  {
          echo "<div class='row'>";
      while($this->row = $this->result->fetch_assoc())
      {
          echo "<div  class='col-sm-6'  >";
          echo   "<h3>" . $this->row["m_neve"] . " </h3><p>" . $this->row["m_merete"] . "(" . $this->row["m_felbontas"] . ")<br>" . $this->row["m_csatlakozo"] . "<br>" . $this->row["m_ar"] . " </p>";
          echo "</div>";
      }
      echo "</div>";
  }
  else
  {
      echo "Nincs elérhető monitor";
  }
}


public function lista_torlesel(){
    $this->sql = "SELECT `id`, `m_neve`, `m_merete`, `m_felbontas`, `m_csatlakozo`, `m_ar` FROM `monitorok`";
    $this->result = $this->conn->query($this->sql);
          
    if($this->result->num_rows>0)
    {
            echo "<div class='row'>";
        while($this->row = $this->result->fetch_assoc())
        {
            echo "<div  class='col-sm-6'  >";
            echo   "<h3>" . $this->row["m_neve"] . " </h3><p>" . $this->row["m_merete"] . "(" . $this->row["m_felbontas"] . ")<br>" . $this->row["m_csatlakozo"] . "<br>" . $this->row["m_ar"] . " </p>";
            echo "<a style='width: 100%; margin-bottom 20px;' class='btn btn-primary' href='delete.php?torlendo=".$this->row["id"]."'>Törlés</a>";
            echo "</div>";
        }
        echo "</div>";
    }
    else
    {
        echo "Nincs elérhető monitor";
    }
  }


public function torles($id=0){
    
    echo "<div class='row'>";


    if($id==0)
    {
        echo '<div style="width: 100%" class="alert alert-warning"> Sikertelen Törlés </div>';
    }
        else
            {
            $this->sql = "DELETE FROM `monitorok` WHERE `monitorok`.`id` = $id";
            if ($this->conn->query($this->sql))
            {
                echo '<div style="width: 100%" class="alert alert-success"> Sikeres Törlés </div>';
            } 
                else 
                {
                    echo '<div style="width: 100%" class="alert alert-warning"> Sikertelen Törlés </div>';
                }		
            }
        echo "</div>";
    }

}






?>