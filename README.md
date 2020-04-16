# MedHelp3D

MedHelp -3D este o platforma de hosting a asset-urilor medicale 3D, pe care oricine poate incarca astfel de modele.
	
# Instalare 
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
