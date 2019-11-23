var mainTpl = {
    nav: {
        tplLoaderPage: '<div class="col-12 text-center"><div class="row py-1 px-1"><div class="col-12 my-5 text-center"><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div></div></div>',
        tplLoaderModule: '<div class="col-12 text-center"><div class="row py-1 px-1"><div class="col-12 text-center"><div class="preloader-wrapper big active"><div class="spinner-layer spinner-blue-only"><div class="circle-clipper left"><div class="circle"></div></div><div class="gap-patch"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></div></div></div>'
    },
    userApi: {
        usersStr: '<div id="module-fast-login-{%i1%}" class="col-4 my-1"><div class="row my-0 py-0"><div class="col-10 offset-1 text-right mx-4 my-0 pt-1"><i style="cursor: pointer;" onclick="userApi.auth.fastLoginDelete({%uidDelete%}, {%i2%});" class="fas fa-times fa-sm text-muted"></i></div><div class="col-12" style="cursor:pointer;" onclick="userApi.auth.fastLogin({%uid%})"><div class="col-12 text-center my-1 pt-1"> {%icon%} </div><div class="col-12 text-center my-1 pb-1"><span class="text-muted"> {%name%} {%surname%} </span></div></div></div></div>'
    },
    modal: {
        notice: {
            id: 'noticeWindow',
            title: '<span data-lang="app_user_notifications"></span>',
            content: `
            <div id="warp-notice" class="row"></div>
            `,
            footer: 'false',
            bg: 'var(--theme-background)'
        },
        reg: {
            id: 'modalAuthReg',
            title: '<span data-lang="app_user_reg_reg"></span>',
            content: `
<form id="app-reg" class= "row my-0 py-0 px-3">
    <div class="col-12 md-form md-outline mt-1 mb-2">
        <input type="text" id="user-name" name="reg-name" class="form-control">
        <label class="mx-3" for="user-name"><span data-lang="app_reg_name"></span></label>
    </div>
    <div class="col-12 md-form md-outline mt-1 mb-2">
        <input type="text" id="user-surname" name="reg-surname" class="form-control">
        <label class="mx-3" for="user-surname"><span data-lang="app_reg_surname"></span></label>
    </div>
    <div class="col-12 md-form md-outline mt-1 mb-2">
        <input type="text" id="user-email" name="reg-mail" class="form-control">
        <label class="mx-3" for="user-email"><span data-lang="app_reg_mail"></span></label>
    </div>
    <div class="col-12 md-form md-outline mt-1 mb-2">
        <input type="password" id="user-password" name="reg-password" class="form-control">
        <label class="mx-3" for="user-password"><span data-lang="app_reg_password"></span></label>
    </div>
    <div class="col-12 mt-1 mb-2">
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="user-gender" value="male" name="reg-gender">
            <label class="form-check-label" for="user-gender"><span data-lang="gender_male"></span></label>
        </div>
        <div class="form-check form-check-inline">
            <input type="radio" class="form-check-input" id="user-gender2" value="female" name="reg-gender">
            <label class="form-check-label" for="user-gender2"><span data-lang="gender_female"></span></label>
        </div>
    </div>
    <div class="col-12 text-center my-0">
        <button type="button" class="btn btn-outline-primary btn-rounded waves-effect z-depth-0 my-0" onclick="appForms.go('app-reg', 'auth/reg');"><span data-lang="app_reg_go"></span></button>
    </div>
</form>
            `,
            footer: 'false',
            bg: 'var(--theme-background)'
        },
        account_confirm_exit: {
            id: 'confirm-account-exit',
            title: '<span data-lang="app_user_logout_confirm"></span>',
            content: `
<div class="row py-1">
    <div class="col-12 text-center mt-1 mb-3">
        <h4 class="h5 text-primary"><span class="danger-text" data-lang="app_user_logout_title"></span></h4>
    </div>
    <div class="col-12 text-center mb-1">
        <a class="btn btn-danger btn-rounded btn-lg py-3" role="button" href="/?act=logout&hash=`+ config.hash.logout +`" onclick="return nav.go(this);"><span class="white-text" data-lang="app_user_logout_btn"></span></a>
    </div>
</div>
            `,
            footer: `<div class="col-12 text-center"><span onclick="$('#confirm-account-exit').modal('hide');" style="cursor:pointer;" class="text-muted py-1"><span data-lang="app_user_logout_warn"></span></span></div>`,
            bg: 'var(--theme-background)'
        },
    }
}