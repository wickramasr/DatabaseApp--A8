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

insert into Customer values("Jackson Oneil", 2825, 16780416 ,"Ap #145-2393 Convallis St.", 9430125)
insert into Recipe values("Biriyani",2681,6557," A great one-pot rice dish that can still be served up a few days later, perfect for leftovers",30)
insert into Ingredient values("Rice",5512, 22)
insert into Bill values("Lorem",2138,"2019-07-25")
insert into Searched_By values(9218,6260,8641)
insert into Is_paid_by values(9218,4759)
insert into Is_in values(7144,6260,8641)
insert into Are_mentioned_in values(2138,7144)
