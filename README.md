![Alt text](/assets/img/logotext.png)

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

## Descriere Platforma (Programare)

Backend-ul a fost realizat in PHP, iar baza de date folosita a fost MySQL impreuna cu functia MySQLi din PHP.

**CONFIG.PHP** = Totul incepe in fisierul CONFIG.PHP, aici este setat hostul pe care va rula site-ul, datele de conectare la baza de date, si daca hostul ruleaza sau nu un certificat de securitate. Toate aceste date sunt foarte importante deoarece site-ul preia intotdeauna aceste informatii si creeaza redirectionarile necesare in functie de acestea.

**MYSQL.PHP** = Fisierul MYSQL.PHP realizeaza conexiunea propriu zisa la baza de date, folosind datele regasite anterior in fisierul 	CONFIG.PHP.

**INDEX.PHP** = Fisierul INDEX.PHP este pagina principala a site-ului, aici gasim primele semne de FRONTEND, realizat in BOOTSTRAP. Pe partea de BACKEND, site-ul preia din tabelul `listari` cele mai recente 12 listari si le afiseaza pe pagina principala sub headerul "Cele mai recente incarcari".

**CATEG.PHP** = Fisierul CATEG.PHP sorteaza listarile in functie de categorii, de la 1 la 6, exact ca si pe pagina CATEGORII.PHP, si le imparte pe mai multe pagini, listarile ramase goale in urma sortarii vor afisa imaginea urmatoare.

![Alt text](/assets/img/vaurma.jpg)

**SEARCH.PHP** = Fisierul SEARCH.PHP este in stransa legatura cu Search Bar-ul din fisierul NAVBAR.PHP, acesta preia termenii de cautare si cauta asemanari in baza de date urmand sa faca o sortare asemenea fisierului CATEG.PHP, respectand aceleasi reguli.

**NAVBAR.PHP** = Fisierul NAVBAR.PHP contine toate resursele necesare pentru bara de navigatie a platformei, acesta este inclus in majoritatea celorlalte fisiere si introduce odata cu el toate elementele de stilizare CSS.

**FOOTER.PHP** = Fisierul FOOTER.PHP introduce footer-ul platformei cu toate elementele sale si icon-urile sociale, iar odata cu el sunt introduse si script-urile JS necesare.

**LOGIN.PHP** = Fisierul LOGIN.PHP realizeaza in versiunea actuala doar logarea administratorilor preintrodusi in baza de date pentru a administra sectiunile disponibile, urmand ca in viitor o versiune de LOGIN sa fie realizata si pentru utilizatori.

**CONTACT.PHP** = Fisierul CONTACT.PHP introduce un formular pentru utilizatorii care doresc sa transmita ceva catre administratorii site-ului, formularul este legat la baza de date si transmite informatiile introduse de utilizator catre administratorii logati ai site-ului.

**MESAGERIE.PHP** = Fisierul MESAGERIE.PHP este disponibil doar administratorilor logati(care se afla intr-o sesiune), acesta le permite sa vada mesajele trimise si/sau sa stearga un mesaj din baza de date.

**MSGDEL.PHP** = Fisierul MSGDEL.PHP este un fisier strict BACKEND si proceseaza request-ul de stergere a administratorilor, a mesajelor din baza de date.

**LOGOUT.PHP** = Fisierul LOGOUT.PHP este tot un fisier strict BACKEND si proceseaza request-ul de delogare si distrugere a sesiunii dintre administratori si fisierul SESSION.PHP.

**SESSION.PHP** = Fisierul SESSION.PHP creeaza sesiunile dintre utilizatorii care doresc sa se logheze si server, de asemenea verifica din cand in cand daca datele oferite de utilizator corespund cu ce se afla in momentul acela in baza de date.

**HASHER.PHP** = Fisierul HASHER.PHP este folosit la introducerea manuala a administratorilor in baza de date pentru a realiza un HASH al parolei dorita de administrator.

**PROIECT.PHP** = Fisierul PROIECT.PHP preia datele de la o singura LISTARE din baza de date si creeaza o pagina a modelului impreuna cu link-ul de download aferent arhivei descrise in baza de date si afiseaza o poza a modelului.

**UPLOAD.PHP** = Fisierul UPLOAD.PHP este un fisier WORK-IN-PROGRESS care are in plan deblocarea abilitatii utilizatorului de a uploada liber modelele create de ei in baza de date si de a fi afisate. (Aproximativ 60% gata)

**CATEGORII.PHP** = Fisierul CATEGORII.PHP este un fisier strict FRONTEND care realizeaza legatura dintre utilizator si fisierul CATEG.PHP, pentru a comuta intre diferitele categorii de modele.

