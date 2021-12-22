<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$router->get('/',function(){
    return "REST API";
});

$router->get('/ChartValue',['middleware'=>'auth','uses'=>'ChartController@ChartContoller']);

$router->get('/ClientReview',['middleware'=>'auth','uses'=>'ClientReviewController@ClientReview']);

$router->post('/ContactSend',['middleware'=>'auth','uses'=>'ContactController@ContactSend']);
$router->get('/ContactGet','ContactContr nmoller@ContactGet');

$router->get('/CoursesData',['middleware'=>'auth','uses'=>'CoursesController@CoursesData']);
$router->get('/CoursesFourSelect',['middleware'=>'auth','uses'=>'CoursesController@CoursesFourselect']);
$router->post('/CoursesByID',['middleware'=>'auth','uses'=>'CoursesController@CoursesByID']);

$router->get('/ProjectThreeSelect',['middleware'=>'auth','uses'=>'ProjectsController@ProjectSelect3']);
$router->get('/AllProjects',['middleware'=>'auth','uses'=>'ProjectsController@AllProjects']);
$router->post('/ProjectsById',['middleware'=>'auth','uses'=>'ProjectsController@ProjectsById']);

$router->get('/allService',['middleware'=>'auth','uses'=>'ServiceController@AllService']);

$router->get('/FooterData',['middleware'=>'auth','uses'=>'FooterController@FooterData']);

$router->get('/HomeTitle',['middleware'=>'auth','uses'=>'HomeEtcConrtoller@HomeTitle']);
$router->get('/TecnologyDescription',['middleware'=>'auth','uses'=>'HomeEtcConrtoller@TecnologyDescription']);
$router->get('/CounTingValue',['middleware'=>'auth','uses'=>'HomeEtcConrtoller@CounTingValue']);
$router->get('/VideoData',['middleware'=>'auth','uses'=>'HomeEtcConrtoller@VideoData']);

$router->get('/RefundPolicy',['middleware'=>'auth','uses'=>'InformationEtcController@Refund']);
$router->get('/Terms',['middleware'=>'auth','uses'=>'InformationEtcController@Terms']);
$router->get('/PrivacyPolicy',['middleware'=>'auth','uses'=>'InformationEtcController@Privacy']);
$router->get('/About',['middleware'=>'auth','uses'=>'InformationEtcController@About']);

$router->get('/rowcount',['middleware'=>'auth','uses'=>'ChartController@columnCount']);
// $router->post('/rowcount',['middleware'=>'auth','uses'=>'ChartController@columnCount']);

// lumen api
