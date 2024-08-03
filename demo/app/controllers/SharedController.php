<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * Users_username_value_exist Model Action
     * @return array
     */
	function Users_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("Users");
		return $exist;
	}

	/**
     * Users_email_value_exist Model Action
     * @return array
     */
	function Users_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("Users");
		return $exist;
	}

}
