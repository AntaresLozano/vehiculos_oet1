<?php
function sanitize($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}

function redirect($url) {
    header("Location: $url");
    exit();
}

function displayError($message) {
    return "<div class='error'>$message</div>";
}

function displaySuccess($message) {
    return "<div class='success'>$message</div>";
}
?>