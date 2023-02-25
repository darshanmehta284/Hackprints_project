<?php 

    session_start();
    $obj = new mysqli("localhost","root","","city guide");
        if($obj->connect_errno!=0)
        {
            echo $obj->connect_error;
            exit;
        }

    $user_id = $_SESSION["userid"];
    $place_id = $_POST["p_id"];

    // echo "SELECT * FROM likes WHERE user_id='$user_id' and post_id='$post_id' ";
    // exit;

    $result = $obj->query("SELECT * FROM likes WHERE user_id='$user_id' and place_id='$place_id' ");
    $rowcount = $result->num_rows;
    
    if($rowcount == 1)
    {
        // echo "Your like added successfully";
        $row = $result->fetch_object();
        $like = $row->ulike;
        $like = 0;
        $dislike = 1;
        $exe2 = $obj->query("UPDATE likes SET ulike='$like',udislike='$dislike' WHERE user_id='$user_id' and place_id='$place_id' ");
        if($exe2)
        {
            // echo "YO";
            echo "<script>alert('You dislike this post');</script>";
        }
            
        else
        {
           echo 0;
        }
    }
    else
    {
         $exe = $obj->query("INSERT INTO likes(user_id,place_id,ulike,udislike) VALUES('$user_id','$place_id',0,1)");
        if($exe)
        {

            echo "<script>alert('Your dislike added successfully');</script>";
                // $delete_dislike = $conn->query("DELETE FROM likes WHERE user_dislike = 1");
        }
    }
?>