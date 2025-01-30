# Display a Dynamate-branded signature

[![Latest Version on Packagist](https://img.shields.io/packagist/v/esign/craft-dynamate-signature.svg?style=flat-square)](https://packagist.org/packages/esign/craft-dynamate-signature)
[![Total Downloads](https://img.shields.io/packagist/dt/esign/craft-dynamate-signature.svg?style=flat-square)](https://packagist.org/packages/esign/craft-dynamate-signature)
![GitHub Actions](https://github.com/esign/craft-dynamate-signature/actions/workflows/main.yml/badge.svg)

This package allows you to display a [Dynamate](https://www.dynamate.be)-branded signature in your Laravel application.

## Installation

You can install the package via composer:

```bash
composer require esign/craft-dynamate-signature
```

```bash
php craft plugin/install _dynamate-signature
```

## Usage
To display the Dynamate-branded signature, you may use any of the following variants:

```twig
{% include '_dynamate-signature/signature.twig' %}
```

You can override the default signature template by creating your own template at:
`templates/_dynamate-signature/signature.twig`

This will take precedence over the plugin's default template.

### Testing

```bash
composer test
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.