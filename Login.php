<?php

class UserLogin {
    private $loginID;
    private $loginDateTime;
    private $loginStatus;

    public function __construct($loginID, $loginDateTime, $loginStatus) {
        $this->loginID = $loginID;
        $this->loginDateTime = $loginDateTime;
        $this->loginStatus = $loginStatus;
    }

    public function getLoginID() {
        return $this->loginID;
    }

    public function getLoginDateTime() {
        return $this->loginDateTime;
    }

    public function setLoginDateTime($newDateTime) {
        return $this->loginDateTime = $newDateTime;
    }

    public function getLoginStatus() {
        return $this->loginStatus;
    }

    public function setLoginStatus($newStatus) {
        return $this->loginStatus = $newStatus;
    }
}

// Example usage of user
$userLogin = new UserLogin(2004, new DateTime(), "Success");
echo "Login ID: " . $userLogin->getLoginID() . "\n";
echo "Login DateTime: " . $userLogin->getLoginDateTime()->format('2024-03-23'). "\n";
echo "Login Status: " . $userLogin->getLoginStatus() . "\n";
?>