# MedHelp3D

MedHelp -3D este o platforma de hosting a asset-urilor medicale 3D, pe care oricine poate incarca astfel de modele.
	
## Instalare 
1. Descarcam arhiva completa

2. Incarcam fisierul "medhelp.sql" in baza de date.

3. Deschidem fisierul CONFIG.PHP

4. Configuram fisierul CONFIG.PHP astfel

 
```php
-------------------------------------------------------------------------------------------------------	|
|$host = 'AdresaHost.com'; 	/*Hostul pe care va rula aplicatia, fara HTTP/HTTPS*/			|
|							/* Daca rulati local lasati LOCALHOST*/		|
|													|
|$SSL = 0; /*1 PT HTTPS si 0 PT HTTP*/									|
|													|
|/*DATE MYSQL, Trebuie adaptate in functie de unde ai instalat baza de date*/				|
|													|
|$hostdb = 'localhost'; 		/*IP Server MYSQL*/						|
|$user = 'usersql'; 			/*User baza date*/						|
|$pwd = 'parolasql';			/*Parola baza date*/						|
|$database = 'numedb';			/*Baza de date la care se realizeaza conexiunea*/		|
-------------------------------------------------------------------------------------------------------	|
```

## Descriere Proiect

	Proiectul a fost realizat in totalitate folosind urmatoarele, Notepad++, Bootstrap, PHP, CSS, JavaScript, HTML5, Adobe Photoshop, Adobe AfterEffects si Sony Vegas Pro 16.

## Backend

Backend-ul a fost realizat in PHP, iar baza de date folosita a fost MySQL impreuna cu functia MySQLi din PHP.

**CONFIG.PHP** = Totul incepe in fisierul CONFIG.PHP, aici este setat hostul pe care va rula site-ul, datele de conectare la baza de date, si daca hostul ruleaza sau nu un certificat de securitate. Toate aceste date sunt foarte importante deoarece site-ul preia intotdeauna aceste informatii si creeaza redirectionarile necesare in functie de acestea.

**MYSQL.PHP** = Fisierul MYSQL.PHP realizeaza conexiunea propriu zisa la baza de date, folosind datele regasite anterior in fisierul 	CONFIG.PHP.

**INDEX.PHP** = Fisierul INDEX.PHP este pagina principala a site-ului, aici gasim primele semne de FRONTEND, realizat in BOOTSTRAP, dar despre FRONTEND vom vorbi mai incolo. Pe partea de BACKEND, site-ul preia din tabelul `listari` cele mai recente 12 listari si le afiseaza pe pagina principala sub headerul "Cele mai recente incarcari".

**CATEG.PHP** = Fisierul CATEG.PHP sorteaza listarile in functie de categorii, de la 1 la 6, exact ca si pe pagina CATEGORII.PHP, si le imparte pe mai multe pagini, listarile ramase goale in urma sortarii vor afisa imaginea urmatoare.

![Alt text](/assets/img/vaurma.jpg)

