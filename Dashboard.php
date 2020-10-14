<?php

namespace web\dashboard;

use web\dashboard\menu\DashboardMenu;
use web\dashboard\utils\HTMLDrawable;

class Dashboard implements HTMLDrawable {

    public const NB = 0;

    private DashboardMenu $menu;

    /**
     * Dashboard constructor.
     * @param DashboardMenu $menu
     */
    public function __construct(DashboardMenu $menu) { $this->menu = $menu; }

    final public function generateHTMLWithHeader(): string {
        return "<html lang='en'> <head><title>Dashboard</title>   <!-- Bootstrap core CSS -->
<link href=\"https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk\" crossorigin=\"anonymous\">
<script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=' crossorigin='anonymous'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.5.3/umd/popper.min.js' integrity='sha512-53CQcu9ciJDlqhK7UD8dZZ+TF2PFGZrOngEYM/8qucuQba+a+BXOIRsp9PoMNJI3ZeLMVNIxIfZLbG/CdHI5PA==' crossorigin='anonymous'></script>
<link rel='stylesheet' href='https://pro.fontawesome.com/releases/v5.10.0/css/all.css' integrity='sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p' crossorigin='anonymous'/>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.5.0/css/flag-icon.min.css' integrity='sha512-Cv93isQdFwaKBV+Z4X8kaVBYWHST58Xb/jVOcV9aRsGSArZsgAnFIhMpDoMDcFNoUtday1hdjn0nGp3+KZyyFw==' crossorigin='anonymous' />
  <!-- Custom fonts for this template -->
  <link href=\"https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900\" rel=\"stylesheet\">
  <link href=\"https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i\" rel=\"stylesheet\">
  </head>" . $this->generateHTML() . "</html>";
    }

    final public function generateHTML(): string {
        $htmlM = $this->menu->generateHTML();

        return $htmlM;
    }
}