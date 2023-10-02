
USE bdd_canchas;

CREATE TABLE IF NOT EXISTS canchas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombrecancha VARCHAR(255) NOT NULL,
    direccion VARCHAR(255) NOT NULL,
    ciudad VARCHAR(255) NOT NULL,
    provincia VARCHAR(255) NOT NULL,
    superficie VARCHAR(255) NOT NULL,
    contacto VARCHAR(255) NOT NULL,
    correo VARCHAR(255) NOT NULL,
    horario VARCHAR(255) NOT NULL,
    servicios VARCHAR(255) NOT NULL
);
