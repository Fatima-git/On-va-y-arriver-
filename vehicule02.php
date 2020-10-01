<?php

abstract Class Vehicule
{
	public $type;

	public function __construct( $type )
	{
		$this->type = $type;
	}


	public function deplacer()
	{
		echo "je suis ".$this->type."<br>";
		echo "je me deplace<br>";
	}

	public function arreter()
	{
		echo "je suis ".$this->type."<br>";
		echo "je m'arrete<br>";
	}


	abstract public function freiner();
	
}


Class Voiture extends Vehicule
{
	public function __construct()
	{
		parent::__construct(  "une voiture"  );
	}

	public function deplacer()
	{
		parent::deplacer();
		echo "je roule<br>";
	}

	public function arreter()
	{
		parent::arreter();
		echo "j'appuie sur le frein<br>";
	}

	public function freiner()
	{}
}

Class Bateau extends Vehicule
{
	public function __construct()
	{
		parent::__construct(  "un bateau"  );
	}

	public function deplacer()
	{
		parent::deplacer();
		echo "je vogue<br>";
	}

	public function arreter()
	{
		parent::arreter();
		echo "je jette l'ancre<br>";
	}
	public function freiner()
	{}
}



$voiture = new Voiture();
$voiture->deplacer();
// je suis une voiture
// je me déplace
// je roule

$bateau = new Bateau();
$bateau->deplacer();
// je suis un bateau
// je me déplace
// je vogue

echo "<br>";


$voiture->arreter();
$bateau->arreter();

































?>