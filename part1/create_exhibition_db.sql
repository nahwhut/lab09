CREATE DATABASE IF NOT EXISTS exhibition_db;
USE exhibition_db;

DROP TABLE IF EXISTS cars;

CREATE TABLE cars (
  car_id INT NOT NULL AUTO_INCREMENT,
  make   VARCHAR(25) NOT NULL,
  model  VARCHAR(25) NOT NULL,
  price  INT NOT NULL,
  yom    INT NOT NULL,
  PRIMARY KEY (car_id)
);

INSERT INTO cars (make, model, price, yom) VALUES ('Holden', 'Astra', 14000, 2009);
INSERT INTO cars (make, model, price, yom) VALUES ('BMW', 'X3', 35000, 2010);
INSERT INTO cars (make, model, price, yom) VALUES ('Ford', 'Falcon', 39000, 2013);
INSERT INTO cars (make, model, price, yom) VALUES ('Toyota', 'Corolla', 20000, 2012);
INSERT INTO cars (make, model, price, yom) VALUES ('Holden', 'Commodore', 28000, 2009);