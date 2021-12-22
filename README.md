# Orlando Web Api

## Installation

Simple clone the repo directly to your Magento root instalation to perfome the setup

git clone [repo-url] [path/to/the/directory]
>git clone https://github.com/mcbosc/m2_api.git  /home/devops/dev-project 

app/
├── code/ 
│   ├── Orlando/


After cloning, performe a setup:upgrade to install the new module call Orlando_WebApi

If the instalation is succssesfull you will see in your config.php the new module
you will have a new menu option, and a new table call orlando_webapi

### Api Consumption (POSTMAN)

#### Insert
must be a POST to
>{{your_magento_url}}/rest/V1/rest_test/insert

**Header**
Content-Type:application/json

**Body**
{
  "data": {"customer_id":"232", "discount":8 , "SKU":"KU123"}
}

#### Update
must be a POST to
>{{your_magento_url}}/rest/V1/rest_test/update/{{id}}/data

**Header**
Content-Type:application/json

**Body**
{
  "data": {"customer_id":"111", "discount":18 , "SKU":"KU123"}
}


#### Delete
must be a POST to
>{{your_magento_url}}/rest_test/delete/{{id}}

**Header**
Content-Type:application/json


### NOTE
- This is a simple test api for concept purpose
- I don't recomend this module in production server
- the api has anonymous permission anyone can access the endpoints
- no security at all (SQL injection/validation)
