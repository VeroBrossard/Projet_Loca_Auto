#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `loca-auto` CHARACTER SET 'utf8';
USE `loca-auto`;


#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        u_id        Int  Auto_increment  NOT NULL ,
        u_lastname  Varchar (30) NOT NULL ,
        u_firstname Varchar (30) NOT NULL ,
        u_mail      Varchar (50) NOT NULL ,
        u_pwd       Varchar (10) NOT NULL ,
        u_phone     Varchar (20) NOT NULL ,
		u_fonction    Varchar (20) NOT NULL ,
        u_toArchive Bool NOT NULL ,
        u_birthdate Date NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (u_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: carDetails
#------------------------------------------------------------

CREATE TABLE carDetails(
        cd_id         Int  Auto_increment  NOT NULL ,
        cd_brandSerie Varchar (30) NOT NULL ,
        cd_type       Varchar (12) NOT NULL ,
        cd_seats      Int NOT NULL ,
        cd_gearbox    Varchar (15) NOT NULL ,
        cd_energy     Varchar (10) NOT NULL 
	,CONSTRAINT carDetails_PK PRIMARY KEY (cd_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: carsToRent
#------------------------------------------------------------

CREATE TABLE carsToRent(
        ctr_id              Int  Auto_increment  NOT NULL ,
        ctr_gamme           Varchar (10) NOT NULL ,
        ctr_immatriculation Varchar (10) NOT NULL ,
        ctr_pricePerDay     Float NOT NULL ,
        ctr_km              Int NOT NULL ,
        ctr_year            Int NOT NULL ,
        ctr_img             Varchar (30) NOT NULL ,
        ctr_toArchive       Bool NOT NULL ,
        cd_id               Int NOT NULL
	,CONSTRAINT carsToRent_PK PRIMARY KEY (ctr_id)

	,CONSTRAINT carsToRent_carDetails_FK FOREIGN KEY (cd_id) REFERENCES carDetails(cd_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: packagePeriod
#------------------------------------------------------------

CREATE TABLE packagePeriod(
        pp_id            Int  Auto_increment  NOT NULL ,
        pp_dayPeriod     Varchar (25) NOT NULL ,
        pp_ratePerPeriod Float NOT NULL
	,CONSTRAINT packagePeriod_PK PRIMARY KEY (pp_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: UsersOpinion
#------------------------------------------------------------

CREATE TABLE UsersOpinion(
        uo_id    Int  Auto_increment  NOT NULL ,
        uo_stars Int NOT NULL ,
        uo_comm  Text NOT NULL ,
        u_id     Int NOT NULL
	,CONSTRAINT UsersOpinion_PK PRIMARY KEY (uo_id)

	,CONSTRAINT UsersOpinion_users_FK FOREIGN KEY (u_id) REFERENCES users(u_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: options
#------------------------------------------------------------

CREATE TABLE options(
        o_id              Int  Auto_increment  NOT NULL ,
        o_prestation      Varchar (25) NOT NULL ,
        o_pricePrestation Float NOT NULL
	,CONSTRAINT options_PK PRIMARY KEY (o_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: packageKm
#------------------------------------------------------------

CREATE TABLE packageKm(
        pk_id            Int  Auto_increment  NOT NULL ,
        pk_kmPackage     Varchar (25) NOT NULL ,
        pk_kmPackageCost Float NOT NULL
	,CONSTRAINT packageKm_PK PRIMARY KEY (pk_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: locationState
#------------------------------------------------------------

CREATE TABLE locationState(
        ls_id        Int  Auto_increment  NOT NULL ,
        ls_statement Varchar (25) NOT NULL
	,CONSTRAINT locationState_PK PRIMARY KEY (ls_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: locations
#------------------------------------------------------------

CREATE TABLE locations(
        l_id             Int  Auto_increment  NOT NULL ,
        l_startDate      Date NOT NULL ,
        l_endDate        Date NOT NULL ,
        l_realReturnDate Date NOT NULL ,
        l_plannedKm      Int NOT NULL ,
        l_realKm         Int NOT NULL ,
        l_chosenOptions  Varchar (20) NOT NULL ,
        l_toArchive      Bool NOT NULL ,
        pp_id            Int NOT NULL ,
        pk_id            Int NOT NULL ,
        ctr_id           Int NOT NULL ,
        u_id             Int NOT NULL ,
        ls_id            Int NOT NULL
	,CONSTRAINT locations_PK PRIMARY KEY (l_id)

	,CONSTRAINT locations_packagePeriod_FK FOREIGN KEY (pp_id) REFERENCES packagePeriod(pp_id)
	,CONSTRAINT locations_packageKm0_FK FOREIGN KEY (pk_id) REFERENCES packageKm(pk_id)
	,CONSTRAINT locations_carsToRent1_FK FOREIGN KEY (ctr_id) REFERENCES carsToRent(ctr_id)
	,CONSTRAINT locations_users2_FK FOREIGN KEY (u_id) REFERENCES users(u_id)
	,CONSTRAINT locations_locationState3_FK FOREIGN KEY (ls_id) REFERENCES locationState(ls_id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: billing
#------------------------------------------------------------

CREATE TABLE billing(
        b_id     Int  Auto_increment  NOT NULL ,
        b_amount Float NOT NULL ,
        l_id     Int NOT NULL
	,CONSTRAINT billing_PK PRIMARY KEY (b_id)

	,CONSTRAINT billing_locations_FK FOREIGN KEY (l_id) REFERENCES locations(l_id)
	,CONSTRAINT billing_locations_AK UNIQUE (l_id)
)ENGINE=InnoDB COMMENT "Facturation " ;


#------------------------------------------------------------
# Table: completer
#------------------------------------------------------------

CREATE TABLE completer(
        o_id Int NOT NULL ,
        l_id Int NOT NULL
	,CONSTRAINT completer_PK PRIMARY KEY (o_id,l_id)

	,CONSTRAINT completer_options_FK FOREIGN KEY (o_id) REFERENCES options(o_id)
	,CONSTRAINT completer_locations0_FK FOREIGN KEY (l_id) REFERENCES locations(l_id)
)ENGINE=InnoDB COMMENT "Liste des Options dont (assurance)" ;

