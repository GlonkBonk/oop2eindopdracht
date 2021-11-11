<?php 

    $string = $_POST['woord'];


class filter_class{
    public function filter($string){
        include_once '../config/database.php';
        $db = new Database(); 
        $conn = $db->getConnection();
    $string_to_array = explode(" ",$string);
        foreach($string_to_array as $word){
            $query = "SELECT * FROM `woorden` WHERE `woord` LIKE '%$word%'";
            $result = $conn->query($query);
                while ($row = $result->fetch_assoc()) {
                     $word_found = $row['woord'];
                if($word == $word_found){
                    $new_word = str_replace($word, '***', $word_found);
                    $key = array_search($word_found,$string_to_array);
                    $replace = array($key => $new_word);
                    $string_to_array = array_replace($string_to_array,$replace);
                }
            }
        $new_string = implode(" ",$string_to_array);
       
            }
            echo $new_string;

        }
    }

    $filter1 = new filter_class();
    $filter1->filter($string);

?>