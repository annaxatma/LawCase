<nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="background-color: #886750">
    <a class="navbar-brand mb-0 h1 px-3" style="color: #ffffff"> Law Cases</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ ($title ==='Home') ? 'active' : ''}}" style="color: #ebcaa8" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title ==='Case Files') ? 'active' : ''}}" style="color: #ebcaa8" href="/Case_Files">Case Files</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ ($title ==='Crime Types') ? 'active' : ''}}" style="color: #ebcaa8" href="/Crime_Types">Crime Types</a>
        </li>
      </ul>
    </div>
</nav>