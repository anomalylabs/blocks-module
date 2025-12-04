# Blocks Module

*anomaly.module.blocks*

#### Manage sections of content.

The Blocks Module provides a powerful way to create and manage reusable content blocks with field-based configuration.

## Features

- Field-based block content
- Area-based block organization
- Multiple instance support
- Control panel management
- Template integration
- Block caching

## Usage

### Defining Block Areas

```php
// In your addon service provider
protected $blocks = [
    'sidebar' => [
        'description' => 'Sidebar content blocks'
    ],
    'footer' => [
        'description' => 'Footer content blocks'
    ]
];
```

### Rendering Blocks

```twig
{# Render all blocks in an area #}
{% for block in blocks('sidebar') %}
    {{ block.content|raw }}
{% endfor %}

{# Get specific block #}
{% set block = block('contact_info') %}
{% if block %}
    {{ block.content|raw }}
{% endif %}
```

### Creating Blocks

Navigate to **Content > Blocks** in the control panel to create and manage blocks.

## Requirements

- Streams Platform ^1.10
- PyroCMS 3.10+
- Configuration Module ^2.1+
- Settings Module ^2.1+

## License

The Blocks Module is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).
