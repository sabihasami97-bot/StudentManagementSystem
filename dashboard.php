<!DOCTYPE html>
<html>
<head>
<title>University Student Portal</title>
<style>
body{
    margin:0;
    font-family:Arial;
    background:#f4f4f4;
}
.header{
    background:#0066cc;
    color:white;
    padding:20px;
    text-align:center;
    font-size:30px;
}
.sidebar{
    width:220px;
    height:100vh;
    background:#222;
    position:fixed;
}
.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    padding:15px;
    border-bottom:1px solid gray;
}
.sidebar a:hover{
    background:#0066cc;
}
.content{
    margin-left:230px;
    padding:30px;
}
.card{
    width:220px;
    background:white;
    display:inline-block;
    padding:20px;
    margin:15px;
    text-align:center;
    border-radius:10px;
    box-shadow:0 0 10px gray;
}
button{
    padding:10px 20px;
    background:#0066cc;
    color:white;
    border:none;
    border-radius:5px;
    cursor:pointer;
}
button:hover{
    background:#004080;
}
</style>
</head>

<body>

<div class="header">
Metropolitan University Student Portal
</div>

<div class="sidebar">

<a href="dashboard.php">🏠 Dashboard</a>

<a href="index.php">➕ Add Student</a>

<a href="view.php">📋 View Students</a>

<a href="search.php">🔍 Search Student</a>

<a href="edit.php">✏ Edit Student</a>

<a href="logout.php">🚪 Logout</a>

</div>

<div class="content">

<div class="card">
<h2>Add Student</h2>
<a href="index.php"><button>Open</button></a>
</div>

<div class="card">
<h2>View Students</h2>
<a href="view.php"><button>Open</button></a>
</div>

<div class="card">
<h2>Search Student</h2>
<a href="search.php"><button>Open</button></a>
</div>

<div class="card">
<h2>Edit Student</h2>
<a href="view.php"><button>Open</button></a>
</div>

</div>

</body>
</html>