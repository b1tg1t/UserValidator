<?php
    class UserValidator {
        public function validateEmail(string $email): bool {
            return preg_match('/^[a-z0-9_.\-+]+@[a-z0-9.\-]+\.[a-z]{2,}$/i', $email) === 1;
        }

        public function validatePassword(string $password): bool {
            return (
                strlen($password) >= 8 &&                  //At least 8 characters long
                preg_match('/[a-z]/', $password) === 1 &&  //At least one lowercase letter
                preg_match('/[A-Z]/', $password) === 1 &&  //At least one uppercase letter
                preg_match('/[0-9]/', $password) === 1 &&  //At least one digit
                preg_match('/[\W_]/', $password) === 1     //At least one special character
            );
        }
    }
?>