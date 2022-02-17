/*

	SQL per la creazione delle tabelle
	del database della nostra azienda
	
	Schema logico:

	UTENTE(id,nome,cognome,CF,metodoPagamento,indirizzo,dataNascita,telefono,email,password)
	CartaCredito(nCarta,CVV,idUTENTE)
	Spedizione(id,indirizzo,data,ora,idUTENTE)
	Portata(id,nome,prezzo,tempoPreparazione,idSpedizione,nomeTipo)
	Tipo(nome)
	Ingrediente(nome)
	PortataContieneIngredienti(idPortata,nomeIngrediente)

*/	


CREATE TABLE Utente(
	email varchar(255) PRIMARY KEY,
	nome varchar(255) NOT NULL,
	cognome varchar(255),
	Citta varchar(255),
	via varchar(255),
	civico int,
	telefono varchar(255) NOT NULL,
	password varchar(255) NOT NULL
);

CREATE TABLE CartaCredito(
	nome varchar(255),
	cognome varchar(255),
	nCarta int PRIMARY KEY,
	scadenza  DATETIME,
	CVV int,
	email varchar(255) REFERENCES UTENTE  (email)

);

CREATE TABLE Spedizione(
	id int PRIMARY KEY,
	email varchar(255) REFERENCES UTENTE  (email),
	indirizzo varchar(255),
	ordine Timestamp,
	consegna DATETIME
);

CREATE TABLE Portata(
	id int PRIMARY KEY,
	numero int REFERENCES SPEDIZIONE (id),
	prezzo float,
	tempoPreparazione float,
	nome varchar(255) REFERENCES TIPO  (nome)
);

CREATE TABLE Tipo(
	nome varchar(255) PRIMARY KEY
);

CREATE TABLE Ingrediente(
	nome varchar(255) PRIMARY KEY
);

CREATE TABLE PortataContieneIngrediente(
	id int REFERENCES PORTATA (id),
	nome varchar(255) REFERENCES INGREDIENTE (nome)
);



 INSERT INTO utente VALUES ('smubarr03@gmail.com','sam','barr','ge','g','4','333333433','1d96ef8b084825443ced61612933de84fb4019a806b42fb19a45e3cb641f69ec');