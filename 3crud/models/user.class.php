<?php

/**
 * User Object
 */
class User{

  private $_id;
  private $_species;
  private $_amount;
  private $_temp;
  private $_ph;
  private $_created;

  public function getid(){return $this->_id;}
  public function setid($arg){$this->_id = $arg;}

  public function getspecies(){return $this->_species;}
  public function setspecies($arg){$this->_species = $arg;}

  public function gettemp(){return $this->_temp;}
  public function settemp($arg){$this->_temp = $arg;}

  public function getamount(){return $this->_amount;}
  public function setamount($arg){$this->_amount = $arg;}

  public function getph(){return $this->_ph;}
  public function setph($arg){$this->_ph = $arg;}

  public function getCreated(){return $this->_created;}
  public function setCreated($arg){$this->_created = $arg;}

  public function hydrate($arr) {
    $this->setid(isset($arr["id"])?$arr["id"]:'');
    $this->setspecies(isset($arr["species"])?$arr["species"]:'');
    $this->setamount(isset($arr["amount"])?$arr["amount"]:'');
    $this->settemp(isset($arr["temp"])?$arr["temp"]:'');
    $this->setph(isset($arr["ph"])?$arr["ph"]:'');
    $this->setCreated(isset($arr["created"])?$arr["created"]:'');
  }

}
