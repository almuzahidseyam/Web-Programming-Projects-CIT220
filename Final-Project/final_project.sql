
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";



--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--

INSERT INTO `products` (`id`, `name`, `price`) VALUES
(1, 'Lenovo Vibe K5 (Gold, VoLTE update)', 6999),
(2, 'OnePlus 5 (Slate Gray, 6GB RAM + 64GB memory)', 32999),
(3, 'Intex Aqua Supreme+ (Black, 16GB, VoLTE)', 5499),
(4, 'Vivo V5Plus (Gold) with Offers', 25990),
(5, 'Oppo F1S (Gold, 64GB)', 17990),
(6, 'Moto G Plus, 4th Gen (Black, 32 GB)', 14999),
(7, 'Coolpad Note 5 (Royal Gold, 32 GB)', 10999),
(8, 'Micromax Canvas Fire 5 Q386 (Champagne)', 4999),
(9, 'Lenovo Z2 Plus (Black, 64GB)', 13499),
(10, 'Karbonn Aura Note 4G Volte_2GB RAM_16GB_ROM(Black)', 6099),
(11, 'Honor 6X (Gold, 64GB)', 13999),
(12, 'OnePlus 3T (Gunmetal, 6GB RAM + 64GB memory)', 29999),
(13, 'Verano cushion cover', 380),
(14, 'Jute Busket', 500),
(15, 'Flour Mate', 499);



CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `address line 1` varchar(255) NOT NULL,
  `address line 2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--

CREATE TABLE `users_products` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('Added to cart','Confirmed') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--


--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);


--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);


--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);


--
ALTER TABLE `users_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);


--


ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
ALTER TABLE `users_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

