# How to contribute

Thanks for considering to contribute to the `ship-it-emoji`. Please follow these simple guidelines:

- All code __MUST__ follow the PSR-2 coding standard. Please see [PSR-2](http://www.php-fig.org/psr/psr-2/) for more details.

- Coding standard compliance __MUST__ be ensured before committing or opening pull requests by running `composer ship-it-emoji:cs-fix` or `composer ship-it-emoji:cs-lint` in the root directory of this repository.

- Commits __MUST__ use the provided [commit message template](../.gitmessage), which follows the [rules](http://chris.beams.io/posts/git-commit/) described by Chris Beams. It can be configured via `composer ship-it-emoji:configure-commit-template` prior to committing.

- All changes on the `.travis.yml` file __MUST__ be linted before committing or opening pull requests by running `composer ship-it-emoji:travis-lint` in the root directory of this repository.

- All upstreamed contributions __MUST__ use [feature / topic branches](https://git-scm.com/book/en/v2/Git-Branching-Branching-Workflows) to ease merging.
