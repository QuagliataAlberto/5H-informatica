CREATE DATABASE istituzione;      //crea il database

CREATE TABLE scuola(                  //crea tabella scuola
    codice INT NOT NULL AUTO_INCREMENT PRIMARY KEY
    );
    
CREATE TABLE studenti(                 //crea tabella studente
    matricola CHAR(10),
    cognome CHAR(15) NOT NULL,        //NOT NULL significa che il campo è obbligatorio
    codice_scuola INT REFERENCES scuola(codice)    //REFRENCES perchè fa riferimento all'attributodella tabella scuola
    );
