<?php
// Task 1
echo preg_replace("#1[^ex]2#", "!", "something");

// Task 2
echo preg_replace("#x[^2-7]z#", "!", "something");

// Task 3
echo preg_replace("#z[^A-Z]*z#", "!", "something");

// Task 4
echo preg_replace("#x[^a-zA-Z1-5].2#", "!", "something");
