<?php
/**
 * @access public
 * @author Aprendiz
 */
class Usuarios {
	/**
	 * @AttributeType string
	 */
	public $_nombre1;
	/**
	 * @AttributeType string
	 */
	public $_nombre2;
	/**
	 * @AttributeType string
	 */
	public $_apellido1;
	/**
	 * @AttributeType string
	 */
	public $_apellido2;
	/**
	 * @AttributeType string
	 */
	public $_rol;
	/**
	 * @AttributeType string
	 */
	public $_email;
	/**
	 * @AttributeType int
	 */
	public $_telefono;
	/**
	 * @AttributeType string
	 */
	public $_contraseña;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function CambiarContraseña() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function VerPerfil() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function ActualizarInformacion() {
		// Not yet implemented
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aNombre1
	 *  * @ParamType aNombre1 string
	 *  * /
	 * @access public
	 * @param string aNombre1
	 * @ParamType aNombre1 string
	 */
	public function setNombre1($aNombre1) {
		$this->_nombre1 = $aNombre1;
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
	public function getNombre1() {
		return $this->_nombre1;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aNombre2
	 *  * @ParamType aNombre2 string
	 *  * /
	 * @access public
	 * @param string aNombre2
	 * @ParamType aNombre2 string
	 */
	public function setNombre2($aNombre2) {
		$this->_nombre2 = $aNombre2;
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
	public function getNombre2() {
		return $this->_nombre2;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aApellido1
	 *  * @ParamType aApellido1 string
	 *  * /
	 * @access public
	 * @param string aApellido1
	 * @ParamType aApellido1 string
	 */
	public function setApellido1($aApellido1) {
		$this->_apellido1 = $aApellido1;
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
	public function getApellido1() {
		return $this->_apellido1;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aApellido2
	 *  * @ParamType aApellido2 string
	 *  * /
	 * @access public
	 * @param string aApellido2
	 * @ParamType aApellido2 string
	 */
	public function setApellido2($aApellido2) {
		$this->_apellido2 = $aApellido2;
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
	public function getApellido2() {
		return $this->_apellido2;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aRol
	 *  * @ParamType aRol string
	 *  * /
	 * @access public
	 * @param string aRol
	 * @ParamType aRol string
	 */
	public function setRol($aRol) {
		$this->_rol = $aRol;
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
	public function getRol() {
		return $this->_rol;
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
	 *  * @param int aTelefono
	 *  * @ParamType aTelefono int
	 *  * /
	 * @access public
	 * @param int aTelefono
	 * @ParamType aTelefono int
	 */
	public function setTelefono($aTelefono) {
		$this->_telefono = $aTelefono;
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
	public function getTelefono() {
		return $this->_telefono;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aContraseña
	 *  * @ParamType aContraseña string
	 *  * /
	 * @access public
	 * @param string aContraseña
	 * @ParamType aContraseña string
	 */
	public function setContraseña($aContraseña) {
		$this->_contraseña = $aContraseña;
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
	public function getContraseña() {
		return $this->_contraseña;
	}
}
?>