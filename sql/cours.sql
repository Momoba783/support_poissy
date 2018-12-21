-- Une base de données (Database en anglais) est utile dans le cadre d'un projet informatique pour conserver des informations en mémoire. 
-- A l'intérieur de la BDD, les informations sont classées, structurées et regroupées généralement par sujet. Dans la grande majorité des cas, une BDD est gérée par un logiciel moteur qui la manipule : un SGBD (système de gestion de base de données).

-- MCD = Modèle Conceptuel de Données.
-- le modèle conceptuel de données nous permet de nous fournir un plan de notre BDD avant de la créer.

-- SGBD = Système de Gestion de Base de Données
-- Le SGBD permet d'accueillir, d'exploiter et de faire fonctionner les BDD (moteur).
-- Nous utiliserons Mysql (d'autre SGBD existe : Oracle, Sql server, PostgreSQL, etc...).

-- BDD = Base De Données
-- La base de données représente l'emplacement des données sauvegardées.

-- SQL = Structured Query Langage
-- Le langage de requête SQL nour permet d'échanger des informations avec la BDD.
-- Une fois que les informations ont été enregistrées, il est important de pouvoir les gérer (ajout, modification, suppression, consultation).
-- /!\ Toutes ces actions de gestion et de manipulation passeront par une requête SQL.

-- MODELE MCD
-- Avant de créer une BDD, il est essentiel de se poser et de réfléchir sur la modélisation.
-- En effet, une base de données va servir de support à une application informatique.
-- Comment modéliser une BDD ?
-- Nous pouvons modéliser sur papier si celle-ci n'est pas complexe mais dans la plupart des cas nous aurons besoin d'un logiciel pour nous accompagner et avoir une vue d'ensemble.
-- Un logiciel connu permet de modéliser une BDD: Mysql WorkBench

-- La modélisation se compose de différentes tables (table = sujet)
-- Exemple, si nous vendons des produits sur notre site, nous aurons 1 table produits et 1 table commandes.

-- LES TABLES
-- 1 sujet représente 1 table dans une BDD. 1 table est un emplacement de sauvegarde.
-- Il faut réfléchir au sujet et à ses conséquences. Si nous vendons des produits, nous aurons certainement des membres. 1 table membre sera donc nécessaire.

--LES TYPES DE COLONNES /  CHAMPS
-- VARCHAR  --> Chaine de caractères pouvant aller jusqu'à 256 --> pour enregistrer un pseudo, un email, titre produit ou d'un article de blog, etc...
-- TEXT --> Chaine de caractères illimitée --> pour enregistrer le texte d'un article de blog.
-- INT --> Numérique --> permet d'enregistrer les numéros d'un champs servant d'identifiant, un prix, un code postal, le nombre de produit enn stock, etc...
-- DATE --> DATE --> permet d'enregistrer la date d'enregistrement d'une commande, d'un article de blog, etc...

-- Les identifiants (clé Primaire - PK primay Key)
-- Les identifiants sont des champs systématiquement présent dans chaque table et ce en PREMIERE POSITION ------>>> clé primaire (PK)
-- Pour éviter de choisir le numéro et faire des erreurs nous demanderons à le générer automatiquement avec l'Auto-Increment.

--AUTO-INCREMENT
-- est une option permettant de générer un numéro unique dans une colonne (champ) de type de clé primaire (identifiant).
-- /!\ le 1er champ de chaque table sera systématiquement un "id" qui sera PK (Primary Key) et AI (Auto-Increment). 

-- NULL / NOT NULL
-- Dans chaque champ nous pourrons indiquer si nous acceptons les valeurs NULL ou non (NOT NULL)
-- NULL est un type de valeur en informatique évitant de laisser un champ vide si nous n'avons pas d'information à y déposer.

-- LES RELATIONS
--Exemple, 1 membre commande 1 produit (ou 1 produit est commandé par 1 membre)
-- Nous devrons enregistrer l'information dans 1 table commande
-- Pour cela, intéressons nous aux cardinalités !!!

-- LES CARDINALITES
-- Permettent de connaitre le chiffre minimum et maximum d'enregistrement pour une relation.

-- TABLE DE JOINTURE
-- Une table de jointure permet de faire le lien entre 2 tables.
-- Exemple, société de taxi qui possederait des conducteurs (table conducteur) et des véhicules (table véhicule).
-- 1 conducteur peut conduire 0 ou plusieurs véhicules
-- relation (0,n)
-- 1 véhicule peut être conduit par 0 ou plusieurs conducteurs
-- relation (0,n)
-- Comment savoir quel conducteur conduit quel véhicule ? Ou dans l'autre sens : quel véhicule est conduit par quel conducteur ?
-- une table de jointure nomée : conducteur_vehicule sera donc créée avec les champs suivants --> id_conducteur_vehicule + id_conducteur + id_vehicule

-- LES REQUETES
-- Comment formuler une requête SQL ? --> Formulation --> Exécution --> Résultat
-- Il y a 4 grands types de requêtes possibles :
-- 1- requête de selection
    -- (requête question/réponse, nous faisons une demande via une question et nous obtenons une réponse)
-- 2- requête d'insertion
    -- (requête d'action, impact sur les données)
-- 3- requête de modification
    -- (requête d'action, impact sur les données)
-- 4- requête de suppression 
    -- (requête d'action, impact sur les données)

--CONNEXION AVEC SHELL -->> mysql -u root -p

-- CREATION DE MA TABLE EMPLOYES
CREATE TABLE IF NOT EXISTS employes (
 id_employes int(3) NOT NULL AUTO_INCREMENT,
 prenom varchar(20) DEFAULT NULL,
 nom varchar(20) DEFAULT NULL,
 sexe enum('m','f') NOT NULL,
 service varchar(30) DEFAULT NULL,
 date_embauche date DEFAULT NULL,
 salaire float DEFAULT NULL,
 PRIMARY KEY (id_employes)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO employes (id_employes, prenom, nom, sexe, service, date_embauche, salaire) VALUES
(350, 'Jean-pierre', 'Laborde', 'm', 'direction', '1999-12-09', 5000),
(388, 'Clement', 'Gallet', 'm', 'commercial', '2000-01-15', 2300),
(415, 'Thomas', 'Winter', 'm', 'commercial', '2000-05-03', 3550),
(417, 'Chloe', 'Dubar', 'f', 'production', '2001-09-05', 1900),
(491, 'Elodie', 'Fellier', 'f', 'secretariat', '2002-02-22', 1600),
(509, 'Fabrice', 'Grand', 'm', 'comptabilite', '2003-02-20', 1900),
(547, 'Melanie', 'Collier', 'f', 'commercial', '2004-09-08', 3100),
(592, 'Laura', 'Blanchet', 'f', 'direction', '2005-06-09', 4500),
(627, 'Guillaume', 'Miller', 'm', 'commercial', '2006-07-02', 1900),
(655, 'Celine', 'Perrin', 'f', 'commercial', '2006-09-10', 2700),
(699, 'Julien', 'Cottet', 'm', 'secretariat', '2007-01-18', 1390),
(701, 'Mathieu', 'Vignal', 'm', 'informatique', '2008-12-03', 2000),
(739, 'Thierry', 'Desprez', 'm', 'secretariat', '2009-11-17', 1500),
(780, 'Amandine', 'Thoyer', 'f', 'communication', '2010-01-23', 1500),
(802, 'Damien', 'Durand', 'm', 'informatique', '2010-07-05', 2250),
(854, 'Daniel', 'Chevel', 'm', 'informatique', '2011-09-28', 1700),
(876, 'Nathalie', 'Martin', 'f', 'juridique', '2012-01-12', 3200),
(900, 'Benoit', 'Lagarde', 'm', 'production', '2013-01-03', 2550),
(933, 'Emilie', 'Sennard', 'f', 'commercial', '2014-09-11', 1800),
(990, 'Stephanie', 'Lafaye', 'f', 'assistant', '2015-06-02', 1775);


-- Créer une base de données.
-- CREATE DATABASE [nomdelabase];

-- Utiliser une base de données
-- USE [nomdela base];

-- Lister les bases de données
-- SHOW DATABASES;

-- Supprimer une BDD
-- DROP [nomdelaBDD];

-- Supprimer une table
-- DROP [nomdelatable];

-- Vider le contenu d'une table d'une base de données
-- TRUNCATE [nomdelatable];

-- Observer la structure d'une table
-- DESC [nomdelatable];

-- Afficher une information dans ma table
-- SELECT nomduchampdelatable FROM nomdelatable;

--Afficher les services occupés dans l'entreprise en évitant les doubles
-- SELECT DISTINCT(nomduchampdelatable) FROM nomdelatable;

-- Afficher toutes les informations d'une table
-- SELECT * FROM nomdelatable;

-- Afficher une information précise
--MariaDB [entreprise]> SELECT nom, prenom FROM employes WHERE service="informatique";
+--------+---------+
| nom    | prenom  |
+--------+---------+
| Vignal | Mathieu |
+--------+---------+


-- MariaDB [entreprise]> SELECT nom, prenom, data_embauche FROM employes WHERE data_embauche BETWEEN '2006-09-15' AND '2009-11-05';
+--------+---------+---------------+
| nom    | prenom  | data_embauche |
+--------+---------+---------------+
| Perrin | Celine  | 2006-09-15    |
| Vignal | Mathieu | 2008-11-17    |
| Deprez | Thierry | 2009-11-05    |
+--------+---------+---------------+


-- MariaDB [entreprise]> SELECT nom, prenom, data_embauche FROM employes WHERE data_embauche BETWEEN '2006-01-01' AND CURDATE();
+----------+-----------+---------------+
| nom      | prenom    | data_embauche |
+----------+-----------+---------------+
| Perrin   | Celine    | 2006-09-15    |
| Vignal   | Mathieu   | 2008-11-17    |
| Deprez   | Thierry   | 2009-11-05    |
| Lagarde  | Benoit    | 2013-01-03    |
| Sennard  | Emilie    | 2014-09-11    |
| Lafaye   | Stéphanie | 2015-06-02    |
| Jaadar   | Houda     | 2016-05-26    |
| Herisson | Sandra    | 2017-08-11    |
| Igoudgil | Idir      | 2018-12-12    |
+----------+-----------+---------------+



-- MariaDB [entreprise]> SELECT prenom FROM employes WHERE prenom LIKE "C%";
+---------+
| prenom  |
+---------+
| Clement |
| Chloe   |
| Celine  |
+---------+
-- Explication
-- LIKE permet d'annoncer une valeur approchante sans avoir autant la valeur exacte.
-- Le signe % nous permet d'annoncer une suite de caractères quelconques.
-- Dans notre cas, 'C%' veut dire qui commence par la lettre C.
-- Nous aurions également pu inscrire '%c' qui veut dire se terminant par la lettre C.

-- MariaDB [entreprise]> SELECT prenom FROM employes WHERE prenom LIKE "%E";
+-------------+
| prenom      |
+-------------+
| Jean-pierre |
| Chloe       |
| Elodie      |
| Celine      |
| Emilie      |
| Stéphanie   |
+-------------+

-- MariaDB [entreprise]> SELECT prenom FROM employes WHERE prenom LIKE "%-%";
+-------------+
| prenom      |
+-------------+
| Jean-pierre |
+-------------+


-- OPERATEURS DE COMPARAISONS
-- = 'est egal';
-- > 'strictement supérieur';
-- < 'strictement inférieur';
-- >= 'supérieur ou egal';
-- >= 'inférieur ou egal';
-- <> ou != 'est différent';

-- MariaDB [entreprise]> SELECT * FROM employes WHERE service!='informatique';
+-------------+-------------+----------+------+-----------------------+---------------+---------+
| id_employes | prenom      | nom      | sexe | service               | data_embauche | salaire |
+-------------+-------------+----------+------+-----------------------+---------------+---------+
|         350 | Jean-pierre | Laborde  | m    | direction             | 1999-12-09    |    5000 |
|         388 | Clement     | Gallet   | m    | commercial            | 2000-01-15    |    2300 |
|         415 | Thomas      | Winter   | m    | commercial            | 2000-05-03    |    3350 |
|         417 | Chloe       | Dubar    | f    | production            | 2001-09-05    |    1900 |
|         491 | Elodie      | Fellier  | f    | secrétariat           | 2002-02-22    |    1600 |
|         509 | Celine      | Perrin   | f    | commerciale           | 2006-09-15    |    2700 |
|         739 | Thierry     | Deprez   | m    | secretariat           | 2009-11-05    |    1900 |
|         900 | Benoit      | Lagarde  | m    | production            | 2013-01-03    |    2500 |
|         933 | Emilie      | Sennard  | f    | commercial            | 2014-09-11    |    1800 |
|         990 | Stéphanie   | Lafaye   | f    | assistant             | 2015-06-02    |    1775 |
|         992 | Houda       | Jaadar   | f    | Formatrice            | 2016-05-26    |    1500 |
|         999 | Sandra      | Herisson | f    | Assistante formatrice | 2017-08-11    |    1300 |
|        1000 | Idir        | Igoudgil | m    | coordinateur          | 2018-12-12    |    5000 |
+-------------+-------------+----------+------+-----------------------+---------------+---------+


-- MariaDB [entreprise]> SELECT * FROM employes WHERE salaire >=3000;
+-------------+-------------+----------+------+--------------+---------------+---------+
| id_employes | prenom      | nom      | sexe | service      | data_embauche | salaire |
+-------------+-------------+----------+------+--------------+---------------+---------+
|         350 | Jean-pierre | Laborde  | m    | direction    | 1999-12-09    |    5000 |
|         415 | Thomas      | Winter   | m    | commercial   | 2000-05-03    |    3350 |
|        1000 | Idir        | Igoudgil | m    | coordinateur | 2018-12-12    |    5000 |
+-------------+-------------+----------+------+--------------+---------------+---------+


-- MariaDB [entreprise]> SELECT prenom FROM employes ORDER BY prenom;
-- MariaDB [entreprise]> SELECT prenom FROM employes ORDER BY prenom ASC;
-- MariaDB [entreprise]> SELECT prenom FROM employes ORDER BY prenom DESC;
+-------------+
| prenom      |
+-------------+
| Benoit      |
| Celine      |
| Chloe       |
| Clement     |
| Elodie      |
| Emilie      |
| Houda       |
| Idir        |
| Jean-pierre |
| Mathieu     |
| Sandra      |
| Stéphanie   |
| Thierry     |
| Thomas      |
+-------------+

-- SELECT * FROM employes ORDER BY salaire DESC LIMIT 0,3;
+-------------+-------------+----------+------+--------------+---------------+---------+
| id_employes | prenom      | nom      | sexe | service      | data_embauche | salaire |
+-------------+-------------+----------+------+--------------+---------------+---------+
|         350 | Jean-pierre | Laborde  | m    | direction    | 1999-12-09    |    5000 |
|        1000 | Idir        | Igoudgil | m    | coordinateur | 2018-12-12    |    5000 |
|         415 | Thomas      | Winter   | m    | commercial   | 2000-05-03    |    3350 |
+-------------+-------------+----------+------+--------------+---------------+---------+

-- SELECT * FROM employes ORDER BY salaire DESC LIMIT 3,3;
+-------------+---------+---------+------+-------------+---------------+---------+
| id_employes | prenom  | nom     | sexe | service     | data_embauche | salaire |
+-------------+---------+---------+------+-------------+---------------+---------+
|         509 | Celine  | Perrin  | f    | commerciale | 2006-09-15    |    2700 |
|         900 | Benoit  | Lagarde | m    | production  | 2013-01-03    |    2500 |
|         388 | Clement | Gallet  | m    | commercial  | 2000-01-15    |    2300 |
+-------------+---------+---------+------+-------------+---------------+---------+

-- LIMIT permet de limiter l'affichage. 

-- CALCUL DANS NOS REQUETES
-- afficher le salaire annuel de chaque employes
-- SELECT nom, prenom, salaire*12 FROM employes;
+----------+-------------+------------+
| nom      | prenom      | salaire*12 |
+----------+-------------+------------+
| Laborde  | Jean-pierre |      60000 |
| Gallet   | Clement     |      27600 |
| Winter   | Thomas      |      40200 |
| Dubar    | Chloe       |      22800 |
| Fellier  | Elodie      |      19200 |
| Perrin   | Celine      |      32400 |
| Vignal   | Mathieu     |      18000 |
| Deprez   | Thierry     |      22800 |
| Lagarde  | Benoit      |      30000 |
| Sennard  | Emilie      |      21600 |
| Lafaye   | Stéphanie   |      21300 |
| Jaadar   | Houda       |      18000 |
| Herisson | Sandra      |      15600 |
| Igoudgil | Idir        |      60000 |
+----------+-------------+------------+


-- SELECT nom, prenom, salaire*12 AS salaire_annuel FROM employes;
+----------+-------------+----------------+
| nom      | prenom      | salaire_annuel |
+----------+-------------+----------------+
| Laborde  | Jean-pierre |          60000 |
| Gallet   | Clement     |          27600 |
| Winter   | Thomas      |          40200 |
| Dubar    | Chloe       |          22800 |
| Fellier  | Elodie      |          19200 |
| Perrin   | Celine      |          32400 |
| Vignal   | Mathieu     |          18000 |
| Deprez   | Thierry     |          22800 |
| Lagarde  | Benoit      |          30000 |
| Sennard  | Emilie      |          21600 |
| Lafaye   | Stéphanie   |          21300 |
| Jaadar   | Houda       |          18000 |
| Herisson | Sandra      |          15600 |
| Igoudgil | Idir        |          60000 |
+----------+-------------+----------------+


--  SELECT SUM(salaire*12) FROM employes;
+-----------------+
| SUM(salaire*12) |
+-----------------+
|          409500 |
+-----------------+


-- SELECT AVG(salaire) FROM employes;
+--------------+
| AVG(salaire) |
+--------------+
|       2437.5 |
+--------------+
-- AVG est une fonction prédéfinie prenant comme argument (entre parenthèses) le nom de la colonne sur laquelle nous souhaitons calculer une moyenne.

-- SELECT ROUND(AVG(salaire)) FROM employes;
+---------------------+
| ROUND(AVG(salaire)) |
+---------------------+
|                2438 |
+---------------------+
-- ROUND est une fonction prédifinie prenant comme argument (entre parenthèses) le nombre à arrondir.

-- COUNT
--  SELECT COUNT(*) AS nombre_femmes FROM employes WHERE sexe='f';
+---------------+
| nombre_femmes |
+---------------+
|             7 |
+---------------+


-- ISOLER UNE VALEUR MINIMUM OU MAXIMUM AVEC MIN / MAX

-- MariaDB [entreprise]> SELECT MAX(salaire) FROM employes;
+--------------+
| MAX(salaire) |
+--------------+
|         5000 |
+--------------+

-- MariaDB [entreprise]> SELECT MIN(salaire) FROM employes;
+--------------+
| MIN(salaire) |
+--------------+
|         1300 |
+--------------+


-- SELECT * FROM employes WHERE service='production' AND salaire = 1900 OR salaire = 2300;
+-------------+---------+--------+------+------------+---------------+---------+
| id_employes | prenom  | nom    | sexe | service    | data_embauche | salaire |
+-------------+---------+--------+------+------------+---------------+---------+
|         388 | Clement | Gallet | m    | commercial | 2000-01-15    |    2300 |
|         417 | Chloe   | Dubar  | f    | production | 2001-09-05    |    1900 |
+-------------+---------+--------+------+------------+---------------+---------+

-- SELECT * FROM employes WHERE service='production' AND (salaire = 1900 OR salaire = 2300);
+-------------+--------+-------+------+------------+---------------+---------+
| id_employes | prenom | nom   | sexe | service    | data_embauche | salaire |
+-------------+--------+-------+------+------------+---------------+---------+
|         417 | Chloe  | Dubar | f    | production | 2001-09-05    |    1900 |
+-------------+--------+-------+------+------------+---------------+---------+


-- SELECT service, COUNT(*) AS nombre FROM employes GROUP BY service;
+-----------------------+--------+
| service               | nombre |
+-----------------------+--------+
| assistant             |      1 |
| Assistante formatrice |      1 |
| commercial            |      3 |
| commerciale           |      1 |
| coordinateur          |      1 |
| direction             |      1 |
| Formatrice            |      1 |
| informatique          |      1 |
| production            |      2 |
| secrétariat           |      2 |
+-----------------------+--------+


-- SELECT service, COUNT(*) AS nombre FROM employes GROUP BY service HAVING COUNT(*) >=3;
+------------+--------+
| service    | nombre |
+------------+--------+
| commercial |      3 |
+------------+--------+



-- REQUETE INSERTION
INSERT INTO employes (prenom, nom, sexe, service, data_embauche, salaire) VALUES('Julie', 'Masclaux', 'f', 'informatique', '2018-10-02', 8750);

INSERT INTO employes VALUES ('', 'Sonia', 'Boubou', 'f', 'informatique', '2018-09-14', 8500);

-- UPDATE employes SET salaire=8500 + 250 WHERE prenom='Sonia';
-- Query OK, 1 row affected (0.01 sec)
-- Rows matched: 1  Changed: 1  Warnings: 0

--  SELECT * FROM employes;
+-------------+-------------+----------+------+-----------------------+---------------+---------+
| id_employes | prenom      | nom      | sexe | service               | data_embauche | salaire |
+-------------+-------------+----------+------+-----------------------+---------------+---------+
|         350 | Jean-pierre | Laborde  | m    | direction             | 1999-12-09    |    5000 |
|         388 | Clement     | Gallet   | m    | commercial            | 2000-01-15    |    2300 |
|         415 | Thomas      | Winter   | m    | commercial            | 2000-05-03    |    3350 |
|         417 | Chloe       | Dubar    | f    | production            | 2001-09-05    |    1900 |
|         491 | Elodie      | Fellier  | f    | secrétariat           | 2002-02-22    |    1600 |
|         509 | Celine      | Perrin   | f    | commerciale           | 2006-09-15    |    2700 |
|         690 | Mathieu     | Vignal   | m    | informatique          | 2008-11-17    |    1500 |
|         739 | Thierry     | Deprez   | m    | secretariat           | 2009-11-05    |    1900 |
|         900 | Benoit      | Lagarde  | m    | production            | 2013-01-03    |    2500 |
|         933 | Emilie      | Sennard  | f    | commercial            | 2014-09-11    |    1800 |
|         990 | Stéphanie   | Lafaye   | f    | assistant             | 2015-06-02    |    1775 |
|         992 | Houda       | Jaadar   | f    | Formatrice            | 2016-05-26    |    1500 |
|         999 | Sandra      | Herisson | f    | Assistante formatrice | 2017-08-11    |    1300 |
|        1000 | Idir        | Igoudgil | m    | coordinateur          | 2018-12-12    |    5000 |
|        1001 | Julie       | Masclaux | f    | informatique          | 2018-10-02    |    8750 |
|        1002 | Sonia       | Boubou   | f    | informatique          | 2018-09-14    |    8750 |
+-------------+-------------+----------+------+-----------------------+---------------+---------+


-- delete from employes where id_employes= 1000;
-- Query OK, 1 row affected (0.01 sec)

-- delete from employes where service ='secrétariat';
-- Query OK, 2 rows affected (0.01 sec)

--MEMO sur les requetes de selection
-- SELECT / FROM / DISTINCT / WHERE / BETWEEN / CURDATE / LIKE / % / OPERATEUR DE COMPARAISON / ORDER BY / ASC / DESC / LIMIT / AS pour l'alias / SUM / AVG / ROUND / COUNT / MIN / MAX / IN / NOT IN / CONDITION MULTIPLE / HAVING /

-- MEMO SUR LES REQUETES DE SELECTION INSERT
   -- INSERT IN ...... VALUES

-- MEMO SUR LES REQUETES DE SELECTION DELETE
   -- DELETE FROM ..... WHERE .....

-- EXERCICE --
-- Afficher la profession de l'employé 547
SELECT service FROM employes WHERE id_employes=547;
+------------+
| service    |
+------------+
| commercial |
+------------+
-- Afficher la date d'embauche de : Amandine
SELECT date_embauche FROM employes WHERE prenom='amandine';
+---------------+
| date_embauche |
+---------------+
| 2010-01-23    |
+---------------+
-- Afficher le nombre de commerciaux
SELECT COUNT(service) FROM employes WHERE service='commercial';
+----------------+
| COUNT(service) |
+----------------+
|              6 |
+----------------+
-- Afficher le coût des commerciaux sur 1 année
SELECT SUM(salaire*12) FROM employes WHERE service='commercial';
+-----------------+
| SUM(salaire*12) |
+-----------------+
|          184200 |
+-----------------+
-- Afficher le salaire moyen par service
SELECT service, ROUND(AVG(salaire)) FROM employes GROUP BY service;
+---------------+---------------------+
| service       | ROUND(AVG(salaire)) |
+---------------+---------------------+
| assistant     |                1875 |
| commercial    |                2658 |
| communication |                1600 |
| comptabilite  |                2000 |
| direction     |                4850 |
| informatique  |                2083 |
| juridique     |                3300 |
| production    |                2325 |
| secretariat   |                1597 |
+---------------+---------------------+
-- Afficher le nombre de recrutements sur l'année 2010
SELECT COUNT(*) as 'nb recrutement' FROM employes WHERE date_embauche BETWEEN '2010-01-01' AND '2010-12-31';
SELECT COUNT(*) as 'nb recrutement' FROM employes WHERE date_embauche LIKE '2010%';
SELECT COUNT(*) as 'nb recrutement' FROM employes WHERE date_embauche >= '2010-01-01' AND date_embauche <= '2010-12-31';
+----------------+
| nb recrutement |
+----------------+
|              2 |
+----------------+
-- Augmenter le salaire de chaque employes de 100€
UPDATE employes SET salaire = salaire + 100;
-- Afficher le nombre de services différents
SELECT COUNT(DISTINCT service) FROM employes;
+--------------------------+
| COUNT(DISTINCT(service)) |
+--------------------------+
|                        9 |
+--------------------------+
-- Afficher les informations de l'employe du service commercial gagnant le salaire le plus élevé
SELECT prenom, salaire FROM employes WHERE service='commercial' AND salaire = (select max(salaire)from employes where service='commercial');
+--------+---------+
| prenom | salaire |
+--------+---------+
| Thomas |    3650 |
+--------+---------+
-- Afficher l'employé ayant été embauché en dernier.
SELECT * FROM employes WHERE date_embauche = (select max(date_embauche) from employes);
+-------------+-----------+--------+------+-----------+---------------+---------+
| id_employes | prenom    | nom    | sexe | service   | date_embauche | salaire |
+-------------+-----------+--------+------+-----------+---------------+---------+
|         990 | Stephanie | Lafaye | f    | assistant | 2015-06-02    |    1875 |
+-------------+-----------+--------+------+-----------+---------------+---------+ 


-- EXERCICE REQUETES IMBRIQUEES
-- créer 3 tables pour une bdd bibliotheque, modeliser le tout
livre emprunt abonné

CREATE TABLE livre (
    id_livre INT (3) NOT NULL AUTO_INCREMENT,
    titre VARCHAR (20) NOT NULL,
    sujet VARCHAR (20) NOT NULL,
    auteur VARCHAR (20) NOT NULL,
    PRIMARY KEY (id_livre)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO livre (id_livre, titre, sujet, auteur) VALUES
(10, 'Autre Monde', 'Fantastique', 'Maxime Chattam'),
(20, 'Eragon', 'Fantastique', 'Christopher Paolini'),
(30, 'Un homme debout', 'Developpement de soi', 'Franck Lopvet');

CREATE TABLE abonne (
    id_abonne INT (3) NOT NULL AUTO_INCREMENT,
    nom VARCHAR (20) NOT NULL,
    prenom VARCHAR (20) NOT NULL,
    PRIMARY KEY (id_abonne)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 ;

INSERT INTO abonne (id_abonne, nom, prenom) VALUES
(1, 'Duflan', 'Pierre'),
(2, 'Dupont', 'Paul'),
(3, 'Duquai', 'Jack'),
(4, 'Durant', 'Laura');

CREATE TABLE emprunt (
 id_emprunt INT(3) NOT NULL AUTO_INCREMENT,
 id_livre INT(3) DEFAULT NULL,
 id_abonne INT(3) DEFAULT NULL,
 date_sortie DATE NOT NULL,
 date_rendu DATE DEFAULT NULL,
 PRIMARY KEY  (id_emprunt)
) ENGINE=InnoDB ;

INSERT INTO emprunt (id_emprunt, id_livre, id_abonne, date_sortie, date_rendu) VALUES
(1, 10, 1, '2014-12-17', '2014-12-18'),
(2, 20, 2, '2014-12-18', '2014-12-20'),
(3, 10, 3, '2014-12-19', '2014-12-22'),
(4, 30, 4, '2014-12-19', '2014-12-22'),
(5, 20, 1, '2014-12-19', '2014-12-28'),
(6, 30, 2, '2015-03-20', '2015-03-26'),
(7, 30, 3, '2015-06-13', NULL),
(8, 10, 2, '2015-06-15', NULL);


SELECT * FROM emprunt WHERE date_rendu is null;
+------------+----------+-----------+-------------+------------+
| id_emprunt | id_livre | id_abonne | date_sortie | date_rendu |
+------------+----------+-----------+-------------+------------+
|          7 |       30 |         3 | 2015-06-13  | NULL       |
|          8 |       10 |         2 | 2015-06-15  | NULL       |
+------------+----------+-----------+-------------+------------+

SELECT id_livre FROM emprunt WHERE id_abonne=4;
+----------+
| id_livre |
+----------+
|       30 |
+----------+

select prenom from abonne where id_abonne in(3);
+--------+
| prenom |
+--------+
| Jack   |
+--------+

select COUNT(*) as 'nombre' from emprunt where id_abonne = (select id_abonne from abonne where prenom='pierre');
+--------+
| nombre |
+--------+
|      2 |
+--------+


-- LES JOINTURES SQL
  -- Tout comme les requêtes imbriquées, les jointures SQL permettent d'effectuer des requêtes sur plusieurs tables.
  -- L'avantage des jointures est que l'on peut obtenir dans le résultat final des colonnes / champ issue de plusieurs tables différentes.

  CREATE DATABASE IF NOT EXISTS  bibliotheque ;
  USE bibliotheque ;
  
  CREATE TABLE abonne (
 id_abonne INT(3) NOT NULL AUTO_INCREMENT,
 prenom VARCHAR(20) NOT NULL,
 PRIMARY KEY (id_abonne)
) ENGINE=InnoDB ;

CREATE TABLE emprunt (
 id_emprunt INT(3) NOT NULL AUTO_INCREMENT,
 id_livre INT(3) DEFAULT NULL,
 id_abonne INT(3) DEFAULT NULL,
 date_sortie DATE NOT NULL,
 date_rendu DATE DEFAULT NULL,
 PRIMARY KEY  (id_emprunt)
) ENGINE=InnoDB ;

CREATE TABLE livre (
 id_livre INT(3) NOT NULL AUTO_INCREMENT,
 auteur VARCHAR(30) NOT NULL,
 titre VARCHAR(30) NOT NULL,
 PRIMARY KEY (id_livre)
) ENGINE=InnoDB ;

INSERT INTO abonne (id_abonne, prenom) VALUES
(1, 'Guillaume'),
(2, 'Benoit'),
(3, 'Chloe'),
(4, 'Laura');
INSERT INTO livre (id_livre, auteur, titre) VALUES
(100, 'GUY DE MAUPASSANT', 'Une vie'),
(101, 'GUY DE MAUPASSANT', 'Bel-Ami '),
(102, 'HONORE DE BALZAC', 'Le père Goriot'),
(103, 'ALPHONSE DAUDET', 'Le Petit chose'),
(104, 'ALEXANDRE DUMAS', 'La Reine Margot'),
(105, 'ALEXANDRE DUMAS', 'Les Trois Mousquetaires');
INSERT INTO emprunt (id_emprunt, id_livre, id_abonne, date_sortie, date_rendu) VALUES
(1, 100, 1, '2014-12-17', '2014-12-18'),
(2, 101, 2, '2014-12-18', '2014-12-20'),
(3, 100, 3, '2014-12-19', '2014-12-22'),
(4, 103, 4, '2014-12-19', '2014-12-22'),
(5, 104, 1, '2014-12-19', '2014-12-28'),
(6, 105, 2, '2015-03-20', '2015-03-26'),
(7, 105, 3, '2015-06-13', NULL),
(8, 100, 2, '2015-06-15', NULL);



select a.prenom, e.date_sortie, e.date_rendu
FROM abonne a, emprunt e
WHERE a.id_abonne=e.id_abonne
AND a.prenom="guillaume";
+-----------+-------------+------------+
| prenom    | date_sortie | date_rendu |
+-----------+-------------+------------+
| Guillaume | 2014-12-17  | 2014-12-18 |
| Guillaume | 2014-12-19  | 2014-12-28 |
+-----------+-------------+------------+
SELECT date_sortie, date_rendu FROM emprunt WHERE id_abonne = (select id_abonne from abonne where prenom='guillaume');
+-------------+------------+
| date_sortie | date_rendu |
+-------------+------------+
| 2014-12-17  | 2014-12-18 |
| 2014-12-19  | 2014-12-28 |
+-------------+------------+

-- //!\\
-- Imbriquée = limitée / Jointure = illimitée.
-- On utilise quand meme la requete imbriquée si on vise uniquement des colonnes d'une seule table dans le résultat final (plus optimisé).

SELECT e.date_sortie, e.date_rendu
FROM emprunt e, livre l
WHERE l.id_livre = e.id_livre
AND l.auteur = 'Alphonse Daudet';
+-------------+------------+
| date_sortie | date_rendu |
+-------------+------------+
| 2014-12-19  | 2014-12-22 |
+-------------+------------+
SELECT date_sortie, date_rendu FROM emprunt WHERE id_livre = (select id_livre from livre where auteur="Alphonse Daudet");
+-------------+------------+
| date_sortie | date_rendu |
+-------------+------------+
| 2014-12-19  | 2014-12-22 |
+-------------+------------+


-- Qui a emprunté le livre 'Une Vie' sur l'année 2014 ?

SELECT a.prenom
FROM abonne a, emprunt e, livre l
WHERE l.id_livre = e.id_livre
AND e.id_abonne = a.id_abonne
AND l.titre = 'Une vie'
AND e.date_sortie LIKE '2014%';
+-----------+
| prenom    |
+-----------+
| Guillaume |
| Chloe     |
+-----------+

--Ligne 1 - SELECT - Nous selectionnons les champs que nous souhaitons obtenir dans le résultat : prenom (nous utilisons des préfixes)

--Ligne 2 - FROM - Nous annonçons les tables dont nous aurons besoin pour réussir notre requête, dans notre cas : abonne, livre, emprunt. (nous définissons les préfixes)

--Ligne 3 - WHERE - La condition WHERE permet d'assurer le croisement des données entre la table livre et la table emprunt. Nous passons par notre champ commun id_livre.

--Ligne 4 - AND - La condition AND permet également d'effectuer une jointure, cette fois-ci entre la table abonne et la table emprunt. Nous passons par notre champ commun id_abonne.

--Ligne 5 - AND - La condition AND permet de cibler le livre ayant pour titre "Une vie" (conformément à la demande de départ).

--Ligne 6 - AND - La condition AND permet de cibler la date de sortie à l'année 2014 (conformément à la demande de départ).

SELECT prenom FROM abonne WHERE id_abonne IN(SELECT id_abonne FROM emprunt WHERE date_sortie LIKE '2014%' AND id_livre = (SELECT id_livre FROM livre WHERE titre = 'une vie'));
+-----------+
| prenom    |
+-----------+
| Guillaume |
| Chloe     |
+-----------+

-- Afficher le nombre de livres empruntés par chaque abonné

SELECT  a.prenom, COUNT(e.id_livre) as nb_livre_empruntes
FROM abonne a, emprunt e
WHERE e.id_abonne = a.id_abonne
GROUP BY a.id_abonne;
+-----------+--------------------+
| prenom    | nb_livre_empruntes |
+-----------+--------------------+
| Guillaume |                  2 |
| Benoit    |                  3 |
| Chloe     |                  2 |
| Laura     |                  1 |
+-----------+--------------------+
 
 INSERT INTO abonne (prenom) VALUE ('Alex');

 -- Afficher le prénom des abonnés avec n° des livres empruntés

 SELECT a.prenom, e.id_livre
 FROM abonne a, emprunt e
 WHERE e.id_abonne = a.id_abonne;
+-----------+----------+
| prenom    | id_livre |
+-----------+----------+
| Guillaume |      100 |
| Guillaume |      104 |
| Benoit    |      101 |
| Benoit    |      105 |
| Benoit    |      100 |
| Chloe     |      100 |
| Chloe     |      105 |
| Laura     |      103 |
+-----------+----------+

-- JOINTURE EXTERNE
  -- Afficher le prénom des abonnés avec le numéro des livres qu'ils ont emprunté.

SELECT abonne.prenom, emprunt.id_livre
FROM abonne LEFT JOIN emprunt  --FROM-LEFT JOIN- La table placée à gauche de l'expression LEFT JOIN sera la table dont TOUS les résultats seront rapatriés (sans correspondance exigée dans l'autre table).
ON abonne.id_abonne = emprunt.id_abonne; --ON- la condition se fait par le mot clé ON et non plus par WHERE dans le cadre d'une requête externe type LEFT JOIN, RIGHT JOIN (FULL n'étant pas valable sous Mysql)

--UNION

SELECT auteur AS 'liste personne physique' FROM livre UNION SELECT prenom FROM abonne;
+-------------------------+
| liste personne physique |
+-------------------------+
| GUY DE MAUPASSANT       |
| HONORE DE BALZAC        |
| ALPHONSE DAUDET         |
| ALEXANDRE DUMAS         |
| Guillaume               |
| Benoit                  |
| Chloe                   |
| Laura                   |
| Alex                    |
+-------------------------+

-- LES FONCTIONS

-- les fonctions prédéfinies
SELECT CURDATE(); --affiche la date courante
SELECT CURDATE() +0; -- affiche la date courante sans tiret
SELECT CURTIME(); -- affiche l'heure courante
SELECT NOW(); -- affiche la date et l'heure courante
SELECT DATE_ADD('2018-12-13', INTERVAL 31 DAY); -- affiche la date future avec 31 jours de plus
SELECT DATE_FORMAT('2018-12-13 17:02:00', '%d/%m/%Y - %H:%i:%s'); --redefini le format de la sate (format fr dans l'exemple)
SELECT *, DATE_FORMAT(date_rendu, 'le %d/%m/%Y') FROM emprunt;
SELECT CONCAT('a','b','c'); -- permet de concaténer
SELECT CONCAT_WS('-','a','b','c');
+----------------------------+
| CONCAT_WS('-','a','b','c') |
+----------------------------+
| a-b-c                      |
+----------------------------+
SELECT LENGTH('Julie'); -- permet de compter la longueur d'une chaine de caractères
SELECT SUBSTRING('bonjour', 4);
SELECT TRIM('                bonsoir'); -- permet de supprimer les espaces en début et en fin de caractères
SELECT DATABASE();
SELECT LAST_INSERT_ID(); -- indique quel est le dernier identifiant généré par une base de données (après une requête INSERT)
SELECT PASSWORD('mypass'); -- permet de hacher le mdp

-- LES FONCTIONS UTILISATEURS
