<?php
class ControllerExtensionAnalyticsYandexMetrika extends Controller {
    public function index() {
		return html_entity_decode($this->config->get('analitics_metrika_code'), ENT_QUOTES, 'UTF-8');
	}
}
