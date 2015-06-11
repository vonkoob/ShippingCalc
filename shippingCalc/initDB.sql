CREATE DATABASE IF NOT EXIST ShippingCalc;

CREATE TABLE IF NOT EXIST`zoneWeightCost` (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
zone INT(10) NOT NULL,
weight FLOAT(3,2) NOT NULL,
cost FLOAT(3,2) NOT NULL
);

CREATE TABLE IF NOT EXIST`zoneWeightCost` (
id INT(6) AUTO_INCREMENT PRIMARY KEY,
zone INT(10) NOT NULL,
weight FLOAT(3,2) NOT NULL,
cost FLOAT(3,2) NOT NULL
);

INSERT INTO zipZone (zip, zone)
VALUES (55555, 4);
INSERT INTO zipZone (zip, zone)
VALUES (55556, 3);
INSERT INTO zipZone (zip, zone)
VALUES (55557, 9);

INSERT INTO zoneWeightCost (zone, weight, cost)
VALUES (4, '1.00', '1.25');
INSERT INTO zoneWeightCost (zone, weight, cost)
VALUES (4, '1.50', '2.00');
INSERT INTO zoneWeightCost (zone, weight, cost)
VALUES (4, '2.00', '3.25');
INSERT INTO zoneWeightCost (zone, weight, cost)
VALUES (3, '1.00', '1.75');
INSERT INTO zoneWeightCost (zone, weight, cost)
VALUES (3, '1.50', '2.25');