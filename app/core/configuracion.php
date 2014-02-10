<?php
namespace core;

class Configuracion {
	
	public static $controlador_por_defecto = 'Inicio';
	
	public static $metodo_por_defecto = 'index';
	
	public static $plantilla_por_defecto = 'plantilla_principal';
	
	public static $sesion_minutos_inactividad = 20; // Minutos
	
	public static $sesion_minutos_maxima_duracion = 120;
	
	public static $url_amigable = true;
	
	
	
	public static $https_login = false;
	public static $form_login_catcha = false;
	public static $form_insertar_externo_catcha = false;
	
	
	
	/**
	 *
	 * @var string Tipo MIME utilizado por defecto.
	 */
	public static $tipo_mime_por_defecto = 'text/html';
	
	/**
	 *
	 * @var array = Colección de tipos MIME soportados por esta aplicación. 
	 */
	public static $tipos_mime_reconocidos = array(
		'text/html', 'text/xml', 'text/json', 'application/excel', 
	);
	
	
	// localhost
	/**
	 *
	 * @var array= Collecion de datos para iniciar sesion en MySQL desde localhost
	 * 
	 */
	public static $db = array(
		'server'   => 'localhost',
		'user'     => 'root',
		'password' => '', //en mi casa root no tiene pass, en clase si
		'db_name'  => 'daw2_table_crud',
		'prefix_'  => 'daw2_'
	);
	
	
	/**
	 *
	 * @var array= Collecion de datos para iniciar sesion en MySQL desde hostinger
	 * 
	 */
	
	//hostinger
//	public static $db = array(
//		'server'   => 'mysql.hostinger.es',
//		'user'     => 'u873588124_daw2',
//		'password' => 'lopvelal_',
//		'db_name'   => 'u873588124_daw2',
//		'prefix_'  => 'daw2_'
//	);
	
	
	
} // Fin de la clase 
