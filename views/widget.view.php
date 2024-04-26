<?php
/** 
 * Dashboards list widget view.
 *
 * @var CView $this
 * @var array $data
 * 
*/

$cv = new CWidgetView($data);
if(array_key_exists('dashboards',$this->data) && $data['show_global'] == 1) {
	foreach($data['dashboards'] as $dashboard) {
		if($dashboard['private'] == 0)$cv->addItem(new CLink((new CTag('b', true,$dashboard['name'])), "/zabbix.php?action=dashboard.view&dashboardid=".$dashboard['dashboardid']))->addItem(new CTag('br'));
	}
}
if(count($data['links']) > 0) {
	foreach($data['links'] as $details) {
		$cv->addItem(new CLink((new CTag('b', true,$details['tag'])), "/zabbix.php?action=dashboard.view&dashboardid=".$details['value']))->addItem(new CTag('br')); }
}
$cv->show();
?>
