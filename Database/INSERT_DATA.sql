DELETE PAYMENT;
DELETE REVIEW;
DELETE ORDERPRODUCT;
DELETE ORDERDETAIL;
DELETE COLLECTIONSLOT;
DELETE PRODUCT;
DELETE CUSTOMER;
DELETE TRADER;
DELETE SHOP;


--SHOP
INSERT INTO SHOP(shop_id , tradertype) VALUES ('1', 'BUTCHER');
INSERT INTO SHOP(shop_id , tradertype) VALUES ('2', 'BAKERY');
INSERT INTO SHOP(shop_id , tradertype) VALUES ('3', 'FISHMONGER');
INSERT INTO SHOP(shop_id , tradertype) VALUES ('4', 'GREENGROCHER');
INSERT INTO SHOP(shop_id , tradertype) VALUES ('5', 'DELLICATESSEN');

--TRADER
INSERT INTO TRADER(trader_id, first_name, last_name, email, shop_name,password,status,shop_id) VALUES ('1','Sameer', 'Maharjan' ,'samirmaharjan394@gmail.com', 'Fresh Shop', 'Sameer123','Active','1');
INSERT INTO TRADER(trader_id, first_name, last_name, email, shop_name,password,status,shop_id) VALUES ('2','Niva', 'MAskey' ,'maskeyniva12@gmail.com', 'Makus Bakery', 'Niva123','Active','2');
INSERT INTO TRADER(trader_id, first_name, last_name, email, shop_name,password,status,shop_id) VALUES ('3','Asmita', 'Thapa' ,'tasmita19@tbc.edu.np',  'Fish shop', 'Asmita123','Active','3');
INSERT INTO TRADER(trader_id, first_name, last_name, email, shop_name,password,status,shop_id) VALUES ('4','Riya', 'Dangol' ,'ria12@gmail.com', 'Fresh Veggies', 'Ria123','Active','4');
INSERT INTO TRADER(trader_id, first_name, last_name, email, shop_name,password,status,shop_id) VALUES ('5','Smriti', 'Bhattarai' ,'smriti12@gmail.com', 'Hello Shoppers', 'Smriti123','Active','5');

--CUSTOMER
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('1','Preeti', 'Shrestha' ,'ps123@gmail.com', '22','F' , 'Preeti123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('2','Pravat', 'Lama' ,'pl223@gmail.com', '21','M' , 'Pravat123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('3','Ravi', 'Ojha' ,'rav123@gmail.com', '25','M' , 'Ravi123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('4','Sita', 'Limbu' ,'si233@gmail.com', '40','F' , 'Sita123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('5','Hari', 'Rai' ,'hr123@gmail.com', '23','M' , 'Hari123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('6','Biswash', 'Giri' ,'bg233@gmail.com', '35','M' , '123Biswash'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('7','jack', 'kc' ,'jk133@gmail.com', '51','M' , 'Jack123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('8','Ashma', 'Thapa' ,'at223@gmail.com', '26','F' , 'Ashma123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('9','Bibhuti', 'Gautam' ,'bg123@gmail.com', '22','F' , 'Bibhuti123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('10','Santosh', 'Bohara' ,'sb233@gmail.com', '33','M' , 'Santosh123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('11','Dipak', 'Tamang' ,'dt233@gmail.com', '15','M' , 'Dipak123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('12','James', 'Shrestha' ,'js123@gmail.com', '26','M' , 'James123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('13','Shyam', 'Limbu' ,'sl233@gmail.com', '31','M' , 'Shyam123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('14','Anuja', 'Gurung' ,'ag233@gmail.com', '20','F' , 'Anuja123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('15','Ankit', 'Sharma' ,'as123@gmail.com', '21','M' , 'Ankit123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('16','Bipina', 'Lamichhane' ,'bl233@gmail.com', '22','F' , 'Bipina123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('17','Simran', 'Shrestha' ,'ss233@gmail.com', '42','F' , 'Simran123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('18','Bijaya', 'Bharati' ,'bb233@gmail.com', '46','M' , 'Bijaya123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('19','Amisha', 'Rai' ,'ar233@gmail.com', '27','F' , 'Amisha123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('20','Samjana', 'Dhamala' ,'sd233@gmail.com', '32','F' , 'Samjana123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('21','Ramesh', 'Dhakal' ,'rd233@gmail.com', '19','M' , 'Ramesh123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('22','Shiva', 'Khadka' ,'sk123@gmail.com', '18','M' , 'Shiva123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('23','Raj', 'Khatri' ,'rk233@gmail.com', '33','M' , 'Raj123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('24','Rohit', 'Sharma' ,'rs123@gmail.com', '32','M' , 'Rohit123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('25','Sujan', 'Thapa' ,'st233@gmail.com', '21','M' , 'Sujan123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('26','Abhishek', 'Paneru' ,'ap233@gmail.com', '20','M' , 'Abhishek123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('27','Aayusha', 'Lamichhane' ,'al233@gmail.com', '34','F' , 'Aayusha123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('28','Sakchyam', 'Shrestha' ,'sk133@gmail.com', '21','M' , 'Sakchyam123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('29','Nikita', 'Lamichhane' ,'nl233@gmail.com', '50','F' , 'Nikita123'  );
INSERT INTO CUSTOMER(customer_id, first_name, last_name, email, age, gender, password) VALUES ('30','Princy', 'Shrestha' ,'ps223@gmail.com', '22','F' , 'Princy123'  );

--PRODUCT
--BUTCHERS
--CHICKEN
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('1', 'CHICKEN', 'WHITE MEAT', 'Chicken is the most common type of poultry. Chicken meat and eggs have become common in many cuisines due to the relative ease and low cost of keeping chickens compared to mammals such as cattle or hogs', '2.46', '15' , 'chicken.png','1',NULL);

--TURKEY
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('2','TURKEY','WHITE MEAT', 'Turkey is a large poultry bird that is similar to chicken in the white meat category. Turkey meat seems to be little darker than chicken meat, but with fewer calories. ','4','35','turkey.png','1',NULL);

--DUCK
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('3','DUCK','WHITE MEAT', 'Duck is another bird is another white meat category,. Duck meat is darker than chicken or turkey, but it is still considered as white meat. It is a healthy meat to consume because they are nutrient-dense.','2.64','10','duck.jpg','1',NULL);

--PORK
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('4','PORK','RED MEAT', 'Pork is classified as red meat due to myoglobin levels in the meat. Even though fresh pork is lighter in color than beef and cooks to become very light.','2.64','17','pork.jpg','1',NULL);

--BEEF
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('5','BEEF','RED MEAT', 'Beef is the most commonly consumed red meat. Beef chunks are good in stews, ground beef is made into hamburgers, and different cuts of beef are used for various types of steak.', '14.16','25','beef.jpg', '1',NULL);

--LAMB
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('6','LAMB','RED MEAT', 'Lamb is the meat of young domestic sheep. It is a form of red meat, which is defined as meat from animals that has more iron than poultry or fish. It refers to the flesh of young sheep in their first year, whereas mutton refers to the meat of adult sheep.', '6.50','19','lamb.jpg','1',NULL);

--GREENGROCHER
--VEGETABLE
--POTATO
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('7','POTATO','VEGETABLE','Potatoes are quite round vegetables with brown or red skins and white insides. It is an excellent source of vitamin c, potassium, fibre, b vitamins copper, tryptophan, manganese and even lutein, notes the book "healing foods" by dk publishing.', '0.97','100','potato.jpg','4',NULL);

--CAULIFLOWER
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('8','CAULIFLOWER','VEGETABLE','Cauliflower is one of several vegetables in the species brassica oleracea in the genus brassica, which is in the brassicaceae (or mustard) family. it is an annual plant that reproduces by seed. ', '2','25','cauliflower.jpg','4','3.5');

--BROCCOLI
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('9','BROCCOLI','VEGETABLE','Broccoli is an edible green plant in the cabbage family. It can be eaten fresh or cooked. vitamin c and vitamin k are very abundant in broccoli. It is a nutrient-dense food that can help you live a healthier life.','1.5','20', 'broccolli.jpg','4','4');

--BRINJAL
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('10','EGGPLANT','VEGETABLE','Eggplant is a vegetable that comes in a variety of shapes, sizes, and colors and flourishes in hot areas and throughout the summer months. All eggplant types have edible seeds, making it particularly simple to prepare.','1','20', 'eggplant.jpg','4',NULL);

--PUMPKIN
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('11','PUMPKIN','VEGETABLE','A pumpkin is a round winter squash cultivar with smooth, slightly ribbed skin that is usually deep yellow to orange in color. It is highly nutritious and particularly rich in vitamin.', '0.15','90','pumpkin.jpg','4',NULL);

--TOMATO
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('12','TOMATO','VEGETABLE','tomato is a fleshy berry, usually of red colour, although there are also pink or yellow tomatoes. They are also a great source of vitamin c, potassium, folate, and vitamin k.', '2','25','tomato.jpg','4',NULL);

--CARROT
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('13','CARROT','VEGETABLE', 'Carrot is a root vegetable, usually orange in color, though purple, black, red, white, and yellow cultivars exist. They are a particularly good source of beta carotene, fiber, vitamin k1, potassium, and antioxidants.','1.5','50','carrot.jpg','4',NULL);



--FRUITS
--ORANGE
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('14','ORANGE','FRUIT','An orange has a tough shiny orange skin. Inside, the fruit is divided into "segments", which have thin tough skins that hold together many little sections with juice inside. in some oranges it is hard to take the skin off. ','2','20', 'orange.jpg','4',NULL);

--APPLE
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('15','APPLE','FRUIT','Apples are the ideal fruit to eat at any time, having a positive role in the achievement of nourish balance. Their skin may be green, yellow or reddish, and the meat taste ranges from a bitter to sweet flavour. ','5','45','apple.jpg','4',NULL);

--PINEAPPLE
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('16','PINEAPPLE','FRUIT','The pineapple is a tropical fruiting plant that is the most economically important of the bromeliaceae family. It is low in calories and high in vitamins and minerals. One cup of pineapple chunks will deliver: vitamin c.','2','20', 'pineapple.jpg','4',NULL);

--STARWBERRY
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('17','STARWBERRY','FRUIT','The strawberry is a succulent and fragrant fruit with a bright red color that comes from the same plant. It is known as the queen of the fruit in the west.','2','20','strawberry.jpg','4',NULL);

--MANGO
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('18','MANGO','FRUIT','Mangoes are sweet, creamy fruits that have a range of possible health benefits. they are highly popular around the world. They are a great source of magnesium and potassium, both of which are connected to lower blood pressure and a regular pulse.','2','40', 'mango.jpg','4',NULL);

--BANANA
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('19','BANANA','FRUIT','A banana is an elongated, edible fruit – botanically a berry – produced by several kinds of large herbaceous flowering plants in the genus musa. In some countries, bananas used for cooking may be called "plantains", distinguishing them from dessert bananas. ','1','40','banana.jpg','4',NULL);

--AVOCADO
INSERT INTO PRODUCT(PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES('20','AVOCADO','FRUIT','The avocado is a tree originating in the americas which is likely native to the highland regions of south-central mexico to guatemala. It is classified as a member of the flowering plant family lauraceae. ','2.94','40','avocado.jpg','4','5');

--FISHMONGER
--SALMON
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('21', 'SALMON', 'FISH', 'Salmon is the common name for several species of ray-finned fish in the family salmonidae. Salmon is a rich source of omega-3 fatty acids (epa and dha) and potassium.', '4.5', '35' , 'salmon.jpg','3',NULL);

--TUNA
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('22', 'TUNA', 'FISH', 'Tuna is a saltwater fish eaten all over the world. it is incredibly nutritious and a great source of protein, omega-3 fatty acids.', '3.5', '5' , 'tuna.jpg','3',NULL);

--CRAB
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('23', 'CRAB', 'SHELLFISH', 'Crabmeat is the meat found within a crab. It is used in many cuisines across the world, prized for its soft, delicate and sweet taste. rich in vitamins and minerals, crab is also low in fat.','9', '25' , 'crab.jpg','3',NULL);

--OCTOPUS
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE,SHOP_ID, Rating) VALUES ('24', 'OCTOPUS', 'SHELLFISH', 'Octopus is an excellent source of omega-3 fatty acids, "good fats" linked to a range of heart-healthy benefits. Omega-3s can lower your blood pressure and slow the buildup of plaque in your arteries, reducing stress on the heart.', '10','5', 'octopus.jpg','3',NULL);

--TROUT
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('25', 'TROUT', 'FISH', 'Trout and other salmonids can efficiently digest foods that contain primarily protein (mostly from fish), and can obtain some of their energy from fats and, to a lesser extent, from carbohydrates. ', '3.5', '20' , 'trout.jpg','3','4');

--LOBSTER
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('26', 'LOBSTER', 'SHELLFISH', 'The king of the crustaceans, lobster is a delicacy that commands a very high price, with white, firm meat that is sweet and succulent. Before it is cooked, lobster shell has a very dark color.', '3.46', '15' , 'lobster.jpg','3',NULL);

--SHRIMP
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('27', 'SHRIMP', 'SHELLFISH', 'Shrimp may have a variety of health benefits. It is high in several vitamins and minerals, and is a rich source of protein. Eating shrimp may also promote heart and brain health due to its content of omega-3 fatty acids.', '5', '25' , 'shrimp.jpg','3',NULL);

--PRAWN
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE,SHOP_ID, Rating) VALUES ('28', 'PRAWN', 'SHELLFISH', 'Prawn are important types of seafood that are consumed worldwide. They are a rich source of selenium, one of the most effective antioxidants at maintaining healthy cells. ','6', '15' , 'prawn.jpg','3',NULL);

--SCAMPI
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('29', 'SCAMPI', 'SHELLFISH', 'The shelled tail meat is generally referred to as "scampi tails" or "wholetail scampi", although cheaper "re-formed scampi" can contain other parts together with other fish. It is served fried in batter or breadcrumbs and usually with chips and tartare sauce.', '6.5', '10' , 'scampi.jpg','3',NULL);

--BAKERY
--BREAD
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('30', 'BREAD','BAKED ITEMS', 'Bread is a staple food prepared from a dough of flour and water, usually by baking. The whole grains in wholemeal bread have many benefits. they can boost overall health and help reduce the risk of obesity and various other complications and diseases.', '1.5','50', 'bread.jpg','2',NULL);

--BAGEL
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('31', 'BAGEL','BAKED ITEMS', 'A bagel (also spelled beigel) is a type of bread, traditionally shaped by hand into the form of a ring from wheat dough, roughly hand-sized. It is made from whole grains.', '1','25', 'bagel.jpg','2',NULL);

--MUFFIN
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('32', 'MUFFIN','BAKED ITEMS', 'A muffin is an individual-sized, baked product. It can refer to two distinct items, a part-raised flatbread that is baked and then cooked on a griddle and a cupcake-like quickbread.', '1','60', 'muffin.jpg','2',NULL);

--CAKE
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('33', 'CAKE', 'BAKED ITEMS','Cake is a form of sweet food made from flour, sugar, and other ingredients, that is usually baked. In their oldest forms, cakes were modifications of bread, but cakes now cover a wide range of preparations.', '10','20', 'cake.jpg','2',NULL);

--PIZZA
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('34', 'PIZZA', 'BAKED ITEMS', 'Pizza is a savory dish of Italian origin consisting of a usually round, flattened base of leavened wheat-based dough topped with tomatoes, cheese, and often various other ingredients which is then baked at a high temperature.', '4','15', 'pizza.jpg','2',NULL);

--COOKIE
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('35', 'COOKIES','BAKED ITEMS', 'Cookies are broadly classified according to how they are formed or made, including at least these categories: bar cookies consist of batter or other ingredients that are poured or pressed into a pan. ', '1.5','50', 'cookie.jpg','2',NULL);

--CROISSANT
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('36', 'CROISSANT','BAKED ITEMS', 'A croissant is a buttery, crescent-shaped French pastry. good croissants are light, flaky, and delicately sweet. Compared to other sweets, croissant is distinguished by the content of protein.', '3','20', 'croissant.jpg','2',NULL);

--PASTRY
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('37', 'PASTRY','BAKED ITEMS', 'Pastry is a dough of flour, water and shortening that may be savoury or sweetened. "pastries" means many kinds of baked products made from ingredients such as flour, sugar, milk, butter, shortening, baking powder, and eggs.', '5','10', 'pastry.jpg','2',NULL);

--Donut
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('38', 'DONUT','BAKED ITEMS', 'A doughnut or donut is a type of food made from leavened fried dough. It is popular in many countries and is prepared in various forms as a sweet snack that can be homemade or purchased in bakeries, supermarkets, food stalls, and franchised specialty vendors.', '0.5','50', 'donut.jpg','2',NULL);

--DELICATESSEN
--SANDWICH
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('39', 'SANDWICH','READY TO EAT ITEMS', 'A sandwich is a food typically consisting of vegetables, sliced cheese or meat, placed on or between slices of bread, or more generally any dish wherein bread serves as a container or wrapper for another food type.', '5','50', 'sandwich.jpg','5',NULL);

--SALAD
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('40', 'SALAD','READY TO EAT ITEMS', 'A salad is a dish consisting of a mixture of small pieces of food, usually vegetables or fruit. However, different varieties of salad may contain virtually any type of ready-to-eat food.','10', '20', 'salad.jpg','5',NULL);

--YOGURT
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('41', 'YOGURT','READY TO EAT ITEMS', 'Yogurt is a dairy product made by fermenting milk with a yogurt culture. It provides protein and calcium, and it may enhance healthy gut bacteria.', '5','20', 'yogurt.jpg','5',NULL);

--COLD CUT MEAT
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('42', 'COLD CUT MEAT','READY TO EAT ITEMS', 'cold cut meats are precooked or cured meats that are sliced and served cold or hot. They are typically served in sandwiches or on a tray.', '7','20', 'coldcutmeat.jpg','5',NULL);

--CHEESE
INSERT INTO PRODUCT (PRODUCT_ID, PRODUCT_TITLE, CATEGORY, DESCRIPTION, PRICE, STOCK_QUANTITY, IMAGE, SHOP_ID, Rating) VALUES ('43', 'CHEESE','READY TO EAT ITEMS', 'Cheese is a dairy product, derived from milk and produced in a wide range of flavors, textures and forms by coagulation of the milk protein casein. It comprises proteins and fat from milk.', '3','20', 'cheese.jpg','5',NULL);



--COLLECTION SLOT
INSERT INTO COLLECTIONSLOT (slot_id, day, collectiontime, week_count, number_of_orders) VALUES (1,'Wednesday','10 AM to 1 PM','This Week','');
INSERT INTO COLLECTIONSLOT (slot_id, day, collectiontime, week_count, number_of_orders) VALUES	(2,'Wednesday','1 PM to 4PM','Next Week','');
INSERT INTO COLLECTIONSLOT (slot_id, day, collectiontime, week_count, number_of_orders) VALUES (3,'Wednesday','1 PM to 4PM','Next Week','');
INSERT INTO COLLECTIONSLOT (slot_id, day, collectiontime, week_count, number_of_orders) VALUES (4,'Thursday','4PM to 7PM','Next Week','');
INSERT INTO COLLECTIONSLOT (slot_id, day, collectiontime, week_count, number_of_orders) VALUES (5,'Thursday','10 AM to 1 PM','This Week','');
INSERT INTO COLLECTIONSLOT (slot_id, day, collectiontime, week_count, number_of_orders) VALUES (6,'Thursday','4PM to 7PM','This Week','');
INSERT INTO COLLECTIONSLOT (slot_id, day, collectiontime, week_count, number_of_orders) VALUES (7,'Friday','4PM to 7PM','This Week','');
INSERT INTO COLLECTIONSLOT (slot_id, day, collectiontime, week_count, number_of_orders) VALUES (8,'Friday','4PM to 7PM','This Week','');
INSERT INTO COLLECTIONSLOT (slot_id, day, collectiontime, week_count, number_of_orders) VALUES (9,'Friday','10 AM to 1 PM','This Week','');
INSERT INTO COLLECTIONSLOT (slot_id, day, collectiontime, week_count, number_of_orders) VALUES (10,'Wednesday','1 PM to 4PM','Next Week','');

--ORDER DETAIL
INSERT INTO ORDERDETAIL (order_id, customer_id, status , slot_id ) VALUES ('1', '1','completed','1');
INSERT INTO ORDERDETAIL (order_id, customer_id , status , slot_id ) VALUES ('2', '8','completed','2');
INSERT INTO ORDERDETAIL (order_id, customer_id,  status , slot_id ) VALUES ('3', '6','completed','3');
INSERT INTO ORDERDETAIL (order_id, customer_id , status , slot_id ) VALUES ('4', '12','completed','4');
INSERT INTO ORDERDETAIL (order_id, customer_id , status , slot_id ) VALUES ('5', '17','completed','5');
INSERT INTO ORDERDETAIL (order_id, customer_id , status , slot_id ) VALUES ('6', '2','completed','6');
INSERT INTO ORDERDETAIL (order_id, customer_id, status , slot_id ) VALUES ('7', '23','completed','7');
INSERT INTO ORDERDETAIL (order_id, customer_id , status , slot_id ) VALUES ('8', '22','completed','8');
INSERT INTO ORDERDETAIL (order_id, customer_id , status , slot_id ) VALUES ('9', '13','completed','9');
INSERT INTO ORDERDETAIL (order_id, customer_id , status , slot_id ) VALUES ('10', '6','completed','10');

--ORDER PRODUCT
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,1,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,3,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,5,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,7,3);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,9,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,11,3);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,13,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,15,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,17,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,19,5);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,21,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,23,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,25,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,27,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,29,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,2,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,4,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,6,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,8,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,10,5);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,12,3);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,14,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,16,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,18,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,20,6);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,22,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,24,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,26,6);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,28,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,30,1);

INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,31,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,32,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,33,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,34,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,35,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,36,5);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,37,3);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,38,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,39,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,40,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,41,6);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,42,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (1,43,1);


INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,2,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,4,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,6,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,8,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,10,5);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,12,3);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,14,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,16,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,18,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,20,6);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,22,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,24,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,26,6);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,28,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,30,1);

INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,31,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,32,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,33,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,34,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,35,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,36,5);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,37,3);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,38,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,39,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,40,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,41,6);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,42,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (2,43,1);



INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (3,16,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (3,9,6); 
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (3,6,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (3,5,3);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (3,2,4);                                                                           
                                                                           
                                                                           
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (4,2,2);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (5,6,3);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (6,6,1);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (7,6,4);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (8,1,3);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (9,1,5);
INSERT INTO ORDERPRODUCT (order_id, product_id, product_quantity ) VALUES (10,1,2);

--REVIEW
--INSERT INTO REVIEW (review_id , review_comment, rating , product_id, customer_id ) VALUES (1,'Very high quality products. Totally satisfied',4,2,1);
--INSERT INTO REVIEW (review_id , review_comment, rating , product_id, customer_id) VALUES (2,'Extremely satisfied. Would re order again',5,3,5);
--INSERT INTO REVIEW (review_id , review_comment, rating , product_id, customer_id) VALUES (3,'The price was a expensive but the quality was good',3,13,10);
--INSERT INTO REVIEW (review_id , review_comment, rating , product_id, customer_id) VALUES (4,'Was expecting higher quality product but was not too bad',3,29,23);

--PAYMENT
INSERT INTO PAYMENT(payment_id, customer_id, product_id, order_id, paiddate) VALUES (1,1, 4, 1,'05/25/2022');
INSERT INTO PAYMENT(payment_id, customer_id, product_id, order_id, paiddate) VALUES (2,6, 14,3,'05/20/2022');
INSERT INTO PAYMENT(payment_id, customer_id, product_id, order_id, paiddate) VALUES (3,12,4,2,'05/21/2022');
INSERT INTO PAYMENT(payment_id, customer_id, product_id, order_id, paiddate) VALUES (4,23,3,7,'05/29/2022');
INSERT INTO PAYMENT(payment_id, customer_id, product_id, order_id, paiddate) VALUES (5,22,16,8,'05/26/2022');
INSERT INTO PAYMENT(payment_id, customer_id, product_id, order_id, paiddate) VALUES (6,15,13,5,'05/22/2022');
INSERT INTO PAYMENT(payment_id, customer_id, product_id, order_id, paiddate) VALUES (7,11,12,4,'05/21/2022');
INSERT INTO PAYMENT(payment_id, customer_id, product_id, order_id, paiddate) VALUES (8,1, 4, 10,'05/21/2022');
INSERT INTO PAYMENT(payment_id, customer_id, product_id, order_id, paiddate) VALUES (9,6, 14,9,'05/24/2022');
INSERT INTO PAYMENT(payment_id, customer_id, product_id, order_id, paiddate) VALUES (10,12,4,6,'05/24/2022');