-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Värd: localhost
-- Skapad: 12 dec 2012 kl 20:38
-- Serverversion: 5.5.25
-- PHP-version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Databas: `Vollybollen`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `list`
--

CREATE TABLE `list` (
  `id` int(64) NOT NULL AUTO_INCREMENT,
  `artist` varchar(255) NOT NULL,
  `song` varchar(255) NOT NULL,
  `status` int(64) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;
