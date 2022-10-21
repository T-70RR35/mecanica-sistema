-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 02-Out-2022 às 05:59
-- Versão do servidor: 5.7.36
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Marca` varchar(20) NOT NULL,
  `Modelo` varchar(20) NOT NULL,
  `Cor` varchar(20) NOT NULL,
  `imagem` varchar(80) NOT NULL,
  `Codigo` text NOT NULL,
  `Fabricante` varchar(30) NOT NULL,
  `Tipo` varchar(25) NOT NULL,
  `Ano` varchar(9) NOT NULL,
  `Combustivel` varchar(30) NOT NULL,
  `Chassi` text NOT NULL,
  `km` varchar(7) NOT NULL,
  `observacao` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id`, `Marca`, `Modelo`, `Cor`, `imagem`, `Codigo`, `Fabricante`, `Tipo`, `Ano`, `Combustivel`, `Chassi`, `km`, `observacao`) VALUES
(11, 'Chevrolet', 'Celta', 'Preto', 'celta.jpeg', '022', 'Chevrolet', 'Hatch', '2005', 'Flex', '9BCCA05W18PO16375', '300.000', 'RevisÃ£o Basica.'),
(9, 'Volkswagen', 'Gol', 'Branco', 'gol.jpg', '021', 'Volkswagen Manufacturer', 'Hatch', '2008', 'Flex', '9BWCA05W18PO89867', '20.000', 'O motor estÃ¡ apresentando barulho ao ligar de manhÃ£'),
(36, 'Fiat', 'Uno', 'Azul', 'fiat-uno-2012-azul-568c6e5b77cca.png', '024', 'Fiat', 'Hatch', '2012', 'Flex', '9BFCA05W18PO59862', '78.000', 'Barulho na suspensÃ£o traseira'),
(33, 'Chevrolet', 'Onix', 'Vermelho', '70408-329936-1794872-onix-2013.jpg', '023', 'Chevrolet', 'Hatch', '2013', 'Flex', '9BWCA05W18PO57891', '92.000', 'Roda direita com barulho de rolamento'),
(35, 'Fiat', 'Punto', 'Vermelho', 'maxresdefault.jpg', '025', 'Fiat', 'Hatch', '2012', 'Gasolina', ' 9BFCA05W18PO74583', '97.887', 'Problema elÃ©trico'),
(41, 'BMW', '135i', 'Branco', '135i.jpg', '031', 'BMW', 'Coupe', '2009', 'Gasolina', '9BBCA05W18PO89867', '3.000', 'Troca de Ã³leo'),
(42, 'Chevrolet', 'Opala', 'Bordo', 'opala.jpg', '078', 'Chevrolet', 'Sedan', '1980', 'Gasolina', '9BCCA05W18PO57891', '300.000', 'Troca de Ã³leo');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
