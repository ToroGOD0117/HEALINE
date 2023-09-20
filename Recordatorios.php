<?php
require_once(realpath(dirname(__FILE__)) . '/Cita.php');

use Cita;

/**
 * @access public
 * @author Aprendiz
 */
class Recordatorios {
	/**
	 * @AttributeType int
	 */
	public $_id_Recordatorios;
	/**
	 * @AttributeType string
	 */
	private $_estadoRecordatorio;
	/**
	 * @AttributeType int
	 */
	public $_id_Cita;
	/**
	 * @AttributeType string
	 */
	private $_mensaje;
	/**
	 * @AttributeType string
	 */
	private $_fechaHoraEnvio;
	/**
	 * @AttributeType int
	 */
	private $_id_Paciente;
	/**
	 * @AttributeType Cita
	 * /**
	 *  * @AssociationType Cita
	 *  * /
	 */
	public $_unnamed_Cita_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function ProgramarRecordatorios() {
		// Not yet implemented
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aId_Recordatorios
	 *  * @ParamType aId_Recordatorios int
	 *  * /
	 * @access public
	 * @param int aId_Recordatorios
	 * @ParamType aId_Recordatorios int
	 */
	public function setId_Recordatorios($aId_Recordatorios) {
		$this->_id_Recordatorios = $aId_Recordatorios;
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
	public function getId_Recordatorios() {
		return $this->_id_Recordatorios;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aEstadoRecordatorio
	 *  * @ParamType aEstadoRecordatorio string
	 *  * /
	 * @access public
	 * @param string aEstadoRecordatorio
	 * @ParamType aEstadoRecordatorio string
	 */
	public function setEstadoRecordatorio($aEstadoRecordatorio) {
		$this->_estadoRecordatorio = $aEstadoRecordatorio;
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
	public function getEstadoRecordatorio() {
		return $this->_estadoRecordatorio;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aId_Cita
	 *  * @ParamType aId_Cita int
	 *  * /
	 * @access public
	 * @param int aId_Cita
	 * @ParamType aId_Cita int
	 */
	public function setId_Cita($aId_Cita) {
		$this->_id_Cita = $aId_Cita;
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
	public function getId_Cita() {
		return $this->_id_Cita;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aMensaje
	 *  * @ParamType aMensaje string
	 *  * /
	 * @access public
	 * @param string aMensaje
	 * @ParamType aMensaje string
	 */
	public function setMensaje($aMensaje) {
		$this->_mensaje = $aMensaje;
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
	public function getMensaje() {
		return $this->_mensaje;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aFechaHoraEnvio
	 *  * @ParamType aFechaHoraEnvio string
	 *  * /
	 * @access public
	 * @param string aFechaHoraEnvio
	 * @ParamType aFechaHoraEnvio string
	 */
	public function setFechaHoraEnvio($aFechaHoraEnvio) {
		$this->_fechaHoraEnvio = $aFechaHoraEnvio;
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
	public function getFechaHoraEnvio() {
		return $this->_fechaHoraEnvio;
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
}
?>