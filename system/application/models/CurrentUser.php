<?php
class CurrentUser {

	private static $User;

	private function __construct() {}

	public static function User() {

		if(!isset(self::$User)) {
                            
//                        $CI =& get_instance();
//
//                        if (!$CI->session->userdata('user_id')) {
//                                return FALSE;
//                        }
//
//                        $user_id = $CI->session->userdata('user_id');
//
//                        if (!$u = Doctrine::getTable('Employee')->find($user_id)) {
//                                return FALSE;
//                        }
//
//			self::$User = $u;
		}

		return TRUE;
	}

	public static function Login($username, $password) {

                		// get User object by username
//		if ($u = Doctrine::getTable('Employee')->findOneByLogin($username)) {
//
//			// this mutates (encrypts) the input password
//			$u_input = new Employee();
//			$u_input->password = $password;
//                        
//			// password match (comparing encrypted passwords)
//			if ($u->password == $u_input->password) {
//				unset($u_input);
//
//                                $CI =& get_instance();
//                                
//				$CI->session->set_userdata('user_id',$u->id);
//				self::$user = $u;
//                                
//				return TRUE;
//			}
//
//			unset($u_input);
//		}

		// login failed
		return FALSE;

	}

	public function __clone() {
		trigger_error('Clone is not allowed.', E_USER_ERROR);
	}

}
?>
