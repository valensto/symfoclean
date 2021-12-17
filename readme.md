to start new project run
    - docker compose -d up
    - docker exec www_docker_symfony composer create-project symfony/skeleton project
    - sudo chown -R $USER ./
    
go to http://127.0.0.1:8741 