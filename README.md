# Hotels API

This Project in **Laravel API** in this Project can Add, Edit, Delete, Get Hotel By ID, Get Nearby Hotels and Get Hotels that have similar name

## Installation

> Note: you may need to read [Laravel Installation](https://laravel.com/docs/5.8#installation).

After that Download this Product and run make sure you are using [http(s)//yoursite/api](http(s)//yoursite/api)


## Usage
> You can use [Postman](https://www.getpostman.com/) for test or any similar Application

#### The APIs:
* Insert.
* Update.
* Delete.
* Get By ID.
* Get Similar name.
* Get Nearby Hotels.


### Insert:
Use `/api/hotel` with `POST` **method** with below Parameters:
```
name: required and between:3,60
code: required and between:2,6
latitude: required with regex:/^[\d]{2}\.[\d]{6}$/ Ex. 31.960677
longitude: required with regex:/^[\d]{2}\.[\d]{6}$/ Ex. 31.960677,
description: optional and between:100,500
terms_and_conditions: optional and between:100,500
```

### Update
Use `/api/hotel/{HotelID}` with `PUT/PATCH` **method** with below Parameters:
```
name: required and between:3,60
code: required and between:2,6
latitude: required with regex:/^[\d]{2}\.[\d]{6}$/ Ex. 31.960677
longitude: required with regex:/^[\d]{2}\.[\d]{6}$/ Ex. 31.960677,
description: optional and between:100,500
terms_and_conditions: optional and between:100,500
```

### Delete
Use `/api/hotel/{HotelID}` with `DELETE` **method**.
Use the package manager [pip](https://pip.pypa.io/en/stable/) to install foobar.

### Get Hotel By ID
Use `/api/hotel/{HotelID}` with `GET` **method**.

### GET Similar name
Use `/api/hotels` with `GET` **method** with below Parameters:
```
name: string required // if you need to search about name
```

### Get Nearby Hotels.
Use `/api/hotels` with `GET` **method** with below Parameters:
```
latitude: required with regex:/^[\d]{2}\.[\d]{6}$/ Ex. 31.960677
longitude: required with regex:/^[\d]{2}\.[\d]{6}$/ Ex. 31.960677
```

## Configuration
In ***.env*** file you can add or edit if found it
```
NEARBY_AREA=0.0010
MAX_CLOSEST_HOTEL=10
```
###### Note: 
* ##### NEARBY_AREA: set the Area of find closing for hotels.
* ##### MAX_CLOSEST_HOTEL: set max number of hotel return when search about similar name.