<?php
$pageTitle = "About Me | Cian's Portfolio";
include('includes/header.php');

$bio = "I am an attentive and swift learner, leveraging over two years of combined development experience.";
$experience = "My experience working on public sector projects at NewRedo and my early exposure to organisational challenges within the NHS have given me a unique insight into the intersection of technology and public service.";
?>

<section id="about" class="py-12">
    <div class="max-w-3xl mx-auto">
        <h2 class="text-3xl font-bold mb-8 text-center">About Me</h2>
        
        <div class="bg-white shadow-lg rounded-lg p-6 mb-8">
            <p class="mb-4"><?php echo $bio; ?></p>
            <p><?php echo $experience; ?></p>
        </div>
        
        <div class="bg-white shadow-lg rounded-lg p-6">
            <h3 class="text-xl font-semibold mb-4">Education</h3>
            <ul class="space-y-3">
                <li>
                    <strong>Baltic Apprenticeships (2021 – 2023)</strong><br>
                    Level 3 Software Development Technician Apprenticeship
                </li>
                <li>
                    <strong>University of Hull (2014 – 2017)</strong><br>
                    BSc (Hons) Biomedical Science Graduate; 2:1
                </li>
                <!-- Add more education items -->
            </ul>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>