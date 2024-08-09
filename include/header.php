<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
.mode-toggle{
    position: absolute;
    right: 20px;
}
.mode-toggle button{
    background-color: transparent;
    outline: none;
    border: none;

}
/* Default style for both icons */
.mode-toggle button img {
    width: 24px; /* Adjust size as needed */
    height: 24px;
    color: wheat;
}
/* Hide the dark mode icon by default */
#dark-icon {
    display: none;
}
/* Show dark mode icon when dark mode is active */
body.dark-mode #dark-icon {
    display: inline-block;
}

/* Hide light mode icon when dark mode is active */
body.dark-mode #light-icon {
    display: none;
}

.header {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    text-align: center;
    position: relative;
    margin-top: 60px;
}
.navbar.sticky {
    top: -80px; /* Adjust this value as needed */
    animation: fadeInDown 0.5s forwards;
}
.menu-icon{
    height: 60px;
    width: 60px;
    display: none;
    position: absolute;
    left: 10px;
    cursor: pointer;
    
}
.navbar {
    position: fixed;
    top: 0;
    width: 100%;
    background-color: #333;
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 1000;
    transition: top 0.3s ease-in-out; /* Ensure smooth transition */
    height: 60px;
}

.navbar a {
    color: white;
    padding: 14px 20px;
    text-decoration: none;
    text-align: center;
}

.navbar a:hover {
    background-color: #ddd;
    color: black;
}
.dark-mode .navbar a {
    color: #ddd;
}
    </style>
</head>
<body>
<div class="header">
        <h1>ProWebDev Solutions</h1>
        <p>We're an Independent Development & Design Agency</p>        
    </div>
    <div class="navbar" id="navbar">
        <img src="/icons/menu-icon.png" alt="menu-icon" class="menu-icon" id="menu-icon">
        <!-- <div class="list"> -->
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#pricing">Pricing</a>
        <a href="#contact">Contact</a>
        <a href="/proDev/page/Collection">Collection</a>
        <!-- </div> -->
        <div class="mode-toggle">
            <button id="mode-switch">
                <img id="light-icon" src="/icons/light-icon.png" alt="Light Mode">
                <img id="dark-icon" src="/icons/dark-icon.png" alt="Dark Mode">
            </button>
        </div>      
    </div>
</body>
</html>