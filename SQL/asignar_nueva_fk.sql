ALTER TABLE inscripciones 
ADD CONSTRAINT nueva_relacion 
FOREIGN KEY (
    fk_estudiante_id
) 
REFERENCES estudiantes(id) 
ON DELETE CASCADE