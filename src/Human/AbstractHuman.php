<?php


namespace App\Human;

abstract class AbstractHuman
{
	protected $name;
	protected $energy;
	protected $famine;

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setEnergy($energy)
	{
		$this->energy = $energy;
	}

	public function getEnergy()
	{
		return $this->energy;
	}

	public function setFamine($famine)
	{
		$this->famine = $famine;
	}

	public function getFamine()
	{
		return $this->famine;
	}

	public abstract function getStatus();
}