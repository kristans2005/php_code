<pre>
<?php

class NPC1{

    public $Name;
    public $Surname;
    public $Height;
    public $Mission;
    public $Die;
    public $Money;

    function __construct($initName, $initSurname, $initHeight, $initMision, $initDie, $initMoney){
        $this -> Name = $initName;
        $this -> Surname = $initSurname;
        $this -> Height = $initHeight;
        $this -> Mission = $initMision;
        $this -> Die = $initDie;
        $this -> Money = $initMoney;
    }

    function GetFullName(){
        return $this -> Name. " ". $this -> Surname;
    }

    function ChangeMission($NewMission){
        return $this -> Mission = $NewMission;
    }

    function ShouldDie($answer){
        if($answer == 'yes'){
            return $this -> Die = "NPC no longer exsist";
        }else if($answer == 'no'){
            return $this -> Die = "NPC still exsist";
        }
    }

    public function StolenMoney($money1){
        return $this -> Money - $money1;
    }
    
}

$NPCmoney = 20;
$NPC1 = new NPC1("James", "ButFace", "2m", "sit", "When leave room", $NPCmoney);



var_dump($NPC1);
echo "<br>";
echo "Full name: ". $NPC1 -> GetFullName();

echo "<br> <br>";
echo "Misson: ". $NPC1 -> Mission;
echo "<br>";
echo "Misson update: ". $NPC1 -> ChangeMission('walk');
echo "<br> <br>";
echo "has NPC left room: ". $NPC1 -> ShouldDie('yes');
echo "<br> <br>";
echo "npc has: ". $NPC1 -> Money. "$";
echo "<br>";
echo "Charecter steals idk 14$";
echo "<br>";
echo "npc has: ". $NPC1 -> StolenMoney(14);

?>