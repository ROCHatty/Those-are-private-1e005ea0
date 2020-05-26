<?php

class MyLogger
{
	private function log($message, $level)
	{
		echo strtoupper($level) . ": " . $message . PHP_EOL;
	}
	
	public function warning($message)
	{
		$this -> log($message, "warning");
	}
	
	public function error($message)
	{
		$this -> log($message, "error");
	}
	
	public function info($message)
	{
		$this -> log($message, "info");
	}
	
	public function debug($message)
	{
		$this -> log($message, "debug");
	}
}

$logs = new MyLogger();
$logs -> warning("Dit is een warning");
$logs -> error("Dit is een error");
$logs -> info("Dit is wat info");
$logs -> debug("Dit is een debug message");

?>