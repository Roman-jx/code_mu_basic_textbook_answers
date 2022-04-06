<?php
// Task 1
$name = $user["name"] ?? "unknown";

// Task 2
$result = $user["name"] ?? $user["surname"] ?? "";
