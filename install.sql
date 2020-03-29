CREATE TABLE Customer
(
  Cus_Name VARCHAR(50) NOT NULL,
  Cus__user_ID INT NOT NULL,
  Cus_phone_number INT NOT NULL,
  Cus_Address VARCHAR(200) NOT NULL,
  Cus_Password INT NOT NULL,
  PRIMARY KEY (Cus__user_ID)
);

CREATE TABLE Recipe
(
  Recipe_Name VARCHAR(50) NOT NULL,
  Ingredient_IDs INT NOT NULL,
  Recipe_ID INT NOT NULL,
  Description VARCHAR(500) NOT NULL,
  Preparing_Time INT NOT NULL,
  PRIMARY KEY (Ingredient_IDs, Recipe_ID)
);

CREATE TABLE Ingredient
(
  Ingredient_name VARCHAR(100) NOT NULL,
  Ingredient_ID INT NOT NULL,
  Ingredient_Amount INT NOT NULL,
  PRIMARY KEY (Ingredient_ID)
);

CREATE TABLE Bill
(
  Ordered_Ingredients VARCHAR(500) NOT NULL,
  Bill_ID INT NOT NULL,
  Date_and_Time DATE NOT NULL,
  PRIMARY KEY (Bill_ID)
);

CREATE TABLE Searched_By
(
  Cus__user_ID INT NOT NULL,
  Ingredient_IDs INT NOT NULL,
  Recipe_ID INT NOT NULL,
  FOREIGN KEY (Cus__user_ID) REFERENCES Customer(Cus__user_ID),
  FOREIGN KEY (Ingredient_IDs, Recipe_ID) REFERENCES Recipe(Ingredient_IDs, Recipe_ID)
);

CREATE TABLE Is_paid_by
(
  Cus__user_ID INT NOT NULL,
  Bill_ID INT NOT NULL,
  FOREIGN KEY (Cus__user_ID) REFERENCES Customer(Cus__user_ID),
  FOREIGN KEY (Bill_ID) REFERENCES Bill(Bill_ID)
);

CREATE TABLE Is_in
(
  Ingredient_ID INT NOT NULL,
  Ingredient_IDs INT NOT NULL,
  Recipe_ID INT NOT NULL,
  FOREIGN KEY (Ingredient_ID) REFERENCES Ingredient(Ingredient_ID),
  FOREIGN KEY (Ingredient_IDs, Recipe_ID) REFERENCES Recipe(Ingredient_IDs, Recipe_ID)
);

CREATE TABLE Are_mentioned_in
(
  Bill_ID INT NOT NULL,
  Ingredient_ID INT NOT NULL,
  FOREIGN KEY (Bill_ID) REFERENCES Bill(Bill_ID),
  FOREIGN KEY (Ingredient_ID) REFERENCES Ingredient(Ingredient_ID)
);

insert into Customer values("Sahan", 4160206,0622394802,"Sathorn","abcd")
insert into Recipe values("Biriyani",111,"aaa","tasty Dish",60)
insert into Ingredient values("Rice",112,"1kg")
insert into Bill values("Rice",2020-03-29,60)
insert into Searched_By values(11111,112,111)
insert into Is_paid_bt values(4160206,13456)
insert into Is_in values(112,111)
insert into Are_mentioned_in values(12344,112)
