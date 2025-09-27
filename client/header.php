<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./public/logo.png" alt="logo" width="200" height="68" class="logo">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" href="./">Home</a>
        </li>
        <?php if (!isset($_SESSION['user']['username'])) { ?>
          <li class="nav-item">
            <a class="nav-link" href="?login=true">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?signup=true">SignUp</a>
          </li>
          
          
        <?php } else { ?>
          <li class="nav-item">
            <a class="nav-link" href="./server/request.php?logout=true">Log out</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="?ask=true">Ask A Question</a>
          </li>
        <?php } ?>
        <li class="nav-item">
          <a class="nav-link" href="./">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./">Latest Question</a>
        </li>
      </ul>
    </div>
  </div>
</nav>