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
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">The three major programming control structures.</button>									
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>The three main control structures are: 
-	Sequential logic
-	Selection logic
-	Iteration logic
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingTwo">
            <button type="button" class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">Hypertext markup language (HTML) and markup languages.</button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>Markup languages refer to a text encoding system which syntax included sets of symbols inserted to control the structure and formatting of the text. It is used to display documents and to enrich content. 
            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingThree">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">Cascading style sheets (CSS).</button>                     
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>CSS is a style sheet language which purpose is for describing the presentation of a document writing in HTML or XML. It is used to style and space web documents. 
            </div>
        </div>
    </div>
	<div class="accordion-item">
        <h2 class="accordion-header" id="headingFour">
            <button type="button" class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">Syntax and uses of programming languages.</button>                     
        </h2>
        <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#myAccordion">
            <div class="card-body">
                <p>Syntax is the symbols and formatting that defines a language. The syntax defines how the computer will interpret the coding.   
            </div>
        </div>
    </div>
</div>
<body>
    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>