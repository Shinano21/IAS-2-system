-- Delimiter for stored procedure
DELIMITER $$

-- Stored Procedure: generate_and_insert_otp
CREATE DEFINER=`root`@`localhost` PROCEDURE `generate_and_insert_otp` (IN `user_email` VARCHAR(100))
BEGIN
    DECLARE otp INT;
    SET otp = FLOOR(100000 + RAND() * 900000);
    INSERT INTO otp (otp_number, email) VALUES (otp, user_email);
END$$

DELIMITER ;

-- Table structure for table `accounts`
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` ENUM('admin', 'bhw', 'resident') NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Insert data into `accounts`
INSERT INTO `accounts` (`id`, `first_name`, `last_name`, `email`, `password`, `user_type`) VALUES
(1, 'Alice Mae', 'Dela Torre', 'alaka@gmail.com', '$2y$10$/9UDudnwIIggnMaFtvMFM.sdTB1uw7H4fwFXhZ3gV9jBnWMmIgtqS', 'admin');

-- Table structure for table `otp`
CREATE TABLE `otp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `otp_number` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Auto-increment for table `accounts`
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

-- Auto-increment for table `otp`
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

-- Foreign key constraint for table `otp`
ALTER TABLE `otp`
  ADD CONSTRAINT `otp_ibfk_1` FOREIGN KEY (`email`) REFERENCES `accounts` (`email`) ON DELETE CASCADE;
