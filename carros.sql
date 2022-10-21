-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 06-Out-2022 às 01:38
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
  `Marca` varchar(20) NOT NULL,
  `Modelo` varchar(20) NOT NULL,
  `Cor` varchar(20) NOT NULL,
  `imagem` varchar(80) NOT NULL,
  `Codigo` int NOT NULL,
  `Fabricante` varchar(30) NOT NULL,
  `Tipo` varchar(25) NOT NULL,
  `Ano` varchar(9) NOT NULL,
  `Combustivel` varchar(30) NOT NULL,
  `Chassi` text NOT NULL,
  `km` varchar(7) NOT NULL,
  `observacao` text NOT NULL,
  `entrada` text NOT NULL,
  `nome` text NOT NULL,
  `cpf` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb3;

--
-- Extraindo dados da tabela `carros`
--

INSERT INTO `carros` (`id`, `Marca`, `Modelo`, `Cor`, `imagem`, `Codigo`, `Fabricante`, `Tipo`, `Ano`, `Combustivel`, `Chassi`, `km`, `observacao`, `entrada`, `nome`, `cpf`) VALUES
(11, 'Chevrolet', 'Celta', 'Preto', 'celta.jpeg', 22, 'Chevrolet', 'Hatch', '2005', 'Flex', '9BCCA05W18PO16375', '300.000', 'RevisÃ£o Basica.', '', '', ''),
(9, 'Volkswagen', 'Gol', 'Branco', 'gol.jpg', 21, 'Volkswagen Manufacturer', 'Hatch', '2008', 'Flex', '9BWCA05W18PO89867', '20.000', 'O motor estÃ¡ apresentando barulho ao ligar de manhÃ£', '', '', ''),
(36, 'Fiat', 'Uno', 'Azul', 'fiat-uno-2012-azul-568c6e5b77cca.png', 24, 'Fiat', 'Hatch', '2012', 'Flex', '9BFCA05W18PO59862', '78.000', 'Barulho na suspensÃ£o traseira', '', '', ''),
(33, 'Chevrolet', 'Onix', 'Vermelho', '70408-329936-1794872-onix-2013.jpg', 23, 'Chevrolet', 'Hatch', '2013', 'Flex', '9BWCA05W18PO57891', '92.000', 'Roda direita com barulho de rolamento', '', '', ''),
(35, 'Fiat', 'Punto', 'Vermelho', 'maxresdefault.jpg', 25, 'Fiat', 'Hatch', '2012', 'Gasolina', ' 9BFCA05W18PO74583', '97.887', 'Problema elÃ©trico', '', '', ''),
(41, 'BMW', '135i', 'Branco', '135i.jpg', 31, 'BMW', 'Coupe', '2009', 'Gasolina', '9BBCA05W18PO89867', '3.000', 'Troca de Ã³leo', '', '', ''),
(42, 'Chevrolet', 'Opala', 'Bordo', 'opala.jpg', 78, 'Chevrolet', 'Sedan', '1980', 'Gasolina', '9BCCA05W18PO57891', '300.000', 'Troca de Ã³leo', '', '', ''),
(49, 'Fiat', 'Uno', 'Prata', 'fiat-uno-mille-2009-cinza-196375-1.jpg', 2312345, 'Fiat', 'Hatch', '2009', 'Flex', '9BFCA05W18P078945', '1000000', 'Outra revisao', '2022-10-05T22:06', 'JoaoPedro', '12345678910');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
