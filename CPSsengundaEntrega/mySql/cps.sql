CREATE TABLE `cps`.`usuario` (
  `id_usuario` int(11) NOT NULL,
  `password` varchar(62) COLLATE utf8_bin NOT NULL,
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

ALTER TABLE `cps`.`usuario`
  ADD PRIMARY KEY (`id_usuario`);

ALTER TABLE `cps`.`usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

ALTER TABLE `usuario` ADD UNIQUE(`email`);

CREATE TABLE `cps`.`categoria`
( `id_categoria` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(15) NOT NULL ,
  PRIMARY KEY (`id_categoria`)) ENGINE = InnoDB;

ALTER TABLE `cps`.`categoria`
  ADD UNIQUE KEY `nombre` (`nombre`);

  CREATE TABLE `cps`.`producto` (
    `id_producto` int(11) NOT NULL,
    `nombre` varchar(70) COLLATE utf8_bin NOT NULL,
    `precio` varchar(7) COLLATE utf8_bin NOT NULL,
    `marca` varchar(20) COLLATE utf8_bin NOT NULL,
    `color` varchar(20) COLLATE utf8_bin NOT NULL,
    `display` varchar(50) COLLATE utf8_bin NOT NULL,
    `procesador` varchar(100) COLLATE utf8_bin NOT NULL,
    `camaraPrincipal` varchar(100) COLLATE utf8_bin NOT NULL,
    `camaraSecundaria` varchar(15) COLLATE utf8_bin NOT NULL,
    `sistemaOp` varchar(15) COLLATE utf8_bin NOT NULL,
    `red` varchar(20) COLLATE utf8_bin NOT NULL,
    `frecuencia` varchar(150) COLLATE utf8_bin NOT NULL,
    `bateria` varchar(50) COLLATE utf8_bin NOT NULL,
    `tiempo` varchar(10) COLLATE utf8_bin NOT NULL,
    `memoriaI` varchar(10) COLLATE utf8_bin NOT NULL,
    `peso` varchar(10) COLLATE utf8_bin NOT NULL,
    `dimension` varchar(50) COLLATE utf8_bin NOT NULL,
    `pantalla` varchar(40) COLLATE utf8_bin NOT NULL,
    `bluetooth` tinyint(1) NOT NULL,
    `marcaporVoz` tinyint(1) NOT NULL,
    `id_categoria` INT NOT NULL
  )ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;


  ALTER TABLE `cps`.`producto` ADD
  CONSTRAINT fk_categoria
  FOREIGN KEY (id_categoria) REFERENCES cps.categoria(id_categoria);
