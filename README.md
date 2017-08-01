## Description
Integrate with [ionic login](https://github.com/RogerShenAU/ionic-login) starter app, provide server-side authorisation. This plugin can be downloaded via [PHP ionic login auth](https://github.com/RogerShenAU/php-ionic-login-auth)

## How to use
1. Setup your [ionic login](https://github.com/RogerShenAU/ionic-login) starter app
2. Download and upload to your site's root folder
3. Update/Add below code to [ionic login](https://github.com/RogerShenAU/ionic-login)/src/providers/post/post.ts, replace https://www.example.com with your website URL

	```bash
	this.authUrl = 'https://www.example.com/php-ionic-login-auth/login.php'; 
	```
4. Use below login details to test ionic app login  
   username: demo  
   password: demo
