<?php



/**
 * Skeleton subclass for representing a row from the 'user' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.cyberstore
 */
class User extends BaseUser {

     public function __construct($login="", $password="") {
            parent::__construct();
            
            $this->setLogin($login);
            $this->setPassword($password);
    }
//    public function __construct() 
//    {
//        $num = func_num_args();
//        $args = func_get_args();
//    
//        switch($num){
//        case 0:
//            $this->__call('__construct_0', null);
//            break;
//        case 2:
//            $this->__call('__construct_2', $args);
//            break;
//        default:
//            throw new Exception();
//        }
//    }
//    public function __construct_0() {
//            parent::__construct();
//    }
//    public function __construct_2($login, $password) {
//            parent::__construct();
//            $this->setLogin($login);
//            $this->setPassword($password);
//    }

} // User
