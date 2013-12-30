<?php
class MasterConfig{
  private $enterprise;
  function __construct(){
    return 0;
  }
  public function setEnterprise($e){
    $this->enterprise = $e;
  }
  public function getEnterprise(){
    return $this->enterprise;
  }
}
?>
