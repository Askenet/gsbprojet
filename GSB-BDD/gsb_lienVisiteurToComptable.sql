CREATE TABLE IF NOT EXISTS `estGerePar` (
  `idComptable` char(4) NOT NULL,
  `id` char(4) NOT NULL,
  dateDebutService date DEFAULT NULL,
  FOREIGN KEY FK_idComptable(idComptable) REFERENCES comptable(idComptable),
  FOREIGN KEY FK_idVisiteur(id) REFERENCES visiteur(id)
) ENGINE=InnoDB;

INSERT INTO estGerePar VALUES('a1','a131',"2000-12-21");
INSERT INTO estGerePar VALUES('a1','a17',"2022-09-16");

ALTER TABLE estgerepar MODIFY COLUMN idComptable CHAR(4) NOT NULL DEFAULT 'a1';
INSERT INTO estgerepar (id,dateDebutService) SELECT visiteur.id, visiteur.dateEmbauche FROM visiteur;
