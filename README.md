# Form Builder for Laravel
#### library for creating data oriented html forms

## Usage:

Simply in controller:
```php
$form = FormBuilder::form(['action' => route('test'), 'method' => 'POST'])->make([
    ["type" => "text", "name" => "first_name", "label" => "First Name", "value" => "John"],
    ["type" => "text", "name" => "last_name", "value" => "Doe"]
]);
```

In view:
```php
<?php echo $form; ?>
```
## Attributes to add and their default values:

Attribute | Example | Descriptioin | Default Value
--- | --- | --- | ---
name | first_name | the name attribute of the input | No Default Value
type | textarea | the type of input you want it can have the usual values for html input tag (text, number, hidden ...) and it can also have the value of 'select' to create dropdown list or 'textarea' to create textarea element | text
value | John | it will be the default value of the field | No Default Value
label | First Name | The name that will show to user above the field | the value of name attribute converted to title format
id | first-name | the id attribute of the input field | No Default Value
class | first-name | the class attribute of the input field | No Default Value
container_class | first-name-container | the class attribute of the div that contains input field |No Default Value
placeholder | First Name | the placeholder attribute of the input field | No Default Value
options | ["John Doe"] | the list of options for if you choose type to be 'select' | No Default Value
attrs | onchange="inputChanged" | any custom attributes you want to add to the input field | No Default Value
error | First Name is required | the error message to show the user if there's an error | No Default Value
html | ```<button>Click Me</button>``` | html code to add if type attribute = raw_html | No Default Value

## You can also use it with javascript like so:

In controller:

```phpt
$formBuilderJs = FormBuilder::js();
```

In blade file:

```html
<?php echo $formBuilderJs ?>

<form id="exampleForm">
    {{ csrf_field() }}
</form>
<script type="text/javascript">
    let data = [
        {name: "name", id: "name", placeholder: "Please enter your name"},
        {type: "textarea", name: "description", id: "desc", class: "desc", container_class: "descContainer"},
        {type: "select", name: "car", options: ['Ferrari', 'BMW'], value: "BMW"},
        {type: "radio", name: "city", options: [{name: 'New York', value: 'new_york'}, {name: 'London', value: 'london'}], value: "london"},
        {type: "raw_html", value: "<hr>"},
        {type: "file", name: "image"}
    ];

    const formBuilder = new FormBuilder(data, '#exampleForm');
</script>
```

You can find the details about how to use it in Javascript in [here](https://github.com/AhmadAlkholy/Form-Builder#readme)
## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
