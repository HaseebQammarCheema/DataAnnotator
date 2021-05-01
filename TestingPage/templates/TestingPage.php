{% extends 'base.html' %}

{% block head %}
    {% load static %}
    <title>DataAnnotator - Rapid Annotation, Powered by AUT RND Group</title>
    <link href="{% static 'css/TestingPage.css' %}" rel="stylesheet" />
    <script src="{% static 'js/TestingPage.js' %}"></script>
{% endblock %}

{% block content %}
    {% csrf_token %}
    <title> EXAMPLE </title>
    <style>
        .myDivTwo
		{
			background-color: royalblue;
			text-align: left;
			border: 4px outset whitesmoke;
		}
        .content
		{
			background-color: rgb(4, 161, 101);
			text-align: left;
			border: 4px outset whitesmoke;
		}
    </style>
    <div class="landing-container unselectable">
        <p class="tagline">
            <span class="tagline-component tagline-component-main">
                Sign-Up Page
            </span>
            
            <span class="tagline-component tagline-component-sub">
                Please enter your credentials below
            </span>
        </p>
        
        <div class="myDivTwo">
            <br>
        <body>
                <form name = "posting_status" method = "post">
                    Valid  Email : <input type = "text" name = "email" id = "email" size = "44">
                    <br><br>
                    Re-Enter Email: <input type = "text" name = "emailV1" size = "40">
                    <br><br><hr><br><br>
                    Enter Username    : <input type = "text" name = "user" id = "user" size = "34">
                    <br><br>
                    Re-Enter Username : <input type = "text" name = "user" id = "user" size = "30">
                    <br><br><hr><br><br>
                    Enter password    : <input type = "text" name = "user" id = "user" size = "34">
                    <br><br>
                    Re-Enter password : <input type = "text" name = "user" id = "user" size = "30">
                    <br><br><hr><br>
                </form>
                <input type = "reset" value = "Reset">
                <input type = "submit" name = "Submit"  value = "checkPage" formaction = "home.html">
                <br><br><hr> 
        </div>
        <div class = "content">
            <?php
                $sql_host="cmslamp14.aut.ac.nz";
                $sql_user="szs7792";
                $sql_pass="66Everyone6";
                $sql_db="szs7792";
                
                $conn = @mysqli_connect($sql_host,$sql_user,$sql_pass) or die("<p>Unable to connect to the database server.</p>" . "<p>Error code " . mysqli_connect_errno() . ": " . mysqli_connect_error()) . "</p>";
                echo "<p><font color = green>Successfully connected to the database server.</font></p>";
                
                @mysqli_select_db($conn, "szs7792") or die("<p>Unable to select the database.</p>" . "<p>Error code " . mysqli_errno($conn) . ": " . mysqli_error($conn) . "</p>");
                echo "<p><font color = green>Successfully opened the database.</font></p><br><hr><br>";

                $result_obtained = mysqli_query($conn, "SELECT * FROM status_processing_final_lastCISE");
			
                //This condirion to check whether the variable contains something or not. If nothing is contained within it, a new table is created with relevant types and variables.
                if(empty($result_obtained))
                {
                    $sqlString = "CREATE TABLE status_processing_final_lastCISE (statuscode VARCHAR(25) NOT NULL, status VARCHAR(255) NOT NULL, 
                    share VARCHAR(25) NOT NULL, date VARCHAR(25) NOT NULL, permission VARCHAR(255))";
                    
                    //Checking if the query has run successfully. If there is an error, relevant information will be provided to the user. 
                    $resultQuery = @mysqli_query($conn,$sqlString) or die ("<p> Unable to execute the query. </p>" . "<p> Error Code ". mysqli_errno($conn) . ": " . mysqli_error($conn)) . "</p>";
                    echo "<p> Successfully created the table. </p>";
                }
			?>
        </div>
    </body>
        <hr><br>
    </div>
{% endblock %}