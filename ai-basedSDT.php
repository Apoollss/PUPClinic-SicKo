<?php
require_once ('src/includes/session-nurse.php');
require_once ('src/includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SicKo - AI-Based SDT</title>
    <link rel="icon" type="image/png" href="src/images/sicko-logo.png">
    <link rel="stylesheet" href="src/styles/dboardStyle.css">
    <link rel="stylesheet" href="src/styles/modals.css">
    <link rel="stylesheet" href="vendors/bootstrap-5.0.2/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>

<body>
    <div class="loader d-flex">
        <img src="src/images/loader.gif">
    </div>

    <div class="main-content">
        <div class="overlay" id="overlay"></div>

        <?php
        include ('src/includes/sidebar/ai-basedSDT.php');
        ?>

        <div class="content" id="content">
            <div class="ai-header-content">
                <div class="ai-header-image-container">
                    <img src="src/images/ai-header.svg" alt="AI Header" class="ai-header">
                </div>
                <div class="ai-header-text-container">
                    <div class="ai-header-text">
                        <div class="ai-text">
                            <p>AI-Based,<span class="bold"> Symptoms</span></p>
                            <p class="bold"
                                style="color: #E13F3D; font-size: 50px; font-family: 'Poppins', sans-serif;">
                                Diagnostic Tool</p>
                            <p
                                style="color: black; font-size: 17px; font-family: 'Poppins', sans-serif; text-align: justify;">
                                Detects and generates possible diagnosis <br> based on patient symptoms.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="left-header">
                <p style="color: #E13F3D">Type symptoms...</p>
            </div>

            <!-- Keyword Tags Container -->
            <form id="diagnosis-form" method="post" action="generated-diagnosis.php">
                <div class="symptoms-input-container">
                    <input type="text" id="symptoms-input" name="symptoms" placeholder="Type symptoms keywords..."
                        autocomplete="off">
                    <div class="tags-container" id="tags-container"></div>
                </div>

                <div class="generate-diagnosis-box">
                    <div class="generate-diagnosis-text" id="generate-diagnosis-btn">Generate Diagnosis</div>
                </div>
            </form>

            <?php
            include ('src/includes/footer.php');
            ?>
        </div>
        <script src="vendors/bootstrap-5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="src/scripts/script.js"></script>
        <script>
            function simulateContentLoading() {
                showLoader();
                setTimeout(function () {
                    hideLoader();
                    showContent();
                }, 3000);
            }

            function showLoader() {
                console.log("Showing loader.");
                document.querySelector('.loader').classList.add('visible');
            }

            function hideLoader() {
                console.log("Hiding loader with transition.");
                const loader = document.querySelector('.loader');
                loader.style.transition = 'opacity 0.5s ease-out';
                loader.style.opacity = '0';
                loader.addEventListener('transitionend', function (event) {
                    if (event.propertyName === 'opacity') {
                        loader.classList.remove('d-flex');
                        loader.style.display = 'none';
                    }
                });
            }

            function showContent() {
                console.log("Showing content.");
                const body = document.querySelector('.main-content');
                body.style.display = 'block';
            }
            simulateContentLoading();
        </script>
        <script>
            document.getElementById('generate-diagnosis-btn').addEventListener('click', function () {
                document.getElementById('diagnosis-form').submit();
            });

            document.getElementById('generate-diagnosis-btn').addEventListener('click', function () {
                // Get the text content of each tag box
                var tagsContainer = document.getElementById('tags-container');
                var tags = tagsContainer.querySelectorAll('.tag');
                var symptomsString = '';
                tags.forEach(function (tag) {
                    symptomsString += tag.textContent.trim() + ', '; // Concatenate the symptoms with comma
                });
                // Remove the trailing comma and whitespace
                symptomsString = symptomsString.replace(/,\s*$/, '');

                // Set the concatenated symptoms string as the value of the hidden input field
                document.getElementById('symptoms-input').value = symptomsString;

                // Submit the form
                document.getElementById('diagnosis-form').submit();
            });
        </script>

</body>

</html>