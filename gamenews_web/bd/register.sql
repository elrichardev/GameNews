-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-01-2021 a las 19:08:53
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `register`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `new_record`
--

CREATE TABLE `new_record` (
  `id` int(11) NOT NULL,
  `trn_date` datetime NOT NULL,
  `titulo` varchar(50) NOT NULL,
  `categoria` int(11) NOT NULL,
  `submittedby` varchar(50) NOT NULL,
  `cuerpo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `new_record`
--

INSERT INTO `new_record` (`id`, `trn_date`, `titulo`, `categoria`, `submittedby`, `cuerpo`) VALUES
(0, '2021-01-31 10:40:48', 'El G2 ESports contra las cuerdas', 2, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ac tincidunt quam. Cras a viverra nunc. Sed laoreet nulla vel varius pretium. Integer.'),
(1, '2021-01-31 10:41:51', 'Numerosos cambios en el mapa...', 1, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam scelerisque, metus sed semper luctus, lorem felis luctus nunc, non egestas turpis turpis vitae magna. In a interdum purus. Nulla et enim at nulla rhoncus hendrerit. Suspendisse tincidunt luctus semper. Sed nec dolor eget tellus rhoncus pulvinar. Nunc in pellentesque ante, id auctor elit. Fusce vehicula erat quis tortor feugiat, nec ornare nisi fringilla. Fusce sed faucibus massa. Aenean vulputate scelerisque libero sit amet accumsan. Vivamus lobortis, nunc et facilisis ornare, lorem neque condimentum nulla, id tempor ligula nibh in lectus. Pellentesque vel molestie enim. Integer viverra consequat blandit. Vivamus posuere facilisis justo, eu placerat orci auctor non. Sed id nunc urna. Fusce cursus, massa non accumsan egestas, quam enim volutpat mauris, sed sodales nibh sapien sit amet massa.  Nullam suscipit imperdiet odio nec efficitur. Etiam vel sem ut sapien facilisis molestie quis dapibus leo. Donec pellentesque libero eu diam bibendum, vitae vulputate nunc efficitur. Vivamus malesuada sem tellus, ut ornare nibh malesuada id. Sed sit amet scelerisque erat. Aliquam aliquet sit amet augue ut vulputate. Ut ornare erat ac massa lobortis, laoreet condimentum justo placerat. Suspendisse potenti.  Suspendisse sit amet malesuada augue. Sed tempor venenatis nulla, fermentum facilisis erat fringilla et. Aenean at hendrerit erat. Aenean facilisis urna eu volutpat tincidunt. Ut sit amet mollis urna. Integer eu felis sed libero euismod auctor. Aliquam ultrices dictum urna ac lacinia. Donec ultrices eget mauris sit amet luctus. Duis vitae lorem varius, faucibus odio id, ullamcorper tortor. Mauris mi purus, porttitor vel mi et, malesuada egestas nibh. In a pellentesque nunc. Integer velit ante, feugiat in orci eget, ultricies luctus mi.  Sed tempus tellus id mi condimentum accumsan. Maecenas a sollicitudin ante. Etiam rutrum nulla ut faucibus vulputate. Maecenas nec mauris pharetra, blandit libero a, rutrum massa. Ut efficitur justo ut orci vulputate, ut lobortis odio ornare. Mauris a magna justo. Vivamus vel ipsum eu massa hendrerit consequat.  Praesent vitae efficitur odio, eu iaculis massa. Mauris elementum tortor vehicula dictum accumsan. Mauris vitae augue tristique, blandit libero id, laoreet augue. Cras lacus nisi, efficitur non blandit quis, semper vitae ligula. Nam ultricies libero in ultrices eleifend. Etiam eu fermentum arcu. Vestibulum eget diam nec elit porta commodo.'),
(2, '2021-01-31 10:42:19', '¿Qúe ha pasado con Fnatic?', 3, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis nisl ante, non condimentum felis molestie vel. Donec a metus eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. In a faucibus ligula. Aliquam sit amet ultricies felis, quis pharetra nulla. Praesent blandit nunc vitae nunc feugiat aliquet. Nam quis fermentum nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris facilisis maximus nunc, non sodales eros consectetur cursus. Nunc finibus, ante nec volutpat lobortis, dui sapien ornare leo, in faucibus turpis velit a neque. Vestibulum cursus odio non eleifend pharetra. Nam nec nisi diam. Etiam ipsum augue, tristique non metus ut, facilisis hendrerit nisi.  Nullam metus orci, congue non pellentesque sed, iaculis id risus. Praesent leo arcu, pharetra mattis metus at, finibus ornare quam. Nullam accumsan tortor ut faucibus rhoncus. Sed laoreet diam quam, nec posuere sapien varius vitae. Phasellus laoreet neque luctus turpis dignissim consequat. Nunc sit amet nunc euismod, consectetur orci sed, facilisis magna. Praesent finibus justo et eros condimentum venenatis. Nullam ornare consectetur tortor, eu cursus augue convallis quis.  Maecenas fermentum lorem vel lectus molestie posuere. Sed tristique ipsum at tortor porttitor, et imperdiet ex consectetur. Morbi elementum justo ultricies faucibus tristique. Cras ac justo tellus. Aenean viverra ante hendrerit erat mollis, non molestie dui bibendum. In eleifend lacus non leo molestie, nec tincidunt nunc pulvinar. Praesent tellus dolor, pellentesque quis sapien et, venenatis blandit libero. Duis sagittis, mi quis facilisis auctor, dolor lacus faucibus enim, ut cursus massa nisl eget odio. Donec sed eleifend mi. Vestibulum tincidunt vehicula diam eget congue. Maecenas tempus odio non fermentum finibus. Sed fermentum ut velit vel sagittis. Etiam eget scelerisque sem, id posuere nulla. Nunc varius varius velit vel vehicula. Mauris condimentum nibh et purus rutrum, id hendrerit nisl convallis. Curabitur purus justo, vestibulum eleifend nulla eget, ornare posuere libero.'),
(3, '2021-01-31 10:43:09', 'El gigante B03 se ha despertado!', 4, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce convallis nisl ante, non condimentum felis molestie vel. Donec a metus eros. Interdum et malesuada fames ac ante ipsum primis in faucibus. In a faucibus ligula. Aliquam sit amet ultricies felis, quis pharetra nulla. Praesent blandit nunc vitae nunc feugiat aliquet. Nam quis fermentum nibh. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Mauris facilisis maximus nunc, non sodales eros consectetur cursus. Nunc finibus, ante nec volutpat lobortis, dui sapien ornare leo, in faucibus turpis velit a neque. Vestibulum cursus odio non eleifend pharetra. Nam nec nisi diam. Etiam ipsum augue, tristique non metus ut, facilisis hendrerit nisi.  Nullam metus orci, congue non pellentesque sed, iaculis id risus. Praesent leo arcu, pharetra mattis metus at, finibus ornare quam. Nullam accumsan tortor ut faucibus rhoncus. Sed laoreet diam quam, nec posuere sapien varius vitae. Phasellus laoreet neque luctus turpis dignissim consequat. Nunc sit amet nunc euismod, consectetur orci sed, facilisis magna. Praesent finibus justo et eros condimentum venenatis. Nullam ornare consectetur tortor, eu cursus augue convallis quis.'),
(4, '2021-01-31 10:44:03', '¿Están los tanques rotos? Este Malphite mata hasta', 1, 'admin', 'Nullam metus orci, congue non pellentesque sed, iaculis id risus. Praesent leo arcu, pharetra mattis metus at, finibus ornare quam. Nullam accumsan tortor ut faucibus rhoncus. Sed laoreet diam quam, nec posuere sapien varius vitae. Phasellus laoreet neque luctus turpis dignissim consequat. Nunc sit amet nunc euismod, consectetur orci sed, facilisis magna. Praesent finibus justo et eros condimentum venenatis. Nullam ornare consectetur tortor, eu cursus augue convallis quis.  Maecenas fermentum lorem vel lectus molestie posuere. Sed tristique ipsum at tortor porttitor, et imperdiet ex consectetur. Morbi elementum justo ultricies faucibus tristique. Cras ac justo tellus. Aenean viverra ante hendrerit erat mollis, non molestie dui bibendum. In eleifend lacus non leo molestie, nec tincidunt nunc pulvinar. Praesent tellus dolor, pellentesque quis sapien et, venenatis blandit libero. Duis sagittis, mi quis facilisis auctor, dolor lacus faucibus enim, ut cursus massa nisl eget odio. Donec sed eleifend mi. Vestibulum tincidunt vehicula diam eget congue. Maecenas tempus odio non fermentum finibus. Sed fermentum ut velit vel sagittis. Etiam eget scelerisque sem, id posuere nulla. Nunc varius varius velit vel vehicula. Mauris condimentum nibh et purus rutrum, id hendrerit nisl convallis. Curabitur purus justo, vestibulum eleifend nulla eget, ornare posuere libero.'),
(5, '2021-01-31 10:45:05', 'dev1ce se inventó esta locura de jugada: quadrakil', 3, 'admin', 'Curabitur sagittis arcu sed congue consequat. Maecenas sit amet lacus eros. Nullam ultricies, velit id pharetra facilisis, libero lacus rutrum sapien, id dignissim est mi ut dui. Vestibulum ut lacus at risus hendrerit sagittis dignissim at sapien. Sed eu turpis velit. Suspendisse vitae bibendum arcu. Aenean et dolor ac diam dictum rhoncus eget a sapien. Mauris elementum nulla vitae diam efficitur, et condimentum ex tempor.  Suspendisse dignissim condimentum quam, et malesuada lorem tempor sit amet. Quisque pretium luctus diam, sit amet scelerisque velit vehicula quis. Nam nisi tellus, malesuada id mi vitae, dignissim fermentum leo. Nam ornare blandit odio, at tincidunt mi tincidunt id. Quisque augue dolor, tempus sit amet quam eu, porta dictum leo. Proin porta a lorem a consectetur. Pellentesque libero erat, fermentum sit amet justo quis, ullamcorper dignissim lorem. Quisque pretium tempus est vitae finibus. Nunc maximus blandit maximus. Morbi turpis urna, consectetur sed metus vitae, consequat porttitor leo. Pellentesque viverra justo purus, eu tincidunt odio sodales in. Nullam eget finibus nibh, vitae porta tortor.'),
(6, '2021-01-31 10:45:36', 'Alvaro845: \"En Team Queso estamos viviendo un sueñ', 5, 'admin', 'Nam malesuada massa sit amet feugiat aliquam. Cras consequat justo quam, eget feugiat justo egestas ac. Ut pellentesque, felis sit amet cursus auctor, dui risus egestas leo, vel fringilla lorem ligula eu justo. Nulla dapibus nisi pretium, finibus nulla in, varius neque. Etiam massa metus, sollicitudin nec luctus porta, lacinia sed magna. Nullam condimentum leo eu risus pulvinar, ac porta arcu imperdiet. Nulla facilisi. Sed eu nibh felis. Nunc neque urna, feugiat a ligula ac, dignissim aliquam ipsum.  Interdum et malesuada fames ac ante ipsum primis in faucibus. Fusce eu nisi diam. In dapibus iaculis orci pellentesque finibus. Nunc eu facilisis lacus. Quisque vehicula blandit magna vitae facilisis. Aliquam feugiat aliquet velit sit amet pretium. Duis ex mauris, varius vitae vehicula quis, tristique nec quam. Sed scelerisque tortor lectus, nec finibus erat pulvinar vel. Nullam tempor facilisis turpis, ac dignissim nunc cursus eget. Praesent ut elementum augue. Donec augue tortor, bibendum nec vehicula nec, mollis at turpis. Proin elementum sit amet ante et dapibus. Proin iaculis mattis libero, at vulputate nibh eleifend sit amet. Proin ac ex eu ligula dapibus faucibus. Nulla posuere non erat ac fermentum. Sed bibendum risus leo.'),
(7, '2021-01-31 10:47:41', 'T1 refuerza su apuesta por Valorant fichando a Fli', 2, 'admin', 'Suspendisse dignissim condimentum quam, et malesuada lorem tempor sit amet. Quisque pretium luctus diam, sit amet scelerisque velit vehicula quis. Nam nisi tellus, malesuada id mi vitae, dignissim fermentum leo. Nam ornare blandit odio, at tincidunt mi tincidunt id. Quisque augue dolor, tempus sit amet quam eu, porta dictum leo. Proin porta a lorem a consectetur. Pellentesque libero erat, fermentum sit amet justo quis, ullamcorper dignissim lorem. Quisque pretium tempus est vitae finibus. Nunc maximus blandit maximus. Morbi turpis urna, consectetur sed metus vitae, consequat porttitor leo. Pellentesque viverra justo purus, eu tincidunt odio sodales in. Nullam eget finibus nibh, vitae porta tortor.  Sed feugiat porttitor risus ac condimentum. Maecenas quis ligula ac urna consectetur varius in sit amet ante. Mauris ornare sed mauris ac volutpat. Morbi molestie vitae libero id molestie. In placerat posuere facilisis. Duis ultrices, orci quis tempor dictum, dolor magna auctor ex, ut commodo magna mauris eu enim. Donec sodales sed odio in malesuada.'),
(8, '2021-01-31 10:48:19', 'Riot nos habla de su hoja de ruta con el antitramp', 5, 'admin', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam gravida orci at metus volutpat, eget posuere tellus molestie. Etiam suscipit tortor sed urna sagittis, vel viverra sapien condimentum. Pellentesque tincidunt tincidunt justo, a rutrum nisi euismod quis. Phasellus dictum efficitur congue. Curabitur nec lorem non massa lacinia consectetur. Aenean vel tortor in mi rutrum suscipit. Sed vulputate pretium velit in hendrerit.  Fusce non massa nec augue consectetur aliquet. Nulla ac luctus eros. Morbi cursus scelerisque pellentesque. Nam laoreet enim et elit elementum, nec facilisis ex efficitur. Nullam ac aliquam ex. Vestibulum elementum ut nisi a auctor. Fusce non massa in leo semper tincidunt in non justo.  Etiam consequat lacinia augue sit amet viverra. Praesent cursus a metus ut aliquam. Nullam porta dui erat, nec congue neque vulputate a. Nam dignissim magna vel ipsum sollicitudin, at tristique metus porttitor. Morbi posuere efficitur blandit. Suspendisse ac sapien vitae purus scelerisque euismod nec nec dui. Mauris vitae aliquam nibh, eu gravida nisi. Vestibulum semper tortor a pulvinar imperdiet. Vestibulum bibendum volutpat ante, vel pretium augue ullamcorper a. Nulla facilisi. Nunc facilisis cursus iaculis.'),
(9, '2021-01-31 10:49:20', 'COD Black Ops Cold War presenta Base Z en un tráil', 4, 'admin', 'Mauris leo tellus, fermentum id commodo id, ornare vel velit. Cras vitae feugiat mauris. Etiam ac velit id lorem auctor efficitur nec sed velit. Mauris porta, turpis et pretium elementum, velit leo fermentum enim, placerat vulputate magna ante vitae dui. Nulla id felis justo. Ut id tellus ac tellus imperdiet eleifend a vitae lorem. Fusce eros orci, mattis dictum massa ac, bibendum commodo justo. Nullam cursus felis sed hendrerit euismod. Fusce a ultrices ligula, eget maximus nisi. Nunc sit amet nunc tempor, dapibus urna a, facilisis nibh. Mauris placerat nibh at odio dapibus, ac iaculis arcu euismod. Suspendisse volutpat nibh quis orci volutpat, at malesuada eros tincidunt.  Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Duis feugiat vestibulum interdum. Fusce cursus urna ac finibus vestibulum. Proin nec odio vel odio cursus vulputate tempor ac purus. Donec ornare congue placerat. Nam et orci sit amet purus viverra blandit. Vestibulum non imperdiet nibh.  Ut blandit, magna sit amet vestibulum sollicitudin, leo neque hendrerit lorem, vitae faucibus turpis neque at odio. Aliquam bibendum velit ac augue sagittis ornare. Morbi magna felis, cursus eget imperdiet vitae, scelerisque eu elit. Donec vestibulum auctor ipsum, sit amet auctor metus facilisis id. Donec iaculis urna nibh. Sed rhoncus condimentum diam, vitae pretium magna malesuada feugiat. Quisque in porttitor turpis. Curabitur porttitor lectus vel feugiat tempus. Phasellus hendrerit tellus vel lectus porttitor laoreet.'),
(53, '2021-01-31 18:58:08', 'prueba1234', 1, 'admin', 'prueba contenido');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `titulo` text NOT NULL,
  `cuerpo` text NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticias`
--

CREATE TABLE `noticias` (
  `titulo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_temp`
--

CREATE TABLE `password_reset_temp` (
  `email` varchar(250) NOT NULL,
  `key` varchar(250) NOT NULL,
  `expDate` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `password_reset_temp`
--

INSERT INTO `password_reset_temp` (`email`, `key`, `expDate`) VALUES
('hola123@gmail.com', '768e78024aa8fdb9b8fe87be86f64745634ca5400c', '2020-11-29 21:29:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(9, 'admin', 'admin@correo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-23 21:21:56'),
(11, 'usuario', 'usuario@correo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-31 10:52:40'),
(12, 'usuario2', 'usuario@correo.com', '81dc9bdb52d04dc20036dbd8313ed055', '2021-01-31 16:42:41');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `new_record`
--
ALTER TABLE `new_record`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `new_record`
--
ALTER TABLE `new_record`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
