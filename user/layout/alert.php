<?php
if($result["success"]){
    ?>
        <div class="alert alert-success" role="alert">
            <?php echo $result["message"] ?>
        </div>
    <?php
    }else{
        ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $result["message"] ?>
            </div>
        <?php
    }
?>