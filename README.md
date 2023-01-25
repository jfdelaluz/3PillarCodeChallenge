# 3Pillar Code Challenge

Both frontend and backend services exist in this same repository.

For the backend section, a page displaying the list of users existing in database was created.
Also, a cron to send a dummy notification to every user was set to run at midnight.

For the frontend, a single login page was created to authenticate users, and if successful, they are redirected to the backend page showing the users list.

## Backend

1. Move to folder ```backend```
2. Install dependencies:
```
composer install
```
3. The service must run on port ```8000```
4. Database migrations required, execute:
```
php artisan migrate
```
5. To run project move to folder ```backend``` and execute:
```
php artisan serve
```

## Frontend

1. Move to folder ```frontend```
2. To install dependencies:
```
yarn
```
3. To run project:
```
yarn dev
```
