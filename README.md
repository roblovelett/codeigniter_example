Example CodeIgniter Project

Init. setup

Download wampserver - http://wampserver.com


Setup wampserver to use https - http://lmhproductions.com/31/how-to-setup-ssl-on-wamp/


Run example.sql to generate database.


Change relevant information in 'config/config.php' and 'config/database.php'


This project is setup to contain the following:


An admin area for site owner to upload photos, generate thumbnails of photos, create video descriptions with video thumbnails, manage comments


Libraries are installed. Dxauth is used for authorization for admin panel (WIP), Image_moo for thumbnail generation, and Markdown to parse markdown files for static pages (WIP).


./admin/photos              - route to upload photos


./admin/videos              - route to upload video thumbnails


./comments                  - route to view all comments


./comments/(:num)           - route to view specific comment


./photos                    - route to view all photos


./photos/(:series)          - route to view all photos within a series


./photos/(:series)/(:id)    - route to view specific photo within a series