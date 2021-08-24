<?php

use JetBrains\PhpStorm\Pure;


if (!function_exists('getBaseUrlPath')) {
    function getBaseUrlPath(): string
    {
        if ( ! isset($_SERVER['PHP_SELF'])) {
            return '';
        }

        if (!empty($_SERVER['PHP_SELF'])) {
            return dirname($_SERVER['PHP_SELF']).'/';
        }

        return '';
    }
}
if (!function_exists('getAssetsUrlPath')) {
    function getAssetsUrlPath(): string
    {
        return getBaseUrlPath() . 'assets/';
    }
}
if (!function_exists('getMediaUrlPath')) {
    function getMediaUrlPath(): string
    {
        return getAssetsUrlPath() . 'media/';
    }
}

if (!function_exists('getMediaPath')) {
    function getMediaPath(): string
    {
        return getAssetsPath() . 'media/';
    }
}

if (!function_exists('getAssetsPath')) {
    function getAssetsPath(): string
    {
        global $_THEME_PATH;

        return public_path() . '/theme1/';
    }
}

if (!function_exists('isDarkMode')) {
    function isDarkMode(): bool
    {
       return config('theme.darkmode');
    }
}

if (!function_exists('getCurrentMode')) {
    function getCurrentMode(): string
    {
        if (isDarkMode() && isset($_REQUEST['mode']) && $_REQUEST['mode']) {
            return $_REQUEST['mode'];
        }

        return 'default';
    }
}

//if (!function_exists('getPageOptionsByPath')) {
//    function getPageOptionsByPath($path): string
//    {
//        if (Util::hasArrayValue(self::$config['pages'], $path)) {
//            return Util::getArrayValue(self::$config['pages'], $path);
//        } else {
//            return false;
//        }
//    }
//}

if (!function_exists('isProPage')) {
    function isProPage(): bool
    {
       return (bool) config('theme.pro_mode');
    }
}

if (!function_exists('isFreeVersion')) {
    function isFreeVersion(): bool
    {
        if (isset($_REQUEST['free'])) {
            return filter_var($_REQUEST['free'], FILTER_VALIDATE_BOOLEAN);
        }

        return false;
    }
}

if (!function_exists('setViewMode')) {
    function setViewMode(string $value): string
    {
        // force preview mode on server
        if (isset($_SERVER['SERVER_NAME']) && str_contains($_SERVER['SERVER_NAME'], 'esppt-pbb.com')) {
            $mode = 'preview';
        } elseif (isset($_REQUEST['viewMode']) && $_REQUEST['viewMode'] === 'release') {
            $mode = 'release';
        } else {
            $mode = $value;
        }

        return $mode;
    }
}

if (!function_exists('getViewMode')) {
    #[Pure] function getViewMode($mode): string
    {
        return setViewMode($mode);
    }
}

if (!function_exists('getDemo')) {
    #[Pure] function getDemo(): string
    {
        return 'theme1';
    }
}

//if (!function_exists('hasOption')) {
//    function hasOption($scope, $path = false): string
//    {
//        if (isset(self::$config[$scope])) {
//            if ($path === false) {
//                return isset(self::$config[$scope]);
//            } else {
//                return Util::hasArrayValue(self::$config[$scope], $path);
//            }
//        } else {
//            return false;
//        }
//    }
//}
//
//if (!function_exists('getOption')) {
//    function getOption($scope, $path = false, $default = null)
//    {
//        $array = ['product','preview','release'];
//        if (!self::hasOption($scope, $path)) {
//            return $default;
//        }
//
//        $result = array();
//
//        if (!isset(self::$config[$scope])) {
//            return null;
//        }
//
//        if ($path === false) {
//            $result = self::$config[$scope];
//        } else {
//            $result = Util::getArrayValue(self::$config[$scope], $path);
//        }
//
//        // check if its a callback
//        if (is_callable($result) && !is_string($result)) {
//            $result = call_user_func($result);
//        }
//
//        return $result;
//    }
//}

//if (!function_exists('getPageUrl')) {
//    function getPageUrl($path, $demo='', $mode = null): string
//    {
//        // Disable pro page URL's for the free version
//        if (isFreeVersion() === true && isProPage() === true) {
//            return "#";
//        }
//
//        $baseUrl = getBaseUrlPath();
//
//        $params = '';
//        if (isset($_REQUEST['type']) && $_REQUEST['type'] === 'html') {
//            // param keep in url
//            if (isset($_REQUEST['rtl']) && $_REQUEST['rtl']) {
//                $params = 'rtl/';
//            }
//
//            if ($mode !== null) {
//                if ($mode) {
//                    $params = $mode.'/';
//                }
//            } else {
//                if (isset($_REQUEST['mode']) && $_REQUEST['mode']) {
//                    $params = $_REQUEST['mode'].'/';
//                }
//            }
//
//            if (!empty($demo)) {
//                if (getViewMode('release') === 'release') {
//                    // force add link to other demo in release
//                    $baseUrl .= '../../'.$demo.'/dist/';
//                } else {
//                    // for preview
//                    $baseUrl .= '../'.$demo.'/'.$params;
//                }
//            } else {
//                if (getViewMode('release') === 'release') {
//                    // force add link to other demo in release
//                    $baseUrl .= '../../'.getDemo().'/dist/';
//                } else {
//                    // for preview
//                    $baseUrl .= '../'.getDemo().'/'.$params;
//                }
//            }
//
//            $url = $baseUrl.$path.'.html';
//
//            // skip layout builder page for generated html
//            if (str_contains($path, 'builder') && getViewMode('release') === 'release') {
//
//                if (!empty(getDemo())) {
//                    $path = getDemo().'/'.$path;
//                }
//
//                $url = self::getOption('product', 'preview').'/'.$path.'.html';
//            }
//        } else {
//            if (isset($_REQUEST['rtl']) && $_REQUEST['rtl']) {
//                $params = '&rtl=1';
//            }
//
//            if ($mode !== null) {
//                if ($mode) {
//                    $params = '&mode='.$mode;
//                }
//            } else {
//                if (isset($_REQUEST['mode']) && $_REQUEST['mode']) {
//                    $params = '&mode='.$_REQUEST['mode'];
//                }
//            }
//
//            if (!empty($demo)) {
//                // force add link to other demo
//                $baseUrl .= '../../'.$demo.'/dist/';
//            }
//
//            $url = $baseUrl.'?page='.$path.$params;
//        }
//
//        return $url;
//    }
//}

if (!function_exists('getSvgIcon')) {
    function getSvgIcon($path, $class = '', $svgClass = ''): string
    {
        $path = str_replace('\\', '/', $path);
        $full_path = $path;
        if ( ! file_exists($path)) {
            $full_path = getMediaPath().$path;

            if ( ! is_string($full_path)) {
                return '';
            }

            if ( ! file_exists($full_path)) {
                return "<!--SVG file not found: $path-->\n";
            }
        }

        $svg_content = file_get_contents($full_path);

        $dom = new DOMDocument();
        $dom->loadXML($svg_content);

        // remove unwanted comments
        $xpath = new DOMXPath($dom);
        foreach ($xpath->query('//comment()') as $comment) {
            $comment->parentNode->removeChild($comment);
        }

        // add class to svg
        if ( ! empty($svgClass)) {
            foreach ($dom->getElementsByTagName('svg') as $element) {
                $element->setAttribute('class', $svgClass);
            }
        }

        // remove unwanted tags
        $title = $dom->getElementsByTagName('title');
        if ($title['length']) {
            $dom->documentElement->removeChild($title[0]);
        }
        $desc = $dom->getElementsByTagName('desc');
        if ($desc['length']) {
            $dom->documentElement->removeChild($desc[0]);
        }
        $defs = $dom->getElementsByTagName('defs');
        if ($defs['length']) {
            $dom->documentElement->removeChild($defs[0]);
        }

        // remove unwanted id attribute in g tag
        $g = $dom->getElementsByTagName('g');
        foreach ($g as $el) {
            $el->removeAttribute('id');
        }
        $mask = $dom->getElementsByTagName('mask');
        foreach ($mask as $el) {
            $el->removeAttribute('id');
        }
        $rect = $dom->getElementsByTagName('rect');
        foreach ($rect as $el) {
            $el->removeAttribute('id');
        }
        $xpath = $dom->getElementsByTagName('path');
        foreach ($xpath as $el) {
            $el->removeAttribute('id');
        }
        $circle = $dom->getElementsByTagName('circle');
        foreach ($circle as $el) {
            $el->removeAttribute('id');
        }
        $use = $dom->getElementsByTagName('use');
        foreach ($use as $el) {
            $el->removeAttribute('id');
        }
        $polygon = $dom->getElementsByTagName('polygon');
        foreach ($polygon as $el) {
            $el->removeAttribute('id');
        }
        $ellipse = $dom->getElementsByTagName('ellipse');
        foreach ($ellipse as $el) {
            $el->removeAttribute('id');
        }

        $string = $dom->saveXML($dom->documentElement);

        // remove empty lines
        $string = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $string);

        $cls = array('svg-icon');

        if ( ! empty($class)) {
            $cls = array_merge($cls, explode(' ', $class));
        }

        $asd = explode('/media/', $path);
        if (isset($asd[1])) {
            $path = 'assets/media/'.$asd[1];
        }

        $output  = "<!--begin::Svg Icon | path: $path-->\n";
        $output .= '<span class="'.implode(' ', $cls).'">'.$string.'</span>';
        $output .= "\n<!--end::Svg Icon-->";

        return $output;
    }
}

if (!function_exists('get_svg_icon')) {
    function get_svg_icon($path, $class = null, $svgClass = null): string
    {
        $file_path = public_path(getMediaUrlPath().$path);

        if (!file_exists($file_path)) {
            return '';
        }

        $svg_content = file_get_contents($file_path);

        $dom = new DOMDocument();
        $dom->loadXML($svg_content);

        // remove unwanted comments
        $xpath = new DOMXPath($dom);
        foreach ($xpath->query('//comment()') as $comment) {
            $comment->parentNode->removeChild($comment);
        }

        // add class to svg
        if (!empty($svgClass)) {
            foreach ($dom->getElementsByTagName('svg') as $element) {
                $element->setAttribute('class', $svgClass);
            }
        }

        // remove unwanted tags
        $title = $dom->getElementsByTagName('title');
        if ($title['length']) {
            $dom->documentElement->removeChild($title[0]);
        }
        $desc = $dom->getElementsByTagName('desc');
        if ($desc['length']) {
            $dom->documentElement->removeChild($desc[0]);
        }
        $defs = $dom->getElementsByTagName('defs');
        if ($defs['length']) {
            $dom->documentElement->removeChild($defs[0]);
        }

        // remove unwanted id attribute in g tag
        $g = $dom->getElementsByTagName('g');
        foreach ($g as $el) {
            $el->removeAttribute('id');
        }
        $mask = $dom->getElementsByTagName('mask');
        foreach ($mask as $el) {
            $el->removeAttribute('id');
        }
        $rect = $dom->getElementsByTagName('rect');
        foreach ($rect as $el) {
            $el->removeAttribute('id');
        }
        $xpath = $dom->getElementsByTagName('path');
        foreach ($xpath as $el) {
            $el->removeAttribute('id');
        }
        $circle = $dom->getElementsByTagName('circle');
        foreach ($circle as $el) {
            $el->removeAttribute('id');
        }
        $use = $dom->getElementsByTagName('use');
        foreach ($use as $el) {
            $el->removeAttribute('id');
        }
        $polygon = $dom->getElementsByTagName('polygon');
        foreach ($polygon as $el) {
            $el->removeAttribute('id');
        }
        $ellipse = $dom->getElementsByTagName('ellipse');
        foreach ($ellipse as $el) {
            $el->removeAttribute('id');
        }

        $string = $dom->saveXML($dom->documentElement);

        // remove empty lines
        $string = preg_replace("/(^[\r\n]*|[\r\n]+)[\s\t]*[\r\n]+/", "\n", $string);

        $cls = array('svg-icon');

        if (!empty($class)) {
            $cls = array_merge($cls, explode(' ', $class));
        }

        $asd = explode('/media/', $path);
        if (isset($asd[1])) {
            $path = 'assets/media/'.$asd[1];
        }

        $output = "<!--begin::Svg Icon | path: $path-->\n";
        $output .= '<span class="'.implode(' ', $cls).'">'.$string.'</span>';
        $output .= "\n<!--end::Svg Icon-->";

        return $output;
    }
}
