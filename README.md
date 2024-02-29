# Technical Assessment - Drupal Site Creation with Paragraph and API.

Site credentials:
 User name : vijay
 Password : vijay
 or use drush cr on terminal 

 - API endpoints
1. http://eitb.api.com/web/company-details?_format=json
2. http://eitb.api.com/web/employee-details?_format=json
3. http://eitb.api.com/web/event?_format=json
Note Use Basic Auth : user name : vijay password : vijay (Postman Authentication)
You Can See Api endpoints data ( (http://eitb.api.com/web/fetch/data/api/company-details))

## Documentation:
## Follow the instructions below to set up the project on your local machine.

1. You can either clone the repository using Git or download it as a ZIP file.
2. The database files are included in the repository as a zip file.


- Create Virtual Host 

1. Open Apache Configuration: Locate the httpd-vhosts.conf file in the C:\xampp\apache\conf\extra directory of XAMPP installation.

2. Edit the Configuration File: Add a new <VirtualHost> block for in my project.
(<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/Elephant-in-the-Boardroom"
    ServerName eitb.api.com
</VirtualHost>)

3. Edit the Hosts File: Open the hosts file located in C:\Windows\System32\drivers\etc with a text editor with administrator privileges. Add the following line:
 127.0.0.1       eitb.api.com

## Description

- Create three Paragraph Types:
1. 	Company Details(Create a 4 field Title, Description, Image , CTA button)
2. 	Event(Create a 3 field Title, Start Date, End Date)
3. 	Employee Details(Create a 4 field Title, Description, Image , Role)

- Create Content Types:
1. Company Details(Add paragraph field field_company_details_reference )
2. Event(Add paragraph field field_events_para)
3. Employee Details( Add paragraph field field_employee_details_para)


- Build Pages with Paragraphs:
Create 3 pages, each using a different content type and each content type use different paragraph.

- Create custom module:
I have created API endpoints Using  RESTful Web Services module and custom module(/modules/custom/technical_assessment).

- API endpoints
1. http://eitb.api.com/web/company-details?_format=json
2. http://eitb.api.com/web/employee-details?_format=json
3. http://eitb.api.com/web/event?_format=json

You Can See Api endpoints data ( (http://eitb.api.com/web/fetch/data/api/company-details))

- Note Use Basic Auth :
  user name : vijay 
  password : vijay

I Create a Custom module(/modules/custom/technical_assessment).

i) technical_assessment.info.yml This is Module information file.
ii) /modules/custom/technical_assessment/src/Plugin/rest/resource inside this folder i create 3 php file which Provide a Api endpoints for 3 content type.
iii) /modules/custom/technical_assessment/src/Controller Folder i Create a FetchJsonData.php file this file Fetch Api end point data and return in twig file. 
iv) I create technical_assessment.links.task.yml Which Provide a Three Tabs.
show Api end point Data.

- For Testing Api 
 Use Postman 
