<?php
require_once(realpath(dirname(__FILE__)) . '/Especialidad.php');
require_once(realpath(dirname(__FILE__)) . '/Usuarios.php');

use Especialidad;
use Usuarios;

/**
 * @access public
 * @author Aprendiz
 */
class Medico extends Usuarios {
	/**
	 * @AttributeType int
	 */
	public $_id_Medico;
	/**
	 * @AttributeType int
	 */
	private $_num_Registro;
	/**
	 * @AttributeType string
	 */
	private $_nombreEsp;
	/**
	 * @AttributeType string
	 */
	private $_licenciaMedica;
	/**
	 * @AttributeType int
	 */
	private $_consultorio;
	/**
	 * @AttributeType Especialidad
	 * /**
	 *  * @AssociationType Especialidad
	 *  * @AssociationKind Aggregation
	 *  * /
	 */
	public $_unnamed_Especialidad_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function VerAgenda() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function EmitirOrdenMedica() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function verCitasProgramadas() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function accederHistorialMedico() {
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
	 * @access public
	 */
	public function actualizar_profesional() {
		// Not yet implemented
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
	 *  * @param int aNum_Registro
	 *  * @ParamType aNum_Registro int
	 *  * /
	 * @access public
	 * @param int aNum_Registro
	 * @ParamType aNum_Registro int
	 */
	public function setNum_Registro($aNum_Registro) {
		$this->_num_Registro = $aNum_Registro;
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
	public function getNum_Registro() {
		return $this->_num_Registro;
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
	 *  * @param string aLicenciaMedica
	 *  * @ParamType aLicenciaMedica string
	 *  * /
	 * @access public
	 * @param string aLicenciaMedica
	 * @ParamType aLicenciaMedica string
	 */
	public function setLicenciaMedica($aLicenciaMedica) {
		$this->_licenciaMedica = $aLicenciaMedica;
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
	public function getLicenciaMedica() {
		return $this->_licenciaMedica;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aConsultorio
	 *  * @ParamType aConsultorio int
	 *  * /
	 * @access public
	 * @param int aConsultorio
	 * @ParamType aConsultorio int
	 */
	public function setConsultorio($aConsultorio) {
		$this->_consultorio = $aConsultorio;
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
	public function getConsultorio() {
		return $this->_consultorio;
	}
}
?>