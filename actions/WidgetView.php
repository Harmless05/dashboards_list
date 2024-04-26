<?php

namespace Modules\DashboardsList\Actions;
use API,CControllerDashboardWidgetView,CControllerResponseData,CDashboard;

class WidgetView extends CControllerDashboardWidgetView {
	protected function doAction(): void {

		$dashboards = API::Dashboard()->get([
			'output' => API_OUTPUT_EXTEND,
			'sortorder' => ZBX_SORT_UP,
			'sortfield' => 'name'
		]);

		$this->setResponse(new CControllerResponseData([
			'name' => $this->getInput('name', 'Dashboards'),
			'dashboards' => $dashboards,
			'show_global' => $this->fields_values['show_global'],
			'links' => $this->fields_values['links'],
			'user' => [ 'debug_mode' => $this->getDebugMode() ]
		]));
	}
}
?>
