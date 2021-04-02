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
('ttt2', 'Banco Industrial de Venezuela, C.A', 1, '0003', 1, '','(+58-212) 4710102',''),
('ttt3', 'Banco de Venezuela S.A.C.A. Banco Universal', 1, '0102', 0, 'http://www.bancodevenezuela.com/', '(+58-412)2766581', 'servicios_alcliente@banvenez.com'),
('ttt4', 'Venezolano de CrÃ©dito, S.A. Banco Universal', 1, '0104', 1, 'http://www.venezolano.com/', '(+58-212)8066111', 'defensoriadelcliente@venezolano.com'),
('ttt5', 'Banco Mercantil, C.A S.A.C.A. Banco Universal', 1, '0105', 1, 'https://www.mercantilbanco.com/mercprod/index.html', '(+58-212)6002424', 'mercan24@bancomercantil.com'),
('ttt6','100% Banco',1,'0156',1,'http://www.100x100banco.com/site/home1.html','(+58-212)2775444','atencionalcliente@100x100banco.com'),
('ttt7','Bancamiga Banco Microfinanciero, C.A',1,'0172',1,'https://www.bancamiga.com/','(+58-212) 9586111','atencion.alcliente@bancamiga.com'),
('ttt8','Banco Activo Banco Comercial, C.A.',1,'0171',1,'http://www.bancoactivo.com/','(+58-212) 9587353','defensordelclienteactivo@bancoactivo.com'),
('ttt9','Banco agricola',1,'0166',0,'http://www.bav.com.ve/','(+58-212) 2088672','gerencia.recuperaciones@bav.com.ve'),
('ttt10','Banco Bicentenario del pueblo',1,'0175',0,'http://www.bicentenariobu.com/','(+58-212) 9544977','reclamo.cliente@bicentenariobu.com'),
('ttt11','Banco Caroní C.A. Banco Universal',1,'0128',1,'https://www.bancocaroni.com.ve/','(+58-286) 7138445','atencion.alusuario@bancocaroni.com.ve'),
('ttt12','Bancaribe C.A Banco',1,'0114',1,'https://www.bancaribe.com.ve/','(+58-500) 2262274',''),
('ttt13','Banco del Tesoro, Banco Universal',1,'0163',0,'http://www.bt.gob.ve/','(+58-212) 2662257','atencionc@bt.gob.ve'),
('ttt14','Banco Exterior',1,'0115',1,'http://www.bancoexterior.com/','(+58-212) 5085000',''),
('ttt15','Banco Nacional de Crédito Banco Universal',1,'0191',1,'http://www.bnc.com.ve/','(+58-212) 5975000','servicliente@bnc.com.ve'),
('ttt16','Banco Occidental de Descuento Banco Universal',1,'0116',1,'https://www.bod.com.ve/','(+58-501) 9200000',' defensorcliente@bod.com.ve');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
