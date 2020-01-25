<?php
$ui = true;
$warp = "warp-page";
$pageActive['settings'] = 'active';

function genEdit($type, $id, $name, $place, $value=false, $style=false, $js=false, $onstr=false) {
    
    switch($type) {
        case 'password':
        case 'text':
            $html = '
            <div style="'.$style.'" data-name="'.$name.'" class="md-form col-10 offset-1 my-1 py-1">
                <input type="'.$type.'" id="'.$id.'" name="'.$name.'" value="'.$value.'" class="theme-panel theme-title form-control">
                <label class="theme-title ml-3 '.($value ? 'active':'').'" for="'.$id.'">'.$place.'</label>
            </div>'.($js ? '<script>'.$js.'</script>':'').'
                ';
        break;
        case 'select':
            $option = '';
            foreach($value as $key => $val) {
                if (is_array($val)) {
                    $option .= '<option value="'.$key.'" selected>'.$val[0].'</option>';
                } else {
                    $option .= '<option value="'.$key.'">'.$val.'</option>';
                }
            }
            $html = '
            <select style="'.$style.'" data-name="'.$name.'" id="'.$id.'" name="'.$name.'" class="theme-panel theme-title mdb-select md-form col-10 offset-1 my-1 py-1">
                <option class="theme-panel theme-title" value="" disabled>'.$place.'</option>
                '.$option.'
            </select>'.($js ? '<script>'.$js.'</script>':'').'
            <script>$("#'.$id.'").materialSelect();</script>
                ';
        break;
        case 'multiselect':
            $option = '';
            foreach($value as $key => $val) {
                if (is_array($val)) {
                    $option .= '<option class="theme-panel theme-title" value="'.$key.'" selected>'.$val[0].'</option>';
                } else {
                    $option .= '<option class="theme-panel theme-title" value="'.$key.'">'.$val.'</option>';
                }
            }
            $html = '

            <select style="'.$style.'" id="'.$id.'" name="'.$name.'[]" data-name="'.$name.'" class="theme-panel theme-title mdb-select colorful-select dropdown-primary md-form col-10 offset-1 my-1 py-1" multiple searchable="'.$lang['search_here'].'">
                <option class="theme-panel theme-title" value="" disabled>'.$place.'</option>
                '.$option.'
            </select>'.($js ? '<script>'.$js.'</script>':'').'
            <script>$("#'.$id.'").materialSelect();</script>
            ';
        break;
    }

    echo $html;
}

$p1_include = $thisSitePath.'/user/settings/';
switch($url_p1) {
    default: 
        #base
        $p1_include .= 'base.php';
    break;
    case "security":
        #security
        $title = $lang['ui_settings_menu_security'];
        $p1_include .= 'security.php';
    break;
}
include_once($p1_include);

$bigData['warp-page-helper'] = 'settings_page';
$bigData['html']['warp-page-helper'] = '
        <div class="col-12 h-100 theme-panel border border-primary rounded offset-1 text-center">
            <h5>
                <a class="d-block my-1 py-1" href="/settings" onclick="return nav.go(this);"><span data-lang="ui_settings_menu_base"></span></a>
                <a class="d-block my-1 py-1" href="/settings/security" onclick="return nav.go(this);"><span data-lang="ui_settings_menu_security"></span></a>
            </h5>
        </div>
';
?>