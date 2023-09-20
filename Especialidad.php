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
	public $_descripci�n;
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
	 *  * @param string aDescripci�n
	 *  * @ParamType aDescripci�n string
	 *  * /
	 * @access public
	 * @param string aDescripci�n
	 * @ParamType aDescripci�n string
	 */
	public function setDescripci�n($aDescripci�n) {
		$this->_descripci�n = $aDescripci�n;
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
	public function getDescripci�n() {
		return $this->_descripci�n;
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