<?php

namespace Drupal\technical_assessment\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "employee_details",
 *   label = @Translation("Employee Details"),
 *   uri_paths = {
 *     "canonical" = "/employee-details"
 *   }
 * )
 */
class EmployeeDetails extends ResourceBase {

   /**
   * Responds to entity GET requests.
   *
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {
    $response = [];
    $nid = \Drupal::entityQuery('node')
    ->condition('type', 'employee_details')
    ->accessCheck(FALSE)
    ->execute();
   
    foreach($nid as $node_id){
        if ($node_id) {
       $node = \Drupal\node\Entity\Node::load($node_id);
       $title = $node->get('title')->value;
        $paragraph_field_items = $node->field_employee_details_para;
         foreach ($paragraph_field_items as $paragraph_item) {
           $paragraph = \Drupal\paragraphs\Entity\Paragraph::load($paragraph_item->target_id);
           $employee_name = $paragraph->field_title->value;
           $employee_des = strip_tags($paragraph->field_description->value);
           $employee_image = \Drupal::service('file_url_generator')->generateAbsoluteString($paragraph->field_image->entity->getFileUri());
           $employee_role = $paragraph->field_role[0]->value;
           $response[] = [
             'employee_name' => $employee_name,
             'employee_des' => $employee_des,
             'employee_image' => $employee_image,
             'employee_role' => $employee_role,
           ];
        }
     
        }
       
    }
  
    return new ResourceResponse($response);
  }
  }





