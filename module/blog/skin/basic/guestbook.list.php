<?php if(!defined('GR_BOARD_2')) exit(); ?>

<div id="blogMainContent" class="col-lg-12 blog-main">
	
	<form id="blogGuestbookForm" method="post" action="/<?php echo $grboard; ?>/blog/write/guestbook" class="form-horizontal">
		<div class="hiddenInputs">
			<input type="hidden" name="reply_uid" value="" />
		</div>
		
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Guestbook</h3>
			</div>
			<div class="panel-body">
				<?php if (!$Common->getSessionKey()): ?>
				<div class="form-group">		
					<div class="col-md-9">
						<input id="simplelock" name="simplelock" type="text" placeholder="(필수) 우측의 4자리 스팸방지 코드를 적어 주세요" required="true" autofocus="true" class="form-control input-md" />
					</div>
					<span class="col-md-3"><?php echo $simplelock; ?></span>
				</div>
				
				<div class="form-group">		
					<div class="col-md-12">
						<input id="password" name="password" type="password" placeholder="(필수) 비밀번호를 적어 주세요 / 비밀번호는 암호화 되어 저장 됩니다" required="true" class="form-control input-md" />
					</div>
				</div>
								
				<div class="form-group">		
					<div class="col-md-12">
						<input id="name" name="name" type="text" placeholder="(필수) 이 곳에 이름 혹은 닉네임을 남겨 주세요" required="true" class="form-control input-md" />
					</div>
				</div>
				<?php endif; ?>
				
				<div class="form-group">
					<div class="col-md-12">
						<textarea id="content" name="content" rows="10" placeholder="이 곳에 남기고 싶으신 글을 적어 주세요" class="form-control textarea-md"></textarea>
						<div class="checkbox">
							<label><input type="checkbox" name="secret" value="1" title="체크 하시면 비밀글로 입력 됩니다."> Secret</label>
						</div>
					</div>
				</div>
				
				<div class="form-group text-right">
					<div class="col-md-12">
						<input type="submit" class="btn btn-lg btn-primary" role="button" value="Submit" />
					</div>
				</div>				
			</div>
		</div>
		
	</form>
	
	<div id="blogPost">
		<?php foreach($guestbookList as &$guest): if(isset($guest['uid'])): ?>
		<div class="blog-post">				
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3 class="panel-title">							
						<?php echo strip_tags($guest['name']); ?> 
						(<?php echo date('Y-m-d', $guest['signdate']); ?>)							
						<?php if($Common->getSessionKey()): ?>
						, <a href="#" class="doReply" rel="<?php echo $guest['uid']; ?>">(reply)</a>
						<?php endif; ?>
					</h3>
				</div>
				<div class="panel-body size-text-normal">
					<?php 
					if($guest['is_secret'] && !$Common->getSessionKey()) echo '<span class="text-danger">비밀글 입니다.</span>';
					else echo nl2br(strip_tags($guest['content'])); 
					?>
					<hr />
					<div class="blogPostReply">						
						<?php 
						$replyList = $Model->getGuestbookReplyList($guest['uid'], 20);
						if(count($replyList[0]) > 0): ?>	
						<div class="guestbookReply">							
							<?php foreach($replyList as &$reply): ?>
							<div id="message<?php echo $reply['uid']; ?>" class="blog-guest-reply">
								<?php echo nl2br(strip_tags($reply['content'])); ?>
								<hr />
								<div class="guestReplyBy"><span>by <?php echo stripslashes($reply['name']); ?></span></div>
							</div>
							<?php endforeach; ?>
						</div>
						<?php endif; unset($reply, $replyList); ?>
						
					</div>
				</div>
			</div>				
		</div>
		<?php endif; endforeach; unset($guest, $guestbookList); ?>
	</div>
	
	<ul id="blogPage" class="pagination">		
		<li class="<?php echo ($guestbookNowBlock < 2)?'disabled':''; ?>">
			<a href="/<?php echo $grboard; ?>/blog/guestbook/page/<?php echo ($guestbookNowBlock > 1)?$ext_page-$blogInfo['num_per_page']:'1'; ?>">&laquo;</a></li>

		<?php foreach($guestbookPaging as &$pageNo): ?>
			<li class="<?php echo ($pageNo==$ext_page)?'active':''; ?>">
				<a href="/<?php echo $grboard; ?>/blog/guestbook/page/<?php echo $pageNo; ?>"><?php echo $pageNo; ?></a></li>
		<?php endforeach; unset($pageNo, $guestbookPaging); ?>

		<li class="<?php echo ($guestbookNowBlock >= $guestbookTotalBlock)?'disabled':''; ?>">
			<a href="/<?php echo $grboard; ?>/blog/guestbook/page/<?php echo ($ext_page + $blogInfo['num_per_page']); ?>">&raquo;</a></li>
	</ul>	
</div>