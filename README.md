#### Commands:

php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"  

php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"  

php composer-setup.php  

php -r "unlink('composer-setup.php');"



#### To create a admin:

U have to connect an account with 

"cosinus94" as username=>"pseudo"  
And "passwordCOS9154" as password=>"mot de passe"


#### Create a directory config, with a file config.yml  

 routes:  
    home: 'Default:home'
    login: 'Security:login'
    logout: 'Security:logout'
    register: 'Security:register'
    admin: 'Default:admin'
    admin_contributeur: 'Default:admin_contributeur'
    admin_responsable: 'Default:admin_responsable'
    error: 'Default:error'



defaut_route: 'login'

db_config:
    name: 'test_eocene'
    host: 'localhost'
    user: 'root'
    pass: ''
