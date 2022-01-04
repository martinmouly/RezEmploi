<?php
$iduser =$_SESSION['userid']
class Tool{

    include("Person.php");
    include("Message.php");

    
    function getValues($type,$query,$sql ='',$selection = '*'){
        if($sql=='')
            {$sql = "select {$selection} from {$type} where {$query}";}
            $result = $conn->query($sql);  
            if ($result->num_rows > 0) {
            // output data of each row
                $ret = array();
                while($row = $result->fetch_assoc()) {
                switch($type)
                {
                    case 'users':
                        array_push($ret,new Person($row['id'],$row['nom'],$row['prenom'],$row['pp'],$row['small_description'],NULL,$row['coordonnees'])) ;
                    break;
                    case 'message':
                        array_push($ret,new Message($row['id'],$row['me'],$row['other'],$row['time'],$row['content'],$row['whosent']));
                    break;
                    case 'experience':
                        array_push($ret,array("logo"=>$row["logo"], "title"=>$row["title"], "field"=>$row["field"],'date'=>$row["date"],'more'=>$row["more"],'isformation'=>$row["isformation"]));
                    break;
                    default:
                    array_push($ret,$row);
                }
                }
                
            } else {
            echo "erre";
            }
            if(count($ret)>1){
                return $ret;
            }
            else{return $ret[0];}
    }
    function getAllMessages($idme,$idother){
        return getValues('message',"me ={$idme} and other = {$idother} or me ={$idother} and other = {$idme}");
    }
    function getAllUsers($idme){
        return getValues('user',"id ={$idme}");
    }
    function getContacts($idme){
        
        $sql = "select id,prenom,nom,pp,small_description,coordonnees from user u ,message m where m.other =u.id";
        $sql2 = "select id,prenom,nom,pp,small_description,coordonnees from user u ,message m where m.me =u.id";
        
        array_merge(getValues('user','',$sql),getValues('user','',$sql2));
    }
}
?>
