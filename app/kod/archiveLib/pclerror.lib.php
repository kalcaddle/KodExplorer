<?php
// --------------------------------------------------------------------------------
// PhpConcept Library (PCL) Error 1.0
// --------------------------------------------------------------------------------
// License GNU/GPL - Vincent Blavet - Mars 2001
// http://www.phpconcept.net & http://phpconcept.free.fr
// --------------------------------------------------------------------------------
// Français :
//   La description de l'usage de la librairie PCL Error 1.0 n'est pas encore
//   disponible. Celle-ci n'est pour le moment distribuée qu'avec les
//   développements applicatifs de PhpConcept.
//   Une version indépendante sera bientot disponible sur http://www.phpconcept.net
//
// English :
//   The PCL Error 1.0 library description is not available yet. This library is
//   released only with PhpConcept application and libraries.
//   An independant release will be soon available on http://www.phpconcept.net
//
// --------------------------------------------------------------------------------
//
//   * Avertissement :
//
//   Cette librairie a été créée de façon non professionnelle.
//   Son usage est au risque et péril de celui qui l'utilise, en aucun cas l'auteur
//   de ce code ne pourra être tenu pour responsable des éventuels dégats qu'il pourrait
//   engendrer.
//   Il est entendu cependant que l'auteur a réalisé ce code par plaisir et n'y a
//   caché aucun virus, ni malveillance.
//   Cette libairie est distribuée sous la license GNU/GPL (http://www.gnu.org)
//
//   * Auteur :
//
//   Ce code a été écrit par Vincent Blavet (vincent@blavet.net) sur son temps
//   de loisir.
//
// --------------------------------------------------------------------------------

// ----- Look for double include
if (!defined("PCLERROR_LIB"))
{
  define( "PCLERROR_LIB", 1 );

  // ----- Version
  $g_pcl_error_version = "1.0";

  // ----- Internal variables
  // These values must only be change by PclError library functions
  $g_pcl_error_string = "";
  $g_pcl_error_code = 1;


  // --------------------------------------------------------------------------------
  // Function : PclErrorLog()
  // Description :
  // Parameters :
  // --------------------------------------------------------------------------------
  function PclErrorLog($p_error_code=0, $p_error_string="")
  {
    global $g_pcl_error_string;
    global $g_pcl_error_code;

    $g_pcl_error_code = $p_error_code;
    $g_pcl_error_string = $p_error_string;

  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Function : PclErrorFatal()
  // Description :
  // Parameters :
  // --------------------------------------------------------------------------------
  function PclErrorFatal($p_file, $p_line, $p_error_string="")
  {
    global $g_pcl_error_string;
    global $g_pcl_error_code;

    $v_message =  "<html><body>";
    $v_message .= "<p align=center><font color=red bgcolor=white><b>PclError Library has detected a fatal error on file '$p_file', line $p_line</b></font></p>";
    $v_message .= "<p align=center><font color=red bgcolor=white><b>$p_error_string</b></font></p>";
    $v_message .= "</body></html>";
    die($v_message);
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Function : PclErrorReset()
  // Description :
  // Parameters :
  // --------------------------------------------------------------------------------
  function PclErrorReset()
  {
    global $g_pcl_error_string;
    global $g_pcl_error_code;

    $g_pcl_error_code = 1;
    $g_pcl_error_string = "";
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Function : PclErrorCode()
  // Description :
  // Parameters :
  // --------------------------------------------------------------------------------
  function PclErrorCode()
  {
    global $g_pcl_error_string;
    global $g_pcl_error_code;
    
    return($g_pcl_error_code);
  }
  // --------------------------------------------------------------------------------

  // --------------------------------------------------------------------------------
  // Function : PclErrorString()
  // Description :
  // Parameters :
  // --------------------------------------------------------------------------------
  function PclErrorString()
  {
    global $g_pcl_error_string;
    global $g_pcl_error_code;

    return($g_pcl_error_string." [code $g_pcl_error_code]");
  }
  // --------------------------------------------------------------------------------


// ----- End of double include look
}
?>
