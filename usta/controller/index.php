<?php

if (session('usta_email')){
    header("Location:".usta_url('main_page'));
}else{
    header("Location:".usta_url('login'));
}
