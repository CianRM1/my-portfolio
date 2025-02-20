<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle : "Cian's Portfolio"; ?></title>
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header class="bg-gray-800 text-white p-4">
        <div class="container mx-auto flex justify-between items-center">
            <h1 class="text-xl font-bold">Cian Rennie May</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="index.php" class="hover:text-blue-300">Home</a></li>
                    <li><a href="about.php" class="hover:text-blue-300">About</a></li>
                    <li><a href="skills.php" class="hover:text-blue-300">Skills</a></li>
                    <li><a href="projects.php" class="hover:text-blue-300">Projects</a></li>
                    <li><a href="contact.php" class="hover:text-blue-300">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container mx-auto p-4">
</body>
</html>