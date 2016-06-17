<?php
    // 383
    class Browser{
        protected $conf;
        protected $url;
        protected $mCurl;
		public $lastResult = null;
		public $isConnected = false;
        
        public function __construct($conf, $url){
			$this->mCurl = new MyCurl();
            $this->conf = $conf;
            $this->url = $url;
        }
        
        public function start(){
            $keywords = $this->getKeywords();
            foreach($keywords as $keyword){
                if ($keyword !== null)
                {
                    $files = array();
                    foreach ($this->conf as $name=>$extSource)
                    {
                        $url1 = str_replace('__PATTERN__', $keyword, $extSource['url']);
                        $p1 = file_get_html($url1);
                        if ($p1 !== false){
                            $this->getResults($p1, $extSource, $name, $keyword);
                        }
                    }
                }
            }
        }
        
        private function isInDB($websiteId, $keyword, $data){
            $isInDB = false;
            $db = $this->query('_design/ma_articles/_view/orderByMyactId?key="'.$websiteId.'"');
            //print_r($db);
            //print_r($data);
            foreach($db['rows'] as $doc){
                if ($doc['value']['tag'] === $keyword){
                    foreach ($data as $k=>$v){
                        $isInDB = true;
                        if ($doc['value'][$k] !== $v){
                            $isInDB = false;
                            break;
                        }
                        echo $doc['value'][$k]." | $v"."\n";
                    }
                    if ($isInDB){
                        echo 'already in db';
                        break;
                    }
                }
            }
            return $isInDB;
        }
        
        private function getKeywords(){
            $result = array();
            $json = utf8_encode(file_get_contents('cities.json'));
            $cities = (array) json_decode($json, true);
            $result = $cities['CITIES'];
            return $result;
        }
        
        private function getResults($html, $extSource, $websiteId, $keyword)
        {
            $result = array();
            
            foreach($html->find($extSource['container']) as $article)
            {
                $myArticle = array('img'=>'', 'h3'=>'', 'span'=>'', 'p'=>'');
                foreach ($article->find('img') as $img)
                    $myArticle['img'] = $img->attr[$extSource['img']];
                foreach ($article->find($extSource['title']) as $h3)
                     $myArticle['h3'] = $h3->innertext();
                foreach ($article->find($extSource['source']) as $span)
                    $myArticle['span'] = $span->innertext();
                foreach ($article->find($extSource['content']) as $p)
                    $myArticle['p'] = $p->innertext();
                
                array_walk($myArticle, array($this, 'encode_array'));
                if (!$this->isInDB($websiteId, $keyword, $myArticle)){
                    $myArticle['idMyact'] = $websiteId;
                    $myArticle['tag'] = $keyword;
                    $this->save($myArticle);
                }
            }
            return ($result);
        }
        
        private function save($infos){
			$url = $this->url.'/'.uniqid();
			$resultJson = $this->mCurl->myCurl($url, 'PUT', json_encode($infos));
			//echo $resultJson['content'], "\n";
			$result = (array) json_decode($resultJson['content'], true);
			$this->lastResult = $result;
        }
		
		private function query($query){
			$url = $this->url.'/'.$query;
            //echo $url;
			$resultJson = $this->mCurl->myCurl($url, 'GET');
			//echo $resultJson['content'], "\n";
			$result = (array) json_decode($resultJson['content'], true);
			$this->lastResult = $result;
			return($result);
		}
        
        private function encode_array(&$value, $key){
            $value = utf8_encode($value);
        }
    }
?>