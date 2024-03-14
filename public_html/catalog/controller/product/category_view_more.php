<?php
class ControllerProductCategoryViewMore extends Controller {
			public function index() {

				$this->load->model('catalog/category');

				$this->load->model('catalog/product');

				$this->load->model('tool/image');

				//get data from ajax request
				if (isset($this->request->post['number'])) {
					$number = $this->request->post['number'];
				} else {
					$number = '';
				}

				if (isset($this->request->post['category'])) {
					$category = $this->request->post['category'];
				} else {
					$category = '';
				}
				
				if (isset($this->request->post['manufacturer_id'])) {
					$manufacturer_id = $this->request->post['manufacturer_id'];
				} else {
					$manufacturer_id = '';
				}
				
				if (isset($this->request->post['product_type'])) {
					$product_type = $this->request->post['product_type'];
				} else {
					$product_type = '';
				}

				if (isset($this->request->post['path'])) {
					$path = $this->request->post['path'];
				} else {
					$path = '';
				}

				if (isset($this->request->post['sort'])) {
					$sort = $this->request->post['sort'];
				} else {
					$sort = 'p.sort_order';
				}

				if (isset($this->request->post['filter'])) {
					$filter = $this->request->post['filter'];
				} else {
					$filter = '';
				}

				if (isset($this->request->post['order'])) {
					$order = $this->request->post['order'];
				} else {
					$order = 'ASC';
				}

				if (isset($this->request->post['step'])) {
					$step = $this->request->post['step'];
				} else {
					$step = 1;
				}

				if (isset($this->request->post['tax'])) {
					$tax = $this->request->post['tax'];
				} else {
					$tax = 0;
				}

				if (isset($this->request->post['review_status'])) {
					$review_status = $this->request->post['review_status'];
				} else {
					$review_status = 0;
				}

				if (isset($this->request->post['display'])) {
					$display = $this->request->post['display'];
				} else {
					$display = 'grid';
				}

				if (isset($this->request->post['cols'])) {
					$cols = $this->request->post['cols'];
				} else {
					$cols = '';
				}

				$data['text_tax'] = $this->language->get('text_points');
				$data['button_cart'] = $this->language->get('button_cart');
				$data['display'] = $display;
				$data['cols'] = $cols;

				$data['products'] = array();

				if($product_type == 'special'){
					$filter_data = array(
						'sort'  => $sort,
						'order' => $order,
						'start' => ($step) * $number,
						'limit' => $number
					);
					
					$product_total = $this->model_catalog_product->getTotalProductSpecials();

					$results = $this->model_catalog_product->getProductSpecials($filter_data);
					
				}elseif($product_type == 'manufacturer'){
					$filter_data = array(
						'filter_manufacturer_id' => $manufacturer_id,
						'sort'                   => $sort,
						'order'                  => $order,
						'start'              => ($step) * $number,
						'limit'              => $number
					);

					$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

					$results = $this->model_catalog_product->getProducts($filter_data);

				}elseif($product_type == 'search'){
					if (isset($this->request->post['filter_name'])) {
						$filter_name = $this->request->post['filter_name'];
					} else {
						$filter_name = '';
					}
					
					if (isset($this->request->post['filter_tag'])) {
						$filter_tag = $this->request->post['filter_tag'];
					} else {
						$filter_tag = '';
					}
					
					if (isset($this->request->post['sub_category'])) {
						$sub_category = $this->request->post['sub_category'];
					} else {
						$sub_category = '';
					}
					
					$filter_data = array(
						'filter_name'         => $filter_name,
						'filter_tag'          => $filter_tag,
						'filter_category_id'  => $category,
						'filter_sub_category' => $sub_category,
						'sort'                => $sort,
						'order'               => $order,
						'start'              => ($step) * $number,
						'limit'              => $number
					);
					$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

					$results = $this->model_catalog_product->getProducts($filter_data);
					
				}
				elseif($product_type == 'category'){

					$filter_data = array(
						'filter_category_id' => $category,
						'filter_filter'      => $filter,
						'sort'               => $sort,
						'order'              => $order,
						'start'              => ($step) * $number,
						'limit'              => $number
					);
					
					$product_total = $this->model_catalog_product->getTotalProducts($filter_data);

					$results = $this->model_catalog_product->getProducts($filter_data);
				}

				$data['step'] = $step++;

				foreach ($results as $result) {
				$extraimage = '';
				
				if ($result['image']) {
					$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}
				$images = $this->model_catalog_product->getProductImages($result['product_id']);

				if(!empty($images) && isset($images[0]['image'])){
				 $extraimage = $this->model_tool_image->resize($images[0]['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}

				if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
					$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$price = false;
				}

				if ((float)$result['special']) {
					$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				} else {
					$special = false;
				}

				if ($this->config->get('config_tax')) {
					$tax = $this->currency->format((float)$result['special'] ? $result['special'] : $result['price'], $this->session->data['currency']);
				} else {
					$tax = false;
				}

				if ($this->config->get('config_review_status')) {
					$rating = (int)$result['rating'];
				} else {
					$rating = false;
				}
				
				$productSizeOptions = '';
				foreach ($this->model_catalog_product->getProductOptions($result['product_id']) as $option) {
					if($option['name'] == 'Size' || $option['name'] == 'size' ) {
						$product_option_value_data = array();
						foreach ($option['product_option_value'] as $option_value) {
							if($option_value['quantity']) {
								$product_option_value_data[] = array(
									'name'                    => $option_value['name'],
									'stock'					  => $option_value['quantity']
								);
							}
						}
						$productSizeOptions = $product_option_value_data;
						break;
					}
				}
				
				$url = '';

					if (isset($this->request->get['filter'])) {
						$url .= '&filter=' . $this->request->get['filter'];
					}

					if (isset($this->request->get['sort'])) {
						$url .= '&sort=' . $this->request->get['sort'];
					}

					if (isset($this->request->get['order'])) {
						$url .= '&order=' . $this->request->get['order'];
					}

					if (isset($this->request->get['limit'])) {
						$url .= '&limit=' . $this->request->get['limit'];
					}
					$stock_status = ($result['quantity'] <= 0) ? $this->language->get('text_out_of_stock') : '';

				$data['products'][] = array(
					'product_id'  => $result['product_id'],
					'manufacturer'  => $result['manufacturer'],
					'stock_status'  => $stock_status,
					'thumb'       => $image,
					'name'        => $result['name'],
					'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
					'price'       => $price,
					'special'     => $special,
					'tax'         => $tax,
					'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
					'rating'      => $result['rating'],
					'extra'		  => $extraimage,
					'product_size_options'=> $productSizeOptions,
					'quick'        => $this->url->link('product/quick_view','&product_id=' . $result['product_id']),
					'href'        => $this->url->link('product/product', 'path=' . $path . '&product_id=' . $result['product_id'] . $url)
				);
			}
			
				$this->response->setOutput($this->load->view('product/category_view_more', $data));
		}

		public function NumberProducts() {
			echo 'NUMBER';
		}

	}
