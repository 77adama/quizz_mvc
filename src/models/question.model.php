<?php
    function insert_question($question,$nbrPoints,array  $reponses, array $correct){
        $dataQuestion=array(
            'question'=>$question,
            'nbrPoints'=>$nbrPoints,
            'reponses'=>$reponses,
            'correct'=>$correct,

        );
        array_to_json("questions",$dataQuestion);
    }