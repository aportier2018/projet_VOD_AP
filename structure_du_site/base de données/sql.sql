#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: film
#------------------------------------------------------------

CREATE TABLE film(
        id_film     Int  Auto_increment  NOT NULL ,
        titre       Varchar (50) ,
        synopsis    Longtext ,
        date_sortie Date ,
        affiche     Varchar (500) ,
        ba          Varchar (500)
	,CONSTRAINT film_PK PRIMARY KEY (id_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: acteur
#------------------------------------------------------------

CREATE TABLE acteur(
        id_acteur Int  Auto_increment  NOT NULL ,
        n_acteur  Varchar (50) ,
        p_acteur  Varchar (50)
	,CONSTRAINT acteur_PK PRIMARY KEY (id_acteur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: realisateur
#------------------------------------------------------------

CREATE TABLE realisateur(
        id_real Int  Auto_increment  NOT NULL ,
        n_real  Varchar (50) ,
        p_real  Varchar (50)
	,CONSTRAINT realisateur_PK PRIMARY KEY (id_real)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: genre
#------------------------------------------------------------

CREATE TABLE genre(
        id_genre Int  Auto_increment  NOT NULL ,
        genre    Varchar (50)
	,CONSTRAINT genre_PK PRIMARY KEY (id_genre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: user
#------------------------------------------------------------

CREATE TABLE user(
        id_user    Int  Auto_increment  NOT NULL ,
        n_user     Varchar (50) ,
        p_user     Varchar (50) ,
        email_user Varchar (50) ,
        login_user Varchar (50) ,
        mdp_user   Varchar (50)
	,CONSTRAINT user_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: admin
#------------------------------------------------------------

CREATE TABLE admin(
        id_admin    Int  Auto_increment  NOT NULL ,
        n_admin     Varchar (50) ,
        p_admin     Varchar (50) ,
        email_admin Varchar (50) ,
        login_admin Varchar (50) ,
        mdp_admin   Varchar (50)
	,CONSTRAINT admin_PK PRIMARY KEY (id_admin)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: joue
#------------------------------------------------------------

CREATE TABLE joue(
        id_film   Int NOT NULL ,
        id_acteur Int NOT NULL
	,CONSTRAINT joue_PK PRIMARY KEY (id_film,id_acteur)

	,CONSTRAINT joue_film_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
	,CONSTRAINT joue_acteur0_FK FOREIGN KEY (id_acteur) REFERENCES acteur(id_acteur)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: realise
#------------------------------------------------------------

CREATE TABLE realise(
        id_film Int NOT NULL ,
        id_real Int NOT NULL
	,CONSTRAINT realise_PK PRIMARY KEY (id_film,id_real)

	,CONSTRAINT realise_film_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
	,CONSTRAINT realise_realisateur0_FK FOREIGN KEY (id_real) REFERENCES realisateur(id_real)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: possede
#------------------------------------------------------------

CREATE TABLE possede(
        id_film  Int NOT NULL ,
        id_genre Int NOT NULL
	,CONSTRAINT possede_PK PRIMARY KEY (id_film,id_genre)

	,CONSTRAINT possede_film_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
	,CONSTRAINT possede_genre0_FK FOREIGN KEY (id_genre) REFERENCES genre(id_genre)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: modifie
#------------------------------------------------------------

CREATE TABLE modifie(
        id_admin Int NOT NULL ,
        id_film  Int NOT NULL
	,CONSTRAINT modifie_PK PRIMARY KEY (id_admin,id_film)

	,CONSTRAINT modifie_admin_FK FOREIGN KEY (id_admin) REFERENCES admin(id_admin)
	,CONSTRAINT modifie_film0_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: favori
#------------------------------------------------------------

CREATE TABLE favori(
        id_user Int NOT NULL ,
        id_film Int NOT NULL
	,CONSTRAINT favori_PK PRIMARY KEY (id_user,id_film)

	,CONSTRAINT favori_user_FK FOREIGN KEY (id_user) REFERENCES user(id_user)
	,CONSTRAINT favori_film0_FK FOREIGN KEY (id_film) REFERENCES film(id_film)
)ENGINE=InnoDB;

