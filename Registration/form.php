[10:30 pm, 15/08/2004]:Souraksha S H /* General Body Styles */
body {
    font-family: 'Arial', sans-serif;
    background-color: #fce4ec; /* Light pink background */
    margin: 0;
    padding: 0;
    color: #333;
}

/* Container for the form */
.container {
    width: 50%;
    margin: 50px auto;
    background-color: #ffffff; /* White background for the form */
    padding: 40px;
    box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
    border-radius: 15px; /* Rounded corners */
    text-align: center;
}

/* Header Styles */
h2 {
    font-size: 2em;
    color: #e91e63; /* Pink color */
    margin-bottom: 20px;
    font-weight: bold;
}

/* Label Styles */
label {
    display: block;
    margin: 12px 0 6px;
    font-size: 1.1em;
    color: #e91e63; /* Pink color */
    font-weight: bold;
}
/* Input…
[10:30 pm, 15/08/2004] Souraksha S H  <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    // You can add your database insertion code here.
    // For simplicity, we redirect back to index.html with the user data.
    echo "<script>
        window.location.href = 'index.html';
        alert('Registration Successful');
    </script>";
}
?>
