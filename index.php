<?php 

error_reporting(0);

$switchedEffects = array("trigger.png", "night.png", "mechanic.png");

if ($_GET["heroName"] == "") {
    $heroName = "Jméno hrdiny";
} else {
    $heroName = $_GET["heroName"];
}

if ($_GET["heroType"] == "") {
    $heroType = "Druh hrdiny";
} else {
    $heroType = $_GET["heroType"];
}

if ($_GET["heroHp"] == "") {
    $heroHp = "99";
} else {
    $heroHp = $_GET["heroHp"];
}

if ($_GET["heroTeamHp"] == "") {
    $heroTeamHp = "9";
} else {
    $heroTeamHp = $_GET["heroTeamHp"];
}

if ($_GET["energy1"] == "") {
    $energy1 = "4";
} else {
    $energy1 = $_GET["energy1"];
}

if ($_GET["energy2"] == "") {
    $energy2 = "4";
} else {
    $energy2 = $_GET["energy2"];
}

if ($_GET["energy3"] == "") {
    $energy3 = "4";
} else {
    $energy3 = $_GET["energy3"];
}

if ($_GET["energy4"] == "") {
    $energy4 = "4";
} else {
    $energy4 = $_GET["energy4"];
}

if ($_GET["effect1"] == "") {
    $effect1 = "attack.png";
} else {
    $effect1 = $_GET["effect1"];
}

if ($_GET["value1"] == "") {
    $value1 = "2";
} else {
    $value1 = $_GET["value1"];
}

if ($_GET["effect2"] == "") {
    $effect2 = "bite.png";
} else {
    $effect2 = $_GET["effect2"];
}

if ($_GET["value2"] == "") {
    $value2 = "-1";
} else {
    $value2 = $_GET["value2"];
}

if ($_GET["effect3"] == "") {
    $effect3 = "univerzal.png";
} else {
    $effect3 = $_GET["effect3"];
}

if ($_GET["value3"] == "") {
    $value3 = "1";
} else {
    $value3 = $_GET["value3"];
}

if ($_GET["effect4"] == "") {
    $effect4 = "trap.png";
} else {
    $effect4 = $_GET["effect4"];
}

if ($_GET["value4"] == "") {
    $value4 = "3";
} else {
    $value4 = $_GET["value4"];
}

if ($_GET["effect5"] == "") {
    $effect5 = "unibonus.png";
} else {
    $effect5 = $_GET["effect5"];
}

if ($_GET["value5"] == "") {
    $value5 = "2";
} else {
    $value5 = $_GET["value5"];
}

if ($_GET["effect6"] == "") {
    $effect6 = "curse.png";
} else {
    $effect6 = $_GET["effect6"];
}

if ($_GET["value6"] == "") {
    $value6 = "-2";
} else {
    $value6 = $_GET["value6"];
}

if ($_GET["effect7"] == "") {
    $effect7 = "energy.png";
} else {
    $effect7 = $_GET["effect7"];
}

if ($_GET["value7"] == "") {
    $value7 = "3";
} else {
    $value7 = $_GET["value7"];
}

if ($_GET["effect8"] == "") {
    $effect8 = "attack.png";
} else {
    $effect8 = $_GET["effect8"];
}

if ($_GET["value8"] == "") {
    $value8 = "3";
} else {
    $value8 = $_GET["value8"];
}

if ($_GET["image"] == "") {
    $image = "golibuk.png";
} else {
    $image = $_GET["image"];
}

if ($_GET["sword"] == "") {
    $sword = "false";
} else {
    $sword = $_GET["sword"];
}

if ($_GET["axe"] == "") {
    $axe = "false";
} else {
    $axe = $_GET["axe"];
}

if ($_GET["bow"] == "") {
    $bow = "false";
} else {
    $bow = $_GET["bow"];
}

if ($_GET["staff"] == "") {
    $staff = "false";
} else {
    $staff = $_GET["staff"];
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SW card maker</title>

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    
}

body {
    display: inline-block;
}

@font-face {
  font-family: ScratchChizz;
  src: url(ScratchChizz.otf);
}

.container {
    position: relative;
    width: 100%;
    margin: 2%;
}

.frame {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 20;
}

.main {
    
    height: 75%;
    background-color: #f2f2f2;
   
}

.header {
    width: 100%;
    height: 72px;
    text-align: center;
    vertical-align: middle;
}

.heroName {
    top: 12px;
    left: 90px;
    right: 90px;
    font-size: 20px;
    font-family: ScratchChizz;
    z-index: 30;
    position: absolute;
    text-align: center;
    vertical-align: middle;
}

.heroType {
    top: 30px;
    left: 90px;
    right: 90px;
    font-size: 18px;
    font-family: ScratchChizz;
    z-index: 30;
    position: absolute;
    text-align: center;
    vertical-align: middle;
}

.heroHp {
    top: 11px;
    left: 42px;
    right: 258px;
    font-size: 22px;
    font-family: ScratchChizz;
    z-index: 30;
    position: absolute;
    text-align: center;
    vertical-align: middle;
}

.heroTeamHp {
    top: 41px;
    left: 24px;
    right: 285px;
    font-size: 22px;
    font-family: ScratchChizz;
    z-index: 30;
    position: absolute;
    text-align: center;
    vertical-align: middle;
}

.heropic {
    z-index: 10;
}

nav {
    width: 100%;
    background-color: #f2f2f2;
}

.energyInput {
    width: 40px;
}

#energie1 {
    top: 317px;
    left: 41px;
    font-size: 17px;
    font-family: ScratchChizz;
    z-index: 30;
    position: absolute;
    text-align: center;
    vertical-align: middle;
}

#energie2 {
    top: 313px;
    left: 112px;
    font-size: 17px;
    font-family: ScratchChizz;
    z-index: 30;
    position: absolute;
    text-align: center;
    vertical-align: middle;
}

#energie3 {
    top: 319px;
    left: 182px;
    font-size: 17px;
    font-family: ScratchChizz;
    z-index: 30;
    position: absolute;
    text-align: center;
    vertical-align: middle;
}

#energie4 {
    top: 313px;
    left: 252px;
    font-size: 17px;
    font-family: ScratchChizz;
    z-index: 30;
    position: absolute;
    text-align: center;
    vertical-align: middle;
}

#effect1 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 348px;
    left: 55px;
}

#value1 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 343px;
    left: 33px;
    text-align: center;
    vertical-align: middle;
}

#effect2 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 379px;
    left: 55px;
}

#value2 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 374px;
    left: 33px;
    text-align: center;
    vertical-align: middle;
}

#effect3 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 345px;
    left: 125px;
}

#value3 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 340px;
    left: 105px;
    text-align: center;
    vertical-align: middle;
}

#effect4 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 376px;
    left: 125px;
}

#value4 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 371px;
    left: 105px;
    text-align: center;
    vertical-align: middle;
}

#effect5 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 348px;
    left: 198px;
}

#value5 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 344px;
    left: 175px;
    text-align: center;
    vertical-align: middle;
}

#effect6 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 380px;
    left: 198px;
}

#value6 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 377px;
    left: 175px;
    text-align: center;
    vertical-align: middle;
}

#effect7 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 345px;
    left: 266px;
}

#value7 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 340px;
    left: 244px;
    text-align: center;
    vertical-align: middle;
}

#effect8 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 376px;
    left: 266px;
}

#value8 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 371px;
    left: 244px;
    text-align: center;
    vertical-align: middle;
}

#weaponBackground {
    position: absolute;
    z-index: 30;
    top: 74px;
    left: 260px;
    width: 35px;
}

#sword {
    position: absolute;
    z-index: 40;
    top: 110px;
    left: 266px;
    width: 25px;
}

#axe {
    position: absolute;
    z-index: 40;
    top: 146px;
    left: 266px;
    width: 25px;
}

#bow {
    position: absolute;
    z-index: 40;
    top: 181px;
    left: 266px;
    width: 25px;
}

#staff {
    position: absolute;
    z-index: 40;
    top: 216px;
    left: 266px;
    width: 25px;
}

#switchedeffect1 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 348px;
    left: 33px;
}

#switchedvalue1 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 343px;
    left: 60px;
    text-align: center;
    vertical-align: middle;
}

#switchedeffect2 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 379px;
    left: 33px;
}

#switchedvalue2 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 374px;
    left: 60px;
    text-align: center;
    vertical-align: middle;
}

#switchedeffect3 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 345px;
    left: 105px;
}

#switchedvalue3 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 340px;
    left: 132px;
    text-align: center;
    vertical-align: middle;
}

#switchedeffect4 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 376px;
    left: 105px;
}

#switchedvalue4 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 371px;
    left: 130px;
    text-align: center;
    vertical-align: middle;
}

#switchedeffect5 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 348px;
    left: 172px;
}

#switchedvalue5 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 344px;
    left: 200px;
    text-align: center;
    vertical-align: middle;
}

#switchedeffect6 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 380px;
    left: 172px;
}

#switchedvalue6 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 377px;
    left: 200px;
    text-align: center;
    vertical-align: middle;
}

#switchedeffect7 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 345px;
    left: 244px;
}

#switchedvalue7 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 340px;
    left: 270px;
    text-align: center;
    vertical-align: middle;
}

#switchedeffect8 {
    width: 22px;
    position: absolute;
    z-index: 30;
    top: 376px;
    left: 244px;
}

#switchedvalue8 {
    font-size: 22px;
    font-family: ScratchChizz;
    position: absolute;
    z-index: 30;
    top: 371px;
    left: 270px;
    text-align: center;
    vertical-align: middle;
}


</style> 

</head>
<body>
    
<div class="main">

<div class="container">

    
    <?php 
    
    echo <<<END
        <img src="img/$image" width="310px" class="heropic">
    END;

    ?>
    <!-- <img src="img/golibuk.png" width="310px" class="heropic"> -->

    
    <img id="weaponBackground" src="img/weapon_background.png">

    <?php 
    
    if($sword == "true") {
        echo <<<END
            <img id="sword" src="img/sword_on.png">
        END;
    } else {
        echo <<<END
            <img id="sword" src="img/sword_off.png">
        END;
    }

    if($axe == "true") {
        echo <<<END
            <img id="axe" src="img/axe_on.png">
        END;
    } else {
        echo <<<END
            <img id="axe" src="img/axe_off.png">
        END;
    }

    if($bow == "true") {
        echo <<<END
            <img id="bow" src="img/bow_on.png">
        END;
    } else {
        echo <<<END
            <img id="bow" src="img/bow_off.png">
        END;
    }

    if($staff == "true") {
        echo <<<END
            <img id="staff" src="img/staff_on.png">
        END;
    } else {
        echo <<<END
            <img id="staff" src="img/staff_off.png">
        END;
    }

    ?>
    

    <div class="frame">
        <img src="img/ram4.png" width="320px">
    </div>

    <div class="header">
       
    <div class="heroName">
        <?php echo $heroName; ?>
    </div>

    <div class="heroType">
        <?php echo $heroType; ?>
    </div>

    <div class="heroHp">
        <?php echo $heroHp; ?>
    </div>

    <div class="heroTeamHp">
        <?php echo $heroTeamHp; ?>
    </div>

    <div id="energie1">
        <?php echo "+".$energy1; ?>
    </div>

    <div id="energie2">
        <?php echo "+".$energy2; ?>
    </div>

    <div id="energie3">
        <?php echo "+".$energy3; ?>
    </div>

    <div id="energie4">
        <?php echo "+".$energy4; ?>
    </div>

    
<?php 

    if(in_array($effect1, $switchedEffects)) {

    echo <<<END

    <img src="img/$effect1" id="switchedeffect1">;

    <div id="switchedvalue1">$value1</div>

    END;
} else {

    echo <<<END
        <img src="img/$effect1" id="effect1">;
    END;

    if($value1 < 0) {
        echo <<<END
        <div id="value1">$value1</div>
        END;
    } else {
        echo <<<END
        <div id="value1">+$value1</div>
        END;
    } }

    if(in_array($effect2, $switchedEffects)) {

        echo <<<END
    
        <img src="img/$effect2" id="switchedeffect2">;
    
        <div id="switchedvalue2">$value2</div>
    
        END;
    } else {

    echo <<<END
        <img src="img/$effect2" id="effect2">;
    END;

    if($value2 < 0) {
        echo <<<END
        <div id="value2">$value2</div>
        END;
    } else {
        echo <<<END
        <div id="value2">+$value2</div>
        END;
    } }



    if(in_array($effect3, $switchedEffects)) {

        echo <<<END
    
        <img src="img/$effect3" id="switchedeffect3">;
    
        <div id="switchedvalue3">$value3</div>
    
        END;
    } else {

    echo <<<END
        <img src="img/$effect3" id="effect3">;
    END;

    if($value3 < 0) {
        echo <<<END
        <div id="value3">$value3</div>
        END;
    } else {
        echo <<<END
        <div id="value3">+$value3</div>
        END;
    } }

    if(in_array($effect4, $switchedEffects)) {

        echo <<<END
    
        <img src="img/$effect4" id="switchedeffect4">;
    
        <div id="switchedvalue4">$value4</div>
    
        END;
    } else {

    echo <<<END
        <img src="img/$effect4" id="effect4">;
    END;

    if($value4 < 0) {
        echo <<<END
            <div id="value4">$value4</div>
        END;
    } else {
        echo <<<END
            <div id="value4">+$value4</div>
        END;
    } }

    if(in_array($effect5, $switchedEffects)) {

        echo <<<END
    
        <img src="img/$effect5" id="switchedeffect5">;
    
        <div id="switchedvalue5">$value5</div>
    
        END;
    } else {

    echo <<<END
        <img src="img/$effect5" id="effect5">;
    END;

    if($value5 < 0) {
        echo <<<END
            <div id="value5">$value5</div>
        END;
    } else {
        echo <<<END
            <div id="value5">+$value5</div>
        END;
    } }

    if(in_array($effect6, $switchedEffects)) {

        echo <<<END
    
        <img src="img/$effect6" id="switchedeffect6">;
    
        <div id="switchedvalue6">$value6</div>
    
        END;
    } else {

    echo <<<END
        <img src="img/$effect6" id="effect6">;
    END;

    if($value6 < 0) {
        echo <<<END
            <div id="value6">$value6</div>
        END;
    } else {
        echo <<<END
            <div id="value6">+$value6</div>
        END;
    } }

    if(in_array($effect7, $switchedEffects)) {

        echo <<<END
    
        <img src="img/$effect7" id="switchedeffect7">;
    
        <div id="switchedvalue7">$value7</div>
    
        END;
    } else {

    echo <<<END
        <img src="img/$effect7" id="effect7">;
    END;

    if($value7 < 0) {
        echo <<<END
            <div id="value7">$value7</div>
        END;
    } else {
        echo <<<END
            <div id="value7">+$value7</div>
        END;
    } }

    if(in_array($effect8, $switchedEffects)) {

        echo <<<END
    
        <img src="img/$effect8" id="switchedeffect8">;
    
        <div id="switchedvalue8">$value8</div>
    
        END;
    } else {

    echo <<<END
        <img src="img/$effect8" id="effect8">;
    END;

    if($value8 < 0) {
        echo <<<END
            <div id="value8">$value8</div>
        END;
    } else {
        echo <<<END
            <div id="value8">+$value8</div>
        END;
    } }
?>



</div>
   

    

</div>

</div>

<br> <br> <br> <br>

<nav>

<?php 

if ($effect1 == "attack.png") {$attackSelected = " selected";} else {$attackSelected = "";}
if ($effect1 == "bite.png") {$biteSelected = " selected";} else {$biteSelected = "";}
if ($effect1 == "block.png") {$blockSelected = " selected";} else {$blockSelected = "";}
if ($effect1 == "canba.png") {$canbaSelected = " selected";} else {$canbaSelected = "";}
if ($effect1 == "combo.png") {$comboSelected = " selected";} else {$comboSelected = "";}
if ($effect1 == "cumulative.png") {$cumulativeSelected = " selected";} else {$cumulativeSelected = "";}
if ($effect1 == "curse.png") {$curseSelected = " selected";} else {$curseSelected = "";}
if ($effect1 == "energy.png") {$energySelected = " selected";} else {$energySelected = "";}
if ($effect1 == "heal.png") {$healSelected = " selected";} else {$healSelected = "";}
if ($effect1 == "mechanic.png") {$mechanicSelected = " selected";} else {$mechanicSelected = "";}
if ($effect1 == "night.png") {$nightSelected = " selected";} else {$nightSelected = "";}
if ($effect1 == "perma.png") {$permaSelected = " selected";} else {$permaSelected = "";}
if ($effect1 == "shrapnel.png") {$shrapnelSelected = " selected";} else {$shrapnelSelected = "";}
if ($effect1 == "trap.png") {$trapSelected = " selected";} else {$trapSelected = "";}
if ($effect1 == "trigger.png") {$triggerSelected = " selected";} else {$triggerSelected = "";}
if ($effect1 == "unibonus.png") {$unibonusSelected = " selected";} else {$unibonusSelected = "";}
if ($effect1 == "univerzal.png") {$univerzalSelected = " selected";} else {$univerzalSelected = "";}
if ($effect1 == "weapon.png") {$weaponSelected = " selected";} else {$weaponSelected = "";}

if ($effect2 == "attack.png") {$attackSelected2 = " selected";} else {$attackSelected2 = "";}
if ($effect2 == "bite.png") {$biteSelected2 = " selected";} else {$biteSelected2 = "";}
if ($effect2 == "block.png") {$blockSelected2 = " selected";} else {$blockSelected2 = "";}
if ($effect2 == "canba.png") {$canbaSelected2 = " selected";} else {$canbaSelected2 = "";}
if ($effect2 == "combo.png") {$comboSelected2 = " selected";} else {$comboSelected2 = "";}
if ($effect2 == "cumulative.png") {$cumulativeSelected2 = " selected";} else {$cumulativeSelected2 = "";}
if ($effect2 == "curse.png") {$curseSelected2 = " selected";} else {$curseSelected2 = "";}
if ($effect2 == "energy.png") {$energySelected2 = " selected";} else {$energySelected2 = "";}
if ($effect2 == "heal.png") {$healSelected2 = " selected";} else {$healSelected2 = "";}
if ($effect2 == "mechanic.png") {$mechanicSelected2 = " selected";} else {$mechanicSelected2 = "";}
if ($effect2 == "night.png") {$nightSelected2 = " selected";} else {$nightSelected2 = "";}
if ($effect2 == "perma.png") {$permaSelected2 = " selected";} else {$permaSelected2 = "";}
if ($effect2 == "shrapnel.png") {$shrapnelSelected2 = " selected";} else {$shrapnelSelected2 = "";}
if ($effect2 == "trap.png") {$trapSelected2 = " selected";} else {$trapSelected2 = "";}
if ($effect2 == "trigger.png") {$triggerSelected2 = " selected";} else {$triggerSelected2 = "";}
if ($effect2 == "unibonus.png") {$unibonusSelected2 = " selected";} else {$unibonusSelected2 = "";}
if ($effect2 == "univerzal.png") {$univerzalSelected2 = " selected";} else {$univerzalSelected2 = "";}
if ($effect2 == "weapon.png") {$weaponSelected2 = " selected";} else {$weaponSelected2 = "";}

if ($effect3 == "attack.png") {$attackSelected3 = " selected";} else {$attackSelected3 = "";}
if ($effect3 == "bite.png") {$biteSelected3 = " selected";} else {$biteSelected3 = "";}
if ($effect3 == "block.png") {$blockSelected3 = " selected";} else {$blockSelected3 = "";}
if ($effect3 == "canba.png") {$canbaSelected3 = " selected";} else {$canbaSelected3 = "";}
if ($effect3 == "combo.png") {$comboSelected3 = " selected";} else {$comboSelected3 = "";}
if ($effect3 == "cumulative.png") {$cumulativeSelected3 = " selected";} else {$cumulativeSelected3 = "";}
if ($effect3 == "curse.png") {$curseSelected3 = " selected";} else {$curseSelected3 = "";}
if ($effect3 == "energy.png") {$energySelected3 = " selected";} else {$energySelected3 = "";}
if ($effect3 == "heal.png") {$healSelected3 = " selected";} else {$healSelected3 = "";}
if ($effect3 == "mechanic.png") {$mechanicSelected3 = " selected";} else {$mechanicSelected3 = "";}
if ($effect3 == "night.png") {$nightSelected3 = " selected";} else {$nightSelected3 = "";}
if ($effect3 == "perma.png") {$permaSelected3 = " selected";} else {$permaSelected3 = "";}
if ($effect3 == "shrapnel.png") {$shrapnelSelected3 = " selected";} else {$shrapnelSelected3 = "";}
if ($effect3 == "trap.png") {$trapSelected3 = " selected";} else {$trapSelected3 = "";}
if ($effect3 == "trigger.png") {$triggerSelected3 = " selected";} else {$triggerSelected3 = "";}
if ($effect3 == "unibonus.png") {$unibonusSelected3 = " selected";} else {$unibonusSelected3 = "";}
if ($effect3 == "univerzal.png") {$univerzalSelected3 = " selected";} else {$univerzalSelected3 = "";}
if ($effect3 == "weapon.png") {$weaponSelected3 = " selected";} else {$weaponSelected3 = "";}

if ($effect4 == "attack.png") {$attackSelected4 = " selected";} else {$attackSelected4 = "";}
if ($effect4 == "bite.png") {$biteSelected4 = " selected";} else {$biteSelected4 = "";}
if ($effect4 == "block.png") {$blockSelected4 = " selected";} else {$blockSelected4 = "";}
if ($effect4 == "canba.png") {$canbaSelected4 = " selected";} else {$canbaSelected4 = "";}
if ($effect4 == "combo.png") {$comboSelected4 = " selected";} else {$comboSelected4 = "";}
if ($effect4 == "cumulative.png") {$cumulativeSelected4 = " selected";} else {$cumulativeSelected4 = "";}
if ($effect4 == "curse.png") {$curseSelected4 = " selected";} else {$curseSelected4 = "";}
if ($effect4 == "energy.png") {$energySelected4 = " selected";} else {$energySelected4 = "";}
if ($effect4 == "heal.png") {$healSelected4 = " selected";} else {$healSelected4 = "";}
if ($effect4 == "mechanic.png") {$mechanicSelected4 = " selected";} else {$mechanicSelected4 = "";}
if ($effect4 == "night.png") {$nightSelected4 = " selected";} else {$nightSelected4 = "";}
if ($effect4 == "perma.png") {$permaSelected4 = " selected";} else {$permaSelected4 = "";}
if ($effect4 == "shrapnel.png") {$shrapnelSelected4 = " selected";} else {$shrapnelSelected4 = "";}
if ($effect4 == "trap.png") {$trapSelected4 = " selected";} else {$trapSelected4 = "";}
if ($effect4 == "trigger.png") {$triggerSelected4 = " selected";} else {$triggerSelected4 = "";}
if ($effect4 == "unibonus.png") {$unibonusSelected4 = " selected";} else {$unibonusSelected4 = "";}
if ($effect4 == "univerzal.png") {$univerzalSelected4 = " selected";} else {$univerzalSelected4 = "";}
if ($effect4 == "weapon.png") {$weaponSelected4 = " selected";} else {$weaponSelected4 = "";}

if ($effect5 == "attack.png") {$attackSelected5 = " selected";} else {$attackSelected5 = "";}
if ($effect5 == "bite.png") {$biteSelected5 = " selected";} else {$biteSelected5 = "";}
if ($effect5 == "block.png") {$blockSelected5 = " selected";} else {$blockSelected5 = "";}
if ($effect5 == "canba.png") {$canbaSelected5 = " selected";} else {$canbaSelected5 = "";}
if ($effect5 == "combo.png") {$comboSelected5 = " selected";} else {$comboSelected5 = "";}
if ($effect5 == "cumulative.png") {$cumulativeSelected5 = " selected";} else {$cumulativeSelected5 = "";}
if ($effect5 == "curse.png") {$curseSelected5 = " selected";} else {$curseSelected5 = "";}
if ($effect5 == "energy.png") {$energySelected5 = " selected";} else {$energySelected5 = "";}
if ($effect5 == "heal.png") {$healSelected5 = " selected";} else {$healSelected5 = "";}
if ($effect5 == "mechanic.png") {$mechanicSelected5 = " selected";} else {$mechanicSelected5 = "";}
if ($effect5 == "night.png") {$nightSelected5 = " selected";} else {$nightSelected5 = "";}
if ($effect5 == "perma.png") {$permaSelected5 = " selected";} else {$permaSelected5 = "";}
if ($effect5 == "shrapnel.png") {$shrapnelSelected5 = " selected";} else {$shrapnelSelected5 = "";}
if ($effect5 == "trap.png") {$trapSelected5 = " selected";} else {$trapSelected5 = "";}
if ($effect5 == "trigger.png") {$triggerSelected5 = " selected";} else {$triggerSelected5 = "";}
if ($effect5 == "unibonus.png") {$unibonusSelected5 = " selected";} else {$unibonusSelected5 = "";}
if ($effect5 == "univerzal.png") {$univerzalSelected5 = " selected";} else {$univerzalSelected5 = "";}
if ($effect5 == "weapon.png") {$weaponSelected5 = " selected";} else {$weaponSelected5 = "";}

if ($effect6 == "attack.png") {$attackSelected6 = " selected";} else {$attackSelected6 = "";}
if ($effect6 == "bite.png") {$biteSelected6 = " selected";} else {$biteSelected6 = "";}
if ($effect6 == "block.png") {$blockSelected6 = " selected";} else {$blockSelected6 = "";}
if ($effect6 == "canba.png") {$canbaSelected6 = " selected";} else {$canbaSelected6 = "";}
if ($effect6 == "combo.png") {$comboSelected6 = " selected";} else {$comboSelected6 = "";}
if ($effect6 == "cumulative.png") {$cumulativeSelected6 = " selected";} else {$cumulativeSelected6 = "";}
if ($effect6 == "curse.png") {$curseSelected6 = " selected";} else {$curseSelected6 = "";}
if ($effect6 == "energy.png") {$energySelected6 = " selected";} else {$energySelected6 = "";}
if ($effect6 == "heal.png") {$healSelected6 = " selected";} else {$healSelected6 = "";}
if ($effect6 == "mechanic.png") {$mechanicSelected6 = " selected";} else {$mechanicSelected6 = "";}
if ($effect6 == "night.png") {$nightSelected6 = " selected";} else {$nightSelected6 = "";}
if ($effect6 == "perma.png") {$permaSelected6 = " selected";} else {$permaSelected6 = "";}
if ($effect6 == "shrapnel.png") {$shrapnelSelected6 = " selected";} else {$shrapnelSelected6 = "";}
if ($effect6 == "trap.png") {$trapSelected6 = " selected";} else {$trapSelected6 = "";}
if ($effect6 == "trigger.png") {$triggerSelected6 = " selected";} else {$triggerSelected6 = "";}
if ($effect6 == "unibonus.png") {$unibonusSelected6 = " selected";} else {$unibonusSelected6 = "";}
if ($effect6 == "univerzal.png") {$univerzalSelected6 = " selected";} else {$univerzalSelected6 = "";}
if ($effect6 == "weapon.png") {$weaponSelected6 = " selected";} else {$weaponSelected6 = "";}

if ($effect7 == "attack.png") {$attackSelected7 = " selected";} else {$attackSelected7 = "";}
if ($effect7 == "bite.png") {$biteSelected7 = " selected";} else {$biteSelected7 = "";}
if ($effect7 == "block.png") {$blockSelected7 = " selected";} else {$blockSelected7 = "";}
if ($effect7 == "canba.png") {$canbaSelected7 = " selected";} else {$canbaSelected7 = "";}
if ($effect7 == "combo.png") {$comboSelected7 = " selected";} else {$comboSelected7 = "";}
if ($effect7 == "cumulative.png") {$cumulativeSelected7 = " selected";} else {$cumulativeSelected7 = "";}
if ($effect7 == "curse.png") {$curseSelected7 = " selected";} else {$curseSelected7 = "";}
if ($effect7 == "energy.png") {$energySelected7 = " selected";} else {$energySelected7 = "";}
if ($effect7 == "heal.png") {$healSelected7 = " selected";} else {$healSelected7 = "";}
if ($effect7 == "mechanic.png") {$mechanicSelected7 = " selected";} else {$mechanicSelected7 = "";}
if ($effect7 == "night.png") {$nightSelected7 = " selected";} else {$nightSelected7 = "";}
if ($effect7 == "perma.png") {$permaSelected7 = " selected";} else {$permaSelected7 = "";}
if ($effect7 == "shrapnel.png") {$shrapnelSelected7 = " selected";} else {$shrapnelSelected7 = "";}
if ($effect7 == "trap.png") {$trapSelected7 = " selected";} else {$trapSelected7 = "";}
if ($effect7 == "trigger.png") {$triggerSelected7 = " selected";} else {$triggerSelected7 = "";}
if ($effect7 == "unibonus.png") {$unibonusSelected7 = " selected";} else {$unibonusSelected7 = "";}
if ($effect7 == "univerzal.png") {$univerzalSelected7 = " selected";} else {$univerzalSelected7 = "";}
if ($effect7 == "weapon.png") {$weaponSelected7 = " selected";} else {$weaponSelected7 = "";}

if ($effect8 == "attack.png") {$attackSelected8 = " selected";} else {$attackSelected8 = "";}
if ($effect8 == "bite.png") {$biteSelected8 = " selected";} else {$biteSelected8 = "";}
if ($effect8 == "block.png") {$blockSelected8 = " selected";} else {$blockSelected8 = "";}
if ($effect8 == "canba.png") {$canbaSelected8 = " selected";} else {$canbaSelected8 = "";}
if ($effect8 == "combo.png") {$comboSelected8 = " selected";} else {$comboSelected8 = "";}
if ($effect8 == "cumulative.png") {$cumulativeSelected8 = " selected";} else {$cumulativeSelected8 = "";}
if ($effect8 == "curse.png") {$curseSelected8 = " selected";} else {$curseSelected8 = "";}
if ($effect8 == "energy.png") {$energySelected8 = " selected";} else {$energySelected8 = "";}
if ($effect8 == "heal.png") {$healSelected8 = " selected";} else {$healSelected8 = "";}
if ($effect8 == "mechanic.png") {$mechanicSelected8 = " selected";} else {$mechanicSelected8 = "";}
if ($effect8 == "night.png") {$nightSelected8 = " selected";} else {$nightSelected8 = "";}
if ($effect8 == "perma.png") {$permaSelected8 = " selected";} else {$permaSelected8 = "";}
if ($effect8 == "shrapnel.png") {$shrapnelSelected8 = " selected";} else {$shrapnelSelected8 = "";}
if ($effect8 == "trap.png") {$trapSelected8 = " selected";} else {$trapSelected8 = "";}
if ($effect8 == "trigger.png") {$triggerSelected8 = " selected";} else {$triggerSelected8 = "";}
if ($effect8 == "unibonus.png") {$unibonusSelected8 = " selected";} else {$unibonusSelected8 = "";}
if ($effect8 == "univerzal.png") {$univerzalSelected8 = " selected";} else {$univerzalSelected8 = "";}
if ($effect8 == "weapon.png") {$weaponSelected8 = " selected";} else {$weaponSelected8 = "";}

if ($image == "boulder_golibuk.png") {$boulderSelected = " selected";} else {$boulderSelected = "";}
if ($image == "coryphor.png") {$coryphorSelected = " selected";} else {$coryphorSelected = "";}
if ($image == "furiousscout.png") {$scoutSelected = " selected";} else {$scoutSelected = "";}
if ($image == "golibuk.png") {$golibukSelected = " selected";} else {$golibukSelected = "";}
if ($image == "maramis.png") {$maramisSelected = " selected";} else {$maramisSelected = "";}
if ($image == "mifmif.png") {$mifmifSelected = " selected";} else {$mifmifSelected = "";}
if ($image == "purplepotato.png") {$purpleSelected = " selected";} else {$purpleSelected = "";}
if ($image == "rachael.png") {$rachaelSelected = " selected";} else {$rachaelSelected = "";}
if ($image == "rock_golibuk.png") {$rockSelected = " selected";} else {$rockSelected = "";}
if ($image == "troll.png") {$trollSelected = " selected";} else {$trollSelected = "";}

if($sword == "true") {$swordSelected = " checked";} else {$swordSelected = "";}
if($axe == "true") {$axeSelected = " checked";} else {$axeSelected = "";}
if($bow == "true") {$bowSelected = " checked";} else {$bowSelected = "";}
if($staff == "true") {$staffSelected = " checked";} else {$staffSelected = "";}
//echo "effect1: $effect1 $mechanicSelected <br>";

echo <<<END

    <form action="index.php" method="get">
        Jméno hrdiny: <input type="text" name="heroName" value="$heroName"> <br>
        Druh hrdiny: <input type="text" name="heroType" value="$heroType"> <br>

        Obrázek hrdiny:
        <select name="image" class="select">
            <option value="golibuk.png"$golibukSelected>Golibuk</option>
            <option value="boulder_golibuk.png"$boulderSelected>Boulder Golibuk</option>
            <option value="coryphor.png"$coryphorSelected>Coryphor</option>
            <option value="furiousscout.png"$scoutSelected>Furious Scout</option>
            <option value="maramis.png"$maramisSelected>Maramis</option>
            <option value="mifmif.png"$mifmifSelected>Mif Mif</option>
            <option value="purplepotato.png"$purpleSelected>Purple Potato</option>
            <option value="rachael.png"$rachaelSelected>Rachael</option>
            <option value="rock_golibuk.png"$rockSelected>Rock Golibuk</option>
            <option value="troll.png"$trollSelected>Troll</option>
        </select> <br>

        Životy hrdiny: <input type="number" name="heroHp" value="$heroHp" min="1" max="99"> <br>
        Týmové životy hrdiny: <input type="number" name="heroTeamHp" value="$heroTeamHp" min="1" max="9"> <br>

        Zbraně hrdiny: <br>
        <input type="checkbox" name="sword" value="true" $swordSelected> Meč <br>
        <input type="checkbox" name="axe" value="true" $axeSelected> Sekera <br>
        <input type="checkbox" name="bow" value="true" $bowSelected> Luk <br>
        <input type="checkbox" name="staff" value="true" $staffSelected> Hůlka <br>

        Energie: <input type="number" step="1" name="energy1" value="$energy1" class="energyInput" min="1" max="9"> 
        <input type="number" step="1" name="energy2" value="$energy2" class="energyInput" min="1" max="9">
        <input type="number" step="1" name="energy3" value="$energy3" class="energyInput" min="1" max="9">
        <input type="number" step="1" name="energy4" value="$energy4" class="energyInput" min="1" max="9">
        <br> <br>


        
        1. Doba: <br>
        <select name="effect1" class="select"> END;
            <option $attackSelected value="attack.png">Útok do hrdiny</option>
            <option $biteSelected value="bite.png">Vampirijské kousnutí</option>
            <option $blockSelected value="block.png">Štít</option>
            <option $canbaSelected value="canba.png">Canbalandský útok do zbraně</option>
            <option $comboSelected value="combo.png">Combo</option>
            <option $cumulativeSelected value="cumulative.png">Kumulák</option>
            <option $curseSelected value="curse.png">Prokletí</option>
            <option $energySelected value="energy.png">Energie</option>
            <option $healSelected value="heal.png">Léčení</option>
            <option $mechanicSelected value="mechanic.png">Mechanikova superakce</option>
            <option $nightSelected value="night.png">Noční útok</option>
            <option $permaSelected value="perma.png">Trvalý útok</option>
            <option $shrapnelSelected value="shrapnel.png">Šrapnel</option>
            <option $trapSelected value="trap.png">Past</option>
            <option $triggerSelected value="trigger.png">Odpalovač komba</option>
            <option $unibonusSelected value="unibonus.png">Požehnání</option>
            <option $univerzalSelected value="univerzal.png">Univerzální útok</option>
            <option $weaponSelected value="weapon.png">Útok na zbraň</option>
        </select> 

        <input type="number" step="1" name="value1" value="$value1" class="energyInput" min="-9" max="9">
        <br>
        
        <select name="effect2" class="select"> END;
            <option $attackSelected2 value="attack.png">Útok do hrdiny</option>
            <option $biteSelected2 value="bite.png">Vampirijské kousnutí</option>
            <option $blockSelected2 value="block.png">Štít</option>
            <option $canbaSelected2 value="canba.png">Canbalandský útok do zbraně</option>
            <option $comboSelected2 value="combo.png">Combo</option>
            <option $cumulativeSelected2 value="cumulative.png">Kumulák</option>
            <option $curseSelected2 value="curse.png">Prokletí</option>
            <option $energySelected2 value="energy.png">Energie</option>
            <option $healSelected2 value="heal.png">Léčení</option>
            <option $mechanicSelected2 value="mechanic.png">Mechanikova superakce</option>
            <option $nightSelected2 value="night.png">Noční útok</option>
            <option $permaSelected2 value="perma.png">Trvalý útok</option>
            <option $shrapnelSelected2 value="shrapnel.png">Šrapnel</option>
            <option $trapSelected2 value="trap.png">Past</option>
            <option $triggerSelected2 value="trigger.png">Odpalovač komba</option>
            <option $unibonusSelected2 value="unibonus.png">Požehnání</option>
            <option $univerzalSelected2 value="univerzal.png">Univerzální útok</option>
            <option $weaponSelected2 value="weapon.png">Útok na zbraň</option>
        </select> 

        <input type="number" step="1" name="value2" value="$value2" class="energyInput" min="-9" max="9">
        <br>

        2. Doba: <br>
        <select name="effect3" class="select"> END;
          <option $attackSelected3 value="attack.png">Útok do hrdiny</option>
            <option $biteSelected3 value="bite.png">Vampirijské kousnutí</option>
            <option $blockSelected3 value="block.png">Štít</option>
            <option $canbaSelected3 value="canba.png">Canbalandský útok do zbraně</option>
            <option $comboSelected3 value="combo.png">Combo</option>
            <option $cumulativeSelected3 value="cumulative.png">Kumulák</option>
            <option $curseSelected3 value="curse.png">Prokletí</option>
            <option $energySelected3 value="energy.png">Energie</option>
            <option $healSelected3 value="heal.png">Léčení</option>
            <option $mechanicSelected3 value="mechanic.png">Mechanikova superakce</option>
            <option $nightSelected3 value="night.png">Noční útok</option>
            <option $permaSelected3 value="perma.png">Trvalý útok</option>
            <option $shrapnelSelected3 value="shrapnel.png">Šrapnel</option>
            <option $trapSelected3 value="trap.png">Past</option>
            <option $triggerSelected3 value="trigger.png">Odpalovač komba</option>
            <option $unibonusSelected3 value="unibonus.png">Požehnání</option>
            <option $univerzalSelected3 value="univerzal.png">Univerzální útok</option>
            <option $weaponSelected3 value="weapon.png">Útok na zbraň</option>
        </select> 

        <input type="number" step="1" name="value3" value="$value3" class="energyInput" min="-9" max="9">
        <br>

        
        <select name="effect4" class="select"> END;
            <option $attackSelected4 value="attack.png">Útok do hrdiny</option>
            <option $biteSelected4 value="bite.png">Vampirijské kousnutí</option>
            <option $blockSelected4 value="block.png">Štít</option>
            <option $canbaSelected4 value="canba.png">Canbalandský útok do zbraně</option>
            <option $comboSelected4 value="combo.png">Combo</option>
            <option $cumulativeSelected4 value="cumulative.png">Kumulák</option>
            <option $curseSelected4 value="curse.png">Prokletí</option>
            <option $energySelected4 value="energy.png">Energie</option>
            <option $healSelected4 value="heal.png">Léčení</option>
            <option $mechanicSelected4 value="mechanic.png">Mechanikova superakce</option>
            <option $nightSelected4 value="night.png">Noční útok</option>
            <option $permaSelected4 value="perma.png">Trvalý útok</option>
            <option $shrapnelSelected4 value="shrapnel.png">Šrapnel</option>
            <option $trapSelected4 value="trap.png">Past</option>
            <option $triggerSelected4 value="trigger.png">Odpalovač komba</option>
            <option $unibonusSelected4 value="unibonus.png">Požehnání</option>
            <option $univerzalSelected4 value="univerzal.png">Univerzální útok</option>
            <option $weaponSelected4 value="weapon.png">Útok na zbraň</option>
        </select> 

        <input type="number" step="1" name="value4" value="$value4" class="energyInput" min="-9" max="9">
        <br>

        3. Doba: <br>
        <select name="effect5" class="select"> END;
          <option $attackSelected5 value="attack.png">Útok do hrdiny</option>
            <option $biteSelected5 value="bite.png">Vampirijské kousnutí</option>
            <option $blockSelected5 value="block.png">Štít</option>
            <option $canbaSelected5 value="canba.png">Canbalandský útok do zbraně</option>
            <option $comboSelected5 value="combo.png">Combo</option>
            <option $cumulativeSelected5 value="cumulative.png">Kumulák</option>
            <option $curseSelected5 value="curse.png">Prokletí</option>
            <option $energySelected5 value="energy.png">Energie</option>
            <option $healSelected5 value="heal.png">Léčení</option>
            <option $mechanicSelected5 value="mechanic.png">Mechanikova superakce</option>
            <option $nightSelected5 value="night.png">Noční útok</option>
            <option $permaSelected5 value="perma.png">Trvalý útok</option>
            <option $shrapnelSelected5 value="shrapnel.png">Šrapnel</option>
            <option $trapSelected5 value="trap.png">Past</option>
            <option $triggerSelected5 value="trigger.png">Odpalovač komba</option>
            <option $unibonusSelected5 value="unibonus.png">Požehnání</option>
            <option $univerzalSelected5 value="univerzal.png">Univerzální útok</option>
            <option $weaponSelected5 value="weapon.png">Útok na zbraň</option>
        </select> 

        <input type="number" step="1" name="value5" value="$value5" class="energyInput" min="-9" max="9">
        <br>

        
        <select name="effect6" class="select"> END;
            <option $attackSelected6 value="attack.png">Útok do hrdiny</option>
            <option $biteSelected6 value="bite.png">Vampirijské kousnutí</option>
            <option $blockSelected6 value="block.png">Štít</option>
            <option $canbaSelected6 value="canba.png">Canbalandský útok do zbraně</option>
            <option $comboSelected6 value="combo.png">Combo</option>
            <option $cumulativeSelected6 value="cumulative.png">Kumulák</option>
            <option $curseSelected6 value="curse.png">Prokletí</option>
            <option $energySelected6 value="energy.png">Energie</option>
            <option $healSelected6 value="heal.png">Léčení</option>
            <option $mechanicSelected6 value="mechanic.png">Mechanikova superakce</option>
            <option $nightSelected6 value="night.png">Noční útok</option>
            <option $permaSelected6 value="perma.png">Trvalý útok</option>
            <option $shrapnelSelected6 value="shrapnel.png">Šrapnel</option>
            <option $trapSelected6 value="trap.png">Past</option>
            <option $triggerSelected6 value="trigger.png">Odpalovač komba</option>
            <option $unibonusSelected6 value="unibonus.png">Požehnání</option>
            <option $univerzalSelected6 value="univerzal.png">Univerzální útok</option>
            <option $weaponSelected6 value="weapon.png">Útok na zbraň</option>
        </select> 

        <input type="number" step="1" name="value6" value="$value6" class="energyInput" min="-9" max="9">
        <br>

        4. Doba: <br>
        <select name="effect7" class="select"> END;
          <option $attackSelected7 value="attack.png">Útok do hrdiny</option>
            <option $biteSelected7 value="bite.png">Vampirijské kousnutí</option>
            <option $blockSelected7 value="block.png">Štít</option>
            <option $canbaSelected7 value="canba.png">Canbalandský útok do zbraně</option>
            <option $comboSelected7 value="combo.png">Combo</option>
            <option $cumulativeSelected7 value="cumulative.png">Kumulák</option>
            <option $curseSelected7 value="curse.png">Prokletí</option>
            <option $energySelected7 value="energy.png">Energie</option>
            <option $healSelected7 value="heal.png">Léčení</option>
            <option $mechanicSelected7 value="mechanic.png">Mechanikova superakce</option>
            <option $nightSelected7 value="night.png">Noční útok</option>
            <option $permaSelected7 value="perma.png">Trvalý útok</option>
            <option $shrapnelSelected7 value="shrapnel.png">Šrapnel</option>
            <option $trapSelected7 value="trap.png">Past</option>
            <option $triggerSelected7 value="trigger.png">Odpalovač komba</option>
            <option $unibonusSelected7 value="unibonus.png">Požehnání</option>
            <option $univerzalSelected7 value="univerzal.png">Univerzální útok</option>
            <option $weaponSelected7 value="weapon.png">Útok na zbraň</option>
        </select> 

        <input type="number" step="1" name="value7" value="$value7" class="energyInput" min="-9" max="9">
        <br>

        
        <select name="effect8" class="select"> END;
            <option $attackSelected8 value="attack.png">Útok do hrdiny</option>
            <option $biteSelected8 value="bite.png">Vampirijské kousnutí</option>
            <option $blockSelected8 value="block.png">Štít</option>
            <option $canbaSelected8 value="canba.png">Canbalandský útok do zbraně</option>
            <option $comboSelected8 value="combo.png">Combo</option>
            <option $cumulativeSelected8 value="cumulative.png">Kumulák</option>
            <option $curseSelected8 value="curse.png">Prokletí</option>
            <option $energySelected8 value="energy.png">Energie</option>
            <option $healSelected8 value="heal.png">Léčení</option>
            <option $mechanicSelected8 value="mechanic.png">Mechanikova superakce</option>
            <option $nightSelected8 value="night.png">Noční útok</option>
            <option $permaSelected8 value="perma.png">Trvalý útok</option>
            <option $shrapnelSelected8 value="shrapnel.png">Šrapnel</option>
            <option $trapSelected8 value="trap.png">Past</option>
            <option $triggerSelected8 value="trigger.png">Odpalovač komba</option>
            <option $unibonusSelected8 value="unibonus.png">Požehnání</option>
            <option $univerzalSelected8 value="univerzal.png">Univerzální útok</option>
            <option $weaponSelected8 value="weapon.png">Útok na zbraň</option>
        </select> 

        <input type="number" step="1" name="value8" value="$value8" class="energyInput" min="-9" max="9">
        <br>

        <input type="submit" value="Roztoč to!">
    </form> 

    END;
    ?>

    
</nav>

<!--Made with love by Mole; Díky za pomoc s grafikou <a href="https://www.youtube.com/channel/UC_tTESf7E2KPlpYK-Zr47iQ"> Kulishkovi </a> -->
</body>
</html>