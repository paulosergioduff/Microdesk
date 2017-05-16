-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 01/02/2014 às 22h19min
-- Versão do Servidor: 5.5.35
-- Versão do PHP: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Banco de Dados: `banco`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `usuario_id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(28) NOT NULL,
  `senha` varchar(80) NOT NULL,
  `nome` varchar(60) NOT NULL,
  PRIMARY KEY (`usuario_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`usuario_id`, `login`, `senha`, `nome`) VALUES
(1, 'admin', 'admin', 'Administrador'),
(2, 'usuario123', 'usuario123!@#', 'Paulo Sérgio Duff'),
;

