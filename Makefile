SHELL = bash
PROJECT_NAME = eldencz

pre-deploy:
	@echo -e "\n$$(date +'%y-%m-%d %H:%M:%S') deploy start" >> ~/$(LOGDIR_PATH)/$(PROJECT_NAME)_deploylog

post-deploy: directories permissions composer-install migrations cacherm
	@echo "$$(date +'%y-%m-%d %H:%M:%S') deploy finish" >> ~/$(LOGDIR_PATH)/$(PROJECT_NAME)_deploylog

composer-install:
	@echo "$$(date +'%y-%m-%d %H:%M:%S') composer install start" >> ~/$(LOGDIR_PATH)/$(PROJECT_NAME)_deploylog
	composer install
	@echo "$$(date +'%y-%m-%d %H:%M:%S') composer install finish" >> ~/$(LOGDIR_PATH)/$(PROJECT_NAME)_deploylog

migrations:
	@echo "$$(date +'%y-%m-%d %H:%M:%S') no migrations yet" >> ~/$(LOGDIR_PATH)/$(PROJECT_NAME)_deploylog

cacherm:
	rm -rf temp/*
	@echo "$$(date +'%y-%m-%d %H:%M:%S') cache deleted" >> ~/$(LOGDIR_PATH)/$(PROJECT_NAME)_deploylog

directories:
	@mkdir -p log
	@mkdir -p temp
	@mkdir -p www
	@echo "Directories created"

permissions:
	@chmod 777 log
	@chmod 777 temp
	@chmod 777 -R www
	@echo "Permissions updated"


local-init: pre-deploy post-deploy
