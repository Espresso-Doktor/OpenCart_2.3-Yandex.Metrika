<?php
class ControllerExtensionAnalyticsYandexMetrika extends Controller {
    public function index() {
		return html_entity_decode($this->config->get('analytics_metrika_code'), ENT_QUOTES, 'UTF-8');
	}
}
