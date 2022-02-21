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
    nome varchar(255) NOT NULL,
    img varchar(255),                                    
	prezzo float,
	tempoPreparazione float,
	tipo varchar(255) REFERENCES TIPO  (nome)
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
/*

    Seguono le INSERT INTO volte a riempire le tuple del database
    
*/


INSERT INTO Tipo VALUES ('primo');
INSERT INTO Tipo VALUES ('carne');
INSERT INTO Tipo VALUES ('pesce');
INSERT INTO Tipo VALUES ('contorno');
INSERT INTO Tipo VALUES ('dolce');
INSERT INTO Tipo VALUES ('pizza');




INSERT INTO Portata VALUES ('1','Gnocchi al pesto','img/img1.jpg','5,50','16','primo');

INSERT INTO Portata VALUES ('02','Spaghetti al sugo','img/img2.jpg','5,50','16','primo');

INSERT INTO Portata VALUES ('03','Risotto allo zafferano','img/img3.jpg','6,90','16','primo');

INSERT INTO Portata VALUES ('04','Lasagna','img/img4.jpg','6,50','10','primo');

INSERT INTO Portata VALUES ('05','Lasagna al pesto','img/img5.jpg','6,50','10','primo');




/*

    Lista piatti:
    - Maiale arrosto
    - Spezzatino di maiale
    - Pollo arrosto

*/

INSERT INTO Portata VALUES ('06','Arrosto di maiale','img/img6','7,50','14','carne');

INSERT INTO Portata VALUES ('07','Spezzatino di maiale','img/img7','7,50','14','carne');

INSERT INTO Portata VALUES ('08','Pollo arrosto','img/8','7,90','8','carne');




/*
    - Salmone
    - Orata al forno
*/

INSERT INTO Portata VALUES ('09','Salmone','img/img9','8,90','15','pesce');

INSERT INTO Portata VALUES ('10','Orata al forno','img/img10','8,50','20','pesce');



/*

    Lista contorni:
    - Insalata mista
    - Insalata di riso
    - Insalata di verdure

*/

INSERT INTO Portata VALUES ('11','Insalata mista','img/img10','3,70','4','contorno');

INSERT INTO Portata VALUES ('12','Insalata di riso','img/img11','3,70','4','contorno');

INSERT INTO Portata VALUES ('13','Insalata di verdure','img/img12','3,70','4','contorno');




/*

    Lista dei dolci:
    - Tiramisù
    - Cheesecake
    - Torta di mele
    - Torta della nonna
    - Gelato alla vaniglia
    - Gelato al cioccolato

*/

INSERT INTO Portata VALUES ('14','Tiramisù','img/img14','3','','dolce');

INSERT INTO Portata VALUES ('15','Cheesecake','img/img15','3,20','','dolce');

INSERT INTO Portata VALUES ('16','Torta di mele','img/img16','3,50','','dolce');

INSERT INTO Portata VALUES ('17','Torta della nonna','img/img17','3,50','','dolce');

INSERT INTO Portata VALUES ('18','Gelato alla vaniglia','img/img18','1,60','','dolce');

INSERT INTO Portata VALUES ('19','Gelato al cioccolato','img/img19','1,60','','dolce');



/*

    Lista pizze:
    - Margherita
    - Marinara
    - Diavola
    - 4 formaggi
    - 4 stagioni
    - Prosciutto e funghi
    - Pesto

*/

INSERT INTO Portata VALUES ('20','Margherita','img/img20','4','5','pizza');

INSERT INTO Portata VALUES ('21','Marinara','img/img21','5','5','pizza');

INSERT INTO Portata VALUES ('22','Diavola','img/img22','6,40','5','pizza');

INSERT INTO Portata VALUES ('23','4 formaggi','img/img23','6,40','5','pizza');

INSERT INTO Portata VALUES ('24','4 stagioni','img/img24','6,40','5','pizza');

INSERT INTO Portata VALUES ('25','Prosciutto e funghi','img/img25','6,40','5','pizza');

INSERT INTO Portata VALUES ('26','Pesto','img/img26','6,50','5','pizza');