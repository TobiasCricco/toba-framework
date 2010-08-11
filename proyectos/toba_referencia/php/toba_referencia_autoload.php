<?php
/**
 * Esta clase fue y ser� generada autom�ticamente. NO EDITAR A MANO.
 * @ignore
 */
class toba_referencia_autoload 
{
	static function existe_clase($nombre)
	{
		return isset(self::$clases[$nombre]);
	}

	static function cargar($nombre)
	{
		if (self::existe_clase($nombre)) { require_once(dirname(__FILE__) .'/'. self::$clases[$nombre]); }
	}

	static $clases = array(
		'ci_ajax' => 'componentes/ajax/ci_ajax.php',
		'form_validacion' => 'componentes/ajax/form_validacion.php',
		'ci_cambio_layout' => 'componentes/ci/ci_cambio_layout.php',
		'ci_navegacion_principal' => 'componentes/ci/ci_navegacion_principal.php',
		'ci_solapas' => 'componentes/ci/ci_solapas.php',
		'ci_tabs' => 'componentes/ci/ci_tabs.php',
		'ci_wizard' => 'componentes/ci/ci_wizard.php',
		'pantalla_dos_columnas' => 'componentes/ci/pantalla_dos_columnas.php',
		'datos_ejemplos' => 'componentes/datos_ejemplos.php',
		'ci_checks_radios' => 'componentes/efs/checks_radios/ci_checks_radios.php',
		'ci_mascaras' => 'componentes/efs/ci_mascaras.php',
		'ci_principal' => 'componentes/efs/dependencias/ci_principal.php',
		'dao' => 'componentes/efs/dependencias/dao.php',
		'ci_captcha' => 'componentes/efs/ef_captcha/ci_captcha.php',
		'ci_combo_editable' => 'componentes/efs/ef_combo_editable/ci_combo_editable.php',
		'form_combo_editable' => 'componentes/efs/ef_combo_editable/form_combo_editable.php',
		'ml_combo_editable' => 'componentes/efs/ef_combo_editable/ml_combo_editable.php',
		'ci_ef_html' => 'componentes/efs/ef_html/ci_ef_html.php',
		'ci_principal' => 'componentes/efs/ef_popup/ci_principal.php',
		'form_ef_popup' => 'componentes/efs/ef_popup/form_ef_popup.php',
		'extension_ci' => 'componentes/efs/ef_upload/extension_ci.php',
		'pantalla_visualizacion' => 'componentes/efs/ef_upload/pantalla_visualizacion.php',
		'icono_informacion' => 'componentes/efs/iconos_utilerias/ci_iconos_utilerias.php',
		'icono_limpiar' => 'componentes/efs/iconos_utilerias/ci_iconos_utilerias.php',
		'ci_iconos_utilerias' => 'componentes/efs/iconos_utilerias/ci_iconos_utilerias.php',
		'ci_ocultar_mostrar' => 'componentes/efs/ocultar_mostrar/ci_ocultar_mostrar.php',
		'form_ocultar_mostrar' => 'componentes/efs/ocultar_mostrar/form_ocultar_mostrar.php',
		'ci_ei_arbol' => 'componentes/ei_arbol/ci_ei_arbol.php',
		'extension_ci' => 'componentes/ei_calendario/extension_ci.php',
		'ci_cuadro_cc' => 'componentes/ei_cuadro - cortes control/ci_cuadro_cc.php',
		'extendion_cuadro_estetica' => 'componentes/ei_cuadro - cortes control/extension_cuadro_estetica.php',
		'extension_cuadro_estetica_a' => 'componentes/ei_cuadro - cortes control/extension_cuadro_estetica_a.php',
		'extension_cuadro_estetica_b' => 'componentes/ei_cuadro - cortes control/extension_cuadro_estetica_b.php',
		'extension_cuadro_full' => 'componentes/ei_cuadro - cortes control/extension_cuadro_full.php',
		'extension_cuadro_sumarizacion_a' => 'componentes/ei_cuadro - cortes control/extension_cuadro_sumarizacion_a.php',
		'extension_cuadro_sumarizacion_b' => 'componentes/ei_cuadro - cortes control/extension_cuadro_sumarizacion_b.php',
		'extension_ci' => 'componentes/ei_cuadro - paginado/extension_ci.php',
		'formateo_referencia' => 'componentes/ei_cuadro - paginado/formateo_referencia.php',
		'ci_cuadro_seleccion_multiple' => 'componentes/ei_cuadro/seleccion_multiple/ci_cuadro_seleccion_multiple.php',
		'ci_esquemas' => 'componentes/ei_esquema/ci_esquemas.php',
		'formateo_proyecto' => 'componentes/ei_filtro - ei_cuadro/extension_ci.php',
		'extension_ci' => 'componentes/ei_filtro - ei_cuadro/extension_ci.php',
		'extension_cuadro' => 'componentes/ei_filtro - ei_cuadro/extension_cuadro.php',
		'extension_filtro' => 'componentes/ei_filtro - ei_cuadro/extension_filtro.php',
		'ci_ei_filtro' => 'componentes/ei_filtro/ci_ei_filtro.php',
		'condicion_funcion_es_activo' => 'componentes/ei_filtro/condicion_funcion_es_activo.php',
		'descripciones_ci' => 'componentes/ei_formulario/descripciones_ci.php',
		'extension_ci' => 'componentes/ei_formulario/extension_ci.php',
		'extension_formulario' => 'componentes/ei_formulario/extension_formulario.php',
		'extension_ci' => 'componentes/ei_formulario_ml/extension_ci.php',
		'extension_formulario' => 'componentes/ei_formulario_ml/extension_formulario.php',
		'extension_ml' => 'componentes/ei_formulario_ml/extension_ml.php',
		'ci_ejemplo_1' => 'componentes/ei_grafico/ci_ejemplo_1.php',
		'ci_ejemplo_1' => 'componentes/ei_mapa/ci_ejemplo_1.php',
		'ci_ocultar_deshabilitar' => 'componentes/eventos/ci_ocultar_deshabilitar.php',
		'control_runtime' => 'componentes/eventos/control_runtime.php',
		'eiform_ocultar_desactivar1' => 'componentes/eventos/eiform_ocultar_desactivar1.php',
		'eiform_ocultar_desactivar2' => 'componentes/eventos/eiform_ocultar_desactivar2.php',
		'extension_ci' => 'componentes/eventos/extension_ci.php',
		'extension_seleccion_evt' => 'componentes/eventos/extension_seleccion_evt.php',
		'filtrado_directo_php' => 'componentes/eventos/filtrado_directo_php.php',
		'filtrado_por_grupo' => 'componentes/eventos/filtrado_por_grupo.php',
		'ci_origen' => 'componentes/eventos/vinculos/ci_origen.php',
		'cuadro_origen' => 'componentes/eventos/vinculos/cuadro_origen.php',
		'pantalla_destino' => 'componentes/eventos/vinculos/pantalla_destino.php',
		'ci_principal' => 'componentes/item_popup/ci_principal.php',
		'ci_gadgets' => 'componentes/toba_gadgets/ci_gadgets.php',
		'pant_prueba_gadgets' => 'componentes/toba_gadgets/pant_prueba_gadgets.php',
		'ci_principal' => 'componentes/uso_del_solo_lectura/ci_principal.php',
		'form_ml_solo_lectura' => 'componentes/uso_del_solo_lectura/form_ml_solo_lectura.php',
		'form_solo_lectura' => 'componentes/uso_del_solo_lectura/form_solo_lectura.php',
		'contexto_ejecucion' => 'contexto_ejecucion.php',
		'toba_referencia_comando' => 'extension_toba/toba_referencia_comando.php',
		'toba_referencia_fuente_datos' => 'extension_toba/toba_referencia_fuente_datos.php',
		'toba_referencia_modelo' => 'extension_toba/toba_referencia_modelo.php',
		'ci_impresion' => 'impresion/ci_impresion.php',
		'Flickr_API' => 'lib/flickr_api.php',
		'Flickr' => 'lib/flickr_api.php',
		'ci_login' => 'login/ci_login.php',
		'cuadro_autologin' => 'login/cuadro_autologin.php',
		'ci_mensajes' => 'mensajes/ci_mensajes.php',
		'form_opciones' => 'mensajes/form_opciones.php',
		'ci_abm_deportes' => 'operaciones_simples/abm_deportes/ci_abm_deportes.php',
		'ci_abm_direcciones' => 'operaciones_simples/abm_direcciones/ci_abm_direcciones.php',
		'ci_abm_juegos' => 'operaciones_simples/abm_juegos/ci_abm_juegos.php',
		'ap_persona_juegos' => 'operaciones_simples/abm_personas/ap_persona_juegos.php',
		'ci_edicion' => 'operaciones_simples/abm_personas/ci_edicion.php',
		'ci_navegacion' => 'operaciones_simples/abm_personas/ci_navegacion.php',
		'dt_persona' => 'operaciones_simples/abm_personas/dt_persona.php',
		'dt_persona_deportes' => 'operaciones_simples/abm_personas/dt_persona_deportes.php',
		'form_persona_deportes' => 'operaciones_simples/abm_personas/form_persona_deportes.php',
		'form_persona_juegos' => 'operaciones_simples/abm_personas/form_persona_juegos.php',
		'consultas' => 'operaciones_simples/consultas.php',
		'ci_reporte_personas' => 'operaciones_simples/reporte_personas/ci_reporte_personas.php',
		'formateo_reporte' => 'operaciones_simples/reporte_personas/ci_reporte_personas.php',
		'php_referencia' => 'php_referencia.php',
		'ci_inscripcion_examen' => 'puntos_de_control/ci_inscripcion_examen.php',
		'ctrl_alumno' => 'puntos_de_control/controles/ctrl_alumno.php',
		'ctrl_comision' => 'puntos_de_control/controles/ctrl_comision.php',
		'ctrl_materia' => 'puntos_de_control/controles/ctrl_materia.php',
		'ctrl_persona' => 'puntos_de_control/controles/ctrl_persona.php',
		'ctrl_persona_1' => 'puntos_de_control/controles/ctrl_persona.php',
		'ctrl_persona_2' => 'puntos_de_control/controles/ctrl_persona.php',
		'ctrl_requisitos' => 'puntos_de_control/controles/ctrl_requisitos.php',
		'ci_servicios' => 'servicios/ci_servicios.php',
		'serv_encriptado_firmado' => 'servicios/serv_encriptado_firmado.php',
		'serv_password' => 'servicios/serv_password.php',
		'serv_sin_seguridad' => 'servicios/serv_sin_seguridad.php',
		'test_ejemplo_caso' => 'testing/test_categoria_prueba/test_ejemplo_caso.php',
		'toba_referencia_autoload' => 'toba_referencia_autoload.php',
		'tp_referencia' => 'tp_referencia.php',
		'pant_introduccion' => 'tutorial/pant_abm_mt.php',
		'pant_def_relacion' => 'tutorial/pant_abm_mt.php',
		'pant_ci_seleccion' => 'tutorial/pant_abm_mt.php',
		'pant_ci_edicion' => 'tutorial/pant_abm_mt.php',
		'de' => 'tutorial/pant_abm_mt.php',
		'pant_introduccion' => 'tutorial/pant_abm_simple.php',
		'pant_definicion' => 'tutorial/pant_abm_simple.php',
		'pant_ci' => 'tutorial/pant_abm_simple.php',
		'pant_fuente' => 'tutorial/pant_api.php',
		'pant_vinculacion' => 'tutorial/pant_api.php',
		'pant_memoria' => 'tutorial/pant_api.php',
		'pant_logger' => 'tutorial/pant_api.php',
		'pant_mensajes' => 'tutorial/pant_api.php',
		'pant_definicion' => 'tutorial/pant_ci.php',
		'pant_ejemplo' => 'tutorial/pant_ci.php',
		'pant_video' => 'tutorial/pant_ci.php',
		'pant_eventos' => 'tutorial/pant_ci.php',
		'ci_abm_direcciones' => 'tutorial/pant_ci.php',
		'pant_configuracion' => 'tutorial/pant_ci.php',
		'a' => 'tutorial/pant_ci.php',
		'pant_sesion' => 'tutorial/pant_ci.php',
		'ci_abm_direcciones' => 'tutorial/pant_ci.php',
		'pant_navegacion' => 'tutorial/pant_ci.php',
		'pant_concepto' => 'tutorial/pant_componentes.php',
		'pant_tipos' => 'tutorial/pant_componentes.php',
		'son' => 'tutorial/pant_componentes.php',
		'pant_creacion' => 'tutorial/pant_componentes.php',
		'pant_extension' => 'tutorial/pant_componentes.php',
		'ci_pago' => 'tutorial/pant_componentes.php',
		'pant_masinfo' => 'tutorial/pant_componentes.php',
		'pant_video_extension' => 'tutorial/pant_componentes.php',
		'pant_introduccion' => 'tutorial/pant_cuadros.php',
		'pant_conf_eventos' => 'tutorial/pant_cuadros.php',
		'pant_definicion' => 'tutorial/pant_cuadros.php',
		'pant_filtros' => 'tutorial/pant_cuadros.php',
		'pant_paginado' => 'tutorial/pant_cuadros.php',
		'pant_cortes' => 'tutorial/pant_cuadros.php',
		'pant_introduccion' => 'tutorial/pant_editor.php',
		'pant_acceso' => 'tutorial/pant_editor.php',
		'pant_items' => 'tutorial/pant_editor.php',
		'pant_prev' => 'tutorial/pant_editor.php',
		'pant_instancia' => 'tutorial/pant_editor.php',
		'pant_introduccion' => 'tutorial/pant_formularios.php',
		'pant_tipos' => 'tutorial/pant_formularios.php',
		'pant_definicion' => 'tutorial/pant_formularios.php',
		'pant_opciones' => 'tutorial/pant_formularios.php',
		'pant_ml' => 'tutorial/pant_formularios.php',
		'pant_masinfo' => 'tutorial/pant_formularios.php',
		'pant_definicion' => 'tutorial/pant_introduccion.php',
		'pant_directorios' => 'tutorial/pant_introduccion.php',
		'pant_ejecucion' => 'tutorial/pant_introduccion.php',
		'pant_administracion' => 'tutorial/pant_introduccion.php',
		'ci_items' => 'tutorial/pant_items.php',
		'pant_definicion' => 'tutorial/pant_items.php',
		'pant_creacion' => 'tutorial/pant_items.php',
		'pant_php_plano' => 'tutorial/pant_items.php',
		'pant_masinfo' => 'tutorial/pant_items.php',
		'pant_introduccion' => 'tutorial/pant_javascript.php',
		'ci_X' => 'tutorial/pant_javascript.php',
		'pant_eventos' => 'tutorial/pant_javascript.php',
		'pant_metodos' => 'tutorial/pant_javascript.php',
		'pant_definicion' => 'tutorial/pant_persistencia.php',
		'pant_inmediata' => 'tutorial/pant_persistencia.php',
		'pant_marco' => 'tutorial/pant_persistencia.php',
		'pant_def_tablas' => 'tutorial/pant_persistencia.php',
		'pant_relaciones' => 'tutorial/pant_persistencia.php',
		'pant_def_relaciones' => 'tutorial/pant_persistencia.php',
		'pant_carga' => 'tutorial/pant_persistencia.php',
		'pant_api' => 'tutorial/pant_persistencia.php',
		'pant_sincronizacion' => 'tutorial/pant_persistencia.php',
		'pant_masinfo' => 'tutorial/pant_persistencia.php',
		'pant_tutorial' => 'tutorial/pant_tutorial.php',
		'pant_agenda' => 'tutorial/pant_tutorial.php',
		'tp_tutorial' => 'tutorial/tp_tutorial.php',
		'zona_tutorial' => 'tutorial/zona_tutorial.php',
		'ci_derechos' => 'varios/ci_derechos.php',
		'ci_memoria' => 'varios/ci_memoria.php',
		'ci_uso_del_menu' => 'varios/uso_del_menu/ci_uso_del_menu.php',
		'ci_personas' => 'zona/ci_personas.php',
	);
}
?>