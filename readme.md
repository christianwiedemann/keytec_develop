# UI Patterns development

DDEV Development project for UI Patterns 2 including linting and test commands.


# Initialisation:
Start the ddev environment for local site install:

    ddev init

# Testing
To run all phpunit test run

    ddev phpunit

To run tests for submodules

      ddev phpunit --testsuite ui_patterns_core
      ddev phpunit --testsuite ui_patterns_field_formatters

# Run code style tests

To test the code style (Drupal and DrupalPractice) in the ui patterns run

    ddev phpcs

To fix the code style run

    ddev phpcbf

# Phpstan

    ddev phpstan

# Run all linting and tasks before commit

    ddev pre-commit
