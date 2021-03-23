 
 INSERT INTO cardetails (cd_brandSerie, cd_type, cd_seats, cd_energy, cd_gearbox) 
 VALUES 
 ('TESLA MODEL 3', 'Voiture','5', 'Electrique' ,'Automatique'),
 ('CITROEN JUMPER', 'Utilitaire','3', 'Diesel', 'Manuelle'),
 ('FORD FOCUS', 'Voiture','5', 'Diesel', 'Manuelle'),
('OPEL MERIVA', 'Voiture','5', 'Diesel', 'Manuelle');
 
 INSERT INTO carstorent (ctr_year, ctr_gamme, ctr_immatriculation, ctr_pricePerDay, ctr_km, ctr_toArchive, ctr_img, cd_id ) 
 VALUES 
  ('2020', 'gamme3', 'CF-875-CB', 30, 2035, 0,'TESLA MODEL 3.jpg', 1),
	('2020', 'gamme3', 'CP-875-CP', 30, 3000, 0,'TESLA MODEL 3.jpg', 1),
      ('2012', 'gamme4', 'AO-408-IJ', 40, 157125, 0,'CITROEN JUMPER.jpg', 2);
 
 INSERT INTO `locations` (`l_startDate`,`l_endDate`,`loc_realReturnDate`,`l_plannedKm`,`loc_realKm`, `ctr_id`) 
VALUES
 ("2021/03/24","2021/03/30","9999/12/31", 1613 , 99999 , 1),
("2021/03/05","2021/03/19","2021/03/20", 884 , 1613 , 1),
("2021/02/09","2021/02/19","2021/02/20", 684 , 884 , 2),
("2021/02/26","2021/03/15","2021/03/16", 828 , 879 , 2),
("2021/04/27","2021/05/18","9999/12/31", 2619 , 99999 , 3);
