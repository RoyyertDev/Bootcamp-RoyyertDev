CREATE TABLE inscripciones (
  fk_estudiante_id INT NOT NULL,
  fk_clases_id INT NOT NULL,
  PRIMARY KEY (fk_estudiante_id, fk_clases_id),
  FOREIGN KEY (fk_estudiante_id) REFERENCES estudiantes(id),
  FOREIGN KEY (fk_clases_id) REFERENCES clases(id)
);