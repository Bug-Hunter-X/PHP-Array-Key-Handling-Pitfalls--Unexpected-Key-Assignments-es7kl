In PHP, a common yet often subtle error involves incorrect handling of array keys, particularly when dealing with numerical keys.  Consider the following example:

```php
$myArray = [1 => 'a', 2 => 'b'];
$myArray[] = 'c'; //Adds 'c' with key 3
$myArray[1] = 'd'; // Changes the value of key 1 from 'a' to 'd'
print_r($myArray);
```

While seemingly straightforward, this code can lead to unexpected results.  Adding an element using `[]` assigns a numerical key, automatically incrementing. Changing a specific key with a numeric value will override its original value. If you intended to append to the end, or intended to maintain order, this can introduce hard-to-find issues. The output will be: `Array ( [1] => d [2] => b [3] => c )` demonstrating the unexpected key assignments. 