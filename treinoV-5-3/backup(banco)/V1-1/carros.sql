-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 20-Set-2022 às 01:10
-- Versão do servidor: 8.0.27
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `concessionaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carros`
--

DROP TABLE IF EXISTS `carros`;
CREATE TABLE IF NOT EXISTS `carros` (
  `id` int NOT NULL AUTO_INCREMENT,
  `Marca` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Modelo` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Cor` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `imagem` varchar(80) NOT NULL,
  `Codigo` int NOT NULL,
  `Fabricante` varchar(30) NOT NULL,
  `Tipo` varchar(25) NOT NULL,
  `Ano` int NOT NULL,
  `Combustivel` varchar(30) NOT NULL,
  `Chassi` int NOT NULL,
  `km` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id`, `Marca`, `Modelo`, `Cor`, `imagem`, `Codigo`, `Fabricante`, `Tipo`, `Ano`, `Combustivel`, `Chassi`, `km`) VALUES
(1, 'Volkswagen', 'Fusca', 'Azul', 'fusca.jpg', 0, '', '', 0, '', 0, 0),
(2, 'Chevrolet', 'Camaro', 'Branco', 'camaro.jpg', 0, '', '', 0, '', 0, 0),
(3, 'Honda', 'Civic', 'Preto', 'civic.jpg', 0, '', '', 0, '', 0, 0),
(4, 'Ford', 'Focus', 'Azul', 'focus.jpeg', 0, '', '', 0, '', 0, 0),
(5, 'Volvo', 'S60', 'Cinza', 's60.jpg', 1, '', 'carro legal', 2030, 'nitrogenio', 216513216, 100000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
