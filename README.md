<<<<<<< HEAD

# Features
- Add user
- Delete user
- Ban, Unban user
- Register new user sent to email token
- Forget password
- Role user level
- Edit user profile
- Gravatar user profile
- Recaptcha by Google
- Compress HTML Settings, for more speed
- Secure Account (Notification to Review Activity Log In, Will Sent via Email like Google) :new: :tada:
- Active or Inactive Recaptcha :new:
- Add Settings :new:
- Add Theme :new: :tada:

# Settings
- database.php
```
'hostname' => 'localhost', 'username' => '', 'password' => '', 'database' => '',
```

- config.php
```
//Link URL
$config['base_url'] = 'http://adminweb.com/admin/';
// Sent email from:
$config['register'] = 'admin@gmail.com';
$config['forgot'] = 'admin@gmail.com';
```

- ReCAPTCHA.php (Library)<br>
```
private $dataSitekey = ""; //Your SiteKey`
private $lang = "en"; //Lang ReCAPTCHA
public $secret = ''; //Secret
```

# User Level
- is_admin
- is_author
- is_editor
- is_subscriber

# Install
- Clone or download
- Import Sql file
- Do Settings
- Done

# login
- Pass : admin
- User : admin@gmail.com

# Check User Level
controller.php
```
//check user level
if(empty($data['role'])){
    redirect(site_url().'main/login/');
}
$dataLevel = $this->userlevel->checkLevel($data['role']);
//check user level

if($dataLevel == "is_admin"){
  (your code here)
}
```


 
Please feel free to send me an email if you have any problems. 
Thank you so much, my email : saulaaronmoctezuma19@gmail.com.
=======
Robuspack
<img width="100%" alt="Dnato System Login" src="http://anfec.org.mx/wp-content/uploads/2018/05/rrp.png">

<img width="100%" alt="Robuspack" src="https://robuspack.com/img/empresas/mantenimiento.png">

>>>>>>> 3ca633ddf977474f5162ba742b7bbb723f11e606
