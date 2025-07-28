# magento2-import-skip-url-rewrite

A lightweight Magento 2 module that prevents URL rewrite generation during product imports, solving "Duplicate entry" errors. Ideal for headless or API-driven setups.

## Installation

There are two steps to install this module:

1.  Add the repository to your Magento `composer.json` file.
2.  Install and enable the module via the command line.

### 1. Add Repository to `composer.json`

In your Magento project's root directory, open the `composer.json` file and add the following `"repositories"` section. If you already have a `repositories` section, just add the new entry to it.

```json
{
    ...
    "repositories": [
        {
            "type": "vcs",
            "url": "[https://github.com/heinrichb/magento2-import-skip-url-rewrite.git](https://github.com/heinrichb/magento2-import-skip-url-rewrite.git)"
        }
    ],
    ...
}
```

### 2. Install and Enable the Module

Run the following commands from your Magento project's root directory:

```bash
# Install the module with Composer
composer require heinrichb/skipurlrewrite:dev-main

# Enable the new module
php bin/magento module:enable heinrichb_skipurlrewrite

# Apply the installation and database changes
php bin/magento setup:upgrade

# Clear the cache to ensure everything is loaded correctly
php bin/magento cache:flush
```

The module is now installed and active. It will automatically prevent URL rewrites from being generated during any future product imports.
