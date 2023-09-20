<?php
require_once(realpath(dirname(__FILE__)) . '/Factura.php');

use Factura;

/**
 * @access public
 * @author Aprendiz
 */
class Pago {
	/**
	 * @AttributeType int
	 */
	public $_id_Pago;
	/**
	 * @AttributeType string
	 */
	public $_metodo_Pago;
	/**
	 * @AttributeType float
	 */
	public $_monto;
	/**
	 * @AttributeType string
	 */
	public $_fecha_Generada;
	/**
	 * @AttributeType int
	 */
	public $_idFactura;
	private $_attribute;
	/**
	 * @AttributeType Factura
	 * /**
	 *  * @AssociationType Factura
	 *  * @AssociationKind Composition
	 *  * /
	 */
	public $_unnamed_Factura_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function RegistrarPago() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function actualizar_pago() {
		// Not yet implemented
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aId_Pago
	 *  * @ParamType aId_Pago int
	 *  * /
	 * @access public
	 * @param int aId_Pago
	 * @ParamType aId_Pago int
	 */
	public function setId_Pago($aId_Pago) {
		$this->_id_Pago = $aId_Pago;
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
	public function getId_Pago() {
		return $this->_id_Pago;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aMetodo_Pago
	 *  * @ParamType aMetodo_Pago string
	 *  * /
	 * @access public
	 * @param string aMetodo_Pago
	 * @ParamType aMetodo_Pago string
	 */
	public function setMetodo_Pago($aMetodo_Pago) {
		$this->_metodo_Pago = $aMetodo_Pago;
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
	public function getMetodo_Pago() {
		return $this->_metodo_Pago;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param float aMonto
	 *  * @ParamType aMonto float
	 *  * /
	 * @access public
	 * @param float aMonto
	 * @ParamType aMonto float
	 */
	public function setMonto($aMonto) {
		$this->_monto = $aMonto;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @return float
	 *  * @ReturnType float
	 *  * /
	 * @access public
	 * @return float
	 * @ReturnType float
	 */
	public function getMonto() {
		return $this->_monto;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aFecha_Generada
	 *  * @ParamType aFecha_Generada string
	 *  * /
	 * @access public
	 * @param string aFecha_Generada
	 * @ParamType aFecha_Generada string
	 */
	public function setFecha_Generada($aFecha_Generada) {
		$this->_fecha_Generada = $aFecha_Generada;
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
	public function getFecha_Generada() {
		return $this->_fecha_Generada;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param int aIdFactura
	 *  * @ParamType aIdFactura int
	 *  * /
	 * @access public
	 * @param int aIdFactura
	 * @ParamType aIdFactura int
	 */
	public function setIdFactura($aIdFactura) {
		$this->_idFactura = $aIdFactura;
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
	public function getIdFactura() {
		return $this->_idFactura;
	}
}
?>