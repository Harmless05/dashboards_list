<?php

(new CWidgetFormView($data))
	->addField(new CWidgetFieldCheckBoxView($data['fields']['show_global']))
	->addField(new CWidgetFieldTagsView($data['fields']['links']))
	->show();
