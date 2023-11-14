<?php


if (!function_exists('set_active_peserta')) {
    function set_active_peserta($uri, $output = "border-4 border-l-0 border-y-0 border-r-[#005857] hover:border-0")
    {
        if (is_array($uri)) {
            foreach ($uri as $u) {
                if (Route::is($u)) {
                    return $output;
                }
            }
        } else {
            if (Route::is($uri)) {
                return $output;
            }
        }
    }
}
if (!function_exists('set_active_admin')) {
    function set_active_admin($uri, $output = "bg-blue-500/13 font-semibold text-slate-700
    font-semibold text-slate-700")
    {
        if (is_array($uri)) {
            foreach ($uri as $u) {
                if (Route::is($u)) {
                    return $output;
                }
            }
        } else {
            if (Route::is($uri)) {
                return $output;
            }
        }
    }
}
