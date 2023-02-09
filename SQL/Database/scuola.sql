__CREAZIONE tabella corsi__
CREATE TABLE corsi(
    classe INT,
    sezione CHAR(4),
    nome_corso CHAR(25),
    PRIMARY KEY(classe, sezione)
    );
    
    
__CREAZIONE tabella studenti__
CREATE TABLE studenti(
    matricola CHAR(20) PRIMARY KEY,
    nome VARCHAR(20),
    cognome VARCHAR(20),
    data_nascita DATE,
    classe INT,
    sezione CHAR(4),
    FOREIGN KEY(classe, sezione) REFERENCES corsi(classe, sezione)
    );
    
    
__INSERIMENTO attributi nella tabella corsi__
INSERT 
INTO corsi(classe, sezione, nome_corso)
VALUES ('4', 'H', 'informatico');


__INSERIMENTO attributi nella tabella studenti__  //inserimento studente
INSERT 
INTO studenti(matricola, nome, cognome, data_nascita, classe, sezione)
VALUES ('01', 'Alberto', 'Quagliata', '2002-10-9', '5', 'H');


__INSERIMENTO attributi nella tabella corsi__
INSERT 
INTO corsi(classe, sezione, nome_corso)
VALUES ('5', 'H', 'Informatico');


__INSERIMENTO attributi nella tabella studenti__  //inserimento studente
INSERT 
INTO studenti(matricola, nome, cognome, data_nascita, classe, sezione)
VALUES ('02', 'Dennis', 'Mandriani', '2004-11-19', '4', 'H');


__INSERIMENTO attributi nella tabella studenti__  //inserimento studente
INSERT 
INTO studenti(matricola, nome, cognome, data_nascita, classe, sezione)
VALUES ('03', 'Manuel', 'Rossi', '2004-01-03', '4', 'H');


__INSERIMENTO attributi nella tabella studenti__  //inserimento studente
INSERT 
INTO studenti(matricola, nome, cognome, data_nascita, classe, sezione)
VALUES ('04', 'Maranza', 'Scimmia', '2006-06-28', '2', 'H');


__istruzione SELECT di PROIEZIONE__
SELECT matricola, nome, cognome, data_nascita, classe, sezione
FROM studenti;

__istruzione SELECT di SELEZIONE__
SELECT *
FROM studenti
WHERE cognome = 'Mandriani';





CREATE TABLE scuola(
    codice INT(65) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome_scuola CHAR(64) NOT NULL
    );
    


CREATE TABLE studenti(
    matricola CHAR(20) PRIMARY KEY,
    nome VARCHAR(20) NOT NULL,
    cognome VARCHAR(20) NOT NULL,
    data_nascita DATE NOT NULL,
    classe CHAR(2) NOT NULL,
    codice_scuola INT(65) NOT NULL,
    FOREIGN KEY(codice_scuola) REFERENCES scuola(codice)
    	ON UPDATE CASCADE   (quando viene aggiornata il codice della scuola nella tabella scuola, 
                   tutti i studenti avente come chiave esterna come codice della scuola verrà aggiornato di conseguenza 
    );

    
    
    INSERT INTO scuola(codice, nome_scuola) 
VALUES ('01', 'ITCS Erasmo da Rotterdam');

INSERT INTO scuola(codice, nome_scuola) 
VALUES ('02', 'Russell');

INSERT INTO scuola(codice, nome_scuola) 
VALUES ('03', 'Privo Levi');
    
    
    
    INSERT INTO studenti(matricola, nome, cognome, data_nascita, classe, codice_scuola) 
VALUES ('101', 'Alberto', 'Quagliata', '2002-10-09', '5H', '01');

INSERT INTO studenti(matricola, nome, cognome, data_nascita, classe, codice_scuola) 
VALUES ('102', 'Stefano', 'Forleo', '2004-11-03', '5H', '01');

INSERT INTO studenti(matricola, nome, cognome, data_nascita, classe, codice_scuola) 
VALUES ('103', 'Giacomo', 'Poretti', '2003/11/15', '4A', '02');

INSERT INTO studenti(matricola, nome, cognome, data_nascita, classe, codice_scuola) 
VALUES ('104', 'Jovanni', 'Lavazza', '2006/09/13', '3F', '03')
    
    on è un vincolo dove specifico, in questo caso tutte quelle che hanno un colleamento 





