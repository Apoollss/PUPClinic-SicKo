<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SicKo - AI-Based SDT</title>
    <link rel="icon" type="image/png" href="src/images/sicko-logo.png"> 
    <link rel="stylesheet" href="src/styles/dboardStyle.css">
</head>
<body>
    <div class="overlay" id="overlay"></div>

    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <img src="src/images/sidebar-logo.svg" alt="SicKo Logo" class="sidebar-logo">
        </div>

        <div class="sidebar-content">
            <img src="src/images/sidebar_design.png" alt="Sidebar Design" class="sidebar-design">
            <div class="new-treatment-box">
                <div class="new-treatment-text">
                    Create New <br> Treatment Record
                </div>
                <img src="src/images/add-button.svg" alt="Add Button Icon" class="add-button-icon" onclick="window.location.href='treatment-record.php'">
            </div>
            <!-- Dashboard -->
            <div class="menu-item">
                <img src="src/images/dashboard-icon.svg" alt="dashboard Icon" class="dashboard-icon">
                <span class="menu-text" onclick="window.location.href='dashboard.php'">Dashboard</span>
            </div>

            <!-- Ai-based SDT -->
            <div class="menu-item">
                <img src="src/images/pill.svg" alt="ai Icon" class="ai-icon">
                <span class="menu-text" onclick="window.location.href='ai-basedSDT.php'">AI-based SDT</span>
            </div>

            <!-- Patients -->
            <div class="menu-item">
                <img src="src/images/patients.svg" alt="patients Icon" class="patients-icon">
                <span class="menu-text" onclick="window.location.href='patients.php'">Patients</span>
            </div>

            <!-- Records -->
            <div class="menu-item">
                <img src="src/images/records.svg" alt="records Icon" class="records-icon">
                <span class="menu-text" onclick="window.location.href='treatment-record.php'">Records</span>
            </div>

            <!-- Med Reports -->
            <div class="menu-item">
                <img src="src/images/med-reports.svg" alt="medreports Icon" class="medreports-icon">
                <span class="menu-text" onclick="window.location.href='medreports.php'">Med Reports</span>
            </div>

            <!-- New header title for "Accounts" -->
            <div class="menu-header">
                <span class="menu-header-text">ACCOUNT</span>
            </div>

            <!-- New menu items -->
            <div class="menu-item">
                <img src="src/images/notifications.svg" alt="notifications Icon" class="notifications-icon">
                <span class="menu-text" onclick="window.location.href='notifications.php'">Notifications</span>
            </div>

            <div class="menu-item">
                <img src="src/images/settings.svg" alt="settings Icon" class="settings-icon">
                <span class="menu-text" onclick="window.location.href='settings.php'">Settings</span>
            </div>

            <div class="menu-item">
                <img src="src/images/log-out.svg" alt="log-out Icon" class="log-out-icon">
                <span class="menu-text" onclick="window.location.href='logout.php'">Log Out</span>
            </div>
        </div>
    </div>

    <div class="topnav" id="topnav">
    <div class="menu-toggle" id="menu-toggle" onclick="toggleSidebar()">
        <div id="menu-icon">&#9776;</div>
        <div id="close-icon">&times;</div>
    </div>
    <img src="src/images/topnav-logo.svg" alt="SicKo Logo" class="logo">
    </div>

    <div class="content" id="content">
        <div class="ai-header-content">
        <div class="ai-header-image-container">
            <img src="src/images/ai-header.svg" alt="AI Header" class="ai-header">
        </div>
        <div class="ai-header-text-container">
            <div class="ai-header-text">
                <div class="ai-text">
                    <p>AI-Based,<span class="bold"> Symptoms</span></p>
                    <p class="bold" style="color: #E13F3D; font-size: 50px; font-family: 'Poppins', sans-serif;">Diagnostic Tool</p>
                    <p style="color: black; font-size: 17px; font-family: 'Poppins', sans-serif; text-align: justify;">Detects and generates possible diagnosis <br> based on patient symptoms.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="left-header">
        <p style="color: #E13F3D" >Type symptoms...</p>
    </div>

    <!-- Keyword Tags Container -->
    <div class="symptoms-input-container">
        <input type="text" id="symptoms-input" placeholder="Type symptoms keywords..." autocomplete="off">
        <div class="tags-container" id="tags-container"></div>
    </div>

    <div class="generate-diagnosis-box">
        <div class="generate-diagnosis-text" onclick="window.location.href='generated-diagnosis.php'">Generate Diagnosis</div>
    </div>
      
    <form id="diagnosis-form" method="post" action="generated-diagnosis.php">
        <div class="symptoms-input-container">
            <input type="text" id="symptoms-input" name="symptoms" placeholder="Type symptoms keywords...">
            <div class="tags-container" id="tags-container"></div>
        </div>

        <div class="generate-diagnosis-box">
        <div class="generate-diagnosis-text" id="generate-diagnosis-btn">Generate Diagnosis</div>
        </div>
    </form>

    <div class="footer">
    <div class="footer-text">
        <div class="footer-left">
            <div class="sicko-text">SicKo</div>
            <div class="separator"></div>
            <div class="pup-text">
                <p>Polytechnic University of the Philippines Santa Rosa Campus.</p>
                <p>&copy; 2024 PUP Sta. Rosa Campus Clinic. All Rights Reserved.</p>
            </div>
        </div>
        <div class="footer-right">
        <div class="footer-icons">
            <a href="link1.html"><img src="src/images/facebook.svg" class="footer-icon" alt="facebook"></a>
            <a href="link2.html"><img src="src/images/instagram.svg" class="footer-icon" alt="instagram"></a>
            <a href="link3.html"><img src="src/images/twitter.svg" class="footer-icon" alt="twitter"></a>
            <a href="link4.html"><img src="src/images/discord.svg" class="footer-icon" alt="discord"></a>
        </div>
            <p class="support-text">Support: bsit.teamsicko@gmail.com</p>
        </div>
    </div>
    </div>
    <script src="src/scripts/script.js"></script>
    <script>
        document.getElementById('generate-diagnosis-btn').addEventListener('click', function() {
            document.getElementById('diagnosis-form').submit();
        });
    </script>
</body>
</html>
