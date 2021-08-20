<p align="center">Social Media Platform</p>

## UI functionality 
- Can create a user
- Can view list of all registered users
- Can view all Posts
- Can post
- Can view posts for specific user
- Can comment on a post
- Can view all comments on a post

### Schemes:
|Table Name | Description |
| ------------- | ------------- |
|users| Store all user data|
|posts| Store all Posts by Users|
|comments| Store all Comments on Posts|

### How to start the server
 - Clone the repo
 - Install php, apache.
 - update composer
 - redirect to repo head ```cd day3/user-store```
 - make changes in ```.env``` file
 - run the migrations ```php artisan migrate```
 - run following commands to start the server ```php artisan serve```
 - open the link shown as output (http://127.0.0.1:8000)
