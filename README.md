# Aplikacja Manager Faktur z wykorzystaniem systemu bazodanowego Oracle XE 11g

## Aplikacja służąca do kontroli obiegu dokumentów w ramach przedsiębiorstwa oparta na walidacji bazodanowej

- Backend PHP7 (PDO, PDO_OCI, Composer)
- Frontend PHP/HTML/JS (Jquery, Ajax)
- Baza danych - Oracle Database XE 11g
- Walidacja wprowadzania i aktualizacji danych wykonywana na poziomie bazy danych za pomocą TRIGGERÓW i FUNKCJI
- Odpowiedź dotycząca walidacji przetwarzana i zwracana do widoków poprzez backend
- Brak zabezpieczeń widoków przed wprowadzeniem niepoprawnych wartości

Funkcjonalności:

- Przekazywanie dokumentów pomiędzy pracownikami
- Przekazywanie dokumentów do archiwum
- Wprowadzanie nowego dokumentu
- Wprowadzanie wyjaśnień dotyczących dokumentu
- Logowanie/Aktualizacja danych użytkownika
- Widok śledzenia dokumentów
- Widok archiwum
