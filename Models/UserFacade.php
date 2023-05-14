<?php

class UserFacade extends Config
{
    public function fetchAllUser() {
      $sql = $this->connect()->prepare("SELECT * FROM users");
      $sql->execute();
      return $sql;
    }
}

?>