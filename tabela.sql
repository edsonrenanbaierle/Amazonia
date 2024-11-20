CREATE DATABASE amazonia

USE amazonia

-- Tabela: Especie
CREATE TABLE Especie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_cientifico VARCHAR(255) NOT NULL,
    descricao TEXT,
    imagem TEXT,
);

-- Tabela: Taxonomia
CREATE TABLE Taxonomia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    especie_id INT NOT NULL,
    divisao VARCHAR(255),
    clado VARCHAR(255),
    ordem VARCHAR(255),
    familia VARCHAR(255),
    subfamilia VARCHAR(255),
    genero VARCHAR(255),
    tribo VARCHAR(255),
    secao VARCHAR(255),
    binomio_especifico VARCHAR(255),
    primeira_publicacao TEXT,
    sinonimia_botanica TEXT,
    nomes_vulgares_uf TEXT,
    nomes_vulgares_exterior TEXT,
    etimologia TEXT,
    FOREIGN KEY (especie_id) REFERENCES Especie(id)
);

-- Tabela: DescricaoBotanica
CREATE TABLE DescricaoBotanica (
    id INT AUTO_INCREMENT PRIMARY KEY,
    especie_id INT NOT NULL,
    forma_biologica_foliacao TEXT,
    tronco TEXT,
    ramificacao TEXT,
    casca TEXT,
    folhas TEXT,
    inflorescencias TEXT,
    flores TEXT,
    fruto TEXT,
    sementes TEXT,
    FOREIGN KEY (especie_id) REFERENCES Especie(id)
);

-- Tabela: BiologiaReprodutiva
CREATE TABLE BiologiaReprodutiva (
    id INT AUTO_INCREMENT PRIMARY KEY,
    especie_id INT NOT NULL,
    sistema_sexual VARCHAR(255),
    vetor_polinizacao VARCHAR(255),
    floracao TEXT,
    frutificacao TEXT,
    dispersao_frutos_sementes TEXT,
    qualidade_sementes TEXT,
    FOREIGN KEY (especie_id) REFERENCES Especie(id)
);

-- Tabela: OcorrenciaNatural
CREATE TABLE OcorrenciaNatural (
    id INT AUTO_INCREMENT PRIMARY KEY,
    especie_id INT NOT NULL,
    latitudes VARCHAR(255),
    variacao_altitudinal VARCHAR(255),
    mapa_imagem TEXT,
    FOREIGN KEY (especie_id) REFERENCES Especie(id)
);

-- Tabela: AspectosEcologicos
CREATE TABLE AspectosEcologicos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    especie_id INT NOT NULL,
    grupo_sucessional VARCHAR(255),
    importancia_sociologica TEXT,
    regeneracao_natural TEXT,
    FOREIGN KEY (especie_id) REFERENCES Especie(id)
);

-- Tabela: ProdutosUtilizacoes
CREATE TABLE ProdutosUtilizacoes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    especie_id INT NOT NULL,
    aproveitamento_alimentar TEXT,
    apicola TEXT,
    celulose_papel TEXT,
    energia TEXT,
    madeira_serrada_rolica TEXT,
    medicinal TEXT,
    alerta TEXT,
    paisagistico TEXT,
    plantios_ambientais TEXT,
    substancias_tanantes TEXT,
    FOREIGN KEY (especie_id) REFERENCES Especie(id)
);

-- Tabela: ComposicaoBiotecnologica
CREATE TABLE ComposicaoBiotecnologica (
    id INT AUTO_INCREMENT PRIMARY KEY,
    especie_id INT NOT NULL,
    variacao_carboidratos DECIMAL(5,2),
    variacao_proteinas DECIMAL(5,2),
    grupo_substancias TEXT,
    levantamento_bibliografico TEXT,
    biofertilizante TEXT,
    FOREIGN KEY (especie_id) REFERENCES Especie(id)
);

-- Tabela: CultivoViveiros
CREATE TABLE CultivoViveiros (
    id INT AUTO_INCREMENT PRIMARY KEY,
    especie_id INT NOT NULL,
    implantacao_viveiros TEXT,
    caracteristicas_silviculturais TEXT,
    habito TEXT,
    sistemas_plantio TEXT,
    sistemas_agroflorestais TEXT,
    crescimento_producao TEXT,
    numero_sementes_por_kg TEXT,
    tratamento_pre_germinativo TEXT,
    longevidade_armazenamento TEXT,
    germinacao_laboratorio TEXT,
    FOREIGN KEY (especie_id) REFERENCES Especie(id)
);

-- Tabela: ProducaoMudas
CREATE TABLE ProducaoMudas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    especie_id INT NOT NULL,
    semeadura TEXT,
    germinacao TEXT,
    associacao_simbiotica TEXT,
    cuidados_especiais TEXT,
    FOREIGN KEY (especie_id) REFERENCES Especie(id)
);

-- Tabela: Pragas
CREATE TABLE Pragas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    especie_id INT NOT NULL,
    descricao TEXT,
    FOREIGN KEY (especie_id) REFERENCES Especie(id)
);

-- Tabela: Solos
CREATE TABLE Solos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    especie_id INT NOT NULL,
    descricao TEXT,
    FOREIGN KEY (especie_id) REFERENCES Especie(id)
);

-- Tabela: Anexos
CREATE TABLE Anexos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    especie_id INT NOT NULL,
    imagem TEXT,
    legenda TEXT,
    FOREIGN KEY (especie_id) REFERENCES Especie(id)
);

-- Tabela: Usuario
CREATE TABLE Usuario (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(255) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    senha VARCHAR(255) NOT NULL,
    data_criacao TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
