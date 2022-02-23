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


CREATE TABLE ClienteAggiungePortata(
	id int REFERENCES PORTATA (id),
	quantita int,
	email varchar(255) REFERENCES Cliente (email)
);




 INSERT INTO utente VALUES ('smubarr03@gmail.com','sam','barr','ge','g','4','333333433','1d96ef8b084825443ced61612933de84fb4019a806b42fb19a45e3cb641f69ec');
/*

    Seguono le INSERT INTO volte a riempire le tuple del database
    
*/
/*

    Seguono le INSERT INTO volte a riempire le tuple del database
    
*/


INSERT INTO Tipo VALUES ('primo');
INSERT INTO Tipo VALUES ('carne');
INSERT INTO Tipo VALUES ('pesce');
INSERT INTO Tipo VALUES ('contorno');
INSERT INTO Tipo VALUES ('dolce');
INSERT INTO Tipo VALUES ('pizza');




INSERT INTO Portata VALUES ('01','Gnocchi al pesto','Primi/img1.jpg','5,50','16','primo');

INSERT INTO Portata VALUES ('02','Spaghetti al sugo','Primi/img2.jpg','5,50','16','primo');

INSERT INTO Portata VALUES ('3','Risotto allo zafferano','Primi/img3.jpg','6,90','16','primo');

INSERT INTO Portata VALUES ('04','Lasagna','Primi/img4.jpg','6,50','10','primo');

INSERT INTO Portata VALUES ('05','Lasagna al pesto','Primi/img5.jpg','6,50','10','primo');


/*

    Lista piatti:
    - Maiale arrosto
    - Spezzatino di maiale
    - Pollo arrosto

*/

INSERT INTO Portata VALUES ('06','Arrosto di maiale','Carne/img6.jpg','7,50','14','carne');

INSERT INTO Portata VALUES ('07','Spezzatino di maiale','Carne/img7.jpg','7,50','14','carne');

INSERT INTO Portata VALUES ('08','Pollo arrosto','Carne/img8.jpg','7,90','8','carne');



/*
    - Salmone
    - Orata al forno
*/

INSERT INTO Portata VALUES ('09','Salmone','Pesce/img9.jpg','8,90','15','pesce');

INSERT INTO Portata VALUES ('10','Orata al forno','Pesce/img10.jpg','8,50','20','pesce');

/*

    Lista contorni:
    - Insalata mista
    - Insalata di riso
    - Insalata di verdure

*/

INSERT INTO Portata VALUES ('11','Insalata mista','Contorni/img11.jpg','3,70','4','contorno');

INSERT INTO Portata VALUES ('12','Insalata di riso','Contorni/img12.jpg','3,70','4','contorno');

INSERT INTO Portata VALUES ('13','Insalata di verdure','Contorni/img13.jpg','3,70','4','contorno');

/*

    Lista dei dolci:
    - Tiramisù
    - Cheesecake
    - Torta di mele
    - Torta della nonna
    - Gelato alla vaniglia
    - Gelato al cioccolato

*/

INSERT INTO Portata VALUES ('14','Tiramisù','Dolci/img14.jpg','3','25','dolce');

INSERT INTO Portata VALUES ('15','Cheesecake','Dolci/img15.jpg','3,20','25','dolce');

INSERT INTO Portata VALUES ('16','Torta di mele','Dolci/img16.jpg','3,50','15','dolce');

INSERT INTO Portata VALUES ('17','Torta della nonna','Dolci/img17.jpg','3,50','15','dolce');

INSERT INTO Portata VALUES ('18','Gelato alla vaniglia','Dolci/img18.jpg','1,60','3','dolce');

INSERT INTO Portata VALUES ('19','Gelato al cioccolato','Dolci/img19.jpg','1,60','3','dolce');



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

INSERT INTO Portata VALUES ('20','Margherita','Pizze/img20.jpg','4','5','pizza');

INSERT INTO Portata VALUES ('21','Marinara','Pizze/img21.jpg','5','5','pizza');

INSERT INTO Portata VALUES ('22','Diavola','Pizze/img22.jpg','6,40','5','pizza');

INSERT INTO Portata VALUES ('23','4 formaggi','Pizze/img23.jpg','6,40','5','pizza');

INSERT INTO Portata VALUES ('24','4 stagioni','Pizze/img24.jpg','6,40','5','pizza');

INSERT INTO Portata VALUES ('25','Prosciutto e funghi','Pizze/img25.jpg','6,40','5','pizza');

INSERT INTO Portata VALUES ('26','Pesto','Pizze/img26.jpg','6,50','5','pizza');
