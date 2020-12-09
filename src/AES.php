<?php
namespace XuDongYss\Secure;

class AES{
	protected $cipher;
	
	/**
	 * 初始化
	 * @param string	$key	根据 KEY 的长短，自动识别 KEY 是 128bit/192bit/256bit
	 * @param string 	$mode
	 */
	public function __construct($key, $mode = 'CBC') {
		$this->cipher = new \phpseclib\Crypt\AES($this->getMode($mode));
		
		$this->cipher->setKey($key);
	}
	
	protected function getMode($mode) {
		switch($mode) {
			case 'CBC':
				return \phpseclib\Crypt\AES::MODE_CBC;
			case 'CTR':
				return \phpseclib\Crypt\AES::MODE_CTR;
			case 'OFB':
				return \phpseclib\Crypt\AES::MODE_OFB;
			case 'CFB':
				return \phpseclib\Crypt\AES::MODE_CFB;
			case 'ECB':
				return \phpseclib\Crypt\AES::MODE_ECB;
		}
	}
	
	public function encrypt($plaintext) {
		return base64_encode($this->cipher->encrypt($plaintext));
	}
	
	public function decrypt($ciphertext) {
		$ciphertext = base64_decode($ciphertext);
		
		return $this->cipher->decrypt($ciphertext);
	}
}