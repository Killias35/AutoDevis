-- Création de la base
CREATE DATABASE IF NOT EXISTS devis;
USE devis;

-- Table clients
CREATE TABLE clients (
    id INT PRIMARY KEY,
    civilite VARCHAR(50),
    nom_client VARCHAR(255),
    adresse_client VARCHAR(255),
    code_postal_client VARCHAR(20),
    ville_client VARCHAR(100),
    tel VARCHAR(50),
    tva_intra VARCHAR(50),
    rcs VARCHAR(100)
);

-- Table chantiers
CREATE TABLE chantiers (
    id INT PRIMARY KEY,
    id_client INT,
    nom_chantier VARCHAR(255),
    adresse_chantier VARCHAR(255),
    code_postal_chantier VARCHAR(20),
    ville_chantier VARCHAR(100),
    conducteur VARCHAR(255),
    FOREIGN KEY (id_client) REFERENCES clients(id)
);

-- Table factures
CREATE TABLE factures (
    id VARCHAR(50) PRIMARY KEY,
    id_client INT,
    numero_situation VARCHAR(50),
    pv_numero VARCHAR(50),
    date_facture DATE,
    sous_total DECIMAL(12,2),
    montant_facture DECIMAL(12,2),
    echeance DATE,
    affacturage BOOLEAN,
    FOREIGN KEY (id_client) REFERENCES clients(id)
);

-- Table reglements
CREATE TABLE reglements (
    id INT AUTO_INCREMENT PRIMARY KEY,
    id_facture VARCHAR(50),
    date_reglement DATE,
    montant_regle DECIMAL(12,2),
    FOREIGN KEY (id_facture) REFERENCES factures(id)
);
