-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Machine: localhost
-- Genereertijd: 05 Jan 2015 om 09:49
-- Serverversie: 5.1.53
-- PHP-Versie: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `darwin`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `artefacten`
--

CREATE TABLE IF NOT EXISTS `artefacten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `omschrijving` text NOT NULL,
  `geologische_perioden` int(11) NOT NULL,
  `aanschafdatum` date NOT NULL,
  `afbeelding` varchar(50) NOT NULL,
  `zaal` int(11) NOT NULL,
  `locatie` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=77 ;

--
-- Gegevens worden uitgevoerd voor tabel `artefacten`
--

INSERT INTO `artefacten` (`id`, `naam`, `omschrijving`, `geologische_perioden`, `aanschafdatum`, `afbeelding`, `zaal`, `locatie`) VALUES
(1, 'Leeuw', 'De leeuw (Panthera leo) is een groot roofdier uit de familie der katachtigen (Felidae). Van alle kat', 1, '1907-10-11', 'leeuw.png', 1, 1),
(2, 'Hond', 'De hond (Canis lupus familiaris) is een gedomesticeerde ondersoort van de wolf. De hond is een roofd', 1, '1907-10-11', 'hond.png', 1, 1),
(3, 'Baksteen', 'Een baksteen is een kunstmatige steen, uit klei gebakken, voor de constructie van onder meer muren o', 1, '1907-10-11', 'baksteen.png', 1, 2),
(4, 'Homo erectus', 'Homo erectus (Latijn voor ''rechtopgaande mens'') is een uitgestorven mensensoort die van 1,9 miljoen ', 1, '1907-10-11', 'homo_erectus.png', 1, 2),
(5, 'Kiwi', 'De kiwi''s of snipstruisen (Apterygiformes) zijn loopvogels die van nature alleen voorkomen in Nieuw-', 1, '1907-10-11', 'kiwi.png', 1, 3),
(6, 'Kea', 'De kea (Nestor notabilis) is een vogelsoort uit de kleine familie (Strigopidae) van inheemse papegaa', 1, '1907-10-11', 'kea.png', 1, 3),
(7, 'Haai', 'De haaien (Selachimorpha, ook wel Euselachii) behoren tot de kraakbeenvissen De oudste bekende fossi', 1, '1907-10-11', 'haai.png', 1, 4),
(8, 'Palmboom', 'De palmenfamilie (Palmae of Arecaceae: beide zijn toegestaan) is de enige familie in de orde Arecale', 1, '1907-10-11', 'palmboom.png', 1, 4),
(9, 'Homo sapien', 'Mens of (wetenschappelijke naam) Homo sapiens (Latijn: verstandige of wijze mens) is een tweevoetige', 1, '1907-10-11', 'homo_sapien.png', 1, 5),
(10, 'Giraf', 'De giraffe of giraf (Giraffa camelopardalis) is een hoefdier met een zeer lange nek en lange en slan', 1, '1907-10-11', 'giraf.png', 1, 5),
(11, 'Neteldieren', 'De neteldieren (Cnidaria) vormen een stam van het dierenrijk. De stam omvat de schijfkwallen, de kub', 1, '1907-10-11', 'neteldieren.png', 1, 6),
(12, 'Homo habilis', 'Homo habilis is een uitgestorven mensensoort die 2,2 tot 1,5 miljoen jaar geleden in Oost-Afrika lee', 1, '1907-10-11', 'homo_habilis.png', 1, 6),
(13, 'Homo erectus', 'Homo erectus (Latijn voor ''rechtopgaande mens'') is een uitgestorven mensensoort die van 1,9 miljoen ', 1, '1907-10-11', 'homo_erectus.png', 1, 7),
(14, 'Tyrannosaurus', 'Tyrannosaurus is een geslacht van vleesetende theropode dinosauriërs. Tyrannosaurus behoort tot de g', 1, '1907-10-11', 'tyrannosaurus.png', 1, 7),
(15, 'Roodborstje', 'De roodborst of het roodborstje (Erithacus rubecula) is een zangvogel uit de familie Muscicapidae (v', 1, '1907-10-11', 'roodborstje.png', 1, 8),
(16, 'Krokodil', 'De krokodillen (Crocodylidae) zijn een familie uit de orde krokodilachtigen (Crocodilia). Onder deze', 1, '1907-10-11', 'krokodil.png', 1, 8),
(17, 'Zebra', 'Een zebra is een paardachtige (familie: Equidae) afkomstig uit het midden en zuiden van Afrika. De d', 1, '1907-10-11', 'zebra.png', 1, 9),
(18, 'Kraai', 'Kraaien (Corvidae) of kraaiachtigen zijn een vogelfamilie in de orde van de zangvogels (Passeriforme', 1, '1907-10-11', 'kraai.png', 1, 9),
(19, 'Slang', 'Slangen (Serpentes) zijn een groep van aan hagedissen verwante reptielen die behoren tot de orde sch', 1, '1907-10-11', 'slang.png', 1, 10),
(20, 'Zwijn', 'Het wild zwijn of everzwijn (Sus scrofa), kortweg ever is het meest voorkomende lid van de familie d', 1, '1907-10-11', 'zwijn.png', 1, 10),
(21, 'Wolf', 'De wolf (Canis lupus) is een zoogdier uit de familie hondachtigen (Canidae), die behoort tot de roof', 1, '1907-10-11', 'wolf.png', 2, 11),
(22, 'School', 'Een school is de benaming voor een grote groep vissen van dezelfde soort die dicht op elkaar zwemmen', 1, '1907-12-21', 'school.png', 2, 11),
(23, 'Zeester', 'Zeesterren (Asteroidea) zijn een groep diersoorten die behoren tot de stekelhuidigen. Zesterren hebb', 1, '1907-12-21', 'zeester.png', 2, 12),
(24, 'Octopus', 'Octopus is een geslacht van inktvissen uit de familie van Octopodidae. Het bestaat uit vele soorten.', 1, '1907-12-21', 'octopus.png', 2, 12),
(25, 'Krab', 'Krabben (Brachyura) zijn een groep van kreeftachtige dieren die behoren tot de orde tienpotigen (Dec', 1, '1914-06-06', 'krab.png', 2, 13),
(26, 'Papegaai', 'Papegaaien in de strikt taxonomische zin van het woord vormen een familie uit de orde van Psittacifo', 1, '1914-06-06', 'papegaai.png', 2, 13),
(27, 'Tijger', 'De tijger (Panthera tigris) is een zoogdier dat tot de familie der katachtigen (Felidae) behoort, ee', 1, '1914-06-06', 'tijger.png', 2, 14),
(28, 'Hyena', 'Hyena''s (Hyaenidae) zijn een familie van middelgrote roofdieren die voorkomen in Afrika en Azië. Hoe', 1, '1914-06-06', 'hyena.png', 2, 14),
(29, 'Poema', 'De poema, bergleeuw of zilverleeuw is een katachtig dier dat in geheel Midden- en Zuid-Amerika en in', 1, '1929-09-30', 'poema.png', 2, 15),
(30, 'Jaguar', 'De jaguar (Panthera onca) is een katachtige die voorkomt in Midden-Amerika en een groot deel van Zui', 1, '1929-09-30', 'jaguar.png', 2, 15),
(31, 'Pinguïn', 'Pinguïns of vetganzen zijn een orde van niet-vliegende zeevogels die alleen voorkomen op het zuideli', 1, '1951-01-09', 'penguin.png', 2, 16),
(32, 'Ringwormen', 'De ringwormen of gelede wormen (Annelida; van het Latijnse annellus "ring") zijn een grote stam van ', 1, '1978-10-09', 'ringwormen.png', 2, 16),
(33, 'Bloedzuigers', 'De bloedzuigers (Hirudinea) zijn wormachtige verwanten van de regenworm.  Het grote verschil echter ', 12, '1978-10-09', 'bloedzuigers.png', 2, 17),
(34, 'Snoerwormen', 'Het zijn zachte, gladde, slijmerige dieren, gewoonlijk met een langwerpig, cilindrische of afgeplatt', 1, '1978-10-09', 'snoerwormen.png', 2, 17),
(35, 'Slakken', 'Slakken of buikpotigen (Gastropoda) zijn een klasse uit de stam van weekdieren (Mollusca). De naam b', 1, '1978-10-09', 'slakken.png', 2, 18),
(36, 'Beerdiertjes', 'De grootte varieert van minder dan 0,1 tot circa 1,5 mm. Ze hebben vijf segmenten met vier paar pote', 12, '1994-06-26', 'beerdiertjes.png', 2, 18),
(37, 'Hoefijzerwormen', 'Deze tot 20 cm lange dieren hebben een plomp, langwerpig lichaam, met een uitstulping aan de achterk', 1, '1994-06-26', 'hoefijzerwormen.png', 2, 19),
(38, 'Kelkwormen', 'Kelkwormen (Entoprocta) (van het Grieks entos = binnen, prooktos = anus) is een stam van het Dierenr', 1, '1994-06-26', 'kelkwormen.png', 2, 19),
(39, 'Pikaia', 'Pikaia is een geslacht uit de Cephalochordata. Het dier leefde tijdens het Cambrium, zo''n 535 miljoe', 12, '1994-06-26', 'pikaia.png', 2, 20),
(40, 'Schedellozen', 'De lancetvisjes of koplozen (Cephalochordata) vormen een onderstam van de stam chordadieren (Chordat', 1, '1994-06-26', 'schedellozen.png', 2, 20),
(41, 'Plankton', 'Plankton is een verzamelnaam voor organismen die voornamelijk zwevend in het water leven, en zodoend', 12, '1994-06-26', 'plankton.png', 3, 21),
(42, 'Zee-engels', 'Zee-engelen hebben een lichaam dat lijkt op een rog. Het lichaam is afgeplat en de borst en buikvinn', 1, '1994-06-26', 'zee-engels.png', 3, 21),
(43, 'Zaagvissen', 'De zaagvissen (Pristidae) is de enige familie uit de orde Pristiformes. Binnen deze familie vallen t', 1, '1994-06-26', 'zaagvissen.png', 3, 22),
(44, 'Draakvissen', 'De draakvissen (Chimaeriformes) zijn kraakbeenvissen en vormen de enige orde van de onderklasse zeek', 1, '1994-06-26', 'draakvissen.png', 3, 22),
(45, 'Eptatretus goliath', 'Eptatretus goliath is een soort uit de familie der slijmprikken (Myxinidae). De tot nog toe grootste', 1, '1994-06-26', 'eptatretus_goliath.png', 3, 23),
(46, 'Cephalaspis', 'De kop met de bovenliggende ogen was in verhouding tot het lichaam groot, het feitelijke staartgedee', 9, '2000-04-29', 'cephalaspis.png', 3, 23),
(47, 'Dunkleosteus', 'Dunkleosteus is een geslacht van uitgestorven vissen uit het Devoon (rond 370 miljoen jaar geleden).', 9, '2001-07-17', 'dunkleosteus.png', 3, 24),
(48, 'Triceratops', 'Triceratops is een geslacht van plantenetende ornithischische dinosauriërs uit de groep van de Cerat', 4, '2001-07-17', 'triceratops.png', 3, 24),
(49, 'Ankylosaurus', 'Ankylosaurus is een geslacht van plantenetende ornithischische dinosauriërs, behorend tot de Thyreop', 4, '2012-01-05', 'ankylosaurus.png', 3, 25),
(50, 'Giganotosaurus', 'Giganotosaurus was een reusachtige roofsauriër die ruim dertien meter lang kon worden en zeven ton z', 4, '2012-01-05', 'giganotosaurus.png', 3, 25),
(76, 'aap', 'aap info', 1, '1907-10-11', '4-11.jpg', 1, 1),
(74, '1', '1', 1, '0000-00-00', '4-11.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `user_id` int(11) NOT NULL,
  `price` float(11,2) NOT NULL,
  `created_at` date NOT NULL,
  `ticket_id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`ticket_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Gegevens worden uitgevoerd voor tabel `booking`
--

INSERT INTO `booking` (`user_id`, `price`, `created_at`, `ticket_id`) VALUES
(2, 1.00, '2014-11-21', 1),
(2, 1.00, '2014-11-21', 2),
(2, 1.00, '2014-11-23', 3),
(2, 1.00, '2014-11-23', 4),
(2, 4.00, '2014-11-23', 5),
(2, 0.00, '2014-11-23', 6),
(2, 2.50, '2014-11-23', 7),
(2, 4.00, '2014-11-24', 8),
(2, 4.00, '2014-11-24', 9),
(2, 4.00, '2014-11-24', 10),
(3, 4.00, '2014-11-25', 11),
(0, 4.00, '2014-11-26', 12),
(2, 4.00, '2014-11-26', 13),
(0, 4.00, '2014-11-26', 14),
(0, 4.00, '2014-11-26', 15),
(0, 4.00, '2014-11-26', 16),
(0, 4.00, '2014-11-26', 17),
(0, 4.00, '2014-11-26', 18),
(0, 4.00, '2014-11-26', 19),
(0, 4.00, '2014-11-26', 20),
(0, 4.00, '2014-11-26', 21),
(0, 4.00, '2014-11-26', 22),
(0, 4.00, '2014-11-26', 23),
(0, 4.00, '2014-11-26', 24),
(0, 4.00, '2014-11-28', 25),
(2, 4.00, '2014-11-28', 26),
(0, 4.00, '2014-11-28', 27);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `gebruiker`
--

CREATE TABLE IF NOT EXISTS `gebruiker` (
  `gebruikernr` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(50) NOT NULL,
  `tussenvoegsel` varchar(10) NOT NULL,
  `achternaam` varchar(50) NOT NULL,
  `e_mailadres` varchar(100) NOT NULL,
  `wachtwoord` varchar(100) NOT NULL,
  `gebruikers_rol` varchar(50) NOT NULL,
  `blocked` int(11) NOT NULL,
  `geblocked` int(11) NOT NULL,
  PRIMARY KEY (`gebruikernr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Gegevens worden uitgevoerd voor tabel `gebruiker`
--

INSERT INTO `gebruiker` (`gebruikernr`, `voornaam`, `tussenvoegsel`, `achternaam`, `e_mailadres`, `wachtwoord`, `gebruikers_rol`, `blocked`, `geblocked`) VALUES
(15, 'z', 'z', 'z', 'manager@gmail.com', '1d0258c2440a8d19e716292b231e3190', 'manager', 0, 0),
(16, 'z', 'z', 'z', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 0, 1),
(17, 'z', 'z', 'z', 'reisbeheerder@gmail.com', 'a5ae8776cb57bc967b00f61e11fb1cc5', 'reisbeheerder', 0, 1),
(18, 'z', 'z', 'z', 'verkoper@gmail.com', '68ebe12dca80009288b905821fb8052b', 'verkoper', 0, 0),
(20, 'systeembeheerder', 'van', 'systeembeheerder', 'systeembeheerder@gmail.com', 'ba86cfecbc973d9af6c60ca37a2a5516', 'systeembeheerder', 0, 0);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `geologische_perioden`
--

CREATE TABLE IF NOT EXISTS `geologische_perioden` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `omschrijving` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Gegevens worden uitgevoerd voor tabel `geologische_perioden`
--

INSERT INTO `geologische_perioden` (`id`, `naam`, `omschrijving`) VALUES
(1, 'Kwartair', 'Het geologisch tijdperk Kwartair is in de geologische tijdschaal de jongste periode en in de stratig'),
(2, 'Neogeen', 'Het geologisch tijdperk Neogeen is de middelste van de drie perioden van de era Cenozoïcum. Het volg'),
(3, 'Paleogeen', 'Het Paleogeen is een tijdperk in de geologische tijdschaal. Het is de oudste van drie perioden of he'),
(4, 'Krijt', 'Het Krijt is een geologisch tijdperk dat duurde van ongeveer 145 tot 66 miljoen jaar geleden. Het is'),
(5, 'Jura', 'Het Jura is een periode in de geologie die duurde van ongeveer 201,3 tot 145,0 miljoen jaar geleden.'),
(6, 'Trias', 'Het Trias is een periode in de geologie (en een systeem in de stratigrafie), die duurde van ongeveer'),
(7, 'Perm', 'Het geologisch tijdperk Perm is in de geologische tijdschaal de laatste periode van het era Paleozoï'),
(8, 'Carboon', 'Het Carboon is een periode in de geologische tijdschaal die duurde van 358,9 ± 0,4 tot 298,9 ± 0,2 m'),
(9, 'Devoon', 'Het Devoon is een periode in de geologische tijdschaal die duurde van 419,2 ± 3,2 tot 358,9 ± 0,4 mi'),
(10, 'Siluur', 'Het Siluur is in de geologische tijdschaal een periode van ongeveer 443 tot 419 Ma.  Hierin  was het'),
(11, 'Ordovicium', 'Het Ordovicium is een periode uit de geologische tijdschaal, die ongeveer van 485 tot 443 miljoen ja'),
(12, 'Cambrium', 'Het geologisch tijdvak Cambrium (541 ± 1.0 - 485,4 ± 1,9 miljoen jaar (Ma) geleden) is het onderste '),
(13, 'Ediacarium', 'Het Ediacarium (Engels: Ediacaran) is een tijdperk in de geologische tijdschaal. Het is de jongste p'),
(14, 'Cryogenium', 'Het geologisch tijdperk Cryogenium (vroeger Cryogenien of Cryogeniaan), is een periode van het era N'),
(15, 'Tonium', 'Het geologisch tijdvak Tonium is de vroegste periode van het era Neoproterozoïcum, onderdeel van het'),
(16, 'Stenium', 'Het geologisch tijdvak Stenium is de laatste periode van het era Mesoproterozoïcum, onderdeel van he'),
(17, 'Ectasium', 'Het geologisch tijdperk Ectasium is een periode van het era Mesoproterozoïcum, onderdeel van het eon'),
(18, 'Calymmium', 'Het geologisch tijdperk Calymmium is de vroegste periode van het era Mesoproterozoïcum, onderdeel va'),
(19, 'Statherium', 'Het geologisch tijdperk Statherium is de laatste periode van het era Paleoproterozoïcum, onderdeel v'),
(20, 'Orosirium', 'Het geologisch tijdperk Orosirium is een periode van het era Paleoproterozoïcum, onderdeel van het e'),
(21, 'Rhyacium', 'Het geologisch tijdperk Rhyacium is een periode van het era Paleoproterozoïcum, onderdeel van het eo'),
(22, 'Siderium', 'Het geologisch tijdvak Siderium is de vroegste periode van het era Paleoproterozoïcum, onderdeel van'),
(23, 'Neoarcheïcum', 'Het geologisch tijdvak Neoarcheïcum (ook Neoarchaïcum) is de laatste/bovenste era van het eon Archeï'),
(24, 'Mesoarcheïcum', 'Het geologisch tijdvak Mesoarcheïcum (ook Mesoarchaïcum) is een era van het eon Archeïcum, dat duurd'),
(25, 'Paleoarcheïcum', 'Het geologisch tijdvak Paleoarcheïcum (ook Paleoarchaïcum) is een era van het eon Archaïcum, dat duu'),
(26, 'Eoarcheïcum', 'Het geologisch tijdvak Eoarcheïcum (ook: Eoarchaïcum) is de vroegste/onderste era van het eon Archeï'),
(27, 'Hadeïcum', 'Met Hadeïcum wordt soms het eerste geologisch tijdperk in de geschiedenis van de Aarde bedoeld. Het ');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ligplaatsen`
--

CREATE TABLE IF NOT EXISTS `ligplaatsen` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `naam` varchar(50) NOT NULL,
  `afbeelding` varchar(50) NOT NULL,
  `omschrijving` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Gegevens worden uitgevoerd voor tabel `ligplaatsen`
--

INSERT INTO `ligplaatsen` (`id`, `naam`, `afbeelding`, `omschrijving`) VALUES
(1, 'St. Jago–Cape de Verde Islands', 'cape_verde.png', 'Cape Verde  (Portuguese: Cabo Verde, pronounced: [?kabu ?ve?d?]), officially the Republic of Cabo Ve'),
(2, 'Rio de Janeiro', 'rio_de_janeiro.png', 'Rio de Janeiro (Portuguese pronunciation: [?hi.u d?i ????ne?u]; January''s River), commonly referred '),
(3, 'Maldonado', 'maldonado.png', 'Maldonado is the capital of Maldonado Department of Uruguay. As of the census of 2011, it is the sev'),
(4, 'Río Negro', 'río_negro.png', 'The Río Negro (Spanish pronunciation: [?ri.o ?ne??o], Black River) is the most important river in Ur'),
(5, 'Bahia Blanca', 'bahia_blanca.png', 'Bahía Blanca (Spanish pronunciation: [ba?i.a ??la?ka]) is a city located in the south-west of the pr'),
(6, 'Buenos Ayres', 'buenos_ayres.png', 'Buenos Aires Spanish: [?bwenos ?ai?es]) is the capital and largest city of Argentina, and the second'),
(7, 'St. Fe', 'st._fe.png', 'Santa Fe de la Vera Cruz (usually called just Santa Fe) is the capital city of the province of Santa'),
(8, 'Banda Oriental', 'banda_oriental.png', 'Banda Oriental, or more fully Banda Oriental del Uruguay (sometimes rendered in English as "Eastern '),
(9, 'Patagonia', 'patagonia.png', 'Patagonia is a sparsely populated region located at the southern end of South America, shared by Arg'),
(10, 'Santa Cruz–Patagonia', 'santa_cruz–patagonia.png', 'Santa Cruz (Spanish pronunciation: [?santa ?k?us]) is a province of Argentina, located in the southe'),
(11, 'Tierra del Fuego', 'tierra_del_fuego.png', 'Tierra del Fuego Spanish: [?tjera ðel ?fwe?o]; Spanish for "Land of Fire") is an archipelago off the'),
(12, 'The Falkland Islands', 'the_falkland_islands.png', 'The Falkland Islands (Spanish: Islas Malvinas [mal??inas]) are an archipelago in the South Atlantic '),
(13, 'Strait of Magellan', 'strait_of_magellan.png', 'The Strait of Magellan (Spanish: Estrecho de Magallanes), also called the Straits of Magellan, is a '),
(14, 'Central Chile', 'central_chile.png', 'Chile, officially the Republic of Chile (Spanish: República de Chile, [re?pu?lika ðe ?t?ile]), is a '),
(15, 'Chiloe', 'chiloe.png', 'Chiloé Island (Spanish: Isla de Chiloé), also known as Greater Island of Chiloé (Isla Grande de Chil'),
(16, 'Chonos Islands', 'chonos_islands.png', 'Chonos Archipelago is a series of low mountainous elongated islands with deep bays, traces of a subm'),
(17, 'Concepcion', 'concepcion.png', 'Concepción is a Chilean city and commune belonging to the metropolitan area of Greater Concepción, i'),
(18, 'Passage of Cordillera', 'passage_of_cordillera.png', 'The Chilean Coastal Range (Spanish: Cordillera de la Costa) is a mountain range that runs from north'),
(19, 'Peru', 'peru.png', 'Peru, officially the Republic of Peru  is a country in western South America. It is bordered in the '),
(20, 'Galapagos Archipelago', 'galapagos_archipelago.png', 'The Galápagos Islands (official name: Archipiélago de Colón, other Spanish names: Islas Galápagos, S'),
(21, 'Tahiti', 'tahiti.png', 'Tahiti is the largest island in the Windward group of French Polynesia; an overseas collectivity of '),
(22, 'New Zealand', 'new_zealand.png', 'New Zealand an island country in the southwestern Pacific Ocean. The country geographically comprise'),
(23, 'Australia (Van Diemens Land)', 'australia_(van_diemens_land).png', 'Tasmania (abbreviated as Tas and known colloquially as “Tassie”) is an island state, part of the Com'),
(24, 'Cocos (Keeling) Islands', 'cocos_(keeling)_islands.png', 'The Territory of the Cocos (Keeling) Islands, also called Cocos Islands and Keeling Islands, is a te'),
(25, 'Mauritius', 'mauritius.png', 'Mauritius (French: Maurice), officially the Republic of Mauritius (French: République de Maurice), i');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `ship`
--

CREATE TABLE IF NOT EXISTS `ship` (
  `naam` varchar(50) NOT NULL,
  `afbeelding` varchar(150) NOT NULL,
  `lengte` float(11,1) NOT NULL,
  `breedte` float(11,1) NOT NULL,
  `diepgang` float(11,1) NOT NULL,
  `omschrijving` text NOT NULL,
  `kapitein` varchar(50) NOT NULL,
  PRIMARY KEY (`naam`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Gegevens worden uitgevoerd voor tabel `ship`
--

INSERT INTO `ship` (`naam`, `afbeelding`, `lengte`, `breedte`, `diepgang`, `omschrijving`, `kapitein`) VALUES
('HMS Beagle', 'ship.png', 27.5, 7.5, 3.8, 'De HMS Beagle was een zeilschip dat bekend werd door een van zijn passagiers, Charles Darwin. Op 11 ', 'Robert FitzRoy');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `visitor`
--

CREATE TABLE IF NOT EXISTS `visitor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `voornaam` varchar(100) NOT NULL,
  `tussenvoegsel` varchar(100) NOT NULL,
  `achternaam` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `geboortedatum` date NOT NULL,
  `postcode` varchar(20) NOT NULL,
  `woonplaats` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `visitor`
--

INSERT INTO `visitor` (`id`, `voornaam`, `tussenvoegsel`, `achternaam`, `email`, `geboortedatum`, `postcode`, `woonplaats`) VALUES
(2, 'Simon', 'van', 'Eeden', 'eeden.simon@gmail.com', '1995-05-26', '1276EB', 'Huizen'),
(3, 'Jan', 'van', 'Eik', 'Janvaneik@hotmail.com', '1975-12-03', '3471AH', 'Woerden');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `zaal`
--

CREATE TABLE IF NOT EXISTS `zaal` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zaal` int(11) NOT NULL,
  `omschrijving` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Gegevens worden uitgevoerd voor tabel `zaal`
--

INSERT INTO `zaal` (`id`, `zaal`, `omschrijving`) VALUES
(1, 1, 'Darwin zijn vroegere artefacten. '),
(2, 2, 'Darwin zijn artefacten. '),
(3, 3, 'Darwin zijn latere artefacten. ');
