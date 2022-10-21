-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 26-Abr-2022 às 23:45
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
  `marca` varchar(20) NOT NULL,
  `modelo` varchar(20) NOT NULL,
  `cor` varchar(20) NOT NULL,
  `combustivel` varchar(20) NOT NULL,
  `proprietario` varchar(30) NOT NULL,
  `valor` decimal(15,2) NOT NULL,
  `imagem` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id`, `marca`, `modelo`, `cor`, `combustivel`, `proprietario`, `valor`, `imagem`) VALUES
(1, 'Volkswagen', 'Fusca', 'Azul', 'Gasolina', 'Mario Mario', '5000.00', 'fusca.jpg'),
(2, 'Chevrolet', 'Camaro', 'Branco', 'Gasolina', 'Luigi Mario', '100000.00', 'camaro.jpg'),
(3, 'Honda', 'Civic', 'Preto', 'Gasolina', 'Carlos Jhonson', '80000.00', 'civic.jpg'),
(4, 'Ford', 'Focus', 'Azul', 'Gasolina', 'Kleiton Guerra', '50000.00', 'focus.jpeg'),
(5, 'Volvo', 'S60', 'Cinza', 'Gasolina', 'Zelda Link', '300000.00', 's60.jpg');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
