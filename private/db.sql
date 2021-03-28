-- Estructura de tabla para la tabla bancos_api
--
CREATE TABLE IF NOT EXISTS bancos_api (
  id_privado varchar(64) NOT NULL,
  id serial,
  nombre varchar(100) NOT NULL,
  estado integer NOT NULL,
  codigo varchar(4) NOT NULL,
  privado integer NOT NULL,
  web varchar(64) NOT NULL,
  telefono varchar(20) NOT NULL,
  email varchar(40) NOT NULL,
  PRIMARY KEY (id_privado)
);

--
-- Volcado de datos para la tabla bancos_api
--
-- Estoy usando sintaxis de postgreSQL que vaina mas ladilla...
INSERT INTO bancos_api (id_privado, nombre, estado, codigo, privado, web, telefono, email) VALUES
('ttt1', 'Banco Central de Venezuela', 1, '0001', 0, 'http://www.bcv.org.ve/', '(+58-212) 8015111',''),
('ttt2', 'Banco Industrial de Venezuela, C.A', 1, '0003', 1, '(+58-212)4710102', ''),
('ttt3', 'Banco de Venezuela S.A.C.A. Banco Universal', 1, '0102', 0, 'http://www.bancodevenezuela.com/', '(+58-412)2766581', 'servicios_alcliente@banvenez.com'),
('ttt4', 'Venezolano de CrÃ©dito, S.A. Banco Universal', 1, '0104', 1, 'http://www.venezolano.com/', '(+58-212)8066111', 'defensoriadelcliente@venezolano.com'),
('ttt5', 'Banco Mercantil, C.A S.A.C.A. Banco Universal', 1, '0105', 1, 'https://www.mercantilbanco.com/mercprod/index.html', '(+58-212)6002424', 'mercan24@bancomercantil.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
