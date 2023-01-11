DROP TABLE IF EXISTS utilisateur CASCADE;
DROP TABLE IF EXISTS historique_commande_guest CASCADE;
DROP TABLE IF EXISTS historique_commande_util CASCADE;
DROP TABLE IF EXISTS stock CASCADE;
DROP TABLE IF EXISTS article CASCADE;

CREATE TABLE utilisateur(
    "id_utilisateur" INTEGER NOT NULL ,
    "nom" VARCHAR(55) NULL,
    "prenom" VARCHAR(55) NULL,
    "mail" VARCHAR(55) NULL,
    "mdp" VARCHAR(55) NULL,
    "role" VARCHAR(55) NULL,
    "date_creation" date,
    "point_fid" INTEGER NOT NULL
);

ALTER TABLE
    "utilisateur" ADD PRIMARY KEY("id_utilisateur");


CREATE TABLE "historique_commande_util"(
    "id_article" INTEGER NULL,
    "id_utilisateur" INTEGER NULL,
    "nom_article" VARCHAR(55) NULL,
    "date_achat" date,
    "heure_achat" time,
    "moyen_payement" VARCHAR(55) NULL
);


CREATE TABLE "article"(
    "id_article" INTEGER NOT NULL,
    "nom_article" VARCHAR(50) NULL,
    "prix" DOUBLE PRECISION NULL,
    "categorie" VARCHAR(50) NULL,
    "informations" VARCHAR(50) NULL,
    "nb_article" INTEGER NULL
);

ALTER TABLE
    "article" ADD PRIMARY KEY("id_article");

ALTER TABLE
    "historique_commande_guest" ADD CONSTRAINT "historique_commande_guest_id_article_foreign" FOREIGN KEY("id_article") REFERENCES "article"("id_article");


INSERT INTO utilisateur(id_utilisateur, nom, prenom,mail,mdp,role,date_creation,point_fid) VALUES (1, 'Kais', 'Hammache','kaishammache93200@gmail.com','123456789','admin','01-03-2004',15) ;
INSERT INTO utilisateur(id_utilisateur, nom, prenom,mail,mdp,role,date_creation,point_fid) VALUES (2, 'Nayann', 'Andriamisa','nayn@gmail.com','nayann123','super-admin','03-11-2005',29) ;
INSERT INTO utilisateur(id_utilisateur, nom, prenom,mail,mdp,role,date_creation,point_fid) VALUES (3, 'Jeff', 'efferson','jeffffff@gmail.com','010306','client','06-08-2018',19) ;

INSERT INTO article(id_article, nom_article, prix ,categorie,informations,nb_article) VALUES (1, 'Chips', 2.50,'snack','Chips gout nature',15) ;
INSERT INTO article(id_article, nom_article, prix ,categorie,informations,nb_article) VALUES (2, 'Coca', 1.50,'boisson','Bouteille de Coca',20) ;
INSERT INTO article(id_article, nom_article, prix ,categorie,informations,nb_article) VALUES (3, 'Eau', 0.50,'boisson','Bouteille eau',33) ;


INSERT INTO historique_commande_util(id_article,id_utilisateur, nom_article,date_achat,heure_achat,moyen_payement) VALUES (1,1, 'Chips','01-12-2019','15:55:30', 'espece') ;
INSERT INTO historique_commande_util(id_article,id_utilisateur, nom_article,date_achat,heure_achat,moyen_payement) VALUES (2,3, 'Coca','01-09-2022','19:36:03', 'espece') ;
INSERT INTO historique_commande_util(id_article,id_utilisateur, nom_article,date_achat,heure_achat,moyen_payement) VALUES (3,2, 'Eau','12-06-2022','01:30:36', 'carte bleue') ;
