<?php

namespace Drupal\technical_assessment\Plugin\rest\resource;

use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;

/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "event",
 *   label = @Translation("event"),
 *   uri_paths = {
 *     "canonical" = "/event"
 *   }
 * )
 */
class Event extends ResourceBase {

   /**
   * Responds to entity GET requests.
   *
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {
    $response = [];
    $nid = \Drupal::entityQuery('node')
    ->condition('type', 'event')
    ->accessCheck(FALSE)
    ->execute();
   
    foreach($nid as $node_id){
        if ($node_id) {
       $node = \Drupal\node\Entity\Node::load($node_id);
       $title = $node->get('title')->value;
        $paragraph_field_items = $node->field_events_para;
         foreach ($paragraph_field_items as $paragraph_item) {
           $paragraph = \Drupal\paragraphs\Entity\Paragraph::load($paragraph_item->target_id);
           $event_name = $paragraph->field_event_title->value;
           $event_start_date = $paragraph->field_start_date[0]->value;
           $event_end_date = $paragraph->field_end_date[0]->value;   
           $response[] = [
            'event_name' => $event_name,
            'event_start_date' => $event_start_date,
            'event_end_date' => $event_end_date,
          ];
         }
        }
    }
  
    return new ResourceResponse($response);
  }
  }





