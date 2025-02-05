<?php

namespace Widgets\DashboardsList\Includes;
use Zabbix\Widgets\CWidgetForm;
use Zabbix\Widgets\CWidgetField;
use Zabbix\Widgets\Fields\CWidgetFieldMultiSelectItem;
use Zabbix\Widgets\Fields\CWidgetFieldCheckBox;
use Zabbix\Widgets\Fields\CWidgetFieldTags;

class WidgetForm extends CWidgetForm {
	public function addFields(): self {
		return $this
		->addField(new CWidgetFieldTags('links', _('Custom Links')))
		->addField(new CWidgetFieldCheckBox('show_global', 'Show globals'));
	}
}
