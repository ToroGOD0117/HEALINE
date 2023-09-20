<?php
require_once(realpath(dirname(__FILE__)) . '/AgendaMedica.php');
require_once(realpath(dirname(__FILE__)) . '/Usuarios.php');

use AgendaMedica;
use Usuarios;

/**
 * @access public
 * @author Aprendiz
 */
class Administrador extends Usuarios {
	/**
	 * @AttributeType int
	 */
	private $_idAdministrador;
	/**
	 * @AttributeType int
	 */
	private $_documento;
	/**
	 * @AttributeType AgendaMedica
	 * /**
	 *  * @AssociationType AgendaMedica
	 *  * /
	 */
	public $_unnamed_AgendaMedica_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function CrearUsuario() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function ElimarUsuario() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function ModificarPermisos() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function asignarRol() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function editarUsuario() {
		// Not yet implemented
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aIdAdministrador
	 *  * @ParamType aIdAdministrador int
	 *  * /
	 * @access public
	 * @param int aIdAdministrador
	 * @ParamType aIdAdministrador int
	 */
	public function setIdAdministrador($aIdAdministrador) {
		$this->_idAdministrador = $aIdAdministrador;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @return int
	 *  * @ReturnType int
	 *  * /
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getIdAdministrador() {
		return $this->_idAdministrador;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aDocumento
	 *  * @ParamType aDocumento int
	 *  * /
	 * @access public
	 * @param int aDocumento
	 * @ParamType aDocumento int
	 */
	public function setDocumento($aDocumento) {
		$this->_documento = $aDocumento;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @return int
	 *  * @ReturnType int
	 *  * /
	 * @access public
	 * @return int
	 * @ReturnType int
	 */
	public function getDocumento() {
		return $this->_documento;
	}
}
?>