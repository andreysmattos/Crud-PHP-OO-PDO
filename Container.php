<?php

class Container {
	public static function getBanco(){
		return new Banco('localhost', 'loja_paulo', 'root', '');
	}
}