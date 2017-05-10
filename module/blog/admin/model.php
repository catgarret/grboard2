<?php
class Model {

	private $db;
	private $queArr;
	private $grboard;

	public function __construct($DB, $_query, $_grboard) {
		$this->db = $DB;
		$this->queArr = $_query;
		$this->grboard = $_grboard;
	}
	
	public function saveBlogConfig($post) {
		if(!strlen($post['name']) || !strlen($post['blog_title']) || !strlen($post['blog_info']) ||
			$post['num_view_post'] < 1 || $post['num_per_page'] < 1 || $post['num_rss_post'] < 1) {
				return -1;
		}
			
		$name = stripslashes($post['name']);
		$homepage = strip_tags(trim($post['homepage']));
		$email = strip_tags(trim($post['email']));
		$title = stripslashes($post['blog_title']);
		$info = stripslashes($post['blog_info']);
		$numViewPost = (int)$post['num_view_post'];
		$numPerPage = (int)$post['num_per_page'];
		$numRssPost = (int)$post['num_rss_post'];
		$numRssContent = (int)$post['num_rss_content'];
		
		$update = 'name=\''.$name.'\',homepage=\''.$homepage.'\',email=\''.$email.'\',blog_title=\''.$title.'\',blog_info=\''.$info.'\',' .
			'theme=\''.$post['theme'].'\',num_view_post='.$numViewPost.',num_rss_post='.$numRssPost.',use_comment='.$post['use_comment'].',' .
			'use_rss='.$post['use_rss'].',num_rss_content='.$numRssContent.',num_per_page='.$numPerPage;
		
		$queStr = str_replace('{0}', $update, $this->queArr['update_blog_config']);
		$this->db->query($queStr); 
		
		return true;
	}
	
	public function getBlogConfig() {
		$que = $this->db->query($this->queArr['get_blog_info']);
		$result = $this->db->fetch($que);
		$this->db->free($que);
		return $result;
	}
	
	public function saveBlogCategory($post) {
		if(strlen($post['addIndex']) == 0 || strlen($post['addName']) == 0) {
			return false;
		}
		$queCheckDup = str_replace('{0}', addslashes($post['addName']), $this->queArr['get_exist_category_name']);
		$checkDup = $this->db->query($queCheckDup);
		$chkDup = $this->db->fetch($checkDup);
		if(isset($chkDup['uid'])) {
			$this->db->free($checkDup);
			return false;
		}
		$depth_default = 0;
		$queStr = str_replace(array('{0}', '{1}', '{2}'), 
			array($post['addIndex'], addslashes($post['addName']), $depth_default), $this->queArr['save_blog_category']);
		$this->db->query($queStr);
		$this->db->free($checkDup);
		return true;
	}
	
	public function updateBlogCategory($post) {
		$depth_default = 0;
		$queStr = str_replace(array('{0}', '{1}', '{2}', '{3}'), 
			array($post['categoryIndex'], addslashes($post['categoryName']), $depth_default, (int)$post['categoryTarget']),
			$this->queArr['update_blog_category']);
		$this->db->query($queStr);	
	}

	public function deleteBlogCategory($post) {
		$getCatCnt = $this->db->query($this->queArr['get_category_count']);
		$catCnt = $this->db->fetch($getCatCnt);
		if($catCnt['cnt'] < 2) {
			$this->db->free($getCatCnt);
			return false;
		}
		
		$queStr = str_replace('{0}', (int)$post['categoryTarget'], $this->queArr['delete_blog_category']);
		$this->db->query($queStr);
		$mvQueStr = str_replace('{0}', (int)$post['categoryTarget'], $this->queArr['move_category_to_default']);
		$this->db->query($mvQueStr);
		$this->db->free($getCatCnt);
		return true;
	}
	
	public function getBlogCategory() {
		$que = $this->db->query($this->queArr['get_blog_category']);
		$result = array();
		while($f = $this->db->fetch($que)) {
			$result[] = $f; 
		}
		$this->db->free($que);
		return $result;
	}
	
	public function saveBlogLink($post) {
		if(strlen($post['addName']) == 0 || strlen($post['addUrl']) == 0) {
			return false;
		}
		$queStr = str_replace(array('{0}', '{1}', '{2}'), 
			array($post['addUrl'], addslashes($post['addName']), htmlspecialchars($post['addInfo'], ENT_QUOTES)), $this->queArr['save_blog_link']);
		$this->db->query($queStr);
		return true;
	}

	public function updateBlogLink($post) {
		$queStr = str_replace(array('{0}', '{1}', '{2}', '{3}'), 
			array($post['linkURL'], addslashes($post['linkName']), htmlspecialchars($post['linkInfo'], ENT_QUOTES), (int)$post['linkTarget']),
			$this->queArr['update_blog_link']);
		$this->db->query($queStr);
	}
	
	public function deleteBlogLink($post) {
		$queStr = str_replace('{0}', (int)$post['linkTarget'], $this->queArr['delete_blog_link']);
		$this->db->query($queStr);
	}
	
	public function getBlogLink() {
		$que = $this->db->query($this->queArr['get_blog_link']);
		$result = array();
		while($f = $this->db->fetch($que)) {
			$result[] = $f; 
		}
		$this->db->free($que);
		return $result;
	}
}
?>