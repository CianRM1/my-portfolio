<?php
$pageTitle = "Skills | Cian's Portfolio";
include('includes/header.php');

$skillCategories = [
    "Frontend" => ["HTML", "CSS (Tailwind, Bootstrap)", "JavaScript (ES6)", "React", "Django-Unicorn"],
    "Backend" => ["Python (Django, OOP)", "NodeJS (ExpressJS, NextJS, OOP)", "TypeScript (React)", "MongoDB", "PostgreSQL", "MySQL", "PHP)"],
    "CMS" => ["WordPress", "Shopify", "Strapi"],
    "DevOps & Tools" => ["Linux", "Git (GitHub)", "Docker", "Azure", "Google Cloud", "AWS", "VSCode"],
    "Testing & Agile" => ["Unit testing", "Lean-Agile methodologies", "CI/CD pipelines", "Jira", "Trello"]
];
?>

<section id="skills" class="py-12">
    <div class="max-w-4xl mx-auto">
        <h2 class="text-3xl font-bold mb-8 text-center">My Skills</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <?php foreach ($skillCategories as $category => $skills): ?>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h3 class="text-xl font-semibold mb-4"><?php echo $category; ?></h3>
                    <ul class="space-y-2">
                        <?php foreach ($skills as $skill): ?>
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                <?php echo $skill; ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>