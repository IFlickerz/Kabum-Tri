CREATE  DATABASE IF NOT EXISTS KabumTega;

USE KabumTega;


CREATE TABLE IF NOT EXISTS Cliente (
Id_cliente BIGINT AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
Email VARCHAR(100) NOT NULL,
CPF VARCHAR(15),
Senha VARCHAR(100) NOT NULL,
Nome VARCHAR(100),
RG VARCHAR(15),
Idade INT,
DataDeNascimento VARCHAR (20),
Foto VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS Endereco (
Id_endereco BIGINT AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
Estado VARCHAR(2) NOT NULL,
Endereco  VARCHAR(100),
Cidade VARCHAR(50) NOT NULL,
CEP BIGINT,
Id_cliente BIGINT NOT NULL,
FOREIGN KEY(Id_cliente) REFERENCES Cliente(Id_cliente)
ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS Produto (
Id_produto BIGINT AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
Titulo VARCHAR(255) NOT NULL,
Imagem VARCHAR(255) NOT NULL,
Quantidade INT,
Descricao VARCHAR(255) NOT NULL,
Categoria VARCHAR(255) NOT NULL,
Preco DECIMAL(10,2) NOT NULL
);


CREATE TABLE IF NOT EXISTS Suporte (
Id_suporte BIGINT AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
Nome VARCHAR(2),
Idade INT,
Data_de_Entrada DATE,
CPF VARCHAR(15),
RG VARCHAR(15),
Salário DECIMAL(10,2)
);

CREATE TABLE IF NOT EXISTS Interage (
Id_interage BIGINT AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
Id_cliente BIGINT,
Id_suporte BIGINT,
FOREIGN KEY(Id_cliente) REFERENCES Cliente (Id_cliente),
FOREIGN KEY(Id_suporte) REFERENCES Suporte (Id_suporte)
);

CREATE TABLE IF NOT EXISTS Compra (
Id_compra BIGINT AUTO_INCREMENT UNIQUE NOT NULL PRIMARY KEY,
Id_cliente BIGINT,
Id_produto BIGINT,
DATA_da_Compra DATE,
FOREIGN KEY(Id_cliente) REFERENCES Cliente (Id_cliente),
FOREIGN KEY(Id_produto) REFERENCES Produto (Id_produto)
);

INSERT INTO Produto
VALUES (null,'NVIDIA GTX 1080 TI','1080ti.jpg', 12, 'A mais poderosa placa de vídeo da série GTX 1000 da NVIDIA.', 'Placadevideo', '2299.90'),
(null, 'NVIDIA RTX 2080 TI','2080ti.png', 5, 'Essa é a placa de vídeo mais avançada já feita, possuí um poder de processamento de outro planeta! Além, é claro, da tecnologia RAY TRACING.', 'Placadevideo', '5899.90'),
(null, 'Gigabyte Z390 Aorus', 'z390.jpg', 7, 'Placa mãe Gigabyte Z390 Aorus, se você está procurando uma placa mãe, provavelmente é essa.', 'Placamae', '1690.90'),
(null, 'Gigabyte X399 Aorus Gaming','x399.jpg', 6, 'Placa mãe Gigabyte X399 Aorus Gaming, uma grande placa mãe para grandes processadores, e é claro que são os Threadrippers.', 'Placamae', '2310.50'),
(null, 'Intel I9 9900K Skylake', 'I9K.jpg', 9, 'Experimente o que é poder de processamento com a nova linha de processadores I9 da 9ª geração. Diga adeus aos gargalos!', 'Processador', '2860.90'),
(null, 'AMD Ryzen Threadripper 2950X', 8, 'threadripper.jpg', 'Criado para o trabalho mais pesado possível, pode ter certeza que ele aguenta qualquer coisa.', 'Processador', '3399.90'),
(null, 'NZXT H500I', 'H500I.jpg', 3, 'Gabinete mid-tower compacto apropriado para ambientes minimalistas, uma beleza de nível de um deus Grego.','Gabinete','739.90'),
(null, 'Cooler Master COSMOS', 'cosmos.jpg', 1, 'Gabinete full-tower desnecessáriamente grande, porém você irá achar incrívelmente bonito e com certeza terá vontade de comprar.', 'Gabinete', '3160.79'),
(null, 'Corsair H150I', 'h150i.jpg', 5, 'Watercooler que deixará o resfriamento à nitrogênio líquido no chinelo! Pode levar para casa que não irá se arrepender.', 'Cooler', '1390.45'),
(null, 'Cooler Master V8', 'V8.jpg', 0, 'Cooler à ar mais potente do planeta terra, bom, o nome já diz tudo, potência de esfriar um motor V8', 'Cooler', '940.90'),
(null, 'Fita LED 6803', 'LED6803.jpg', 2, 'LED RGB de 5M com controlador e fonte. Cada LED é controlado separadamente', 'Led', '68.90'),
(null, 'Fita LED 5050 - Branco', 'LED5050.jpg', 5, 'LED branca de 5M com controlador e fonte. Os LEDs são manipulados conjuntamente', 'Led', '39.90'),
(null, 'Apple iPhone 11', 'iphone11.png', 18, 'O mais novo smarthphone da Apple guiado pelo sistema operacional iOS 13 com um hardware extremamente forte.', 'Smartphones', '5299.90'),
(null, 'Samsung M30', 'M30.jpg', 17, 'O smartphone com melhor custo benefício do mercado, possuindo uma das mais duráveis baterias e uma tela OLED. É incrível!', 'Smartphones', '1359.90'),
(null, 'Monitor Alienware AW2518HF', 'alienware.jpg', 2, 'O monitor com maior taxa de atualização no mercado, chegando em até 240hz. Agora você verá até as balas!', 'Periferico', '2499.90'),
(null, 'Teclado GFallen Falcão-Peregrino', 'Falcao.jpg', 14, 'O melhor teclado finalmente chegou na Kabum Tega, experimente já a maciez e precisão dos Red Switches mais avançados do planeta!', 'Periferico', '443.33'),
(null, 'HyperX Revolver S', 'HyperX-Cloud-Revolver-S-0.jpg', 15, 'Um dos melhores Headsets já produzidos pela humanidade está a venda na Kabum Tega por um preço mais do que acessível! O que está esperando?', 'Periferico', '590.90'),
(null, 'Razer Mousepad Firefly', 'Firefly.jpg', 0, 'Mosepad Razer com RGB, sinceramente, não faço a mínima ideia de por quê isso existe...', 'Periferico', '419.90');