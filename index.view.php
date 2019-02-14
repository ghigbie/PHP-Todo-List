<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
          crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-dark bg-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"><?= PAGE_TITLE ?></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
        <ul>
            <?php foreach($todos as $todo): ?>
                <li><?= $todo ?></li>
            <?php endforeach; ?>
        </ul>
        <br>
        <ul>
            <?php foreach($todos as $todo) {
                echo "<li>$todo</li>";
            }?>
        </ul>
        <ul>
            <?php foreach($animals as $key => $value):?>
                <li>
                    <strong><?= ucwords($key) ?>: </strong>
                    <?= $value ?>
                </li>
            <?php endforeach; ?>

        </ul>
        <br>
        <ul>
            <?php foreach($tasks as $heading => $value):?>
               <li>
                   <strong><?= ucwords($heading) ?>: </strong>
                   <?= $value ?>
               </li>
            <?php endforeach; ?>
        </ul>
        <br>
        <ul>
            <li>
                <strong>Name: </strong>
                <?= $tasks['name']; ?>
            </li>
            <li>
                <strong>Due date: </strong>
                <?= $tasks['due']; ?>
            </li>
            <li>
                <strong>Assigned To: </strong>
                <?= $tasks['assigned_to']; ?>
            </li>
            <li>
                <strong>Completed: </strong>
                <?= $tasks['completed'] ? 'Complete' : 'Incomplete'; ?>
            </li>
        </ul>
        <div>
            <?= "<pre>" ?>
            <?= var_dump($animals) ?>
            <?= "</pre>" ?>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
            crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
            crossorigin="anonymous"></script>
</body>
</html>
