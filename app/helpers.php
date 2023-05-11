<?php
    function setActive($url){
        return request()->routeIs($url) ? 'active' : '';
    }
?>