<?php
include 'db.php';

if($_SERVER["REQUEST_METHOD"]==="POST"){

$id=$_POST["id"];

$sql=$conn->prepare("delete from products where id=?");
$sql->bind_param("s",$id);

if($sql->execute()){

header("Location:dashboard.php");
}
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
             <nav
                class="navbar navbar-expand-sm navbar-light bg-light"
             >
                <div class="container">
                    
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php" aria-current="page"
                                    >Home
                                    <span class="visually-hidden">(current)</span></a
                                >
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="insert.php">Insert</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="update.php">Update</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link active" href="delete.php">Delete</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">logout</a>
                            </li>
                            
                        </ul>
                       
                    </div>
                </div>
             </nav>
             
        </header>
        <main>

        <div
            class="container border shadow my-4 p-4 col-5 rounded"
        >
            <form action="" method="POST">

            <div class="mb-3">
                <label for="" class="form-label">Id</label>
                <input
                    type="text"
                    class="form-control"
                    name="id"
                    id=""
                    aria-describedby="helpId"
                    placeholder=""
                />
               
            </div>
            <button
                type="submit"
                class="btn btn-primary"
            >
                Submit
            </button>
            
            </form>
        </div>
        
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
