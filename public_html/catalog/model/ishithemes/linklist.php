<?php
class ModelIshiThemesLinkList extends Model {
	public function createLinkLists() {
		$create_linklist = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "linklist` (`linklist_id` int(11) NOT NULL auto_increment, `module_id` int(11) NOT NULL, `status` int(1) NOT NULL default '0', `image` varchar(255) default NULL, `date_added` datetime NOT NULL default '0000-00-00 00:00:00', `date_modified` datetime NOT NULL default '0000-00-00 00:00:00', PRIMARY KEY (`linklist_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		$this->db->query($create_linklist);

		$create_linklist_description = "CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "linklist_description` (`linklist_id` int(11) NOT NULL default '0', `language_id` int(11) NOT NULL default '0', `title` varchar(64) NOT NULL default '', `description` text NOT NULL, PRIMARY KEY (`linklist_id`,`language_id`)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;";
		$this->db->query($create_linklist_description);

	}

	public function dropLinkLists() {
		$drop_linklist = "DROP TABLE IF EXISTS `" . DB_PREFIX . "linklist`;";
		$this->db->query($drop_linklist);

		$drop_linklist_description = "DROP TABLE IF EXISTS `" . DB_PREFIX . "linklist_description`;";
		$this->db->query($drop_linklist_description);
	}

	public function addModule($code, $data) {
		$this->db->query("INSERT INTO `" . DB_PREFIX . "module` SET `name` = '" . $this->db->escape($data['name']) . "', `code` = '" . $this->db->escape($code) . "', `setting` = '" . $this->db->escape(json_encode($data)) . "'");

		$module_id = $this->db->getLastId();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "module WHERE module_id = '" . (int)$module_id . "'");

		$settings = json_decode($query->row['setting'], true);

		$settings['module_id'] = $module_id;

		$this->db->query("UPDATE " . DB_PREFIX . "module SET setting = '" . $this->db->escape(json_encode($settings)) . "' WHERE module_id = '" . (int)$module_id . "'");

		return $module_id;
	}

	public function addLinkList($data) {
		$this->db->query("INSERT INTO " . DB_PREFIX . "linklist SET module_id = '" . (int)$data['module_id'] . "', status = '" . (int)$data['status'] . "', date_added = now(), date_modified = now()");

		$linklist_id = $this->db->getLastId();

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "linklist SET image = '" . $this->db->escape($data['image']) . "' WHERE linklist_id = '" . (int)$linklist_id . "'");
		}

		foreach ($data['linklist_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "linklist_description SET linklist_id = '" . (int)$linklist_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "', description = '" . $this->db->escape($value['description']) . "'");
		}
	}

	public function editLinkList($linklist_id, $data) {
		$this->db->query("UPDATE " . DB_PREFIX . "linklist SET module_id = '" . (int)$data['module_id'] . "', status = '" . (int)$data['status'] . "', date_modified = now() WHERE linklist_id = '" . (int)$linklist_id . "'");

		if (isset($data['image'])) {
			$this->db->query("UPDATE " . DB_PREFIX . "linklist SET image = '" . $this->db->escape($data['image']) . "' WHERE linklist_id = '" . (int)$linklist_id . "'");
		}

		$this->db->query("DELETE FROM " . DB_PREFIX . "linklist_description WHERE linklist_id = '" . (int)$linklist_id . "'");

		foreach ($data['linklist_description'] as $language_id => $value) {
			$this->db->query("INSERT INTO " . DB_PREFIX . "linklist_description SET linklist_id = '" . (int)$linklist_id . "', language_id = '" . (int)$language_id . "', title = '" . $this->db->escape($value['title']) . "', description = '" . $this->db->escape($value['description']) . "'");
		}
	}

	public function deleteLinkList($linklist_id) {
		$this->db->query("DELETE FROM " . DB_PREFIX . "linklist WHERE linklist_id = '" . (int)$linklist_id . "'");

		$this->db->query("DELETE FROM " . DB_PREFIX . "linklist_description WHERE linklist_id = '" . (int)$linklist_id . "'");
	}	

	public function getLinkList($linklist_id) {
		$query = $this->db->query("SELECT DISTINCT * FROM " . DB_PREFIX . "linklist WHERE linklist_id = '" . (int)$linklist_id . "'");

		return $query->row;
	}

	public function getLinkListTitle($linklist_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "linklist_description WHERE language_id = '" . (int)$this->config->get('config_language_id') . "' AND linklist_id = '" . (int)$linklist_id . "'");

		if ($query->row) {
			return $query->row['title'];
		} else {
			return false;
		}
	}

	public function getLinkListDescriptions($linklist_id) {
		$linklist_description_data = array();

		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "linklist_description WHERE linklist_id = '" . (int)$linklist_id . "'");

		foreach ($query->rows as $result) {
			$linklist_description_data[$result['language_id']] = array(
				'title'       => $result['title'],
				'description' => $result['description']
			);
		}

		return $linklist_description_data;
	}

	public function getLinkListsByModule($module_id) {
		$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "linklist b LEFT JOIN " . DB_PREFIX . "linklist_description bd ON (b.linklist_id = bd.linklist_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' AND b.module_id = '" . (int)$module_id . "' ORDER BY b.date_added");

		return $query->rows;
	}

	public function getLinkLists($data = array()) {
		if ($data) {
			$sql = "SELECT * FROM " . DB_PREFIX . "linklist b LEFT JOIN " . DB_PREFIX . "linklist_description bd ON (b.linklist_id = bd.linklist_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "'";

			$sort_data = array(
				'bd.title',
				'b.module_id',
				'b.date_added'
			);

			if (isset($data['sort']) && in_array($data['sort'], $sort_data)) {
				$sql .= " ORDER BY " . $data['sort'];
			} else {
				$sql .= " ORDER BY b.module_id, b.date_added";
			}

			if (isset($data['order']) && ($data['order'] == 'DESC')) {
				$sql .= " DESC";
			} else {
				$sql .= " ASC";
			}

			if (isset($data['start']) || isset($data['limit'])) {
				if ($data['start'] < 0) {
					$data['start'] = 0;
				}

				if ($data['limit'] < 1) {
					$data['limit'] = 20;
				}

				$sql .= " LIMIT " . (int)$data['start'] . "," . (int)$data['limit'];
			}

			$query = $this->db->query($sql);

			return $query->rows;
		} else {
			$query = $this->db->query("SELECT * FROM " . DB_PREFIX . "linklist b LEFT JOIN " . DB_PREFIX . "linklist_description bd ON (b.linklist_id = bd.linklist_id) WHERE bd.language_id = '" . (int)$this->config->get('config_language_id') . "' ORDER BY b.date_added ASC");

			return $query->rows;
		}
	}

	public function getTotalLinkLists() {
		$query = $this->db->query("SELECT COUNT(*) AS total FROM " . DB_PREFIX . "linklist");

		return $query->row['total'];
	}

	public function getModule($module_id) {
		$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "module` WHERE `module_id` = '" . (int)$module_id . "'");

		return $query->row;
	}
}