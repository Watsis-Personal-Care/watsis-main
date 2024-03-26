-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 25, 2024 at 11:36 AM
-- Server version: 8.2.0
-- PHP Version: 8.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbwatsis`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `order_id` int NOT NULL AUTO_INCREMENT,
  `order_total` decimal(6,2) NOT NULL,
  `user_id` int NOT NULL,
  `user_phone` int NOT NULL,
  `user_address` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

DROP TABLE IF EXISTS `order_items`;
CREATE TABLE IF NOT EXISTS `order_items` (
  `item_id` int NOT NULL,
  `order_id` int NOT NULL,
  `product_id` int NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `user_id` int NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_type` varchar(100) NOT NULL,
  `product_description` text NOT NULL,
  `product_price` decimal(6,2) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `product_image4` varchar(255) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf32;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_type`, `product_description`, `product_price`, `product_image1`, `product_image2`, `product_image3`, `product_image4`) VALUES
(1, 'Jo Malone Lime Basil & Mandarin Body & Hand Wash', 'Body Care', 'Elevate your daily routine with indulgent Lime Basil & Mandarin Body & Hand Wash. With naturally derived glycerine and meadowfoam seed oil, the formula transforms into a velvety foam, and cleanses and softens skin. Leave skin scented with this tantalising, zesty fragrance.', 385.00, 'images/bodywash1.png', 'images/bodywash2.png', 'images/bodywash3.png', 'images/bodywash4.png'),
(2, 'Chanel N°5 The Bath Soap', 'Body Care', 'In contact with water, the bath soap develops a light, creamy lather that leaves the skin soft and delicately fragranced. A peaceful moment steeped in the magic of N°5. Inspired by the smooth harmony of Rose and Jasmine that composes N°5, the bath soap was formulated as a sensual continuation of the N°5 floral bouquet.', 135.00, 'images/soap1.png', 'images/soap2.png', 'images/soap3.png', 'images/soap4.png'),
(3, 'The Ritual Of Sakura Body oil', 'Body Care', 'Make each day feel like a new beginning with The Ritual of Sakura dry body oil – containing 96% ingredients of natural origin. This fast-absorbing dry oil contains ultra-nourishing rich oils that leave your skin luminous and nourished. If you have dry and sensitive skin, this dry oil works to hydrate and smooth the skin\'s texture for a radiant appearance. The collection’s signature blend of elegant cherry blossom and creamy rice milk creates a rejuvenating fragrance experience for the senses.', 125.00, 'images/bodyoil1.png', 'images/bodyoil2.png', 'images/bodyoil3.png', 'images/bodyoil4.png'),
(4, 'CLOUD MILK Coconut + Maca Firming Body Cream', 'Body Care', 'A decadent body moisturizer that brings the benefits of herbal ingredients to the entire body. Formulated with eco-certified coconut fruit and maca, this rich yet non-greasy formula absorbs instantly to provide intense moisture and firming benefits to even the driest body skin.', 191.95, 'images/bodycream1.png', 'images/bodycream2.png', 'images/bodycream3.png', 'images/bodycream4.png'),
(5, 'INNISFREE Olive Vitamin E Real Lotion', 'Body Care', 'It provides strong moisturizing + nourishment with a soft milky texture containing olive oil and vitamin E. The formula, which meets olive oil with excellent moisturizing power and vitamin E with antioxidant effect, provides strong moisturization and nutrition. The smooth spreading texture quenches the dead skin cells of the skin and treats them with soft and smooth skin texture.', 84.00, 'images/bodylotion1.png', 'images/bodylotion2.png', 'images/bodylotion3.png', 'images/bodylotion4.png'),
(6, 'Grafen Root Booster Shampoo (500ml)', 'Hair Care', 'Introducing our Anti-Hair Loss Shampoo, meticulously crafted with a perfect pH balance of 5.86 to nourish both hair and scalp without any stickiness. \r\nReflecting user feedback and crafted with care, it is produced by a CGMP certified manufacturer and has passed Subacid Conformity Test. Enriched with genuine ingredients, including 22 kinds of amino acids, 2 types of hair oil, and 2 plant-derived scalp ingredients, along with 6 natural surfactants. Highly recommended for those seeking effective hair loss prevention, thicker hair, and scalp health. Say goodbye to waste and dandruff, and hello to healthier, fuller locks!', 72.60, 'images/shampoo1.png', 'images/shampoo2.png', 'images/shampoo3.png', 'images/shampoo4.png'),
(7, 'Better Not Younger Second Chance Repairing Conditioner For Dry Or Damaged Hair 473ml/16oz', 'Hair Care', '\r\nEveryone deserves a second chance in life, whoever they are. Our hair is no different. No matter how much you have colored or treated it, you can still give it an opportunity to shine. \r\nOur repairing conditioner will give even the most damaged hair a new chance for moisture-rich, shiny healthy-looking hair.', 130.00, 'images/conditioner1.png', 'images/conditioner2.png', 'images/conditioner3.png', 'images/conditioner4.png'),
(8, 'The Body Shop Shea Butter Richly Replenishing Hair Mask 240ml', 'Hair Care', 'Transform your hair with our intensely nourishing Shea Butter Hair Mask. \r\nFormulated with quality ingredients like handcrafted Community Fair Trade shea butter, cocoa butter, organic virgin coconut oil, and organic olive oil, it leaves hair feeling healthier, softer, and less frizzy. \r\nUse weekly as part of our 3-step Shea hair care routine to strengthen hair, reduce breakage, and reveal locks that are deeply replenished and revitalized.', 99.00, 'images/hairmask1.png', 'images/hairmask2.png', 'images/hairmask3.png', 'images/hairmask4.png'),
(9, 'Shiseido Macherie Hair Oil 60ml', 'Hair Care', 'This oil-type treatment oil contains champagne honey essence, efficiently enters the core of hairs and gives intensive nourishment & damage care. \r\nIt offers protection against damage easily caused by the heat from hair dryer. The newly added anti-smoke fragrance effectively removes any unpleasant smell such as cigarette. \r\nWith the characteristic nice floral (MA CHERIE) fragrance.', 69.00, 'images/hairoil1.png', 'images/hairoil2.png', 'images/hairoil3.png', 'images/hairoil4.png'),
(10, 'LA’DOR Wonder Hair Serum 100ml', 'Hair Care', 'LA’DOR Wonder Hair Serum is a light moisturizing serum that smoothes and protects dry and frizzy hair from high temperatures, coating it with an invisible moisture barrier. \r\nFormulated with Icelandic cetraria extract (Icelandic moss) and algae to soften hair, eliminates dryness, prevent brittleness, promote hair elasticity and strength without weighing it down.', 135.00, 'images/hairserum1.png', 'images/hairserum2.png', 'images/hairserum3.png', 'images/hairserum4.png'),
(11, 'ZenyumSonic™ Electric Toothbrush', 'Dental Care', 'ZenyumSonic Electric Toothbrush Matte Black vibrates 33,000 times a minute (Faster than typical electric toothbrush) to help you clean your teeth more effectively. Comes with 3 different modes for all your different needs – Clean, Gentle, and White. Also, the multi-purpose brush head with tongue-cleaner ensures you can clean even more when you brush.', 219.00, 'images/toothbrush1.png', 'images/toothbrush2.png', 'images/toothbrush3.png', 'images/toothbrush4.png'),
(12, 'Colgate Maximum Cavity Protection Great Regular Flavour Toothpaste', 'Dental Care', 'Colgate Maximum Cavity Protection Great Regular Flavour toothpaste prepares your child for life by making them strong from within and this strength is reflected in her smile. Colgate with Calcium Boost# adds natural calcium^ to their teeth. So her smile stays strong with within.', 10.99, 'images/toothpaste1.png', 'images/toothpaste2.png', 'images/toothpaste3.png', 'images/toothpaste4.png'),
(13, 'LISTERINE TOTAL CARE SENSITIVE SOOTHING TASTE', 'Dental Care', 'Zero Alcohol/ Soothing Taste Mouthwash Used twice daily after brushing, Listerine® Total Care Sensitive Mouthwash with Multi Benefits kills 99.9% of germs* and provides effective sensitivity protection', 30.80, 'images/mouthwash1.png', 'images/mouthwash2.png', 'images/mouthwash3.png', 'images/mouthwash4.png'),
(14, 'Oral-B Essential Cavity Defense Mint Floss(50m)', 'Dental Care', 'Oral-B Essential Floss Cavity Defense helps remove plaque to reduce cavities. It cleans where your brush can’t reach, thanks to its wax coating and shred-resistant design. This floss effectively removes plaque and particles between your teeth and just below the gum line. Plus, it has a refreshing mint flavor.', 9.90, 'images/toothfloss1.png', 'images/toothfloss2.png', 'images/toothfloss3.png', 'images/toothfloss4.png'),
(15, 'Vaseline Lip Therapy Original, 0.25oz.', 'Dental Care', 'Vaseline Lip Care has a complete range to help calm, soothe and instantly moisturize dry lips. Blended with a combination of petroleum jelly alongside a curated blend of trusted, lip-loving ingredients, Vaseline Lip Care is available in several variants to suit all skin types. With consistent use of your favorite Vaseline Lip Care, you can say farewell to dry lips forever.', 6.00, 'images/lipbalm1.png', 'images/lipbalm2.png', 'images/lipbalm3.png', 'images/lipbalm4.png'),
(16, 'Volcanic BHA Pore Cleansing Foam 150g', 'Skin Care', 'A deep-cleansing foam that contains Jeju Volcanic Clusters and BHA properties to absorb excess sebum and cleanse pores.', 48.00, 'images/cleanser1.png', 'images/cleanser2.png', 'images/cleanser3.png', 'images/cleanser4.png'),
(17, 'Dr. G R.E.D Blemish Clear Soothing Toner 300ml', 'Skin Care', 'This refreshing and cooling toner is a best-friend to acne and sensitive skin. With its gentle formula enriched with cica extract AHA and BHA, skin becomes smooth and soothed.', 135.00, 'images/toner1.png', 'images/toner2.png', 'images/toner3.png', 'images/toner4.png'),
(18, 'SK-II Skinpower Advanced Airy Cream 50g', 'Skin Care', 'SK-II’s prestige anti-aging solution, with the new formulation, harnesses the power of nature with powerful science. Packed with a combination of Pitera, Kinren4 and Peony Extract4, it revitalises the skin’s youth from this source, shields skin from daily stressors and reduces factors that trigger signs of ageing. Additionally, Peony extract has proven efficacy on reducing roughness and plumping up skin, for a youthful complexion, giving you the feel of 160% firm skin and 175% visible wrinkle reduction. The formula has an airy light texture that melts into the skin to intensely hydrate and lock in moisture.', 520.00, 'images/moisturizer1.png', 'images/moisturizer2.png', 'images/moisturizer3.png', 'images/moisturizer4.png'),
(19, 'MARIO BADESCU Anti Acne Serum 29ml', 'Skin Care', 'Anti Acne Serum is a preventive solution against breakouts. This product contains Salicylic Acid which inhibit bacteria from causing pimples. Its lightweight, non-drying gel formula is easily absorbed by the skin and helps maintain a clear and smooth complexion.', 118.00, 'images/anceserum1.png', 'images/anceserum2.png', 'images/anceserum3.png', 'images/anceserum4.png'),
(20, 'STARSKIN VIP Crème De La Crème™ Age-Perfecting Luxury Cream Coated Sheet Face Mask 18g', 'Skin Care', 'A one-of-a-kind sheet face mask made out of two layers. The inner layer is coated with a remarkable 18g of super-concentrated, luxurious cream while the outer protective layer functions as a shield. This delivery system allows you to force-feed dry and depleted skin with almost half a jar of cream in just one treatment to ensure ultimate nourishment and absorption, and spectacular result.', 75.00, 'images/masksheet1.png', 'images/masksheet2.png', 'images/masksheet3.png', 'images/masksheet4.png');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_username` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_email` (`user_email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
