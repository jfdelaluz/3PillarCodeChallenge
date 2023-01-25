# 3Pillar Code Challenge

Both frontend and backend services exist in this same repository.

For the backend section, a page displaying the list of users existing in database was created.
Also, a cron to send a dummy notification to every user was set to run at midnight.

For the frontend, a single login page was created to authenticate users, and if successful, they are redirected to the backend page showing the users list.

## Backend

1. First requirement is for the service to run on port ```8000```
2. Database migrations required, execute:
```
php artisan migrate
```
3. To run project move to folder ```backend``` and execute:
```
php artisan serve
```

## Frontend

1. Move to folder ```frontend``` and execute command:
```
yarn dev
```
