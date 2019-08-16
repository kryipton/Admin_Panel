<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//===================================Admin Panel linkleri===================


//---------------------------------admin yenileme hissesi-----------------------------

$route['secure_admin_panel_admin_update'] = 'Panel_admin_page_admin';

$route['secure_admin_panel_admin_update_act'] = 'Panel_admin_page_admin/admin_update';

//---------------------------------admin yenileme hissesi-----------------------------




//---------------------------------Login hissesi-----------------------------

$route['secure_admin_panel_login_page'] = 'Panel_admin_page_login';

$route['secure_admin_panel_login_page_act'] = 'Panel_admin_page_login/login_act';

$route['secure_admin_panel_login_page_logout'] = 'Panel_admin_page_login/logout';


//---------------------------------Login hissesi-----------------------------




//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfolio kateqoriyalari---------------------------------------------------------------

//portfolio hissesi
$route['secure_admin_panel_portfolio'] = 'Panel_admin_page_portfolio';

//portfolio kateqoriyalari hissesi
$route['secure_admin_panel_portfolio_category'] = 'Panel_admin_page_portfolio/portfolio_category_list';

//portfolio kateqoriyalari elave etme hissesi
$route['secure_admin_panel_portfolio_category_add'] = 'Panel_admin_page_portfolio/portfolio_category_list_add';

//portfolio kateqoriyalari elave etme hissesinin actionu
$route['secure_admin_panel_portfolio_category_add_act'] = 'Panel_admin_page_portfolio/portfolio_category_list_add_act';

//portfolio kateqoriyalari yenileme hissesi
$route['secure_admin_panel_portfolio_category_update/(.*)'] = 'Panel_admin_page_portfolio/portfolio_category_list_update/$1';

//portfolio kateqoriyalari yenileme hissesi
$route['secure_admin_panel_portfolio_category_update_act/(.*)'] = 'Panel_admin_page_portfolio/portfolio_category_list_update_act/$1';

//portfolio kateqoriyalari silme hissesi
$route['secure_admin_panel_portfolio_category_delete/(.*)'] = 'Panel_admin_page_portfolio/portfolio_category_list_delete/$1';

//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfolio kateqoriyalari---------------------------------------------------------------





//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfolio list hissesi---------------------------------------------------------------

//portfolio list hissesi
$route['secure_admin_panel_portfolio_list'] = 'Panel_admin_page_portfolio/portfolio_list';

//portfolio kateqoriyalari elave etme hissesi
$route['secure_admin_panel_portfolio_add'] = 'Panel_admin_page_portfolio/portfolio_list_add';

//portfolio kateqoriyalari elave etme hissesinin actionu
$route['secure_admin_panel_portfolio_add_act'] = 'Panel_admin_page_portfolio/portfolio_list_add_act';

//portfolio kateqoriyalari yenileme hissesi
$route['secure_admin_panel_portfolio_update/(.*)'] = 'Panel_admin_page_portfolio/portfolio_list_update/$1';

//portfolio kateqoriyalari yenileme hissesinin actionu
$route['secure_admin_panel_portfolio_update_act/(.*)'] = 'Panel_admin_page_portfolio/portfolio_list_update_act/$1';

//portfolio kateqoriyalari silme hissesi
$route['secure_admin_panel_portfolio_delete/(.*)'] = 'Panel_admin_page_portfolio/portfolio_list_delete/$1';

//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfolio list hissesi---------------------------------------------------------------








//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfoliolarin qalereyasi hissesi---------------------------------------------------------------

//portfolio qalereya
$route['secure_admin_panel_portfolio_gallery/(.*)'] = 'Panel_admin_page_portfolio/portfolio_gallery/$1';


//portfolio qalereya elave etme
$route['secure_admin_panel_portfolio_gallery_add/(.*)'] = 'Panel_admin_page_portfolio/portfolio_gallery_add/$1';

//portfolio qalereya silme
$route['secure_admin_panel_portfolio_gallery_delete/(.*)/(.*)'] = 'Panel_admin_page_portfolio/portfolio_gallery_delete/$1/$2';

//portfolio qalereya refresh list
$route['secure_admin_panel_portfolio_gallery_refresh/(.*)'] = 'Panel_admin_page_portfolio/refresh_image_list_gallery/$1';

//portfolio qalereya profil sekli secme
$route['secure_admin_panel_portfolio_gallery_primary/(.*)/(.*)'] = 'Panel_admin_page_portfolio/portfolio_gallery_primary/$1/$2';


//portfolio qalereya secilen sekilleri silme
$route['secure_admin_panel_portfolio_gallery_delete_group/(.*)'] = 'Panel_admin_page_portfolio/prtfolio_gallery_delete_group/$1';

//portfolio qalereya hamsin silme
$route['secure_admin_panel_portfolio_gallery_delete_all/(.*)'] = 'Panel_admin_page_portfolio/prtfolio_gallery_delete_all/$1';

//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfoliolarin qalereyasi hissesi---------------------------------------------------------------










//------------------------------ (Kateqoriyasi olmayan tek dilli  portfolio hissesinin linkleri) portfoliolarin listi hissesi---------------------------------------------------------------

//portfolio listi hissesi
$route['secure_admin_panel_portfolio_list_woc'] = 'Panel_admin_page_portfolio_woc/portfolio_list';

//portfolio kateqoriyalari elave etme hissesi
$route['secure_admin_panel_portfolio_add_woc'] = 'Panel_admin_page_portfolio_woc/portfolio_list_add';

//portfolio kateqoriyalari elave etme hissesinin actionu
$route['secure_admin_panel_portfolio_add_act_woc'] = 'Panel_admin_page_portfolio_woc/portfolio_list_add_act';

//portfolio kateqoriyalari yenileme hissesi
$route['secure_admin_panel_portfolio_update_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_list_update/$1';

//portfolio kateqoriyalari yenileme hissesinin actionu
$route['secure_admin_panel_portfolio_update_act_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_list_update_act/$1';

//portfolio kateqoriyalari silme hissesi
$route['secure_admin_panel_portfolio_delete_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_list_delete/$1';
//------------------------------ (Kateqoriyasi olmayan tek dilli  portfolio hissesinin linkleri) portfoliolarin listi hissesi---------------------------------------------------------------







//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfoliolarin qalereyasi hissesi---------------------------------------------------------------

//portfolio qalereya
$route['secure_admin_panel_portfolio_gallery_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_gallery/$1';


//portfolio qalereya elave etme
$route['secure_admin_panel_portfolio_gallery_add_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_gallery_add/$1';

//portfolio qalereya silme
$route['secure_admin_panel_portfolio_gallery_delete_woc/(.*)/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_gallery_delete/$1/$2';

//portfolio qalereya refresh list
$route['secure_admin_panel_portfolio_gallery_refresh_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/refresh_image_list_gallery/$1';

//portfolio qalereya profil sekli secme
$route['secure_admin_panel_portfolio_gallery_primary_woc/(.*)/(.*)'] = 'Panel_admin_page_portfolio_woc/portfolio_gallery_primary/$1/$2';


//portfolio qalereya secilen sekilleri silme
$route['secure_admin_panel_portfolio_gallery_delete_group_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/prtfolio_gallery_delete_group/$1';

//portfolio qalereya hamsin silme
$route['secure_admin_panel_portfolio_gallery_delete_all_woc/(.*)'] = 'Panel_admin_page_portfolio_woc/prtfolio_gallery_delete_all/$1';

//----------------------------- (Kateqoriyasi olan tek dilli  portfolio hissesinin linkleri) portfoliolarin qalereyasi hissesi---------------------------------------------------------------






//===================================Admin Panel linkleri===================





