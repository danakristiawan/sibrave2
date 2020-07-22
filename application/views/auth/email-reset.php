<html style="--blue: #007bff;
    --indigo: #6610f2;
    --purple: #6f42c1;
    --pink: #e83e8c;
    --red: #dc3545;
    --orange: #fd7e14;
    --yellow: #ffc107;
    --green: #28a745;
    --teal: #20c997;
    --cyan: #17a2b8;
    --white: #fff;
    --gray: #6c757d;
    --gray-dark: #343a40;
    --primary: #007bff;
    --secondary: #6c757d;
    --success: #28a745;
    --info: #17a2b8;
    --warning: #ffc107;
    --danger: #dc3545;
    --light: #f8f9fa;
    --dark: #343a40;
    --breakpoint-xs: 0;
    --breakpoint-sm: 576px;
    --breakpoint-md: 768px;
    --breakpoint-lg: 992px;
    --breakpoint-xl: 1200px; font-family: sans-serif;
    line-height: 1.15; -webkit-tap-highlight-color: transparent; 
    display: block;
    color: -internal-root-color;">

<body style="margin: 0;
    font-family: -apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji; font-size: 1rem; font-weight: 400; line-height: 1.5; color: #212529; text-align: left; background-color: #fff; display: block;">

  <div class="container" style="margin-top: 1rem!important; max-width: 1140px; width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto; display: block;">

    <div class="card" style="position: relative; display: flex; flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid rgba(0,0,0,.125);
    border-radius: .25rem;">

      <div class="card-header" style="padding: .75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgba(0,0,0,.03);
    border-bottom: 1px solid rgba(0,0,0,.125); display: block;">Sibrave</div>

      <div class="card-body" style="flex: 1 1 auto;
    padding: 1.25rem; display: block;">

        <h5 class="card-title" style="margin-bottom: .75rem; font-size: 1.25rem; font-weight: 500;
    line-height: 1.2; box-sizing: border-box; display: block; margin-block-start: 1.67em;
    margin-block-end: 1.67em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;"><?= "Hai, " . $data['nama'] . "!"; ?></h5>

        <p class="card-text" style="margin-top: 0;
    margin-bottom: 1rem; display: block;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;">Sepertinya Anda lupa password, tenang saja, itu merupakan hal biasa. Silahkan tekan tombol dibawah ini untuk melakukan reset password.</p>

        <a href="<?= base_url() . 'auth/resetpassword?email=' . $data['email'] . '&token=' . $data['token']; ?>" class="btn btn-sm btn-primary" style="padding: .25rem .5rem;
    font-size: .875rem;
    line-height: 1.5;
    border-radius: .2rem; color: #fff;
    background-color: #007bff;
    border-color: #007bff; display: inline-block;
    font-weight: 400; text-align: center;
    vertical-align: middle; user-select: none; border: 1px solid transparent; transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; text-decoration: none; cursor: pointer;">Reset Password</a>

      </div>

    </div>

  </div>

</body>

</html>