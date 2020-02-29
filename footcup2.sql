#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: Utilisateur
#------------------------------------------------------------

CREATE TABLE Utilisateur(
        L_id_de_l_utilisateur         Int  Auto_increment  NOT NULL ,
        mail                          Varchar (50) NOT NULL ,
        pseudo                        Varchar (30) NOT NULL ,
        Mot_de_passe_de_l_utilisateur Varchar (50) NOT NULL
	,CONSTRAINT Utilisateur_PK PRIMARY KEY (L_id_de_l_utilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Tournois
#------------------------------------------------------------

CREATE TABLE Tournois(
        Numero_Tournois       Int  Auto_increment  NOT NULL ,
        Nom_du_Tournois       Varchar (30) NOT NULL ,
        Ville                 Varchar (50) NOT NULL ,
        L_id_de_l_utilisateur Int NOT NULL
	,CONSTRAINT Tournois_PK PRIMARY KEY (Numero_Tournois)

	,CONSTRAINT Tournois_Utilisateur_FK FOREIGN KEY (L_id_de_l_utilisateur) REFERENCES Utilisateur(L_id_de_l_utilisateur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Equipe
#------------------------------------------------------------

CREATE TABLE Equipe(
        Numero_de_l_equipe Int  Auto_increment  NOT NULL ,
        Nom_de_l_equipe    Varchar (30) NOT NULL ,
        Numero_Tournois    Int NOT NULL
	,CONSTRAINT Equipe_PK PRIMARY KEY (Numero_de_l_equipe)

	,CONSTRAINT Equipe_Tournois_FK FOREIGN KEY (Numero_Tournois) REFERENCES Tournois(Numero_Tournois)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: Joueur
#------------------------------------------------------------

CREATE TABLE Joueur(
        Numero_du_joueur   Int  Auto_increment  NOT NULL ,
        Nom_du_joueur      Varchar (30) NOT NULL ,
        Prenom_du_joueur   Varchar (30) NOT NULL ,
        Role_du_joueur     Varchar (30) NOT NULL ,
        Numero_Tournois    Int NOT NULL ,
        Numero_de_l_equipe Int NOT NULL
	,CONSTRAINT Joueur_PK PRIMARY KEY (Numero_du_joueur)

	,CONSTRAINT Joueur_Tournois_FK FOREIGN KEY (Numero_Tournois) REFERENCES Tournois(Numero_Tournois)
	,CONSTRAINT Joueur_Equipe0_FK FOREIGN KEY (Numero_de_l_equipe) REFERENCES Equipe(Numero_de_l_equipe)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ADMINISTRATEUR
#------------------------------------------------------------

CREATE TABLE ADMINISTRATEUR(
        Numero_d_administrateur       Int  Auto_increment  NOT NULL ,
        Identifiant_d_administrateur  Varchar (50) NOT NULL ,
        Mot_de_passe_d_administrateur Int NOT NULL
	,CONSTRAINT ADMINISTRATEUR_PK PRIMARY KEY (Numero_d_administrateur)
)ENGINE=InnoDB;

