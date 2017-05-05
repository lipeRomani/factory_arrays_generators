<?php 

class NeverBounceValidatorImp implements BounceValidator {
    
    private $status;
    private $secret;

    public function __construct($status, string $secret) {
        $this->status = $status;
        $this->secret = $secret;
    }

    public function validateEmail($email) {
        return empty($email);
    }

    public function isActive() {
        return $this->status;
    }
}