SELECT matricula.id as id_matricula, matricula.fecha as fecha_matricula, matricula.valor as valor_matricula, estudiante.numero_documento as documento_estudiante, estudiante.nombre as nombre_estudiante, estudiante.apellido as apellido_estudiante, acudiente.numero_documento as documento_acudiente, acudiente.nombre as nombre_acudiente, acudiente.apellido as apellido_acudiente,
curso.nombre as nombre_curso 
FROM matricula
INNER JOIN estudiante ON matricula.fk_id_estudiante = estudiante.id
INNER JOIN acudiente ON matricula.fk_id_acudiente = acudiente.id
INNER JOIN curso ON matricula.fk_id_curso = curso.id;

/*Actualizar*/
SELECT matricula.id as id_matricula, matricula.fecha as fecha_matricula, matricula.valor as valor_matricula, estudiante.numero_documento as documento_estudiante, estudiante.nombre as nombre_estudiante, estudiante.apellido as apellido_estudiante, acudiente.numero_documento as documento_acudiente, acudiente.nombre as nombre_acudiente, acudiente.apellido as apellido_acudiente,
curso.nombre as nombre_curso 
FROM matricula
INNER JOIN estudiante ON matricula.fk_id_estudiante = estudiante.id
INNER JOIN acudiente ON matricula.fk_id_acudiente = acudiente.id
INNER JOIN curso ON matricula.fk_id_curso = curso.id where matricula.id = 2;

/*Buscar- tabla de pago estudiante*/
SELECT matricula.id as id_matricula, estudiante.nombre as nombre_estudiante, estudiante.apellido as apellido_estudiante, acudiente.nombre as nombre_acudiente, acudiente.apellido as apellido_acudiente
FROM matricula
INNER JOIN estudiante ON matricula.fk_id_estudiante = estudiante.id
INNER JOIN acudiente ON matricula.fk_id_acudiente = acudiente.id where estudiante.numero_documento = 2;


/*busqueda de la  pago estudiante editar*/
SELECT  matricula.id as id_matricula, estudiante.nombre as nombre_estudiante, estudiante.apellido as apellido_estudiante, acudiente.nombre as nombre_acudiente, acudiente.apellido as apellido_acudiente, pension.id as id_pension, pension.fecha as fecha_pension, pension.valor as valor_pension, pension.nombre_admin as nombre_admi
     FROM pension
     INNER JOIN matricula ON pension.fk_id_matricula = matricula.id 
     INNER JOIN estudiante ON matricula.fk_id_estudiante = estudiante.id
     INNER JOIN acudiente ON matricula.fk_id_acudiente = acudiente.id  where pension.id =1 ;




     SELECT  matricula.id as id_matricula, estudiante.nombre as nombre_estudiante, estudiante.apellido as apellido_estudiante, acudiente.nombre as nombre_acudiente, acudiente.apellido as apellido_acudiente, pension.id as id_pension, pension.fecha as fecha_pension, pension.valor as valor_pension, pension.nombre_admin as nombre_admi
     FROM pension
     INNER JOIN matricula ON pension.fk_id_matricula = matricula.id 
     INNER JOIN estudiante ON matricula.fk_id_estudiante = estudiante.id
     INNER JOIN acudiente ON matricula.fk_id_acudiente = acudiente.id  where pension.id =1





     



/*cargar la tabla pago docente*/
     SELECT  pago_docente.id as id, pago_docente.fecha as fecha, pago_docente.valor as valor, pago_docente.nombre_rectora as nombre_rectora, docente.nombre as nombre, docente.apellido as apellido, docente.numero_documento as documento 
     FROM pago_docente
     INNER JOIN docente ON pago_docente.fk_id_docente = docente.id where pago_docente.fecha = '2019-11-16';
     

/*prueba para buscar y editar datos docente*/
      SELECT  pago_docente.id as id, pago_docente.fecha as fecha, pago_docente.valor as valor, pago_docente.nombre_rectora as nombre_rectora, docente.nombre as nombre, docente.apellido as apellido, docente.numero_documento as documento, docente.id as fk_id_docente 
     FROM pago_docente
     INNER JOIN docente ON pago_docente.fk_id_docente = docente.id where pago_docente.id = 1;
     



          SELECT matricula.id as id_matricula, matricula.fecha as fecha_matricula, matricula.valor as valor_matricula, estudiante.numero_documento as documento_estudiante, estudiante.nombre as nombre_estudiante, estudiante.apellido as apellido_estudiante, acudiente.numero_documento as documento_acudiente, acudiente.nombre as nombre_acudiente, acudiente.apellido as apellido_acudiente,
          curso.nombre as nombre_curso 
          FROM matricula
          INNER JOIN estudiante ON matricula.fk_id_estudiante = estudiante.id
          INNER JOIN acudiente ON matricula.fk_id_acudiente = acudiente.id
          INNER JOIN curso ON matricula.fk_id_curso = curso.id where estudiante.numero_documento = 1;