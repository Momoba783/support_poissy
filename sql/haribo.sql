/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**

* Objectif : Créer dans PHPMyAdmin une base de données haribo dont la modélisation est ci-dessous, les étapes sont détaillées ensuite.
*/

/**
+---------------+----------------+------+------+---------+----------------+
| Field         | Type           | Null | Key  | Default | Extra          |
+---------------+----------------+------+------+---------+----------------+
| id_stagiaire  | int(11)        | NO   | PRI  | NULL    | auto_increment |
| prenom        | varchar(100)   | NO   |      | NULL    |                |
| yeux          | varchar(30)    | NO   |      | NULL    |                |
| genre         | enum('h','f')  | NO   |      | NULL    |                |
+---------------+----------------+------+------+---------+----------------+

+---------------+----------------+------+------+---------+----------------+
| Field         | Type           | Null | Key  | Default | Extra          |
+---------------+----------------+------+------+---------+----------------+
| id_bonbon     | int(11)        | NO   | PRI  | NULL    | auto_increment |
| nom           | varchar(100)   | NO   |      | NULL    |                |
| saveur        | varchar(100)   | NO   |      | NULL    |                |
+---------------+----------------+------+------+---------+----------------+

+---------------+----------------+------+------+---------+----------------+
| Field         | Type           | Null | Key  | Default | Extra          |
+---------------+----------------+------+------+---------+----------------+
| id_manger     | int(11)        | NO   | PRI  | NULL    | auto_increment |
| id_bonbon     | int(11)        | YES  |      | NULL    |                |
| id_stagiaire  | int(11)        | YES  |      | NULL    |                |
| date_manger   | date           | NO   |      | NULL    |                |
| quantite      | int(11)        | NO   |      | NULL    |                |
+---------------+----------------+------+------+---------+----------------+
*/

/**
* REQUETES A EFFECTUER dans PHPMyAdmin
*/

--1-- lister toutes les BDD de PHPMyAdmin

SHOW DATABASES;
+--------------------+
| Database           |
+--------------------+
| bibliotheque       |
| cvwordpress        |
| entreprise         |
| haribo             |
| hotel              |
| information_schema |
| monsitewordpress   |
| mysql              |
| performance_schema |
| phpmyadmin         |
| test               |
+--------------------+

--2-- Créer une base de données SQL nommée HARIBO

CREATE DATABASE haribo;
Query OK, 1 row affected (0.00 sec)

MariaDB [hotel]> USE haribo;
Database changed

MariaDB [haribo]>

--3--

/**

* créer une table stagiaire
* qui comporte 3 champs :
* - id_stagiaire => nombre qui s'auto-incrémente, requis et clé primaire
* - prenom => 100 caractères, requis
* - couleur des yeux => 30 caractères, requis
* - genre => homme ou femme, requis
*/

CREATE TABLE stagiaire (
 id_stagiaire INT(11) NOT NULL AUTO_INCREMENT,
 prenom VARCHAR(100) NOT NULL,
 yeux VARCHAR(30) NOT NULL,
 genre enum('h','f') NOT NULL,
 PRIMARY KEY (id_stagiaire)
);

--4--
/**
* insérer dans cette table les informations de votre groupe (faites un copier-coller des lignes ci-dessous) :
*/
INSERT INTO stagiaire (prenom, yeux, genre) VALUES 
('jhordan', 'marron','h'),
('marie', 'vert','f'),
('paul', 'bleu','h'),
('lucie', 'marron','f');



--5-
/**
* créer une table bonbon
* qui comporte 3 champs :
* - id_bonbon => nombre qui s'auto-incrémente, requis et clé primaire
* - nom => 100 caractères, requis
* - saveur => 100 caractères, requis
*/
CREATE TABLE bonbon (
 id_bonbon INT(11) NOT NULL AUTO_INCREMENT,
 nom VARCHAR(100) NOT NULL,
 saveur VARCHAR(30) NOT NULL,
 PRIMARY KEY (id_bonbon)
);


--6--
/**
* insérer dans cette table des bonbons haribo (faites un copier-coller des lignes ci-dessous) :
*/
INSERT INTO bonbon (nom, saveur) VALUES 
('dragibus', 'cola'),
('dragibus', 'fraise'),
('dragibus', 'cassis'),
('tagada', 'fraise'),
('tagada', 'cola'),
('tagada', 'orange'),
('caramel', 'caramel'),
('nougat', 'pistache'),
('sucette', 'orange');


--7--
/**
* créer une table manger
* qui comporte 5 champs :
* - id_manger => nombre qui s'auto-incrémente, requis et clé primaire
* - id_stagiaire => champs de la table stagiaire
* - id_bonbon => champs de la table bonbon
* - date_manger => type date, requis
* - quantite => nombre, requis
*/
CREATE TABLE manger (
 id_manger INT(11) NOT NULL AUTO_INCREMENT,
 id_stagiaire INT(11) DEFAULT NULL,
 id_bonbon INT(11) DEFAULT NULL,
 date_manger DATE NOT NULL,
 quantite INT(11) NOT NULL,
 PRIMARY KEY (id_manger)
);

--8--
/*
* insérer dans la table manger des informations sur qui a consommé quel bonbon, quand et dans quelles quantités (faites un copier-coller des lignes ci-dessous) :
*/
INSERT INTO manger (id_bonbon, id_stagiaire, date_manger, quantite) VALUES 
(4,7,'2018-09-20', 5),
(2,4,'2018-09-20', 3),
(8,13,'2018-09-20', 12),
(1,2,'2018-09-20', 7);


--9-- Lister les tables de la BDD *haribo*

show tables;
+------------------+
| Tables_in_haribo |
+------------------+
| bonbon           |
| manger           |
| stagiaire        |
+------------------+

--10-- voir les paramètres de la table *bonbon*

desc bonbon;
+-----------+--------------+------+-----+---------+----------------+
| Field     | Type         | Null | Key | Default | Extra          |
+-----------+--------------+------+-----+---------+----------------+
| id_bonbon | int(11)      | NO   | PRI | NULL    | auto_increment |
| nom       | varchar(100) | NO   |     | NULL    |                |
| saveur    | varchar(30)  | NO   |     | NULL    |                |
+-----------+--------------+------+-----+---------+----------------+

--11-- Sélectionner tous les champs de tous les enregistrements de la table *stagiaire*

select * from stagiaire;
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            1 | jhordan | marron | h     |
|            2 | marie   | vert   | f     |
|            3 | paul    | bleu   | h     |
|            4 | lucie   | marron | f     |
+--------------+---------+--------+-------+

--12-- Rajouter un nouveau stagiaire *Patriiiick* en forçant la numérotation de l'id

INSERT INTO stagiaire VALUES
(100,'Patriiiick', 'bleu', 'h');

--13-- Rajouter un nouveau stagiaire *Mila* SANS forcer la numérotation de l'id

INSERT INTO stagiaire VALUES
('','Mila', 'vert', 'h');

--14-- Changer le prénom du stagiaire qui a l'id 100 de *Patriiiick* à *Patrick*

UPDATE stagiaire SET prenom='Patrick' WHERE prenom='Patriiiick';
Query OK, 1 row affected (0.01 sec)
Rows matched: 1  Changed: 1  Warnings: 0

--15-- Rajouter dans la table manger que Patrick a mangé 5 Tagada purpule le 15 septembre
INSERT INTO bonbon VALUES('','tagada', 'purpule');
INSERT INTO manger VALUES('',100, 10, '2018-09-15', 5);
Query OK, 1 row affected, 1 warning (0.01 sec)

--16-- Sélectionner tous les noms des bonbons

select nom from bonbon;
+----------+
| nom      |
+----------+
| dragibus |
| dragibus |
| dragibus |
| tagada   |
| tagada   |
| tagada   |
| caramel  |
| nougat   |
| sucette  |
+----------+

--17-- Sélectionner tous les noms des bonbons en enlevant les doublons

select distinct(nom) from bonbon;
+----------+
| nom      |
+----------+
| dragibus |
| tagada   |
| caramel  |
| nougat   |
| sucette  |
+----------+

--18-- Récupérer les couleurs des yeux des stagiaires (Sélectionner plusieurs champs dans une table)

SELECT yeux, genre FROM stagiaire;
+--------+-------+
| yeux   | genre |
+--------+-------+
| marron | h     |
| vert   | f     |
| bleu   | h     |
| marron | f     |
| noir   | h     |
| marron | f     |
| marron | h     |
| bleu   | h     |
| vert   | h     |
+--------+-------+

--19-- Dédoublonner un résultat sur plusieurs champs

SELECT DISTINCT(yeux) FROM stagiaire;
+--------+
| yeux   |
+--------+
| marron |
| vert   |
| bleu   |
| noir   |
+--------+
SELECT DISTINCT(yeux), genre FROM stagiaire;
+--------+-------+
| yeux   | genre |
+--------+-------+
| marron | h     |
| vert   | f     |
| bleu   | h     |
| marron | f     |
| noir   | h     |
| vert   | h     |
+--------+-------+

--20-- Sélectionner le stagiaire qui a l'id 5
INSERT INTO stagiaire VALUES (5, 'Vincent', 'noir', 'h');
SELECT * FROM stagiaire WHERE id_stagiaire=5;
+--------------+---------+------+-------+
| id_stagiaire | prenom  | yeux | genre |
+--------------+---------+------+-------+
|            5 | Vincent | noir | h     |
+--------------+---------+------+-------+

--21-- Sélectionner tous les stagiaires qui ont les yeux marrons

SELECT * FROM stagiaire WHERE yeux LIKE '%marron%';
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            1 | jhordan | marron | h     |
|            4 | lucie   | marron | f     |
+--------------+---------+--------+-------+

--22-- Sélectionner tous les stagiaires dont l'id est plus grand que 9

SELECT * FROM stagiaire WHERE id_stagiaire > 9;
+--------------+---------+------+-------+
| id_stagiaire | prenom  | yeux | genre |
+--------------+---------+------+-------+
|          100 | Patrick | bleu | h     |
|          101 | Mila    | vert | h     |
+--------------+---------+------+-------+

--23-- Sélectionner tous les stagiaires SAUF celui dont l'id est 13 (soyons supersticieux !) :!\ il y a 2 façons de faire
INSERT INTO stagiaire VALUES (13,'Mohamed', 'marron', 'h');
Query OK, 1 row affected (0.01 sec)
SELECT * FROM stagiaire WHERE id_stagiaire != 13;
SELECT * FROM stagiaire WHERE id_stagiaire <> 13;
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            1 | jhordan | marron | h     |
|            2 | marie   | vert   | f     |
|            3 | paul    | bleu   | h     |
|            4 | lucie   | marron | f     |
|            5 | Vincent | noir   | h     |
|          100 | Patrick | bleu   | h     |
|          101 | Mila    | vert   | h     |
+--------------+---------+--------+-------+


--24-- Sélectionner tous les stagiaires qui ont un id inférieur ou égal à 10

SELECT * FROM stagiaire WHERE id_stagiaire <= 10;
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            1 | jhordan | marron | h     |
|            2 | marie   | vert   | f     |
|            3 | paul    | bleu   | h     |
|            4 | lucie   | marron | f     |
|            5 | Vincent | noir   | h     |
+--------------+---------+--------+-------+

--25-- Sélectionner tous les stagiaires dont l'id est compris entre 7 et 11

SELECT * FROM stagiaire WHERE id_stagiaire BETWEEN 7 AND 11;
Empty set (0.00 sec)
INSERT INTO stagiaire VALUES (7, 'Sonia', 'marron', 'f');
Query OK, 1 row affected (0.01 sec)
SELECT * FROM stagiaire WHERE id_stagiaire BETWEEN 7 AND 11;
+--------------+--------+--------+-------+
| id_stagiaire | prenom | yeux   | genre |
+--------------+--------+--------+-------+
|            7 | Sonia  | marron | f     |
+--------------+--------+--------+-------+
1 row in set (0.00 sec)

--26-- Sélectionner les stagiaires dont le prénom commence par un *S*

SELECT * FROM stagiaire WHERE prenom LIKE 'S%';
+--------------+--------+--------+-------+
| id_stagiaire | prenom | yeux   | genre |
+--------------+--------+--------+-------+
|            7 | Sonia  | marron | f     |
+--------------+--------+--------+-------+

--27-- Trier les stagiaires femmes par id décroissant

SELECT * FROM stagiaire WHERE genre = 'f' ORDER BY id_stagiaire DESC;
+--------------+--------+--------+-------+
| id_stagiaire | prenom | yeux   | genre |
+--------------+--------+--------+-------+
|            7 | Sonia  | marron | f     |
|            4 | lucie  | marron | f     |
|            2 | marie  | vert   | f     |
+--------------+--------+--------+-------+

--28-- Trier les stagiaires hommes par prénom dans l'ordre alphabétique

SELECT * FROM stagiaire ORDER BY prenom ASC;
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            1 | jhordan | marron | h     |
|            4 | lucie   | marron | f     |
|            2 | marie   | vert   | f     |
|          101 | Mila    | vert   | h     |
|           13 | Mohamed | marron | h     |
|          100 | Patrick | bleu   | h     |
|            3 | paul    | bleu   | h     |
|            7 | Sonia   | marron | f     |
|            5 | Vincent | noir   | h     |
+--------------+---------+--------+-------+

--29-- Trier les stagiaires en affichant les femmes en premier et en classant les couleurs des yeux dans l'ordre alphabétique

SELECT * FROM stagiaire ORDER BY genre DESC, yeux ASC;
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            4 | lucie   | marron | f     |
|            7 | Sonia   | marron | f     |
|            2 | marie   | vert   | f     |
|            3 | paul    | bleu   | h     |
|          100 | Patrick | bleu   | h     |
|            1 | jhordan | marron | h     |
|           13 | Mohamed | marron | h     |
|            5 | Vincent | noir   | h     |
|          101 | Mila    | vert   | h     |
+--------------+---------+--------+-------+

--30-- Limiter l'affichage d'une requête de sélection de tous les stagiaires aux 3 premires résultats

SELECT * FROM stagiaire LIMIT 0,3;
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            1 | jhordan | marron | h     |
|            2 | marie   | vert   | f     |
|            3 | paul    | bleu   | h     |
+--------------+---------+--------+-------+

--31-- Limiter l'affichage d'une requête de sélection de tous les stagiaires à partir du 3ème résultat et des 5 suivants

SELECT * FROM stagiaire LIMIT 3,5;
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            4 | lucie   | marron | f     |
|            5 | Vincent | noir   | h     |
|            7 | Sonia   | marron | f     |
|           13 | Mohamed | marron | h     |
|          100 | Patrick | bleu   | h     |
+--------------+---------+--------+-------+

--32-- Afficher les 4 premiers stagiaires qui ont les yeux marron

SELECT * FROM stagiaire WHERE yeux="marron" LIMIT 0,4;
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            1 | jhordan | marron | h     |
|            4 | lucie   | marron | f     |
|            7 | Sonia   | marron | f     |
|           13 | Mohamed | marron | h     |
+--------------+---------+--------+-------+

--33-- Pareil mais en triant les prénoms dans l'ordre alphabétique

SELECT * FROM stagiaire WHERE yeux="marron" ORDER BY prenom LIMIT 0,4;
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            1 | jhordan | marron | h     |
|            4 | lucie   | marron | f     |
|           13 | Mohamed | marron | h     |
|            7 | Sonia   | marron | f     |
+--------------+---------+--------+-------+

--34-- Compter le nombre de stagiaires

SELECT COUNT(id_stagiaire) FROM stagiaire;
+---------------------+
| COUNT(id_stagiaire) |
+---------------------+
|                   9 |
+---------------------+

--35-- Compter le nombre de stagiaires hommes mais en changeant le nom de la colonne de résultat par *nb_stagiaires_H*

SELECT COUNT(id_stagiaire) AS 'nb_stagiaire_H' FROM stagiaire WHERE genre='h';
+----------------+
| nb_stagiaire_H |
+----------------+
|              6 |
+----------------+

--36-- Compter le nombre de couleurs d'yeux différentes

SELECT COUNT(DISTINCT(yeux)) FROM stagiaire;
+-----------------------+
| COUNT(DISTINCT(yeux)) |
+-----------------------+
|                     4 |
+-----------------------+

--37-- Afficher le prénom et les yeux du stagiaire qui a l'id le plus petit

SELECT prenom, yeux, MIN(id_stagiaire) FROM stagiaire;
+---------+--------+-------------------+
| prenom  | yeux   | MIN(id_stagiaire) |
+---------+--------+-------------------+
| jhordan | marron |                 1 |
+---------+--------+-------------------+

--38-- Afficher le prénom et les yeux du stagiaire qui a l'id le plus grand /!\ c'est une requête imbriquée qu'il faut faire (requête sur le résultat d'une autre requête)

select prenom, id_stagiaire from stagiaire where id_stagiaire = (select max(id_stagiaire) from stagiaire);
+--------+--------------+
| prenom | id_stagiaire |
+--------+--------------+
| Mila   |          101 |
+--------+--------------+

--39-- Afficher les stagiaires qui ont les yeux bleu et vert

SELECT * FROM stagiaire WHERE yeux ='bleu' OR yeux='vert';
+--------------+---------+------+-------+
| id_stagiaire | prenom  | yeux | genre |
+--------------+---------+------+-------+
|            2 | marie   | vert | f     |
|            3 | paul    | bleu | h     |
|          100 | Patrick | bleu | h     |
|          101 | Mila    | vert | h     |
+--------------+---------+------+-------+

--40-- A l'inverse maintenant, afficher les stagiaires qui n'ont pas les yeux bleu ni vert

 SELECT * FROM stagiaire WHERE yeux != 'bleu' AND yeux !='vert';
+--------------+---------+--------+-------+
| id_stagiaire | prenom  | yeux   | genre |
+--------------+---------+--------+-------+
|            1 | jhordan | marron | h     |
|            4 | lucie   | marron | f     |
|            5 | Vincent | noir   | h     |
|            7 | Sonia   | marron | f     |
|           13 | Mohamed | marron | h     |
+--------------+---------+--------+-------+

--41-- récupérer tous les stagiaires qui ont mangé des bonbons, avec le détail de leurs consommations

SELECT s.prenom, m.* 
FROM manger m LEFT JOIN stagiaire s 
ON s.id_stagiaire = m.id_stagiaire 
GROUP BY prenom;
+---------+-----------+--------------+-----------+-------------+----------+
| prenom  | id_manger | id_stagiaire | id_bonbon | date_manger | quantite |
+---------+-----------+--------------+-----------+-------------+----------+
| lucie   |         3 |            4 |         2 | 2018-09-20  |        3 |
| marie   |         5 |            2 |         1 | 2018-09-20  |        7 |
| Mohamed |         4 |           13 |         8 | 2018-09-20  |       12 |
| Patrick |         2 |          100 |        10 | 2018-09-15  |        5 |
| Sonia   |         1 |            7 |         4 | 2018-09-20  |        5 |
+---------+-----------+--------------+-----------+-------------+----------+

--42-- récupérer que les stagiaires qui ont mangé des bonbons, avec le détail de leurs consommations

SELECT s.prenom, m.*
FROM stagiaire s, manger m
WHERE s.id_stagiaire = m.id_stagiaire
AND quantite != 0 ;
+---------+-----------+--------------+-----------+-------------+----------+
| prenom  | id_manger | id_stagiaire | id_bonbon | date_manger | quantite |
+---------+-----------+--------------+-----------+-------------+----------+
| Sonia   |         1 |            7 |         4 | 2018-09-20  |        5 |
| Patrick |         2 |          100 |        10 | 2018-09-15  |        5 |
| lucie   |         3 |            4 |         2 | 2018-09-20  |        3 |
| Mohamed |         4 |           13 |         8 | 2018-09-20  |       12 |
| marie   |         5 |            2 |         1 | 2018-09-20  |        7 |
+---------+-----------+--------------+-----------+-------------+----------+

--43-- prénom du stagiaire, le nom du bonbon, la date de consommation pour tous les stagiaires qui ont mangé au moins une fois

SELECT s.prenom, b.nom, m.date_manger
FROM stagiaire s, bonbon b, manger m
WHERE s.id_stagiaire = m.id_stagiaire
AND b.id_bonbon = m.id_bonbon
+---------+----------+-------------+
| prenom  | nom      | date_manger |
+---------+----------+-------------+
| Sonia   | tagada   | 2018-09-20  |
| Patrick | tagada   | 2018-09-15  |
| lucie   | dragibus | 2018-09-20  |
| Mohamed | nougat   | 2018-09-20  |
| marie   | dragibus | 2018-09-20  |
+---------+----------+-------------+

--44-- Afficher les quantités consommées par les stagiaires (uniquement ceux qui ont mangé !)

SELECT m.quantite
FROM stagiaire s, manger m
WHERE s.id_stagiaire = m.id_stagiaire;
+----------+
| quantite |
+----------+
|        5 |
|        5 |
|        3 |
|       12 |
|        7 |
+----------+

--45-- Calculer combien de bonbons ont été mangés au total par chaque stagiaire et afficher le nombre de fois où ils ont mangé


--46-- Afficher combien de bonbons ont été consommés au total

SELECT SUM(quantite) FROM manger;
+---------------+
| SUM(quantite) |
+---------------+
|            32 |
+---------------+

--47-- Afficher le total de *Tagada* consommées

SELECT SUM(m.quantite) AS 'nb tagada manger'
FROM stagiaire s, manger m, bonbon b
WHERE s.id_stagiaire = m.id_stagiaire
AND b.id_bonbon = m.id_bonbon
AND b.nom LIKE '%tagada%';
+------------------+
| nb tagada manger |
+------------------+
|               10 |
+------------------+

--48-- Afficher les prénoms des stagiaires qui n'ont rien mangé


--49-- Afficher les saveurs des bonbons (sans doublons)

SELECT DISTINCT(saveur) FROM bonbon;
+----------+
| saveur   |
+----------+
| cola     |
| fraise   |
| cassis   |
| orange   |
| caramel  |
| pistache |
| purpule  |
+----------+

--50-- Afficher le prénom du stagiaire qui a mangé le plus de bonbons

SELECT MAX(m.quantite), s.prenom
FROM stagiaire s, manger m;