# Dashboards List Widget for Zabbix

This widget is a simple way to add a list of links to your Zabbix dashboard. It can be used to link to other dashboards, or link to other services with a URL.

# Credits

This widget is based on the work of [imThief](https://github.com/imThief) and his Zabbix widget [dashboards_list](https://github.com/imThief/dashboards_list).

## Installation

> [!NOTE]
>
> Compatibility tested with Zabbix 7.0 and later.
> 
> Due to changes in the widget naming (from `/modules/` to `/widgets/`), this widget may not be compatible with Zabbix 6.0 and earlier.

1. Download the `dashboards_list` directory to the Zabbix frontend directory, typically `/usr/share/zabbix/widgets`.
2. In the Zabbix frontend, navigate to **Administration** > **General** > **Modules**.
3. Click the `Scan Directory` button in the upper right corner.

> [!IMPORTANT]
> 4. Make sure to `enable` the widget in the **``Status``** column. Otherwise, the widget will not be available for use.

## Personal Configuration

You can change the widget's code without needing to **Scan Directory** again. The widget will automatically use the updated code.

## Screenshots

### How it looks

![pic1](https://github.com/imThief/dashboards_list/assets/39994745/a4f21b74-b06d-4da5-8bae-02cdcf5beb0d)

### Widget Configuration

![widget-settings](https://github.com/user-attachments/assets/0a28969f-fa21-4f53-97bd-620ff27bbcea)

- `Show global` flag simply lists all your dashboards that have status "Shared"
- `tag` Visible name for the item
- `value` Dashboard ID or URL
