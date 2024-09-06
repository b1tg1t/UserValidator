<?php
	/*
	Na potrzeby wymagań zadania, napisałem bardzo podstawowy RegEx sprawdzający poprawność maila. Powinien on zadziałać dla każdego typowego adresu mailowego.
	Jeśli zaś chcielibyśmy RegEx, który jest maksymalnie zgodny ze standardem "RFC 5322", musiałby zostać zastosowany bardzo długi i skomplikowany RegEx.
	W języku PHP szybciej i bezpieczniej jest użyć gotową funkcję, np. "filter_var($email, FILTER_VALIDATE_EMAIL)" w celu walidacji adresu mailowego.
	*/

	class UserValidator {
		public function validateEmail(string $email): bool {
			return preg_match('/^[a-z0-9_.\-+]+@[a-z0-9.\-]+\.[a-z]{2,}$/i', $email) === 1;
		}

		public function validatePassword(string $password): bool {
			return (
				strlen($password) >= 8 &&
				preg_match('/[a-z]/', $password) === 1 &&
				preg_match('/[A-Z]/', $password) === 1 &&
				preg_match('/[0-9]/', $password) === 1 &&
				preg_match('/[\W_]/', $password) === 1
			);
		}
	}
?>