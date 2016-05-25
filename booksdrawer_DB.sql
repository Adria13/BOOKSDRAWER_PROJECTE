-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.26 - MySQL Community Server (GPL)
-- SO del servidor:              Win32
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para booksdrawer
CREATE DATABASE IF NOT EXISTS `booksdrawer` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci */;
USE `booksdrawer`;


-- Volcando estructura para tabla booksdrawer.favoritos
CREATE TABLE IF NOT EXISTS `favoritos` (
  `id_libro` int(11) NOT NULL,
  `id_usu` int(11) NOT NULL,
  `id_genero` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_libro`,`id_usu`),
  KEY `usus` (`id_usu`),
  KEY `genFav` (`id_genero`),
  CONSTRAINT `genFav` FOREIGN KEY (`id_genero`) REFERENCES `generos` (`id_genero`),
  CONSTRAINT `librosFav` FOREIGN KEY (`id_libro`) REFERENCES `libros` (`id_libro`),
  CONSTRAINT `usus` FOREIGN KEY (`id_usu`) REFERENCES `usuarios` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- Volcando datos para la tabla booksdrawer.favoritos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `favoritos` DISABLE KEYS */;
/*!40000 ALTER TABLE `favoritos` ENABLE KEYS */;


-- Volcando estructura para tabla booksdrawer.generos
CREATE TABLE IF NOT EXISTS `generos` (
  `id_genero` int(11) NOT NULL AUTO_INCREMENT,
  `genero` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- Volcando datos para la tabla booksdrawer.generos: ~23 rows (aproximadamente)
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
INSERT INTO `generos` (`id_genero`, `genero`) VALUES
	(1, 'Aventura'),
	(2, 'Belicas'),
	(3, 'Biografia'),
	(4, 'Ciencia Ficcion'),
	(5, 'Clasicos de la literatura'),
	(6, 'Drama'),
	(7, 'Ensayo'),
	(8, 'Erotica'),
	(9, 'Espionaje'),
	(10, 'Fantasia'),
	(11, 'Historica'),
	(12, 'Humor'),
	(13, 'Infantil'),
	(14, 'Juvenil'),
	(15, 'Literatura contemporanea'),
	(16, 'Narrativa'),
	(17, 'Novela negra'),
	(18, 'Misterio'),
	(19, 'Poesia'),
	(20, 'Policiacas'),
	(21, 'Romantica'),
	(22, 'Suspense'),
	(23, 'Terror');
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;


-- Volcando estructura para tabla booksdrawer.libros
CREATE TABLE IF NOT EXISTS `libros` (
  `id_libro` int(11) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT '0',
  `Autor` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT '0',
  `Fecha` date DEFAULT '0000-00-00',
  `Genero` int(11) DEFAULT '0',
  `Descripcion` varchar(1000) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT '0',
  `Portada` varchar(100) CHARACTER SET utf8 COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id_libro`),
  KEY `FK_libros_generos` (`Genero`),
  CONSTRAINT `FK_libros_generos` FOREIGN KEY (`Genero`) REFERENCES `generos` (`id_genero`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish2_ci;

-- Volcando datos para la tabla booksdrawer.libros: ~36 rows (aproximadamente)
/*!40000 ALTER TABLE `libros` DISABLE KEYS */;
INSERT INTO `libros` (`id_libro`, `Titulo`, `Autor`, `Fecha`, `Genero`, `Descripcion`, `Portada`) VALUES
	(1, 'DON QUIJOTE DE LA MANCHA', 'Miguel de Cervantes', '2007-01-01', 5, 'Es una ediciÃ³n en dos tomos, con anotaciÃ³n totalmente nueva, realizada por Alberto Blecua, uno de los mejores especialistas en literatura del Siglo de Oro. El primer volumen cuenta tambiÃ©n con una extensa IntroducciÃ³n que nos sitÃºa al autor y a la obra en su contexto histÃ³rico, ayudando a entender las claves para su correcta comprensiÃ³n.', '../views/images/portada/DONQUIJOTEDELAMANCHA.jpg'),
	(2, 'ODISEA', 'Homero', '2007-01-01', 5, 'VersiÃ³n de bolsillo de este poema Ã©pico atribuido a Homero. Se cree que fue escrito hacia el siglo IX a.C. Narra la vuelta a casa del hÃ©roe griego Odiseo tras la Guerra de Troya. Odiseo tarda veinte aÃ±os en regresar a Ãtaca para encontrarse con su mujer, PenÃ©lope, y su hijo, CalÃ­maco.', '../views/images/portada/ODISEA.jpg'),
	(3, 'EL PROCESO', 'Franz Kafka', '2008-01-01', 15, 'Alguien debÃ­a de haber calumniado a Josef K., porque, sin haber hecho nada malo, fue detenido una maÃ±ana.Â» AsÃ­ empieza esta obra maestra de la literatura que fue publicada por primera vez en 1925 por Max Brod partiendo de los manuscritos que dejÃ³ Franz Kafka. Josef K., el protagonista, es acusado de un delito que nunca llegarÃ¡ a conocer y se ve envuelto en una maraÃ±a de la que no podrÃ¡ salir. Nadie sabe quiÃ©n dirige los engranajes que propician la detenciÃ³n y el posterior proceso. La situaciÃ³n en la que se encuentra el protagonista, a pesar de ser aparentemente absurda, se nos hace muy verosÃ­mil. En la novela aparecen abogados, jueces, ujieres, guardianes... que, en conjunto, dan una imagen impactante de los mecanismos de la Ley y del Estado. En Josef K. irÃ¡ creciendo un sentimiento de culpa que conllevarÃ¡ su sumisiÃ³n ante el proceso y que darÃ¡ lugar al inesperado final del libro... Las ilustraciones son del artista alemÃ¡n Bengt Fosshag.', '../views/images/portada/ELPROCESO.jpg'),
	(4, 'LA METAMORFOSIS', 'Franz Kafka', '2011-01-01', 15, 'Al despertar Gregorio Samsa una maÃ±ana, tras un sueÃ±o intranquilo, encontrÃ³se en su cama convertido en un monstruoso insecto. Tal es el abrupto comienzo, que nos sitÃºa de raÃ­z bajo unas reglas distintas, de LA METAMORFOSIS, sin duda alguna la obra de Franz Kafka (1883-1924) que ha alcanzado mayor celebridad. Escrito en 1912 y publicado en 1916, este relato es considerado una de las obras maestras de este siglo por sus innegables rasgos precursores y el caudal de ideas e interpretaciones que desde siempre ha suscitado. Completan el volumen los relatos "Un artista del hambre" y "Un artista del trapecio".', '../views/images/portada/LAMETAMORFOSIS.jpg'),
	(5, 'ANA KARENINA', 'LeÃ³n TolstÃ³i', '2013-01-01', 15, 'En 1877, ocho aÃ±os despuÃ©s de la publicaciÃ³n de Guerra y paz, TolstÃ³i puso punto final a su novela Anna Karenina, una de las obras mÃ¡s grandes de la historia de la literatura. Su trama, inspirada en algunos incidentes reales y marcada por las preocupaciones Ã©ticas generadas por la crisis espiritual que atravesaba el autor, acaba centrÃ¡ndose en el adulterio de la protagonista, una de las tres historias conyugales que se entrelazan en la obra. Reducir sin embargo esta magnÃ­fica novela a tal anÃ©cdota, por importante que sea en ella, es no hacer justicia a unas pÃ¡ginas en las que late de forma verÃ­dica casi el entero registro de las pulsiones y pasiones humanas comunes a todos.', '../views/images/portada/ANAKARENINA.jpg'),
	(6, 'MOBY DICK', 'Herman Melville', '2003-01-01', 5, 'Moby Dick, la novela que William Faulkner hubiera querido escribir, ha alcanzado el reconocimiento y el elogio constante que merece una construcciÃ³n narrativa impecable. La lucha del capitÃ¡n Ahab, su terrible obsesiÃ³n y la mÃ­tica persecuciÃ³n de la enorme ballena han traspasado fronteras, consiguiendo asÃ­ la indiscutible categorÃ­a de obra maestra de la literatura universal.', '../views/images/portada/MOBYDICK.jpg'),
	(7, 'CUENTOS', 'AntÃ³n ChÃ©jov', '2007-01-01', 15, 'Esta antologÃ­a no sigue un orden cronolÃ³gico, sino que propone un recorrido por cierto tipo de cuento muy caracterÃ­stico de ChÃ©jov. Siguiendo a Borges, Ricardo Piglia afirma que los cuentos, en general, dejan entrever otra historia detrÃ¡s de la historia manifiesta. Del mismo modo, en las narraciones de este volumen los protagonistas creen advertir indicios de un cambio que los va a liberar de una vida gris y sin alicientes. Indicios que terminan por revelarse engaÃ±osos, con lo que las falsas ilusiones los hacen sentirse todavÃ­a mÃ¡s frustrados. La secuencia ilustra aspectos que aproximan los cuentos de ChÃ©jov a sus propias obras dramÃ¡ticas: la importancia de los detalles y la atmÃ³sfera, el carÃ¡cter fragmentario (debido a los tiempos muertos y a la sujeciÃ³n del desarrollo narrativo a la melancolÃ­a de los lugares), la introspecciÃ³n o la ironÃ­a que brota del desengaÃ±o. Hacia el final, LA NOVIA, el Ãºltimo relato de ChÃ©jov, abre un inesperado horizonte de salvaciÃ³n. Y, po', '../views/images/portada/CUENTOS.jpg'),
	(8, 'GUERRA Y PAZ', 'LeÃ³n TolstÃ³i', '2007-01-01', 5, '-Â¡A tierra!- gritÃ³ el ayudante, tumbÃ¡ndose rÃ¡pidamente. El prÃ­ncipe AndrÃ©i siguiÃ³ en pie, indeciso. La granada, humeante, giraba como una peonza entre Ã©l y el ayudante, tumbado en tierra, en el borde del sembrado y el prado junto a la mata de ajenjo. Guerra y paz es un clÃ¡sico de la literatura universal. TolstÃ³i es, con Dostoievski, el autor mÃ¡s grande que ha dado la literatura rusa. Guerra y paz se ha traducido pocas veces al espaÃ±ol y la ediciÃ³n que presentamos es la mejor traducida y mejor anotada. Reeditamos aquÃ­ en un formato mÃ¡s grande y legible la traducciÃ³n de Lydia KÃºper, la Ãºnica traducciÃ³n autÃ©ntica y magistral del ruso que existe en el mercado espaÃ±ol.', '../views/images/portada/GUERRAYPAZ.jpg'),
	(9, 'POETA EN NUEVA YORK', 'Federico GarcÃ­a Lorca', '2008-01-01', 19, 'Poema: LA AURORA. La aurora de Nueva York tiene cuatro columnas de cieno y un huracÃ¡n de negras palomas que chapotean las aguas podridas. La aurora de Nueva York gime por las inmensas escaleras buscando entre las aristas nardos de angustia dibujada. La aurora llega y nadie la recibe en su boca porque allÃ­ no hay maÃ±ana ni esperanza posible: a veces las monedas en enjambres furiosos taladran y devoran abandonados niÃ±os. Los primeros que salen comprenden con sus huesos que no habrÃ¡ paraÃ­so ni amores deshojados; saben que van al cieno de nÃºmeros y leyes, a los juegos sin arte, a sudores sin fruto. La luz es sepultada por cadenas y ruidos en impÃºdico reto de ciencia sin raÃ­ces. Por los barrios hay gentes que vacilan insomnes como reciÃ©n salidas de un naufragio de sangre. Federico GarcÃ­a Lorca.', '../views/images/portada/POETAENNEWYORK.jpg'),
	(10, 'LOS HERMANOS KARAMAZOV', 'FiÃ³dor Dostoievski', '2003-01-01', 5, 'La historia del cruel y despiadado padre FiÃ³dor KaramÃ¡zov enfrentado a sus hijos constituye una experiencia irrepetible en la literatura: desde la personalidad del espiritual Aliosha al apasionamiento de Dimitri. Obra de grandes caracteres, y sobre las grandes cuestiones humanas, una epopeya sobre el odio, y los lÃ­mites del hombre, empujado a la abyecciÃ³n o a su opuesto, acercÃ¡ndose a Dios.', '../views/images/portada/LOSHERMANOSKARAMAZOV.jpg'),
	(11, 'CRIMEN Y CASTIGO', 'FiÃ³dor Dostoievski', '2000-01-01', 5, 'Crimen y castigo (1866), considerada por la crÃ­tica como la primera obra maestra de Dostoievski, es un profundo anÃ¡lisis psicolÃ³gico de su protagonista, el joven estudiante Raskolnikov, cuya firme creencia en que los fines humanitarios justifican la maldad le conduce al asesinato de un usurero petersburguÃ©s. Pero, desde que comete el crimen, la culpabilidad serÃ¡ una pesadilla constante con la que el estudiante serÃ¡ incapaz de convivir. El estilo enfebrecido y compasivo de Dostoievski sigue con maestrÃ­a Ãºnica los recovecos de las contradictorias emociones del estudiante y refleja la lucha extrema que libra con su conciencia mientras deambula por las calles de San Petersburgo. Ya en prisiÃ³n, Raskolnikov se da cuenta de que la felicidad no puede ser alcanzada siguiendo un plan establecido a priori por la razÃ³n: ha de ganarse con sufrimiento.', '../views/images/portada/CRIMENYCASTIGO.png'),
	(12, 'LA MONTANA MAGICA', 'Thomas Mann', '2006-01-01', 15, 'La acciÃ³n de esta novela transcurre en un sanatorio de tuberculosos en Zauberberg, que recientemente ha sido noticia por su cierre definitivo, donde coinciden dos primos de caracteres muy distintos. MÃ¡s que en los sucesos (el conocimiento con Clavdia Chauchat o con una pareja de peculiares y enfrentados pensadores, los pequeÃ±os conflictos generados por la convivencia entre personajes de muy distinta procedencia, el goteo constante de fallecimientos, etc.), el interÃ©s de la novela reside en la perfecta reproducciÃ³n de la vida interior, afectiva e intelectual, de la amplia galerÃ­a de personajes que despliega Mann ante los ojos del lector, todos ellos perfectamente individualizados e interesantes por sÃ­ mismos. A partir de ahÃ­, las reflexiones sobre temas muy diversos que van desde la polÃ­tica hasta la estÃ©tica, pasando por la naturaleza del tiempo, aportan una visiÃ³n panorÃ¡mica de la Europa de la Ã©poca, con una profundidad realmente extraordinaria en la literatura de todos l', '../views/images/portada/LAMONTANAMAGICA.jpg'),
	(13, 'PEDRO PARAMO', 'Juan Ruflo', '2007-01-01', 15, 'Pedro PÃ¡ramo es una de las obras maestras de la literatura hispanoamericana. La novela cuenta cÃ³mo el protagonista, Juan Preciado, va en busca de su padre, Pedro PÃ¡ramo, hasta el pueblo mexicano de Comala, un lugar vacio, misterioso, sin vida. AllÃ­, el joven descubrirÃ¡ que toda la gente del pueblo se llama PÃ¡ramo, que muchos de ellos son sus propios hermanos, y que Pedro PÃ¡ramo estÃ¡ muerto. Estamos, pues, ante una novela misteriosa y fantÃ¡stica cuya atmÃ³sfera envuelve al lector y los transporta a un territorio mÃ¡gico de sorprendentes ramificaciones.', '../views/images/portada/PEDROPARAMO.jpg'),
	(14, 'ULISES', 'James Joyce', '2004-01-01', 5, 'Esta es la crÃ³nica de un dÃ­a en la vida de Leopold Bloom, de su mujer Molly y del joven Stephen Dedalus en la ciudad de DublÃ­n. Con la descripciÃ³n de la odisea interior de estas vidas insignificantes, el genio de James Joyce convirtiÃ³ la prosaica y vulgar epopeya del hombre de nuestro tiempo en una obra inmortal.Al descubrir una nueva dimensiÃ³n de la existencia humana, Joyce ha conmocionado con esta obra innovadora la literatura del siglo XX.', '../views/images/portada/ULISES.jpg'),
	(15, 'LAS LEGIONES MALDITAS', 'Santiago Posteguillo', '2008-01-01', 11, 'La historia de las legiones que desafiaron a AnÃ­bal. Publio Cornelio EscipiÃ³n, conocido por el apodo de Africanus, era considerado por muchos el heredero de las cualidades militares atribuidas a su padre y a su tÃ­o. Pero de ellos no sÃ³lo habÃ­a recibido estos magnÃ­ficos atributos, sino tambiÃ©n algunos enemigos, entre otros AsdrÃºbal, el hermano de AnÃ­bal, y el general pÃºnico GiscÃ³n, quienes harÃ­an lo posible por acabar con su enemigo y masacrar sus ejÃ©rcitos. Los enemigos tambiÃ©n acechaban en Roma, donde el senador Quinto Fabio MÃ¡ximo, en una jugada maestra, obliga a EscipiÃ³n a aceptar la demencial tarea de liderar las legiones V y VI que permanecÃ­an desde hacÃ­a tiempo olvidadas en Sicilia. AsÃ­, segÃºn creÃ­a el senador, lograrÃ­a deshacerse del Ãºltimo de los Escipiones. Pero otro era el destino de las legiones malditas que, de la mano de Africanus, lograrÃ­an cambiar un capÃ­tulo de la historia.', '../views/images/portada/LASLEGIONESMALDITAS.jpg'),
	(16, 'TORMENTA DE ESPADAS', 'George R.R. Martin', '2006-01-01', 10, 'Las huestes de los fugaces reyes de Poniente, descompuestas en hordas, asuelan y esquilman una tierra castigada por la guerra e indefensa ante un invierno que se anuncia inusitadamente crudo. Las alianzas nacen y se desvanecen como volutas de humo bajo el viento helado del Norte. Ajena a las intrigas palaciegas, e ignorante del autÃ©ntico peligro en ciernes, la Guardia de la Noche se ve desbordada por los salvajes. Y al otro lado del mundo, Daenerys Targaryen intenta reclutar en las Ciudades Libres un ejÃ©rcito con el que desembarcar en su tierra. Martin hace que lo imposible parezca sencillo. Tormenta de espadas confirma CanciÃ³n de hielo y fuego como un hito de la fantasÃ­a Ã©pica. Brutal y poÃ©tica, conmovedora y cruel, la magia de Martin, como la del mundo de Poniente, necesita apenas una pincelada para cautivar al lector, hacerlo reÃ­r y llorar, y conseguir que el asombro ceda paso a la mÃ¡s profunda admiraciÃ³n por la serie.', '../views/images/portada/TORMENTADEESPADAS.jpg'),
	(17, 'AFRICANUS. El hijo del consul', 'Santiago Posteguillo', '2008-01-01', 11, 'A finales del siglo III a. C., Roma se encontraba al borde de la destrucciÃ³n total, a punto de ser aniquilada por los ejÃ©rcitos cartagineses al mando de uno de los mejores estrategas militares de todos los tiempos: AnÃ­bal. Su alianza con Filipo V de Macedonia, que pretendÃ­a la aniquilaciÃ³n de Roma como Estado y el reparto del mundo conocido entre las potencias de Cartago y Macedonia, constituÃ­a una fuerza imparable que, de haber conseguido sus objetivos, habrÃ­a determinado para siempre el devenir de Occidente. Pero el azar y la fortuna intervinieron para que las cosas fueran de otro modo. Pocos aÃ±os antes del estallido del mÃ¡s cruento conflicto bÃ©lico que se hubiera vivido en Roma, naciÃ³ un niÃ±o que estaba destinado a cambiar el curso de la historia: Publio Cornelio EscipiÃ³n.', '../views/images/portada/AFRICANUS.Elhijodelconsul.jpg'),
	(18, 'LOS MISERABLES', 'Victor Hugo', '2012-01-01', 5, 'Novela, por supuesto, pero tambiÃ©n es Historia; historia de los acontecimientos que cambian la faz del mundo, historia social, historia de las mentalidades. Sin olvidar, la dimensiÃ³n poÃ©tica, el aliento Ã©pico que insufla a la mayorÃ­a de sus capÃ­tulos. Con ello, el hÃ©roe, Jean Valjean, se convierte en una especie de profeta maldito, Cristo redivivo y recrucificado en beneficio de la humanidad, cuyo destino resume.', '../views/images/portada/LOSMISERABLES.jpg'),
	(19, 'EL TEMOR DE UN HOMBRE SABIO', 'Patrick Rothffuss', '2011-01-01', 10, 'MÃºsico, mendigo, ladrÃ³n, estudiante, mago, hÃ©roe y asesino. Kvothe es un personaje legendario, el hÃ©roe o el villano de miles de historias que circulan entre la gente. Todos le dan por muerto, cuando en realidad se ha ocultado con un nombre falso en una aldea perdida. AllÃ­ simplemente es el taciturno dueÃ±o de Roca de GuÃ­a, una posada en el camino. Hasta que hace un dÃ­a un viajero llamado Cronista le reconociÃ³ y le suplicÃ³ que le revelase su historia, la autÃ©ntica, la que deshacÃ­a leyendas y rompÃ­a mitos, la que mostraba una verdad que sÃ³lo Kvothe conocÃ­a. A lo que finalmente Kvothe accediÃ³, con una condiciÃ³n: habÃ­a mucho que contar, y le llevarÃ­a tres dÃ­as.', '../views/images/portada/ELTEMORDEUNHOMBRESABIO.jpg'),
	(20, 'EL NOMBRE DEL VIENTO', 'Patrick Rothffuss', '2008-01-01', 10, 'He robado princesas a reyes agÃ³nicos. IncendiÃ© la ciudad de Trebon. He pasado la noche con Felurian y he despertado vivo y cuerdo. Me expulsaron de la Universidad a una edad a la que a la mayorÃ­a todavÃ­a no los dejan entrar. He recorrido de noche caminos de los que otros no se atreven a hablar ni siquiera de dÃ­a. He hablado con dioses, he amado a mujeres y he escrito canciones que hacen llorar a los bardos. Me llamo Kvothe. QuizÃ¡ hayas oÃ­do hablar de mÃ­.â€\r\nLa obra se desarrolla en un mundo fantÃ¡stico y narra la historia de Kvothe (pronunciado â€œcuouzâ€), arcanista, asesino, enamorado, mÃºsico, estudiante y aventurero; y de cÃ³mo se convirtiÃ³ en un personaje legendario. Usando el nombre de Kote para ocultar su verdadera identidad, regenta una apartada posada llamada Roca de GuÃ­a acompaÃ±ado de su discÃ­pulo Bast. Un dÃ­a les visita Devan Lochees, un autor conocido como â€œCronistaâ€ interesado en escribir las biografÃ­as de las figuras mÃ¡s importantes de su tiempo, quie', '../views/images/portada/ELNOMBREDELVIENTO.png'),
	(21, 'EL CONDE DE MONTECRISTO', 'Alexandre Dumas', '2009-01-01', 11, 'Un clÃ¡sico de enorme poder de sugestiÃ³n, a travÃ©s de la figura del hombre solitario que, luego de sobrevivir a la injusta condena y la miserable prisiÃ³n, regresa para hacer justicia. Retrato de Ã©poca, romÃ¡ntico, crÃ­tico y social, por un genio del siglo XIX.', '../views/images/portada/ELCONDEDEMONTECRISTO.jpg'),
	(22, 'EL PADRINO', 'Mario Puzo', '0000-00-00', 17, 'La publicaciÃ³n de El Padrino en 1969 supuso una convulsiÃ³n en el mundo literario. Por primera vez, la Mafia protagonizaba una novela y era retratada desde dentro con acierto y verosimilitud. Mario Puzo la presentaba no como una mera asociaciÃ³n de facinerosos, sino como una compleja sociedad con una cultura propia y una jerarquÃ­a aceptada incluso mÃ¡s allÃ¡ de los cÃ­rculos de delincuencia. El Padrino narra la historia de un hombre: Vito Corleone, el capo mÃ¡s respetado de Nueva York. DÃ©spota benevolente, implacable con sus rivales, inteligente, astuto y fiel a los principios del honor y la amistad, Don Corleone dirige un emporio que abarca el fraude y la extorsiÃ³n, los juegos de azar y el control de los sindicatos. La vida y negocios de Don Corleone, asÃ­ como los de su hijo y heredero Michael, conforman el eje de esta magistral obra. Con El Padrino, Mario Puzo partiÃ³ de la realidad y consiguiÃ³ crear un gÃ©nero. La Mafia pasÃ³ a ser tema central de centenares de novelas y pelÃ­', '../views/images/portada/ELPADRINO.jpg'),
	(23, 'LAS UVAS DE LA IRA', 'John Steinbeck', '2012-01-01', 16, 'Distinguida con el Premio Pulitzer en 1940, Las uvas de la ira describe el drama de la emigraciÃ³n de los componentes de la familia Joad, que, obligados por el polvo y la sequÃ­a, se ven obligados a abandonar sus tierras, junto con otros miles de personas de Oklahoma y Texas, rumbo a la Â«tierra prometidaÂ» de California. AllÃ­, sin embargo, las expectativas de este ejÃ©rcito de desposeÃ­dos no se verÃ¡n cumplidas. Entre las versiones cinematogrÃ¡ficas que ha conocido esta novela destaca la memorable protagonizada por Henry Fonda y dirigida por John Ford.', '../views/images/portada/LASUVASDELAIRA.jpg'),
	(24, 'CIEN AÃ‘OS DE SOLEDAD', 'Gabriel GarcÃ­a MÃ¡rquez', '2007-01-01', 15, 'Muchos aÃ±os despuÃ©s, frente al pelotÃ³n de fusilamiento, el coronel Aureliano BuendÃ­a habÃ­a de recordar aquella tarde remota en que su padre lo llevÃ³ a conocer el hielo.Â» Con estas palabras empieza una novela ya legendaria en los anales de la literatura universal, una de las aventuras literarias mÃ¡s fascinantes de nuestro s iglo. Millones de ejemplares de Cien aÃ±os de soledad leÃ­dos en todas las lenguas y el premio Nobel de Literatura coronando una obra que se habÃ­a abierto paso Â«boca a bocaÂ» -como gusta decir el escritor- son la mÃ¡s palpable demostraciÃ³n de que la aventura fabulosa de la familia BuendÃ­a-IguarÃ¡n, con sus milagros, fantasÃ­as, obsesiones, tragedias, incestos, adulterios, rebeldÃ­as, descubrimientos y condenas, representaba al mismo tiempo el mito y la historia, la tragedia y el amor del mundo entero.\r\nEsta ediciÃ³n de Cien aÃ±os de soledad estÃ¡ promovida por la Real Academia EspaÃ±ola y la AsociaciÃ³n de Academias de la Lengua EspaÃ±ola, y ha sido publi', '../views/images/portada/CIENANOSDESOLEDAD.jpg'),
	(25, '1984', 'George Orwell', '2010-01-01', 15, 'Inquietante interpretaciÃ³n futurista basada en la crÃ­tica a los totalitarismos y a la opresiÃ³n del poder, situada en 1984 en una sociedad inglesa dominada por un sistema de "colectivismo burocrÃ¡tico" controlada por el Gran Hermano. Londres, 1984: Winston Smith decide rebelarse ante un gobierno totalitario que controla cada uno de los movimientos de sus ciudadanos y castiga incluso a aquellos que delinquen con el pensamiento. Consciente de las terribles consecuencias que puede acarrear la disidencia, Winston se une a la ambigua Hermandad por mediaciÃ³n del lÃ­der Oâ€™Brien. Paulatinamente, sin embargo, nuestro protagonista va comprendiendo que ni la Hermandad ni Oâ€™Brien son lo que aparentan, y que la rebeliÃ³n, al cabo, quizÃ¡ sea un objetivo inalcanzable. Por su magnÃ­fico anÃ¡lisis del poder y de las relaciones y dependencias que crea en los individuos, 1984 es una de las novelas mÃ¡s inquietantes y atractivas de este siglo.', '../views/images/portada/1984.jpg'),
	(26, 'EL SEÃ‘OR DE LOS ANILLOS III. El Retorno del Rey', 'J.R.R. Tolkien', '2006-01-01', 10, 'Los ejÃ©rcitos del SeÃ±or Oscuro van extendiendo cada vez mÃ¡s su malÃ©fica sombra por la Tierra Media. Hombres, elfos y enanos unen sus fuerzas para presentar batalla a Sauron y sus huestes. Ajenos a estos preparativos, Frodo y Sam siguen adentrÃ¡ndose en el paÃ­s de Mordor en su heroico viaje para destruir el Anillo de Poder en las Grietas del Destino.', '../views/images/portada/ELSENORDELOSANILLOSIII.ElRetornodelRey.jpg'),
	(27, 'JANE EYRE', 'Charlotte Bronte', '2012-01-01', 5, 'DueÃ±a de un singular temperamento desde su complicada infancia de huÃ©rfana, primero a cargo de una tÃ­a poco cariÃ±osa y despuÃ©s en la escuela Lowood, Jane Eyre logra el puesto de institutriz en Thornfield Hall para educar a la hija de su atrabiliario y peculiar dueÃ±o, el seÃ±or Rochester. Poco a poco, el amor irÃ¡ tejiendo su red entre ellos, pero la casa y la vida de Rochester guardan un estremecedor y terrible misterio.', '../views/images/portada/JANEEYRE.jpg'),
	(28, 'CHOQUE DE REYES', 'George R.R. Martin', '2006-01-01', 10, 'Un cometa del color de la sangre hiende el cielo cargado de malos augurios. Y hay razones sobradas para pensar asÃ­: los Siete Reinos se ven sacudidos por las luchas intestinas entre los nobles por la sucesiÃ³n al Trono de Hierro. En la otra orilla del ocÃ©ano, la princesa Daenerys Targaryen conduce a su pueblo de jinetes salvajes a travÃ©s del desierto. Y en los pÃ¡ramos helados del Norte, mÃ¡s allÃ¡ del Muro, un ejÃ©rcito implacable avanza impune hacia un territorio asolado por el caos y las guerras fraticidas.', '../views/images/portada/CHOQUEDEREYES.jpg'),
	(29, 'JUEGO DE TRONOS', 'George R.R. Martin', '2006-01-01', 10, 'Tras el largo verano, el invierno se acerca a los Siete Reinos. Lord Eddard Stark, seÃ±or de Invernalia, deja sus dominios para unirse a la corte del rey Robert Baratheon el Usurpador, hombre dÃ­scolo y otrora guerrero audaz cuyas mayores aficiones son comer, beber y engendrar bastardos. Eddard Stark desempeÃ±arÃ¡ el cargo de Mano del Rey e intentarÃ¡ desentraÃ±ar una maraÃ±a de intrigas que pondrÃ¡ en peligro su vida... y la de los suyos. En un mundo cuyas estaciones duran dÃ©cadas y en el que retazos de una magia inmemorial y olvidada surgen en los rincones mÃ¡s sombrios y maravillosos, la traiciÃ³n y la lealtad, la compasiÃ³n y la sed de venganza, el amor y el poder hacen del juego de tronos una poderosa trampa que atrapa en sus fauces a los personajes... y al lector.', '../views/images/portada/JUEGODETRONOS.jpg'),
	(30, 'EL SEÃ‘OR DE LOS ANILLOS I. La Comunidad del Anillo', 'J.R.R. Tolkien', '2005-01-01', 10, 'En la adormecida e idÃ­lica Comarca, un joven hobbit recibe un encargo: custodiar el Anillo Ãšnico y emprender el viaje para su destrucciÃ³n en las Grietas del Destino. AcompaÃ±ado por magos, hombres, elfos y enanos, atravesarÃ¡ la Tierra Media y se internarÃ¡ en las sombras de Mordor, perseguido siempre por las huestes de Sauron, el SeÃ±or Oscuro, dispuesto a recuperar su creaciÃ³n para establecer el dominio definitivo del Mal.', '../views/images/portada/ELSENORDELOSANILLOSI.LaComunidaddelAnillo.jpg'),
	(31, 'ORGULLO Y PREJUICIO', 'Jane Austen', '2009-01-01', 11, 'Con la llegada del rico y apuesto Mr. Darcy a su regiÃ³n, las vidas de los Bennet y sus cinco hijas se vuelven del revÃ©s. El orgullo y la distancia social, la astucia y la hipocresÃ­a, los malentendidos y los juicios apresurados abocan a sus personajes al escÃ¡ndalo y al dolor, pero tambiÃ©n a la comprensiÃ³n, el conocimiento y el amor verdadero. Esta ediciÃ³n presenta al lector una nueva traducciÃ³n al castellano que devuelve todo su esplendor al ingenio y la finÃ­sima ironÃ­a de la prosa de Austen. SatÃ­rica, antirromÃ¡ntica, profunda y mordaz a un tiempo, la obra de Jane Austen nace de la observaciÃ³n de la vida domÃ©stica y de un profundo conocimiento de la condiciÃ³n humana.', '../views/images/portada/ORGULLOYPREJUICIO.jpg'),
	(32, 'REBELION EN LA GRANJA', 'George Orwell', '2010-01-01', 15, 'RebeliÃ³n en la granja (1945) es un cuento satÃ­rico de George Orwell acerca de un grupo de animales en una granja que expulsan a los humanos y crean un sistema de gobierno propio que acaba convirtiÃ©ndose en una tiranÃ­a brutal. la novela fue escrita durante la segunda guerra mundial y , aunque fue publicada en 1945, no comenzÃ³ a ser conocida por el pÃºblico hasta finales de los aÃ±os cincuenta. RebeliÃ³n en la granja constituye una crÃ­tica velada de la RevoluciÃ³n Rusa y una sÃ¡tira sobre la corrupciÃ³n del socialismo soviÃ©tico en los tiempos de Stalin.', '../views/images/portada/REBELIONENLAGRANJA.jpg'),
	(33, ' HARRY POTTER Y LAS RELIQUIAS DE LA MUERTE', 'J.K Rowling', '2008-01-01', 14, 'Harry tiene que realizar una tarea siniestra, peligrosa y aparentemente imposible: el de localizar y de destruir a Horcruxes. Harry nunca se sintiÃ³ tan sÃ³lo ni se enfrentÃ³ a un futuro tan incierto. Pero Harry debe encontrar la fuerza necesaria para terminar la tarea que le han dado. Ã‰l debe dejar el calor, la seguridad y el compaÃ±erismo de La Madriguera y seguir sin miedo el camino inexorable marcado para Ã©l. En este final, la sÃ©ptima entrega de la serie Harry Potter, J.K. Rowling revela de manera espectacular las respuestas a las muchas preguntas que se han estado esperando con tanta impaciencia. Su rica prosa y su narrativa, llena de giros inesperados, han hecho que estos libros sean libro para leer y releer una y otra vez.', '../views/images/portada/HARRYPOTTERYLASRELIQUIASDELAMUERTE.jpg'),
	(34, 'HAMLET', 'William Shakespeare', '2006-01-01', 5, 'Hamlet, la obra mÃ¡s conocida de Shakespeare, es en realidad una pieza llena de lagunas e indefiniciones. Una obra enigmÃ¡tica y misteriosa, en la que cada personaje es un artista de la simulaciÃ³n. El propio Hamlet es un ser en continua transformaciÃ³n. En Ã©l caben la ceremoniosidad, la cortesÃ­a y la reflexiÃ³n, junto a la pasiÃ³n, la burla, el enigma o la posibilidad de la locura. En el castillo de Elsenor, en un ambiente que emana corrupciÃ³n y desconfianza, claustrofÃ³bico y hostil, se alternan escenas solemnes y reveses irÃ³nicos, al tiempo que se agita una corte de personajes cuyo sentido Ãºltimo serÃ¡ llevar a Hamlet a vencer su tensiÃ³n interna y cumplir la venganza por la muerte de su padre.', '../views/images/portada/HAMLET.jpg'),
	(35, 'EL PRINCIPITO', 'Antoine de Saint-Exupery', '2008-01-01', 5, 'El valor de la amistad, el heroÃ­smo como meta y la responsabilidad como motor de la conducta moral encuentran su plasmaciÃ³n definitiva en el mundo que descubre El principito , aÃ±orado planeta del que todos los hombres han sido exiliados y al que sÃ³lo mediante la fabulaciÃ³n cabe regresar.', '../views/images/portada/ELPRINCIPITO.jpg'),
	(36, 'EL RESPLANDOR', 'Stephen King', '2003-01-01', 23, 'REDRUM. Esa es la palabra que Danny habÃ­a visto en el espejo. Y, aunque no sabÃ­a leer, entendiÃ³ que era un mensaje de horror. TenÃ­a cinco aÃ±os, y a esa edad pocos niÃ±os son conscientes de que los espejos invierten las imÃ¡genes, y menos aÃºn diferencian entre realidad y fantasÃ­a. Pero Danny tenÃ­a pruebas de que sus fantasÃ­as relacionadas con el resplandor del espejo acabarÃ­an cumpliÃ©ndose: REDRUM... MURDER, asesinato. Su madre estaba pensando en el divorcio, y su padre, obsesionado con algo muy malo, tan malo como la muerte y el suicidio, necesitaba aceptar la propuesta de cuidar de aquel hotel de lujo, de mÃ¡s de cien habitaciones aislado por la nieve, durante seis meses. Hasta el deshielo iban a estar solos. Â¿Solos?...', '../views/images/portada/ELRESPLANDOR.jpg');
/*!40000 ALTER TABLE `libros` ENABLE KEYS */;


-- Volcando estructura para tabla booksdrawer.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Apellido` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Usuario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Email` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Password` varchar(16) COLLATE utf8_spanish_ci DEFAULT NULL,
  `Fotoperfil` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- Volcando datos para la tabla booksdrawer.usuarios: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `Nombre`, `Apellido`, `Usuario`, `Email`, `Password`, `Fotoperfil`) VALUES
	(1, 'Adria', 'Chafes', 'Adri', 'adrichafes97@gmail.com', '123456', '../views/images/perfil/Adri.jpg'),
	(2, 'Pablo', 'Polla', 'tapasa', 'bjkbkguk@johuo.com', '654321', NULL),
	(3, 'poi', 'kop', 'lok', 'iklop@fgok.ok', 'asdfqwer', NULL),
	(4, 'Alex', 'Tarazona', 'tar', 'altar@gmail.com', 'asdfqwer', NULL),
	(5, 'Carlos', 'Teruel', 'cartegar', 'cartegar@gmail.com', 'asdfqwer', NULL),
	(6, 'Alex', 'Torres Gemelas', 'jaj', 'alex@torres.erades', '123456', NULL),
	(7, 'Casimiro', 'casinomiro', 'casimecaigo', 'casimirodereojo@eric.com', '123456789', NULL);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;