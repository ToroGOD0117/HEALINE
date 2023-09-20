<?php
/**
 * @access public
 * @author Aprendiz
 */
class PQRS {
	/**
	 * @AttributeType int
	 */
	public $_id_PQRS;
	/**
	 * @AttributeType string
	 */
	private $_nombreusuario;
	/**
	 * @AttributeType string
	 */
	private $_queja;
	/**
	 * @AttributeType string
	 */
	private $_tipo_PQRS;
	/**
	 * @AttributeType string
	 */
	private $_email;
	/**
	 * @AttributeType string
	 */
	private $_telefono;
	/**
	 * @AttributeType int
	 */
	private $_idSecretaria;
	/**
	 * @AttributeType int
	 */
	private $_estadoPQRS;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function RegistrarPQRS() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function ResponderPQRS() {
		// Not yet implemented
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aId_PQRS
	 *  * @ParamType aId_PQRS int
	 *  * /
	 * @access public
	 * @param int aId_PQRS
	 * @ParamType aId_PQRS int
	 */
	public function setId_PQRS($aId_PQRS) {
		$this->_id_PQRS = $aId_PQRS;
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
	public function getId_PQRS() {
		return $this->_id_PQRS;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aNombreusuario
	 *  * @ParamType aNombreusuario string
	 *  * /
	 * @access public
	 * @param string aNombreusuario
	 * @ParamType aNombreusuario string
	 */
	public function setNombreusuario($aNombreusuario) {
		$this->_nombreusuario = $aNombreusuario;
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
	public function getNombreusuario() {
		return $this->_nombreusuario;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aQueja
	 *  * @ParamType aQueja string
	 *  * /
	 * @access public
	 * @param string aQueja
	 * @ParamType aQueja string
	 */
	public function setQueja($aQueja) {
		$this->_queja = $aQueja;
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
	public function getQueja() {
		return $this->_queja;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aTipo_PQRS
	 *  * @ParamType aTipo_PQRS string
	 *  * /
	 * @access public
	 * @param string aTipo_PQRS
	 * @ParamType aTipo_PQRS string
	 */
	public function setTipo_PQRS($aTipo_PQRS) {
		$this->_tipo_PQRS = $aTipo_PQRS;
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
	public function getTipo_PQRS() {
		return $this->_tipo_PQRS;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aEmail
	 *  * @ParamType aEmail string
	 *  * /
	 * @access public
	 * @param string aEmail
	 * @ParamType aEmail string
	 */
	public function setEmail($aEmail) {
		$this->_email = $aEmail;
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
	public function getEmail() {
		return $this->_email;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aTelefono
	 *  * @ParamType aTelefono string
	 *  * /
	 * @access public
	 * @param string aTelefono
	 * @ParamType aTelefono string
	 */
	public function setTelefono($aTelefono) {
		$this->_telefono = $aTelefono;
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
	public function getTelefono() {
		return $this->_telefono;
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
	 *  * @param int aEstadoPQRS
	 *  * @ParamType aEstadoPQRS int
	 *  * /
	 * @access public
	 * @param int aEstadoPQRS
	 * @ParamType aEstadoPQRS int
	 */
	public function setEstadoPQRS($aEstadoPQRS) {
		$this->_estadoPQRS = $aEstadoPQRS;
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
	public function getEstadoPQRS() {
		return $this->_estadoPQRS;
	}
}
?>