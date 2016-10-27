<?php 
class PERCENT 
{
	public $absolute;
	public $relative;
	public $hundred;
	public $nominal;
	
	function __construct($new,$unit)
	{
		$this->absolute=$this->formatNumber($new/$unit);
		$this->relative=$this->formatNumber($this->absolute--);
		$this->hundred=$this->formatNumber($this->absolute*100);
		if ($this->absolute>1) 
		{
			$this->nominal="positive";
		}
		if ($this->absolute==1) 
		{
			$this->nominal="status-quo";
		}
		if ($this->absolute<1) 
		{
			$this->nominal="negative";
		}
	}
	function formatNumber($number)
	{
		$round=number_format($number, 2);
		return $round;
	}
}