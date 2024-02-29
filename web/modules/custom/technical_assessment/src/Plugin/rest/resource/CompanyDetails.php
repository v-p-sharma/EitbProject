<?php

namespace Drupal\technical_assessment\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "company_details",
 *   label = @Translation("Company Details"),
 *   uri_paths = {
 *     "canonical" = "/company-details"
 *   }
 * )
 */
class CompanyDetails extends ResourceBase {

   /**
   * Responds to entity GET requests.
   *
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {
    $response = [];
    $nid = \Drupal::entityQuery('node')
    ->condition('type', 'company_details')
    ->accessCheck(FALSE)
    ->execute();
   
    foreach($nid as $node_id){
        if ($node_id) {
       $node = \Drupal\node\Entity\Node::load($node_id);
       $title = $node->get('title')->value;
        $paragraph_field_items = $node->field_company_details_reference;
         foreach ($paragraph_field_items as $paragraph_item) {
           $paragraph = \Drupal\paragraphs\Entity\Paragraph::load($paragraph_item->target_id);
           $company_name = $paragraph->field_title->value;
           $company_des = strip_tags($paragraph->field_description->value);
           $company_image = \Drupal::service('file_url_generator')->generateAbsoluteString($paragraph->field_image->entity->getFileUri());
           $company_url = $paragraph->field_cta_button[0]->uri;
           $company_url_title = $paragraph->field_cta_button[0]->title;
           $response[] = [
             'company_name' => $company_name,
             'company_des' => $company_des,
             'company_image' => $company_image,
             'company_url' => $company_url,
             'company_url_title' => $company_url_title,
           ];
        }
     
        }
       
    }
  
    return new ResourceResponse($response);
  }
  }





