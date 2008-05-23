<?php

class toba_filtro_columna_cadena extends toba_filtro_columna
{
	protected $_condiciones = array(
			'contiene' 		=> array('etiqueta' => 'contiene',			'operador_sql' => 'ILIKE',		'pre' => '%', 	'post' => '%', 	'casting' => '::varchar'),
			'no_contiene' 	=> array('etiqueta' => 'no contiene',		'operador_sql' => 'NOT ILIKE',	'pre' => '%', 	'post' => '%', 	'casting' => '::varchar'),
			'comienza_con' 	=> array('etiqueta' => 'comienza con',		'operador_sql' => 'ILIKE',		'pre' => '', 	'post' => '%',	'casting' => '::varchar'),
			'termina_con' 	=> array('etiqueta' => 'termina con',		'operador_sql' => 'ILIKE',		'pre' => '%', 	'post' => '', 	'casting' => '::varchar'),
			'es_igual_a' 	=> array('etiqueta' => 'es igual a',		'operador_sql' => '=',			'pre' => '', 	'post' => '', 	'casting' => '::varchar'),	
			'es_distinto_de' => array('etiqueta' => 'es distinto de',	'operador_sql' => '!=',			'pre' => '', 	'post' => '', 	'casting' => '::varchar'),
	);
	
	function ini()
	{
		$parametros = $this->_datos;
		$parametros['edit_tamano'] = 18;
		$parametros['edit_maximo'] = 255;
		$this->_ef = new toba_ef_editable($this, null, $this->_datos['nombre'], $this->_datos['etiqueta'],
											null, null, false, $parametros);
	}


}

?>