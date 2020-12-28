<?php

function is_current_page ($page) {
    return Request::route()->getName() == $page;
}

function prev_product_route ($pasta_types, $product_id) {
    return array_key_exists($product_id - 1, $pasta_types) ? route('product-details', ['id' => $product_id - 1]) : route('product-details', ['id' => count($pasta_types) - 1]);
}

function next_product_route ($pasta_types, $product_id) {
    return array_key_exists($product_id + 1, $pasta_types) ? route('product-details', ['id' => $product_id + 1]) : route('product-details', ['id' => 0]);
}

function prev_product_img ($pasta_types, $product_id) {
    return array_key_exists($product_id - 1, $pasta_types) ? $pasta_types[$product_id - 1]["src"] : $pasta_types[count($pasta_types) - 1]["src"];
}

function next_product_img ($pasta_types, $product_id) {
    return array_key_exists($product_id + 1, $pasta_types) ? $pasta_types[$product_id + 1]["src"] : $pasta_types[0]["src"];
}
