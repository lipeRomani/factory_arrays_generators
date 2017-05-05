<?php

interface BounceValidator {
    public function validateEmail($email);
    public function isActive();
}