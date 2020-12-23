<?php

function is_current_page($page) {
    return Request::route()->getName() == $page;
}
