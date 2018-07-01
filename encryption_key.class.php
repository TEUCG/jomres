<?php
// Do NOT delete this file, otherwise you will not be able to decrypt guest data
class encryption_key 
{
	public function __construct()
	{
		$this->key = "def00000862519d3b26bb0d48414523719549120e475b5666db799e7962c706a689d953fdf4ca423048aa21af9c4437a00ea9ed16523aeb783ddbf65021c7450170fd586";
	}
	
	public function get_key() 
	{
		if ( !isset($this->key) || $this->key == "" ) {
			throw new Exception("Encryption key not saved");
		}
		return $this->key;
	}
}
