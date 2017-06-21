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

INSERT INTO `cps`. `producto` (`nombre`, `precio`, `marca`, `color`, `display`, `procesador`, `camaraPrincipal`, `camaraSecundaria`, `sistemaOp`, `red`, `frecuencia`, `bateria`, `tiempo`, `memoriaI`, `peso`, `dimension`, `pantalla`, `bluetooth`, `marcaporVoz`, `id_categoria`)
VALUES ('Iphone 7 plus 128GB\r\n', '$30.999', 'Apple', 'Blanco', '4.7\' HD LED IPS', 'A10-Chip A10 Fusión con arquitectura de 64 bits\r\n', '12 mpx | Zoom digital 5x\r\n', '7 mpx', 'IOS 10', 'GSM, 3G, 4G LTE', 'GSM 850/900/1800/1900 MHz | WCDMA 850/900/1700-2100/1900/2100 MHz\r\n', '10 Dias', '14 HS', '128 GB', '138 g', '138,3 x 67,1 x 7,1 mm', 'Touchscreem', '1', '1', '1'),
('LG G5+Camara 360° y VR\r\n', '$13.499', 'LG', 'Plateado', '5.3\'\' IPS', 'Quad Core 2.0 GHz + Quad Core 1.6 GHz\r\n', '16 mpx con flash LED | Zoom digital 4x\r\n', '8 mpx', 'Android 6.0', 'GSM, 3G, 4G LTE', 'GSM 850/900/1800/1900 MHz | WCDMA 850/900/1700/1900/2100 MHz\r\n', '8 días', '12 h', '32 GB ', '159 g', '149,4 x 73,9 x 7,3 mm', 'Touchscreem', '1', '1', '40'),
('Huawei Y550\r\n', '$2.099', 'Huawei', 'Negro', '4.5\'\' IPS', 'Quad Core 1.2 GHz\r\n', '5 mpx con flash LED | Zoom digital | Autofocus\r\n', '2 mpx', 'Android 4.4.2', 'GSM, 3G, 4G LTE', 'GSM 850/900/1800/1900 MHz | WCDMA 850/1900 MHz\r\n', '570 h', '9 h', '4 GB', '153 g', '133 x 68 x 9,5 mm', '153 g', '1', '0', '38');

INSERT INTO `categoria` (`id_categoria`, `nombre`) VALUES
('1', 'Apple'),
('40','LG'),
('38','Huawei');
