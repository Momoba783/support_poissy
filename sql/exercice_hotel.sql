-- 1 - Exercice 2 : Depuis votre terminal shell, créer une base de données nommée "hotel".

-- 2 - Le modèle des tables est le suivant :
CREATE TABLE chambres(
    id INT(3) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    num_chambre INT(3),
    prix float,
    nb_lit INT,
    nb_pers INT(3),
    confort VARCHAR(255),
    equipement VARCHAR(255));

Create table clients(
    id INT(3) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    num_client INT(3),
    nom VARCHAR(200),
    prenom VARCHAR(200),
    adresse VARCHAR(150));

Create table reservations(
    id INT(3) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    num_client INT(5),
    num_chambre INT(3),
    date_arrive DATETIME,
    date_depart DATETIME);

-- 3 - Dans ces 3 tables insérer les informations suivantes:

   -- 3 a - 5 chambres numérotées de 10 en 10, prix(80,100,150,180,250), nb_lit de 1 à 3 (aléatoire), confort(wc/douche/bain/etc), equipement (tv/wifi/etc)
   INSERT INTO chambres(num_chambre, prix, nb_lit, nb_pers, confort, equipement) VALUES 
   (100, 80.00, 01,01, 'Aucun', 'TV'), 
   (110, 100.00, 01, 01, 'Douche', 'TV'), 
   (120, 150, 02, 02, 'Douche/WC', 'TV/WIFI'),
   (130, 180.00, 02, 03, 'WC/Bain', 'TV/WIFI/Frigo'), 
   (140, 250.00, 03, 04, 'WC/Bain/Jacuzzi/Massage','TV/WIFI/Frigo/Cuisine/Bar');

   -- 3 b - 5 clients avec des numéros client à 4 chiffres (0001/1001), le reste des info est à votre bon vouloir
   INSERT INTO clients(num_client, nom, prenom, adresse) VALUES 
   (0001, 'Dupont', 'Jean-Paul', '1 rue de la fossee'), 
   (0002, 'Minouch', 'Zina', '2 Bis Chemin de la traversière'), 
   (0003, 'Paris', 'Julian', 'Jsais pas ou il habite'), 
   (0004, 'Plus', 'Dinspi', 'Pour le reste des clients'), 
   (0005, 'Le Dernier', 'Enfin', '5 cest encore trop');

   -- 3 c - 5 reservations date arbitraire.
   INSERT INTO reservations(num_client, num_chambre, date_arrive, date_depart) VALUES 
   (1001, 100, '2018-09-19 19:36:23', '2018-09-20 19:36:23'), 
   (1002, 110, '2018-08-19 12:00:54', '2018-09-21 12:00:54'), 
   (1003, 120, '2018-08-19 15:55:03', '2018-09-23 15:55:03'), 
   (1004, 130, '2018-08-19 22:59:13', '2018-08-20 22:59:13'), 
   (1005, 140, '2018-08-19 11:55:41', '2018-09-20 11:55:41'),
   (1003, 100, '2018-08-19 11:55:41', NULL);

   -- Le prix par personne des chambre avec TV
   SELECT ROUND(prix/nb_pers) FROM chambres WHERE equipement LIKE '%tv%';
+---------------------+
| ROUND(prix/nb_pers) |
+---------------------+
|                  80 |
|                 100 |
|                  75 |
|                  60 |
|                  62 |
+---------------------+
   -- Les numéros de chambres avec TV
   SELECT num_chambre FROM chambres WHERE equipement LIKE 'TV%';
+-------------+
| num_chambre |
+-------------+
|         100 |
|         110 |
|         120 |
|         130 |
|         140 |
   -- Les numéros de chambres et leur capacités
   SELECT num_chambre, nb_pers FROM chambres;
+-------------+---------+
| num_chambre | nb_pers |
+-------------+---------+
|         100 |       1 |
|         110 |       1 |
|         120 |       2 |
|         130 |       3 |
|         140 |       4 |
+-------------+---------+
   -- La capacité théorique d'accueil de l'hotel
   SELECT SUM(nb_pers) FROM chambres;
+--------------+
| SUM(nb_pers) |
+--------------+
|           11 |
+--------------+
   -- Les numéros des chambres et le numéro des clients ayant réservé des chambres pour le 2018-08-19 11:55:41
   SELECT num_chambre, num_client FROM reservations WHERE date_arrive = '2018-08-19 11:55:41';
+-------------+------------+
| num_chambre | num_client |
+-------------+------------+
|         140 |       1005 |
+-------------+------------+
   -- Les numéros des chambres coûtant au maximum 80€ ou ayant un bain et vallant au maximum 190€
   SELECT num_chambre, prix FROM chambres WHERE confort LIKE '%bain%' AND prix BETWEEN 80 AND 190;
+-------------+------+
| num_chambre | prix |
+-------------+------+
|         130 |  180 |
+-------------+------+
   -- Les noms, prénoms et adresses des clients dont le nom commence par 'D'
   SELECT nom, prenom, adresse FROM clients WHERE nom LIKE 'D%';
+--------+-----------+--------------------+
| nom    | prenom    | adresse            |
+--------+-----------+--------------------+
| Dupont | Jean-Paul | 1 rue de la fossee |
+--------+-----------+--------------------+
   -- Le nombre de chambres dont le prix est entre 85€ et 120 €
   SELECT COUNT(num_chambre) FROM chambres WHERE prix BETWEEN 85 AND 120;
+--------------------+
| COUNT(num_chambre) |
+--------------------+
|                  1 |
+--------------------+
   -- Les noms des clients n'ayant pas fixé la date de départ
   SELECT nom FROM clients AS c, reservations AS r WHERE date_depart IS NULL AND c.num_client = r.num_client;