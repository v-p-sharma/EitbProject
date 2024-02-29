<?php 
namespace Drupal\technical_assessment\Controller;
use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use GuzzleHttp\Client;

class FetchJsonData extends ControllerBase {
      /**
   * The HTTP client.
   *
   * @var \GuzzleHttp\Client
   */
  protected $httpClient;

  /**
   * Constructs a new YourController object.
   *
   * @param \GuzzleHttp\Client $http_client
   *   The HTTP client.
   */
  public function __construct(Client $http_client) {
    $this->httpClient = $http_client;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('http_client')
    );
  }

public function companyDetails(){
// Set up basic authentication credentials.
$auth = ['vijay', 'vijay'];

// Make a GET request to the API endpoint with basic authentication.
try {
  $response = $this->httpClient->request('GET', 'http://eitb.api.com/web/company-details?_format=json', [
    'auth' => $auth,
  ]);

  // Get the JSON response body.
  $data = json_decode($response->getBody(), TRUE);
  // Render the data.
  // You can customize the rendering based on your requirements.
  $output = [
    '#theme' => 'company_details',
    '#data' => $data,
  ];

  return $output;
} catch (\Exception $e) {
  // Handle exceptions, e.g., if the request fails.
  \Drupal::logger('technical_assessment')->error('Error fetching company details: @message', ['@message' => $e->getMessage()]);
  
  return ['#markup' => $this->t('An error occurred while fetching company details.')];
}
}
public function employeeDetails(){
   // Set up basic authentication credentials.
   $auth = ['vijay', 'vijay'];

   // Make a GET request to the API endpoint with basic authentication.
   try {
     $response = $this->httpClient->request('GET', 'http://eitb.api.com/web/employee-details?_format=json', [
       'auth' => $auth,
     ]);

     // Get the JSON response body.
     $data = json_decode($response->getBody(), TRUE);
     // Render the data.
     // You can customize the rendering based on your requirements.
     $output = [
       '#theme' => 'employee_details',
       '#data' => $data,
     ];

     return $output;
   } catch (\Exception $e) {
     // Handle exceptions, e.g., if the request fails.
     \Drupal::logger('technical_assessment')->error('Error fetching employee details: @message', ['@message' => $e->getMessage()]);
     
     return ['#markup' => $this->t('An error occurred while fetching employee details.')];
   }
}
public function events(){
// Set up basic authentication credentials.
$auth = ['vijay', 'vijay'];

// Make a GET request to the API endpoint with basic authentication.
try {
  $response = $this->httpClient->request('GET', 'http://eitb.api.com/web/event?_format=json', [
    'auth' => $auth,
  ]);

  // Get the JSON response body.
  $data = json_decode($response->getBody(), TRUE);
  // Render the data.
  // You can customize the rendering based on your requirements.
  $output = [
    '#theme' => 'events',
    '#data' => $data,
  ];

  return $output;
} catch (\Exception $e) {
  // Handle exceptions, e.g., if the request fails.
  \Drupal::logger('technical_assessment')->error('Error fetching events: @message', ['@message' => $e->getMessage()]);
  
  return ['#markup' => $this->t('An error occurred while fetching events.')];
}
}
}