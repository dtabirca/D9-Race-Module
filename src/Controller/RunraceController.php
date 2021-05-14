<?php
namespace Drupal\runrace\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * Provides route responses for the Example module.
 */
class RunraceController extends ControllerBase
{

  /**
   * Returns a simple page.
   *
   * @return array
   *   A simple renderable array.
   */
  public function raceOptions()
  {
    return [
      '#markup' => 'raceOptions',
    ];
  }

  /**
   * [registeredCompetitors description]
   * @return [type] [description]
   */
  public function registeredCompetitors()
  {
    return [
      '#markup' => 'registeredCompetitors',
    ];
  }  

  /**
   * [resultsCertificates description]
   * @return [type] [description]
   */
  public function resultsCertificates()
  {
    return [
      '#markup' => 'resultsCertificates',
    ];
  }  

  /**
   * [dataImportExport description]
   * @return [type] [description]
   */
  public function dataImportExport()
  {
    return [
      '#markup' => 'dataImportExport',
    ];
  }  
}