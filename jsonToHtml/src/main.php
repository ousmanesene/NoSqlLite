<?php
	class JsonToHtml{
		private $data;

		public function __construct($filename = null, $input = null){
			if ($filename !== null){
				$json = file_get_contents($filename);
				$this->data = (array) json_decode($json, true);
			}
			else {
				$this->data = null;
			}
            Mustache_Autoloader::register();
		}

		public function render($name, $type, $data = null, $base){
			$tpl = '';
			
			if ($data === null){
				$data = $this->data;
			}

			switch($type){
				case 'wizard':
					$tpl .= $this->toWizard($name, $data, $base);
					break;
				default:
					$tpl .= $this->_render($name, $data, $base);
					break;
			}
			
			return $tpl;
		}

		private function _render($name, $data, $base = './'){
            $mustache = new Mustache_Engine(array(
                'cache' => $base.'tmp/cache/mustache',
                'cache_lambda_templates' => true,
                'loader' => new Mustache_Loader_FilesystemLoader($base.'templates'),
                'partials_loader' => new Mustache_Loader_FilesystemLoader($base.'templates/partials'),
                'escape' => function($value) {
                    return htmlspecialchars($value, ENT_COMPAT, 'UTF-8');
                },
                'charset' => 'utf-8',
                'logger' => new Mustache_Logger_StreamLogger($base.'tmp/errors.html'),
                'strict_callables' => true,
                'pragmas' => [Mustache_Engine::PRAGMA_FILTERS],
            ));

            $tpl = $mustache->loadTemplate($name);
            return $tpl->render($data);
		}

		private function toFlat($data){
			$tpl = '';

			foreach ($data as $key=>$values){
				$infos['data'] = $this->toFetchable($key, $values);
				$tpl .= $this->_render($name, $infos);
				break;
			}

			return $tpl;
		}

		private function toFetchable($key, $values){
			$result = array();

			if (!is_array($values)){
				$result['key'] = $key;
				$result['val'] = $values;
			}
			else{
				$result['key'] = $key;
				foreach ($values as $k => $v) {
					if (is_array($v)){
						$tmp = $this->toFetchable($k, $v);
						$result['val'][] = array('key'=>$k, 'val'=>$tmp); 
					}
					else{
						$result['val'][] = array('key'=>$k, 'val'=>$v);
					}
				}
			}

			return $result;
		}

		private function toWizard($name, $data, $base){
			$tpl = '';

			$list = $this->toList(array_keys($data));
			$blocks = $this->toBlocks($list, $data);
			$infos['data']['list'] = $list;
			$infos['data']['blocks'] = $blocks;
			$tpl = $this->_render($name, $infos, $base);

			return $tpl;
		}

		private function toList($array){
			$result = array();
			$count = 1;

			foreach ($array as $value){
				$result[] = array('anchor'=>uniqid(), "text"=>$value, "count"=>$count++);
			}

			return $result;
		}

		private function toBlocks($list, $data){
			$result = array();
			$max = count($data);

			for ($i = 0; $i < $max; $i++){
				$key = $list[$i]['text'];
				$values = $data[$key];
				$bloc = array(
					'anchor'=>$list[$i]['anchor'],
					'title'=>$list[$i]['text'],
					'elements'=>$this->toElements($values)
				);

				$result[] = $bloc;
			}

			return $result;
		}

		private function toElements($array){
			$result = array();

			foreach ($array as $key=>$values){
				$meta = $this->processMeta($values);
				$result[] = array('property'=>$key, 'meta'=>$meta);
			}

			return $result;
		}

		private function processMeta($meta){
			if (isset($meta['selected']) && $meta['selected'] !== 0){
				$key = $meta['selected'];
				$val = $meta['values'][0];
				$meta['values'][0] = $meta['values'][$key];
				$meta['values'][$key] = $val;
			}

			return $meta;
		}
	}
?>