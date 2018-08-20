
<?php
include '../connect.php';

if(isset($_POST['search'])){
    $search = $_POST['search'];

    $query = "SELECT * FROM teacher WHERE Surname like'%".$search."%'
    OR Firstname  LIKE '%".$search."%' 
    OR	Middlename LIKE '%".$search."%' 
    ";
    $result =$db->query($query);

    while($row = $result->fetch_assoc()){
        $response[] = array("value"=>$row['Idno'],
            "label"=>
                $row['Firstname'].' '.
                $row['Middlename']

        );

    }
    echo json_encode($response);

}

exit;
