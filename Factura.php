<?php
require_once(realpath(dirname(__FILE__)) . '/Pago.php');
require_once(realpath(dirname(__FILE__)) . '/Cita.php');

use Pago;
use Cita;

/**
 * @access public
 * @author Aprendiz
 */
class Factura {
	/**
	 * @AttributeType int
	 */
	public $_idFactura;
	/**
	 * @AttributeType string
	 */
	private $_fechaCreacion;
	/**
	 * @AttributeType string
	 */
	private $_horaCreacion;
	/**
	 * @AttributeType float
	 */
	private $_valorTotal;
	/**
	 * @AttributeType float
	 */
	private $_impuestos;
	/**
	 * @AttributeType Pago
	 * /**
	 *  * @AssociationType Pago
	 *  * /
	 */
	public $_unnamed_Pago_;
	/**
	 * @AttributeType Cita
	 * /**
	 *  * @AssociationType Cita
	 *  * /
	 */
	public $_unnamed_Cita_;

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function GenerarFactura() {
		// Not yet implemented
	}

	/**
	 * @access public
	 * @return void
	 * @ReturnType void
	 */
	public function actualizar_factura() {
		// Not yet implemented
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

	/**
	 * /**
	 *  * @access public
	 *  * @param string aFechaCreacion
	 *  * @ParamType aFechaCreacion string
	 *  * /
	 * @access public
	 * @param string aFechaCreacion
	 * @ParamType aFechaCreacion string
	 */
	public function setFechaCreacion($aFechaCreacion) {
		$this->_fechaCreacion = $aFechaCreacion;
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
	public function getFechaCreacion() {
		return $this->_fechaCreacion;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param string aHoraCreacion
	 *  * @ParamType aHoraCreacion string
	 *  * /
	 * @access public
	 * @param string aHoraCreacion
	 * @ParamType aHoraCreacion string
	 */
	public function setHoraCreacion($aHoraCreacion) {
		$this->_horaCreacion = $aHoraCreacion;
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
	public function getHoraCreacion() {
		return $this->_horaCreacion;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param float aValorTotal
	 *  * @ParamType aValorTotal float
	 *  * /
	 * @access public
	 * @param float aValorTotal
	 * @ParamType aValorTotal float
	 */
	public function setValorTotal($aValorTotal) {
		$this->_valorTotal = $aValorTotal;
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
	public function getValorTotal() {
		return $this->_valorTotal;
	}

	/**
	 * /**
	 *  * @access public
	 *  * @param float aImpuestos
	 *  * @ParamType aImpuestos float
	 *  * /
	 * @access public
	 * @param float aImpuestos
	 * @ParamType aImpuestos float
	 */
	public function setImpuestos($aImpuestos) {
		$this->_impuestos = $aImpuestos;
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
	public function getImpuestos() {
		return $this->_impuestos;
	}
}
?>