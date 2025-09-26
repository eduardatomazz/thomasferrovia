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

CREATE TABLE Usuario_adm (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    usuario VARCHAR(200) NOT NULL UNIQUE,
    email VARCHAR(200) NOT NULL UNIQUE,
    idade INT NOT NULL,
    senha VARCHAR(20) NOT NULL
);

CREATE TABLE Usuario_func (
    id_usuario INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(100) NOT NULL,
    usuario VARCHAR(200) NOT NULL UNIQUE,
    email VARCHAR(200) NOT NULL UNIQUE,
    idade INT NOT NULL,
    senha VARCHAR(20) NOT NULL
);

CREATE TABLE Sensor (
    id_sensor INT PRIMARY KEY AUTO_INCREMENT,
    tipo_sensor VARCHAR(50),
    local_instalacao VARCHAR(100),
    descricao_sensor VARCHAR(100),
    status_sensor VARCHAR(100),
    id_trem INT,
    id_estacao INT,
    FOREIGN KEY (id_trem) REFERENCES Trem(id_trem),
    FOREIGN KEY (id_estacao) REFERENCES Estacao(id_estacao)
);

CREATE TABLE Sensor_Data (
    id_leitura INT PRIMARY KEY AUTO_INCREMENT,
    id_sensor_fk INT,
    valor DECIMAL(10,2),
    data_hora DATETIME,
    FOREIGN KEY(id_sensor_fk) REFERENCES Sensor(id_sensor)
);

INSERT INTO Usuario_adm (nome, usuario, email, idade, senha) 
VALUES ('Larissa Boing', 'larissa_boing', 'larissa_boing@gmail.com', '20', 'larissa@123'), ('Laura Kasten', 'laura_kasten', 'laura_kasten@gmail.com', '21', 'laura@123'), ('Gabriela Bonelli', 'gabriela_bonelli','gabriela_bonelli@gmail.com', '22', 'gabriela@123'), ('Eduarda Tomaz', 'eduarda_tomaz', 'eduarda_tomaz@gmail.com','20','eduarda@123');