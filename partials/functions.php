<?php
function redirect(){
    header('Location: ./password.php');
};


function password_type($value){
    if($value==="lettere"){
        $lnsL=1;
    }elseif($value==="numeri"){
        $lnsL=2;
    }elseif($value==="simboli"){
        $lnsL=3;
    }
return $lnsL;
}

function rnd_password($lnsL,$length,$array,){
    $new_password="";
    if(isset($lnsL)){
        for ($i=0; $i<$length; $i++){
       
            if($lnsL===1){
                $new_password .=$array['letters'][rand(0,24)];
            }elseif($lnsL===2){
                $new_password .= rand(0,9);
            }elseif($lnsL===3){
                $new_password .=$array['symbols'][rand(0,5)];
            }else{
                $LETTER=strtoupper($array['letters'][rand(0,24)]);
                $new_password.=$LETTER;
            };  
        };
    }else{
        for ($i=0; $i<$length; $i++){
       $lnsL=rand(1,4);
   
            if($lnsL===1){
                $new_password .=$array['letters'][rand(0,24)];
            }elseif($lnsL===2){
                $new_password .= rand(0,9);
            }elseif($lnsL===3){
                $new_password .=$array['symbols'][rand(0,5)];
            }else{
                $LETTER=strtoupper($array['letters'][rand(0,24)]);
                $new_password.=$LETTER;
            };  
        };

    }
 
    return $new_password;
};






?>