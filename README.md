# Lumen PHP Framework
Backend app for Closed on Sundays. Handles API calls from the Unity games. 

## Lambda Config
The src/app/php directory structure is to provide compatibility with AWS lambda (currently untested).

## Usage (Local Dev)
1. Check out the repo. 
2. Run `docker-compose up`.
3. If this is the first time running this repo, once the container is active run `docker-compose web php artisan migrate --seed` to run the initial data migration.
4. Access the site via http://localhost:8081, you should be greeted by the Lumen summary.
5. View scores with GET /endlessrunner/scores. (http://localhost:8081/endlessrunner/scores)