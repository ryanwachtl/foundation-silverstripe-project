# Installation Requirements

* composer
* sake
* silversmith
* dandelion
* compass

# Installation

`composer create-project rywa/foundation-silverstripe-project SITE_ROOT_DIR dev-master`

Rename `_ss_environment.sample.php` to `_ss_environment.php` and configure your environment and database settings

`cd SITE_ROOT_DIR`

`sake dev/build`

When you run `dev/build` SilverStripe will use the information in `_ss_environment.php` to connect to or create your database and populate it with default records for a fresh SilverStripe CMS project.

`silversmith init`

Create your structure in `/mysite/_fixtures.txt`

Then run `silversmith build-fixtures -seeding-level [1, 2, 3]`

Rename `dandelion.sample.yml` to `dandelion.yml` and configure your deployments

## Notes on composer `update` vs `install`

When you run `composer update` it's fetching the newest version of your dependencies as specified by `composer.json`. What you really need to do is deploy your updated `composer.lock`, and then re-run `composer install`.  You should never run `composer update` in production.  If however you deploy a new `composer.lock` with new dependencies and/or versions (after having run `composer update` in dev) and _then_ run `composer install` composer will update and install new your new dependencies.