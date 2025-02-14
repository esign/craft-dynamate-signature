# Display a Dynamate-branded signature

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esign/craft-dynamate-signature.svg?style=flat-square)](https://packagist.org/packages/esign/craft-dynamate-signature)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/craft-dynamate-signature.svg?style=flat-square)](https://packagist.org/packages/esign/craft-dynamate-signature)
![GitHub Actions](https://github.com/esign/craft-dynamate-signature/actions/workflows/main.yml/badge.svg)

This package allows you to display a [Dynamate](https://www.dynamate.be)-branded signature in your Craft CMS application.

## Installation

You can install the package via composer:

```bash
composer require esign/craft-dynamate-signature
```

```bash
php craft plugin/install _dynamate-signature
```

## Usage
To display the Dynamate contact information in your head, please use following variant:
```twig
{% include '_dynamate-signature/head.twig' %}
```

To display the Dynamate-branded signature, you may use any of the following variants:

```twig
{% include '_dynamate-signature/default.twig' %}
{% include '_dynamate-signature/default.twig' with {
    theme: 'light',
    animated: true,
    positionRight: '4rem',
    positionAbsolute: true,
    colorOverride: null,
} %}

{% include '_dynamate-signature/powered-by.twig' %}
{% include '_dynamate-signature/powered-by.twig' with {
    theme: 'light',
    colorOverride: null,
} %}
```

You can override the default signature template by creating your own template at:
```bash
templates/_dynamate-signature/signature.twig
```

This will take precedence over the plugin's default template.

### Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.