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
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">What are the principles of analysis and design?</button>									
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>Analysis and design make up the preliminary phase of any project and its function is to identify feasibility, risk and rewards, problems and opportunities that will lead to a successful design. 
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo">What are website architectural requirements?</button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>Website architectural requirements means to improve the flow of a website. The requirements are that the website should be structured so that user can easily find information this means the segmentation of data. 
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">What are website design structures, including hierarchy and navigation design?</button>                     
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>Website design structures determine how the site is linked together. Hierarchy refers to the nesting of particular pages and navigation design is how easy it is to find a given page or piece of information. They interlock together to create an easy to use website. 
            </div>
        </div>
    </div>
	<div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">What are user-interface design requirements and production processes?</button>                     
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>User interface design requirements aims to ensure that the interface elements are easy to access, understand and use. Production processes are the processes and procedures used to create the user interface itself. 
            </div>
        </div>
    </div>
</div>
<body>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>