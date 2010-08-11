<?php

class toba_migracion_1_6_0 extends toba_migracion
{
    function instancia__cambios_estructura()
	{
		/**
		 * Se evita el mensaje 'ERROR:  cannot ALTER TABLE "apex_objeto" because
		 * it has pending trigger events' de postgres 8.3
		 */
		$sql = "SET CONSTRAINTS ALL IMMEDIATE;";
		$this->elemento->get_db()->ejecutar($sql);
		
		$sql = array();
		
		// AP MULTITABLA
		$sql[] = 'ALTER TABLE apex_proyecto ADD extension_toba boolean;';
		$sql[] = 'ALTER TABLE apex_proyecto ADD extension_proyecto boolean;';

		$sql[] = 'ALTER TABLE apex_objeto_db_registros ADD tabla_ext text;';
		$sql[] = 'ALTER TABLE apex_objeto_db_registros_col ADD tabla varchar(200);';

		$sql[] = 'CREATE SEQUENCE apex_objeto_db_columna_fks_seq INCREMENT	1 MINVALUE 0 MAXVALUE 9223372036854775807	CACHE	1;';
		$sql[] = '
			CREATE TABLE apex_objeto_db_columna_fks
			(
				id								int8			DEFAULT nextval(\'"apex_objeto_db_columna_fks_seq"\'::text) 		NOT NULL,
				objeto_proyecto    			   	varchar(15)		NOT NULL,
				objeto 		                	int8       		NOT NULL,
				tabla							varchar(200)	NOT NULL,
				columna							varchar(200)	NOT NULL,
				tabla_ext						varchar(200)	NOT NULL,
				columna_ext						varchar(200)	NOT NULL,
				CONSTRAINT  "apex_obj_db_col_fks_pk" PRIMARY KEY ("id", "objeto", "objeto_proyecto"),
				CONSTRAINT  "apex_obj_db_col_fks_reg" FOREIGN KEY ("objeto_proyecto", "objeto") REFERENCES "apex_objeto_db_registros" ("objeto_proyecto", "objeto") ON DELETE CASCADE ON UPDATE NO ACTION DEFERRABLE INITIALLY IMMEDIATE
			);
		';

		// PUNTOS DE MONTAJE
		$sql[] = 'CREATE SEQUENCE apex_puntos_montaje_seq INCREMENT 1 MINVALUE 1	MAXVALUE	9223372036854775807 CACHE 1;';
		$sql[] = '
			CREATE TABLE apex_puntos_montaje
			(
				id									int8				DEFAULT nextval(\'"apex_puntos_montaje_seq"\'::text)	NOT NULL,
				etiqueta							varchar(50)			NOT NULL,
				proyecto							varchar(15)			NOT NULL,
				proyecto_ref						varchar(15)			NULL,
				descripcion							TEXT				NULL,
				path_pm								TEXT				NOT NULL,
				tipo								varchar(20)			NOT NULL,

				UNIQUE								("etiqueta","proyecto"),
				CONSTRAINT	"apex_punto_montaje_pk"	PRIMARY KEY ("id"),
				CONSTRAINT	"apex_proyecto_fk_proy"	FOREIGN KEY	("proyecto") REFERENCES	"apex_proyecto" ("proyecto") ON DELETE	NO	ACTION ON UPDATE NO ACTION	DEFERRABLE	INITIALLY IMMEDIATE
			);
		';
		
		$sql[] = 'ALTER TABLE apex_objeto ADD punto_montaje int8;';
		$sql[] = 'ALTER TABLE apex_objeto ADD CONSTRAINT "apex_objeto_fk_puntos_montaje" FOREIGN KEY ("punto_montaje") REFERENCES "apex_puntos_montaje"	("id") ON DELETE NO ACTION	ON	UPDATE NO ACTION DEFERRABLE INITIALLY	IMMEDIATE;';

		$sql[] = 'ALTER TABLE apex_item_zona ADD punto_montaje int8;';
		$sql[] = 'ALTER TABLE apex_item_zona ADD CONSTRAINT "apex_objeto_fk_puntos_montaje" FOREIGN KEY ("punto_montaje") REFERENCES "apex_puntos_montaje"	("id") ON DELETE NO ACTION	ON	UPDATE NO ACTION DEFERRABLE INITIALLY	IMMEDIATE;';		
		
		$sql[] = 'ALTER TABLE apex_objeto_datos_rel ADD punto_montaje int8;';
		$sql[] = 'ALTER TABLE apex_objeto_datos_rel ADD CONSTRAINT "apex_objeto_fk_puntos_montaje" FOREIGN KEY ("punto_montaje") REFERENCES "apex_puntos_montaje"	("id") ON DELETE NO ACTION	ON	UPDATE NO ACTION DEFERRABLE INITIALLY	IMMEDIATE;';

		$sql[] = 'ALTER TABLE apex_objeto_db_registros ADD punto_montaje int8;';
		$sql[] = 'ALTER TABLE apex_objeto_db_registros ADD CONSTRAINT "apex_objeto_fk_puntos_montaje" FOREIGN KEY ("punto_montaje") REFERENCES "apex_puntos_montaje"	("id") ON DELETE NO ACTION	ON	UPDATE NO ACTION DEFERRABLE INITIALLY	IMMEDIATE;';
		
		$sql[] = 'ALTER TABLE apex_pagina_tipo ADD punto_montaje int8;';
		$sql[] = 'ALTER TABLE apex_pagina_tipo ADD CONSTRAINT "apex_objeto_fk_puntos_montaje" FOREIGN KEY ("punto_montaje") REFERENCES "apex_puntos_montaje"	("id") ON DELETE NO ACTION	ON	UPDATE NO ACTION DEFERRABLE INITIALLY	IMMEDIATE;';

		$sql[] = 'ALTER TABLE apex_consulta_php ADD punto_montaje int8;';
		$sql[] = 'ALTER TABLE apex_consulta_php ADD CONSTRAINT "apex_objeto_fk_puntos_montaje" FOREIGN KEY ("punto_montaje") REFERENCES "apex_puntos_montaje"	("id") ON DELETE NO ACTION	ON	UPDATE NO ACTION DEFERRABLE INITIALLY	IMMEDIATE;';

		$sql[] = 'ALTER TABLE apex_objeto_ci_pantalla ADD punto_montaje int8;';
		$sql[] = 'ALTER TABLE apex_objeto_ci_pantalla ADD CONSTRAINT "apex_objeto_fk_puntos_montaje" FOREIGN KEY ("punto_montaje") REFERENCES "apex_puntos_montaje"	("id") ON DELETE NO ACTION	ON	UPDATE NO ACTION DEFERRABLE INITIALLY	IMMEDIATE;';

		$sql[] = 'ALTER TABLE apex_objeto_ei_formulario_ef ADD punto_montaje int8;';
		$sql[] = 'ALTER TABLE apex_objeto_ei_formulario_ef ADD CONSTRAINT "apex_objeto_fk_puntos_montaje" FOREIGN KEY ("punto_montaje") REFERENCES "apex_puntos_montaje"	("id") ON DELETE NO ACTION	ON	UPDATE NO ACTION DEFERRABLE INITIALLY	IMMEDIATE;';
		// Agregar registros por defecto del proyecto que se est� migrando
		$this->elemento->get_db()->ejecutar($sql);

		$sql = "SET CONSTRAINTS ALL DEFERRED;";
		$this->elemento->get_db()->ejecutar($sql);
	}

	function proyecto__puntos_montaje()
	{
		$proyecto = $this->elemento->get_db()->quote($this->elemento->get_id());
		$sql = "
			INSERT INTO
				apex_puntos_montaje (
					etiqueta, proyecto, proyecto_ref, descripcion, path_pm, tipo
				)
				VALUES (
					'php', $proyecto, $proyecto, 'punto de montaje por defecto proyectos toba', 'php', 'proyecto_toba'
				)
		;";
		$this->elemento->get_db()->ejecutar($sql);
		$id_pm = $this->elemento->get_db()->recuperar_secuencia('apex_puntos_montaje_seq');
//		$id_pm = $this->elemento->get_db()->consultar_fila("SELECT id FROM apex_puntos_montaje WHERE etiqueta='php' AND proyecto=$proyecto");
//		$id_pm = $this->elemento->get_db()->quote($id_pm['id']);

		$sql = array();
		$sql[] = "UPDATE apex_objeto SET punto_montaje=$id_pm WHERE proyecto=$proyecto";
		$sql[] = "UPDATE apex_item_zona SET punto_montaje=$id_pm WHERE proyecto=$proyecto";
		$sql[] = "UPDATE apex_objeto_datos_rel SET punto_montaje=$id_pm WHERE proyecto=$proyecto";
		$sql[] = "UPDATE apex_objeto_db_registros SET punto_montaje=$id_pm WHERE objeto_proyecto=$proyecto";
		$sql[] = "UPDATE apex_pagina_tipo SET punto_montaje=$id_pm WHERE proyecto=$proyecto";
		$sql[] = "UPDATE apex_consulta_php SET punto_montaje=$id_pm WHERE proyecto=$proyecto";
		$sql[] = "UPDATE apex_objeto_ci_pantalla SET punto_montaje=$id_pm WHERE objeto_ci_proyecto=$proyecto";
		$sql[] = "UPDATE apex_objeto_ei_formulario_ef SET punto_montaje=$id_pm WHERE objeto_ei_formulario_proyecto=$proyecto";
		$this->elemento->get_db()->ejecutar($sql);
	}

	function proyecto__ap_mt()
	{
		// Agregar el valor del campo tabla en apex_objeto_db_registros_col con la tabla a la que pertenece
	}
}
?>