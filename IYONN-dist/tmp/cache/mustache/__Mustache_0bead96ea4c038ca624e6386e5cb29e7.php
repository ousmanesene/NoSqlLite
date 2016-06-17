<?php

class __Mustache_0bead96ea4c038ca624e6386e5cb29e7 extends Mustache_Template
{
    protected $strictCallables = true;
    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $buffer = '';
        $newContext = array();

        $buffer .= $indent . '﻿<!DOCTYPE html>
';
        $buffer .= $indent . '<html lang="fr">
';
        $buffer .= $indent . '    <head>
';
        $buffer .= $indent . '        <meta charset="UTF-8" />
';
        $buffer .= $indent . '        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
';
        $buffer .= $indent . '        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
';
        $buffer .= $indent . '        <title>My actually</title>
';
        $buffer .= $indent . '        <link href=\'http://fonts.googleapis.com/css?family=Roboto:400,300,700\' rel=\'stylesheet\' type=\'text/css\'>
';
        $buffer .= $indent . '        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
';
        $buffer .= $indent . '        <link href="assets/jquery-ui.css" rel="stylesheet">
';
        $buffer .= $indent . '        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" />
';
        $buffer .= $indent . '        <link rel="stylesheet" href="assets/animate/animate.css" />
';
        $buffer .= $indent . '        <link rel="stylesheet" href="assets/gallery/blueimp-gallery.min.css">
';
        $buffer .= $indent . '        <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
';
        $buffer .= $indent . '        <link rel="icon" href="images/My-Actually.ico" type="image/x-icon">
';
        $buffer .= $indent . '        <link rel="stylesheet" type="text/css" href="assets/slidingheader/layout-simple.css" />
';
        $buffer .= $indent . '        <link rel="stylesheet" href="assets/style.css">
';
        $buffer .= $indent . '        <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
';
        $buffer .= $indent . '        <!-- AdminLTE Skins. Choose a skin from the css/skins
';
        $buffer .= $indent . '            folder instead of downloading all of them to reduce the load. -->
';
        $buffer .= $indent . '        <link rel="stylesheet" href="assets/dist/css/skins/_all-skins.min.css">
';
        $buffer .= $indent . '        <link rel="stylesheet" href="assets/dist/js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
';
        $buffer .= $indent . '    </head>
';
        $buffer .= $indent . '    <body id="home">
';
        $buffer .= $indent . '        <div id="container">
';
        $buffer .= $indent . '            <header class="intro">
';
        $buffer .= $indent . '                <div class="intro__content">
';
        $buffer .= $indent . '                    <p><img width="60%" src="img/myactually/MyActually.png"/></p>
';
        $buffer .= $indent . '                    <div class="row filters">
';
        $buffer .= $indent . '                        <nav class="categoryFilter">
';
        $buffer .= $indent . '                            <ul class="pagination">
';
        $buffer .= $indent . '                                <li><a href="#"><img src="img/icones/anonymous/anonymous50.png" class="icones" data-toggle="tooltip" data-placement="bottom" title="Articles anonymes" data-bind="click:myFilter(\'category\', \'anonymous\')"/></a></li>
';
        $buffer .= $indent . '                                <li><a href="#"><img src="img/icones/culture/culture50.png" class="icones" data-toggle="tooltip" data-placement="bottom" title="Articles culturels" data-bind="click:myFilter(\'category\', \'culture\')"/></a></li>
';
        $buffer .= $indent . '                                <li><a href="#"><img src="img/icones/economic/economic50.png" class="icones" data-toggle="tooltip" data-placement="bottom" title="Articles economique" data-bind="click:myFilter(\'category\', \'economic\')"/></a></li>
';
        $buffer .= $indent . '                                <li><a href="#"><img src="img/icones/international/internat50.png" class="icones" data-toggle="tooltip" data-placement="bottom" title="Articles internationaux" data-bind="click:myFilter(\'category\', \'international\')"/></a></li>
';
        $buffer .= $indent . '                                <li><a href="#"><img src="img/icones/mynews/mynews50.png" class="icones" data-toggle="tooltip" data-placement="bottom" title="My news" data-bind="click:myFilter(\'category\', \'mynews\')"/></a></li>
';
        $buffer .= $indent . '                                <li><a href="#"><img src="img/icones/national/national50.png" class="icones" data-toggle="tooltip" data-placement="bottom" title="Articles nationaux" data-bind="click:myFilter(\'category\', \'national\')"/></a></li>
';
        $buffer .= $indent . '                                <li><a href="#"><img src="img/icones/newstudents/newsstudents50.png" class="icones" data-toggle="tooltip" data-placement="bottom" title="News etudiants" data-bind="click:myFilter(\'category\', \'newstudents\')"/></a></li>
';
        $buffer .= $indent . '                                <li><a href="#"><img src="img/icones/numeric/numeric50.png" class="icones" data-toggle="tooltip" data-placement="bottom" title="Articles numériques" data-bind="click:myFilter(\'category\', \'numeric\')"/></a></li>
';
        $buffer .= $indent . '                                <li><a href="#"><img src="img/icones/politic/politic50.png" class="icones" data-toggle="tooltip" data-placement="bottom" title="Articles politiques" data-bind="click:myFilter(\'category\', \'politic\')"/></a></li>
';
        $buffer .= $indent . '                                <li><a href="#"><img src="img/icones/science/science50.png" class="icones" data-toggle="tooltip" data-placement="bottom" title="Articles scientifiques" data-bind="click:myFilter(\'category\', \'science\')"/></a></li>
';
        $buffer .= $indent . '                                <li><a href="#"><img src="img/icones/society/society50.png" class="icones" data-toggle="tooltip" data-placement="bottom" title="Articles sociétales" data-bind="click:myFilter(\'category\', \'society\')"/></a></li>
';
        $buffer .= $indent . '                                <li><a href="#"><img src="img/icones/sports/sports50.png" class="icones" data-toggle="tooltip" data-placement="bottom" title="Articles sports" data-bind="click:myFilter(\'category\', \'sport\')"/></a></li>
';
        $buffer .= $indent . '                            </ul>
';
        $buffer .= $indent . '                        </nav>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <button class="trigger">						
';
        $buffer .= $indent . '                        <svg width="100%" height="100%" viewBox="0 0 60 60" preserveAspectRatio="none">
';
        $buffer .= $indent . '                            <g class="icon icon--grid">
';
        $buffer .= $indent . '                                <rect x="32.5" y="5.5" width="22" height="22"/>
';
        $buffer .= $indent . '                                <rect x="4.5" y="5.5" width="22" height="22"/>
';
        $buffer .= $indent . '                                <rect x="32.5" y="33.5" width="22" height="22"/>
';
        $buffer .= $indent . '                                <rect x="4.5" y="33.5" width="22" height="22"/>
';
        $buffer .= $indent . '                            </g>
';
        $buffer .= $indent . '                            <g class="icon icon--cross">
';
        $buffer .= $indent . '                                <line x1="4.5" y1="55.5" x2="54.953" y2="5.046"/>
';
        $buffer .= $indent . '                                <line x1="54.953" y1="55.5" x2="4.5" y2="5.047"/>
';
        $buffer .= $indent . '                            </g>
';
        $buffer .= $indent . '                        </svg>
';
        $buffer .= $indent . '                        <span>View content</span>
';
        $buffer .= $indent . '                    </button>
';
        $buffer .= $indent . '                </div><!-- /intro__content -->
';
        $buffer .= $indent . '            </header><!-- /intro -->
';
        $buffer .= $indent . '            
';
        $buffer .= $indent . '            <section class="items-wrap">
';
        $buffer .= $indent . '            <div class="container">
';
        $buffer .= $indent . '                <nav class="navbar navbar-default">
';
        $buffer .= $indent . '                  <div class="container-fluid">
';
        $buffer .= $indent . '                    <!-- Brand and toggle get grouped for better mobile display -->
';
        $buffer .= $indent . '                    <div class="navbar-header">
';
        $buffer .= $indent . '                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
';
        $buffer .= $indent . '                        <span class="sr-only">Toggle navigation</span>
';
        $buffer .= $indent . '                        <span class="icon-bar"></span>
';
        $buffer .= $indent . '                        <span class="icon-bar"></span>
';
        $buffer .= $indent . '                        <span class="icon-bar"></span>
';
        $buffer .= $indent . '                      </button>
';
        $buffer .= $indent . '                      <a class="navbar-brand" href="#">My actually</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <!-- Collect the nav links, forms, and other content for toggling -->
';
        $buffer .= $indent . '                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
';
        $buffer .= $indent . '                      <ul class="nav navbar-nav">
';
        $buffer .= $indent . '                        <li class="dropdown not-logged">
';
        $buffer .= $indent . '                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">articles <span class="caret"></span></a>
';
        $buffer .= $indent . '                          <ul class="dropdown-menu">
';
        $buffer .= $indent . '                            <li><a href="#">Action</a></li>
';
        $buffer .= $indent . '                            <li><a href="#">Another action</a></li>
';
        $buffer .= $indent . '                            <li><a href="#">Something else here</a></li>
';
        $buffer .= $indent . '                            <li role="separator" class="divider"></li>
';
        $buffer .= $indent . '                            <li><a href="#">Separated link</a></li>
';
        $buffer .= $indent . '                          </ul>
';
        $buffer .= $indent . '                        </li>
';
        $buffer .= $indent . '                        <li class="dropdown not-logged">
';
        $buffer .= $indent . '                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">myAct <span class="caret"></span></a>
';
        $buffer .= $indent . '                          <ul class="dropdown-menu">
';
        $buffer .= $indent . '                            <li><a href="#">Action</a></li>
';
        $buffer .= $indent . '                            <li><a href="#">Another action</a></li>
';
        $buffer .= $indent . '                            <li><a href="#">Something else here</a></li>
';
        $buffer .= $indent . '                            <li role="separator" class="divider"></li>
';
        $buffer .= $indent . '                            <li><a href="#">Separated link</a></li>
';
        $buffer .= $indent . '                            <li role="separator" class="divider"></li>
';
        $buffer .= $indent . '                            <li><a href="#">One more separated link</a></li>
';
        $buffer .= $indent . '                          </ul>
';
        $buffer .= $indent . '                        </li>
';
        $buffer .= $indent . '                        <li><a href="#" id="connexionLink">connexion</a></li>
';
        $buffer .= $indent . '                        <li><a href="#" id="profileLink" class="hidden">Profile</a></li>
';
        $buffer .= $indent . '                        <li><a href="#" id="toolboxLink">boîtes à outils</a></li>
';
        $buffer .= $indent . '                        <li><a href="#" id="logoutLink" class="hidden">déconnexion</a></li>
';
        $buffer .= $indent . '                      </ul>
';
        $buffer .= $indent . '                      <ul class="nav navbar-nav navbar-right">
';
        $buffer .= $indent . '                          <form class="navbar-form navbar-left" role="search">
';
        $buffer .= $indent . '                            <div class="form-group">
';
        $buffer .= $indent . '                                <select id="tagFilter" class="form-control" data-bind="foreach: articles().myActList">
';
        $buffer .= $indent . '                                    <option data-bind="text: $data"></option>
';
        $buffer .= $indent . '                                </select>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                          </form>
';
        $buffer .= $indent . '                          <form class="navbar-form navbar-left" role="search">
';
        $buffer .= $indent . '                            <div class="form-group">
';
        $buffer .= $indent . '                              <input type="text" class="form-control" placeholder="Rechercher" data-bind="value: articles().articleTitleFilter">
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                          </form>
';
        $buffer .= $indent . '                      </ul>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </nav>
';
        $buffer .= $indent . '                <nav class="navbar navbar-default" id="toolbox" style="display:none">
';
        $buffer .= $indent . '                  <div class="container-fluid">
';
        $buffer .= $indent . '                    <!-- Brand and toggle get grouped for better mobile display -->
';
        $buffer .= $indent . '                    <div class="navbar-header">
';
        $buffer .= $indent . '                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
';
        $buffer .= $indent . '                        <span class="sr-only">Toggle navigation</span>
';
        $buffer .= $indent . '                        <span class="icon-bar"></span>
';
        $buffer .= $indent . '                        <span class="icon-bar"></span>
';
        $buffer .= $indent . '                        <span class="icon-bar"></span>
';
        $buffer .= $indent . '                      </button>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                    <!-- Collect the nav links, forms, and other content for toggling -->
';
        $buffer .= $indent . '                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
';
        $buffer .= $indent . '                      <ul class="nav navbar-nav">
';
        $buffer .= $indent . '                          <form class="navbar-form">
';
        $buffer .= $indent . '                                <div class="form-group col-sm-4">
';
        $buffer .= $indent . '                                    <label for="viewResult">Afficher les résultats en: </label>
';
        $buffer .= $indent . '                                    <select id="viewResult" class="form-control">
';
        $buffer .= $indent . '                                        <option>Grille</option>
';
        $buffer .= $indent . '                                        <option>Timeline</option>
';
        $buffer .= $indent . '                                    </select>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-group col-sm-4">
';
        $buffer .= $indent . '                                    <label for="showReaded">Voir les articles lus: <input type="checkbox" id="showReaded"/></label>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-group col-sm-4">
';
        $buffer .= $indent . '                                    <label for="dateResults">Age des résultats: </label>
';
        $buffer .= $indent . '                                    <select id="dateResults" class="form-control">
';
        $buffer .= $indent . '                                        <option>aujourd\'hui</option>
';
        $buffer .= $indent . '                                        <option>hier</option>
';
        $buffer .= $indent . '                                        <option>1 semaine</option>
';
        $buffer .= $indent . '                                        <option>1 mois</option>
';
        $buffer .= $indent . '                                    </select>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                          </form>
';
        $buffer .= $indent . '                      </ul>
';
        $buffer .= $indent . '                      <ul class="nav navbar-nav navbar-right">
';
        $buffer .= $indent . '                        <p>
';
        $buffer .= $indent . '                            <label for="distanceFrom">Distance:</label>
';
        $buffer .= $indent . '                            <input type="text" id="distanceFrom" readonly style="border:0; color:#f6931f; font-weight:bold;">
';
        $buffer .= $indent . '                        </p>
';
        $buffer .= $indent . '                        <div id="slider-range"></div>
';
        $buffer .= $indent . '                      </ul>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </nav>
';
        $buffer .= $indent . '                <div class="spacer">                    
';
        $buffer .= $indent . '                    <ins class="adsbygoogle"
';
        $buffer .= $indent . '                    style="display:inline-block;width:300px;height:600px"
';
        $buffer .= $indent . '                    data-ad-client="ca-pub-8427393790115920"
';
        $buffer .= $indent . '                    data-ad-slot="3891770490"></ins>
';
        $buffer .= $indent . '                    <div class="row" id="grid" data-bind="with: articles">
';
        $buffer .= $indent . '                        <span data-bind="foreach: filterArticles">
';
        $buffer .= $indent . '                            <div class="col-sm-2 fadeInUp wowload article">
';
        $buffer .= $indent . '                                <div class="gallery-items">
';
        $buffer .= $indent . '                                    <img class="img-responsive" id="grid_img" data-bind="attr: {src: img, alt: img}"/>						
';
        $buffer .= $indent . '                                    <div class="caption">
';
        $buffer .= $indent . '                                        <h3 id="grid_h3" data-bind="text: h3"></h3>
';
        $buffer .= $indent . '                                        <a  id="grid_h3Btn" class="gallery-image btn btn-default showArticleDetails" data-bind="click: $root.showArticleDetails.bind($data, $index()), attr:{title: h3}">Consulter</a>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                        </span>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="row hidden" id="timeline-row">
';
        $buffer .= $indent . '                        <ul class="timeline" id="timelineList">
';
        $buffer .= $indent . '                            <li>
';
        $buffer .= $indent . '                                <div class="timeline-badge"><img src="img/icones/anonymous/anonymous50.png" class="img img-rounded icones" data-toggle="tooltip" data-placement="bottom" title="Articles anonymes"/></div>
';
        $buffer .= $indent . '                                <div class="timeline-panel">
';
        $buffer .= $indent . '                                    <div class="timeline-heading">
';
        $buffer .= $indent . '                                        <h4 class="timeline-title"></h4>
';
        $buffer .= $indent . '                                        <p><small class="text-muted"><i class="glyphicon glyphicon-time"></i></small></p>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="timeline-body">
';
        $buffer .= $indent . '                                        <p><img src="" id="timeline_img"/></p>
';
        $buffer .= $indent . '                                        <p></p>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </li>
';
        $buffer .= $indent . '                        </ul>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="row hidden" id="signInForm" data-bind="with:user">
';
        $buffer .= $indent . '                        <div class="login-box col-sm-6">
';
        $buffer .= $indent . '                            <div class="login-box-body">
';
        $buffer .= $indent . '                                <p class="login-box-msg">Connectez vous pour accéder à votre compte</p>
';
        $buffer .= $indent . '                                <form method="post">
';
        $buffer .= $indent . '                                    <div class="form-group has-feedback">
';
        $buffer .= $indent . '                                        <input class="form-control" placeholder="Email" type="email" data-bind="value:infos().email">
';
        $buffer .= $indent . '                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="form-group has-feedback">
';
        $buffer .= $indent . '                                        <input class="form-control" placeholder="Mot de passe" type="password" data-bind="value:infos().password">
';
        $buffer .= $indent . '                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="row">
';
        $buffer .= $indent . '                                        <div class="col-xs-8">
';
        $buffer .= $indent . '                                            <div class="checkbox icheck">
';
        $buffer .= $indent . '                                                <label>
';
        $buffer .= $indent . '                                                    <div aria-disabled="false" aria-checked="false" style="position: relative;" class="icheckbox_square-blue"><input style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div> Remember Me
';
        $buffer .= $indent . '                                                </label>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                        </div><!-- /.col -->
';
        $buffer .= $indent . '                                        <div class="col-xs-4">
';
        $buffer .= $indent . '                                            <button type="button" class="btn btn-primary btn-block btn-flat" data-bind="click:signIn">Connexion</button>
';
        $buffer .= $indent . '                                        </div><!-- /.col -->
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </form><!--
';
        $buffer .= $indent . '                                <div class="social-auth-links text-center">
';
        $buffer .= $indent . '                                    <p>- OU -</p>
';
        $buffer .= $indent . '                                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Connexion avec Facebook</a>
';
        $buffer .= $indent . '                                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using Google+</a>-->
';
        $buffer .= $indent . '                                <!--</div> /.social-auth-links -->
';
        $buffer .= $indent . '                                <a href="#">Mot de passe oublié</a><br>
';
        $buffer .= $indent . '                                <a href="#" id="registerLink" class="text-center">Je m\'inscris</a>
';
        $buffer .= $indent . '                            </div><!-- /.login-box-body -->
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                        <div class="register-box col-sm-6" id="registerForm">
';
        $buffer .= $indent . '                            <div class="register-box-body">
';
        $buffer .= $indent . '                                <p class="login-box-msg">Inscrivez vous pour devenir membre</p>
';
        $buffer .= $indent . '                                <form method="post">
';
        $buffer .= $indent . '                                    <div class="form-group has-feedback">
';
        $buffer .= $indent . '                                        <input class="form-control" placeholder="Prénom nom" type="text" data-bind="value:infos().fullName">
';
        $buffer .= $indent . '                                        <span class="glyphicon glyphicon-user form-control-feedback"></span>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="form-group has-feedback">
';
        $buffer .= $indent . '                                        <input class="form-control" placeholder="Email" type="email" data-bind="value:infos().email">
';
        $buffer .= $indent . '                                        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="form-group has-feedback">
';
        $buffer .= $indent . '                                        <input class="form-control" placeholder="Mot de passe" type="password" data-bind="value:infos().password">
';
        $buffer .= $indent . '                                        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="row">
';
        $buffer .= $indent . '                                        <div class="col-xs-8">
';
        $buffer .= $indent . '                                            <div class="checkbox icheck">
';
        $buffer .= $indent . '                                                <label>
';
        $buffer .= $indent . '                                                    <div aria-disabled="false" aria-checked="false" style="position: relative;" class="icheckbox_square-blue"><input style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" type="checkbox"><ins style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; background: rgb(255, 255, 255) none repeat scroll 0% 0%; border: 0px none; opacity: 0;" class="iCheck-helper"></ins></div> J\'accepte les <a href="#">CGU</a>
';
        $buffer .= $indent . '                                                </label>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                        </div><!-- /.col -->
';
        $buffer .= $indent . '                                        <div class="col-xs-4">
';
        $buffer .= $indent . '                                            <button type="button" class="btn btn-primary btn-block btn-flat" data-bind="click:register">Inscription</button>
';
        $buffer .= $indent . '                                        </div><!-- /.col -->
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </form>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <!--<div class="social-auth-links text-center">
';
        $buffer .= $indent . '                                    <p>- OU -</p>
';
        $buffer .= $indent . '                                    <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Inscription avec Facebook</a>
';
        $buffer .= $indent . '                                    <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>-->
';
        $buffer .= $indent . '                                <!--</div>-->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <a href="#" id="signInLink" class="text-center">Je suis déjà inscrit</a>
';
        $buffer .= $indent . '                            </div><!-- /.form-box -->
';
        $buffer .= $indent . '                        </div>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                    <div class="row hidden" id="profile-row" data-bind="with: user">
';
        $buffer .= $indent . '                        
';
        $buffer .= $indent . '                        <div class="col-md-3">
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        <!-- Profile Image -->
';
        $buffer .= $indent . '                        <div class="box box-primary">
';
        $buffer .= $indent . '                            <div class="box-body box-profile">
';
        $buffer .= $indent . '                            <img id="profilePicture" class="profile-user-img img-responsive img-circle" data-bind="attr: {src: me().picture}" alt="User profile picture">
';
        $buffer .= $indent . '                            <h3 class="profile-username text-center" id="profileUsername" data-bind="text: me().fullName"></h3>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <ul class="list-group list-group-unbordered">
';
        $buffer .= $indent . '                                <li class="list-group-item">
';
        $buffer .= $indent . '                                <b>Abonnées</b> <a class="pull-right" data-bind="text: me().nbFollowers">1322</a>
';
        $buffer .= $indent . '                                </li>
';
        $buffer .= $indent . '                                <li class="list-group-item">
';
        $buffer .= $indent . '                                <b>Suivi</b> <a class="pull-right" data-bind="text: me().nbFollowed">543</a>
';
        $buffer .= $indent . '                                </li>
';
        $buffer .= $indent . '                                <li class="list-group-item">
';
        $buffer .= $indent . '                                <b>Amis</b> <a class="pull-right" data-bind="text: me().nbFriends">1328</a>
';
        $buffer .= $indent . '                                </li>
';
        $buffer .= $indent . '                            </ul>
';
        $buffer .= $indent . '                            <a class="btn btn-primary btn-block" data-bind="click: follow"><b>Suivre</b></a>
';
        $buffer .= $indent . '                            </div><!-- /.box-body -->
';
        $buffer .= $indent . '                        </div><!-- /.box -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                        <!-- About Me Box -->
';
        $buffer .= $indent . '                        <div class="box box-primary">
';
        $buffer .= $indent . '                            <div class="box-header with-border">
';
        $buffer .= $indent . '                            <h3 class="box-title">About Me</h3>
';
        $buffer .= $indent . '                            </div><!-- /.box-header -->
';
        $buffer .= $indent . '                            <div class="box-body">
';
        $buffer .= $indent . '                            <strong><i class="fa fa-book margin-r-5"></i>  Education</strong>
';
        $buffer .= $indent . '                            <p class="text-muted">
';
        $buffer .= $indent . '                                B.S. in Computer Science from the University of Tennessee at Knoxville
';
        $buffer .= $indent . '                            </p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <hr>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>
';
        $buffer .= $indent . '                            <p class="text-muted">Malibu, California</p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <hr>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>
';
        $buffer .= $indent . '                            <p>
';
        $buffer .= $indent . '                                <span class="label label-danger">UI Design</span>
';
        $buffer .= $indent . '                                <span class="label label-success">Coding</span>
';
        $buffer .= $indent . '                                <span class="label label-info">Javascript</span>
';
        $buffer .= $indent . '                                <span class="label label-warning">PHP</span>
';
        $buffer .= $indent . '                                <span class="label label-primary">Node.js</span>
';
        $buffer .= $indent . '                            </p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <hr>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>
';
        $buffer .= $indent . '                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
';
        $buffer .= $indent . '                            </div><!-- /.box-body -->
';
        $buffer .= $indent . '                        </div><!-- /.box -->
';
        $buffer .= $indent . '                        </div><!-- /.col -->
';
        $buffer .= $indent . '                        <div class="col-md-9">
';
        $buffer .= $indent . '                        <div class="nav-tabs-custom">
';
        $buffer .= $indent . '                            <ul class="nav nav-tabs">
';
        $buffer .= $indent . '                            <li class="active"><a href="#activity" data-toggle="tab">Activity</a></li>
';
        $buffer .= $indent . '                            <li><a href="#timeline" data-toggle="tab">Timeline</a></li>
';
        $buffer .= $indent . '                            <li><a href="#editor" data-toggle="tab">Articles</a></li>
';
        $buffer .= $indent . '                            <li><a href="#chatList" data-toggle="tab">Chat</a></li>
';
        $buffer .= $indent . '                            </ul>
';
        $buffer .= $indent . '                            <div class="tab-content">
';
        $buffer .= $indent . '                            <div class="active tab-pane" id="activity">
';
        $buffer .= $indent . '                                <!-- Post -->
';
        $buffer .= $indent . '                                <div class="post">
';
        $buffer .= $indent . '                                <div class="user-block">
';
        $buffer .= $indent . '                                    <img class="img-circle img-bordered-sm" src="assets/dist/img/user1-128x128.jpg" alt="user image">
';
        $buffer .= $indent . '                                    <span class=\'username\'>
';
        $buffer .= $indent . '                                    <a href="#">Jonathan Burke Jr.</a>
';
        $buffer .= $indent . '                                    <a href=\'#\' class=\'pull-right btn-box-tool\'><i class=\'fa fa-times\'></i></a>
';
        $buffer .= $indent . '                                    </span>
';
        $buffer .= $indent . '                                    <span class=\'description\'>Shared publicly - 7:30 PM today</span>
';
        $buffer .= $indent . '                                </div><!-- /.user-block -->
';
        $buffer .= $indent . '                                <p>
';
        $buffer .= $indent . '                                    Lorem ipsum represents a long-held tradition for designers,
';
        $buffer .= $indent . '                                    typographers and the like. Some people hate it and argue for
';
        $buffer .= $indent . '                                    its demise, but others ignore the hate as they create awesome
';
        $buffer .= $indent . '                                    tools to help create filler text for everyone from bacon lovers
';
        $buffer .= $indent . '                                    to Charlie Sheen fans.
';
        $buffer .= $indent . '                                </p>
';
        $buffer .= $indent . '                                <ul class="list-inline">
';
        $buffer .= $indent . '                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
';
        $buffer .= $indent . '                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
';
        $buffer .= $indent . '                                    <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
';
        $buffer .= $indent . '                                </ul>
';
        $buffer .= $indent . '                                <input class="form-control input-sm" type="text" placeholder="Type a comment">
';
        $buffer .= $indent . '                                </div><!-- /.post -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <!-- Post -->
';
        $buffer .= $indent . '                                <div class="post clearfix">
';
        $buffer .= $indent . '                                <div class=\'user-block\'>
';
        $buffer .= $indent . '                                    <img class=\'img-circle img-bordered-sm\' src=\'assets/dist/img/user7-128x128.jpg\' alt=\'user image\'>
';
        $buffer .= $indent . '                                    <span class=\'username\'>
';
        $buffer .= $indent . '                                    <a href="#">Sarah Ross</a>
';
        $buffer .= $indent . '                                    <a href=\'#\' class=\'pull-right btn-box-tool\'><i class=\'fa fa-times\'></i></a>
';
        $buffer .= $indent . '                                    </span>
';
        $buffer .= $indent . '                                    <span class=\'description\'>Sent you a message - 3 days ago</span>
';
        $buffer .= $indent . '                                </div><!-- /.user-block -->
';
        $buffer .= $indent . '                                <p>
';
        $buffer .= $indent . '                                    Lorem ipsum represents a long-held tradition for designers,
';
        $buffer .= $indent . '                                    typographers and the like. Some people hate it and argue for
';
        $buffer .= $indent . '                                    its demise, but others ignore the hate as they create awesome
';
        $buffer .= $indent . '                                    tools to help create filler text for everyone from bacon lovers
';
        $buffer .= $indent . '                                    to Charlie Sheen fans.
';
        $buffer .= $indent . '                                </p>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <form class=\'form-horizontal\'>
';
        $buffer .= $indent . '                                    <div class=\'form-group margin-bottom-none\'>
';
        $buffer .= $indent . '                                    <div class=\'col-sm-9\'>
';
        $buffer .= $indent . '                                        <input class="form-control input-sm" placeholder="Response">
';
        $buffer .= $indent . '                                    </div>                          
';
        $buffer .= $indent . '                                    <div class=\'col-sm-3\'>
';
        $buffer .= $indent . '                                        <button class=\'btn btn-danger pull-right btn-block btn-sm\'>Send</button>
';
        $buffer .= $indent . '                                    </div>                          
';
        $buffer .= $indent . '                                    </div>                        
';
        $buffer .= $indent . '                                </form>
';
        $buffer .= $indent . '                                </div><!-- /.post -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <!-- Post -->
';
        $buffer .= $indent . '                                <div class="post">
';
        $buffer .= $indent . '                                <div class=\'user-block\'>
';
        $buffer .= $indent . '                                    <img class=\'img-circle img-bordered-sm\' src=\'assets/dist/img/user6-128x128.jpg\' alt=\'user image\'>
';
        $buffer .= $indent . '                                    <span class=\'username\'>
';
        $buffer .= $indent . '                                    <a href="#">Adam Jones</a>
';
        $buffer .= $indent . '                                    <a href=\'#\' class=\'pull-right btn-box-tool\'><i class=\'fa fa-times\'></i></a>
';
        $buffer .= $indent . '                                    </span>
';
        $buffer .= $indent . '                                    <span class=\'description\'>Posted 5 photos - 5 days ago</span>
';
        $buffer .= $indent . '                                </div><!-- /.user-block -->
';
        $buffer .= $indent . '                                <div class=\'row margin-bottom\'>
';
        $buffer .= $indent . '                                    <div class=\'col-sm-6\'>
';
        $buffer .= $indent . '                                    <img class=\'img-responsive\' src=\'assets/dist/img/photo1.png\' alt=\'Photo\'>
';
        $buffer .= $indent . '                                    </div><!-- /.col -->
';
        $buffer .= $indent . '                                    <div class=\'col-sm-6\'>
';
        $buffer .= $indent . '                                    <div class=\'row\'>
';
        $buffer .= $indent . '                                        <div class=\'col-sm-6\'>
';
        $buffer .= $indent . '                                        <img class=\'img-responsive\' src=\'assets/dist/img/photo2.png\' alt=\'Photo\'>
';
        $buffer .= $indent . '                                        <br>
';
        $buffer .= $indent . '                                        <img class=\'img-responsive\' src=\'assets/dist/img/photo3.jpg\' alt=\'Photo\'>
';
        $buffer .= $indent . '                                        </div><!-- /.col -->
';
        $buffer .= $indent . '                                        <div class=\'col-sm-6\'>
';
        $buffer .= $indent . '                                        <img class=\'img-responsive\' src=\'assets/dist/img/photo4.jpg\' alt=\'Photo\'>
';
        $buffer .= $indent . '                                        <br>
';
        $buffer .= $indent . '                                        <img class=\'img-responsive\' src=\'assets/dist/img/photo1.png\' alt=\'Photo\'>
';
        $buffer .= $indent . '                                        </div><!-- /.col -->
';
        $buffer .= $indent . '                                    </div><!-- /.row -->
';
        $buffer .= $indent . '                                    </div><!-- /.col -->
';
        $buffer .= $indent . '                                </div><!-- /.row -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <ul class="list-inline">
';
        $buffer .= $indent . '                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
';
        $buffer .= $indent . '                                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a></li>
';
        $buffer .= $indent . '                                    <li class="pull-right"><a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments (5)</a></li>
';
        $buffer .= $indent . '                                </ul>
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                <input class="form-control input-sm" type="text" placeholder="Type a comment">
';
        $buffer .= $indent . '                                </div><!-- /.post -->
';
        $buffer .= $indent . '                            </div><!-- /.tab-pane -->
';
        $buffer .= $indent . '                            <div class="tab-pane" id="timeline">
';
        $buffer .= $indent . '                                <!-- The timeline -->
';
        $buffer .= $indent . '                                <ul class="timeline timeline-inverse">
';
        $buffer .= $indent . '                                <!-- timeline time label -->
';
        $buffer .= $indent . '                                <li class="time-label">
';
        $buffer .= $indent . '                                    <span class="bg-red">
';
        $buffer .= $indent . '                                    10 Feb. 2014
';
        $buffer .= $indent . '                                    </span>
';
        $buffer .= $indent . '                                </li>
';
        $buffer .= $indent . '                                <!-- /.timeline-label -->
';
        $buffer .= $indent . '                                <!-- timeline item -->
';
        $buffer .= $indent . '                                <li>
';
        $buffer .= $indent . '                                    <i class="fa fa-envelope bg-blue"></i>
';
        $buffer .= $indent . '                                    <div class="timeline-item">
';
        $buffer .= $indent . '                                    <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>
';
        $buffer .= $indent . '                                    <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>
';
        $buffer .= $indent . '                                    <div class="timeline-body">
';
        $buffer .= $indent . '                                        Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
';
        $buffer .= $indent . '                                        weebly ning heekya handango imeem plugg dopplr jibjab, movity
';
        $buffer .= $indent . '                                        jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
';
        $buffer .= $indent . '                                        quora plaxo ideeli hulu weebly balihoo...
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="timeline-footer">
';
        $buffer .= $indent . '                                        <a class="btn btn-primary btn-xs">Read more</a>
';
        $buffer .= $indent . '                                        <a class="btn btn-danger btn-xs">Delete</a>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </li>
';
        $buffer .= $indent . '                                <!-- END timeline item -->
';
        $buffer .= $indent . '                                <!-- timeline item -->
';
        $buffer .= $indent . '                                <li>
';
        $buffer .= $indent . '                                    <i class="fa fa-user bg-aqua"></i>
';
        $buffer .= $indent . '                                    <div class="timeline-item">
';
        $buffer .= $indent . '                                    <span class="time"><i class="fa fa-clock-o"></i> 5 mins ago</span>
';
        $buffer .= $indent . '                                    <h3 class="timeline-header no-border"><a href="#">Sarah Young</a> accepted your friend request</h3>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </li>
';
        $buffer .= $indent . '                                <!-- END timeline item -->
';
        $buffer .= $indent . '                                <!-- timeline item -->
';
        $buffer .= $indent . '                                <li>
';
        $buffer .= $indent . '                                    <i class="fa fa-comments bg-yellow"></i>
';
        $buffer .= $indent . '                                    <div class="timeline-item">
';
        $buffer .= $indent . '                                    <span class="time"><i class="fa fa-clock-o"></i> 27 mins ago</span>
';
        $buffer .= $indent . '                                    <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>
';
        $buffer .= $indent . '                                    <div class="timeline-body">
';
        $buffer .= $indent . '                                        Take me to your leader!
';
        $buffer .= $indent . '                                        Switzerland is small and neutral!
';
        $buffer .= $indent . '                                        We are more like Germany, ambitious and misunderstood!
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="timeline-footer">
';
        $buffer .= $indent . '                                        <a class="btn btn-warning btn-flat btn-xs">View comment</a>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </li>
';
        $buffer .= $indent . '                                <!-- END timeline item -->
';
        $buffer .= $indent . '                                <!-- timeline time label -->
';
        $buffer .= $indent . '                                <li class="time-label">
';
        $buffer .= $indent . '                                    <span class="bg-green">
';
        $buffer .= $indent . '                                    3 Jan. 2014
';
        $buffer .= $indent . '                                    </span>
';
        $buffer .= $indent . '                                </li>
';
        $buffer .= $indent . '                                <!-- /.timeline-label -->
';
        $buffer .= $indent . '                                <!-- timeline item -->
';
        $buffer .= $indent . '                                <li>
';
        $buffer .= $indent . '                                    <i class="fa fa-camera bg-purple"></i>
';
        $buffer .= $indent . '                                    <div class="timeline-item">
';
        $buffer .= $indent . '                                    <span class="time"><i class="fa fa-clock-o"></i> 2 days ago</span>
';
        $buffer .= $indent . '                                    <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>
';
        $buffer .= $indent . '                                    <div class="timeline-body">
';
        $buffer .= $indent . '                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
';
        $buffer .= $indent . '                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
';
        $buffer .= $indent . '                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
';
        $buffer .= $indent . '                                        <img src="http://placehold.it/150x100" alt="..." class="margin">
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </li>
';
        $buffer .= $indent . '                                <!-- END timeline item -->
';
        $buffer .= $indent . '                                <li>
';
        $buffer .= $indent . '                                    <i class="fa fa-clock-o bg-gray"></i>
';
        $buffer .= $indent . '                                </li>
';
        $buffer .= $indent . '                                </ul>
';
        $buffer .= $indent . '                            </div><!-- /.tab-pane -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                            <div class="tab-pane" id="editor">
';
        $buffer .= $indent . '                                <form class="form-horizontal">
';
        $buffer .= $indent . '                                <div class="form-group">
';
        $buffer .= $indent . '                                    <label for="inputName" class="col-sm-2 control-label">Name</label>
';
        $buffer .= $indent . '                                    <div class="col-sm-10">
';
        $buffer .= $indent . '                                    <input type="email" class="form-control" id="inputName" placeholder="Name">
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-group">
';
        $buffer .= $indent . '                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
';
        $buffer .= $indent . '                                    <div class="col-sm-10">
';
        $buffer .= $indent . '                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-group">
';
        $buffer .= $indent . '                                    <label for="inputName" class="col-sm-2 control-label">Name</label>
';
        $buffer .= $indent . '                                    <div class="col-sm-10">
';
        $buffer .= $indent . '                                    <input type="text" class="form-control" id="inputName" placeholder="Name">
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-group">
';
        $buffer .= $indent . '                                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>
';
        $buffer .= $indent . '                                    <div class="col-sm-10">
';
        $buffer .= $indent . '                                    <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-group">
';
        $buffer .= $indent . '                                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>
';
        $buffer .= $indent . '                                    <div class="col-sm-10">
';
        $buffer .= $indent . '                                    <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-group">
';
        $buffer .= $indent . '                                    <label for="inputSkills" class="col-sm-2 control-label">Article</label>
';
        $buffer .= $indent . '                                    <div class="col-sm-10">
';
        $buffer .= $indent . '                                        <textarea class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                <div class="form-group">
';
        $buffer .= $indent . '                                    <div class="col-sm-offset-2 col-sm-10">
';
        $buffer .= $indent . '                                    <button type="submit" class="btn btn-danger">Publier</button>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                                </form>
';
        $buffer .= $indent . '                            </div><!-- /.tab-pane -->
';
        $buffer .= $indent . '                            <div class="tab-pane" id="chatList">
';
        $buffer .= $indent . '                                <div class="row">
';
        $buffer .= $indent . '                                    <div class="col-md-3">
';
        $buffer .= $indent . '                                    <!-- DIRECT CHAT PRIMARY -->
';
        $buffer .= $indent . '                                    <div class="box box-primary direct-chat direct-chat-primary">
';
        $buffer .= $indent . '                                        <div class="box-header with-border">
';
        $buffer .= $indent . '                                        <h3 class="box-title">Direct Chat</h3>
';
        $buffer .= $indent . '                                        <div class="box-tools pull-right">
';
        $buffer .= $indent . '                                            <span data-toggle="tooltip" title="3 New Messages" class="badge bg-light-blue">3</span>
';
        $buffer .= $indent . '                                            <button class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
';
        $buffer .= $indent . '                                            <button class="btn btn-box-tool" data-toggle="tooltip" title="Contacts" data-widget="chat-pane-toggle"><i class="fa fa-comments"></i></button>
';
        $buffer .= $indent . '                                            <button class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                        </div><!-- /.box-header -->
';
        $buffer .= $indent . '                                        <div class="box-body">
';
        $buffer .= $indent . '                                        <!-- Conversations are loaded here -->
';
        $buffer .= $indent . '                                        <div class="direct-chat-messages">
';
        $buffer .= $indent . '                                            <!-- Message. Default to the left -->
';
        $buffer .= $indent . '                                            <div class="direct-chat-msg">
';
        $buffer .= $indent . '                                            <div class="direct-chat-info clearfix">
';
        $buffer .= $indent . '                                                <span class="direct-chat-name pull-left">Alexander Pierce</span>
';
        $buffer .= $indent . '                                                <span class="direct-chat-timestamp pull-right">23 Jan 2:00 pm</span>
';
        $buffer .= $indent . '                                            </div><!-- /.direct-chat-info -->
';
        $buffer .= $indent . '                                            <img class="direct-chat-img" src="assets/dist/img/user1-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
';
        $buffer .= $indent . '                                            <div class="direct-chat-text">
';
        $buffer .= $indent . '                                                Is this template really for free? That\'s unbelievable!
';
        $buffer .= $indent . '                                            </div><!-- /.direct-chat-text -->
';
        $buffer .= $indent . '                                            </div><!-- /.direct-chat-msg -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                            <!-- Message to the right -->
';
        $buffer .= $indent . '                                            <div class="direct-chat-msg right">
';
        $buffer .= $indent . '                                            <div class="direct-chat-info clearfix">
';
        $buffer .= $indent . '                                                <span class="direct-chat-name pull-right">Sarah Bullock</span>
';
        $buffer .= $indent . '                                                <span class="direct-chat-timestamp pull-left">23 Jan 2:05 pm</span>
';
        $buffer .= $indent . '                                            </div><!-- /.direct-chat-info -->
';
        $buffer .= $indent . '                                            <img class="direct-chat-img" src="assets/dist/img/user3-128x128.jpg" alt="message user image"><!-- /.direct-chat-img -->
';
        $buffer .= $indent . '                                            <div class="direct-chat-text">
';
        $buffer .= $indent . '                                                You better believe it!
';
        $buffer .= $indent . '                                            </div><!-- /.direct-chat-text -->
';
        $buffer .= $indent . '                                            </div><!-- /.direct-chat-msg -->
';
        $buffer .= $indent . '                                        </div><!--/.direct-chat-messages-->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                                        <!-- Contacts are loaded here -->
';
        $buffer .= $indent . '                                        <div class="direct-chat-contacts">
';
        $buffer .= $indent . '                                            <ul class="contacts-list">
';
        $buffer .= $indent . '                                            <li>
';
        $buffer .= $indent . '                                                <a href="#">
';
        $buffer .= $indent . '                                                <img class="contacts-list-img" src="assets/dist/img/user1-128x128.jpg">
';
        $buffer .= $indent . '                                                <div class="contacts-list-info">
';
        $buffer .= $indent . '                                                    <span class="contacts-list-name">
';
        $buffer .= $indent . '                                                    Count Dracula
';
        $buffer .= $indent . '                                                    <small class="contacts-list-date pull-right">2/28/2015</small>
';
        $buffer .= $indent . '                                                    </span>
';
        $buffer .= $indent . '                                                    <span class="contacts-list-msg">How have you been? I was...</span>
';
        $buffer .= $indent . '                                                </div><!-- /.contacts-list-info -->
';
        $buffer .= $indent . '                                                </a>
';
        $buffer .= $indent . '                                            </li><!-- End Contact Item -->
';
        $buffer .= $indent . '                                            </ul><!-- /.contatcts-list -->
';
        $buffer .= $indent . '                                        </div><!-- /.direct-chat-pane -->
';
        $buffer .= $indent . '                                        </div><!-- /.box-body -->
';
        $buffer .= $indent . '                                        <div class="box-footer">
';
        $buffer .= $indent . '                                        <form action="#" method="post">
';
        $buffer .= $indent . '                                            <div class="input-group">
';
        $buffer .= $indent . '                                            <input type="text" name="message" placeholder="Type Message ..." class="form-control">
';
        $buffer .= $indent . '                                            <span class="input-group-btn">
';
        $buffer .= $indent . '                                                <button type="button" class="btn btn-primary btn-flat">Send</button>
';
        $buffer .= $indent . '                                            </span>
';
        $buffer .= $indent . '                                            </div>
';
        $buffer .= $indent . '                                        </form>
';
        $buffer .= $indent . '                                        </div><!-- /.box-footer-->
';
        $buffer .= $indent . '                                    </div><!--/.direct-chat -->
';
        $buffer .= $indent . '                                    </div><!-- /.col -->
';
        $buffer .= $indent . '                                </div>
';
        $buffer .= $indent . '                            </div>
';
        $buffer .= $indent . '                            </div><!-- /.tab-content -->
';
        $buffer .= $indent . '                        </div><!-- /.nav-tabs-custom -->
';
        $buffer .= $indent . '                        </div><!-- /.col -->
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            </section>
';
        $buffer .= $indent . '        </div><!-- /container -->
';
        $buffer .= $indent . '        <div class="about">
';
        $buffer .= $indent . '            <div class="overlay spacer text-center">
';
        $buffer .= $indent . '            <div class="container">
';
        $buffer .= $indent . '                <h2><strong>My Actually</strong> , l\'actualité de différents médias sur une seule interface…</h2><br>                
';
        $buffer .= $indent . '                
';
        $buffer .= $indent . '			Faire de l\'actualité un réseau social.<br>
';
        $buffer .= $indent . '			Pouvoir se partager les articles lus, créer des articles, laisser des commentaires et créer des échanges entre utilisateurs.<br>
';
        $buffer .= $indent . '			Avoir les articles triés par la communauté en fonction des thèmes souhaités.<br>
';
        $buffer .= $indent . '            Des alertes par rapport à l\'actualité.<br>
';
        $buffer .= $indent . '            Création de chaînes afin d\'être suivis par les utilisateurs.<br>
';
        $buffer .= $indent . '            Permettre aux utilisateurs de devenir "porte-paroles" d\'un ou plusieurs thèmes.<br>
';
        $buffer .= $indent . '            La géolocalisation donnera une proximité à l\'actualité en tout lieu et tout temps.<br>
';
        $buffer .= $indent . '            Partager son avis et faire de cette plateforme le nouveau moyen d\'expression de l\'actualité mondiale.<br>
';
        $buffer .= $indent . '                </p>
';
        $buffer .= $indent . '                <h2><strongMy Actually : L\'actualité c\'est vous qui la faites !</strong></h2><br>
';
        $buffer .= $indent . '                
';
        $buffer .= $indent . '                <div class="wowload fadeInUp social">
';
        $buffer .= $indent . '                    <a href="https://www.facebook.com/myactually/?ref=hl" target="_blank">
';
        $buffer .= $indent . '                        <i class="fa fa-facebook fa-2x"></i>
';
        $buffer .= $indent . '                    </a>
';
        $buffer .= $indent . '                    <a href="https://twitter.com/My_Actually" target="_blank">
';
        $buffer .= $indent . '                        <i class="fa fa-twitter fa-2x"></i>
';
        $buffer .= $indent . '                    </a> 
';
        $buffer .= $indent . '			<a href="https://www.wizbii.com/project/profile/my-actually/my-actually" target="_blank">
';
        $buffer .= $indent . '                        <i class="fa fa-share-alt-square fa-2x"></i>
';
        $buffer .= $indent . '	  		</a> 	
';
        $buffer .= $indent . '                </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="text-center copyright">Powered by <a href="http://myactually.com">myactually.com</a></div>
';
        $buffer .= $indent . '        <!-- Modal -->
';
        $buffer .= $indent . '        <div class="modal fade" id="articleDetails" tabindex="-1" role="dialog" aria-labelledby="articleDetails" data-bind="with:selectedArticle">
';
        $buffer .= $indent . '          <div class="modal-dialog" role="document">
';
        $buffer .= $indent . '            <div class="modal-content">
';
        $buffer .= $indent . '              <div class="modal-body" id="Body">
';
        $buffer .= $indent . '              <div class="box box-widget">
';
        $buffer .= $indent . '                <div class=\'box-header with-border\'>
';
        $buffer .= $indent . '                  <div class=\'user-block\'>
';
        $buffer .= $indent . '                    <img class=\'img-circle\' data-bind="attr:{src: \'img/icones/\'+category+\'/\'+category+\'50.png\'}">
';
        $buffer .= $indent . '                    <span class=\'username\'><a href="#" id="source" data-bind="text: myActName, attr: {href: link}"></a></span>
';
        $buffer .= $indent . '                    <span class=\'description\'>Publie le <span data-bind="text: span"></span></span>
';
        $buffer .= $indent . '                  </div><!-- /.user-block -->
';
        $buffer .= $indent . '                  <div class=\'box-tools\'>
';
        $buffer .= $indent . '                    <button class=\'btn btn-box-tool\' data-widget=\'remove\' data-dismiss="modal"><i class=\'fa fa-times\'></i></button>
';
        $buffer .= $indent . '                  </div><!-- /.box-tools -->
';
        $buffer .= $indent . '                </div><!-- /.box-header -->
';
        $buffer .= $indent . '                <div class=\'box-body\'>
';
        $buffer .= $indent . '                  <!-- Attachment -->
';
        $buffer .= $indent . '                  <div class="attachment-block clearfix">
';
        $buffer .= $indent . '                    <img class="attachment-img" data-bind="attr:{src: img}" alt="attachment image">
';
        $buffer .= $indent . '                    <div class="attachment-pushed">
';
        $buffer .= $indent . '                      <h4 class="attachment-heading"><a  data-bind="text: h3, attr: {href: link}"></a></h4>
';
        $buffer .= $indent . '                      <div class="attachment-text"  data-bind="text: p">
';
        $buffer .= $indent . '                      </div><!-- /.attachment-text -->
';
        $buffer .= $indent . '                    </div><!-- /.attachment-pushed -->
';
        $buffer .= $indent . '                  </div><!-- /.attachment-block -->
';
        $buffer .= $indent . '
';
        $buffer .= $indent . '                  <!-- Social sharing buttons -->
';
        $buffer .= $indent . '                  <button class=\'btn btn-default btn-xs\'><i class=\'fa fa-share\'></i> Partager</button>
';
        $buffer .= $indent . '                  <button class=\'btn btn-default btn-xs\'><i class=\'fa fa-thumbs-o-up\'></i> Aimer</button>
';
        $buffer .= $indent . '                  <span class=\'pull-right text-muted\'>45 likes - 2 commentaires</span>
';
        $buffer .= $indent . '                </div><!-- /.box-body --
';
        $buffer .= $indent . '                <div class=\'box-footer box-comments\'>
';
        $buffer .= $indent . '                  <div class=\'box-comment\'>
';
        $buffer .= $indent . '                    <img class=\'img-circle img-sm\' src=\'img/icones/anonymous/anonymous50.png\' alt=\'user image\'>
';
        $buffer .= $indent . '                    <div class=\'comment-text\'>
';
        $buffer .= $indent . '                      <span class="username">
';
        $buffer .= $indent . '                        Maria Gonzales
';
        $buffer .= $indent . '                        <span class=\'text-muted pull-right\'>8:03 PM Today</span>
';
        $buffer .= $indent . '                      </span>
';
        $buffer .= $indent . '                      It is a long established fact that a reader will be distracted
';
        $buffer .= $indent . '                      by the readable content of a page when looking at its layout.
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                  <div class=\'box-comment\'>
';
        $buffer .= $indent . '                    <img class=\'img-circle img-sm\' src=\'img/icones/anonymous/anonymous50.png\' alt=\'user image\'>
';
        $buffer .= $indent . '                    <div class=\'comment-text\'>
';
        $buffer .= $indent . '                      <span class="username">
';
        $buffer .= $indent . '                        Nora Havisham
';
        $buffer .= $indent . '                        <span class=\'text-muted pull-right\'>8:03 PM Today</span>
';
        $buffer .= $indent . '                      </span>
';
        $buffer .= $indent . '                      The point of using Lorem Ipsum is that it has a more-or-less
';
        $buffer .= $indent . '                      normal distribution of letters, as opposed to using
';
        $buffer .= $indent . '                      \'Content here, content here\', making it look like readable English.
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </div>
';
        $buffer .= $indent . '                </div><!-- /.box-footer -->
';
        $buffer .= $indent . '                <div class="box-footer">
';
        $buffer .= $indent . '                  <form>
';
        $buffer .= $indent . '                    <img class="img-responsive img-circle img-sm" src="img/icones/anonymous/anonymous50.png" alt="alt text">
';
        $buffer .= $indent . '                    <!-- .img-push is used to add margin to elements next to floating images -->
';
        $buffer .= $indent . '                    <div class="img-push">
';
        $buffer .= $indent . '                        <input type="text" class="form-control input-sm" placeholder="commenter">
';
        $buffer .= $indent . '                        <a  id="grid_h3Btn" class="gallery-image btn btn-default" data-binds="click: $root.showArticleDetails.bind($data, $index()), attr:{title: h3}">Commenter</a>
';
        $buffer .= $indent . '                    </div>
';
        $buffer .= $indent . '                  </form>
';
        $buffer .= $indent . '                </div><!-- /.box-footer -->
';
        $buffer .= $indent . '              </div><!-- /.box -->
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '              <div class="modal-footer">
';
        $buffer .= $indent . '                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '            </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '        <div class="modal fade" id="locationInfo" tabindex="-1" role="dialog" aria-labelledby="locationInfo" data-bind="with: addressLocator">
';
        $buffer .= $indent . '            <div class="modal-dialog" role="document">
';
        $buffer .= $indent . '                <div class="modal-content">
';
        $buffer .= $indent . '                    <div class="modal-body" id="Body">
';
        $buffer .= $indent . '                        <div class="box box-info">
';
        $buffer .= $indent . '                            <div class="box-header with-border">
';
        $buffer .= $indent . '                                <h3 class="box-title">Information sur votre position</h3>
';
        $buffer .= $indent . '                            </div><!-- /.box-header -->
';
        $buffer .= $indent . '                            <!-- form start -->
';
        $buffer .= $indent . '                            <form class="form-horizontal">
';
        $buffer .= $indent . '                                <div class="box-body">
';
        $buffer .= $indent . '                                    <div class="form-group">
';
        $buffer .= $indent . '                                        <label for="number" class="col-sm-2 control-label">Numéro</label>
';
        $buffer .= $indent . '                                        <div class="col-sm-10">
';
        $buffer .= $indent . '                                            <input class="form-control" id="number" placeholder="8" type="numeric" data-bind="value: number">
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="form-group">
';
        $buffer .= $indent . '                                        <label for="street" class="col-sm-2 control-label">Voie / Rue</label>
';
        $buffer .= $indent . '                                        <div class="col-sm-10">
';
        $buffer .= $indent . '                                            <input class="form-control" id="street" placeholder="Rue Gambetta" type="text" data-bind="value: street">
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="form-group">
';
        $buffer .= $indent . '                                        <label for="city" class="col-sm-2 control-label">Ville</label>
';
        $buffer .= $indent . '                                        <div class="col-sm-10">
';
        $buffer .= $indent . '                                            <input class="form-control" id="city" placeholder="Vallauris" type="text" data-bind="value: city">
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="form-group">
';
        $buffer .= $indent . '                                        <label for="zipcode" class="col-sm-2 control-label">Code postal</label>
';
        $buffer .= $indent . '                                        <div class="col-sm-10">
';
        $buffer .= $indent . '                                            <input class="form-control" id="zipcode" placeholder="06220" type="text" data-bind="value: zipcode">
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="form-group">
';
        $buffer .= $indent . '                                        <label for="department" class="col-sm-2 control-label">Département</label>
';
        $buffer .= $indent . '                                        <div class="col-sm-10">
';
        $buffer .= $indent . '                                            <input class="form-control" id="department" placeholder="Alpes-maritimess" type="text" data-bind="value: department">
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="form-group">
';
        $buffer .= $indent . '                                        <label for="state" class="col-sm-2 control-label">Région</label>
';
        $buffer .= $indent . '                                        <div class="col-sm-10">
';
        $buffer .= $indent . '                                            <input class="form-control" id="state" placeholder="Provencealpescôtes d\'azur" type="text" data-bind="value: state">
';
        $buffer .= $indent . '                                        </div>
';
        $buffer .= $indent . '                                    </div>
';
        $buffer .= $indent . '                                    <div class="form-group">
';
        $buffer .= $indent . '                                        <label for="country" class="col-sm-2 control-label">Pays</label>
';
        $buffer .= $indent . '                                        <div class="col-sm-10">
';
        $buffer .= $indent . '           ';

        return $buffer;
    }
}
