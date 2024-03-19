--Create table
CREATE TABLE IF NOT EXISTS products(
    product_id INT(11) NOT NULL AUTO_INCREMENT,
    product_name VARCHAR(255) NOT NULL,
    product_type VARCHAR(100) NOT NULL,
    product_description TEXT NOT NULL,
    product_price DECIMAL(6, 2) NOT NULL,
    product_image1 VARCHAR(255) NOT NULL,
    product_image2 VARCHAR(255) NOT NULL,
    product_image3 VARCHAR(255) NOT NULL,
    product_image4 VARCHAR(255) NOT NULL,
    PRIMARY KEY(product_id)
);

CREATE TABLE IF NOT EXISTS orders(
    order_id INT(11) NOT NULL AUTO_INCREMENT,
    order_total DECIMAL(6, 2) NOT NULL,
    user_id INT(11) NOT NULL,
    user_phone INT(11) NOT NULL,
    user_address VARCHAR(255) NOT NULL,
    order_date DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(order_id)
);

CREATE TABLE IF NOT EXISTS order_items(
    item_id INT(11) NOT NULL,
    order_id INT(11) NOT NULL,
    product_id INT(11) NOT NULL,
    product_name VARCHAR(255) NOT NULL,
    product_price DECIMAL(6, 2) NOT NULL,
    product_image1 VARCHAR(255) NOT NULL,
    user_id INT(11) NOT NULL,
    PRIMARY KEY(item_id)
);

CREATE TABLE IF NOT EXISTS users(
    user_id INT(11) NOT NULL,
    user_email VARCHAR(100) NOT NULL,
    user_username VARCHAR(255) NOT NULL,
    user_password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY(user_id),
    UNIQUE KEY(user_email)
);

--Insert value
INSERT INTO products (product_name, product_type, product_description, product_price, product_image1, product_image2, product_image3, product_image4)
VALUES ('Grafen Root Booster Shampoo (500ml)', 'Hair Care', 'Introducing our Anti-Hair Loss Shampoo, meticulously crafted with a perfect pH balance of 5.86 to nourish both hair and scalp without any stickiness. 
Reflecting user feedback and crafted with care, it is produced by a CGMP certified manufacturer and has passed Subacid Conformity Test. Enriched with genuine ingredients, including 22 kinds of amino acids, 2 types of hair oil, and 2 plant-derived scalp ingredients, along with 6 natural surfactants. Highly recommended for those seeking effective hair loss prevention, thicker hair, and scalp health. Say goodbye to waste and dandruff, and hello to healthier, fuller locks!',
'RM72.60', 'images/shampoo1.png', 'images/shampoo2.png', 'images/shampoo3.png', 'images/shampoo4.png');

INSERT INTO products (product_name, product_type, product_description, product_price, product_image1, product_image2, product_image3, product_image4)
VALUES ('Better Not Younger Second Chance Repairing Conditioner For Dry Or Damaged Hair 473ml/16oz', 'Hair Care', '
Everyone deserves a second chance in life, whoever they are. Our hair is no different. No matter how much you have colored or treated it, you can still give it an opportunity to shine. 
Our repairing conditioner will give even the most damaged hair a new chance for moisture-rich, shiny healthy-looking hair.',
'RM130.00', 'images/conditioner1.png', 'images/conditioner2.png', 'images/conditioner3.png', 'images/conditioner4.png');

INSERT INTO products (product_name, product_type, product_description, product_price, product_image1, product_image2, product_image3, product_image4)
VALUES ('The Body Shop Shea Butter Richly Replenishing Hair Mask 240ml', 'Hair Care', 'Transform your hair with our intensely nourishing Shea Butter Hair Mask. 
Formulated with quality ingredients like handcrafted Community Fair Trade shea butter, cocoa butter, organic virgin coconut oil, and organic olive oil, it leaves hair feeling healthier, softer, and less frizzy. 
Use weekly as part of our 3-step Shea hair care routine to strengthen hair, reduce breakage, and reveal locks that are deeply replenished and revitalized.', 
'RM99.00', 'images/hairmask1.png', 'images/hairmask2.png', 'images/hairmask3.png', 'images/hairmask4.png');

INSERT INTO products (product_name, product_type, product_description, product_price, product_image1, product_image2, product_image3, product_image4)
VALUES ('Shiseido Macherie Hair Oil 60ml', 'Hair Care', 'This oil-type treatment oil contains champagne honey essence, efficiently enters the core of hairs and gives intensive nourishment & damage care. 
It offers protection against damage easily caused by the heat from hair dryer. The newly added anti-smoke fragrance effectively removes any unpleasant smell such as cigarette. 
With the characteristic nice floral (MA CHERIE) fragrance.', 
'RM69.00', 'images/hairoil1.png', 'images/hairoil2.png', 'images/hairoil3.png', 'images/hairoil4.png');

INSERT INTO products (product_name, product_type, product_description, product_price, product_image1, product_image2, product_image3, product_image4)
VALUES ('LA’DOR Wonder Hair Serum 100ml', 'Hair Care', 'LA’DOR Wonder Hair Serum is a light moisturizing serum that smoothes and protects dry and frizzy hair from high temperatures, coating it with an invisible moisture barrier. 
Formulated with Icelandic cetraria extract (Icelandic moss) and algae to soften hair, eliminates dryness, prevent brittleness, promote hair elasticity and strength without weighing it down.',
'RM135.00', 'images/hairserum1.png', 'images/hairserum2.png', 'images/hairserum3.png', 'images/hairserum4.png');