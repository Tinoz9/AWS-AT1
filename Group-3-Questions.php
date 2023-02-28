<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Index</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a href="https://192.168.56.93/TaskOne/Index.php" class="navbar-brand">Index</a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="https://192.168.56.93/TaskOne/Contact.php" class="nav-item nav-link active">Contact</a>
                <a href="https://192.168.56.93/TaskOne/Group-1-Questions.php" class="nav-item nav-link">Group 1</a>
                <a href="https://192.168.56.93/TaskOne/Group-2-Questions.php" class="nav-item nav-link">Group 2</a>
                <a href="https://192.168.56.93/TaskOne/Group-3-Questions.php" class="nav-item nav-link">Group 3</a>
				<a href="https://192.168.56.93/TaskOne/Group-4-Questions.php" class="nav-item nav-link">Group 4</a>
            </div>
        </div>
    </div>
</nav>
<div class="accordion" id="myAccordion">
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingOne">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">Authentication and web security.</button>									
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>Refers to authentication in web Security. Authentication is making sure that someone is who they say they are most commonly with a username and password. This is enforced in websites all the times whenever there is an account that is made. This is done to protect users. 
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Hypertext transfer protocol (HTTP).</button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>HTTP is a protocol that is about communication between web clients and servers. Any time there is an exchange in data between the two that is done by the Hypertext transfer protocol. 
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Session management.</button>                     
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>Is used as the exchange mechanism between the user and the server or application. It refers to the sequence of requests and responses associated with the users. It is a way to manage information requests and keep them secure and fast. 
            </div>
        </div>
    </div>
	<div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">Stateless programming.</button>                     
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>Stateless programming is a way of programming which forces the program to be stateless. It doesn’t maintain a state instead the data required for the function to execute are passed as inputs. Then the functions uses the data, processes it and returns it back.  
            </div>
        </div>
    </div>
</div>
<body>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>