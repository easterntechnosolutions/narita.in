<?php
class ControllerExtensionModuleCategoryBlock extends Controller {
	public function index($setting) {

		static $module = 0;		
		$this->load->model('catalog/category');

		$language_id = $this->config->get('config_language_id');
		
		$data['banners'] = array();
		$data['ishi_randomnumer'] = "ishicategory-" . rand();

		$banners = $setting['ishibanner'][$language_id];

		if(isset($setting['title'][$language_id])){
			$data['heading'] = $setting['title'][$language_id];
		}

		if(!empty($banners)){
			foreach ($banners as $banner) {
				if (is_file(DIR_IMAGE . $banner['image'])) {
					$categorytitle = '';
					$categorylink = '';
					if(isset($banner['categoryid'])) {
						$category = $this->model_catalog_category->getCategory($banner['categoryid']);
						$categorytitle = isset($category['name']) && !empty($category['name']);
					    $categorylink = $this->url->link('product/category', 'path=' .  $banner['categoryid']);
					}
					$data['banners'][] = array(
						'categoryid'  => $banner['categoryid'],
						'categorytitle'  => $categorytitle,
						'categorylink'  => $categorylink,
						'image' => $this->model_tool_image->resize($banner['image'], $setting['width'], $setting['height'])
					);
				}
			}
		}

		$data['module'] = $module++;
		
		return $this->load->view('extension/module/categoryblock', $data);
	}
}