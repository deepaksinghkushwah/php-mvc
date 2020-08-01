Simple php-mvc design

To add css/js for specific action, in controller file add following sample lines and edit your settings

For css
---------
$this->view->css[] = SITE_URL."public/css/style.css";
CSS will always be included in head


For js
--------------
$this->view->js[] = ['pos' => 'head','src' => 'https://cdn.jsdelivr.net/npm/vue@2.6.11'];

pos = head/bottom
Set pos to add JS in header (head) or before body end (bottom)