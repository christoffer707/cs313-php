
CREATE TABLE Product (
  Product_id PRIMARY KEY NOT NULL,
  Product_name VARCHAR(64) NOT NULL,
  Product_image INT NOT NULL,
  Product_category VARCHAR(64) NOT NULL,
  Product_description (4000) NOT NULL,
  Product_price NUMERIC NOT NULL
  );
  
 CREATE TABLE User (
	user_id PRIMARY KEY NOT NULL,
	user_name VARCHAR (64) NOT NULL,
	user_password VARCHAR (64) NOT NULL,
	user_address VARCHAR (64) NOT NULL,
	user_state VARCHAR (2) NOT NULL,
	user_zip INT NOT NULL
 );




