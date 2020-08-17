# Lumen PHP Framework
Backend app for Closed on Sundays. Handles API calls from the Unity games. 

## Lambda Config
The src/app/php directory structure is to provide compatibility with AWS lambda (currently untested).

## Usage (Local Dev)
1. Check out the repo. 
2. From the repo directory, navigate to `src/php/lumen`.
3. Run `docker-compose up`. Add `-d` if you wish to run in detached mode.
4. If this is the first time running this repo, once the container is active run `docker-compose exec web php artisan migrate --seed` to run the initial data migration.
5. Access the site via http://localhost:8081, you should be greeted by the Lumen summary.
6. View scores with GET /endlessrunner/scores. (http://localhost:8081/endlessrunner/scores)