<?php 
if(!defined('GR_BOARD_2')) exit(); 

$deleteTarget = (int)$_GET['articleNo'];
?>

<div id="GRBOARD2" class="card bg-light">

    <h4 class="card-header">Delete a post</h4>
    <div class="card-body">
    	
    	<form id="boardDeleteForm" method="post" action="<?php echo $boardLink; ?>/deletepost/<?php echo $deleteTarget; ?>">
    		<div>
    			<input type="hidden" name="deleteProceed" value="yes" />
    			<input type="hidden" name="postUID" value="<?php echo $postUID; ?>" />
    		</div>
    		<div class="card-text">
    			<?php echo $error['confirm_post_delete']; ?>
    			<div class="originalMsg"><?php echo $content; ?></div>		
    		</div>
    		
    		<input type="submit" value="OK" class="btn btn-outline-primary" />
    		<a href="<?php echo $boardLink; ?>/list" class="btn btn-outline-danger">Cancel</a>
    	</form>
    
    </div>

</div>