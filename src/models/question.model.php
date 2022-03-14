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
    function find_question(string $question):array{ 
        //recuper tous les utilisateurs se trouvant dans le fichier json
        $questions=json_to_array_all("question");
        $result=[];
        //parcourir et on cherche les utilisateurs dont le role est egale au role q'on a definit 
        foreach ($questions as $question){
            
                $result[]=$question;
            }
            return $result;
        }