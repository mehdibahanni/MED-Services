<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>
    <style>
form {
max-width: 600px;
margin: 0 auto;
padding: 20px;
background-color: #fff;
border: 1px solid #ddd;
border-radius: 8px;
box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
animation: fadeInUp 2s ease-in-out;
}

form div {
margin-bottom: 15px;
}

form label {
display: block;
font-size: 16px;
margin-bottom: 5px;
font-weight: 700;
}

form input[type="text"],
form input[type="email"],
form textarea {
width: 100%;
padding: 10px;
border: 1px solid #ddd;
border-radius: 4px;
font-size: 16px;
box-sizing: border-box;
}

form textarea {
resize: vertical;
min-height: 150px;
max-height: 200px;
}

form button {
background-color: #4CAF50;
color: white;
padding: 10px 20px;
border: none;
border-radius: 4px;
cursor: pointer;
font-size: 16px;
font-weight: 700;
transition: background-color 0.3s ease;
}

form button:hover {
background-color: #45a049;
}

form input:focus,
form textarea:focus {
border-color: #4CAF50;
outline: none;
}
    </style>
</head>
<body>
<div class="section" id="contact">
        <h2>Contact Us</h2>
        <form>
            <div>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>