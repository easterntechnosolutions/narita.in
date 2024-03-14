<?php
class ControllerExtensionModuleFiveBannerBlock extends Controller {
	public function index($setting) {
		
		$this->load->model('setting/module');
		$language_id = $this->config->get('config_language_id');
		$data['title'] = (isset($setting['title'][$language_id])) ? $setting['title'][$language_id] : '' ;
		$data['ishi_randomnumer'] = 'fivebannerblock-' . rand();
		$data['banner1_title'] = $setting['ishi_banner1_title'];
		$data['banner1_btn'] = $setting['ishi_banner1_btn'];
		$data['banner2_title'] = $setting['ishi_banner2_title'];
		$data['banner3_title'] = $setting['ishi_banner3_title'];
		$data['banner4_title'] = $setting['ishi_banner4_title'];
		$data['banner5_title'] = $setting['ishi_banner5_title'];

		if(!empty($setting['ishi_banner1_image'])) {

			if ($this->request->server['HTTPS']) {
				$data['banner1_image'] = $this->config->get('config_ssl') . 'image/' . $setting['ishi_banner1_image'];
			} else {
				$data['banner1_image'] = $this->config->get('config_url') . 'image/' . $setting['ishi_banner1_image'];
			}
			$category = $this->model_catalog_category->getCategory($setting['category1']);
		    $data['banner1_link'] = $this->url->link('product/category', 'path=' .  $setting['category1']);
			
		}
		if(!empty($setting['ishi_banner2_image'])) {
			if ($this->request->server['HTTPS']) {
				$data['banner2_image'] = $this->config->get('config_ssl') . 'image/' . $setting['ishi_banner2_image'];
			} else {
				$data['banner2_image'] = $this->config->get('config_url') . 'image/' . $setting['ishi_banner2_image'];
			}

			$category = $this->model_catalog_category->getCategory($setting['category2']);
		    $data['banner2_link'] = $this->url->link('product/category', 'path=' .  $setting['category2']);
			
		}
		if(!empty($setting['ishi_banner3_image'])) {
			if ($this->request->server['HTTPS']) {
				$data['banner3_image'] = $this->config->get('config_ssl') . 'image/' . $setting['ishi_banner3_image'];
			} else {
				$data['banner3_image'] = $this->config->get('config_url') . 'image/' . $setting['ishi_banner3_image'];
			}
			$category = $this->model_catalog_category->getCategory($setting['category3']);
		    $data['banner3_link'] = $this->url->link('product/category', 'path=' .  $setting['category3']);
		}
		if(!empty($setting['ishi_banner4_image'])) {
			if ($this->request->server['HTTPS']) {
				$data['banner4_image'] = $this->config->get('config_ssl') . 'image/' . $setting['ishi_banner4_image'];
			} else {
				$data['banner4_image'] = $this->config->get('config_url') . 'image/' . $setting['ishi_banner4_image'];
			}
			$category = $this->model_catalog_category->getCategory($setting['category4']);
		    $data['banner4_link'] = $this->url->link('product/category', 'path=' .  $setting['category4']);
		}
		if(!empty($setting['ishi_banner5_image'])) {
			if ($this->request->server['HTTPS']) {
				$data['banner5_image'] = $this->config->get('config_ssl') . 'image/' . $setting['ishi_banner5_image'];
			} else {
				$data['banner5_image'] = $this->config->get('config_url') . 'image/' . $setting['ishi_banner5_image'];
			}
			$category = $this->model_catalog_category->getCategory($setting['category5']);
		    $data['banner5_link'] = $this->url->link('product/category', 'path=' .  $setting['category5']);
		}
		$this->load->language('product/quickview');
		
		$language_id = $this->config->get('config_language_id');

		$this->load->model('tool/image');

		return $this->load->view('extension/module/fivebannerblock', $data);
	}
}