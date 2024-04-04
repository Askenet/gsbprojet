CREATE TABLE IF NOT EXISTS Comptable(
	idComptable varchar(4) NOT NULL,
	nom varchar(30) DEFAULT NULL,
	prenom varchar(30)  DEFAULT NULL, 
	login varchar(20) DEFAULT NULL,
	mdp varchar(20) DEFAULT NULL,
	adresse varchar(30) DEFAULT NULL,
	cp varchar(5) DEFAULT NULL,
	ville varchar(30) DEFAULT NULL,
	dateEmbauche date DEFAULT NULL,
	  PRIMARY KEY (idComptable)
) ENGINE=InnoDB;

INSERT INTO Comptable VALUES ('a1', 'Baras', 'Alexis', 'baras', '1234', '18 rue assalit', '06000', 'Nice', '2010-09-16');