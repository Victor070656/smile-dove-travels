-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2025 at 08:39 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdtravels`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `id` int(11) NOT NULL,
  `applicationid` varchar(30) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `place_of_birth` varchar(255) NOT NULL,
  `gender` enum('Male','Female') NOT NULL,
  `nationality` varchar(100) DEFAULT 'Nigerian',
  `phone` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` varchar(30) NOT NULL DEFAULT 'pending',
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`id`, `applicationid`, `userid`, `full_name`, `dob`, `place_of_birth`, `gender`, `nationality`, `phone`, `email`, `status`, `message`, `created_at`) VALUES
(1, '67e56f7b268f1', '67e3d4d10fa8c', 'Lester Brady', '1995-05-20', 'Aut obcaecati ea vol', 'Male', 'Anim pariatur Labor', '+1 (364) 448-9174', 'fatum@example.com', 'pending', '', '2025-03-27 15:32:11'),
(2, '67e5717a67b3f', '67e3d4d10fa8c', 'Colette Jennings', '2002-11-20', 'Dolorum et possimus', 'Female', 'Perferendis dignissi', '+1 (872) 127-9123', 'byxi@example.com', 'pending', NULL, '2025-03-27 15:40:42');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `blogid` varchar(30) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blogid`, `title`, `content`, `image`, `created_at`) VALUES
(1, '67eb73b56cf6b', 'Accusamus dolor eos', 'about the blog post', '0104202514590410-greenbridge-how-it-works-page@2x-680x510.png', '2025-04-01 06:03:49'),
(2, '67eb73cb5e113', 'Ut molestiae dolore ', '', '01042025070411hero-bg.png', '2025-04-01 06:04:11'),
(3, '67eb759e062cb', 'Aliquip placeat qui', 'Eaque dolorem eum nu', '01042025071158testimonials-bg.jpg', '2025-04-01 06:11:58');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `certificate_files` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `applicant_id`, `certificate_files`) VALUES
(1, 2, '[\"uploads/visa_documents/aaa.jpg\"]');

-- --------------------------------------------------------

--
-- Table structure for table `employment`
--

CREATE TABLE `employment` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `employment_status` enum('Employed','Self-Employed','Student','Unemployed') NOT NULL,
  `employer_name` varchar(255) DEFAULT NULL,
  `monthly_income` decimal(10,2) DEFAULT NULL,
  `bank_statement` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employment`
--

INSERT INTO `employment` (`id`, `applicant_id`, `employment_status`, `employer_name`, `monthly_income`, `bank_statement`) VALUES
(1, 1, 'Unemployed', 'Leslie Mcmillan', 88.00, ''),
(2, 2, 'Employed', 'Jolie Bentley', 393.00, 'uploads/visa_documents/1743090031_6-Benefits-of-Higher-Ed-feature-image-scaled.webp');

-- --------------------------------------------------------

--
-- Table structure for table `flight_bookings`
--

CREATE TABLE `flight_bookings` (
  `id` int(11) NOT NULL,
  `userid` varchar(20) NOT NULL,
  `ref` varchar(30) DEFAULT NULL,
  `fullname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `id_type` varchar(50) NOT NULL,
  `id_num` varchar(50) NOT NULL,
  `id_exp` varchar(20) NOT NULL,
  `nationality` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `depart_city` varchar(30) NOT NULL,
  `dest_country` varchar(50) NOT NULL,
  `dest_city` varchar(30) NOT NULL,
  `depart_date` date NOT NULL,
  `ticket_type` varchar(20) NOT NULL,
  `airline_class` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  `message` text DEFAULT 'Ticket is being processed',
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight_bookings`
--

INSERT INTO `flight_bookings` (`id`, `userid`, `ref`, `fullname`, `dob`, `gender`, `id_type`, `id_num`, `id_exp`, `nationality`, `email`, `phone`, `depart_city`, `dest_country`, `dest_city`, `depart_date`, `ticket_type`, `airline_class`, `price`, `status`, `message`, `created_at`) VALUES
(1, '1', 'Mc4bceIc02dfC3X2aRc1', 'Russell Ramos', '1972-05-31', 'Female', 'International Passport', '988', 'Non cupidatat quasi ', 'Esse in quo Nam sus', 'mypubytig@example.com', '+1 (524) 217-4047', 'Columbus', '', 'Arlington', '1973-12-26', 'One-Way', 'Economy', 250, 'pending', 'Ticket is being processed', '2025-03-26 09:41:47'),
(2, '67e3d4d10fa8c', '8G1E801Jd4F9814eP157', 'Odessa Coleman', '1990-10-10', 'Female', 'National ID Card', '760', 'Officiis fugiat volu', 'Officia dolor sed vo', 'komenekyv@example.com', '+1 (706) 445-6093', 'Las Vegas', '', 'Omaha', '2017-10-17', 'Round-Trip', 'Premium', 700, 'pending', 'Ticket is being processed', '2025-03-26 16:33:43');

-- --------------------------------------------------------

--
-- Table structure for table `flight_prices`
--

CREATE TABLE `flight_prices` (
  `id` int(11) NOT NULL,
  `class` varchar(50) NOT NULL,
  `one_way` float NOT NULL,
  `round_trip` float NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flight_prices`
--

INSERT INTO `flight_prices` (`id`, `class`, `one_way`, `round_trip`, `created_at`) VALUES
(1, 'Economy', 250, 450, '2025-03-25 22:57:22'),
(2, 'Business', 300, 600, '2025-03-25 22:57:22'),
(3, 'Premium', 330, 700, '2025-03-25 22:57:22'),
(4, 'First', 500, 1000, '2025-03-25 22:57:22');

-- --------------------------------------------------------

--
-- Table structure for table `health_security`
--

CREATE TABLE `health_security` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `medical_certificate` varchar(255) DEFAULT NULL,
  `police_clearance` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `id` int(11) NOT NULL,
  `hotelid` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`id`, `hotelid`, `name`, `country`, `city`, `address`, `description`, `image`, `created_at`) VALUES
(1, '67e2b74c271ae', 'Tucker Jimenezz', 'Molestiae aut dolore', 'Indianapolis', '87 Nobel Parkway', 'Dolores enim lorem c Google Fonts makes it easy to bring personality and performance to your websites and products. Our robust catalog of open-source fonts and icons makes it easy to integrate expressive type and icons seamlessly — no matter where you are in the world. Google Fonts makes it easy to bring personality and performance to your websites and products. Our robust catalog of open-source fonts and icons makes it easy to integrate expressive type and icons seamlessly — no matter where you are in the world. Google Fonts makes it easy to bring personality and performance to your websites and products. Our robust catalog of open-source fonts and icons makes it easy to integrate expressive type and icons seamlessly — no matter where you are in the world. Google Fonts makes it easy to bring personality and performance to your websites and products. Our robust catalog of open-source fonts and icons makes it easy to integrate expressive type and icons seamlessly — no matter where you are in the world.', '250325190928368026339.jpg', '2025-03-25 15:01:48'),
(2, '67e2ea8830ab4', 'Bianca Mendez Hotel', 'Dolor rem nesciunt ', 'Oakland', '96 Milton Drive', 'Totam aut quia anim Just to name a few, it is only the Transaction Resource that is made available currently in this package. Development is ongoing while releases are Stable. Incase you find a BUG/Security Issue, Please, do be kind to open an issue or emailJust to name a few, it is only the Transaction Resource that is made available currently in this package. Development is ongoing while releases are Stable. Incase you find a BUG/Security Issue, Please, do be kind to open an issue or email Just to name a few, it is only the Transaction Resource that is made available currently in this package. Development is ongoing while releases are Stable. Incase you find a BUG/Security Issue, Please, do be kind to open an issue or email', '2503251910216708_ho_00_p_1024x768.jpg', '2025-03-25 18:40:24');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_reservations`
--

CREATE TABLE `hotel_reservations` (
  `id` int(11) NOT NULL,
  `reservationid` varchar(20) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `hotelid` varchar(20) NOT NULL,
  `roomid` varchar(20) NOT NULL,
  `ref` varchar(30) DEFAULT NULL,
  `fullname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `idtype` varchar(30) NOT NULL,
  `idnum` varchar(30) NOT NULL,
  `idexp` varchar(30) DEFAULT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `duration` int(11) NOT NULL,
  `guests` int(11) DEFAULT NULL,
  `amount` float NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_reservations`
--

INSERT INTO `hotel_reservations` (`id`, `reservationid`, `userid`, `hotelid`, `roomid`, `ref`, `fullname`, `email`, `phone`, `gender`, `nationality`, `idtype`, `idnum`, `idexp`, `checkin`, `checkout`, `duration`, `guests`, `amount`, `created_at`) VALUES
(1, '67e425c64ac27', '67e3d4d10fa8c', '67e2b74c271ae', '67e2e1ffa6a29', 'ab613PeOJeWeaaV5f9fb', 'Upton Rosa', 'heledekuk@example.com', '+1 (143) 153-9847', 'Male', 'Voluptates in dolor ', 'International Passport', '398', 'Nulla exercitation m', '2025-03-26', '2025-03-30', 4, 10, 760, '2025-03-26 17:05:26'),
(2, '67e4272defbbf', '67e3d4d10fa8c', '67e2ea8830ab4', '67e2ebaea94c7', 'a8b2dfDXe8bf2O8fdHB9', 'Vladimir Baker', 'lygoguma@example.com', '+1 (656) 373-2544', 'Male', 'Aliquam in irure imp', 'National ID Card', '506', 'Mollitia in excepteu', '2025-03-26', '2025-03-29', 3, 1, 1194, '2025-03-26 17:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `hotel_rooms`
--

CREATE TABLE `hotel_rooms` (
  `id` int(11) NOT NULL,
  `hotelid` varchar(20) NOT NULL,
  `roomid` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `roomtype` varchar(20) NOT NULL,
  `max_guest` int(11) NOT NULL,
  `price` float NOT NULL,
  `available` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hotel_rooms`
--

INSERT INTO `hotel_rooms` (`id`, `hotelid`, `roomid`, `name`, `roomtype`, `max_guest`, `price`, `available`, `created_at`) VALUES
(1, '67e2b74c271ae', '67e2e1ffa6a29', 'Sheila Norris', 'Double', 10, 190, 1, '2025-03-25 18:03:59'),
(2, '67e2b74c271ae', '67e2e8514d2c9', 'Mannix Mcgee', 'Suite', 25, 684, 0, '2025-03-25 18:30:57'),
(3, '67e2ea8830ab4', '67e2ebaea94c7', 'Ethan Walker', 'Double', 10, 398, 0, '2025-03-25 18:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `passports`
--

CREATE TABLE `passports` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `passport_number` varchar(50) NOT NULL,
  `issue_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `passport_scan` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `passports`
--

INSERT INTO `passports` (`id`, `applicant_id`, `passport_number`, `issue_date`, `expiry_date`, `passport_scan`) VALUES
(1, 1, '383', '2009-08-08', '1970-11-25', ''),
(2, 2, '386', '1970-05-12', '1995-05-23', 'uploads/visa_documents/1743090031__.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `sponsorships`
--

CREATE TABLE `sponsorships` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `sponsor_name` varchar(255) DEFAULT NULL,
  `sponsor_relationship` varchar(100) DEFAULT NULL,
  `sponsor_letter` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sponsorships`
--

INSERT INTO `sponsorships` (`id`, `applicant_id`, `sponsor_name`, `sponsor_relationship`, `sponsor_letter`) VALUES
(1, 1, 'Salvador Irwin', 'Culpa laboriosam ci', ''),
(2, 2, 'Vladimir Reid', 'Quaerat elit totam ', 'uploads/visa_documents/1743090031_0ce9fc4f573ea370e1bfb32b12b58c82.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `position` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `position`, `message`, `created_at`) VALUES
(1, 'Chinedu Okechukwu', 'Student', 'I was worried about my student visa for Canada, but Smile Dove Travels handled everything smoothly. I got my visa in just 3 weeks! Highly recommended.', '2025-04-02 18:19:07'),
(2, 'Mrs. Adeola', 'Business woman', 'I joined their group pilgrimage to Jerusalem, and it was a life-changing experience! Everything was well-planned, from flights to accommodation.', '2025-04-02 18:24:33'),
(3, 'Mr. Kunle B.', 'Manager', 'Smile Dove Travels made my business trip to Dubai hassle-free. Visa processing and flight booking were handled professionally.', '2025-04-02 18:45:19');

-- --------------------------------------------------------

--
-- Table structure for table `travel_details`
--

CREATE TABLE `travel_details` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `destination_country` varchar(100) NOT NULL,
  `visa_type` varchar(30) NOT NULL,
  `purpose` varchar(255) NOT NULL,
  `entry_date` date NOT NULL,
  `exit_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel_details`
--

INSERT INTO `travel_details` (`id`, `applicant_id`, `destination_country`, `visa_type`, `purpose`, `entry_date`, `exit_date`) VALUES
(1, 1, 'Lorem omnis qui et a', 'Work', 'Id fuga Est et dol', '1992-07-04', '2021-10-05'),
(2, 2, 'Rerum magni laborum', 'Business', 'Ut tempor nulla dolo', '1994-07-27', '2016-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE `uploads` (
  `id` int(11) NOT NULL,
  `applicant_id` int(11) NOT NULL,
  `document_type` varchar(100) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `uploaded_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `userid` varchar(30) NOT NULL,
  `fullname` varchar(150) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `userid`, `fullname`, `email`, `password`, `created_at`) VALUES
(1, '67e3d4d10fa8c', 'Vic Ike', 'ike@gmail.com', '000000', '2025-03-26 11:20:01'),
(2, '67ed81b13502b', 'Rhoda Hardin', 'fobu@example.com', '000000', '2025-04-02 19:28:01');

-- --------------------------------------------------------

--
-- Table structure for table `visa_prices`
--

CREATE TABLE `visa_prices` (
  `id` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visa_prices`
--

INSERT INTO `visa_prices` (`id`, `price`) VALUES
(1, 150);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `employment`
--
ALTER TABLE `employment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `flight_bookings`
--
ALTER TABLE `flight_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `flight_prices`
--
ALTER TABLE `flight_prices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `health_security`
--
ALTER TABLE `health_security`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_reservations`
--
ALTER TABLE `hotel_reservations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `passports`
--
ALTER TABLE `passports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `passport_number` (`passport_number`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `sponsorships`
--
ALTER TABLE `sponsorships`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_details`
--
ALTER TABLE `travel_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `uploads`
--
ALTER TABLE `uploads`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_id` (`applicant_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visa_prices`
--
ALTER TABLE `visa_prices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employment`
--
ALTER TABLE `employment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flight_bookings`
--
ALTER TABLE `flight_bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `flight_prices`
--
ALTER TABLE `flight_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `health_security`
--
ALTER TABLE `health_security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hotel_reservations`
--
ALTER TABLE `hotel_reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hotel_rooms`
--
ALTER TABLE `hotel_rooms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `passports`
--
ALTER TABLE `passports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sponsorships`
--
ALTER TABLE `sponsorships`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `travel_details`
--
ALTER TABLE `travel_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `uploads`
--
ALTER TABLE `uploads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visa_prices`
--
ALTER TABLE `visa_prices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `education`
--
ALTER TABLE `education`
  ADD CONSTRAINT `education_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `employment`
--
ALTER TABLE `employment`
  ADD CONSTRAINT `employment_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `health_security`
--
ALTER TABLE `health_security`
  ADD CONSTRAINT `health_security_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `passports`
--
ALTER TABLE `passports`
  ADD CONSTRAINT `passports_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sponsorships`
--
ALTER TABLE `sponsorships`
  ADD CONSTRAINT `sponsorships_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `travel_details`
--
ALTER TABLE `travel_details`
  ADD CONSTRAINT `travel_details_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `uploads`
--
ALTER TABLE `uploads`
  ADD CONSTRAINT `uploads_ibfk_1` FOREIGN KEY (`applicant_id`) REFERENCES `applicants` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
