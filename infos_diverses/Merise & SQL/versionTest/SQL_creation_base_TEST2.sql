#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `loca-auto` CHARACTER SET 'utf8';
USE `loca-auto`;


#------------------------------------------------------------
# Table: carDetails
#------------------------------------------------------------

CREATE TABLE carDetails(
        cd_id         Int  Auto_increment  NOT NULL ,
        cd_brandSerie Varchar (30) NOT NULL ,
        cd_type       Varchar (12) NOT NULL ,
        cd_seats      Int NOT NULL ,
        cd_gearbox    Varchar (15) NOT NULL ,
        cd_energy     Varchar (10) NOT NULL ,
        cd_toArchive  Bool DEFAULT 0
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
# Table: Locations
#------------------------------------------------------------

CREATE TABLE Locations(
        loc_id             Int  Auto_increment  NOT NULL ,
        loc_realReturnDate Date NOT NULL ,
        loc_realKm         Int NOT NULL ,
        loc_toArchive      Bool DEFAULT 0 ,
        l_startDate        Date NOT NULL ,
        l_endDate          Date NOT NULL ,
        l_plannedKm        Int NOT NULL ,
        ctr_id             Int NOT NULL
	,CONSTRAINT Locations_PK PRIMARY KEY (loc_id)

	,CONSTRAINT Locations_carsToRent_FK FOREIGN KEY (ctr_id) REFERENCES carsToRent(ctr_id)
)ENGINE=InnoDB;
