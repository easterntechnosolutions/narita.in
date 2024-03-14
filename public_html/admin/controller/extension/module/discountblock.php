<?php
class ControllerExtensionModuleDiscountBlock extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/discountblock');
		
		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('discountblock', $this->request->post);
			} else {
				$this->model_setting_module->editModule($this->request->get['module_id'], $this->request->post);
			}

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true));
		}

		if (isset($this->error['warning'])) {
			$data['error_warning'] = $this->error['warning'];
		} else {
			$data['error_warning'] = '';
		}

		if (isset($this->error['name'])) {
			$data['error_name'] = $this->error['name'];
		} else {
			$data['error_name'] = '';
		}

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
		);

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true)
		);

		if (!isset($this->request->get['module_id'])) {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/discountblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/discountblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/discountblock', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/discountblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
		}

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=module', true);

		if (isset($this->request->get['module_id']) && ($this->request->server['REQUEST_METHOD'] != 'POST')) {
			$module_info = $this->model_setting_module->getModule($this->request->get['module_id']);
		}

		if (isset($this->request->post['name'])) {
			$data['name'] = $this->request->post['name'];
		} elseif (!empty($module_info)) {
			$data['name'] = $module_info['name'];
		} else {
			$data['name'] = '';
		}

		$this->load->model('tool/image');
		
		if (isset($this->request->post['bgimage'])) {
			$data['bgimage'] = $this->request->post['bgimage'];
		} elseif (!empty($module_info['bgimage'])) {
			
			$data['bgimage'] = $module_info['bgimage'];
		} else {
			$data['bgimage'] = 'no_image.png';
		}

		if (isset($this->request->post['bgimage']) && is_file(DIR_IMAGE . $this->request->post['bgimage'])) {
			$data['thumb'] = $this->model_tool_image->resize($this->request->post['bgimage'], 100, 100);
		} elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['bgimage'])) {
			$data['thumb'] = $this->model_tool_image->resize($module_info['bgimage'], 100, 100);
		} else {
			$data['thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}

		$placeholder = $this->model_tool_image->resize('no_image.png', 100, 100);

		if (isset($this->request->post['bg_color'])) {
			$data['bg_color'] = $this->request->post['bg_color'];
		} elseif (!empty($module_info) && isset($module_info['bg_color'])) {
			$data['bg_color'] = $module_info['bg_color'];
		} else {
			$data['bg_color'] = '#f2f2f2';
		}
		
		if (isset($this->request->post['title1'])) {
			$data['title1'] = $this->request->post['title1'];
		} elseif (!empty($module_info)) {
			$data['title1'] = $module_info['title1'];
		} else {
			$data['title1'] = '';
		}

		if (isset($this->request->post['btntitle1'])) {
			$data['btntitle1'] = $this->request->post['btntitle1'];
		} elseif (!empty($module_info)) {
			$data['btntitle1'] = $module_info['btntitle1'];
		} else {
			$data['btntitle1'] = '';
		}

		if (isset($this->request->post['ishi_banner1_link'])) {
			$data['ishi_banner1_link'] = $this->request->post['ishi_banner1_link'];
		} elseif (!empty($module_info)) {
			$data['ishi_banner1_link'] = $module_info['ishi_banner1_link'];
		} else {
			$data['ishi_banner1_link'] = '#';
		}
		
		$this->load->model('tool/image');
		
		$data['placeholder'] = $this->model_tool_image->resize('no_image.png', 100, 100);

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();
		

		if (isset($this->request->post['status'])) {
			$data['status'] = $this->request->post['status'];
		} elseif (!empty($module_info)) {
			$data['status'] = $module_info['status'];
		} else {
			$data['status'] = '';
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		$this->response->setOutput($this->load->view('extension/module/discountblock', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/discountblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		return !$this->error;
	}
}