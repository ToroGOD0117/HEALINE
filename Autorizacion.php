<?php
/**
 * @access public
 * @author Aprendiz
 */
class Autorizacion {
	/**
	 * @AttributeType int
	 */
	public $_id_Autorizacion;
	/**
	 * @AttributeType string
	 */
	public $_estado;
	/**
	 * @AttributeType string
	 */
	public $_fechaAutorizacion;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function Solicitar_Autorizacion() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function RevisarSolicitudesPendientes() {
		// Not yet implemented
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aId_Autorizacion
	 *  * @ParamType aId_Autorizacion int
	 *  * /
	 * @access public
	 * @param int aId_Autorizacion
	 * @ParamType aId_Autorizacion int
	 */
	public function setId_Autorizacion($aId_Autorizacion) {
		$this->_id_Autorizacion = $aId_Autorizacion;
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
	public function getId_Autorizacion() {
		return $this->_id_Autorizacion;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aEstado
	 *  * @ParamType aEstado string
	 *  * /
	 * @access public
	 * @param string aEstado
	 * @ParamType aEstado string
	 */
	public function setEstado($aEstado) {
		$this->_estado = $aEstado;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @return string
	 *  * @ReturnType string
	 *  * /
	 * @access public
	 * @return string
	 * @ReturnType string
	 */
	public function getEstado() {
		return $this->_estado;
	}
}
?>