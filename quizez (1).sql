
DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `answerID` int NOT NULL AUTO_INCREMENT,
  `questionID` int DEFAULT NULL,
  `answerText` text,
  `IsCorrect` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`answerID`),
  KEY `answer_ibfk_1` (`questionID`)
) ENGINE=InnoDB AUTO_INCREMENT=97 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `answer`
--

INSERT INTO `answer` (`answerID`, `questionID`, `answerText`, `IsCorrect`) VALUES
(57, 22, 'Personal Home Page', 0),
(58, 22, 'Preprocessor Hypertext', 0),
(59, 22, 'Programming Hypertext Page', 0),
(60, 22, ' Hypertext Preprocessor', 1),
(65, 24, 'To create a variable', 0),
(66, 24, 'To output text or variables', 1),
(67, 24, 'To include a file', 0),
(68, 24, ' To define a function', 0),
(73, 28, 'The execution of scripts on the client s browser', 0),
(74, 28, 'The execution of scripts on the web server', 1),
(75, 28, 'The process of designing user interfaces', 0),
(76, 28, 'The creation of static web pages', 0),
(77, 29, 'o execute a SQL query', 0),
(78, 29, 'To include and evaluate the specified file', 1),
(79, 29, 'To define a constant', 0),
(80, 29, ' To redirect to another page', 0),
(81, 30, 'ph', 0),
(82, 30, 'html', 0),
(83, 30, 'php ', 1),
(84, 30, 'py', 0),
(85, 31, 'var myVar;', 0),
(86, 31, 'variable myVar;', 0),
(87, 31, '$ myVar;', 1),
(88, 31, 'declare myVar;', 0),
(89, 32, ' Variables that are available throughout the entire script', 1),
(90, 32, 'Variables that can only be accessed within a specific function', 0),
(91, 32, 'Variables that are defined within a class', 0),
(92, 32, 'Variables that are declared inside a loop', 0),
(93, 33, 'To send form data in the URL', 1),
(94, 33, 'To retrieve data from a database', 0),
(95, 33, ' To handle file uploads', 0),
(96, 33, ' To submit data securely', 0);

-- --------------------------------------------------------

--
-- Structure de la table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE IF NOT EXISTS `course` (
  `courseID` int NOT NULL AUTO_INCREMENT,
  `courseName` varchar(255) DEFAULT NULL,
  `courseDescription` text,
  PRIMARY KEY (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `course`
--

INSERT INTO `course` (`courseID`, `courseName`, `courseDescription`) VALUES
(21, 'PHP', 'PHP (Hypertext Preprocessor) is a widely-used open-source server-side scripting language that is particularly suited for web development. It is embedded within HTML code and executed on the server, generating dynamic content that is then sent to the client s web browser. PHP is known for its simplicity, flexibility, and the ability to seamlessly integrate with databases, making it a popular choice for building dynamic websites and web applications.');

-- --------------------------------------------------------

--
-- Structure de la table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `questionID` int NOT NULL AUTO_INCREMENT,
  `quizID` int DEFAULT NULL,
  `questionText` text,
  PRIMARY KEY (`questionID`),
  KEY `question_ibfk_1` (`quizID`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `question`
--

INSERT INTO `question` (`questionID`, `quizID`, `questionText`) VALUES
(22, 19, 'What does PHP stand for?'),
(24, 19, ' What is the purpose of the echo statement in PHP?'),
(28, 19, 'What does the term server-side scripting mean in the context of PHP?'),
(29, 19, 'What is the purpose of the include() function in PHP?'),
(30, 19, 'What is the default file extension for a PHP file?'),
(31, 19, 'How do you declare a variable in PHP?'),
(32, 19, 'What does the term \"superglobal\" refer to in PHP?'),
(33, 19, 'What is the purpose of the GET method in PHP forms?');

-- --------------------------------------------------------

--
-- Structure de la table `quiz`
--

DROP TABLE IF EXISTS `quiz`;
CREATE TABLE IF NOT EXISTS `quiz` (
  `quizID` int NOT NULL AUTO_INCREMENT,
  `courseID` int DEFAULT NULL,
  `isComplete` int DEFAULT NULL,
  `quizName` varchar(100) NOT NULL,
  PRIMARY KEY (`quizID`),
  KEY `quiz_ibfk_1` (`courseID`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `quiz`
--

INSERT INTO `quiz` (`quizID`, `courseID`, `isComplete`, `quizName`) VALUES
(19, 21, 0, 'Quiz cours ');

-- --------------------------------------------------------

--
-- Structure de la table `quizresult`
--

DROP TABLE IF EXISTS `quizresult`;
CREATE TABLE IF NOT EXISTS `quizresult` (
  `quizResultID` int NOT NULL AUTO_INCREMENT,
  `userID` int DEFAULT NULL,
  `quizID` int DEFAULT NULL,
  `score` int DEFAULT NULL,
  PRIMARY KEY (`quizResultID`),
  KEY `quizresult_ibfk_1` (`quizID`),
  KEY `quizresult_ibfk_2` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `quizsession`
--

DROP TABLE IF EXISTS `quizsession`;
CREATE TABLE IF NOT EXISTS `quizsession` (
  `quizsessionID` int NOT NULL AUTO_INCREMENT,
  `userID` int DEFAULT NULL,
  `quizID` int DEFAULT NULL,
  PRIMARY KEY (`quizsessionID`),
  KEY `quizsession_ibfk_1` (`quizID`),
  KEY `quizsession_ibfk_2` (`userID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `useranswer`
--

DROP TABLE IF EXISTS `useranswer`;
CREATE TABLE IF NOT EXISTS `useranswer` (
  `useranswerID` int NOT NULL AUTO_INCREMENT,
  `userID` int DEFAULT NULL,
  `questionID` int DEFAULT NULL,
  `answerID` int DEFAULT NULL,
  PRIMARY KEY (`useranswerID`),
  KEY `useranswer_ibfk_1` (`questionID`),
  KEY `useranswer_ibfk_2` (`userID`),
  KEY `useranswer_ibfk_3` (`answerID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `usercourse`
--

DROP TABLE IF EXISTS `usercourse`;
CREATE TABLE IF NOT EXISTS `usercourse` (
  `usercourseID` int NOT NULL AUTO_INCREMENT,
  `userID` int DEFAULT NULL,
  `courseID` int DEFAULT NULL,
  PRIMARY KEY (`usercourseID`),
  KEY `usercourse_ibfk_1` (`userID`),
  KEY `usercourse_ibfk_2` (`courseID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `passwordHash` varchar(255) DEFAULT NULL,
  `role` enum('admin','etudiants') NOT NULL,
  PRIMARY KEY (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`userID`, `username`, `email`, `passwordHash`, `role`) VALUES
(7, 'admin', 'rabiaaitimghi7@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'etudiants'),
(8, 'Admin', 'azert@gmail.com', '0cc175b9c0f1b6a831c399e269772661', 'admin');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`questionID`) REFERENCES `question` (`questionID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`quizID`) REFERENCES `quiz` (`quizID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `quiz`
--
ALTER TABLE `quiz`
  ADD CONSTRAINT `quiz_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `quizresult`
--
ALTER TABLE `quizresult`
  ADD CONSTRAINT `quizresult_ibfk_1` FOREIGN KEY (`quizID`) REFERENCES `quiz` (`quizID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quizresult_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `quizsession`
--
ALTER TABLE `quizsession`
  ADD CONSTRAINT `quizsession_ibfk_1` FOREIGN KEY (`quizID`) REFERENCES `quiz` (`quizID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `quizsession_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `useranswer`
--
ALTER TABLE `useranswer`
  ADD CONSTRAINT `useranswer_ibfk_1` FOREIGN KEY (`questionID`) REFERENCES `question` (`questionID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `useranswer_ibfk_2` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `useranswer_ibfk_3` FOREIGN KEY (`answerID`) REFERENCES `answer` (`answerID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `usercourse`
--
ALTER TABLE `usercourse`
  ADD CONSTRAINT `usercourse_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usercourse_ibfk_2` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;
