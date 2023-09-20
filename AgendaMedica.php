<?php
require_once(realpath(dirname(__FILE__)) . '/Administrador.php');
require_once(realpath(dirname(__FILE__)) . '/Cita.php');

use Administrador;
use Cita;

/**
 * @access public
 * @author Aprendiz
 */
class AgendaMedica {
	/**
	 * @AttributeType int
	 */
	private $_id_Agenda;
	/**
	 * @AttributeType int
	 */
	private $_id_Medico;
	/**
	 * @AttributeType string
	 */
	private $_horariosDisponibles;
	/**
	 * @AttributeType string
	 */
	private $_fecha;
	/**
	 * @AttributeType string
	 */
	private $_sede;
	/**
	 * @AttributeType string
	 */
	private $_citasProgramadas;
	/**
	 * @AttributeType int
	 */
	private $_idSecretaria;
	/**
	 * @AttributeType int
	 */
	private $_idAdministrador;
	/**
	 * @AttributeType Administrador
	 * /**
	 *  * @AssociationType Administrador
	 *  * /
	 */
	public $_unnamed_Administrador_;
	/**
	 * @AttributeType Cita
	 * /**
	 *  * @AssociationType Cita
	 *  * @AssociationKind Aggregation
	 *  * /
	 */
	public $_unnamed_Cita_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function ProgemarCita() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function ConsultarCitasMedicas() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @param aR
	 * @return void
	 * 
	 * @ReturnType void
	 */
	public function VerificarDisponibilidadDoctor($aR) {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function cancelarCita() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function modificarCitas() {
		// Not yet implemented
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aId_Agenda
	 *  * @ParamType aId_Agenda int
	 *  * /
	 * @access public
	 * @param int aId_Agenda
	 * @ParamType aId_Agenda int
	 */
	public function setId_Agenda($aId_Agenda) {
		$this->_id_Agenda = $aId_Agenda;
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
	public function getId_Agenda() {
		return $this->_id_Agenda;
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
	 *  * @param string aHorariosDisponibles
	 *  * @ParamType aHorariosDisponibles string
	 *  * /
	 * @access public
	 * @param string aHorariosDisponibles
	 * @ParamType aHorariosDisponibles string
	 */
	public function setHorariosDisponibles($aHorariosDisponibles) {
		$this->_horariosDisponibles = $aHorariosDisponibles;
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
	public function getHorariosDisponibles() {
		return $this->_horariosDisponibles;
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
	 *  * @param string aSede
	 *  * @ParamType aSede string
	 *  * /
	 * @access public
	 * @param string aSede
	 * @ParamType aSede string
	 */
	public function setSede($aSede) {
		$this->_sede = $aSede;
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
	public function getSede() {
		return $this->_sede;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aCitasProgramadas
	 *  * @ParamType aCitasProgramadas string
	 *  * /
	 * @access public
	 * @param string aCitasProgramadas
	 * @ParamType aCitasProgramadas string
	 */
	public function setCitasProgramadas($aCitasProgramadas) {
		$this->_citasProgramadas = $aCitasProgramadas;
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
	public function getCitasProgramadas() {
		return $this->_citasProgramadas;
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
}
?>