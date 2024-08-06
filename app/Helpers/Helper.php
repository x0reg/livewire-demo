<?php
if (!function_exists('showToast')) {
    function showToast($type, $msg)
    {
        switch ($type) {
            case 'success':
                return flash()
                    ->option('position', 'bottom-center')
                    ->option('timeout', 3000)
                    ->success($msg, [], "Thành Công");
                break;
            case 'error':
                return flash()
                    ->option('position', 'bottom-center')
                    ->option('timeout', 3000)
                    ->error($msg, [], "Thất Bại");
                break;
            case 'warning':
                return flash()
                    ->option('position', 'bottom-center')
                    ->option('timeout', 3000)
                    ->warning($msg, [], "Cảnh Báo");
                break;
            default:
                return false;
                break;
        }
    }
}
