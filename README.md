Informe de Despliegue del Proyecto

1. URL de los Virtual Hosts

Backoffice Laravel: http://backoffice.kcarbonell.ord.ddaw.com
Frontend JS Static: http://static.kcarbonell.ord.ddaw.com

2. Nombre y versión de cada uno de los servicios instalados en el servidor. 

Nginx: v1.18.0
PHP: v8.2
Composer: v2.7
Node.js: v18.x
npm: v9.x
json-server: v0.17.x
Laravel: v10.x
Git: v2.34+
Deployer: v7.x (instalado globalmente via Composer

3. Usuarios utilizados y permisos concedidos.
deployer: Usuario sin privilegios de root, con permisos sobre /var/www/backoffice y /var/www/pwec. Tiene claves SSH configuradas y acceso por GitHub Actions.
batoi: Usuario local para desarrollo y pruebas. Realiza despliegues locales manuales con dep deploy.

• Imagen con la vista previa de las aplicaciones y web desplegada 

Web Laravel

![image](https://github.com/user-attachments/assets/de8eb535-3bb9-47af-ac5b-c306d5752101)


Web estatica

![image](https://github.com/user-attachments/assets/ab39e054-8783-4304-b77a-87eac7d007cc)

una captura del log de acceso en el que se muestre que se han producido los accesos. 
Web Laravel
![image](https://github.com/user-attachments/assets/efe79c09-e3a7-4fa5-bd21-3038227b5e42)
Web Estatica

![image](https://github.com/user-attachments/assets/a8274d3d-3e8a-4592-a85b-f60c582c6df8)

• Captura de pantalla en la que se muestre la configuración de la máquina, la IP publica asociada. 

Lemp
![image](https://github.com/user-attachments/assets/3b83da96-2449-44c6-9b1f-bc938d80ee00)

BD

![image](https://github.com/user-attachments/assets/3e0481e1-769e-41df-9d02-1aaddeb80af7)

• Captura de pantalla en la que se muestre los ficheros de configuración de los vhost. 

Laravel

![image](https://github.com/user-attachments/assets/038d482e-7a2a-41c4-9f05-26028672360c)


JS

![image](https://github.com/user-attachments/assets/47b88778-28e6-47eb-84dc-9199d8cc3495)


• Captura de pantalla en la que se muestre un despliegue satisfactorio antes y después de realizar un cambio en el repositorio. 


Antes
![image](https://github.com/user-attachments/assets/83a1fc52-13f2-48cc-ac24-205f859b91d3)

![image](https://github.com/user-attachments/assets/beeb326b-52ec-4fb2-ab2a-36f748e011ba)


Despues

![image](https://github.com/user-attachments/assets/ad616a33-e22b-4fdb-b4f1-458a42f2f51f)


![image](https://github.com/user-attachments/assets/ed5d51e9-8408-4b67-9854-0a635d0d3aff)



