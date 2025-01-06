# PHP Array Key Handling Pitfalls

This repository demonstrates a common, yet subtle, error in PHP involving the unexpected behavior of array keys when using a mix of numeric keys and the array append operator ([]).  The example highlights the issues that can arise from this behavior, specifically how it can lead to unexpected key assignments and potentially incorrect data ordering.

The `bug.php` file shows the problematic code, and `bugSolution.php` offers a solution for more predictable array manipulation.  Understanding this behavior is crucial to avoid logic errors and ensure data integrity in your PHP applications.