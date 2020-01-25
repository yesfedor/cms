<?php
$ui = true;
$warp = "warp-page";
$pageActive['edit'] = 'active';

function genEdit($type, $id, $name, $place, $value=false, $style=false, $js=false, $onstr=false) {
    
    switch($type) {
        case 'text':
            $html = '
            <div style="'.$style.'" data-name="'.$name.'" class="md-form col-10 offset-1 my-1 py-1">
                <input type="text" id="'.$id.'" name="'.$name.'" value="'.$value.'" class="theme-panel theme-title form-control">
                <label class="theme-title ml-3 active" for="'.$id.'">'.$place.'</label>
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

$p1_include = $thisSitePath.'/user/edit/';
switch($url_p1) {
    default: 
        #base
        $p1_link_base = true;
        $p1_include .= 'base.php';
    break;
    case "contacts":
        #contacts
        $p1_link_contacts = true;
        $p1_include .= 'contacts.php';
    break;
    case "interests":
        #interests
        $p1_link_interests = true;
        $p1_include .= 'interests.php';
    break;
    case "life":
        #life
        $p1_link_life = true;
        $p1_include .= 'life.php';
    break;
}
include_once($p1_include);

$p1_link_class = 'black-text disabled';

$bigData['warp-page-helper'] = 'edit_page';
$bigData['html']['warp-page-helper'] = '
        <div class="col-12 h-100 theme-panel border border-primary rounded offset-1 text-center">
            <h5>
                <a class="d-block my-1 py-1" href="/edit" onclick="return nav.go(this);"><span data-lang="ui_edit_menu_base"></span></a>
                <a class="disabled d-none my-1 py-1" href="/edit/contacts" onclick="return nav.go(this);"><span data-lang="ui_edit_menu_ontacts"></span></a>
                <a class="disabled d-none my-1 py-1" href="/edit/interests" onclick="return nav.go(this);"><span data-lang="ui_edit_menu_interests"></span></a>
                <a class="disabled d-none my-1 py-1" href="/edit/life" onclick="return nav.go(this);"><span data-lang="ui_edit_menu_life"></span></a>
            </h5>
        </div>
';

?>