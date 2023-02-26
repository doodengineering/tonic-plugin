# Tonic WordPress Plugin Boilerplate

Welcome to the plugin boilerplate. This is a boilerplate for WordPress plugins that is based on the [Tonic](https://www.github.com/doodengineering/tonic) framework.

## Getting Started

Simply run the following commands in your local WordPress plugin directory to get started:

```bash
# Download the plugin boilerplate.
composer create-project doodengineering/tonic-plugin plugin-name

# Change into the plugin directory.
cd tonic-plugin

# Install webpack build dependencies.
npm install
```

## Directory Structure

The plugin directory must be structured in the following way.

```sh
my-plugin/ # The root plugin folder.
├─ lib/ # <-- Contains composer dependencies.
├─ plugin/ # <-- Contains functionality.
│  ├─ Feature/ # <-- `Feature` classes.
│  ├─ View/ # <-- View-related files.
│  │  ├─ Component/ # <--  `Component` classes.
│  │  ├─ Shortcode/ # <--  `Shortcode` classes.
├─ resources/ # <-- Contains build dependencies.
│  ├─ css/ # <-- Stylesheets.
│  ├─ js/ # <-- Scripts.
│  ├─ views/ # <-- Blade templates.
├─ languages/ # <-- Contains translations.
│  ├─ my-plugin.pot # <-- Translations template.
├─ public/ # <-- Publicly available resources.
├─ my-plugin.php # <-- WordPress required.
```
