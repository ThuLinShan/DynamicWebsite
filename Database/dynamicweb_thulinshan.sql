-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2024 at 03:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dynamicweb_thulinshan`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `user_id`, `subject`, `description`) VALUES
(1, 0, 'Test contact', '       Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deseru'),
(2, 0, 'Test contact', '                        \r\n                    &lt;?php elseif (isset($_SESSION[&#039;contact-success&#039;])) : ?&gt;\r\n                        &lt;div&gt;\r\n                            &lt;p class=&quot;font-yellow font-bold font-large text-center&quot;&gt;\r\n                                &lt;?= $_SESSION[&#039;contact-success&#039;];\r\n                                unset($_SESSION[&#039;contact-success&#039;]); ?&gt;\r\n                            &lt;/p&gt;\r\n                        &lt;/div&gt;\r\n                    &lt;?php endif ?&gt;\r\n\r\n                    &lt;?php elseif (isset($_SESSION[&#039;contact-success&#039;])) : ?&gt;\r\n                        &lt;div&gt;\r\n                            &lt;p class=&quot;font-yellow font-bold font-large text-center&quot;&gt;\r\n                                &lt;?= $_SESSION[&#039;contact-success&#039;];\r\n                                unset($_SESSION[&#039;contact-success&#039;]); ?&gt;\r\n                            &lt;/p&gt;\r\n                        &lt;/div&gt;\r\n                    &lt;?php endif ?&gt;\r\n'),
(3, 0, 'Bro seriously?', 'some Text, Some text ha ha some text, what are you looking at. This is just some text. Bro , FK OFF\r\n                        ');

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `img` varchar(255) NOT NULL,
  `img_credit` varchar(255) NOT NULL,
  `header` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `category` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `date`, `img`, `img_credit`, `header`, `description`, `category`) VALUES
(1, '2024-01-09 14:08:17', 'antarctica-8016562_1280.jpg', 'https://pixabay.com/photos/antarctica-iceberg-winter-snow-sea-8016562/', 'Top 10 techniques to stay safe online', '                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab explicabo voluptatibus laudantium debitis repellendus a reprehenderit. Numquam obcaecati maiores culpa temporibus, at quae harum eius voluptatibus aperiam a alias labore sed quia nam id, nihil illum deleniti! Quos reprehenderit nam optio voluptates nisi dolorem a accusamus tenetur, velit possimus ratione praesentium molestiae, corrupti nostrum repellendus enim ipsam dolore, dolorum porro. Iste sequi esse aut blanditiis, temporibus quod quidem explicabo dicta obcaecati, voluptatem suscipit voluptates provident qui amet maxime beatae nostrum vitae distinctio. Officia architecto similique, blanditiis odio aut soluta velit!', 'Social'),
(2, '2024-01-09 14:25:53', 'mobile-1087845_1280.jpg', 'https://pixabay.com/illustrations/mobile-smartphone-app-networks-1087845/', 'Our first campaigns', '\r\n        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, eligendi possimus aspernatur, quisquam error eaque sint iure officia, illo repudiandae consequatur dolores esse sequi ullam debitis earum culpa facilis soluta a! Quaerat velit sunt itaque ipsam numquam voluptatem consectetur? Vero, quam. Accusantium, incidunt dignissimos! Possimus quidem animi dolorum, sit nihil molestias. Perferendis magnam quo odit repellendus impedit asperiores! Eum, dolorum.', 'Campaigns'),
(3, '2024-01-09 14:26:44', 'social-media-1233873_1280.jpg', 'https://pixabay.com/illustrations/social-media-interaction-woman-1233873/', 'Yangon second campaigns', '\r\n        Lorem ipsum dolor sit amet consectetur adipisicing elit. Quibusdam, eligendi possimus aspernatur, quisquam error eaque sint iure officia, illo repudiandae consequatur dolores esse sequi ullam debitis earum culpa facilis soluta a! Quaerat velit sunt itaque ipsam numquam voluptatem consectetur? Vero, quam. Accusantium, incidunt dignissimos! Possimus quidem animi dolorum, sit nihil molestias. Perferendis magnam quo odit repellendus impedit asperiores! Eum, dolorum.', 'Campaigns'),
(4, '2024-01-09 14:28:16', '17048104963LonelyDudes.jpg', '#', 'Mandalay Campaign', '\r\n                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudiandae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditate aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiam nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.', 'Campaigns'),
(5, '2024-01-09 14:29:13', '1704810553oilify.jpg', '#', 'Article2', '\r\n                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudiandae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditate aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiam nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.', 'Social'),
(6, '2024-01-09 15:48:19', '17048152994dragon.jpg', '#', 'Parents involvement and teenagers', '      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.', 'Parents'),
(7, '2024-01-09 15:51:14', '17048154743155587.jpg', 'http://www.freepik.com', 'How parents can protect potential social media dangers', '      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.', 'Parents'),
(8, '2024-01-09 15:55:10', '1704815710leaf-8483401_1280.jpg', 'https://pixabay.com/photos/leaf-sunset-autumn-nature-fall-8483401/', 'Our priority aims', '      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.', 'Aims'),
(9, '2024-01-09 15:58:56', '1704815936social-media-763731_1280.jpg', 'https://pixabay.com/photos/social-media-facebook-smartphone-763731/', 'Aims, visions, goals', '      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.', 'Aims'),
(10, '2024-01-09 16:02:27', '1704816147camera-1130731_1280.jpg', 'https://pixabay.com/photos/camera-photographs-souvenir-1130731/', 'What is livestreaming', '      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiac      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.i eni      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.m esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.', 'Livestreaming'),
(11, '2024-01-09 16:03:31', '1704816211justice-2060093_1280.jpg', 'https://pixabay.com/photos/justice-statue-lady-justice-2060093/', 'Article for Legislation and guidance ', '      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupidi      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.taci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti anim      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.i aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.', 'Legislation'),
(12, '2024-01-10 04:35:06', '1704861306social-media-763731_1280.jpg', 'https://pixabay.com/photos/social-media-facebook-smartphone-763731/', 'Lorem is good', '      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.', 'Social'),
(13, '2024-01-10 04:35:37', '1704861337social-media-763731_1280.jpg', 'https://pixabay.com/photos/social-media-facebook-smartphone-763731/', 'Test article', '      Lorem ipsum dolor sit ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.', 'Social'),
(14, '2024-01-10 04:36:55', '1704861415camera-1130731_1280.jpg', 'https://pixabay.com/photos/camera-photographs-souvenir-1130731/', 'Is it wrong to have no girlfriend', ' ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.\n ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.\n ameci enim esse deserunt.ci enim esse deserunt.t consectetur, adipisicing elit. Sed accusamus architecto corporis alias deleniti esse porro repudianci enim esse deserunt.dae facilis, nobis corrupti voluptas nostrum nemo, accusantium quaerat, vero iure soluta rerum cupiditaci enim esse deserunt.te aliquid nam et eos magnam dignissimos? Perspiciatis nam quod voluptatum iusto officia debitis aperiaci enim esse deserunt.m nobis et voluptatibus, deleniti animi aspernatur nesciunt quia architecto sapiente culpa ipsam adipisci enim esse deserunt.ci enim esse deserunt.\n', 'Social');

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `search_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`id`, `user_id`, `search_key`) VALUES
(12, 3, 'hora hora'),
(15, 3, 'lorem'),
(16, 3, 'apple'),
(17, 1, 'a'),
(18, 1, 'a'),
(19, 4, 'apple'),
(20, 4, 'orange'),
(21, 1, 'la');

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE `records` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`id`, `user_id`, `content_id`) VALUES
(3, 4, 1),
(6, 4, 4),
(7, 4, 10),
(9, 4, 2),
(10, 3, 10);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `newsletter` tinyint(4) NOT NULL,
  `is_admin` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `newsletter`, `is_admin`) VALUES
(3, 'Artoria', 'Pendragon', 'Saber', 'arthur@gmail.com', 'password', 1, 0),
(4, 'Thu', 'Lin Shan', 'HakuHaku123', 'thulinshan1234@gmail.com', 'password', 0, 0),
(5, 'admin', 'admin', 'admin', 'admin@gmail.com', 'password', 0, 1),
(6, 'Kyaw ', 'Gyi', 'Kyaw Gyi', 'kyawgyi222@gmail.com', 'password', 1, 0),
(7, 'Ko', 'Toe', 'Key', 'aungTuToe222@gmail.com', 'password', 0, 0),
(8, 'Kurosaki', 'Ichigo', 'ichigo', 'kurosaki@gmail.com', 'password', 1, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `records`
--
ALTER TABLE `records`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
