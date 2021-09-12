<?php

function setFlash(string $message) {
    $_SESSION['message'] = $message;
}

function getFlash() {
    if (empty($_SESSION['message'])) {
        return null;
    }

    $message = $_SESSION['message'];
    unset($_SESSION['message']);

    return $message;
}
