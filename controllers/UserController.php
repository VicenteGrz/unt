<?php
require_once __DIR__ . '/../models/UserModel.php';
class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function getUserData($username) {
        return $this->userModel->getUserData($username);
    }

    public function getUserGrades($username) {
        return $this->userModel->getUserGrades($username);
    }
}
?>