CREATE DATABASE thomasferrovia_db;
USE thomasferrovia_db;

CREATE TABLE Trem (
    id_trem INT PRIMARY KEY AUTO_INCREMENT,
    modelo VARCHAR(50),
    ano_fabricacao INT,
    status_operacional VARCHAR(20)
);

CREATE TABLE Localizacao_Trem (
    id_localizacao INT PRIMARY KEY AUTO_INCREMENT,
    id_trem INT,
    latitude DECIMAL(9,6),
    longitude DECIMAL(9,6),
    velocidade DECIMAL(5,2),
    direcao VARCHAR(10),
    data_hora DATETIME,
    FOREIGN KEY(id_trem) REFERENCES Trem(id_trem)
);

CREATE TABLE Estacao (
    id_estacao INT PRIMARY KEY AUTO_INCREMENT,
    nome_estacao VARCHAR(100),
    latitude DECIMAL(9,6),
    longitude DECIMAL(9,6)
);

CREATE TABLE Horario_Trem (
    id_horario INT PRIMARY KEY AUTO_INCREMENT,
    id_trem INT,
    id_estacao INT,
    horario_programado DATETIME,
    horario_real DATETIME,
    FOREIGN KEY(id_trem) REFERENCES Trem(id_trem),
    FOREIGN KEY(id_estacao) REFERENCES Estacao(id_estacao)
);

CREATE TABLE Alerta (
    id_alerta INT PRIMARY KEY AUTO_INCREMENT,
    id_trem INT,
    tipo_alerta VARCHAR(50),
    descricao VARCHAR(100),
    data_hora DATETIME,
    FOREIGN KEY(id_trem) REFERENCES Trem(id_trem)
);

CREATE TABLE Rota (
    id_rota INT PRIMARY KEY AUTO_INCREMENT,
    nome_rota VARCHAR(100)
);

CREATE TABLE Segmento_Rota (
    id_segmento INT PRIMARY KEY AUTO_INCREMENT,
    id_rota INT,
    id_estacao_origem INT,
    id_estacao_destino INT,
    ordem_segmento INT,
    FOREIGN KEY(id_rota) REFERENCES Rota(id_rota),
    FOREIGN KEY(id_estacao_origem) REFERENCES Estacao(id_estacao),
    FOREIGN KEY(id_estacao_destino) REFERENCES Estacao(id_estacao)
);

CREATE TABLE Evento_Rota (
    id_evento INT PRIMARY KEY AUTO_INCREMENT,
    id_rota INT,
    tipo_evento VARCHAR(50),
    descricao_evento VARCHAR(100),
    data_hora DATETIME,
    FOREIGN KEY(id_rota) REFERENCES Rota(id_rota)
);

CREATE TABLE Manutencao (
    id_manutencao INT PRIMARY KEY AUTO_INCREMENT,
    id_trem INT,
    tipo_manutencao VARCHAR(50),
    descricao VARCHAR(100),
    quilometragem INT,
    data_programada DATE,
    data_execucao DATE,
    FOREIGN KEY(id_trem) REFERENCES Trem(id_trem)
);

CREATE TABLE Ordem_Servico (
    id_ordem INT PRIMARY KEY AUTO_INCREMENT,
    id_manutencao INT,
    data_emissao DATE,
    data_conclusao DATE,
    FOREIGN KEY(id_manutencao) REFERENCES Manutencao(id_manutencao)
);

CREATE TABLE Relatorio_Mensal(
    id_relatorio INT PRIMARY KEY AUTO_INCREMENT,
    mes_ano VARCHAR(10),
    id_trem INT,
    eficiencia_energetica_kwh_km DECIMAL(5,2),
    taxa_pontualidade DECIMAL(5,2),
    causa_atrasos VARCHAR(100),
    custo_manutencao_medio DECIMAL(10,2),
    FOREIGN KEY(id_trem) REFERENCES Trem(id_trem)
);

CREATE TABLE Alerta_Sistema (
    id_alerta INT PRIMARY KEY AUTO_INCREMENT,
    descricao VARCHAR(100),
    tipo_alerta VARCHAR(50),
    data_hora DATETIME
);

CREATE TABLE Usuario (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
     nome VARCHAR(100) NOT NULL,
    email VARCHAR(200) NOT NULL UNIQUE,
    senha VARCHAR(20) NOT NULL
);

CREATE TABLE Alerta_Usuario (
    id_alerta_usuario INT PRIMARY KEY AUTO_INCREMENT,
    id_alerta INT,
    id_usuario INT,
    tipo_entrega VARCHAR(20),
    FOREIGN KEY(id_alerta) REFERENCES Alerta_Sistema(id_alerta),
    FOREIGN KEY(id_usuario) REFERENCES Usuario(id_usuario)
);

CREATE TABLE Sensor (
    id_sensor INT PRIMARY KEY AUTO_INCREMENT,
    tipo_sensor VARCHAR(50),
    local_instalacao VARCHAR(100),
    id_trem INT,
    id_estacao INT,
    FOREIGN KEY (id_trem) REFERENCES Trem(id_trem),
    FOREIGN KEY (id_estacao) REFERENCES Estacao(id_estacao)
);

CREATE TABLE Leitura_Sensor (
    id_leitura INT PRIMARY KEY AUTO_INCREMENT,
    id_sensor_fk INT,
    valor DECIMAL(10,2),
    unidade VARCHAR(10),
    data_hora DATETIME,
    FOREIGN KEY(id_sensor_fk) REFERENCES Sensor(id_sensor)
);