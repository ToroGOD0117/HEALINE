<?php
require_once(realpath(dirname(__FILE__)) . '/HistoriaMedica.php');
require_once(realpath(dirname(__FILE__)) . '/Examenes.php');
require_once(realpath(dirname(__FILE__)) . '/AgendaMedica.php');
require_once(realpath(dirname(__FILE__)) . '/Usuarios.php');

use HistoriaMedica;
use Examenes;
use AgendaMedica;
use Usuarios;

/**
 * @access public
 * @author Aprendiz
 */
class Paciente extends AgendaMedica {
	/**
	 * @AttributeType int
	 */
	public $_id_Paciente;
	/**
	 * @AttributeType string
	 */
	public $_tipo_Documento;
	/**
	 * @AttributeType string
	 */
	public $_sede_Afiliado;
	/**
	 * @AttributeType HistoriaMedica
	 * /**
	 *  * @AssociationType HistoriaMedica
	 *  * /
	 */
	public $_unnamed_HistoriaMedica_;
	/**
	 * @AttributeType Examenes
	 * /**
	 *  * @AssociationType Examenes
	 *  * @AssociationKind Aggregation
	 *  * /
	 */
	public $_unnamed_Examenes_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function VerHistoriaMedica() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function SolicitarCita() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function agendarCita() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function consultarCitas() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function verResultadosExamenes() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function realizarPago() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function crear_paciente() {
		// Not yet implemented
	}

	/**
	 * @access public
	 */
	public function actualizar_paciente() {
		// Not yet implemented
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
	 *  * @param string aTipo_Documento
	 *  * @ParamType aTipo_Documento string
	 *  * /
	 * @access public
	 * @param string aTipo_Documento
	 * @ParamType aTipo_Documento string
	 */
	public function setTipo_Documento($aTipo_Documento) {
		$this->_tipo_Documento = $aTipo_Documento;
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
	public function getTipo_Documento() {
		return $this->_tipo_Documento;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aSede_Afiliado
	 *  * @ParamType aSede_Afiliado string
	 *  * /
	 * @access public
	 * @param string aSede_Afiliado
	 * @ParamType aSede_Afiliado string
	 */
	public function setSede_Afiliado($aSede_Afiliado) {
		$this->_sede_Afiliado = $aSede_Afiliado;
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
	public function getSede_Afiliado() {
		return $this->_sede_Afiliado;
	}
}
?>