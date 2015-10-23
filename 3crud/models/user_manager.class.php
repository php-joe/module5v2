<?php

class UserManager extends Manager{

  public function getUser($arg){

    if(!is_numeric($arg)) return FALSE;

      $db = new Db();

      $id = $db -> quote($arg);
      $results = $db -> select("SELECT * from myfish where id = $id limit 1");

      foreach($results as $result){
        $user = new User();
        $user->hydrate($result);
      }

      return $user;

  }
  public function getAllUsers(){

      $db = new Db();
      $users = array();

      $results = $db -> select("SELECT * from myfish");

    foreach($results as $result){
        $user = new User();
        $user->hydrate($result);
        $users[] = $user;
      }

      return $users;

  }
  public function save($user){

    if ($user->getID()) {
      $this->_update($user);
    } else {
      $this->_add($user);
    }
  }

  private function _add($user){
    $db = new Db();

		$id = $db -> quote($user->getID());
		$amount = $db -> quote ($user->getamount());
		$species = $db -> quote($user->getspecies());
		$ph = $db -> quote($user->getph());
		$temp = $db -> quote($user -> gettemp());
    $created = time();


    $results = $db -> query("insert into myfish.myfish (species, amount, ph, temp, created) values ($species, $amount, $ph, $temp, $created);");

  }

  private function _update($user){
    $db = new Db();

    $id = $db -> quote($user->getID());
		$amount = $db -> quote($user->getamount());
    $species = $db -> quote($user->getspecies());
    $ph = $db -> quote($user->getph());
		$temp = $db -> quote($user -> gettemp());

    if($user->gettemp()){
      $temp = $db -> quote($user->gettemp());
    } else {
      $temp = '';
    }

    if(!empty($temp)){
      $results = $db -> query("update myfish.myfish set species=$species, amount=$amount, ph=$ph, temp=$temp where id = $id;");
    } else {
      $results = $db -> query("update myfish.myfish set species=$species, amount=$amount, ph=$ph, temp=$temp where id = $id;");
    }

  }

  public function delete($arg){

    if(!is_numeric($arg)) return FALSE;

      $db = new Db();

      $id = $db -> quote($arg);
      $results = $db -> query("DELETE from myfish.myfish where id = $id");
  }

}
