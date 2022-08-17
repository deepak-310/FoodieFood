-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3305
-- Generation Time: Aug 17, 2022 at 12:41 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodiefood1`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `img` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `img`, `price`, `description`, `type`, `content`) VALUES
(1, 'Misal Pav', 'https://user-images.githubusercontent.com/99875657/182885564-918eca15-5796-4bd6-84d4-ad80f3a357b4.png', 40, 'Misal Pav is one such decadent treat', 'Breakfast', 'Veg'),
(2, 'Omlette pav', 'https://user-images.githubusercontent.com/99875657/182885601-6e49bf73-58b1-485a-b3b4-c1b61ea6e8eb.png', 35, 'unique combination of pav buns and omelette', 'Breakfast', 'Non-Veg'),
(3, 'Bhurji Pav', 'https://user-images.githubusercontent.com/99875657/182885651-5a76aaf6-6f4f-424d-a928-a047b4fce254.png', 35, 'It tastes delicious & goes well with rice, chapathi ,pav,bread', 'Breakfast', 'Non-Veg'),
(4, 'Vada Pav', 'https://user-images.githubusercontent.com/99875657/182885674-f9378dc4-700b-4744-ba7e-a4b7bba099ec.png', 13, 'Vada Pav Recipe made Mumbai style', 'Breakfast', 'Veg'),
(5, 'Samosa', 'https://user-images.githubusercontent.com/99875657/182885685-a2d0732b-77d8-40cd-ad4e-36bfc4d42954.png', 13, 'Samosa can be prepared and enjoyed in a myriad of different ways', 'Breakfast', 'Veg'),
(6, 'Pav Bhaji', 'https://user-images.githubusercontent.com/99875657/182885709-baedef50-ee7a-4cab-af82-832a775400a0.png', 60, 'India consisting of a thick vegetable curry', 'Breakfast', 'Veg'),
(7, 'Chicken Shawarma', 'https://user-images.githubusercontent.com/99875657/182885737-919fe454-dbb6-40b7-acd0-e7cf7ac56d2d.png', 60, 'Levantine dish consisting of meat cut into thin slices', 'Breakfast', 'Non-Veg'),
(8, 'Sandwich ', 'https://user-images.githubusercontent.com/99875657/182885763-efb11519-c065-47b0-abe1-c27bd11f4aef.png', 30, 'Test the best', 'Breakfast ', 'Veg'),
(9, 'Toast Butter', 'https://user-images.githubusercontent.com/99875657/182885776-5fb5457f-dcf0-48d9-bd2d-7b20364c19d6.png', 25, 'test the best', 'Breakfast ', 'Veg'),
(10, 'Tea', 'https://user-images.githubusercontent.com/99875657/183105164-9fb3ca6d-3be2-47cc-9511-24465a5a48d6.png', 7, 'tea', 'Drinks', 'Veg'),
(11, 'Cold Coffee ', 'https://user-images.githubusercontent.com/99875657/183104432-bb6f3c41-3437-4c53-a94e-5aa8cdbea177.png', 30, 'cold coffe', 'Drinks', 'Veg'),
(12, 'Mosambi Juice', 'https://user-images.githubusercontent.com/99875657/183104869-6de8c8eb-1f05-4ce1-a7d9-61044a5b489b.png', 4, 'juice', 'Drinks', 'Veg'),
(13, 'Lassi', 'https://user-images.githubusercontent.com/99875657/183104477-da19cac4-d7a5-44a4-9100-254c5c63520e.png', 20, 'lassi', 'Drinks', 'Veg'),
(14, 'Coffee', 'https://user-images.githubusercontent.com/99875657/183104451-1aacf807-8f72-495f-8c51-ede9380b2c21.png', 10, 'coffee', 'Drinks', 'Veg'),
(15, 'Chocolate MilkShake', 'https://user-images.githubusercontent.com/99875657/183104437-8dd26dba-7616-4a50-87d8-9b2a87e2b995.png', 40, 'chocolate ', 'Drinks', 'Veg'),
(16, 'Pepsi', 'https://user-images.githubusercontent.com/99875657/183104508-1d1c2fa5-f14b-4a46-8278-1eb05cafa86b.png', 32, 'cold drinks', 'Drinks', 'Veg'),
(17, 'CocaCola', 'https://user-images.githubusercontent.com/99875657/183104443-ae76936b-d4a5-402d-9eaf-34599819b3e9.png', 28, 'Cold drinks', 'Drinks', 'Veg'),
(18, 'Sada Dosa', 'https://user-images.githubusercontent.com/99875657/183114394-789ee049-6472-4879-963e-18b35b159613.png', 40, 'sada dosa', 'South', 'Veg'),
(19, 'Masala Dosa', 'https://user-images.githubusercontent.com/99875657/183114427-1ffea3fc-0551-4091-8694-ca6b69fa5fd6.png', 45, 'masala dosa', 'South', 'Veg'),
(20, 'Idli', 'https://user-images.githubusercontent.com/99875657/183114481-d0930106-2d5b-411d-9d95-9e3ad938c427.png', 30, 'idli', 'South', 'Veg'),
(21, 'Medu Vada', 'https://user-images.githubusercontent.com/99875657/183114514-bca60718-52e8-42eb-8c99-80af623e1a2d.png', 30, 'medi vada', 'South', 'Veg'),
(22, 'cheese Masala Dosa', 'https://user-images.githubusercontent.com/99875657/183114500-d3ea7d59-2977-437a-9df6-f0c7e4115a92.png', 40, 'cheese masala dosa', 'South', 'Veg'),
(23, 'Tomato Uttapa', 'https://user-images.githubusercontent.com/99875657/183114542-ed834ef3-1f62-442d-9a80-2ac8784d4343.png', 40, 'Uttapaa', 'South', 'Veg'),
(24, 'Dal Fry', 'https://user-images.githubusercontent.com/99875657/183126321-8248d056-23d8-4e75-adee-496b516ce8cb.png', 70, '', 'Veg', 'Veg'),
(25, 'Panner Butter ', 'https://user-images.githubusercontent.com/99875657/183126225-e29cda6c-71c5-4b40-b26a-795ead644007.png', 120, 'panner butter masala', 'Veg', 'Veg'),
(26, 'Mutter Panner', 'https://user-images.githubusercontent.com/99875657/183126251-467fd947-cec5-4511-a1f6-fbb2ba71ae28.png', 120, 'mutter panner', 'Veg', 'Veg'),
(27, 'Pulav', 'https://user-images.githubusercontent.com/99875657/183126215-b1f0b3db-4971-4d43-81cf-69c5add2061a.png', 85, 'pulav', 'Veg', 'Veg'),
(28, 'Vge Biryani', 'https://user-images.githubusercontent.com/99875657/183126196-de9190ac-7105-4b2d-bbe7-b1e64ebad1c0.png', 100, 'veg Biryani', 'Veg', 'Veg'),
(29, 'Dal Khichdi', 'https://user-images.githubusercontent.com/99875657/183126304-c20b6b00-8763-4008-b645-1be77ba90541.png', 70, 'dal khi', 'Veg', 'Veg'),
(30, 'Veg Fried Rice', 'https://user-images.githubusercontent.com/99875657/183126292-ca43eafa-18cc-4961-b881-51ae1e95e6e1.png', 90, 'Chinese ', 'Veg', 'Veg'),
(31, 'Hakka Noodles', 'https://user-images.githubusercontent.com/99875657/183126279-b4aaee81-bc24-4e6c-9513-ee326771f63b.png', 100, 'Chinese ', 'Veg', 'Veg'),
(32, 'Veg Manchow Soup ', 'https://user-images.githubusercontent.com/99875657/183126263-201e5f30-01a1-487c-806a-f368d76cd630.png', 60, 'Soup', 'Veg', 'Veg'),
(33, 'Samber Rice', 'https://user-images.githubusercontent.com/99875657/183126207-f77b7c7c-4e0c-43fa-b9d7-b23355a656e1.png', 80, 'samber', 'Veg', 'Veg'),
(34, 'Sweet Corn Soup', 'https://user-images.githubusercontent.com/99875657/183126333-470918ea-b9a0-4d1c-bf5b-714c11ca4095.png', 60, 'Sweet soup', 'Veg', 'Veg'),
(35, 'Butter Chicken ', 'https://user-images.githubusercontent.com/99875657/183135072-e8999da8-9061-4547-8566-50f2567b041b.png', 120, 'butter chicken ', 'Non-Veg', 'Non-Veg'),
(36, 'Chicken Biryani ', 'https://user-images.githubusercontent.com/99875657/183135512-a8988c43-ebda-4296-8156-2b90db028050.png', 130, 'biryani ', 'Non-veg', 'Non-veg'),
(37, 'Egg Curry ', 'https://user-images.githubusercontent.com/99875657/183135444-d92a5f26-2e95-40a0-98d0-8cafd3d16b4e.png', 110, 'egg curry', 'Non-veg', 'Non-veg'),
(38, 'Chi. Hakka Noodles', 'https://user-images.githubusercontent.com/99875657/183135293-200ca3fc-7e1f-4437-8b4a-b560369f5a4d.png', 95, 'Chinese ', 'Non-veg', 'Non-veg'),
(39, 'Chicken Soup', 'https://user-images.githubusercontent.com/99875657/183135273-aa8f2fdf-fffb-47a6-bce6-27413bbd4c7d.png', 60, 'Soup', 'Non-veg', 'Non-veg'),
(40, 'Chicken handi', 'https://user-images.githubusercontent.com/99875657/183135264-2450a73a-f41b-4533-ae7c-31a291a2135d.png', 130, 'handi with chicken and roti', 'Non-veg', 'Non-veg'),
(41, 'Chicken Sandwich ', 'https://user-images.githubusercontent.com/99875657/183135254-5a38312e-9158-4396-a6e5-c7b0527174d9.png', 50, 'chicken sandwich ', 'Non-veg', 'Non-veg'),
(42, 'Chicken Gravy ', 'https://user-images.githubusercontent.com/99875657/183135093-d19351a7-22a9-4bf3-84f0-d914d6a70bab.png', 90, 'chicken gravy with roti', 'Non-veg', 'Non-veg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `ord_id` int(50) NOT NULL,
  `user_id` int(50) NOT NULL,
  `food_name` varchar(255) NOT NULL,
  `total_amt` int(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `paymethod` varchar(50) NOT NULL,
  `time` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `order_time` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`ord_id`, `user_id`, `food_name`, `total_amt`, `type`, `paymethod`, `time`, `class`, `date`, `order_time`, `status`) VALUES
(9, 2, ' Misal Pav( 1)  Cold Coffee ( 2)  Samosa( 2)  ', 126, 'delivery', 'COD', '10Am', 'O101', '2022-08-09', '', 'Delivery'),
(10, 2, ' Misal Pav( 2)  ', 80, 'pickup', 'COD', '10:30pm', 'Null', '2022-08-09', '', ''),
(11, 2, ' Bhurji Pav( 3)  ', 105, 'pickup', 'COD', '10:30Am', 'Null', '2022-08-09', '', ''),
(12, 2, ' Omlette pav( 1)  Pepsi( 1)  ', 67, 'delivery', 'COD', '10Am', 'G606', '2022-08-12', '', ''),
(13, 2, ' Cold Coffee ( 2)  ', 60, 'delivery', 'COD', '10Am', 'G606', '2022-08-14', '', ''),
(14, 3, ' Vada Pav( 1)  Chicken Shawarma( 1)  ', 73, 'pickup', 'COD', '10Am', 'Null', '2022-08-15', '', 'Delivery'),
(15, 3, ' Misal Pav( 1)  CocaCola( 1)  ', 68, 'delivery', 'COD', '10Am', 'G303', '2022-08-15', '12:38:02', 'Delivery'),
(16, 2, ' Panner Butter ( 3)  Butter Chicken ( 3)  Pepsi( 4)  ', 848, 'delivery', 'COD', '10:30Am', 'G303', '2022-08-15', '19:53:30', 'NotDelivery'),
(17, 2, ' Masala Dosa( 1)  Pepsi( 1)  ', 77, 'delivery', 'COD', '11Am', 'O101', '2022-08-15', '00:14:31', 'Delivery'),
(18, 2, ' Toast Butter( 1)  ', 25, 'pickup', 'COD', '10:30pm', '-', '2022-08-15', '00:33:56', 'Proccessing'),
(19, 3, ' Pav Bhaji( 1)  Chicken Biryani ( 1)  Pepsi( 2)  ', 254, 'pickup', 'COD', '11Am', '-', '2022-08-16', '10:59:02', 'Delivery'),
(20, 2, ' Misal Pav( 1)  cheese Masala Dosa( 1)  ', 80, 'delivery', 'COD', '11:30Am', 'G303', '2022-08-16', '10:59:52', 'NotDelivery'),
(21, 4, ' Chicken Shawarma( 1)  Veg Manchow Soup ( 1)  Pepsi( 1)  ', 152, 'delivery', 'COD', '11:30Am', 'G606', '2022-08-16', '11:06:25', 'Delivery'),
(22, 2, ' Misal Pav( 1)  Masala Dosa( 2)  ', 130, 'pickup', 'COD', '10Am', '-', '2022-08-17', '14:49:19', 'NotDelivery');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `admissionNo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `admissionNo`, `password`, `gender`, `type`) VALUES
(1, 'Deepak', 'deepak@student.mes.ac.in', '9819257667', '2020PC0295', '81dc9bdb52d04dc20036dbd8313ed055', 'male', 'Admin'),
(2, 'krishnakant', 'krishnakant@student.mes.ac.in', '0987654356', '2020PC0987', '81dc9bdb52d04dc20036dbd8313ed055', 'male', 'Customer'),
(3, 'Nupoor', 'nupoor@student.mes.ac.in', '1234567894', '2020PC0396', 'e15df6a87469376d09a7d4cb46cdccaf', 'female', 'Customer'),
(4, 'Prasad', 'prasadbelote16@student.mes.ac.in', '9876543276', '2020PC7896', 'f09883b57b33d3d33c39bbc8dd3b2be2', 'male', 'Customer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `ord_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
