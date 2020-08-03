Simple php-mvc design
-----------------------------------------------------------
This is very simple system in php to make small sites. Suggesations are welcome. I learn this from folliowing youtube tutorial. 

https://www.youtube.com/playlist?list=PL7A20112CF84B2229&feature=view_all


I didn't follow whole tutorial but made some own changes. If you are learning, you should check the whole tutorial.

---------------------


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



This system support multiple template to seprate different controllers. If you need to change template of particular action/controller, you can set
it in controller.
To set for whole controller, set in __construct() function.

$this->view->layout = "main";

Currencly there are 3 layouts "main", "admin", "home".

./views/layouts/ is the path of all include files. 

To edit general page
----------------------
footer-main.php

header-main.php

To edit home page
---------------------
header-home.php

footer-home.php

To edit admin page
---------------------
header-admin.php

footer-admin.php


you can add much more template as you wish by creating new files similar to mention above.


Admin Panel
------------------
I have seprated admin panel using different controllers and different template 

Users
-----
Admin user can access backend panel menu and backend for pages and user manager. 

user/pass: admin/123456




