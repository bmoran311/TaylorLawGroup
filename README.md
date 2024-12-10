# Taylor Law

Admin template is based upon tailadmin -> https://tailadmin.com
If we really likes it -  there's a pro version (should be like 35/40 bucks)

If we like this we should delete the /images folder content - as it's just testing/dummy files...

Local Install - 

Should simply be:
1) Checkout the Repo
2) npm install && npm run dev (this will install dependencies and spin up the dev server for css compiling)
3) composer install
4) php artisan serve


Note on database: When I was playing around - I was using sqlite - which is fine to use for dev purposes - if you want to use that great, if not - you'll need to setup a local DB and update the env file accordingly.

Documentation for sortable tables is here: 
https://github.com/tofsjonas/sortable
If you want a column to not be sortable - give the th a 'no-sort' class
