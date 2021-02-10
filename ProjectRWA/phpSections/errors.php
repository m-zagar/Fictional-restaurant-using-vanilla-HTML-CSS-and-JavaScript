<?php if (count($errors) > 0){ ?>
    	<div style="font-size:25px; background-color: yellow; border:1px solid blue; margin-left:275px; margin-right: 275px; margin-top: 100px;">
            <?php foreach($errors as $error){ ?>
                <p><?php echo $error;?></p>
            <?php } ?>
        </div>
<?php } ?>