<?php include 'components/header.php';

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

switch ($page) {
    case 'skills':
        include 'pages/skills.php';
        break;
    case 'projects':
        include 'pages/projects.php';
        break;
    case 'about':
        include 'pages/about.php';
        break;
    case 'contact':
        include 'pages/contact.php';
        break;
    default:
        include 'pages/home.php';
        break;
}

include 'components/footer.php'; ?>
