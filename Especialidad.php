<?php
require_once(realpath(dirname(__FILE__)) . '/Medico.php');

use Medico;

/**
 * @access public
 * @author Aprendiz
 */
class Especialidad {
	/**
	 * @AttributeType string
	 */
	public $_nombreEsp;
	/**
	 * @AttributeType string
	 */
	public $_descripción;
	/**
	 * @AttributeType int
	 */
	public $_idEspecialidad;
	/**
	 * @AttributeType Medico
	 * /**
	 *  * @AssociationType Medico
	 *  * /
	 */
	public $_unnamed_Medico_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function getEspecialidadId() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function getVerDetalles_de_especialidad() {
		// Not yet implemented
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aNombreEsp
	 *  * @ParamType aNombreEsp string
	 *  * /
	 * @access public
	 * @param string aNombreEsp
	 * @ParamType aNombreEsp string
	 */
	public function setNombreEsp($aNombreEsp) {
		$this->_nombreEsp = $aNombreEsp;
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
	public function getNombreEsp() {
		return $this->_nombreEsp;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aDescripción
	 *  * @ParamType aDescripción string
	 *  * /
	 * @access public
	 * @param string aDescripción
	 * @ParamType aDescripción string
	 */
	public function setDescripción($aDescripción) {
		$this->_descripción = $aDescripción;
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
	public function getDescripción() {
		return $this->_descripción;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aIdEspecialidad
	 *  * @ParamType aIdEspecialidad int
	 *  * /
	 * @access public
	 * @param int aIdEspecialidad
	 * @ParamType aIdEspecialidad int
	 */
	public function setIdEspecialidad($aIdEspecialidad) {
		$this->_idEspecialidad = $aIdEspecialidad;
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
	public function getIdEspecialidad() {
		return $this->_idEspecialidad;
	}
}
?>