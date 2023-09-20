<?php
require_once(realpath(dirname(__FILE__)) . '/Paciente.php');

use Paciente;

/**
 * @access public
 * @author Aprendiz
 */
class Examenes {
	/**
	 * @AttributeType int
	 */
	public $_id_Examenes;
	/**
	 * @AttributeType int
	 */
	public $_id_Pacientes;
	/**
	 * @AttributeType string
	 */
	private $_descripcion;
	/**
	 * @AttributeType string
	 */
	private $_lugar;
	/**
	 * @AttributeType string
	 */
	private $_fechaExamen;
	/**
	 * @AttributeType Paciente
	 * /**
	 *  * @AssociationType Paciente
	 *  * /
	 */
	public $_unnamed_Paciente_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function ObtenerResultados() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function CrearExamenes() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function asociarExamenPaciente() {
		// Not yet implemented
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aId_Examenes
	 *  * @ParamType aId_Examenes int
	 *  * /
	 * @access public
	 * @param int aId_Examenes
	 * @ParamType aId_Examenes int
	 */
	public function setId_Examenes($aId_Examenes) {
		$this->_id_Examenes = $aId_Examenes;
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
	public function getId_Examenes() {
		return $this->_id_Examenes;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aId_Pacientes
	 *  * @ParamType aId_Pacientes int
	 *  * /
	 * @access public
	 * @param int aId_Pacientes
	 * @ParamType aId_Pacientes int
	 */
	public function setId_Pacientes($aId_Pacientes) {
		$this->_id_Pacientes = $aId_Pacientes;
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
	public function getId_Pacientes() {
		return $this->_id_Pacientes;
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
	 *  * @param string aFechaExamen
	 *  * @ParamType aFechaExamen string
	 *  * /
	 * @access public
	 * @param string aFechaExamen
	 * @ParamType aFechaExamen string
	 */
	public function setFechaExamen($aFechaExamen) {
		$this->_fechaExamen = $aFechaExamen;
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
	public function getFechaExamen() {
		return $this->_fechaExamen;
	}
}
?>