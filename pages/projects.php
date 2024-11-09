<header>    
    <?php include ('../components/header.php');?>
</header>

<section class="filter-container">
    <label for="category-filter">Filter by Category:</label>
    <select name="category-filter" id="category-filter">
        <option value="all">All</option>
        <option value="webDevelopment">Web Development</option>
        <option value="design">Design</option>
        <option value="miscellaneous">Miscellaneous</option>
    </select>
</section>

<section class="project-grid">
    <div class="project-card" data-category="webDevelopment">
        <h3 class="font-subheader">Project 1: Portfolio Website</h3>
        <p class="font-body">This simple portfolio website showcasing my skills, projects, and contact information.</p>
        <a href="#">Live Demo</a> | <a href="https://Github.com/loveSand/Portfolio" target="_blank">GitHub Repo</a>
    </div>
    <!--I'll add more here later-->
</section>

<footer>
    <?php include ('../components/footer.php');?>
</footer>