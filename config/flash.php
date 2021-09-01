<?php
function flash($name = "", $message = "", $class = "red")
{
    if (!empty($name)) {
        if (!empty($name) && !empty($message)) {
            $_SESSION[$name] = $message;
            $_SESSION[$name . "_class"] = $class;
        }
        //ADDED:
        elseif (isset($_SESSION[$name]) && isset($_SESSION[$name . "_class"])) {
            // elseif (empty($message) && empty($class) && !empty($name) && !empty($_SESSION[$name])) {
            echo '<div style="background: ' . $_SESSION[$name . "_class"] . '; width: 100%;" class="' . $_SESSION[$name . "_class"] . '" id="msg-flash">' . $_SESSION[$name] . '</div>';
            unset($_SESSION[$name]);
            unset($_SESSION[$name . "_class"]);
        }
    }
}
?>
