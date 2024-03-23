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

INSERT INTO products (product_name, product_type, product_description, product_price, product_image1, product_image2, product_image3, product_image4)
VALUES ('ZenyumSonic™ Electric Toothbrush', 'Dental Care', 'ZenyumSonic Electric Toothbrush Matte Black vibrates 33,000 times a minute (Faster than typical electric toothbrush) to help you clean your teeth more effectively. Comes with 3 different modes for all your different needs – Clean, Gentle, and White. Also, the multi-purpose brush head with tongue-cleaner ensures you can clean even more when you brush.',
'RM219.00', 'images/toothbrush1.png', 'images/toothbrush2.png', 'images/toothbrush3.png', 'images/toothbrush4.png');

INSERT INTO products (product_name, product_type, product_description, product_price, product_image1, product_image2, product_image3, product_image4)
VALUES ('Colgate Maximum Cavity Protection Great Regular Flavour Toothpaste', 'Dental Care', 'Colgate Maximum Cavity Protection Great Regular Flavour toothpaste prepares your child for life by making them strong from within and this strength is reflected in her smile. Colgate with Calcium Boost# adds natural calcium^ to their teeth. So her smile stays strong with within.',
'RM10.99', 'images/toothpaste1.png', 'images/toothpaste2.png', 'images/toothpaste3.png', 'images/toothpaste4.png');

INSERT INTO products (product_name, product_type, product_description, product_price, product_image1, product_image2, product_image3, product_image4)
VALUES ('LISTERINE TOTAL CARE SENSITIVE SOOTHING TASTE', 'Dental Care', 'Zero Alcohol/ Soothing Taste Mouthwash Used twice daily after brushing, Listerine® Total Care Sensitive Mouthwash with Multi Benefits kills 99.9% of germs* and provides effective sensitivity protection',
'RM30.80', 'images/mouthwash1.png', 'images/mouthwash2.png', 'images/mouthwash3.png', 'images/mouthwash4.png');

INSERT INTO products (product_name, product_type, product_description, product_price, product_image1, product_image2, product_image3, product_image4)
VALUES ('Oral-B Essential Cavity Defense Mint Floss(50m)', 'Dental Care', 'Oral-B Essential Floss Cavity Defense helps remove plaque to reduce cavities. It cleans where your brush can’t reach, thanks to its wax coating and shred-resistant design. This floss effectively removes plaque and particles between your teeth and just below the gum line. Plus, it has a refreshing mint flavor.',
'RM9.90', 'images/toothfloss1.png', 'images/toothfloss2.png', 'images/toothfloss3.png', 'images/toothfloss4.png');

INSERT INTO products (product_name, product_type, product_description, product_price, product_image1, product_image2, product_image3, product_image4)
VALUES ('Vaseline Lip Therapy Original, 0.25oz.', 'Dental Care', 'Vaseline Lip Care has a complete range to help calm, soothe and instantly moisturize dry lips. Blended with a combination of petroleum jelly alongside a curated blend of trusted, lip-loving ingredients, Vaseline Lip Care is available in several variants to suit all skin types. With consistent use of your favorite Vaseline Lip Care, you can say farewell to dry lips forever.',
'RM6.00', 'images/lipbalm1.png', 'images/lipbalm2.png', 'images/lipbalm3.png', 'images/lipbalm4.png');
