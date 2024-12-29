<?php
// Simple PHP file to display server information and a message

echo "<h1>Welcome to My PHP Docker Server from KubensLearn!</h1>";
echo "<p>This is a simple PHP page deployed using Dockerfile and Apache2vfrom KubensLearn.</p>";

echo "<h2>Server Information:</h2>";
echo "<p>PHP Version: " . phpversion() . "</p>";
echo "<p>Server Software: " . $_SERVER['SERVER_SOFTWARE'] . "</p>";
echo "<p>Document Root: " . $_SERVER['DOCUMENT_ROOT'] . "</p>";
?>
