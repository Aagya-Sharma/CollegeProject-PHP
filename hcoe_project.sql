-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2018 at 11:24 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hcoe_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `type` enum('trek','tour','hike') NOT NULL,
  `abstract` text NOT NULL,
  `description` text NOT NULL,
  `featured_image` varchar(100) NOT NULL,
  `added_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `type`, `abstract`, `description`, `featured_image`, `added_date`) VALUES
(22, 'ghalegaun', 'trek', '', '<p>Ghalegaun,a small village is the perfect example of homestay based tourism destination in Nepal which belongs to the warrior ethnic gurung tribe.this beautiful village lies along the annapurna circuit route.Annapurna ghalegaun trekking is the newly opened,exciting trekking trail in Annapurna region.</p>\r\n<p>The ghalegaun trekking offers the breathtaking views of majestic himalayas including Macchapuchre and is one of the best trekking route to discover the rich culture of the region.</p>\r\n<p>The ghalegaun trekking begins from besisahar after 6-7 hours drive from the capital.There are several routes :<br /><br />Route Number 1 : Beshishar - Pasgaun - Bhujung - Ghale Gaun<br />Route Number 2: Beshishar - bahundanda - Koto -<strong><a href=\"file:///C:/Users/dell/Documents/dudhpokhari.html\"> Dudhpokhari</a></strong> - <strong><a href=\"file:///C:/Users/dell/Documents/ghanpokhara.html\">Ghanapokhara</a></strong> - Ghale Gaun<br />Route Number 3 : Beshishar - Khudi - Ghanpokhara - nayu - Ghale Gaun<br /><br />Alternate route from pokhara:Pokhara - Thumsikot - Pakhurikot - Pasgaun - Bhujung - Ghale Gaun<br /><br /><br />The hopitality of the people out there is overwhelming.the villagers welcome with red tika and garland,music and dance .One can feel peace and harmony when one will be there.ghalegaun is famous for it\'s homestsy .Visitors are provided with accomodations in the villagers house with all the facilities.Ghalegaun trek can extend to Ghorepani poon hill trekking while trekkers reached the pokhara.spring and autumn is considered to be the favourable season to travel but tour can be made round the year .The winter is colder sometimes with snowfall.</p>\r\n<p>Traditional dances,handicraft exhibition and other programs are performed by the villagers for the visitors every year.Ghalegaun trekking is the exciting experience for both the domestic as well as international tourists.ghan pokhara,pagaun,kapurgaun are the beautiful villages around ghalegaun.This trek route passes by mainly Gurung settlements nestled amidst mountains, green forests, rivers, streams and waterfalls. Ghalegaun is a home to world famous Gurkha soldiers.galegaun is the perfect trek to experience the unique lifestyles of the gurungs with panaromic views of snow-capped mountains.The small village is an example of peace and harmonic place enriched with natural beauty.</p>', 'ghalegau final.jpg', '2018-06-26 10:45:36'),
(23, 'Langtang', 'trek', '', '<p>Langtang trek one of the is more adventurous .It is located at about 130 km north of the Kathmandu valley close to the border with Tibet.Langtang National park is the Nepal\'s first national park and lies between the himalayan range to the north.<br /><br />A visit to this area is an oppurtunity to explore the lifestyles and culture of the tamang community.the area bears the uniqueness of tamang langauge,dreeses,houses,festivals and handicrafts.The forest sf this region includes the endangered wildlife like migratory birds,deer,monkeys,tahr and pika.The area is also known for its many glaciers.March-May is considered favourable season to trek to Langtang.Langtank trek support an amazingmix of lifestyles,flora and fauna.</p>\r\n<p>The trek starts at the small town of shyabru besi.Trekking through its forests and among the villages and farmlands of its people, many of who are of Tibetan origin.Apart from Langtang ,treks can be arranged to the holy Gosaikunda lake at 4,380m, which covers much of the Langtang National park.The lantang valley has plenty of comfortable lodges.Nepal has one of the greatest altitude variations in the world as altitude ranges from 60m from sea level to the highest point on earth 8848m so you have to be very careful when you plan your trip here.</p>\r\n<p><br />Route:kathmandu-syabru bensi-lama hotel-langtang village</p>\r\n<p>It is the perfect destination for someone who wishes to trek to the himalayas but is relatively looking for a easy route.The region is rurall mandscape comprising of scenic beauty.Langtang was one of the most affected area of the devastating earthquake of <strong>April 2015.</strong>but the government and pubics have been working for the overcome of the earthquake.so the trek to langtang could be a economical support for the locals.The locals of the region have a warm response to the visitors.The trip would be a pleasant trip with an Amazing views of Langtang Ri, Ganesh Himal, Lang Sisa and spectacular views of the Ice fluted Gyanghempo peak.On the way to Langtamg valley we will come across <strong>Langtang khola</strong> and <strong>bhotekoshi </strong></p>\r\n', 'langtang final.jpg', '2018-06-26 10:49:29'),
(24, 'champadevi', 'hike', '', '<p>Champadevi hike route is one of the famous hike routenear the Kathmandu Valley. Being &nbsp;the third highest hill of the Valley it &nbsp;is at height of 2278m providing bird eye view of the noisy and populated capital of Nepal. This is fun and easy trail with amazing eye catching view of mountain ranges like Mt. Everest,</p>\r\n<p>Mt. Ganesh, Mt.Langtang, and many others.</p>\r\n<p>&nbsp; There are many routes to reach the top of this hill:</p>\r\n<p>Buspark &ndash; Balkhu- Hattibann via local bus</p>\r\n<p>&nbsp;Buspark- Pharping (on the way to Dakshinkali Temple) via local bus</p>\r\n<p>When you reach these stops feel free to talk and ask the locals about the route up to the Champadevi hill. Locals here are very friendly and helpful. As there are many trials even to reach the hill one should not panic if they don&rsquo;t find the places as shown or mentioned by the Google map or different blogs. On the way up there are no many shops to buy edibles and water bottles one should carry&nbsp; edibles and&nbsp; water along.</p>\r\n<p>&nbsp;This place gives you different vibes and views in all the seasons. But in monsoons the hike is much difficult and adventurous due to slippery roads and leeches all round. In spring the hill is all covered with flowers and colorful flora to give the taste of great biodiversity of Nepal. For the landscape views and mountain views winter and autumn are best time.</p>', 'champadevi final.jpg', '2018-06-26 11:18:20'),
(25, 'Pathivara', 'hike', '', '<p>Pathivara Devi a hindu temple which is located in the eastern most part of Nepal. It is the sacared place for hindu community.</p>\r\n<p>Having a great trek trail it is most common for the people who want to take two side benefit of their travel holidays.</p>\r\n<p>&nbsp;The local people mainly the Limbus of that area call this place as \"MUNDHUM\".</p>\r\n<p>Not only a religious place but a very nice and calm trek trial for adventure lovers.With great experience of biodiversity and</p>\r\n<p>perfect blend of typical hilly lifestyle of people will surely make your holiday a lifetime memory.&lt;br&gt;</p>\r\n<p>The temple is located 19.4 North East from &lt;u&gt;Phungling municipality &lt;/u&gt; at an elevation of 3,794 m (12,444.32 ft).The Goddess Pathibhara is believed to possess supernatural powers and diligently answer devotees\' prayers. She is considered by her devotees as a manifestation of the divine feminine also determined with other names as AdiKali, Maha Maya, MahaRudri among many other of her divine forms.</p>\r\n<p>there are many belives of&nbsp; the origin of the temple.But it is mostly belived that once the local shepherds lost their herd while grazing at the place where the current temple is situated.The stressed shepherds had a dream</p>\r\n<p>in which the Goddesess ordered them to sacrifice&nbsp; sheep and also to build a temple in her honour. So the ritual of offering sacrifices inside the temple has continued till date. It is little strange to see the blood patches disapeare which may be beacuse of the altitude. &lt;br&gt;&lt;imgsrc=\"5.jpg\" width=\"400\" height=\"600\"&gt;&lt;br&gt;</p>\r\n<p>The route to Pathivara Temple serves as a secondary route to &lt;u&gt; Kanchenjunga Trek &lt;/u&gt;.Aside from the temple Limbu Trek is also equally fascinating.</p>\r\n<p>This trek trial encloses the neighbouring villages like Phurunga (or Phurumbu), Limkhim, Khewang, Tellok, PhawaKhola and Mamankhe.</p>\r\n<p>Routes to Pathivara Devi:</p>\r\n<p>&nbsp;There is olny one main route which is easy and mostly used by everyone.</p>\r\n<p>Kathmandu - Birtamode -&nbsp; Fikkal,Illam&nbsp; - Pachthar &ndash; Suketaar-Fedi and hike of about 5 to 6 hours to reach the temple.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>', 'pathivara final.jpg', '2018-06-26 11:20:35'),
(26, 'Khaptad', 'trek', '', '<p><strong>WAY TO KHAPTAD NATIONAL PARK</strong></p>\r\n<p>The khaptad National Park, one of the beautiful place enriched with natural resources and the famous trekking site of Nepal. The natural beauty of this region and peace gives the profound way of thinking innovative ideas. This place can be your destination inorder to be free from your stressful life and experience the beauty of nature.This place is rich in biological flora and fauna so it can be the site for research and inventions. It is also one of the best place in the world for being close to the nature and enjoying and experiencing rural homestay of Nepal.Khaptad National park is located on the far western region of Nepal and spread over four districts-Doti,Bajhang,Bajura and Dipayal.The boundaries of four districts meet at a point called khaptad.</p>\r\n<p>Route: KATHMANDU TO DHANGADHI&nbsp;</p>\r\n<p>By bus: 18-20 hours(almost 1 and half day)</p>\r\n<p>By air: fly kathmandu-Dhangadhi(198m)-1hr flight and drive to Buditola</p>\r\n<p>The total population density of this region is 49 persons/sqkm and the literacy rate is 35.5%.So it will be difficult to communicate with local people unless you take guide with you.&nbsp;The best time to visit khaptad is October/November and March-May. But from December toMarch it snows heavily over there making travel difficult.</p>\r\n<p>&nbsp;</p>\r\n<p>The area around khaptad is rich in medicinal herbs natural plants and some endangered species such as asiatic dog etc. It is estimated that about 565 species, 13 percent of flowering plants of Nepal are found in Khaptad.Khaptad is also known as living garden which offers joys of bird watching with around 250 species of birds, such as cuckoos,eagles,bulbuls,etc.Not only Khaptad but also other areas near Khaptad National Park are of interest to tourists such as:<strong><br /></strong><strong>RAMAROSHAN</strong><strong><br /></strong><strong>BADIMALLIKA</strong><strong><br /></strong><strong>SURMA SAROVAR</strong></p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>\r\n<p>&nbsp;</p>\r\n<p><strong>&nbsp;</strong></p>', 'khaptad final.jpg', '2018-06-26 11:26:07'),
(27, 'Palpa', 'tour', '', '<p><strong>PALPA</strong></p>\r\n<p>Palpa, the ancient hill town of&nbsp; Tansen is one of the most popular tourist destinations of Nepal. Tansen popularly known as &lsquo;<strong>Tansen Bazar </strong>is situated in the middle of <strong>&lsquo;Shreenagar Danda&rsquo;</strong>.&nbsp; There is also a tall tower on the &lsquo;Shreenagar Danda&rsquo; through which view of all around Tansen Bazaar can be seen and its very enchanting and good enough to attract national and international tourist. Srinagar danda(hill),which is one of the major attractions offers a panaromic view of the high Himalayas. Trip around Shreenagar Hills,enjoy a day hike to Rani Mahal on the banks of the Kali Gandaki River or go backpacking along the river trail to find ravishing new routes.</p>\r\n<p><em>RAMPUR, TANSEN, SREENAGAR, RISHIKESH TEMPLE, RAMBI</em> are the major places to visit in Palpa.</p>\r\n<p>The major rivers of Palpa are:<br />&bull; Kali Gandaki River<br />&bull; Tinau River<br />&bull; Ridi River<br />&bull; Purwa River<br />&bull; Jhumsa River<br />&bull; Dovan river<br />1. Barabisse khola<br />2. Dumre khola</p>\r\n<p>ROUTES :</p>\r\n<p>1.Kathmandu-Pokhara-Syanja-pokhara(i.e.332km)<br />2.Kathmandu-Narayanghat-Butwal-Palpa<br />3.Bardibas-Narayanghat-Butwal-Palpa</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Palpa situated in the western region of Nepal, is located on the highway between Butwal and Pokhara. It is about 3-4 hours drive from either of the cities.Micro busses or any van are easily available.There are a number of good to moderate hotels and lodges in Tansen to suit every budget and need. The hotels and lodges are clean and the staff hospitable. The modern restaurants serve excellent &nbsp;Nepali meals and some even serve continental cuisine. The hospitality of Palpali people is profound .Palpla is renowned for its hopitality and cultural rituals.Palpa is reffered to as&nbsp;<strong>\'Darjeeling of Nepal\'.</strong></p>\r\n<p><strong>Some of the famous hotels in palpa are:</strong></p>\r\n<ul>\r\n<li>Hotel the Ranimahal</li>\r\n<li>Hotel Diamond</li>\r\n<li>Palpa Community Homestay</li>\r\n<li>Hotel Crown</li>\r\n<li>Natures Treat homestay</li>\r\n</ul>\r\n<p>The booking sites are:</p>\r\n<p><a href=\"http://www.booking.com/\">www.booking.com</a></p>\r\n<p><a href=\"http://www.hotelscombined.com/\">www.hotelscombined.com</a> etc.</p>\r\n<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Visitors can enjoy hiking in the hills, biking&nbsp; and walking trails, fishing in the lake, horse riding etc as a recreational&nbsp; activities. Sports like golf, pool etc are played in major.Ancient culture, breathtaking mountain views and the charm of people especially Newar community will make you mesmerized. Newars people , migrants from Kathmandu valley played an important role in enhancing the architecture and culture of&nbsp; Tansen. Cobblestone streets with wooden Newar &ndash;style houses beautifies the town. Tansen was once the capital&nbsp; of Magar kingdom of the Tanahun&nbsp; which was one of the most powerful kingdom. Tansen Bazar is famous for Dhaka fabrics and knitting and weaving jobs. <strong>Karuwa</strong>,reflecting the nepalese handicraft is also the speciality of this place.Palpa lying in western region of Nepal, Kumaon has Kumauni influence but has been classified as a dialect of Nepali languages. It has Indo-European Indo-Iranian Indo-Aryan language family. Literacy rate of palpa is around&nbsp;<strong>76%</strong><br /><strong>41.2%</strong>have passed primary level education.</p>\r\n<p>&nbsp;</p>\r\n<p>MAJOR TOURIST ATTRACTIONS ON THE WAY TO PALPA:</p>\r\n<ul>\r\n<li><strong>Tansen</strong><br />&bull; Argeli Palace&nbsp;<br />&bull; Forts like Kalika fort, Nuwakot fort, Bakumgadi Fort&nbsp;<br />&bull; Mahamritunjaya Statue of Lord shiva&nbsp;<br />&bull; Rambha Devi Temple&nbsp;<br />&bull; Ramdi&nbsp;<br />&bull; Rishikesh Complex of Ruru Kshetra Hindu pilgrimage and cremation site.<br />&bull; Rishikesh Temple&nbsp;<br />&bull; Shrinagar Hill</li>\r\n</ul>\r\n<p><br /><br /><br /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><br /><br /></p>\r\n<p>&nbsp;</p>\r\n<ul>\r\n<li><strong>Tansen</strong><br />&bull; Argeli Palace&nbsp;<br />&bull; Forts like Kalika fort, Nuwakot fort, Bakumgadi Fort&nbsp;<br />&bull; Mahamritunjaya Statue of Lord shiva&nbsp;<br />&bull; Rambha Devi Temple&nbsp;<br />&bull; Ramdi&nbsp;<br />&bull; Rishikesh Complex of Ruru Kshetra Hindu pilgrimage and cremation site.<br />&bull; Rishikesh Temple&nbsp;<br />&bull; Shrinagar Hill</li>\r\n</ul>\r\n<p><br /><br /><br /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><br /><br /></p>\r\n<p>&nbsp;</p>', 'palpa final.jpg', '2018-06-26 11:29:38'),
(29, 'Hello from new article', 'hike', '', '<p>helo hello hello</p>', 'Hello-from-new-article-1530001687.jpeg', '2018-06-26 14:13:07'),
(31, 'Hetauda Bazar', 'tour', 'Mero pyaro hetauda', '<p>Aaha :)&nbsp;</p>', 'Hetauda-Bazar-1530003884.jpg', '2018-06-26 14:29:24');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `caption` text NOT NULL,
  `featured_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `caption`, `featured_image`) VALUES
(3, 'go \r\nfly\r\ntravel \r\nexplore\r\nadventure\r\nhappy soul :) ', 'champadevi.jpg'),
(6, 'travel is the healthiest addiction', 'slider2 final.jpg'),
(7, 'journey to explore the nature', 'nnn.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'clickniraj12@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b'),
(2, 'niraj@niraj.com', 'e10adc3949ba59abbe56e057f20f883e'),
(3, 'sharmaaagya@yahoo.com', '202cb962ac59075b964b07152d234b70'),
(4, 'sharmaaagya5@yahoo.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
