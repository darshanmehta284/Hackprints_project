<?php

$obj=new mysqli("localhost","root","","city guide");
if($obj->connect_errno!=0)
{
    echo $obj->connect_error;
    exit;
}

$state_id = $_POST['state_id'];

$ct = $obj->query("select * from city where state_id='$state_id'");


?>

    

<div class="form_group">
    <select id="ct" name="ct" class="col-lg-12 nice-select wide xyz" tabindex="0">
        <option value="">Select City</option>
        <?php
        while($c=$ct->fetch_object())
            {
        ?>    
            <option value="<?php echo $c->id;?>"> <?php echo $c->city;?></option>
        <?php
            }
        ?>
    </select>                                     
</div>





