<div align="center">
# Dokumentacja projektu: Forum Informatyczne

## Wykonali: 
- Kamil Kłósek 
- Norbert Marchut
- Łukasz Janowski
- Ireneusz Kiełtyka


# Opis

Przedmiotem projektu jest forum informatyczne. Powstało ono dla pogłębiania wiedzy o tematyce informatycznej. Forum informatyczne skierowane jest do  graczy, diagnostyków, programistów, maniaków sprzętowych, a także osób które miewają problemy z programowaniem w różnych językach. 
</div>


## 1. Typy użytkowników
1.	Administrator:  Posiada takie sama prawa jak moderator.
2.	Moderator: Posiada prawa do: tworzenia działów/tematów/postów/komentarzy, banowania i odbanowywania użytkowników.
3.	Zalogowany użytkownik: Posiada prawa do: tworzenia postów.
4.	Gość: Posiada prawa do: Przeglądania forum.

## 2.  System rang
System rang będzie klasyfikował użytkowników na podstawie ich udzielania się na forum. Zdobycie rangi, będzie zależne od zdobycia łapek polubień. Im większa ilość łapek polubień tym wyższa ranga. Zakładamy, że wyższy stopień rangi użytkownika będzie go określał jako bardziej pomocnego na forum.
Dodawanie łapek jest w tym projekcie ograniczone. Użytkownik danej przeglądarki ma możliwość dodania tylko jednej oceny. Jest to zasługa użycia biblioteki Fingerprint, która wykorzystuje ustawienia przeglądarki oraz mechanizm hashowania. Po wykonaniu Fingerprinta dostajemy hash przeglądarki, który jest zapisywany do bazy do późniejszych porównań.

## 3. Zamykanie postów
•	Administrator/Moderator  posiadają prawa do zamykania postów.
•	Użytkownik, który stworzył post ma prawo do zamknięcia własnych postów.
## 4. Działy dostępne na forum:
1.	Hardware
2.	„Moje maszyny”
3.	Software

## 5. Zarządzanie profilem
•	Administrator posiada opcję zarządzania listą moderatów w której może nadawać prawa zwykłemu użytkownikowi do roli moderatora jak i odbierać.
•	Administrator posiada opcję zarządzania listą użytkowników, dzięki której może banować i odbanowywać.
•	Administrator posiada opcję tworzenia tematów i przypisywanie do wybranej zakładki.

## 6. System tworzenia kont
•	Na forum został zaimplementowany system rejestracji i logowania.

## 7. Realizacja forum
Forum zostało stworzone w środowisku PHPStorm. Mechanizmem kieruje język PHP wraz z Frameworkiem Laravel. Baza danych została wygenerowana w MySQL.


## Prezentacja forum

 
 
...........

## Główna strona forum komputerowego.
Przedstawione działy  Software, Hardware, Moje Maszyny, Języki programowania i Frameworki posiadają tematy. W tych tematach można umieszczać posty przez zalogowanego użytkownika.
Post utworzony przez użytkownika w dziale Software. Informuje o tytule postu, opisem problemu, a także ilością odpowiedzi i data utworzenia.


............


Wnętrze postu charakteryzuje się komentarzami wraz z informacją przez kogo został napisany post/komentarz. Informacje o użytkownikach widnieją obok treści komentarza. Widnieje nazwa użytkownika, ranga, typ konta(Admin,Moderator,Zwykły Użytkownik) i ilość napisanych łącznie komentarzy na forum. Możliwość komentowania jest przydzielona tylko dla zalogowanych użytkowników.

## System rejestracji
 
Owy system, umożliwia każdemu otrzymania dostępu do członkowstwa w naszym forum. Wystarczy uzupełnić odpowiednimi danymi formularz, a po zatwierdzeniu danych przyciskiem „Rejestruj” strona przeniesie nowo utworzonego użytkownika na stronę główną.
Nowo utworzony użytkownik ma możliwość wylogowania i ponownego zalogowania.
 
 

Po zalogowaniu, pojawiła się opcja utworzenia postu po wybraniu dowolnego tematu znajdującego się na stronie forum.
 

## Stwórzmy post!
 
Do stworzenia postu został utworzony formularz zgłoszeniowy. Podajemy nazwę tematu zgodną z wybranym działem oraz niezbędny jest szczegółowy opis. Gdy to już zostanie zrealizowane – kliknij Dodaj!

Po stworzeniu postu, pojawił się komunikat o pomyślnie utworzonym poście, a tym samym nasz nowo utworzony post!
 
................


## Witaj w swoim poście! 
Można z komentować swój własny post jeśli otrzyma się odpowiedź zwrotną lub dodając coś od siebie klikając „Dodaj komentarz” 
 
..........

## Możliwość polubień komentarzy.
Wystarczy kliknąć łapkę w górę lub w dół.

 .........

## Przejdźmy do panelu użytkownika!

 

W panelu można zmienić Avatar i login. Ponadto możemy dowiedzieć się o własnej randze i na jakim poziomie uprawnień jest nasze konto.

Panel zarządzania przez administratora!

 
Administrator posiada opcję zarządzania listą moderatów w której może nadawać prawa zwykłemu użytkownikowi do roli moderatora jak i odbierać. Znajduje się opcja zarządzania listą użytkowników, dzięki której może banować i odbanowywać. Posiada również opcję tworzenia tematów i przypisywanie do wybranej zakładki.





Opcja zarządzania listą moderatów w której administrator może nadawać prawa zwykłemu użytkownikowi do roli moderatora jak i odbierać.

 ...........


Opcję do tworzenia tematów i przypisywanie do wybranej zakładki.

 .............


Opcja do zarządzania listą użytkowników, dzięki której administrator może banować i odbanowywać użytkowników i moderatorów.


 ..........
Administrator i moderator mogą banować użytkowników bezpośrednio z poziomu komentowania postów.


 ..........


Zbanowany użytkownik nie posiada dostępu do treści strony po zalogowaniu. Odblokowanie konta może wykonać administrator.

 ............


Jest zrobiona również funkcja, aby nie wpisywać różnych dziwnych rzeczy w pasku adresu. Poniżej przykład:
 

 ...............


## Zainstalowanie Aplikacji

1.	Instalacja pakietu XAMPP.
2.	 Uruchomienie aplikacji w PhpStorm:
- Sklonowanie aplikacji z GitHuba
- Instalacja Composera komendą w terminalu:
Composer install
- Następnie wpisujemy komendę do wygenerowania klucza:
php artisan key:generate
- Po tych komendach wpisujemy komendę do uruchomenia serwera i uruchomienia strony: php artisan serve
(klikamy w link do localhosta lub wpisujemy w przeglądarkę http://127.0.0.1:8000)
3.	Import bazy do phpMyAdmin:
- utworzenie bazy danych o nazwie „baza2”
-import bazy z pliku o nazwie „baza2.sql”


## License

The Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).


<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>
