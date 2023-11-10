CREATE DATABASE apartaments;

CREATE TABLE apartamentos (
    	ID INT NOT NULL AUTO_INCREMENT,
    	Titol VARCHAR(255),
    	Preu_Alta DECIMAL(10, 2),
    	Preu_Baixa DECIMAL(10, 2),
    	Temporades VARCHAR(255),
    	Longitud DECIMAL(10, 6),
    	Latitud DECIMAL(10, 6),
    	N_Habitacions INT,
    	Metres_Quadrats INT,
    	Descripcio VARCHAR(255),
    	Adreca_Postal VARCHAR(255),
	Serveis VARCHAR(255),
    	PRIMARY KEY (ID)
);

CREATE TABLE users (
    ID INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nom VARCHAR(255),
    Cognoms VARCHAR(255),
    Telefon VARCHAR(15),
    Email VARCHAR(255),
    Card VARCHAR(16),
    user VARCHAR(255),
    pass VARCHAR(255),
    rol VARCHAR(20)
);

CREATE TABLE reserva (
    ID INT AUTO_INCREMENT PRIMARY KEY,
    ID_Usuari INT,
    ID_Apartament INT,
    Data_Entrada DATE,
    Data_Sortida DATE,
    Preu_Per_Dia DECIMAL(10, 2),
n_persones INT(11),
    FOREIGN KEY (ID_Usuari) REFERENCES users(ID) ON DELETE CASCADE,
    FOREIGN KEY (ID_Apartament) REFERENCES apartamentos(ID) ON DELETE CASCADE
);
