<!-- PROJECT LOGO -->
<div align="center">
  <h3 align="center">laravel-microservice-projectA</h3>

  <p align="center">
    Dockerized Laravel9 Project
    <br />
    <b>Docker Images</b>
    <br />
    php:8.1-fpm
    |
    mysql:8.0
    |
    phpmyadmin/phpmyadmin
    |
    nginx:latest
    |
    redis:3.0
  </p>
 
</div>

<!-- GETTING STARTED -->
## Getting Started
1. Make sure up and running the <a target="_blank" href="https://github.com/gihandilanka-github/laravel-microservice-projectB">laravel-microservice-projectB</a> microservice in your machine first. Unless ``http://api.microservice-b.test:8084/api/v1/customer/list`` this link work in your browser. Use below command to clone <b>laravel-microservice-projectB</b> and follow the instruction of the <a target="_blank" href="https://github.com/gihandilanka-github/laravel-microservice-projectB/blob/main/README.md">README.md</a> file
   ```sh
   git clone https://github.com/gihandilanka-github/laravel-microservice-projectB.git
   ```
2. Clone the repo (laravel-microservice-projectA)
   ```sh
   git clone https://github.com/gihandilanka-github/laravel-microservice-projectA.git
   ```
3. Go inside the cloned directory
    ```
   cd laravel-microservice-projectA
4. Configure the ```.env``` file
    ```
   cp .env.example .env
   ```
5. Run this command to up docker containers
    ```
   docker-compose up -d --build
   ```
6. Run composer install
    ```
   docker-compose exec app composer install
   ```
7. Generate APP_KEY in .```env```
    ```
   docker-compose exec app php artisan key:generate
   ```
8. Add these two records to ```/etc/hosts``` file
    ```
   127.0.0.1    api.microservice-a.test
   127.0.0.1    pma.microservice-a.test
   ```
9. Open the phpmyadmin in the browser. You can see the ```microserviceA``` database
    ```
    http://pma.microservice-a.test:8081
    ```
10. Give these laravel directory permissions
    ```
    sudo chmod -R 777 storage/logs/
    sudo chmod -R 777 storage/framework/
    ```    
11. You can check the following API url, it will return the customers as ```json``` response
    ```
    http://api.microservice-a.test:8082/api/v1/customer/list
    ```
    
#### Note:
When we call this ``http://api.microservice-a.test:8082/api/v1/customer/list`` endpoint, it is called to the <a target="_blank" href="https://github.com/gihandilanka-github/laravel-microservice-projectB">laravel-microservice-projectB</a>
 microservice. So you have to setup the laravel-microservice-projectB project first in your machine.
         

