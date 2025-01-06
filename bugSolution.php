To avoid unexpected key assignments when working with PHP arrays containing a mix of numeric keys and appending, it's best to explicitly manage the keys.  Here's an improved version of the previous example:

```php
$myArray = [1 => 'a', 2 => 'b'];
$nextKey = max(array_keys($myArray)) + 1; // Determine the next available key
$myArray[$nextKey] = 'c'; // Explicitly assign the key
$myArray[1] = 'd'; // Changes the value of key 1 from 'a' to 'd'
print_r($myArray); // Output: Array ( [1] => d [2] => b [3] => c ) 

//Or, if you are appending and need a specific order use array_push
array_push($myArray, 'e');
print_r($myArray); // Output: Array ( [1] => d [2] => b [3] => c [4] => e )
```

By explicitly determining the next available key, you can prevent automatic key assignment, leading to more predictable and reliable array manipulation.  This approach makes your code easier to understand and helps avoid potential errors.