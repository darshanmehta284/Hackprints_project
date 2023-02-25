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

    // echo "select * from like where user_id='$user_id' and place_id='$place_id'";
    // exit;

    $result = $obj->query("select * from likes where user_id='$user_id' and place_id='$place_id'");
    $row_count = $result->num_rows;

    if($row_count == 1)
    {
        // $table_user = $result->fetch_object();
        // $user_like = $table_user->user_like;
        // $user_like = ($user_like == 0) ? 1 : 0;
   
        // echo mysqli_error($conn);
        $exes = $obj->query("UPDATE likes SET ulike=1,udislike=0 WHERE user_id='$user_id' and place_id='$place_id'");
        if($exes)
        {
            echo "<script>alert('Your like updated successfully');</script>";
            // $delete_dislike = $conn->query("DELETE FROM likes WHERE user_dislike = 1");
        }
        else
        {
            echo "<script>alert('Error');</script>";
        }
    }
    else
    {
        // echo "INSERT INTO likes(user_id,post_id,user_like,user_dislike) VALUES('$user_id','$post_id',1,0)";
        // exit;

            // echo mysqli_error($conn);
        $exe = $obj->query("INSERT INTO likes(user_id,place_id,ulike,udislike) VALUES('$user_id','$place_id',1,0)");
        if($exe)
        {

            echo "<script>alert('Your like added successfully');</script>";
                // $delete_dislike = $conn->query("DELETE FROM likes WHERE user_dislike = 1");
        }
    }
?>