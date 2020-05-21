-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 27 avr. 2020 à 17:42
-- Version du serveur :  10.1.34-MariaDB
-- Version de PHP :  7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `forum`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE `comment` (
  `id` int(11) NOT NULL,
  `response` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `date_add` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `comment`
--

INSERT INTO `comment` (`id`, `response`, `user_id`, `post_id`, `date_add`) VALUES
(1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam ', 1, 2, '2020-04-22 22:57:04'),
(2, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam placeat aliquid vero doloribus! Eveniet ', 3, 1, '2020-04-22 22:57:04'),
(3, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam placeat aliquid vero doloribus! Eveniet necessitatibus nam tempora, in optio assumenda quaerat veritatis! Ducimus. Quam ', 5, 4, '2020-04-22 22:57:04'),
(4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam placeat aliquid vero doloribus! Eveniet necessitatibus nam tempora, in optio assumenda quaerat veritatis! Ducimus. Quam ', 6, 5, '2020-04-22 22:57:04'),
(5, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam placeat aliquid vero doloribus! Eveniet necessitatibus nam tempora, in optio ', 1, 4, '2020-04-22 22:57:04'),
(6, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam placeat aliquid vero doloribus! Eveniet ', 5, 8, '2020-04-22 22:57:04'),
(7, 'Redemarre le serveur alors!', 1, 1, '2020-04-22 22:57:04'),
(8, 'Aucune idée', 1, 1, '2020-04-22 22:57:04'),
(9, 'Ok ok', 1, 1, '2020-04-22 22:57:04'),
(10, 'Tu feras mieux de changer le serveur', 1, 1, '2020-04-22 22:57:04'),
(11, 'Dernière chance !', 1, 1, '2020-04-22 22:57:04'),
(12, 'Yeah', 1, 1, '2020-04-22 22:57:04'),
(13, 'Va chez ton administrateur !', 4, 1, '2020-04-22 22:57:04'),
(14, 'Never', 11, 2, '2020-04-22 22:57:04'),
(16, 'You can Reload your server', 12, 8, '2020-04-22 22:57:04'),
(17, 'Consulte ton administrateur', 12, 1, '2020-04-22 23:01:55'),
(18, 'Explique clairement le code', 12, 7, '2020-04-23 11:41:30'),
(19, 'Faut savoir ce que c\'est que Apache', 11, 1, '2020-04-23 12:02:24'),
(20, 'vrai ou faux ?', 11, 1, '2020-04-23 14:23:57'),
(21, 'inspect l\'element puis recharge l\'inspect via Ctrl+r', 12, 9, '2020-04-23 14:43:55'),
(22, 'Relance ton serveur', 14, 9, '2020-04-24 12:57:55'),
(23, 'Merci bien ça passe crème', 11, 9, '2020-04-24 12:59:29');

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `title` varchar(250) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `date` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `date`, `user_id`) VALUES
(1, 'impossible de démarer Apache', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam placeat aliquid vero doloribus! Eveniet necessitatibus nam tempora, in optio assumenda quaerat veritatis! Ducimus. Quam nisi repellendus, corrupti quos voluptate enim consequatur, asperiores ipsam a voluptatum ullam! Eaque ducimus doloremque dolor, natus aspernatur ab recusandae, neque nemo suscipit voluptatibus, laborum sequi quibusdam! Nesciunt, quam. Est porro quasi mollitia consectetur exercitationem nihil cum eum, non iusto sit asperiores assumenda aliquam nesciunt. Repellendus laboriosam natus, dicta architecto, perferendis aperiam, iure molestias totam quos aspernatur eius nostrum! Merci pour vos reponses', '2020-04-17 13:47:44', 2),
(3, 'Je ne comprend pas ce code : ...', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam placeat aliquid vero doloribus! Eveniet necessitatibus nam tempora, in optio assumenda quaerat veritatis! Ducimus. Quam nisi repellendus, corrupti quos voluptate enim consequatur, asperiores ipsam a voluptatum ullam! Eaque ducimus doloremque dolor, natus aspernatur ab recusandae, neque nemo suscipit voluptatibus, laborum sequi quibusdam! Nesciunt, quam. Est porro quasi mollitia consectetur exercitationem nihil cum eum, non iusto sit asperiores assumenda aliquam nesciunt. Repellendus laboriosam natus, dicta architecto, perferendis aperiam, iure molestias totam quos aspernatur eius nostrum! Merci pour vos reponses', '2020-04-17 13:51:14', 1),
(4, 'Css not working', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam placeat aliquid vero doloribus! Eveniet necessitatibus nam tempora, in optio assumenda quaerat veritatis! Ducimus. Quam nisi repellendus, corrupti quos voluptate enim consequatur, asperiores ipsam a voluptatum ullam! Eaque ducimus doloremque dolor, natus aspernatur ab recusandae, neque nemo suscipit voluptatibus, laborum sequi quibusdam! Nesciunt, quam. Est porro quasi mollitia consectetur exercitationem nihil cum eum, non iusto sit asperiores assumenda aliquam nesciunt. Repellendus laboriosam natus, dicta architecto, perferendis aperiam, iure molestias totam quos aspernatur eius nostrum! Merci pour vos reponses', '2020-04-17 13:51:14', 3),
(5, 'How to fix it ?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam placeat aliquid vero doloribus! Eveniet necessitatibus nam tempora, in optio assumenda quaerat veritatis! Ducimus. Quam nisi repellendus, corrupti quos voluptate enim consequatur, asperiores ipsam a voluptatum ullam! Eaque ducimus doloremque dolor, natus aspernatur ab recusandae, neque nemo suscipit voluptatibus, laborum sequi quibusdam! Nesciunt, quam. Est porro quasi mollitia consectetur exercitationem nihil cum eum, non iusto sit asperiores assumenda aliquam nesciunt. Repellendus laboriosam natus, dicta architecto, perferendis aperiam, iure molestias totam quos aspernatur eius nostrum! Merci pour vos reponses', '2020-04-17 13:52:30', 5),
(6, 'display grid not working', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam placeat aliquid vero doloribus! Eveniet necessitatibus nam tempora, in optio assumenda quaerat veritatis! Ducimus. Quam nisi repellendus, corrupti quos voluptate enim consequatur, asperiores ipsam a voluptatum ullam! Eaque ducimus doloremque dolor, natus aspernatur ab recusandae, neque nemo suscipit voluptatibus, laborum sequi quibusdam! Nesciunt, quam. Est porro quasi mollitia consectetur exercitationem nihil cum eum, non iusto sit asperiores assumenda aliquam nesciunt. Repellendus laboriosam natus, dicta architecto, perferendis aperiam, iure molestias totam quos aspernatur eius nostrum! Merci pour vos reponses', '2020-04-17 13:52:30', 3),
(7, 'Besoin d\'aide sur ce code ', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam placeat aliquid vero doloribus! Eveniet necessitatibus nam tempora, in optio assumenda quaerat veritatis! Ducimus. Quam nisi repellendus, corrupti quos voluptate enim consequatur, asperiores ipsam a voluptatum ullam! Eaque ducimus doloremque dolor, natus aspernatur ab recusandae, neque nemo suscipit voluptatibus, laborum sequi quibusdam! Nesciunt, quam. Est porro quasi mollitia consectetur exercitationem nihil cum eum, non iusto sit asperiores assumenda aliquam nesciunt. Repellendus laboriosam natus, dicta architecto, perferendis aperiam, iure molestias totam quos aspernatur eius nostrum! Merci pour vos reponses', '2020-04-17 13:53:56', 6),
(8, 'Error 500 Server Down', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam perferendis fuga distinctio quam ut delectus totam placeat aliquid vero doloribus! Eveniet necessitatibus nam tempora, in optio assumenda quaerat veritatis! Ducimus. Quam nisi repellendus, corrupti quos voluptate enim consequatur, asperiores ipsam a voluptatum ullam! Eaque ducimus doloremque dolor, natus aspernatur ab recusandae, neque nemo suscipit voluptatibus, laborum sequi quibusdam! Nesciunt, quam. Est porro quasi mollitia consectetur exercitationem nihil cum eum, non iusto sit asperiores assumenda aliquam nesciunt. Repellendus laboriosam natus, dicta architecto, perferendis aperiam, iure molestias totam quos aspernatur eius nostrum! Merci pour vos reponses', '2020-04-17 13:53:56', 4),
(9, 'Pourquoi le css ne charge pas ?', 'quand je recharge la page, le css ne charge pas. Quelqu\'un pourrait m\'aider ?', '2020-04-23 14:40:13', 11);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(250) CHARACTER SET utf8 NOT NULL,
  `email` varchar(250) CHARACTER SET utf8 NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `email`, `password`, `avatar`) VALUES
(1, 'Black Ghost', 'blackghost@gmail.com', 'ghost', ''),
(2, 'Geek Coder', 'geek@yahoo.com', 'geek', ''),
(3, 'XCodeur', 'codeur@gmail.com', 'codeur', ''),
(4, 'Andre Khalifa', 'andre@gmail.com', '1234', ''),
(5, 'Marcus Gavey', 'marcus@gmail.com', 'marcus', ''),
(6, 'Linux torval', 'linux@gmail.com', 'linux', ''),
(7, 'ander', 'ander@gmail.com', '123', ''),
(8, 'fanoupute', 'fanoupute@gmail.com', '123', ''),
(11, 'orus', 'orus@gmail.com', 'orus', '10fdf8dcc42d8d405c4589202eecffb7.jpg'),
(12, 'Hyvi', 'yveskouadio111@yahoo.fr', 'yves', 'DSC_7996-min (1).JPG'),
(13, 'flora', 'flora@gmail.com', 'flora', 'abstract-wallpaper-preview.jpg'),
(14, 'test', 'test@gmail.com', 'test', '61658352_2290651257638022_4749072199460840216_n.jpg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
