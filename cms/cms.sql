-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 05, 2017 at 03:37 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Bootstrap'),
(2, 'JavaScript'),
(3, 'PHP'),
(4, 'JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(3) NOT NULL,
  `post_category_id` int(3) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_author` varchar(255) NOT NULL,
  `post_date` date NOT NULL,
  `post_image` text NOT NULL,
  `post_content` text NOT NULL,
  `post_tags` varchar(255) NOT NULL,
  `post_comment_count` int(11) NOT NULL,
  `post_status` varchar(255) NOT NULL DEFAULT 'draft'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `post_category_id`, `post_title`, `post_author`, `post_date`, `post_image`, `post_content`, `post_tags`, `post_comment_count`, `post_status`) VALUES
(2, 3, 'Lets Talk One Piece', 'Julius Kiano', '2017-01-03', 'one.jpg', '                                                It is difficult to sum up the story of a series with hundreds of episodes, TV specials and movies, so I''d rather just try to tell you what it is about and why it is so incredibly good.<br />\r\n<br />\r\nThe series starts off with a guy named Luffy whose ultimate goal it is to become the one and only "King of all Pirates" and to find the greatest treasure in the world. The first episodes introduce him and some characters and make a lovely start that is entertaining and makes one want more. On his way Luffy meets a lot of very interesting characters who become his crew members and friends - each of them with an intense and captivating background story. Every character in this series - be it friend or foe - is either adorable, tragic, despicable or interesting at the least... no boring characters anywhere. Later on in the series, important events and story twists are often visualized or supported by huge appearances in the fabulous and unreal environments that our crew travels. This is perfectly done and helps the already epic feel of the story. I have seen 150 episodes, four movies and two specials so far and there were moments that made me cry, laugh, think and re-watch some episodes (especially 85-90) at least 30 times. You might come to the false conclusion of having a kids show here due to the presentation, but that is definitely wrong. People sometimes say about a movie or series that it is "not a life changer, but entertaining". That is definitely not the case here! I know it sounds nerdy, but this series has broadened my horizon in many ways and I recommend anyone to take the admittedly long time to get into this epic adventure. The best way to do so will be to watch the fan-subs which are as close to the original as a non Japanese will get (explanations of puns and traditions). There are of course some filler episodes in a huge project like this which won''t blow you away, but that is only natural with hundreds of episodes and helps developing the characters. This show is an easy 10/10                                       ', 'anime, luffy, pirate king', 1, 'draft'),
(3, 1, 'One Punch Man', 'Julius Kiano', '2017-01-05', 'One Punch Man.jpg', '            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultricies luctus leo, vel tincidunt arcu dapibus vel. Integer interdum ultrices consectetur. Phasellus eu sem quis erat convallis ornare. Proin nec erat ullamcorper, tincidunt odio a, ultricies tortor. Nam rhoncus, lectus sit amet dapibus vulputate, lacus libero imperdiet massa, eu ullamcorper sem libero aliquam nibh. Ut sollicitudin pretium diam et porttitor. Curabitur congue luctus diam, quis tempus ligula sagittis id. Praesent bibendum vel nunc eget vehicula.<br />\r\n<br />\r\nMorbi nibh erat, sollicitudin ac elit eu, fermentum facilisis erat. Vestibulum eget maximus purus. Morbi pellentesque metus non odio viverra, et pellentesque ante eleifend. Praesent at enim semper, pellentesque turpis quis, blandit dolor. Quisque ac molestie metus. Suspendisse rutrum mauris ac purus scelerisque, vel faucibus magna pulvinar. Curabitur et lobortis odio. Donec convallis felis tortor, ullamcorper tempus erat pretium sit amet. Ut porttitor felis elit, ac blandit eros suscipit in. Phasellus ut laoreet lorem. Suspendisse mi odio, lacinia sed feugiat at, rhoncus vitae odio. Nullam at lorem et est molestie feugiat nec sit amet neque. Fusce eget orci sagittis, vehicula risus nec, tempor magna. Cras dapibus diam eget nisi euismod gravida.<br />\r\n<br />\r\nQuisque pulvinar ante est, non facilisis mi accumsan vel. Donec eget pulvinar ligula. Duis venenatis sem et turpis dictum porta. Suspendisse rhoncus nisi nec risus pretium, quis placerat ex vehicula. Nulla quam elit, egestas euismod diam quis, vehicula laoreet justo. Duis ullamcorper libero at nibh ultricies interdum. Sed lacus dui, mollis id ipsum ut, hendrerit mattis eros.<br />\r\n<br />\r\nCras tincidunt tortor eu elementum ultricies. Pellentesque eleifend ac dui ac ultrices. Nullam vel maximus sapien. Maecenas id mi non libero lobortis dignissim. Aliquam porta, tellus a convallis fringilla, risus urna convallis libero, et blandit massa neque vel ex. Nunc porttitor, justo id porta consequat, ligula dui pulvinar mi, hendrerit mattis tortor nisi eget diam. Ut ligula nisl, convallis quis rutrum et, convallis quis quam. Vivamus eu dui eros. Morbi non scelerisque magna, nec sodales arcu. Aliquam ipsum metus, consectetur eu urna vitae, laoreet sodales mi. Donec venenatis ligula dui, pretium suscipit turpis auctor a. Nunc velit nisi, aliquet sed pharetra ac, volutpat eget dolor.<br />\r\n<br />\r\nSed sodales, magna sit amet porttitor faucibus, diam dui facilisis dui, ut ultricies massa sem ac ipsum. Nullam tempor lobortis turpis et mollis. Suspendisse vel porttitor ligula, ut interdum eros. Morbi elit felis, vehicula a orci eget, mollis pretium lorem. Praesent tincidunt in sapien quis venenatis. Praesent sit amet dui quis erat commodo accumsan vel nec dolor. Sed ac consequat neque, vitae lacinia neque. Vivamus dapibus, ligula et vestibulum rhoncus, sem augue elementum felis, at tincidunt ligula arcu non elit. Donec iaculis commodo feugiat. Nulla sed purus convallis, posuere dui sit amet, varius elit. Nulla lorem nisi, elementum eget pulvinar at, facilisis tincidunt dolor. In malesuada facilisis turpis ut sodales. Nam dignissim consectetur felis, quis elementum mauris posuere sit amet. Pellentesque tempor lorem id nibh ultricies, vitae varius quam volutpat. Vivamus cursus dignissim felis, non efficitur velit consequat non.        ', 'anime, one punch man', 4, 'published'),
(5, 2, 'You knew this was coming, Naruto', 'Julius Kiano', '2017-01-05', 'naruto.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu placerat ex, non volutpat felis. Phasellus vel posuere erat, sit amet malesuada enim. Suspendisse at enim massa. Sed bibendum lacinia eros eu sagittis. Fusce feugiat eleifend ex, in dapibus nisi consectetur sed. Sed lobortis consequat condimentum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Ut rhoncus ante sed accumsan convallis. Nulla arcu nibh, sollicitudin vel tempus ut, pharetra eget urna. Nunc imperdiet nec arcu convallis lobortis. Suspendisse eget congue est, in scelerisque ipsum. Maecenas tincidunt, tortor nec bibendum molestie, nisi massa congue lacus, at venenatis enim velit at nisl. Pellentesque suscipit, eros nec dictum varius, urna mi fringilla nisi, vel porttitor neque neque ut libero. Sed cursus dui at efficitur auctor.<br />\r\n<br />\r\nCras vitae pulvinar tellus, non imperdiet justo. Vestibulum at sem nisi. Pellentesque in nibh cursus, tincidunt velit sed, pulvinar augue. Mauris sollicitudin leo in auctor ultrices. Donec in orci dictum, ultrices diam fermentum, cursus sapien. Duis finibus, purus nec gravida rhoncus, neque tellus laoreet massa, id pharetra ante velit id neque. Nam pellentesque leo libero. Sed quis leo interdum, dapibus enim sed, tristique nunc. Aenean eget nulla turpis. Curabitur ultricies libero in nibh cursus, in finibus nulla tristique. Duis sit amet rhoncus ex. Fusce nec efficitur turpis, ultrices suscipit metus. Nulla bibendum pulvinar turpis at bibendum. Nunc eget diam at lorem faucibus malesuada. Mauris suscipit tristique nulla quis consectetur.<br />\r\n<br />\r\nFusce maximus posuere nisl, sit amet sollicitudin erat tempus ac. Nulla rhoncus nibh sit amet velit ultricies accumsan. Donec eget orci urna. Nulla in sodales sapien. Nunc vulputate dapibus lectus, non interdum dui maximus varius. Duis orci sapien, tempus non ipsum a, finibus imperdiet dolor. In ligula sapien, tincidunt in nibh at, cursus feugiat augue. Nulla tellus urna, laoreet vitae aliquam ut, fringilla quis massa. Ut ipsum metus, sodales sit amet nibh ac, sodales tempor est. Sed ex augue, mollis ut nunc et, malesuada mattis nulla. Donec elementum ornare leo quis laoreet. Quisque tempor iaculis nisi non varius. Nulla non varius velit, eget ultricies nunc. Nullam quam nisi, pellentesque non varius sed, pretium quis odio.<br />\r\n<br />\r\nPraesent lorem nisl, bibendum ut turpis sit amet, gravida sagittis risus. Sed ullamcorper, quam non sagittis consequat, nisl dui aliquam elit, sed rutrum justo risus quis nisi. Integer porttitor urna non consequat suscipit. In nibh enim, euismod at enim ut, cursus malesuada ipsum. Ut commodo, neque sed sagittis tempor, orci quam vehicula est, vel varius massa enim luctus arcu. Fusce ut dapibus nunc. Vivamus est neque, consequat nec erat sit amet, consectetur finibus leo. Mauris vel justo et odio porttitor tincidunt. Mauris aliquam erat eu ultrices porta. Quisque vel purus non lectus ullamcorper sagittis vitae vel neque. Nullam arcu dui, venenatis a ullamcorper at, iaculis nec est. Fusce lectus nisl, dapibus bibendum dictum ut, aliquam quis mi. Phasellus laoreet nibh ut ipsum viverra efficitur.<br />\r\n<br />\r\nUt mattis efficitur justo rutrum sollicitudin. Donec vehicula placerat condimentum. Proin ut ex tincidunt sapien semper finibus. Suspendisse eu libero at erat rutrum dapibus non vel nibh. In urna ligula, varius a convallis vel, vulputate ut purus. Nullam luctus ultricies sodales. Pellentesque posuere lacus at mattis vehicula. Quisque tincidunt lorem dui, ut venenatis lorem vehicula vitae.', 'anime, naruto', 4, 'draft');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
