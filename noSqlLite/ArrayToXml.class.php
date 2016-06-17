<?php
  Class ArrayToXml extends XMLWriter
  {
    private $writer = null;
    private $options = array(
			      'fileName'	=>	'php://output',
			      'version'		=>	'1.0',
			      'encoding'	=>	'',
			      'root'		=>	'IWS',
			      'container'	=>	'container',
			      'element'		=>	'element'
			    );

    public function __construct()
    {
      
    }

    public function setOptions($optionsArray)
    {
      $this->options = $optionsArray;
    }

    public function setXmlFileName($fileName)
    {
      $this->options['fileName'] = $fileName;
    }

    public function setVersion($version)
    {
      $this->options['version'] = $version;
    }

    public function setEncoding($encoding)
    {
      $this->options['encoding'] = $encoding;
    }

    public function setContainer($container)
    {
      $this->options['container'] = $container;
    }

    public function setRoot($root)
    {
      $this->options['root'] = $root;
    }

    public function setXmlElement($element)
    {
      $this->options['element'] = $element;
    }

    private function setContainerContent($fields)
    {
		if (isset($fields[0]))
		{
			$this->startElement($this->options['container']);
			$this->startAttribute('name');
			$this->text(trim($this->replaceMychar($fields[0])));
			$this->endAttribute();
		}
    }

    private function closeContainer()
    {
      $this->endElement();
    }

    private function setDtd()
    {
      //$this->openMemory();
	  $this->openURI($this->options['fileName']);
      $this->setIndent(true);
      if ($this->options['encoding'] == '')
	$this->startDocument($this->options['version']);
      else
	$this->startDocument($this->options['version'], $this->options['encoding']);
      $this->startElement($this->options['root']);
      //echo 'oook';
    }

    private function closeDocument()
    {
      $this->endElement();
      $this->endDocument();
      //print $this->outputMemory(TRUE);
    }

    private function setContent($data)
    {
		$keys = array_keys($data);
		print_r($data);
		$this->startElement($this->options['element']);
		for ($i = 0; isset($keys[$i]); $i++)
		{
			$this->startAttribute($keys[$i]);
			$this->text($data[$keys[$i]]);
			$this->endAttribute();
		}
		$this->endElement();
    }

    public function dataToXml($data)
    {
      $this->setDtd();
      print_r($data);
	  //$this->setContainerContent($recordSet->fields);
	  for ($i = 0; isset($data[$i]); $i++)
		$this->setContent($data[$i]);
	  //$this->closeContainer();
      $this->closeDocument();
    }

    private function replaceMychar($myStr)
    {
      $badChar = array("î", "ï", "à", "ä", "ö", "ô", "é", "è", "ê", "ë", "ç");
      $goodChar = array("i", "i", "a", "a", "o", "o", "e", "e", "e", "e", "c");
      $text = "";
      
      for ($i = 0; isset($myStr[$i]); $i++)
      {
	if (ord($myStr[$i])>127)
	{
	  $key = array_search($myStr[$i], $badChar);
	  $text .= $goodChar[$key];
	}
	else
	  $text .= $myStr[$i];
      }
      return($text);
    }
  }
?>