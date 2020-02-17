<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax PHP</title>
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a href="#" class="navbar-brand">Task App</a>
        
        <ul class="navbar-nav ml-auto">
            <form class="form-inline my-2 my-lg-0">
                <input type="search" id="search" class="form-control mr-sm-2" placeholder="Search your task">
                <button type="submit" class="btn btn-success my-2 my-sm-0">
                    Search
                </button>
            </form>
        </ul>
    </nav>
    
    <div class="container p-4">
        <div class="row">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <form id="task-form">
                            <div class="form-group">
                                <input type="text" id="name" placeholder="Task Name" class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea id="description" cols="30" rows="10" class="form-control" placeholder="Task Description"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">
                                Save Task
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <col-md-7>
                <table class="table table-bordered table-sm bg-dark text-white">
                    <thead>
                        <tr>
                            <td>Id</td>
                            <td>Name</td>
                            <td>Description</td>
                        </tr>
                    </thead>
                    <tbody id="tasks"></tbody>
                </table>
            </col-md-7>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="app.js"></script>

</body>

</html>