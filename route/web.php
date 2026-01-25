<?php

use Core\Router\Router;

$router = new Router();

$router->get("/", "HomeController@index");
$router->get("/login", "AuthController@login");
$router->post("/login", "AuthController@submitLogin");

// Admin Routes
// Admin Routes
$router->get("/admin", "AdminController@index", ["AuthMiddleware"]);
$router->get("/admin/addFormateur", "AdminController@addFormateur", ["AuthMiddleware"]);
$router->post("/admin/submitFormateur", "AdminController@submitFormateur", ["AuthMiddleware"]);
$router->post("/admin/submitStudent", "AdminController@submitStudent", ["AuthMiddleware"]);
$router->get("/admin/createSprint", "AdminController@createSprint", ["AuthMiddleware"]);
$router->post("/admin/submitSprint", "AdminController@submitSprint", ["AuthMiddleware"]);
$router->get("/admin/sprintManagement", "AdminController@sprintManagement", ["AuthMiddleware"]);
$router->get("/admin/briefs", "BriefController@index", ["AuthMiddleware"]);
$router->get("/admin/addBrief", "BriefController@addBrief", ["AuthMiddleware"]);
$router->post("/admin/submitBrief", "BriefController@submitBrief", ["AuthMiddleware"]);

// Class Routes
$router->get("/admin/classes", "ClassController@index", ["AuthMiddleware"]);
$router->get("/admin/createClass", "ClassController@createClass", ["AuthMiddleware"]);
$router->post("/admin/submitClass", "ClassController@submitClass", ["AuthMiddleware"]);

// Skill Routes
$router->get("/admin/skills", "SkillController@index", ["AuthMiddleware"]);
$router->get("/admin/createSkill", "SkillController@createSkill", ["AuthMiddleware"]);
$router->post("/admin/submitSkill", "SkillController@submitSkill", ["AuthMiddleware"]);

// Debriefing/Evaluation Routes
$router->get("/Formateur/evaluate", "DebriefingController@create", ["AuthMiddleware"]);
$router->post("/Formateur/submitEvaluation", "DebriefingController@store", ["AuthMiddleware"]);
$router->get("/Formateur/invalidateEvaluation", "DebriefingController@invalidate", ["AuthMiddleware"]);
$router->get("/api/skills", "DebriefingController@fetchSkills", ["AuthMiddleware"]);

$router->get("/Formateur/students", "FormateurController@students", ["AuthMiddleware"]);
$router->get("/Formateur/student", "FormateurController@studentDetails", ["AuthMiddleware"]);

$router->get("/Formateur/addStudent", "FormateurController@addStudent", ["AuthMiddleware"]);
$router->post("/Formateur/submitStudent", "FormateurController@submitStudent", ["AuthMiddleware"]);

// Other Routes
$router->get("/Formateur", "FormateurController@index");
$router->get("/Student", "StudentController@index");
$router->post("/Student/submitWalkthrough", "StudentController@submitWalkthrough", ["AuthMiddleware"]);

$router->dispatch();
