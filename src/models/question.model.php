<?php
    function insert_question($question,$nbrPoints,array  $reponses){
        $dataQuestion=array(
            'question'=>$question,
            'nbrPoints'=>$nbrPoints,
            'reponses'=>$reponses,
            

        );
        array_to_json("questions",$dataQuestion);
    }