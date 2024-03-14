<?php
class ControllerCommonFooter extends Controller {
	public function index() {
		$this->load->language('common/footer');

		$this->load->model('catalog/information');

		$this->load->language('extension/module/information');

		$this->load->model('catalog/information');

		$data['informations'] = array();

		$data['sizechart'] = $this->url->link('information/sizechart');

		$data['informations'] = array();

		foreach ($this->model_catalog_information->getInformations() as $result) {
			if ($result['bottom']) {
				$data['informations'][] = array(
					'title' => $result['title'],
					'href'  => $this->url->link('information/information', 'information_id=' . $result['information_id'])
				);
			}
		}

		$data['contact'] = $this->url->link('information/contact');
		$data['return'] = $this->url->link('account/return/add', '', true);
		$data['sitemap'] = $this->url->link('information/sitemap');
		$data['tracking'] = $this->url->link('information/tracking');
		$data['manufacturer'] = $this->url->link('product/manufacturer');
		$data['voucher'] = $this->url->link('account/voucher', '', true);
		$data['affiliate'] = $this->url->link('affiliate/login', '', true);
		$data['special'] = $this->url->link('product/special');
		$data['account'] = $this->url->link('account/account', '', true);
		$data['order'] = $this->url->link('account/order', '', true);
		$data['wishlist'] = $this->url->link('account/wishlist', '', true);
		$data['newsletter'] = $this->url->link('account/newsletter', '', true);

		$data['storeaddress'] = $this->config->get('config_address');
		$data['storetelephone'] = $this->config->get('config_telephone');
		$data['storefax'] = $this->config->get('config_fax');
		$data['storeemail'] = $this->config->get('config_email');
		$data['storecomment'] = $this->config->get('config_comment');
		$data['storehome'] = $this->url->link('common/home');

		if(!isset($this->request->get['route']) || ($this->request->get['route'] == 'common/home')) {
			$data['ishome'] = 'home-footer';
		} else {
			$data['ishome'] = 'other-footer';
		}


		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_icon'))) {
			$this->document->addLink($server . 'image/' . $this->config->get('config_icon'), 'icon');
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
			$data['storelogo'] = $server . 'image/' . $this->config->get('config_logo');
		} else {
			$data['storelogo'] = '';
		}

		if (is_file(DIR_IMAGE . $this->config->get('config_image'))) {
			$data['footerlogo'] = $server . 'image/' . $this->config->get('config_image');
		} else {
			$data['footerlogo'] = '';
		}

		$data['powered'] = sprintf($this->language->get('text_powered'), $this->config->get('config_name'), date('Y', time()));

		$data['styles'] = $this->document->getStyles('footer');
		$data['footerbefore'] = $this->load->controller('common/footerbefore');
		$data['footermiddle'] = $this->load->controller('common/footermiddle');
		$data['footerafter'] = $this->load->controller('common/footerafter');

		// Whos Online
		if ($this->config->get('config_customer_online')) {
			$this->load->model('tool/online');

			if (isset($this->request->server['REMOTE_ADDR'])) {
				$ip = $this->request->server['REMOTE_ADDR'];
			} else {
				$ip = '';
			}

			if (isset($this->request->server['HTTP_HOST']) && isset($this->request->server['REQUEST_URI'])) {
				$url = ($this->request->server['HTTPS'] ? 'https://' : 'http://') . $this->request->server['HTTP_HOST'] . $this->request->server['REQUEST_URI'];
			} else {
				$url = '';
			}

			if (isset($this->request->server['HTTP_REFERER'])) {
				$referer = $this->request->server['HTTP_REFERER'];
			} else {
				$referer = '';
			}

			$this->model_tool_online->addOnline($ip, $this->customer->getId(), $url, $referer);
		}

		$data['scripts'] = $this->document->getScripts('footer');
		
		return $this->load->view('common/footer', $data);
	}
}
