# Klasa UserValidator
Klasa służąca do walidacji adresu e-mail oraz hasła.

<br>

### Informacja odnośnie metody validateEmail()
> Na potrzeby wymagań zadania, napisałem bardzo podstawowy RegEx sprawdzający poprawność adresu e-mail. Powinien on zadziałać dla każdego typowego adresu mailowego.<br>
Jeśli zaś chcielibyśmy być maksymalnie zgodni ze standardem "RFC 5322", musiałby zostać zastosowany bardzo długi i skomplikowany RegEx.<br>
W języku PHP szybciej i bezpieczniej jest użyć wbudowaną funkcję, np. `filter_var($email, FILTER_VALIDATE_EMAIL)` w celu walidacji adresu mailowego.