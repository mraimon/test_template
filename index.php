<!DOCTYPE html>

<html>

<head>
    <title>Honeycomb</title>
    <meta charset="UTF-8">
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="https://use.fontawesome.com/610f8a7cc8.js"></script>
    <script src="js/highcharts.js"></script>
    <script src="js/ulitites.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css" media="screen">
    <link rel="stylesheet" href="css/adaptive.css" media="screen">

</head>

<body>


<div id="page" class="compress">
    <header>
        <div id="page-header">
            <i class="icon fa fa-circle" aria-hidden="true"></i>
            <i class="icon fa fa-circle" aria-hidden="true"></i>
            <i class="icon fa fa-circle" aria-hidden="true"></i>
            <i class="icon fa fa-expand" id="expand" aria-hidden="true"></i>
        </div>
    </header>
    <div class="row">
        <div class="col" id="user-menu">
            <div class="user">
                <img class="profile-picture" src="img/avatar.jpg">
                <div class="user-info">
                    <div class="user-status">To-do buddy</div>
                    <div class="user-name">Neamu Tiberiu</div>
                </div>
            </div>
        </div>
        <div class="col project-info">
            <div class="project-info__header">
                <i class="project-info__header_icon icon fa fa-bars" aria-hidden="true"></i>
                <h1 class="project-info__header__title">Project Honeycomb</h1>
            </div>
            <button class="btn btn-lg btn-lg btn-primary btn-project-info" title="Add widget">
                <i class="btn__icon icon fa fa-plus-circle" aria-hidden="true"></i>
                <span class="btn__title">Add widget</span>
            </button>
        </div>
    </div>
    <div class="row">
        <div class="col" id="sidebar">
            <nav>
                <ul class="nav-menu">
                    <li>
                        <i class="menu-icon icon fa fa-crosshairs" aria-hidden="true"></i>
                        <a href="">Dashboars</a>
                    </li>
                    <li>
                        <i class="menu-icon icon fa fa-image" aria-hidden="true"></i>
                        <a href="">Visual attachment</a>
                    </li>
                    <li>
                        <i class="menu-icon icon fa fa-eye" aria-hidden="true"></i>
                        <a href="">Project statistic</a>
                    </li>
                    <li>
                        <i class="menu-icon icon fa fa-user" aria-hidden="true"></i>
                        <a href="">Team members</a>
                    </li>
                    <li>
                        <i class="menu-icon icon fa fa-image" aria-hidden="true"></i>
                        <a href="">Server data</a>
                    </li>
                    <li>
                        <i class="menu-icon icon fa fa-folder" aria-hidden="true"></i>
                        <a href="">Folder settings</a>
                    </li>
                    <li class="messages">
                        <i class="menu-icon icon fa fa-envelope-o" aria-hidden="true"></i>
                        <a href="">Messages</a>
                        <span class="count">132</span>
                    </li>
                </ul>
            </nav>
            <div id="project-progress"></div>
        </div>
        <div class="col" id="main">
            <div class="row-wrap">
                <div class="col widget team">
                    <div class="widget-header">
                        <i class="icon fa fa-close" aria-hidden="true"></i>
                        <div class="widget-title">Team involved</div>
                    </div>
                    <div class="widget-body">
                        <div class="user">
                            <img class="profile-picture" src="img/magere.jpg">
                            <div class="user-info">
                                <div class="user-name">Raistlin Majere</div>
                                <div class="user-status">Dark Mage</div>
                            </div>
                        </div>
                        <div class="user">
                            <img class="profile-picture" src="img/harry.jpg">
                            <div class="user-info">
                                <div class="user-name">Harry Potter</div>
                                <div class="user-status">The Boy Who Lived</div>
                            </div>
                        </div>
                        <div class="user">
                            <img class="profile-picture" src="img/yagami.jpg">
                            <div class="user-info">
                                <div class="user-name">Yagami Light</div>
                                <div class="user-status">God of new world</div>
                            </div>
                        </div>
                        <div class="user">
                            <img class="profile-picture" src="img/dart.jpg">
                            <div class="user-info">
                                <div class="user-name">Dart Vader</div>
                                <div class="user-status">The absolutely evil</div>
                            </div>
                        </div>
                        <div class="user">
                            <img class="profile-picture" src="img/enot.jpg">
                            <div class="user-info">
                                <div class="user-name">Prosto Enot</div>
                                <div class="user-status">Ein tier</div>
                            </div>
                        </div>
                        <div class="user">
                            <img class="profile-picture" src="img/magere.jpg">
                            <div class="user-info">
                                <div class="user-name">Raistlin Majere</div>
                                <div class="user-status">Dark Mage</div>
                            </div>
                        </div>
                        <div class="user">
                            <img class="profile-picture" src="img/magere.jpg">
                            <div class="user-info">
                                <div class="user-name">Raistlin Majere</div>
                                <div class="user-status">Dark Mage</div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-footer">
                        <button class="btn btn-md btn-default">
                            <i class="btn__icon icon fa fa-plus-circle" aria-hidden="true"></i>
                            <span class="btn__title">Add teammate</span>
                        </button>
                    </div>
                </div>
                <div class="col widget activity">
                    <div class="widget-header">
                        <i class="icon fa fa-close" aria-hidden="true"></i>
                        <div class="widget-title">Project activity</div>
                    </div>
                    <div class="widget-body">
                        <div class="activity-event upload">
                            <div class="activity-type">
                                <span class="activity-type-name"></span>
                                <span class="time">11:50 am</span>
                            </div>
                            <div class="activity-info">
                                <span>
                                    <p class="file-title">Dethnote by shinigami.psd</p>
                                    <p class="author">by Yagami Light</p>
                                </span>
                                <span>
                                    <progress max="100" value="25"></progress>
                                    <p class="progress-text">(12 of 30 mg)</p>
                                </span>
                            </div>
                        </div>
                        <div class="activity-event task">
                            <div class="activity-type">
                                <span class="activity-type-name"></span>
                                <span class="time">11:50 am</span>
                            </div>
                            <div class="activity-info">
                                <span>
                                    <p class="file-title">Dethnote by shinigami.psd</p>
                                    <p class="author">by Yagami Light</p>
                                </span>
                                <button type="button" class="btn btn-invisible btn-sm">
                                    <i class="btn__icon icon fa fa-external-link" aria-hidden="divue"></i>
                                    <span class="btn__title">View</span>
                                </button>
                            </div>
                        </div>
                        <div class="activity-event restore">
                            <div class="activity-type">
                                <span class="activity-type-name"></span>
                                <span class="time">11:50 am</span>
                            </div>
                            <div class="activity-info">
                                <span>
                                <p class="file-title">God bless too mush you.psd</p>
                                <p class="author">by Shinigami desu</p>
                                </span>
                                <button type="button" class="btn btn-invisible btn-sm">
                                    <i class="btn__icon icon fa fa-undo" aria-hidden="divue"></i>
                                    <span class="btn__title">Restore</span>
                                </button>
                            </div>
                        </div>
                        <div class="activity-event working">
                            <div class="activity-type">
                                <span class="activity-type-name"></span>
                                <span class="time">11:50 am</span>
                            </div>
                            <div class="activity-info">
                                <span>
                                <p class="file-title">Dethnote by shinigami.psd</p>
                                <p class="author">by Yagami Light</p>
                                </span>
                                <button type="button" class="btn btn-invisible btn-sm">
                                    <i class="btn__icon icon fa fa-user-circle-o" aria-hidden="divue"></i>
                                    <span class="btn__title">Peek</span>
                                </button>
                            </div>
                        </div>
                        <div class="activity-event working">
                            <div class="activity-type">
                                <span class="activity-type-name"></span>
                                <span class="time">11:50 am</span>
                            </div>
                            <div class="activity-info">
                                <span>
                                <p class="file-title">Dethnote by shinigami.psd</p>
                                <p class="author">by Yagami Light</p>
                                </span>
                                <button type="button" class="btn btn-invisible btn-sm">
                                    <i class="btn__icon icon fa fa-user-circle-o" aria-hidden="divue"></i>
                                    <span class="btn__title">Peek</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="widget-footer">
                    </div>
                </div>
            </div>

            <div id="statistic"></div>

        </div>
    </div>
</div>
</body>

</html>
