<?php
class Review {
  private $menuName;
  // ID適用
  private $userId;
  private $body;

  // userId
  public function __construct($menuName, $userId, $body) {
    $this->menuName = $menuName;
    // userId
    $this->userId = $userId;
    $this->body = $body;
  }

  public function getMenuName() {
    return $this->menuName;
  }

  public function getBody() {
    return $this->body;
  }

  public function getUser($users) {
    foreach ($users as $user) {
      //ID
      if ($user->getId() == $this->userId) {
        return $user;
      }
    }
  }

}

?>
