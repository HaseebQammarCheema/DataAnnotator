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
                echo "HELLO";
			?>
        </div>
    </body>
        <hr><br>
    </div>
{% endblock %}