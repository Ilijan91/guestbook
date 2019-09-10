<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guestbook entries</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <h1>List of all Guestbook entries</h1>
        <div class="row">
            <div class="col-xs-12">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Title</th>
                    <th scope="col">Email</th>
                    <th scope="col">Comment</th>
                    <th scope="col">Delete entry</th>
                    </tr>
                </thead>
                <tbody>
                   <?php foreach($this->users as $user)
                  echo "<tr>
                    <th scope='row'>{$user->id}</th>
                        <td>{$user->user_name}</td>
                        <td>{$user->title}</td>
                        <td>{$user->email}</td>
                        <td>{$user->comment}</td>
                        <td><a role='button' submit='delete' class='btn btn-primary' href='/guestbook/site/delete&id={$user->id}'>Delete</a><td>
                    </tr>";
                   ?>
                   
                </tbody>
                </table>
            </div>
        </div>
        <div class="form-group">
        <a role="button" class="btn btn-primary" href="index">Back to home page</a>
     </div>
    </div>
    

   
</body>
</html>
