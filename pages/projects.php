<?php include ('../components/header.php');?>

<div class="filter-container">
    <label for="category-filter">Filter by Category:</label>
    <select name="category-filter" id="category-filter">
        <option value="all">All</option>
        <option value="web-development">Web Development</option>
        <option value="design">Design</option>
        <option value="miscellaneous">Miscellaneous</option>
    </select>
</div>

<div class="project-grid" id="project-grid">
    <div class="project-card" data-category="web-development">
        <h3>Project 1: Portfolio Website</h3>
        <p>This simple portfolio website showcasing my skills, projects, and contact information.</p>
        <a href="#">Live Demo</a> | <a href="#">GitHub Repo</a>
    </div>
    <!--I'll add more here later-->
</div>


<?php include ('../components/footer.php');?>
