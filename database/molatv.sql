-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 07, 2021 at 02:06 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `molatv`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `admin_name` varchar(30) NOT NULL,
  `admin_pass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `admin_name`, `admin_pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `batas_usia`
--

CREATE TABLE `batas_usia` (
  `id_batas_usia` int(11) NOT NULL,
  `batas_usia` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batas_usia`
--

INSERT INTO `batas_usia` (`id_batas_usia`, `batas_usia`) VALUES
(1, 'SU'),
(2, '13+'),
(3, '18+');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id_favorite` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `newest` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul_film` varchar(50) NOT NULL,
  `tahun_film` int(11) NOT NULL,
  `id_batas_usia` int(11) NOT NULL,
  `id_genre` int(11) NOT NULL,
  `alur_film` varchar(255) NOT NULL,
  `pemeran_film` varchar(255) NOT NULL,
  `treiler_film` varchar(255) NOT NULL,
  `poster_film` varchar(255) NOT NULL,
  `durasi_film` varchar(255) NOT NULL,
  `deskripsi_film` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul_film`, `tahun_film`, `id_batas_usia`, `id_genre`, `alur_film`, `pemeran_film`, `treiler_film`, `poster_film`, `durasi_film`, `deskripsi_film`, `created`) VALUES
(1, 'NOAH', 2014, 3, 1, 'Aksi, menegangkan, seru', 'Russell Crowe, Jennifer Connelly, Douglas Booth, Logan Lerman, Emma Watson, Anthony Hopkins\r\n', 'https://www.youtube.com/watch?v=6qmj5mhDwJQ', 'noah.jpg', '2 J 18 M', 'When God decides that mankind has become too sinful and must be wiped off the Earth, he chooses Noah (Russell Crowe), a pious man, for an excellent task. Noah must build an ark large enough to hold his wife (Jennifer Connelly), adopted daughter (Emma Wats', '2021-12-07 01:47:19'),
(2, 'The East', 2020, 3, 1, 'Aksi, menegangkan, seru', 'Martijn Lakemeier, Marwan Kenzari', 'https://www.youtube.com/watch?v=XAUhT18hxe4', 'east.jpg', '2 J 17 M', 'During the post-WW2 Indonesian War of Independence, a young Dutch soldier joins an elite unit led by a mysterious captain known only as \"The Turk.\" When the fighting intensifies, the young soldier finds himself questioning -- and ultimately challenging --', '2021-12-07 01:47:58'),
(3, 'The Revenant', 2015, 3, 1, 'Aksi, menegangkan, seru\r\n', 'Leonardo Dicaprio, Tom Hrdy, Dowhnall Gleeson, Will Poulter\r\n', 'https://www.youtube.com/watch?v=LoebZZ8K5N0\r\n', 'revenant.jpg\r\n', '2 J 30 M', 'Leonardo DiCaprio stars in this critically acclaimed epic adventure inspired by true events from writer-director Alejandro G. Iñárritu. While on a hunting expedition in the American wilderness, Hugh Glass (DiCaprio) is attacked by a bear and left dead. De', '2021-12-07 01:47:58'),
(4, 'Now You See Me', 2013, 2, 1, 'Aksi, menegangkan, seru', 'Jesse Eisenberg, Mark Ruffalo, Woody Harrelson, Mélanie Laurent, Isla Fisher, Dave Franco, Morgan Freeman\r\n', 'https://www.youtube.com/watch?v=KzJNYYkkhzc\r\n', 'nysm.jpg\r\n', '1 J 55 M', 'Amazing magicians, the heist of billion dollars, and it ain\'t an illusion! An F.B.I. Agent and an Interpol Detective track a team of illusionists who pull off bank heists during their performances and reward their audiences with the money.\r\n', '2021-12-07 01:47:58'),
(5, 'Jobs', 2013, 1, 1, 'biografi\r\n', '\"Ashton Kutcher\r\nDermot Mulroney\r\nJosh Gad\r\nLukas Haas\r\nJ.K. Simmons\r\nLesley Ann Warren\"\r\n', 'https://www.youtube.com/watch?v=FrvkCS0ZGPU\r\n', 'jobs.jpg\r\n', '2 J 8 M', '\"College dropout Steve Jobs (Ashton Kutcher), together with his friend, technical whiz-kid Steve Wozniak (Josh Gad), sparks a revolution in home computers with the invention of the Apple 1 in 1976. Built in the garage of Jobs\' parents, the device -- and t', '2021-12-07 01:47:58'),
(6, 'Spider-man : Homecoming', 2017, 3, 2, 'Aksi, petualangan, Sci-Fi\r\n', 'Tom Holland, Michael Keaton, Robert Downey Jr., Marisa Tomei, Jon Favreau\r\n', 'https://www.youtube.com/watch?v=n9DwoQ7HWvI\r\n', 'spiderman.jpg\r\n', '2 J 13 M', 'Thrilled by his experience with the Avengers, young Peter Parker returns home to live with his Aunt May. Under the watchful eye of mentor Tony Stark, Parker starts to embrace his newfound identity as Spider-Man. He also tries to return to his normal daily', '2021-12-07 01:47:58'),
(7, 'The Equalizer', 2014, 3, 2, 'Aksi, menegangkan, seru\r\n', 'Denzel Washington, Marton Csokas, Chloë Grace Moretz, David Harbour\r\n', 'https://www.youtube.com/watch?v=VjctHUEmutw\r\n', 'equalizer.jpg\r\n', '2 J 7 M', 'McCall (Denzel Washington) has put his mysterious past behind him and is dedicated to living a new, quiet life. But when he meets Teri (Chloë Grace Moretz), a young girl under the control of ultra-violent Russian gangsters, he can\'t stand idly by. Armed w', '2021-12-07 01:47:58'),
(8, 'Unlocked', 2017, 2, 2, 'Aksi, menegangkan, seru\r\n', 'Noomi Rapace, Orlando Bloom, Toni Collette, John Malkovich\r\n', 'https://www.youtube.com/watch?v=CCqISHuTgHE\r\n', 'unlocked.jpg\r\n', '1 J 38 M', 'After failing to apprehend the terrorist behind a Paris attack that claimed dozens of lives, CIA agent Alice Racine is forced to live in London as a caseworker. Her mentor unexpectedly calls her back into action when the CIA discovers that another attack ', '2021-12-07 01:47:58'),
(9, 'Baby Driver', 2017, 3, 2, 'Aksi, menegangkan, seru\r\n', 'Ansel Elgort, Jon Bernthal, Jon Hamm, Eiza Gonzalez\r\n', 'https://www.youtube.com/watch?v=D9YZw_X5UzQ\r\n', 'babydriver.jpg\r\n', '1 J 53 M', 'Talented getaway driver Baby (Ansel Elgort) relies on the beat of his personal soundtrack to be the best in the game. After meeting the woman (Lily James) of his dreams, he sees a chance to ditch his shady lifestyle and make a clean break. Coerced into wo', '2021-12-07 01:47:58'),
(10, 'Spectre', 2015, 3, 2, 'Aksi, menegangkan, seru\r\n', 'Daniel Craig, Christoph Waltz, Lea Seydoux, Ralph Fiennes\r\n', 'https://www.youtube.com/watch?v=ujmoYyEyDP8\r\n', 'spectre.jpg\r\n', '2 J 28 M', 'A cryptic message from the past leads James Bond (Daniel Craig) to Mexico City and Rome, where he meets the beautiful widow (Monica Bellucci) of an infamous criminal. After infiltrating a secret meeting, 007 uncovers the existence of the sinister organiza', '2021-12-07 01:47:58'),
(11, 'Deerskin', 2019, 3, 3, 'menegangkan, horror\r\n', 'Jean Dujardin, Adele Haenel, Albert Delpy, Coralie Russier\r\n', 'https://www.youtube.com/watch?v=vVT4jlEJYQA\r\n', 'deerskin.jpg\r\n', '1 J 17 M', 'A man suffers a psychotic obsession with his deerskin jacket that blows his life savings and leads him to commit a crime.\r\n', '2021-12-07 01:47:58'),
(12, 'Chef', 2014, 2, 3, 'Drama, Adventure\r\n', 'Jon Favreau, Robert Downey Jr. , Scarlett Johansson\r\n', 'https://www.youtube.com/watch?v=qK-ZUFX5fnk\r\n', 'chef.jpg\r\n', '1 J 54 M', 'After a controlling owner (Dustin Hoffman) pushes him too far, chef Carl Casper (Jon Favreau) quits his position at a prestigious Los Angeles restaurant. As he tries to figure out what his next step should be, he finds himself in Miami. Carl joins forces ', '2021-12-07 02:04:46'),
(13, 'Baywatch', 2017, 3, 3, 'Aksi, Menegangkan, crime\r\n', 'Dwayne Johnson, Zac Efron, Alexandra Daddario\r\n', 'https://www.youtube.com/watch?v=eyKOgnaf0BU\r\n', 'baywatch.jpg\r\n', '1 J 51 M', 'When a dangerous crime wave hits the beach, the legendary Mitch Buchannon leads his elite squad of lifeguards on a mission to prove that you don\'t have to wear a badge to save the bay. Joined by a trio of hotshot recruits, including former Olympian Matt B', '2021-12-07 02:04:46'),
(14, 'Good Kids', 2016, 2, 3, 'Drama\r\n', 'Nicholas Braun, Zoey Deuch, Mateo Arias\r\n', 'https://www.youtube.com/watch?v=TdwJ3oXcD2Q\r\n', 'goodkids.jpg\r\n', '1 J 26 M', 'Four overachieving high school students in Cape Cod reinvent themselves the summer after graduation.\r\n', '2021-12-07 02:04:46'),
(15, 'Cobbler', 2014, 2, 3, 'Drama, Fantasy\r\n', 'Adam Sandler, Melonie Diaz\r\n', 'https://www.youtube.com/watch?v=kMVGScC0vDA\r\n', 'cobbler.jpg\r\n', '1 J 38 M', 'A frustrated shoemaker (Adam Sandler) finds a magical sewing machine that allows him to see the world in a new way by stepping into the lives of his customers.\r\n', '2021-12-07 02:04:46'),
(16, 'Vatican Tapes', 2015, 3, 4, 'Thriller, Menegangkan\r\n', 'Olivia Taylor Dudley, Michael Pena, Dougray Scott\r\n', 'https://www.youtube.com/watch?v=Yelog-WwqD4\r\n', 'vatican.jpg\r\n', '1 J 31 M', 'THE VATICAN TAPES follows the ultimate battle between good and evil - God versus Satan. Angela Holmes (OLIVIA TAYLOR DUDLEY) is an ordinary 27-year-old until she begins to have a devastating effect on anyone close, causing serious injury and death. Holmes', '2021-12-07 02:04:46'),
(17, 'Insidious: The Last Key', 2018, 3, 4, 'Thriller, Menegangkan, Mystery\r\n', 'Lin Shaye, Leigh Whannell, Angus Sampson\r\n', 'https://www.youtube.com/watch?v=acQyrwQyCOk\r\n', 'insidious.jpg\r\n', '1 J 38 M', 'The creative minds behind the hit Insidious franchise bring you the most horrifying chapter of the series, Insidious: The Last Key. In this gripping Blumhouse film, Lin Shaye reprises her role as parapsychologist Dr. Elise Rainier, who returns to her fami', '2021-12-07 02:04:46'),
(18, 'Unsane', 2018, 3, 4, 'Drama, Mystery\r\n', 'Claire Foy, Joshua Leonard, Jay Pharoah\r\n', 'https://www.youtube.com/watch?v=u7KZrt_cHH0\r\n', 'unsane.jpg\r\n', '1 J 38 M', 'A young woman leaves her hometown to escape a troubled past and begin a new job. But when she is involuntarily committed to a mental institution, she is confronted by her greatest fear —but is it real or just her delusion? With twisting perspectives and a', '2021-12-07 02:04:46'),
(19, 'Gone Girl', 2014, 3, 5, 'Drama, Mystery\r\n', 'Ben Affleck, Rosamund Pike, Neil Patrick Harris, Tyle Perry\r\n', 'https://www.youtube.com/watch?v=2-_-1nJf8Vg\r\n', 'gonegirl.jpg\r\n', '2 J 39 M', 'Directed by David Fincher and based on Gillian Flynn\'s bestseller, this engaging thriller reveals the secrets of a modern marriage. On his fifth wedding anniversary, Nick Dunne (Ben Affleck) reports his beautiful wife Amy (Rosamund Pike) missing. Amidst a', '2021-12-07 02:04:46'),
(20, 'Inferno', 2016, 3, 5, 'Action, Crime, Adventure\r\n', 'Tom Hanks, Felicity Jones, Irrfan Khan, Ben Foster\r\n', 'https://www.youtube.com/watch?v=RH2BD49sEZI\r\n', 'inferno.jpg\r\n', '2 J 1 M\r\n', 'Famous symbologist Robert Langdon (Tom Hanks) follows a trail of clues tied to Dante, the great medieval poet. When Langdon wakes up in an Italian hospital with amnesia, he teams up with Sienna Brooks (Felicity Jones), a doctor he hopes will help him reco', '2021-12-07 02:04:46'),
(21, 'Stay', 2005, 3, 5, 'Drama, Mystery\r\n', 'Ewan McGregor, Naomi Watts, Ryan Gosling, Kate Burton\r\n', 'https://www.youtube.com/watch?v=KIk5rfA5uWE\r\n', 'stay.jpg\r\n', '1 J 39 M', 'In this mind-bending psychological thriller, college student Henry Lethem (Ryan Gosling) plans to kill himself in three days unless psychologist Sam Foster (Ewan McGregor) can save him. But after his first encounter with the disturbed young man, Sam finds', '2021-12-07 02:04:46'),
(22, 'Mola Concert  - Kodaline', 2017, 1, 6, 'Singing\r\n', 'Kodaline\r\n', 'https://www.youtube.com/watch?v=wRgPoqP84Is\r\n', 'kodaline.jpg\r\n', '40 Menit\r\n', 'Irish rock band Kodaline made a special appearance at the Mola Chill Festival, performing hit songs from their various albums. Steve Garrigan and friends hypnotized the audience with their opener, \"Wherever You Are\", followed by international hits with ov', '2021-12-07 02:04:46'),
(23, 'MolaConcert - Honne', 2019, 1, 6, 'Singing\r\n', 'Honne\r\n', 'https://www.youtube.com/watch?v=dGNwSMJr-lQ\r\n', 'honne.jpg\r\n', '23 M', 'One of the most popular duo music groups in the world, HONNE, enliven Mola Chill Fridays. The owner of \"Location Unknown\", \"Day 1\", and a number of hits that are familiar to the public, presented special performances live from London. Not only performing,', '2021-12-07 02:04:46'),
(24, 'Mola Concert - Weird Genius', 2020, 1, 6, 'Singing\r\n', 'Weird Genius\r\n', 'https://www.youtube.com/watch?v=yVCYGQpchlQ\r\n', 'weird.jpg\r\n', '45 M', 'Weird Genius featured in the inaugural edition of Mola Chill Fridays. The trio that soared thanks to the hit \"Lathi\" also collaborated with Novia Bachmid and Reikko. In addition to performing their songs, Eka Gustiwana, Gerard Liu, and Reza \"Arap\" Oktovia', '2021-12-07 02:04:46'),
(25, 'Mola Concert - Pamungkas', 2021, 1, 6, 'Singing\r\n', 'Pamungkas\r\n', 'https://www.youtube.com/watch?v=ab4UHEQsYJY\r\n', 'pamungkas.jpg\r\n', '56 M', 'Pamungkas appeared as the opening act for the eighth edition of Mola Chill Fridays. Not only performing, singer of the social media sensation single \"To The Bone\" and a songwriter who skyrocketed through a number of albums such as \"Walk The Talk\" and \"Fly', '2021-12-07 02:04:46'),
(26, 'Mola Concert -Bondan', 2021, 1, 6, 'Singing\r\n', 'Bondan Prakoso\r\n', 'https://www.youtube.com/watch?v=XEBrMgg0yBA\r\n', 'bondan.jpg\r\n', '40 M', 'Bondan Prakoso opened this edition of Mola Chill Fridays with a bang! The musician, who is attached to playing bass and singing melodious vocals, performed a special appearance to bring a number of mainstay hits. The man who started his career as a child ', '2021-12-07 02:04:46'),
(27, 'Liverpool VS Southampton', 2021, 1, 7, 'Football\r\n', 'Liverpool, Southampton\r\n', 'https://www.youtube.com/watch?v=WCOKLAR0jDc\r\n', 'liverpool.jpg\r\n', '1 J 45 M ', 'Liverpool recorded 23 wins, 10 draws, and 11 losses against Southampton from their last 44 Premier League meetings.Mohamed Salah was involved in 9 goals from his last eight appearances against Southampton (7 goals, 2 assists).Southampton are winless again', '2021-12-07 02:04:46'),
(28, 'UFC FIGHTER PROFILE - CONOR MCGREGOR', 2020, 1, 7, 'Ultimate Fighting Championship (UFC)\r\n', 'Connor McGregor\r\n', 'https://www.youtube.com/watch?v=_9nIuPM_DYM\r\n', 'ufc.jpg\r\n', '15 M', 'Conor McGregor has become the first simultaneous multi-divisional champion in UFC history (Featherweight, Lightweight). McGregor was the fastest title fight victory in UFC history (13 seconds) vs. Jose Aldo.\r\n', '2021-12-07 02:04:46'),
(29, 'How Lewandowski Became Striker of the Year 2021', 2021, 1, 7, 'Football\r\n', 'Robert Lewandowski\r\n\r\n', 'https://www.youtube.com/watch?v=jrPK3hu3d4g\r\n', 'robert.jpg\r\n', '5 M', ' Robert Lewandowski has become Bundesliga 6-time top scorer in the last 8 seasons. After his debut season for Borussia Dortmund in 2010/11, Lewandowski became Dortmund top-scorer for the next 3 seasons from 2012-2014. Lewandowski scored 41 goals in Bundes', '2021-12-07 02:04:46'),
(30, 'Andres Iniesta: The Unexpected Hero', 2021, 1, 7, 'Football\r\n', 'Andres Iniesta\r\n', 'https://www.youtube.com/watch?v=WShxEpt6J3k\r\n', 'andres.jpg\r\n', '1 J 26 M', '\"The Artist. The Wizard. Don Andres. Throughout his superlative career, Spanish midfielder Andres Iniesta has been called many names because of his talent with the ball, punctuated by numerous magical moments on the biggest of stages. His long-range strik', '2021-12-07 02:04:46'),
(31, 'MESSI CIRQUE', 2019, 1, 7, 'Football\r\n', 'Lionel Messi\r\n', 'https://www.youtube.com/watch?v=iQ3gyPGxF_M\r\n', 'lionel.jpg\r\n', '1 J 8 M', 'Go behind the scenes and discover the making of Messi10 by Cirque du Soleil, the show inspired by the world’s greatest football player Lionel Messi.\r\n', '2021-12-07 02:28:33'),
(32, 'Kung Fu Panda', 2008, 1, 8, 'Movies\r\n', 'Jack Black. Angelina Jolie, Jackie Chan\r\n', 'https://www.youtube.com/watch?v=PXi3Mv6KMzY\r\n', 'panda.jpg\r\n', '1 J 32 M', 'Jack Black is perfect as the voice of Po, a noodle-slurping dreamer who must embrace his true self – fuzzy flaws and all – to become the Dragon Warrior.\r\n', '2021-12-07 02:54:19'),
(33, 'Kung Fu Panda 2', 2011, 1, 8, 'Movies\r\n', 'Jack Black. Angelina Jolie, Jackie Chan\r\n', 'https://www.youtube.com/watch?v=FQ63rqSRrEI\r\n', 'panda2.jpg\r\n', '1 J 26 M', 'This sequel to KUNG FU PANDA sees Po now living his dream protecting the Valley of Peace alongside the Furious Five. Still, his new life is threatened by a new villain who plans to use a secret, unstoppable weapon to conquer China and destroy kung fu.\r\n', '2021-12-07 02:28:33'),
(34, 'Megamind', 2010, 1, 8, 'Movies\r\n', 'Will Ferrell, Jonah Hill, Brad Pitt\r\n', 'https://www.youtube.com/watch?v=6CJUQr4Vs40\r\n', 'megamind.jpg\r\n', '1 J 35 M', 'The supervillain Megamind finally conquers his nemesis, the hero Metro Man... but finds his life pointless without a hero to fight.\r\n', '2021-12-07 02:28:33'),
(35, 'How To Train Your Dragon', 2010, 1, 8, 'Movies\r\n', 'Jay Baruchel, Gerrard Butler, Craig Ferguson\r\n', 'https://www.youtube.com/watch?v=oKiYuIsPxYk\r\n', 'htyd.jpg\r\n', '1 J 33 M', 'One adventure changes two worlds! Hiccup is a young Viking who defies tradition when he befriends one of his deadliest foes – a ferocious dragon he calls Toothless. Together, the unlikely heroes must fight against all odds to save both their worlds in thi', '2021-12-07 02:28:33'),
(36, 'Hotel Transylvania 3: Summer Vacation', 2018, 1, 8, 'Movies\r\n', 'Adam Sandler, Andy Samberg, Selena Gomez\r\n', 'https://www.youtube.com/watch?v=Ku52zNnft8k\r\n', 'hotel.jpg\r\n', '1 J 33 M', 'Join your favorite monster family as they embark on a vacation adventure on a luxury monster cruise ship so Drac can finally take a break from handling everyone else\'s vacation at the hotel. It\'s smooth sailing for Drac\'s Pack as the monsters indulge in a', '2021-12-07 02:28:33'),
(37, 'Monkey See Monkey Do - Whale', 2015, 1, 8, 'Song and Dances\r\n', 'Tamar Levy, Yuval Levy\r\n', 'https://www.youtube.com/watch?v=w4WppDfPvxw\r\n', 'monkey.jpg\r\n', '11 M', 'Parrot is trying to fall asleep but monkey continuously disturbs him. Mole appears and tells them that the sounds of the ocean are known to having a calming effect. They fly to the ocean and bump into what appears to be an island, but is soon revealed as ', '2021-12-07 02:28:33'),
(38, 'Monkey See Monkey Do - Sheep', 2015, 1, 8, 'Song and Dances\r\n', 'Tamar Levy, Yuval Levy\r\n', 'https://www.youtube.com/watch?v=d8hYOh5Ty9A\r\n', 'monkey.jpg\r\n', '11 M', 'It\'s cold weather and Monkey has made a banana peel scarf for Parrot but that is not very warming or comfortable. Mole appears and tells them about sheep and her famously warm wool. Monkey feels that it would be the perfect textile to use and so they fly ', '2021-12-07 02:28:33'),
(39, 'Monkey See Monkey Do - bee', 2015, 1, 8, 'Song and Dances\r\n', 'Tamar Levy, Yuval Levy\r\n', 'https://www.youtube.com/watch?v=uCM6ytzTLf8\r\n', 'monkey.jpg\r\n', '11 M', 'The chef Monkey wants to make his famous banana honey sandwich. He discovers that there is no honey, parrot eat it all. Mole appears and tells them of the bee\'s honey making abilities. They journey off to the meadow where they meet a sweet honeybee who no', '2021-12-07 02:28:33'),
(40, 'Monkey See Monkey Do - Alligator', 2015, 1, 8, 'Song and Dances\r\n', 'Tamar Levy, Yuval Levy\r\n', 'https://www.youtube.com/watch?v=cvhomDGunPQ\r\n', 'monkey.jpg\r\n', '11 M', 'Monkey is lying on the ground with orange floating devices. When Parrot asks what he is up to, Monkey explains that he is practicing for the world Floating championship but when he does it in the water he always sinks. Mole appears and tells them about Al', '2021-12-07 02:28:33');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `id_genre` int(11) NOT NULL,
  `genre` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`id_genre`, `genre`) VALUES
(1, 'Drama'),
(2, 'Action'),
(3, 'Comedy'),
(4, 'Horror'),
(5, 'Thriller'),
(6, 'Living'),
(7, 'Sports'),
(8, 'Kids');

-- --------------------------------------------------------

--
-- Table structure for table `subs_plan`
--

CREATE TABLE `subs_plan` (
  `id_subscription_plan` int(11) NOT NULL,
  `subscription_plan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subs_plan`
--

INSERT INTO `subs_plan` (`id_subscription_plan`, `subscription_plan`) VALUES
(1, 'entertaiment'),
(2, 'single steam'),
(3, 'double steam'),
(4, 'family steam');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `user_pass` varchar(30) NOT NULL,
  `date_of_birth` date NOT NULL,
  `gender` enum('M','F') NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone_number` varchar(12) NOT NULL,
  `id_subscription_plan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `user_pass`, `date_of_birth`, `gender`, `email`, `phone_number`, `id_subscription_plan`) VALUES
(1, 'febrinaomi', 'febrinaomi123', '2002-02-16', 'F', 'febrinaomi@gmail.com', '082367463593', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `batas_usia`
--
ALTER TABLE `batas_usia`
  ADD PRIMARY KEY (`id_batas_usia`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id_favorite`),
  ADD UNIQUE KEY `id_user` (`id_user`),
  ADD UNIQUE KEY `id_film` (`id_film`);

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`),
  ADD KEY `id_batas_usia` (`id_batas_usia`),
  ADD KEY `id_genre` (`id_genre`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`);

--
-- Indexes for table `subs_plan`
--
ALTER TABLE `subs_plan`
  ADD PRIMARY KEY (`id_subscription_plan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `id_subscription_plan` (`id_subscription_plan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `batas_usia`
--
ALTER TABLE `batas_usia`
  MODIFY `id_batas_usia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id_favorite` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `subs_plan`
--
ALTER TABLE `subs_plan`
  MODIFY `id_subscription_plan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
