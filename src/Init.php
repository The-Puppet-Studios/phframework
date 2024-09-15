<?php

$directories = [
    'src',
    'server'
];

$files = [
    'src/App.php' => "<?php\n\n// App.php\n",
    'php.ini' => "; php.ini\n",
    '.gitignore' => "*.log\n*.tmp\nvendor/\n",
    'server/Server.php' => "<?php\n\n// Server.php\n"
];

// Create directories
foreach ($directories as $dir) {
    if (!is_dir($dir)) {
        mkdir($dir, 0777, true);
    }
}

// Create files with initial content
foreach ($files as $file => $content) {
    file_put_contents($file, $content);
}

// Initialize Git repository
$command = 'git init';
exec($command, $output, $return_var);

if ($return_var === 0) {
    echo "Git repository initialized successfully.\n";
} else {
    echo "Failed to initialize Git repository.\n";
    echo implode("\n", $output);
}

echo "Project structure created.\n";
?>