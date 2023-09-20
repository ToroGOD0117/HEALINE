<?php
require_once(realpath(dirname(__FILE__)) . '/Paciente.php');
require_once(realpath(dirname(__FILE__)) . '/Orden_Medica.php');

use Paciente;
use Orden_Medica;

/**
 * @access public
 * @author Aprendiz
 */
class HistoriaMedica {
	/**
	 * @AttributeType int
	 */
	public $_id_HistoriaMedica;
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
	private $_fecha;
	/**
	 * @AttributeType string
	 */
	private $_diagnostico;
	/**
	 * @AttributeType string
	 */
	private $_lugar;
	/**
	 * @AttributeType string
	 */
	private $_descripcion;
	/**
	 * @AttributeType Paciente
	 * /**
	 *  * @AssociationType Paciente
	 *  * @AssociationKind Composition
	 *  * /
	 */
	public $_unnamed_Paciente_;
	/**
	 * @AttributeType Orden_Medica
	 * /**
	 *  * @AssociationType Orden_Medica
	 *  * @AssociationKind Aggregation
	 *  * /
	 */
	public $_unnamed_Orden_Medica_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function AgregarDiagnostico() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function AgregarReceta() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function registrarTratamiento() {
		// Not yet implemented
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aId_HistoriaMedica
	 *  * @ParamType aId_HistoriaMedica int
	 *  * /
	 * @access public
	 * @param int aId_HistoriaMedica
	 * @ParamType aId_HistoriaMedica int
	 */
	public function setId_HistoriaMedica($aId_HistoriaMedica) {
		$this->_id_HistoriaMedica = $aId_HistoriaMedica;
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
	public function getId_HistoriaMedica() {
		return $this->_id_HistoriaMedica;
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
	 *  * @param string aFecha
	 *  * @ParamType aFecha string
	 *  * /
	 * @access public
	 * @param string aFecha
	 * @ParamType aFecha string
	 */
	public function setFecha($aFecha) {
		$this->_fecha = $aFecha;
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
	public function getFecha() {
		return $this->_fecha;
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
	 *  * @param string aLugar
	 *  * @ParamType aLugar string
	 *  * /
	 * @access public
	 * @param string aLugar
	 * @ParamType aLugar string
	 */
	public function setLugar($aLugar) {
		$this->_lugar = $aLugar;
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
	public function getLugar() {
		return $this->_lugar;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aDescripcion
	 *  * @ParamType aDescripcion string
	 *  * /
	 * @access public
	 * @param string aDescripcion
	 * @ParamType aDescripcion string
	 */
	public function setDescripcion($aDescripcion) {
		$this->_descripcion = $aDescripcion;
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
	public function getDescripcion() {
		return $this->_descripcion;
	}
}
?>