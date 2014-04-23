# Installation

`php composer.phar create-project rywa/foundation-silverstripe-project YOUR_PROJECT_DIR dev-master`

Rename `_ss_environment.sample.php` to `_ss_environment.php` and configure your environment and database settings.

`cd YOUR_PROJECT_DIR`

`php ./framework/cli-script.php dev/build`

When you run `dev/build` SilverStripe will use the information in `_ss_environment.php` to connect to or create your database and populate it with default records for a fresh SilverStripe CMS project.

## Notes on composer `update` vs `install`

When you run `composer update` it's fetching the newest version of your dependencies as specified by `composer.json`. What you really need to do is deploy your updated `composer.lock`, and then re-run `composer install`.  You should never run `composer update` in production.  If however you deploy a new `composer.lock` with new dependencies and/or versions (after having run `composer update` in dev) and _then_ run `composer install` composer will update and install new your new dependencies.