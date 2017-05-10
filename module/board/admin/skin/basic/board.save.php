<?php if(!defined('GR_BOARD_2')) exit(); ?>

<div class="panel-heading">
	<h3 class="panel-title"><strong>Saved</strong></h3>
</div>

<div class="panel-body">
	<table rules="none" id="boardAdd" class="table table-striped">
		<colgroup>
			<col class="col-md-3" />
			<col class="col-md-9" />
		</colgroup>
		<thead>
			<tr>
				<th>Item</th>
				<th>Information</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Status</td>
				<td>				
					<span><?php echo $lang['board_save_status']; ?></span></td>
			</tr>
			<tr>
				<td>Link</td>
				<td>				
					<a href="/<?php echo $grboard; ?>/board-<?php echo $boardId; ?>/list/1"><span><?php echo $lang['board_save_link']; ?></span></a></td>
			</tr>
			<tr>
				<td>Modify</td>
				<td>				
					<a href="/<?php echo $grboard; ?>/board/admin/modify2board/<?php echo $boardId; ?>"><span><?php echo $lang['board_save_modify']; ?></span></a></td>
			</tr>
		</tbody>
	</table>
</div>