<?php
require_once(realpath(dirname(__FILE__)) . '/Usuarios.php');

use Usuarios;

/**
 * @access public
 * @author Aprendiz
 */
class Secretaria_ extends Usuarios {
	/**
	 * @AttributeType int
	 */
	public $_idSecretaria;
	/**
	 * @AttributeType string
	 */
	private $_horarioLaboral;
	private $_attribute;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function RegistrarPaciente() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function AgendarCitaMedica() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function BuscarDisponibilidadDoctor() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function verAgenda() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function actualizarInformacionPaciente() {
		// Not yet implemented
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aIdSecretaria
	 *  * @ParamType aIdSecretaria int
	 *  * /
	 * @access public
	 * @param int aIdSecretaria
	 * @ParamType aIdSecretaria int
	 */
	public function setIdSecretaria($aIdSecretaria) {
		$this->_idSecretaria = $aIdSecretaria;
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
	public function getIdSecretaria() {
		return $this->_idSecretaria;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aHorarioLaboral
	 *  * @ParamType aHorarioLaboral string
	 *  * /
	 * @access public
	 * @param string aHorarioLaboral
	 * @ParamType aHorarioLaboral string
	 */
	public function setHorarioLaboral($aHorarioLaboral) {
		$this->_horarioLaboral = $aHorarioLaboral;
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
	public function getHorarioLaboral() {
		return $this->_horarioLaboral;
	}
}
?>