<?php

namespace web\dashboard;

use web\dashboard\sidemenu\DashboardSideMenu;
use web\dashboard\topmenu\DashboardTopMenu;
use web\dashboard\utils\HTMLDrawable;

class Dashboard implements HTMLDrawable {

    public const NB = 0;

    private DashboardTopMenu $menu;

    private DashboardSideMenu $sideMenu;

    /**
     * Dashboard constructor.
     * @param DashboardTopMenu $menu
     * @param DashboardSideMenu $sideMenu
     */
    public function __construct(DashboardTopMenu $menu, DashboardSideMenu $sideMenu) {
        $this->menu = $menu;
        $this->sideMenu = $sideMenu;
    }

    final public function generateHTMLWithHeader(): string {
        return <<<END
   <html lang='en'> <head><title>Dashboard</title>   <!-- Bootstrap core CSS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js' integrity='sha512-53CQcu9ciJDlqhK7UD8dZZ+TF2PFGZrOngEYM/8qucuQba+a+BXOIRsp9PoMNJI3ZeLMVNIxIfZLbG/CdHI5PA==' crossorigin='anonymous'></script>
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    
   <!-- Custom fonts for this template -->
   <link href=\"https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">
   <link href=\"https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i\" rel=\"stylesheet\">
   </head>
END. $this->generateHTML() . "</html>";
    }

    final public function generateHTML(): string {

        $htmlM = $this->menu->generateHTML();
        $htmlSM = $this->sideMenu->generateHTML();

        return "<div>" . $htmlM . $htmlSM . "</div>";
    }
}