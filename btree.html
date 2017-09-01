<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL); 
class Tree {
public $x;
public $l ;
public $r ;
public $max ;

	public function __construct($x)
	{
		$this->x=$x;
		$this->l=NULL;
		$this->r=NULL;
	}
	public function draw($s='')
	{
		echo $s.='_';
		echo $this->x;	
		echo '<br>';	
		if ($this->l)
		$this->l->draw($s);
		if ($this->r)
		$this->r->draw($s);
	}
	public function maxdis(array $arr=[],$t=NULL)
	{
		if($t==NULL)
		return count($arr);

		if(!in_array($t->x,$arr))
		{
			array_push($arr, $t->x);
		}

		return max($this->maxdis($arr,$t->l),$this->maxdis($arr,$t->r));
		
	}

	public function getmaxdis($value='')
	{
		return $this->maxdis([],$this);
	}
}
$t=new Tree(4);
$t->l=new Tree(5);
$t->l->l=new Tree(4);
$t->l->l->l=new Tree(5);
$t->r=new Tree(6);
$t->r->l=new Tree(1);
$t->r->r=new Tree(6);
$t->r->r->r=new Tree(2);
$t->r->r->r->r=new Tree(3);
// $t->draw();
var_dump($t->getmaxdis());


