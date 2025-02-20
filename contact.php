<?php
$pageTitle = "Contact Me | Cian's Portfolio";
include('includes/header.php');

$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";
$formSubmitted = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        // Check if name contains only letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Only letters and white space allowed";
        }
    }
    
    // Validate email
    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    
    // Validate message
    if (empty($_POST["message"])) {
        $messageErr = "Message is required";
    } else {
        $message = test_input($_POST["message"]);
    }
    
    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {
        // set up the email to me

        $formSubmitted = true;
        
        // Reset form fields after successful submission
        $name = $email = $message = "";
    }
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>

<section id="contact" class="py-12">
    <div class="max-w-2xl mx-auto">
        <h2 class="text-3xl font-bold mb-8 text-center">Get In Touch</h2>
        
        <?php if ($formSubmitted): ?>
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-6" role="alert">
                <p>Thank you for your message! I'll get back to you as soon as possible.</p>
            </div>
        <?php endif; ?>
        
        <div class="bg-white shadow-lg rounded-lg p-6">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-medium mb-2">Name</label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="<?php echo $name; ?>"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 <?php echo $nameErr ? 'border-red-500' : ''; ?>"
                    >
                    <?php if ($nameErr): ?>
                        <p class="text-red-500 text-sm mt-1"><?php echo $nameErr; ?></p>
                    <?php endif; ?>
                </div>
                
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email"
                        value="<?php echo $email; ?>"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 <?php echo $emailErr ? 'border-red-500' : ''; ?>"
                    >
                    <?php if ($emailErr): ?>
                        <p class="text-red-500 text-sm mt-1"><?php echo $emailErr; ?></p>
                    <?php endif; ?>
                </div>
                
                <div class="mb-6">
                    <label for="message" class="block text-gray-700 font-medium mb-2">Message</label>
                    <textarea 
                        name="message" 
                        id="message" 
                        rows="5"
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 <?php echo $messageErr ? 'border-red-500' : ''; ?>"
                    ><?php echo $message; ?></textarea>
                    <?php if ($messageErr): ?>
                        <p class="text-red-500 text-sm mt-1"><?php echo $messageErr; ?></p>
                    <?php endif; ?>
                </div>
                
                <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg transition duration-300">
                    Send Message
                </button>
            </form>
        </div>
    </div>
</section>

<?php include('includes/footer.php'); ?>