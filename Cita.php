<?php
require_once(realpath(dirname(__FILE__)) . '/AgendaMedica.php');
require_once(realpath(dirname(__FILE__)) . '/Factura.php');
require_once(realpath(dirname(__FILE__)) . '/Recordatorios.php');

use AgendaMedica;
use Factura;
use Recordatorios;

/**
 * @access public
 * @author Aprendiz
 */
class Cita {
	/**
	 * @AttributeType int
	 */
	public $_id_Cita;
	/**
	 * @AttributeType string
	 */
	private $_estadoCita;
	/**
	 * @AttributeType string
	 */
	private $_tipoDeConsulta;
	/**
	 * @AttributeType string
	 */
	private $_observacionesCita;
	/**
	 * @AttributeType int
	 */
	private $_idFactura;
	/**
	 * @AttributeType string
	 */
	private $_motivo_cita;
	/**
	 * @AttributeType AgendaMedica
	 * /**
	 *  * @AssociationType AgendaMedica
	 *  * /
	 */
	public $_unnamed_AgendaMedica_;
	/**
	 * @AttributeType Factura
	 * /**
	 *  * @AssociationType Factura
	 *  * /
	 */
	public $_unnamed_Factura_;
	/**
	 * @AttributeType Recordatorios
	 * /**
	 *  * @AssociationType Recordatorios
	 *  * @AssociationKind Aggregation
	 *  * /
	 */
	public $_unnamed_Recordatorios_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function ProgramarCita() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function CancelarCita() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function editarCita() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function actualizarEstadoCita() {
		// Not yet implemented
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
	 *  * @param string aEstadoCita
	 *  * @ParamType aEstadoCita string
	 *  * /
	 * @access public
	 * @param string aEstadoCita
	 * @ParamType aEstadoCita string
	 */
	public function setEstadoCita($aEstadoCita) {
		$this->_estadoCita = $aEstadoCita;
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
	public function getEstadoCita() {
		return $this->_estadoCita;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aTipoDeConsulta
	 *  * @ParamType aTipoDeConsulta string
	 *  * /
	 * @access public
	 * @param string aTipoDeConsulta
	 * @ParamType aTipoDeConsulta string
	 */
	public function setTipoDeConsulta($aTipoDeConsulta) {
		$this->_tipoDeConsulta = $aTipoDeConsulta;
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
	public function getTipoDeConsulta() {
		return $this->_tipoDeConsulta;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aObservacionesCita
	 *  * @ParamType aObservacionesCita string
	 *  * /
	 * @access public
	 * @param string aObservacionesCita
	 * @ParamType aObservacionesCita string
	 */
	public function setObservacionesCita($aObservacionesCita) {
		$this->_observacionesCita = $aObservacionesCita;
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
	public function getObservacionesCita() {
		return $this->_observacionesCita;
	}
}
?>