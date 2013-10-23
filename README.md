SilverStripe Composer Project Starter
=================

A customized composer based SilverStripe project installer. Suited for LAMP stacks with PHP 5.3.26 +

Installation
=================

1. `git clone https://github.com/ryanwachtl/silverstripe-init.git my-silverstripe-project`
2. remove existing git history `rm -rf !$/.git`
3. `cd my-silverstripe-project`
4. configure your environment and database settings by editing `_ss_environemnt.php`
5. run `composer install`

When you run `composer install` SilverStripe will use the information in `_ss_environemnt.php` to connect to or create your database and populate it with default records for a fresh SilverStripe CMS project.

### Notes on composer `update` vs `install`

When you run `composer update` it's fetching the newest version of your dependencies as specified by `composer.json`. What you really need to do is deploy your updated `composer.lock`, and then re-run `composer install`.  You should never run `composer update` in production.  If however you deploy a new `composer.lock` with new dependencies and/or versions (after having run `composer update` in dev) and _then_ run `composer install` composer will update and install new your new dependencies.