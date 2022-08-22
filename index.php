<?php

class Foo
{
    protected $signature;
	protected $action;
	protected $format;
	protected $serverUrl;
  
  public function shortenUrl( $url, $title='' )
	{
        
		// create the API URL
		$apiRequest = $this->serverUrl . '?signature=' . $this->signature . '&action=' . $this->action . '&format='. $this->action . '&url='.$url
			. ($title?'&title='.$title:'');
		$response = file_get_contents( $apiRequest );
        return $response;
	}
}
