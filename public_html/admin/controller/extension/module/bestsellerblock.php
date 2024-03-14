<?php
class ControllerExtensionModuleBestsellerBlock extends Controller {
	private $error = array(); 
	
	public function index() {   
	
		$this->load->language('extension/module/bestsellerblock');

		$this->document->setTitle($this->language->get('heading_title1'));
		
		$this->load->model('setting/setting');
		$this->load->model('setting/module');
		$this->load->model('jacklb/newslettersubscribe');
		
		$this->model_jacklb_newslettersubscribe->check_db();
		$this->document->addScript('view/javascript/newsletter/jquery-ui.js');
		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
	
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('bestsellerblock', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}
			
			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}
		
		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}
				
		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_no_results'] = $this->language->get('text_no_results');
		$data['text_default'] = $this->language->get('text_default');
		$data['text_newsletter'] = $this->language->get('text_newsletter');
		$data['text_customer_all'] = $this->language->get('text_customer_all');	
		$data['text_customer'] = $this->language->get('text_customer');	
		$data['text_customer_group'] = $this->language->get('text_customer_group');
		$data['text_affiliate_all'] = $this->language->get('text_affiliate_all');	
		$data['text_affiliate'] = $this->language->get('text_affiliate');	
		$data['text_product'] = $this->language->get('text_product');	
		$data['text_lbnewsletter'] = $this->language->get('text_lbnewsletter');	
		$data['text_sendall'] = $this->language->get('text_sendall');	
		$data['text_mail_success'] = $this->language->get('text_mail_success');	
		$data['text_info'] = $this->language->get('text_info');	
				
		$data['tab_general'] = $this->language->get('tab_general');
		$data['tab_list'] = $this->language->get('tab_list');
		$data['tab_mail'] = $this->language->get('tab_mail');
		
		$data['entry_admin'] = $this->language->get('entry_admin');
		$data['entry_layout'] = $this->language->get('entry_layout');
		$data['entry_position'] = $this->language->get('entry_position');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_unsubscribe'] = $this->language->get('entry_unsubscribe');
		$data['entry_thickbox'] = $this->language->get('entry_thickbox');
		$data['entry_registered'] = $this->language->get('entry_registered');	
		$data['entry_mail'] = $this->language->get('entry_mail');
		$data['entry_options'] = $this->language->get('entry_options');
		$data['entry_store'] = $this->language->get('entry_store');
		$data['entry_to'] = $this->language->get('entry_to');
		$data['entry_customer_group'] = $this->language->get('entry_customer_group');
		$data['entry_customer'] = $this->language->get('entry_customer');
		$data['entry_affiliate'] = $this->language->get('entry_affiliate');
		$data['entry_product'] = $this->language->get('entry_product');
		$data['entry_limit'] = $this->language->get('entry_limit');
		$data['entry_image'] = $this->language->get('entry_image');
		$data['entry_width'] = $this->language->get('entry_width');
		$data['entry_height'] = $this->language->get('entry_height');
		$data['entry_name'] = $this->language->get('entry_name');
		
		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');
		$data['button_add_module'] = $this->language->get('button_add_module');
		$data['button_remove'] = $this->language->get('button_remove');
		$data['button_delete'] = $this->language->get('button_delete');
		
		//Errors
		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}


		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/bestsellerblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/bestsellerblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);			
		}

  		//Breadcrumb
		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/bestsellerblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/bestsellerblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);			
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/bestsellerblock', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/bestsellerblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('extension/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);
		
		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info['name'])) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}
		
		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info['status'])) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

		if (isset($this->request->post['heading'])) {
			$data['heading'] = $this->request->post['heading'];
		} elseif (!empty($module_info) && ($module_info['heading']) ) {
			$data['heading'] = $module_info['heading'];
		} else {
			$data['heading'] = '';
		}

		if (isset($this->request->post['categoryid'])) {
			$data['categoryid'] = $this->request->post['categoryid'];
		} elseif (!empty($module_info) && ($module_info['categoryid']) ) {
			$data['categoryid'] = $module_info['categoryid'];
		} else {
			$data['categoryid'] = '';
		}
		
		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		//Get User List
		
		$user_total = $this->model_jacklb_newslettersubscribe->getTotalUsers();
		
		if (isset($this->request->get['page'])) {
			
			$page = $this->request->get['page'];
			
		} else {
			
			$page = 1;
			
		}
		
		$data['page_nav'] = ($page-1) * $this->config->get('config_limit_admin');
		
		$url = '';
		
		if (isset($this->request->get['module_id'])) {
			$url .= '&module_id=' . $this->request->get['module_id'];
		}
		
		if (isset($this->request->get['page'])) {
			$url .= '&page=' . $this->request->get['page'];
		}
		
		$data['pages'] = array(
			'start'           => ($page - 1) * $this->config->get('config_limit_admin'),
			'limit'           => $this->config->get('config_limit_admin')
		);
		
		$results = $this->model_jacklb_newslettersubscribe->getList($data);
		
		$data['users'] = array();
		
		foreach ($results as $result) {
		 
		 	$action = array();
			
			$action[] = array(
				'text' => $this->language->get('text_delete'),
				'href' => $this->url->link('extension/module/bestsellerblock/unsubscribe', 'user_token=' . $this->session->data['user_token'] . '&user_id=' . $result['id'] . $url, true)
			);
			
			$data['users'][] = array(
				'id' 			=> $result['id'],
				'name'       	=> $result['name'],
				'email_id'      => $result['email_id'],
				'selected'   	=> isset($this->request->post['selected']) && in_array($result['id'], $this->request->post['selected']),
				'action'     	=> $action,
				'start'         => ($page - 1) * $this->config->get('config_limit_admin'),
				'limit'         => $this->config->get('config_limit_admin')
			);
		
		}
		$data['export_csv'] = $this->url->link('extension/module/bestsellerblock/exportCSV', 'user_token=' . $this->session->data['user_token'] . $url, true);

		//Mail
		$this->load->model('setting/store');
		
		$data['user_token'] = $this->session->data['user_token'];
		
		$data['stores'] = $this->model_setting_store->getStores();
		
		$this->load->model('customer/customer_group');
				
		$data['customer_groups'] = $this->model_customer_customer_group->getCustomerGroups(0);

		//Graph
		
	
		$data['jack'] = array();
		
		//Pagination 
		$pagination = new Pagination();
		$pagination->total = $user_total;
		$pagination->page = $page;
		$pagination->limit = 100;
		$pagination->text = $this->language->get('text_pagination');
		$pagination->url = $this->url->link('extension/module/bestsellerblock', 'user_token=' . $this->session->data['user_token'] . $url . '&page={page}', true);
			
		$data['pagination'] = $pagination->render();
		
		
		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		$this->response->setOutput($this->load->view('extension/module/bestsellerblock', $data));
	
	}
	


	

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/bestsellerblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}
		
		return !$this->error;	
	}
}