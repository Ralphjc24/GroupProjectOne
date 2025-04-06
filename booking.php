<html>
<body>
<style>
        body {
            background-color: lightblue;
            color: purple;
        }
    </style>
    Welcome <?php echo $_POST["uname"]; ?><be>
    <h1> Let's start your exercise experience:<h1> <br>
    
    <h2>Please Fill out the following Information<h2>
    
    <form action="payment.php" method="POST">
        Time: <input type="text" name="time"><br>
        Pick a Month:
        <select name="Month" id="Month">
            <option value="First">July</option>
            <option value="Second">June</option>
            <option value="Third">August</option>
            <option value="Fourth">September</option>
        </select><br>
        Please Pick Available Day: 
        <select name="day" id="day">
            <option value="First">Morning</option>
            <option value="Second">Noon</option>
            <option value="Third">AfterNoon</option>
            <option value="Fourth">LateNoght</option>
        </select><br>

        <input type="submit" value="Submit">
    </form>
    
    <body style="background-color: lightblue;">

<body>
</html>
