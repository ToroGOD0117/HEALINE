<?php
require_once(realpath(dirname(__FILE__)) . '/HistoriaMedica.php');

use HistoriaMedica;

/**
 * @access public
 * @author Aprendiz
 */
class Orden_Medica {
	/**
	 * @AttributeType int
	 */
	public $_id_Orden_Medica;
	/**
	 * @AttributeType int
	 */
	public $_id_Medico;
	/**
	 * @AttributeType int
	 */
	public $_id_Paciente;
	/**
	 * @AttributeType string
	 */
	private $_diagnostico;
	/**
	 * @AttributeType float
	 */
	private $_precio;
	/**
	 * @AttributeType HistoriaMedica
	 * /**
	 *  * @AssociationType HistoriaMedica
	 *  * /
	 */
	public $_unnamed_HistoriaMedica_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function AgregarTratamiento() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function VerDetalles() {
		// Not yet implemented
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aId_Orden_Medica
	 *  * @ParamType aId_Orden_Medica int
	 *  * /
	 * @access public
	 * @param int aId_Orden_Medica
	 * @ParamType aId_Orden_Medica int
	 */
	public function setId_Orden_Medica($aId_Orden_Medica) {
		$this->_id_Orden_Medica = $aId_Orden_Medica;
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
	public function getId_Orden_Medica() {
		return $this->_id_Orden_Medica;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aId_Medico
	 *  * @ParamType aId_Medico int
	 *  * /
	 * @access public
	 * @param int aId_Medico
	 * @ParamType aId_Medico int
	 */
	public function setId_Medico($aId_Medico) {
		$this->_id_Medico = $aId_Medico;
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
	public function getId_Medico() {
		return $this->_id_Medico;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aId_Paciente
	 *  * @ParamType aId_Paciente int
	 *  * /
	 * @access public
	 * @param int aId_Paciente
	 * @ParamType aId_Paciente int
	 */
	public function setId_Paciente($aId_Paciente) {
		$this->_id_Paciente = $aId_Paciente;
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
	public function getId_Paciente() {
		return $this->_id_Paciente;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aDiagnostico
	 *  * @ParamType aDiagnostico string
	 *  * /
	 * @access public
	 * @param string aDiagnostico
	 * @ParamType aDiagnostico string
	 */
	public function setDiagnostico($aDiagnostico) {
		$this->_diagnostico = $aDiagnostico;
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
	public function getDiagnostico() {
		return $this->_diagnostico;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param float aPrecio
	 *  * @ParamType aPrecio float
	 *  * /
	 * @access public
	 * @param float aPrecio
	 * @ParamType aPrecio float
	 */
	public function setPrecio($aPrecio) {
		$this->_precio = $aPrecio;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @return float
	 *  * @ReturnType float
	 *  * /
	 * @access public
	 * @return float
	 * @ReturnType float
	 */
	public function getPrecio() {
		return $this->_precio;
	}
}
?>