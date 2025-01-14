The solution involves checking if the variable is set *and* assigning it a default value if it's not set before using it.

```php
<?php
$variable = isset($variable) ? $variable : 'default value'; //Using the ternary operator
echo $variable; //This will not raise an error since we've safely set the default value
?>
```

Alternatively, you can use a more verbose if statement:

```php
<?php
if (!isset($variable)) {
    $variable = 'default value';
}
echo $variable;
?>
```
This ensures that the `$variable` is always defined before being used, preventing the undefined variable error.