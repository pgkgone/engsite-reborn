<?php
function getScore($title,$part,$arr){
    $score=0;
    if($part==0){
        $DB = new SQLite3("db.sqlite");
        $result=(string)$DB->query("SELECT answers FROM tests WHERE title= ". $title." AND part = ".$part."")->fetchArray()[0];
        $ansArr=explode(",",$result);
        for($i=0;$i<6;$i++){
            if($ansArr[$i]==$arr[$i]) $score++;
        }
    }
    if($part==1){
        $errors = array();
        $DB = new SQLite3("db.sqlite");
        $result=(string)$DB->query("SELECT answers FROM tests WHERE title= ". $title." AND part = ".$part."")->fetchArray()[0];
        $ansArr=explode(",",$result);
        for($i=0;$i<7;$i++){
            $isChanged=0;
            $ansArrN=explode("|",$ansArr[$i]);
            for($j=0;$j<count($ansArrN);$j++) {
                if (strtoupper($ansArrN[$j]) == strtoupper($arr[$i])) {
                    $score++;
                    $isChanged=1;
                }
            }
            array_push($errors, $isChanged);
        }
        array_push($errors, $score);
        return json_encode($errors);
    }
    if($part==2){
        $DB = new SQLite3("db.sqlite");
        $result=(string)$DB->query("SELECT answers FROM tests WHERE title= ". $title." AND part = ".$part."")->fetchArray()[0];
        $ansArr=explode(",",$result);
        for($i=0;$i<7;$i++){
            if($ansArr[$i]==$arr[$i]) $score++;
        }
    }
    return $score;
}

echo getScore($_POST["title"],$_POST["part"],$_POST["arr"]);
?>