<?php
class ControllerExtensionModuleCareerBlock extends Controller {
	private $error = array();

	public function index() {
		$this->load->language('extension/module/careerblock');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/module');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			if (!isset($this->request->get['module_id'])) {
				$this->model_setting_module->addModule('careerblock', $this->request->post);
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
				'href' => $this->url->link('extension/module/careerblock', 'user_token=' . $this->session->data['user_token'], true)
			);
		} else {
			$data['breadcrumbs'][] = array(
				'text' => $this->language->get('heading_title1'),
				'href' => $this->url->link('extension/module/careerblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true)
			);
		}

		if (!isset($this->request->get['module_id'])) {
			$data['action'] = $this->url->link('extension/module/careerblock', 'user_token=' . $this->session->data['user_token'], true);
		} else {
			$data['action'] = $this->url->link('extension/module/careerblock', 'user_token=' . $this->session->data['user_token'] . '&module_id=' . $this->request->get['module_id'], true);
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
		
		if (isset($this->request->post['title'])) {
			$data['title'] = $this->request->post['title'];
		} elseif (!empty($module_info)) {
			$data['title'] = $module_info['title'];
		} else {
			$data['title'] = '';
		}

		if (isset($this->request->post['subtitle'])) {
			$data['subtitle'] = $this->request->post['subtitle'];
		} elseif (!empty($module_info)) {
			$data['subtitle'] = $module_info['subtitle'];
		} else {
			$data['subtitle'] = '';
		}

		if (isset($this->request->post['module_description'])) {
			$data['module_description'] = $this->request->post['module_description'];
		} elseif (!empty($module_info)) {
			$data['module_description'] = $module_info['module_description'];
		} else {
			$data['module_description'] = array();
		}

		$this->load->model('tool/image');

		if (isset($this->request->post['banner1'])) {
			$data['banner1'] = $this->request->post['banner1'];
		} elseif (!empty($module_info)) {
			
			$data['banner1'] = $module_info['banner1'];
		} else {
			$data['banner1'] = 'no_image.png';
		}

		if (isset($this->request->post['banner1']) && is_file(DIR_IMAGE . $this->request->post['banner1'])) {
			$data['banner1thumb'] = $this->model_tool_image->resize($this->request->post['banner1'], 100, 100);
		} elseif (!empty($module_info) && is_file(DIR_IMAGE . $module_info['banner1'])) {
			$data['banner1thumb'] = $this->model_tool_image->resize($module_info['banner1'], 100, 100);
		} else {
			$data['banner1thumb'] = $this->model_tool_image->resize('no_image.png', 100, 100);
		}
		
		$placeholder = $this->model_tool_image->resize('no_image.png', 100, 100);
		

		$this->load->model('localisation/language');

		$data['languages'] = $this->model_localisation_language->getLanguages();

		if (isset($this->request->post['ishitestimonial'])) {
			$ishi_testimonials = $this->request->post['ishitestimonial'];
		} elseif (!empty($module_info) && isset($module_info['ishitestimonial'])) {
			$ishi_testimonials = $module_info['ishitestimonial'];
		} else {
			$ishi_testimonials = array();
		}

		$data['ishi_testimonials'] = array();
		$cur_language_id = $this->config->get('config_language_id');
		
		foreach ($ishi_testimonials as $language => $testimonial) {
			
			foreach ($testimonial as $testid => $ishi_testimonial) {
			// Image

			if ($ishi_testimonials) {
				$data['ishi_testimonials'][$language][] = array(
					'username'            => $ishi_testimonial['username'],
					'description'         => $ishi_testimonial['description'],
				);
			}
			}
		}
		
		if (isset($this->request->post['bgcolor'])) {
			$data['bgcolor'] = $this->request->post['bgcolor'];
		} elseif (!empty($module_info)) {
			$data['bgcolor'] = $module_info['bgcolor'];
		} else {
			$data['bgcolor'] = '#ffffff';
		}

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

		$this->response->setOutput($this->load->view('extension/module/careerblock', $data));
	}

	protected function validate() {
		if (!$this->user->hasPermission('modify', 'extension/module/careerblock')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}

		if ((utf8_strlen($this->request->post['name']) < 3) || (utf8_strlen($this->request->post['name']) > 64)) {
			$this->error['name'] = $this->language->get('error_name');
		}

		return !$this->error;
	}
}