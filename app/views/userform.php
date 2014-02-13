<h1>User info</h1>

<?= Form::open() ?>
<?= Form::label('username', 'Username ') ?>
<?= Form::text('username') ?>
<br>
<?= Form::label('password', 'Password') ?>
<?= Form::password('password') ?>
<br>
<?= Form::label('color', 'Favourite color') ?>
<?= Form::select('color', array('red' => 'red', 'green' => 'green', 'blue' => 'blue')) ?>
<br>
<?= Form::submit('Send it!') ?>
<?= Form::close() ?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>




