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
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">What are programming controls and design structures?</button>									
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>Programming controls and design structure all dictate the flow and direction of the program, there are 3 different types of programming structures. They are Sequence flow which is a straight flow of instructions working from one instruction to the next in order. Selection logic is a conditional flow where one or many flows of code depending on the conditions. Then there is iterative flow where the code will keep iterating through itself until a condition is met. 
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">What are website testing procedures?</button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>Website testing procedures are as follows: Functional testing is testing the source code against functional requirement to make sure that the code meets current coding specification. Usability testing is done with external testers who test the navigation and user experience side of the program. Compatibility Testing which is testing to make sure that the website is functional and available on all different browsers and platforms. Performance testing is testing the speed of the website itself, responsiveness, load times, ect. Security testing is testing the security of the websites back end and user data.
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">What are website debugging methods?</button>                     
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>Website debugging methods are tools and programs that developers will use to identify weakness and problems in the website. This often involves external tools and different debugging methodologies. There are debugging libraries that are used in combination with dividing code that is used to diagnose problems with the website. 
            </div>
        </div>
    </div>
	<div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">What are website coding techniques?</button>                     
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>website coding techniques refer to the process of building the website itself. Websites are made up of many different components and so there needs to be an order to the code so that everything will work. This typically means starting with the front end such as html then doing styling with say css then doing any javascript if necessary then you want to connect it up to the backend. 
            </div>
        </div>
    </div>
</div>
<body>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>