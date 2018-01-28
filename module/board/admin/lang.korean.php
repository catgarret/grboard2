<?php
$lang = array(
	'home_info' => '블로그 첫 화면으로 이동 합니다' ,
	'board_add_info' => '새로운 게시판을 추가 합니다' ,
	'board_group' => '게시판이 소속될 그룹을 지정 합니다. 논리적인 구분을 위해 사용 합니다.' ,
	'board_add_id' => '게시판 아이디는 영문으로 시작해야 하며 영문과 숫자만 허용 합니다. (예: freeboard, qna)' ,
	'board_add_name' => '게시판 이름을 지정 합니다. (예: 자유게시판, 묻고답하기)' ,
	'board_add_theme' => '게시판 스킨을 선택 합니다. 스킨에 따라서, 여러 확장 기능들이 가능해 집니다. (기본: basic)' ,
	'board_add_mobile_theme' => '스마트폰용 스킨을 선택 합니다. 화면 크기가 작은 기기들에 최적화 됩니다. (기본: basic)' ,
	'board_add_page_num' => '페이징 네비게이션 개수를 조정 합니다. 보통 1 | 2 | ... | 10 으로 출력 됩니다. (기본: 10)' ,
	'board_add_page_per_list' => '게시글 목록 개수를 조정 합니다. 보통 한 페이지에 20 개가 적당 합니다. (기본: 20)' ,
	'board_add_cut_subject' => '제목에 출력될 글자 개수를 조정 합니다. 0 이면 글자를 자르지 않습니다. (기본: 0)' ,
	'board_add_comment_page_num' => '댓글 페이징 네비게이션 개수를 조정 합니다. 보통 1 | 2 | ... | 10 으로 출력 됩니다. (기본: 10)' ,
	'board_add_comment_page_per_list' => '댓글 목록 개수를 조정 합니다. 보통 한 페이지에 100 개가 적당 합니다. (기본: 100)' ,
	'board_add_head_file' => '게시판 상단에 나올 HTML 파일 경로를 지정 합니다. 게시판 출력 전에 먼저 화면에 그려 집니다.' ,
	'board_add_head_form' => '게시판 상단에 나올 HTML 내용을 입력 합니다. 게시판 출력 전에 먼저 화면에 그려 집니다.<br />' .
							'태그 내용을 잘 살펴 보세요. <strong>[grboard2skinname]</strong> 과 <strong>[grboard2action]</strong> 은 <br />' .
							'자동으로 변경되는 코드 이므로 그대로 두시고 필요 시 코드를 수정하시기 바랍니다.' ,
	'board_add_foot_form' => '위의 상단 HTML 내용과 게시판이 출력된 후 이어서 출력될 HTML 내용을 작성 합니다.<br />' .
							'상단 태그 내용들 중 열었던 태그들은 반드시 이 곳에서 닫아 줍니다.<br />' .
                            'Footer html 다음에 아래의 Foot file 이 (있을 시) 불러집니다.',
	'board_add_foot_file' => '게시판 하단에 나올 HTML 파일 경로를 지정 합니다. 게시판 출력 후에 화면에 그려 집니다.' ,
	'board_add_category' => '게시글 분류 기능을 지원 합니다. | 로 구분 합니다. (예: 일반|질문|답변)' ,
	'board_add_master' => '게시판 관리자들의 아이디를 지정 합니다. | 로 구분 합니다. (예: sirini|grboard|maru)' ,
	'board_add_num_file' => '한 번에 첨부 가능한 파일 개수를 지정 합니다. (기본: 10)' ,
	'board_add_enter_level' => '게시판 목록을 볼 수 있는 권한을 지정 합니다. <strong>1 은 비회원</strong>, 2 이상은 로그인 한 사용자만 가능 입니다.' ,
	'board_add_view_level' => '게시글을 볼 수 있는 권한을 지정 합니다. <strong>1 은 비회원</strong>, 2 이상은 로그인 한 사용자만 가능 입니다.' ,
	'board_add_write_level' => '게시글을 작성 할 수 있는 권한을 지정 합니다. <strong>1 은 비회원</strong>, 2 이상은 로그인 한 사용자만 가능 입니다.' ,
	'board_add_comment_write_level' => '댓글을 작성 할 수 있는 권한을 지정 합니다. <strong>1 은 비회원</strong>, 2 이상은 로그인 한 사용자만 가능 입니다.' ,
	'board_add_down_level' => '파일을 받을 수 있는 권한을 지정 합니다. <strong>1 은 비회원</strong>, 2 이상은 로그인 한 사용자만 가능 입니다.' ,
	'board_save_status' => '저장 완료' ,
	'board_save_link' => '게시판으로 이동하기 [클릭]' ,
	'board_save_modify' => '게시판 수정하기 [클릭]' ,
	'board_list_id' => '클릭 하시면 해당 게시판으로 이동 합니다' ,
	'board_list_modify' => '클릭 하시면 게시판 설정을 수정 페이지로 이동 합니다' ,
	'board_list_delete' => '클릭 하시면 게시판을 삭제 합니다 (이 작업은 되돌릴 수 없습니다! 주의가 필요합니다)' ,
	'board_group_modify' => '클릭 하시면 이 그룹명을 수정 하실 수 있습니다' ,
	'board_group_delete' => '클릭 하시면 이 그룹을 삭제 합니다 (소속 게시판들은 삭제 되지 않습니다)' ,
	'board_group_name' => '그룹 이름을 지정 합니다.' ,
	'board_group_master' => '그룹 관리자들의 아이디를 지정 합니다. | 로 구분 합니다. (예: sirini|grboard|maru)' ,
	'board_list_info' => '등록된 게시판 목록을 조회하고, 수정 혹은 삭제 등을 처리 합니다' ,
	'board_delete_message' => '정말 선택하신 게시판을 삭제 하시겠습니까? 등록된 게시글/댓글/첨부파일 모두 삭제 됩니다.' ,
	'board_group_info' => '게시판들을 묶을 그룹을 생성/수정/삭제 합니다' ,
	'member_add_info' => '새로운 회원 계정을 추가 합니다' ,
	'member_list_info' => '등록된 회원 목록을 조회하고, 수정 혹은 제명 등을 처리 합니다' ,
	'member_group_info' => '회원들을 묶을 그룹을 생성/수정/삭제 합니다' ,
	'member_group' => '회원이 소속될 그룹을 지정 합니다. 논리적인 구분을 위해 사용 합니다.' ,
	'member_add_id' => '회원 아이디는 영문과 숫자 조합만 가능 합니다. (예: gildong, ironman4u)' ,
	'member_add_password' => '회원의 비밀번호를 지정 합니다. 영문, 특문, 숫자 등을 조합해 주세요 (주의: 수정 시 덮어 씌워짐)' ,
	'member_add_nickname' => '회원의 별명을 지정 합니다. (예: 부릎뜨니숲이었어, 슈퍼말이오)' ,
	'member_add_realname' => '회원의 본명(=실명)을 지정 합니다. (예: 홍길동, 임꺽정)' ,
	'member_add_email' => '회원의 이메일 주소를 입력 합니다. (예: example@mail.com)' ,
	'member_add_homepage' => '회원의 홈페이지 주소를 입력 합니다. (예: http://example.com)' ,
	'member_add_level' => '회원의 레벨을 지정 합니다. <strong>1 은 비회원</strong>과 같으며, 2 이상 부터 회원 입니다.' ,
	'member_add_point' => '회원의 포인트를 지정 합니다.' ,
	'member_add_self_info' => '간단한 회원 소개 글을 입력 합니다. 250자 이내로 서술 합니다.' ,
	'member_add_blocks' => '로그인 실패 카운트 값을 변경 할 수 있습니다. (기본값: 0)' ,
	'member_save_status' => '저장 완료' ,
	'member_save_modify' => '회원 정보 수정하기 [클릭]' ,
	'member_list_modify' => '클릭 하시면 회원 정보 수정 페이지로 이동 합니다' ,
	'member_list_delete' => '클릭 하시면 이 회원을 삭제 합니다' ,
	'member_delete_message' => '정말 선택하신 회원의 계정을 삭제 하시겠습니까? 삭제된 회원이라도 다시 재가입 할 수는 있습니다.' ,
	'member_group_modify' => '클릭 하시면 이 그룹명을 수정 하실 수 있습니다' ,
	'member_group_delete' => '클릭 하시면 이 그룹을 삭제 합니다 (소속 회원들은 삭제 되지 않습니다)' ,
	'advanced_terminal_info' => '새 버전의 GR Board 가 준비 되었는지 확인해 봅니다'
);
?>