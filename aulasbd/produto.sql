-- --------------------------------------------------------
-- Servidor:                     127.0.0.1
-- Versão do servidor:           10.4.18-MariaDB - mariadb.org binary distribution
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Copiando estrutura do banco de dados para base
DROP DATABASE IF EXISTS `base`;
CREATE DATABASE IF NOT EXISTS `base` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `base`;

-- Copiando estrutura para tabela base.cliente
DROP TABLE IF EXISTS `cliente`;
CREATE TABLE IF NOT EXISTS `cliente` (
  `id_cli` int(11) NOT NULL AUTO_INCREMENT,
  `nome_cli` varchar(30) DEFAULT NULL,
  `cpf_cli` varchar(11) NOT NULL,
  `rg_cli` varchar(9) NOT NULL,
  `dt_nascimento_cli` date DEFAULT NULL,
  `sexo_cli` char(1) DEFAULT NULL,
  `escolaridade_cli` varchar(30) DEFAULT NULL,
  `nome_pai_cli` varchar(30) DEFAULT NULL,
  `nome_mae_cli` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id_cli`)
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela base.cliente: ~18 rows (aproximadamente)
/*!40000 ALTER TABLE `cliente` DISABLE KEYS */;
REPLACE INTO `cliente` (`id_cli`, `nome_cli`, `cpf_cli`, `rg_cli`, `dt_nascimento_cli`, `sexo_cli`, `escolaridade_cli`, `nome_pai_cli`, `nome_mae_cli`) VALUES
	(3, 'bia', '44444', '666666', '2017-02-02', 'F', 'fundamental', 'bhhh', 'fff'),
	(6, 'bia', '8888888', '55555', '2017-06-02', 'F', 'Médio', '777777', '666666'),
	(7, 'bia', '8888888', '55555', '2017-06-02', 'F', 'Médio', '777777', '666666'),
	(8, '', '', '', '0000-00-00', '', '1', '', ''),
	(9, 'lethicia', '111111111', '111111111', '0000-00-00', 'F', '2', 'pai', 'mae'),
	(10, 'let', '11111111111', '111111111', '0000-00-00', 'F', '3', 'pai', 'mae'),
	(11, 'let', '11111111111', '111111111', '0000-00-00', 'F', '3', 'pai', 'mae'),
	(12, 'let', '4444', '5555', '0000-00-00', 'F', 'medio', 'hhh', 'ggg'),
	(13, 'bia ', '5555', '99999', '0000-00-00', 'F', 'fundamental', 'hhhh', 'swss'),
	(14, 'bai', '444444', '00000000', '0000-00-00', 'F', 'fundamental', 'hhhh', 'jjjjj'),
	(15, 'let', '222333', '444444', '2022-01-07', 'F', 'medio', 'fffffff', 'hb'),
	(16, 'jjj', '66', '555', '2022-01-13', 'F', 'superior', 'gggggggg', 'hhhhhh'),
	(17, 'hhh', '4444', '5555', '2022-02-10', 'F', 'fundamental', 'fdd', 'gf'),
	(18, 'gggg', '7777', '5555', '2022-02-17', 'F', 'medio', 'gggg', 'hhhh'),
	(19, 'ccccc', '5555', '6666', '2022-02-17', 'F', 'mestrado', 'gggg', 'hhhh'),
	(20, 'ccccc', '5555', '6666', '2022-02-17', 'F', 'mestrado', 'gggg', 'hhhh'),
	(21, 'ccccc', '5555', '6666', '2022-02-17', 'F', 'mestrado', 'gggg', 'hhhh'),
	(22, 'ccccc', '5555', '6666', '2022-02-17', 'F', 'mestrado', 'gggg', 'hhhh');
/*!40000 ALTER TABLE `cliente` ENABLE KEYS */;

-- Copiando estrutura para tabela base.produto
DROP TABLE IF EXISTS `produto`;
CREATE TABLE IF NOT EXISTS `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome_produto` varchar(20) DEFAULT NULL,
  `qtde_produto` int(11) DEFAULT NULL,
  `valor_produto` float DEFAULT NULL,
  PRIMARY KEY (`id_produto`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4;

-- Copiando dados para a tabela base.produto: ~9 rows (aproximadamente)
/*!40000 ALTER TABLE `produto` DISABLE KEYS */;
REPLACE INTO `produto` (`id_produto`, `nome_produto`, `qtde_produto`, `valor_produto`) VALUES
	(1, 'SHORT', 70, 70),
	(2, 'CALÇA', 50, 100),
	(3, 'BLUSÃO', 90, 90),
	(4, 'CAMISA', 40, 10),
	(5, 'SAIA', 30, 20),
	(9, 'Short Saia', 70, 60),
	(10, 'colar', 45, 9),
	(11, 'anel', 60, 70),
	(12, 'pulseira', 60, 70);
/*!40000 ALTER TABLE `produto` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
