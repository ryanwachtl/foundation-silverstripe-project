Installation
=================

1. `php composer.phar create-project rywa/foundation-silverstripe-project YOUR_PROJECT_DIR dev-master`
2. configure your environment and database settings by editing `_ss_environemnt.php` (renamed from `_ss_environemnt.sample.php`)
3. `cd YOUR_PROJECT_DIR`
4. run `php ./framework/cli-script.php dev/build`

When you run `dev/build` SilverStripe will use the information in `_ss_environemnt.php` to connect to or create your database and populate it with default records for a fresh SilverStripe CMS project.

### Notes on composer `update` vs `install`

When you run `composer update` it's fetching the newest version of your dependencies as specified by `composer.json`. What you really need to do is deploy your updated `composer.lock`, and then re-run `composer install`.  You should never run `composer update` in production.  If however you deploy a new `composer.lock` with new dependencies and/or versions (after having run `composer update` in dev) and _then_ run `composer install` composer will update and install new your new dependencies.