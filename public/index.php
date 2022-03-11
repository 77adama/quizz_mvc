  <?php
   ini_set('display_errors', 1);
   ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  //Demarrage de la sesion
  //la session sont les donnes permenante durant toute la navigation
  if(session_status()==PHP_SESSION_NONE){
  session_start();
  }
 //inclusion des constantes
require_once dirname(dirname(__FILE__))."/config/constantes.php";
//inclusion du Validator
require_once dirname(dirname(__FILE__))."/config/validator.php";
//
require_once dirname(dirname(__FILE__))."/config/orm.php";
//inclusion des roles
require_once dirname(dirname(__FILE__))."/config/role.php";
//Chargement du router
require_once dirname(dirname(__FILE__))."/config/router.php"; 
