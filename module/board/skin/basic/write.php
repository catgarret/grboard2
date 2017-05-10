<?php 
if(!defined('GR_BOARD_2')) exit(); 

if($postTarget == 0):
	$oldData = array('is_notice'=>0, 'is_secret'=>0, 'name'=>'', 'email'=>'', 'homepage'=>'',  'subject'=>'', 'content'=>'', 'tag'=>'', 'category'=>'');
endif;
?>

<div id="GRBOARD2" rel="<?php echo $grboard; ?>">

<h2 class="title">Write</h2>

<div class="boardWrite">
	
	<div class="boardWriteBox">
	<form id="boardWriteForm" method="post" action="<?php echo $boardLink; ?>/write/<?php echo $postTarget; ?>" enctype="multipart/form-data" class="gr-form">
	<div id="hiddenInputs">
		<input type="hidden" name="grboard" value="<?php echo $grboard; ?>" />
		<input type="hidden" name="writeProceed" value="yes" />
		<input type="hidden" name="boardId" id="boardId" value="<?php echo $ext_id; ?>" />
		<input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $Model->getMaxUploadSize(); ?>" />
		<input type="hidden" name="writingInMobile" value="no" />
	</div>
		<ul class="zero-gap">
			<li>
				<?php 
				$category = $Model->getCategoryList($ext_id);
				if($category != false): ?>
					<select name="gr2category" class="categoryInput">
						<?php foreach($category as &$cat): ?>
							<option name="<?php echo $cat; ?>" <?php echo (($oldData['category']==$cat)?'selected="true"':''); ?>><?php echo $cat; ?></option>
						<?php endforeach; ?>
					</select>
				<?php endif; ?>

				<?php if($Common->getSessionKey() == 1): ?>
					<input type="checkbox" name="isNotice" value="1" <?php echo ($oldData['is_notice']) ? 'checked="true"':''; ?> />notice
				<?php endif; ?>
				<input type="checkbox" name="isSecret" value="1" <?php echo ($oldData['is_secret']) ? 'checked="true"':''; ?> />secret 
				<input type="checkbox" name="isReplyable" value="1" checked="checked" />reply 
			</li>
			
			<?php if (!$Common->getSessionKey()): ?>
			<li><input type="text" name="gr2simplelock" placeholder="(필수) 우측의 5자리 키 값 입력!" class="gr-form-input" title="오른쪽에 붉은색 글씨대로 그대로 입력해 주시면 됩니다" /> &middot;&middot;&middot; <strong>Spam</strong> [<span class="red"><?php echo $simplelock; ?></span>]</li>
			<li><input type="text" name="gr2name" value="<?php echo $oldData['name']; ?>" placeholder="(필수) 이름" class="gr-form-input" title="본인을 구별할 수 있는 이름(혹은 닉네임)을 입력해 주세요" /> &middot;&middot;&middot; <strong>Name</strong></li>
			<li><input type="password" name="gr2password" placeholder="(필수) 비밀번호" class="gr-form-input" title="비밀번호는 관리자도 알 수 없습니다" /> &middot;&middot;&middot; <strong>Password</strong></li>
			<li><input type="email" name="gr2email" placeholder="이메일" value="<?php echo $oldData['email']; ?>" class="gr-form-input" title="추가적으로 이메일 주소를 입력 하실 수 있습니다" /> &middot;&middot;&middot; email</li>
			<li><input type="url" name="gr2homepage" placeholder="웹사이트" value="<?php echo $oldData['homepage']; ?>" class="gr-form-input" title="본인의 웹사이트 (혹은 블로그/SNS)가 있다면 주소를 입력해 주세요" /> &middot;&middot;&middot; homepage</li>
			<?php endif; ?>

			<li>
				<input type="text" name="gr2subject" required="true" placeholder="글 제목을 여기에 입력해 주세요" class="gr-form-input longWidth" value="<?php echo $oldData['subject']; ?>" />
			</li>
			<li class="space">
				<div id="gr2dndUpload" title="여기에 업로드 할 파일을 끌어다 놓으세요">
					<div id="gr2dndMsg">이 곳에 업로드 할 파일을 끌어다 놓으세요</div>
				</div>
				<div class="clear"></div>
				<input type="file" name="gr2files[]" title="첨부할 파일들을 직접 선택해 보세요" class="longWidth" multiple="true" />
			</li>
			
			<li>
				<?php if(isset($oldFile[0]['fid'])): ?>
				<ul class="gr2fileList">
				<?php foreach($oldFile as &$list): 
					$fid = $list['fid'];
					$fnameArr = explode('/', $list['real_name']);
					$fname = $fnameArr[count($fnameArr) - 1];
					?>
					<li><input type="checkbox" name="deleteFileList[]" value="<?php echo $fid; ?>" title="이 첨부파일을 삭제 하고자 할 경우 체크해 주세요" /> <?php echo $fname; ?> (delete if checked)</li>
				<?php endforeach; unset($fid, $fnameArr, $fname, $list); ?>
				</ul>
				<?php endif; ?>
			</li>			
			<li><textarea id="gr2content" name="gr2content" class="gr-form-input"><?php echo $oldData['content']; ?></textarea></li>
			<li><input type="text" name="gr2tag" value="<?php echo $oldData['tag']; ?>" placeholder="글의 핵심 단어들을 태킹 (쉼표로 구분: 공지,감사합니다,사랑)" class="gr-form-input longWidth" /></li>
		</ul>
		
		<div class="text-right margin-top">
			<input type="submit" value="Submit" class="gr-btn gr-btn-primary" />
			<a href="<?php echo $boardLink; ?>/list/1" id="gr2writeCancelBtn" class="gr-btn gr-btn-danger">Cancel</a>
		</div>
		
	</form>
	</div>

</div>

</div>